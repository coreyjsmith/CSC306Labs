<html>
<body>

	<?php include ('header.php); ?>
	<div id="content">
	<form>
	<h3>First word: <input type="text" onkeyup="showHint(this.value)"/></h3> 
	</form>
	<h3>Suggestions: <span id="txtHint"></span></h3>
	</div>


</body>
</html>