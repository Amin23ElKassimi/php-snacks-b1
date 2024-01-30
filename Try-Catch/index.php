<!-- Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona, che accetti esclusivamente un numero intero.
 Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione! -->


 <?php
class Persona{
    public $name;
    public $lastname;
    public $age;

    public function __construct(string $_name, string $_lastname, int $_age){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
    }

    public function setAge($age) {
        if (!is_int($age)) {
            throw new InvalidArgumentException('L\'età deve essere un numero intero.');
        }

        $this->age = $age;
    }
    

    
    public function getAge() {
        return $this->age;
    }

    public function getName() {
        return $this->name;
    }

}


// Utilizzo della classe Persona
try {
    // Creare un'istanza della classe Persona
    $persona = new Persona('Mario','Bianchi', 30);

    // Impostare l'età con un numero intero
    $persona->setAge('AJD');

    // Tentare di impostare l'età con una stringa (genererà un'eccezione)
    // $persona->setAge('non un numero');

    // Stampare informazioni sulla persona
    echo 'Nome: ' . $persona->getName() . '<br>';
    echo 'Età: ' . $persona->getAge() . '<br>';
} catch (InvalidArgumentException $e) {
    echo 'Errore: ' . $e->getMessage();
}









