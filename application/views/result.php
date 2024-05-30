<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil Point</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	Point yang anda dapat adalah <?php echo $point; ?>
	<br><br>

	<Button id="myBtn" class="btn-success">Simpan Poin</Button> 
	
	<a href="<?= base_url('/') ?>">
		<Button class="btn-warning">Ulangi</Button>
	</a>


	<!-- The Modal -->
	<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<div class="field">
			<h2>Save Data</h2>
			<form method="post" action="<?= base_url('save') ?>">
				<h4>Input Your Name : </h4>
				<input type="text" id="name" name="name" required>
				<input type="hidden" value="<?php echo $point; ?>" id="point" name="point" >
				<button>Submit</button>
			</form>
		</div>
	</div>

	</div>



	<script>

	var modal = document.getElementById("myModal");
	var btn = document.getElementById("myBtn");
	var span = document.getElementsByClassName("close")[0];

	btn.onclick = function() {
	modal.style.display = "block";
	}

	span.onclick = function() {
	modal.style.display = "none";
	}

	window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
	}
	</script>

</body>
</html>
