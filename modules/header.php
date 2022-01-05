<?php

function active($navnum){
  $pg = $_GET['pg'];
  if ($navnum == $pg){
    echo "active";
  }

}

function linkURL($navnum){
  echo " href='?pg=" . $navnum . "'";
}

?>
<header>
  <nav class="navmenu">
    <a href="#" class="trigger">Menu</a>
    <ul class="menu flex">
      <li class="logo">
          <a disabled="disabled" title="Home page" href='./index.php'>
          <span>Home</span>
          </a>
      </li>
      <li class="<?php active('home'); ?>" ><a <?php linkURL('home'); ?>>Oat Milk</a></li>
      <li class="<?php active('impact'); ?>" ><a <?php linkURL('impact'); ?>>Company</a></li>
      <li class="<?php active('partners'); ?>" ><a <?php linkURL('partners'); ?>>Partners</a></li>
      <li class="<?php active('retail'); ?>" ><a <?php linkURL('retail'); ?>>Shop</a></li>
    </ul>
  </nav>
</header>
