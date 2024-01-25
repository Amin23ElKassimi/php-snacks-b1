<!-- Create una nuova classe che rappresenti un Pokemon e che abbia almeno cinque proprieta, tre metodi ed il costruttore.
Microbonus: creo un'altra classe che aggiungo al pokemon per composizione che configuri il tipo di pokemon (aria, terra, ecc.) -->




<?php

class Pokemon {
    // Proprietà
    private $nome;
    private $tipo;
    private $livello;
    private $puntiSalute;
    private $attacco;

    // Costruttore
    public function __construct($nome, $tipo, $livello, $puntiSalute, $attacco) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->livello = $livello;
        $this->puntiSalute = $puntiSalute;
        $this->attacco = $attacco;
    }

    // Metodo per ottenere il nome del Pokémon
    public function getNome() {
        return $this->nome;
    }

    // Metodo per ottenere i punti salute del Pokémon
    public function getPuntiSalute() {
        return $this->puntiSalute;
    }

    // Metodo per ottenere i punti salute del Pokémon
    public function getTipo() {
        return $this->tipo;
    }


}

// Creare un'istanza di Pokemon
$pokemon1 = new Pokemon("Pikachu", "Elettrico", 5, 50, 8);

// Utilizzare i metodi della classe
echo "Nome: " . $pokemon1->getNome() . "<br>";
echo "Tipo: " . $pokemon1->getTipo() . "<br>";
echo "Punti Salute: " . $pokemon1->getPuntiSalute() . "<br>";


