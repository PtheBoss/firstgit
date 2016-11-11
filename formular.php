<! DOCTYPE HTML>
	<html>
            <script
			  src="http://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
            <script src = "app.js"></script>
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
                    <form method = "POST">
                        <div class = "form-group">
                            <label for = "Alter">
                            <input class = "form-control" type = "text" name = "alter" value = "" placeholder = "Bitte Alter eingeben">
                            </label>
                        </div>
                        <form method = "POST">
                        <div class = "form-group">
                            <label for = "Vorname">
                            <input class = "form-control" type = "text" name = "modell" value = "" placeholder = "Bitte das Modell eingeben">
                            </label>
                        </div>
                        <form method = "POST">
                        <div class="form-group">
                        <label for="Farbe">Farbe</label>
                        <input required class="form-control" type="color" name="Farbe" value="#f5f5f5" placeholder ="Bitte die Farbe eingeben">
                         </div>
                        <form method = "POST">
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
                        <button type="button" onclick="firstFunc()" class = "form-group">
                            <i class = "fa fa-fire"></i>
                            &nbsp;&nbsp;
                            JavaScriptChnöpfli
                        </button>
                    </form>
                    <div id="ergebnis" class="hidden">
                    </div>
                    <div id="fehler" class="hidden">
                    </div>
                </div>
            </div>

			<?php

               //session_start();


                include('classes.php');

                $modell;
                $farbe;
                $email;
                $bauart;


                /*  if(isset($_POST['Name'])){
                    print_r($_POST['Name']);
                } else{
                    echo 'Bitte Namen eingeben';
                }*/

               /* if(!empty($_POST['modell'])){
                    $modell = trim($_POST['modell']);
                    echo '<br>Das Modell ist: ' . $modell;
                }

                if(!empty($_POST['Farbe'])){
                    $farbe = $_POST['Farbe'];
                    echo '<br>Die Farbe lautet: ' . $farbe;
                }

                if(!empty($_POST['Email'])){
                    $email = $_POST['Email'];
                    echo '<br>Ihre Email lautet: ' . $email;
                }

                if(!empty($_POST['Bauart'])){
                    $bauart = $_POST['Bauart'];
                    echo '<br>Die Bauart lautet: ' . $bauart;


      }*/

			?>
		</body>
	</html>
