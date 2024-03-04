<?php


interface Prestito {
    public function presta();
    public function restituisci();
}


abstract class MaterialeBibliotecario implements Prestito {
    protected static $contatoreMateriale = 0;

    public function presta() {

        self::$contatoreMateriale--;
    }

    public function restituisci() {
      
        self::$contatoreMateriale++;
    }
}


class Libro extends MaterialeBibliotecario {
    private $titolo;
    private $autore;
    private $annoPubblicazione;

    public function __construct($titolo, $autore, $annoPubblicazione) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreMateriale++; 
    }

    public static function contaLibri() {
        return self::$contatoreMateriale;
    }
}


class DVD extends MaterialeBibliotecario {
    private $titolo;
    private $regista;
    private $annoPubblicazione;

    public function __construct($titolo, $regista, $annoPubblicazione) {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreMateriale++; 
    }

    public static function contaDVD() {
        return self::$contatoreMateriale;
    }
}


$libro1 = new Libro("Il Signore degli Anelli", "J.R.R. Tolkien", 1954);
$libro2 = new Libro("1984", "George Orwell", 1949);
$dvd1 = new DVD("Pulp Fiction", "Quentin Tarantino", 1994);

echo "Numero totale di libri nella biblioteca: " . Libro::contaLibri() . "\n";
echo "Numero totale di DVD nella biblioteca: " . DVD::contaDVD() . "\n";

$libro1->presta();
$libro2->presta();
echo "Dopo il prestito, il numero totale di libri nella biblioteca: " . Libro::contaLibri() . "\n";

$libro1->restituisci();
echo "Dopo la restituzione, il numero totale di libri nella biblioteca: " . Libro::contaLibri() . "\n";
