<html>
<title>Accommerce Developer Test</title>
<body>
<div align="center">
<?php
if(isset($_POST['kota'])){
	$kota = $_POST['kota'];
	$hariini = date('d M Y');
	if ($kota==""){
		echo "<script>alert('select city')
        location.href='index.php'</script>";
	}else{
		$url = "http://api.openweathermap.org/data/2.5/weather?q=".$kota."&APPID=890277cf43fd60412661e93375e22673";
		$jsonUrl = file_get_contents($url, False);
		$json_idr = json_decode($jsonUrl, true);
		echo "The Weather of ".$kota." at ".$hariini." is ".ucwords($json_idr['weather'][0]['description']);
	}
}
?>
</div>
<body>  
</html>