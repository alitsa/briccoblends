<!DOCTYPE html>
<html>
<head>
<title>Bricco Blends</title>
<meta name="description" content="
Bricco Blends is barista oat milk with 100% compostable packaging.
" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="oat milk, barista, eco friendly, compostable, latte, capuccino, milk foam, microfoam, local, austin, vegan, women owned business, small business, specialty coffee, coffeehouse" />
<meta name="author" content="Amalia Litsa />

<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
      rel="stylesheet">
<link rel="stylesheet" href="main.css" />
<script src="jquery.js"></script>
<script src="main.js"></script>


 <base target="_self">


</head>
<body>

<?php
$pg = $_GET['pg'];
include('modules/header.php');
if (isset($pg)) {
    include('pages/' . $pg . '.php');
}else{
  include('pages/home.php');
}
include('modules/footer.php');
?>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JG915842N7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JG915842N7');
</script>


</body>
</html>
