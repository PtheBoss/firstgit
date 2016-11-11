<?php

//Klassen
//echo $_SERVER['PHP_SELF'];
class Auto
{

    private $farbe;//Schwarz, Weiss, Silber, Grau, Blau
    private $kraftstoff;//Diesel, Benzin
    private $bauart; //Cabrio; Limousine, Kombi
    private $modell; //Golf, 320i, C220
    private $email;
    private $betankungen = 0;
    private $daten;
    private $antwort;
    private $status;
    private $code; //HTTP Statuscode 200 OK, 401 nicht OK

    function __construct()
    {
      $this->daten = true;
      $this->antwort = 'Alles OK!';
      $this->code = 200;

    }

    public function setModell($modell)
    {
        $this->modell = $modell;
    }

    public function zeigeAuto()
    {
      if ($this->daten) {
        $this->daten = array(
          'status' => true,
          'antwort'=> $this->antwort,
          'modell' => $this->modell,
          'farbe' => $this->farbe,
          'email' => $this->email,
          'bauart' => $this->bauart,
          'code' => $this->code);
      }
      else{
        $this->code = 401;
        $this->antwort = 'Fehler!';
        $this->daten = array(
          'status' => false,
          'antwort' => $this->antwort,
          'code' => $this->code);
      }
      //php mus die Daten im JSON-Format aufbereiten;
      //bevor diese zurückgschickt werden!
      print_r ($this->daten);
      echo json_encode($this->daten, $this->code);
    }
   /* public function setKraftstoff($kraftstoff)
    {
        $this->kraftstoff = $kraftstoff;
        echo '<br>';
        echo "<ul><li>Bitte mit " . $this->kraftstoff . "betanken!</li></ul>";
        echo '<br>';

    }*/

    /*public function setFarbe($farbe)
    {
        $this->farbe = $farbe;
        echo "<ul><li>Die Farbe dieses Autos ist " . $this->farbe . "!</li></ul>";
        echo '<br>';
    }*/

    public function setBauart($bauart)
    {
        $this->bauart = $bauart;
    }

    public function setEmail($email)
    {
      $this->email = $email;
    }


}
?>
