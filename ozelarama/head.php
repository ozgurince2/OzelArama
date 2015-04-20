<html>
<head>
	<title>Özel Arama</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript">
	function result() {
		var key = document.forms["myForm"]["key"].value;
		console.log(key);	
		if (key=="") //Kullanıcı key'i boş giremez
		{
			alert("Lütfen anahtar kelimeyi boş girmeyiniz.");
			return false;
		}
	}
	</script>
</head>
<body>

<div id="header">
	<form name="myForm" action="#" method="POST" onsubmit="return result()">
		<p>Kelime giriniz: <input name="key"></p>
	</form>
</div>
