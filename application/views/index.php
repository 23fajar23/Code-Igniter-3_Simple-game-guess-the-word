<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tebak Kata</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<center>
<h3>~ Tebak Kata ~</h3>
Petunjuk : <?php echo $data->clue; ?>
<br><br>

<form method="post" autocomplete="off" action="<?= base_url('point') ?>">
	<input type="hidden" value="<?php echo $data->kata; ?>" id="word" name="word">
	<?php
	for ($i=1; $i <= strlen($data->kata) ; $i++) { 
		if ($i == 3 || $i == 7) {
			?> 
				<input class="input-field" value="<?php echo $data->kata[$i-1]; ?>" type="text" id="data<?php echo $i-1; ?>" name="data<?php echo $i-1; ?>" maxlength="1" readonly required>
			<?php
		}else{
			?> 
				<input class="input-field" type="text" id="data<?php echo $i-1 ?>" name="data<?php echo $i-1; ?>" maxlength="1" required>
			<?php
		}
	}
	?>

	<p>
		<button class="btn-send" type="submit">Jawab</button>
	</p>
</form>

</center>

</body>
</html>
