<?php 
require_once("token.php");
if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
}else{
	$requesMet = "http";
}



?>

<!-- <head> -->
<base href="<?= $requesMet.'://'.$_SERVER['HTTP_HOST'].'/' ?>">
<link rel="icon" href="favicon.png" type="image/png">



<!-- <link rel="preload" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900|Roboto:400,500,700,900&display=swap" type="style"> -->
<link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
    
<link rel="preload"
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
    type="style">
<meta name="ip2loc" content="58.27.132.74">
<meta name="page_url" content="https://trademarkwinners.com/">
<link rel="canonical" href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<meta name="robots" content="index, follow">
