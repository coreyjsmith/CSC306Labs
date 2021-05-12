<html>
<head>

	<link href="carla.css" rel="stylesheet" type="text/css" />
	<script language="JavaScript" type="text/javascript">
	function showHint(str)
	{
	if (str.length==0)
	{
	document.getElementById("txtHint").innerHTML="";
	return;
	}
	if (window.XMLHttpRequest)
	{
		var xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function()
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
	document.getElementbyId("txtHint").innerHTML=xmlhttp.responseText;
	}
	}
	xmlhttp.open("GET","titlepages.php?q="+str,true);
	xmlhttp.send();
	}
	</script>

</head>
</html>