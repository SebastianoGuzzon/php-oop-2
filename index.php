
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <header>
        <div class="logo">
         
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Prodotti</a></li>
                <li><a href="#">Promozioni</a></li>
                <li><a href="#">Contatti</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="catalogo">
    
    <?php

// Classe Prodotto
class Prodotto {
  protected $immagine;
  protected $titolo;
  protected $prezzo;
  protected $categoria;
  protected $tipoArticolo;

  public function __construct($immagine, $titolo, $prezzo, $categoria, $tipoArticolo) {
      $this->immagine = $immagine;
      $this->titolo = $titolo;
      $this->prezzo = $prezzo;
      $this->categoria = $categoria;
      $this->tipoArticolo = $tipoArticolo;
  }

  public function stampaCard() {
      echo '<div class="card">';
      echo '<img src="' . $this->immagine . '" alt="' . $this->titolo . '">';
      echo '<h2>' . $this->titolo . '</h2>';
      echo '<p>Prezzo: ' . $this->prezzo . '</p>';
      echo '<p>Categoria: ' . $this->categoria->getNome() . '</p>';
      echo '<p>Tipo articolo: ' . $this->tipoArticolo . '</p>';
      echo '</div>';
  }
}


class Categoria {
    protected $nome;
    protected $icona;

    public function __construct($nome, $icona) {
        $this->nome = $nome;
        $this->icona = $icona;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIcona() {
        return $this->icona;
    }
}

$cane = new Categoria('Cane', 'icona_cane.jpg');
$gatto = new Categoria('Gatto', 'icona_gatto.png');
$uccelli = new Categoria('Uccelli', 'icona_uccelli.png');
$pesci = new Categoria('Pesci', 'icona_pesci.png');


$prodotto1 = new Prodotto('https://m.media-amazon.com/images/I/711K-07keuS._AC_SX522_.jpg', 'Cibo per cani', 10.99, $cane, 'Prodotto');
$prodotto2 = new Prodotto('immagine2.jpg', 'Giochi per gatti', 5.99, $gatto, 'Gioco');
$prodotto3 = new Prodotto('immagine3.jpg', 'Cuccia per cani', 49.99, $cane, 'Cuccia');
$prodotto4 = new Prodotto('immagine4.jpg', 'Acquario', 29.99, $pesci, 'Prodotto');


$prodotto1->stampaCard();
$prodotto2->stampaCard();
$prodotto3->stampaCard();
$prodotto4->stampaCard();

?>

    </div>
</body>
</html>
