
<!DOCTYPE HTML>
<html>
	<head>
		<title>Kamen Škare Papir</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Christian Clark 0246094971">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
       		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- End Bootstrap -->
	</head>
	<body style="margin: 20px;">

       <?php
        $ksp = $_POST['ksp'];
		$random = rand(1,3);
		$kspRZ = '';
		$randPrijevod = '';
		#1 kamen, 2 skare, 3 papir
		switch ($ksp) {
                    case "✊":
						$kspRZ = 1;
                        break;
                    case "✌":
						$kspRZ = 2;
                        break;
                    case "✋":
						$kspRZ = 3;
                        break;
                }
		print '
		<h1 style="margin-bottom:10px;font-size:14px;">Kamen, Škare, Papir</h1>
		<form action="" method="post" id="calculator">
		    <div class="form-group">
			<label>Odaberite <i>Škare</i>, <i>Kamen</i> ili <i>Papir</i></label>
			<input type="submit" name="ksp" value="✊" class="btn btn-secondary">
            <input type="submit" name="ksp" value="✌" class="btn btn-secondary">
            <input type="submit" name="ksp" value="✋" class="btn btn-secondary">
		    </div>
		    <div class="form-group">';
			if ($kspRZ == $random) {
			    print '<div class="btn btn-info">Bacili ste isto! Pokušajte opet!</div>';
			}
			else if(($kspRZ == 1) && ($random == 3)) {
			    print '<div class="btn btn-danger">Kompjuter dobiva! ✊ < ✋ </div>';
			}
			else if(($kspRZ == 2) && ($random == 1)) {
			    print '<div class="btn btn-danger">Kompjuter dobiva! ✌ < ✊ </div>';
			}
			else if(($kspRZ == 3) && ($random == 2)) {
			    print '<div class="btn btn-danger">Kompjuter dobiva! ✋ < ✌ </div>';
			}
			else if(($random == 1) && ($kspRZ == 3)) {
			    print '<div class="btn btn-success">Pobijedili ste! ✋ > ✊ </div>';
			}
			else if(($random == 2) && ($kspRZ == 1)) {
			    print '<div class="btn btn-success">Pobijedili ste! ✊ > ✌ </div>';
			}
			else if(($random == 3) && ($kspRZ == 2)) {
			    print '<div class="btn btn-success">Pobijedili ste! ✌ > ✋ </div>';
			}
			switch ($random) {
                    case "1":
						$randPrijevod = '✊';
                        break;
                    case "2":
						$randPrijevod = '✌';
                        break;
                    case "3":
						$randPrijevod = '✋';
                        break;
                }
			print '<p style="margin-top:10px;">Kompjuter je bacio '.$randPrijevod.'</p>';

		    print '
		    </div>
		</form>';
    	?>
</body>
</html>