<body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form method="GET">
            <br>
            <div class="form-group">
              <label for="Name">Name</label>
                <input required class="form-control" type="text" name="Name" value="" placeholder ="Bitte den Namen eingeben">
            </div>
            <div class="form-group">
              <label for="Farbe">Farbe</label>
                <input required class="form-control" type="color" name="Farbe" value="#f5f5f5" placeholder ="Bitte die Farbe eingeben">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
                <input required class="form-control" type="email" name="Email" value="" placeholder ="Bitte Ihre Email eingeben">
            </div>
            <div class="form-group">
              <label for="Bauart">Bauart</label>
                <select required class="form-control" type="text" name="Bauart">
                <option value="cabrio" selected>Cabrio</option>
                <option value="limousine">Limousine</option>
                <option value="Kombi">Kombi</option></select>
            </div>

            <button type="submit" class="btn btn-default"><i class="fa fa-handshake-o" aria-hidden="true"></i>
              &nbsp;&nbsp;
              Absenden</button>


          </form>

        </div>
        <div class="col-md-12">


    <?php

    session_start();


      include('classes.php');

    /*  if(isset($_GET['Name'])){
        print_r($_GET['Name']);
      } else{
        echo 'Bitte Namen eingeben';
      }*/

      if(!empty($_GET['Name'])){
        $name = trim($_GET['Name']);
        echo '<br>Der Name lautet: ' . $name;
      }

      if(!empty($_GET['Farbe'])){
        $farbe = $_GET['Farbe'];
        echo '<br>Die Farbe lautet: ' . $farbe;
      }

      if(!empty($_GET['Email'])){
        $email = $_GET['Email'];
        echo '<br>Ihre Email lautet: ' . $email;
      }

      if(!empty($_GET['Bauart'])){
        $bauart = $_GET['Bauart'];
        echo '<br>Die Bauart lautet: ' . $bauart;
      }


    /*  //Get Variablen zwischenspeichern
      print_r($_GET['Name']);
      print_r($_GET['Farbe']);
      print_r($_GET['Email']);
      print_r($_GET['Bauart']);*/

      $golf = new Auto;
      echo '<h1> Fahrzeugdaten vom Golf </h1>';
      $golf->setColor('Schwarz');
      $golf->setTreibstoff('Diesel');
      $golf->setBauart('Kombi');

      $golf->openTankdeckel('Golf');
      $golf->openTankdeckel('Golf');
      $golf->openTankdeckel('Golf');

      $lambo = new Auto;
      echo '<h1> Fahrzeugdaten vom Lambo </h1>';
      $lambo->setColor('Orange');
      $lambo->setTreibstoff('Benzin');
      $lambo->setBauart('Sportwagen');

      $lambo->openTankdeckel('Lambo');
      $lambo->openTankdeckel('Lambo');
      $lambo->openTankdeckel('Lambo');

      $lambo->getGesamtOefnungen();

    ?>



  </div>
    </div>
      </div>

  </body>