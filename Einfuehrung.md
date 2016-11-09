<! DOCTYPE HTML>
	<html>
		<head>
			<title>oh shit waddup</title>
				<meta charset = "UTF-8">
				<meta name = "PHP-Einstieg" content = "dank memes">
		</head>
		<body>
			<h1>dem mank demes boii</h1>
			<h2>created by killerkeemstar</h2>
			<?php
				$vorname = 'Pascal';
				$nachname = 'Frei';
				$ort = 'Aadorf';
				$alter = '17 Jahre';
				$hobby = 'salt';

				$satz1 = 'Hallo mein Name ist ' . $vorname . ' ' . $nachname . '. ';
				$satz2 = 'Ich bin ' . $alter. ' alt.';
				$os[] = "Windows";
				$os[] = "macOS";
				$os[] = "Android";
				$os[] = "iOS";

				$array = array('name' => 'dank');

				//print_r($array);

				//echo $satz1;
				//echo $satz2;
				
				//for-Schleife
				$counter = 0;
				for($counter; $counter <=420; $counter++)
				{
					if($counter == 420 || $counter == 88)
					{
					echo '<p>' . $counter . '</p>';
					}
					else
					{
						echo '<p>Trump is President</p>';
					}
				}
				
				//foreach
				foreach($os as $nr => $os)
				{
					echo "<br>OS " . $nr . " ist " . $os;
				}
			
			
			
			?>
		</body>