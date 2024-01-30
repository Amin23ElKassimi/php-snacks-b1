<!-- Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona, che accetti esclusivamente un numero intero.
 Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione! -->


 <?php
class Product{
    public $name;
    public $lastname;
    public $age;
    public $imageUrl;

    public function __construct(string $_name, string $_lastname, float $_age, string $_imageUrl ){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
        $this->imageUrl = $_imageUrl;
    }

    public function setAge($age) {
        if (!is_int($age)) {
            throw new InvalidArgumentException('L\'età deve essere un numero intero.');
        }

        $this->age = $age;
    }
}








