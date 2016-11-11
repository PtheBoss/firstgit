<! DOCTYPE HTML>
	<html>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
			<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
			<style>
				body {font-family: Oswald}
			</style>
		<head>
			<title>Gerade Zahlen bis 1500</title>
				<meta charset = "UTF-8">
				<meta name = "PHP-Einstieg" content = "Übungen">
		</head>
		<body>
			<h1>OOP mit PHP</h1>
            <h2>Objektorientierte Entwicklung</h2>

            <div class = "container">
                <div class = "row">
                    <div class = "col-md-12">
                    <br>
                    <form method = "GET">
                        <div class = "form-group">
                            <label for = "Alter">
                            <input disabled class = "form-control" type = "text" name = "alter" value = "" placeholder = "Bitte Alter eingeben">
                            </label>
                        </div>
                        <form method = "GET">
                        <div class = "form-group">
                            <label for = "Vorname">
                            <input class = "form-control" type = "text" name = "Name" value = "" placeholder = "Bitte Name eingeben">
                            </label>
                        </div>
                        <form method = "GET">
                        <div class = "form-group">
                            <label for = "Nachname">
                            <input class = "form-control" type = "color" name = "Farbe" value = "#f5f5f5"> 
                            </label>
                        </div>
                        <form method = "GET">
                        <div class = "form-group">
                            <label for = "PLZ">
                            <input class = "form-control" type = "text" name = "email" value = "" placeholder = "Bitte Email eingeben">
                            </label>
                        </div>
                        <div class = "form-group">
                            <select class = "form-control" title = "Bauart">
                                <option>Limousine</option>
                                <option>Cabrio</option>
                                <option>Kombi</option>
                            </select>
                        </div>
                        <button class = "form-group">
                            <i class = "fa fa-envelope-o"></i>
                            &nbsp;&nbsp;
                            Formulardaten absenden
                        </button>    
                    </form>
                    </div>
                </div>
            </div>
			
			<?php
                include('classes.php');
               
                
                //erstes Auto
                $golf = new Auto();
                $golf->setModell('VW Golf');
                $golf->setKraftstoff('Diesel');
                $golf->setFarbe('Silber');
                $golf->setBauart('Kompakt');
                $golf->deckelOeffnen();

                $a5 = new Auto();
                $a5->setModell('Audi A5');
                $a5->setKraftstoff('Benzin');
                $a5->setFarbe('Weiss');
                $a5->setBauart('Cabrio');
                $a5->deckelOeffnen();

                $name = @$_GET['Name'];
                $farbe = @$_GET['Farbe'];
                $email = @$_GET['email'];
                $bauart = @$_GET['Bauart'];

                /*if(isset($_GET['name']))
                {
                    $name =$_GET['name'];
                }*/

                if(!empty(@$_GET['name']))
                {
                    $name = $_GET['name'];
                }

                else
                {
                    echo 'Geben Sie den Namen ein!<br>';
                }

                if(!empty(@$_GET['Farbe']))
                {
                    $name = $_GET['Farbe'];
                }

                else
                {
                    echo 'Geben Sie die Farbe ein<br>';
                }

                if(!empty(@$_GET['email']))
                {
                    $name = $_GET['email'];
                }

                 else
                {
                    echo 'Geben Sie die Emailadresse ein!<br>';
                }

                if(!empty(@$_GET['Bauart']))
                {
                    $name = $_GET['Bauart'];
                }

                 else
                {
                    echo 'Wählen sie eine Bauart aus!<br>';
                }

			?>
		</body>
	</html>