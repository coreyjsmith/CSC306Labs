<html>
<body>

	<?php

		$a[]="Vicious";
		$a[]="Vengeance";
		$a[]="The Road";
		$a[]="No Country for Old Men";
		$a[]="A Darker Shade of Magic";
		$a[]="A Gathering of Shadows";
		$a[]="A Conjuring of Light";
		$a[]="The Gunslinger";
		$a[]="The Drawing of the Three";
		$a[]="The Wastelands";
		$a[]="Wizard and Glass";
		$a[]="Wolves of the Calla";
		$a[]="Song of Susannah";
		$a[]="The Dark Tower";
		$a[]="The Fellowship of the Ring";
		$a[]="The Two Towers";
		$a[]="The Return of the King";
		$a[]="The Hobbit";
		$a[]="American Gods";
		$a[]="The Old Man and the Sea";
		
		
		$q = $_GET["q"];
		
		if (strlen($q) > 0)
		{
		$hint="";
		for ($i=0; $i<count($a); $i++)
		{
		if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
		{
		if ($hint=="")
		{
		$hint=$a[$i];
		}
		else
		{
		$hint=$hint." ; ".$a[$i];
		}
		}
		}
		}
		
		if ($hint == "")
		{
		$response="no names match";
		}
		else
		{
		$response=$hint;
		}
		
		echo $response;
	
	?>
	
	

</body>
</html>