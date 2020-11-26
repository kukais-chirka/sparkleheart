
<?php wp_footer(); get_template_part( 'template-parts/head' ); ?>

<!-- NavBar --> 
<nav  class="nav-container relative">
    <a href="/"><img class="nav-img"  src="/wp-content/uploads/2020/10/BlackLogo-3.png"></a>
    <div class="nav-items" id="topNav">
        <div class="d-flex justify-content-between languages">
            <a class="active lv" href="#">LV</a>
            <a class="en" href="#">EN</a>
            <a class="ru" href="#">RU</a>
        </div>
        <a href="/ideja">Ideja</a>
        <a href="/piesaki-sapni">Piesaki Sapni</a>
        <a href="/uznemejiem">Uzņēmējiem</a>
        <a href="/sapnu-banka">Sapņu banka</a>
        <a href="/sapnus-atbalsta">Sapņus atbalsta</a>
        <a href="/99-iedvesmas-stasti">99 iedvesmas stāsti</a>
        <a id="lv" class="active" href="#">LV</a>
        <a href="javascript:void(0);" class="icon" onclick="openNavbar()">
            <div id="hamburger" class="hamburger "></div>
        </a>
    </div>
    <img class="vector" src="/wp-content/uploads/2020/10/Vector.png" alt="Apgrauztā Mala">
</nav>   <!-- NavBar --> 
<div class="site-content">