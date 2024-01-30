<!-- Parte 1:
Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona,
che accetti esclusivamente un numero intero.
Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione! -->


<!-- Parte 2:
Includendo con try e catch una chiamata a setAge con una stringa come argomento,
catturare l'eccezione e invece di emettere un errore bloccante,
scrivere in pagina il messaggio di errore -->

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

    // Funzione setAge() 
    public function setAge($age) {
        if (!is_int($age)) {
            throw new InvalidArgumentException('L\'età deve essere un numero intero.');
        }
        $this->age = $age;
    }
    
    // Ottieni eta
    public function getAge() {
        return $this->age;
    }
    // Ottieni Nome
    public function getName() {
        return $this->name;
    }

}



// Creare un'istanza della classe Persona
$persona = new Persona('Mario','Bianchi', 30);


// Utilizzo della classe Persona
try {
    // v Qui v provo ad Impostare l'età con un numero intero
    $persona->setAge('wqww');
    // Tentare di impostare l'età con una stringa (genererà un'eccezione)
    // $persona->setAge('non un numero');
    
    // Stampo informazioni sulla persona
    echo 'Nome: ' . $persona->getName() . '<br>';
    echo 'Età: ' . $persona->getAge() . '<br>';


} catch (Exception $e) {
    echo 'Errore: ' . $e->getMessage();
}










