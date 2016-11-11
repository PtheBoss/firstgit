<?php
    include('classes.php');
    @$modell = $_POST['modell'];
    @$email = $_POST['email'];
    @$farbe = $_POST['farbe'];
    @$bauart = $_POST['bauart'];
    //@$kraftstoff = $_POST['kraftstoff'];
    //print_r($_POST);
    if(!empty($modell) && !empty($bauart) && !empty($email))
    {
        $auto = new Auto;
        $auto->setModell();
        $auto->setBauart();
        $auto->setEmail();
        $auto->zeigeAuto();
    }
    else {
      echo false;
    }
?>
