Consideremos un esquema de figuras geométricas de dos dimensiones. Pueden ser
 circunferencias, cuadrados o triángulos.
 Realice un programa que implemente las siguientes funcionalidades.
 1. El sistema solicita la creación de alguna figura.
 a. Ejemplo: > Que clase de figura desea crear [C]irculo, [T]riangulo, Cu[A]drado
 ? →A
 b. Ingrese el lado del cuadrado :
 2. Luego de generar una figura, que muestre todos sus atributos
 3. Luego de generar una figura que muestre su superficie
 4. Modificar el programa para que permita crear muchas figuras. Esto es que después
 de cargar una, pregunta si se desea continuar creando.
 5. Las figuras deben poder ser cargadas a un arreglo.
 6. Al finalizar de cargar las figuras debe poder imprimir los valores de todas las figuras
 7. Mostrar la suma de todas las superficie
 <?php
 
class Figura {
    public $tipo;
    public $lado;
    public $superficie;

    public function __construct($tipo, $lado) {
        $this->tipo = $tipo;
        $this->lado = $lado;
        $this->calcularSuperficie();
    }

    public function calcularSuperficie() {
        switch ($this->tipo) {
            case 'C':
                $this->superficie = pi() * ($this->lado / 2)**2;
                break;
            case 'T':
                $this->superficie = ($this->lado**2) * sqrt(3) / 4;
                break;
            case 'A':
                $this->superficie = $this->lado**2;
                break;
            default:
                $this->superficie = 0;
        }
    }

    public function mostrarAtributos() {
        echo "Tipo de figura: " . $this->tipo . "\n";
        echo "Lado: " . $this->lado . "\n";
        echo "Superficie: " . $this->superficie . "\n";
    }
}

// Arreglo para almacenar las figuras
$figuras = [];

do {
    $tipo = strtoupper(readline("¿Qué clase de figura desea crear [C]írculo, [T]riángulo, Cu[A]drado? "));
    $lado = readline("Ingrese el lado de la figura: ");

    // Crear la figura y agregarla al arreglo
    $figura = new Figura($tipo, $lado);
    $figuras[] = $figura;

    // Mostrar los atributos de la figura creada
    echo "Atributos de la figura creada:\n";
    $figura->mostrarAtributos();

    // Mostrar la superficie de la figura creada
    echo "Superficie de la figura creada: " . $figura->superficie . "\n";

    $continuar = readline("¿Desea continuar creando figuras? (S/N): ");
} while (strtoupper($continuar) == 'S');

// Imprimir los valores de todas las figuras
echo "Valores de todas las figuras:\n";
foreach ($figuras as $indice => $figura) {
    echo "Figura " . ($indice + 1) . ":\n";
    $figura->mostrarAtributos();
}

// Calcular y mostrar la suma de todas las superficies
$sumaSuperficies = array_sum(array_column($figuras, 'superficie'));
echo "La suma de todas las superficies es: " . $sumaSuperficies . "\n";
?>
