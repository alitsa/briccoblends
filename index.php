<!DOCTYPE html>
<html>
<head>
<title>Bricco Blends</title>

<?php 

  $pg = $_GET['pg'];
  if ($pg == "impact"){
    $description = "Bricco Blends is the first shelf stable oat milk to use compostable packaging";
  }elseif( $pg == "partners"){
    $description = "Coffee shops that switch to Bricco Blends keep over 6,000 convention milk cartons out of landfills each year, on average";
  }elseif( $pg == "retail"){
    $description = "Try Bricco Blends oat milk powder and enjoy FREE shipping on orders of $50 or more";
  }elseif ($pg == "wholesale"){
    $description = "Fresh, house made oat milk is effortless to make and draws conscious consumers to neighborhood coffee shops";
  }elseif ($pg == "blog"){
    $description = "Specialty coffee trade talk with Bricco Blends founder, Amalia Litsa and team";
  }
  else{
    $description = "Oat milk designed and tested by baristas for coffee shops";
  }

 ?>

<meta name="description" content="<?php echo $description; ?>" />
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

 <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '871579672955387');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=871579672955387&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


</head>
<body>

<?php
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
