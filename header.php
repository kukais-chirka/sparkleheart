
<?php wp_footer(); get_template_part( 'template-parts/head' ); ?>
<!-- NavBar --> 
<a href="#anchor" id="scrollBtn" title="Go Bot">&#8595;</a>     <!-- ANCHOR -->

<nav  class="nav-container relative">
    <a href="/"><img class="nav-img"  src="/wp-content/uploads/2020/10/BlackLogo-3.png"></a>
    <div class="nav-items" id="topNav">
        <div class="d-flex justify-content-between languages">
            <a class="active lv" href="#">LV</a>
            <a class="en" href="#">EN</a>
            <a class="ru" href="#">RU</a>
        </div>
        <a class="nav-item" href="/ideja/">Ideja</a>
        <a class="nav-item" href="/piesaki-sapni/">Piesaki Sapni</a>
        <a class="nav-item" href="/uznemejiem/">Uzņēmējiem</a>
        <a class="nav-item" href="/sapnu-banka/">Sapņu banka</a>
        <a class="nav-item" href="/sapnus-atbalsta/">Sapņus atbalsta</a>
        <a class="nav-item" href="/99-iedvesmas-stasti/">99 iedvesmas stāsti</a>
        <a id="lv" class="active" href="#">LV</a>
        <a href="javascript:void(0);" class="icon" onclick="openNavbar()">
            <div id="hamburger" class="hamburger "></div>
        </a>
    </div>
    <img class="vector" src="/wp-content/uploads/2020/10/Vector.png" alt="Apgrauztā Mala">
</nav>   <!-- NavBar --> 
<script defer>
(function () {
  const currentLocation = location.href;
  console.log(currentLocation);
  const menuItem = document.getElementsByClassName('nav-item');
  const menuLength = menuItem.length
    for ( i = 0; i < menuLength; i++){
    if(menuItem[i].href === currentLocation){
      menuItem[i].className += " active"
    }
}
})(); </script>
<div class="site-content">