<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="enUS" lang="enUS">
<head>
<title>Offline QR Generator</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="qrcode.min.js"></script>
</head>
<body>
<div id="body" style="width:550px;">
	<div style="width:100%;">
		<h2>{{$ip}}:8000/exam?id={{$id}}</h2>
	</div>

	<div id="qrcode2" style="position:absolute; z-index:3; width:250px; height:250px; padding-left:10px; padding-top:20px;" />
</div>
<script type="text/javascript">

var qrcode2 = new QRCode(document.getElementById("qrcode2"), {
	width : 250,
	height : 250,
  correctLevel : QRCode.CorrectLevel.L
});


qrcode2.makeCode("{{$ip}}:8000/exam?id={{$id}}");


</script>
</body>
