<?php

	$name = $_POST['InputName'];
	$email = $_POST['InputEmail'];
	$message = $_POST['InputMessage'];
	$data = "$name, $email, $message\n";

	//open the file and choose the mode
	$fh = fopen("registered.csv", "a");
	fwrite($fh, $data);

	//close the file
	fclose($fh);
?>

<html>
<head>
	<title>REGISTERED USER</title>
	<script type="text/javascript" src="js/jquery.csvToTable.js"></script>
</head>
<body>
<div id="CSVTable"></div>

<script>
$(function() {
  $('#CSVTable').CSVToTable('registered.csv');
});
</script>

</body>
</html>