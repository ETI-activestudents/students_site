<?php
/**
 * @var int $id
 */
use App\Classes\Controllers\NewsController;
?>
<!doctype html>
<html lang="en">
<head>
    <title>ETI News #<?=$id?></title>
    <meta charset="UTF-8">
    <link rel="icon" href="/files/img/ico/eti_ico_48.svg" type="image/x-icon">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap" rel="stylesheet">
    <?php $version = Date('his');
    echo '<link rel="stylesheet" href="/themes/default/main.css?v='.$version.'">';
    ?>
    <script src='/js/fontawesome.js'></script>
</head>

<body>
<header class="main_header" id="section_header">
    <div class="main_header_logo">
        <a class="main_header_logo_link" id="logo_counter" onclick="window.location.reload()">Heading #1</a>
    </div>
</header>
<nav class="main_nav">
    <input id="_1" type="checkbox">
    <label id="menuIcon" class="collapse" for="_1" onclick="this.parentElement.classList.toggle('open')">
        <svg class="ham hamRotate" viewBox="0 0 100 100"  width="36" height="36">
            <path
                class="line top"
                d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
            <path
                class="line middle"
                d="m 30,50 h 40" />
            <path
                class="line bottom"
                d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
        </svg>
    </label>
    <a id="nav_section_header" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link underline" href="/">
        <i class="fa-solid fa-house-chimney"></i>
        <span class="">HOME</span>
    </a>
    <a  id="nav_section_about" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="/about">
        <i class="fa-solid fa-circle-info"></i>
        <span class="">ABOUT</span>
    </a>
    <a id="nav_section_news" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="/news">
        <i class="fa-solid fa-rss"></i>
        <span class="" >NEWS</span>
    </a>
    <a id="nav_section_sp" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="/sp">
        <i class="fa-solid fa-graduation-cap"></i>
        <span class="" >SP</span>
    </a>
    <a id="nav_section_contacts" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="/#section_contacts">
        <i class="fa-solid fa-phone"></i>
        <span class="">CONTACTS</span>
    </a>
    <a class="main_nav_link" href="/login"><i class="fa-solid fa-right-to-bracket"></i>LOGIN</a>
</nav>

<div class="news_content">
    <div>
        <img class="news_content_single_image" src="/files/img/news_previews/news_1.jpg" alt="#1">
    </div>
    <div class="news_content_single_article">
        <p class="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid blanditiis debitis doloribus esse et, facere id nisi odit, pariatur recusandae rerum saepe sequi ullam velit vero voluptatum? Accusamus alias aspernatur assumenda commodi dolorem eaque earum eligendi eum itaque laboriosam laborum magni nulla, placeat sint suscipit! Adipisci dolores doloribus placeat?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem distinctio labore nostrum officia perferendis provident quaerat saepe tenetur. Alias dolorum eveniet quas tempore voluptatibus! Ipsa laudantium qui unde vel. Delectus, modi velit. Alias autem consectetur consequuntur culpa cupiditate deleniti, doloribus eos error eum facilis hic ipsam laudantium nostrum pariatur porro quos ratione reiciendis repellendus reprehenderit repudiandae soluta vel veniam vero.</p>
    </div>
    <em class="news_content_single_author">01/01/2023 Author Name</em>
 </div>

<?php include_once '../public/pages/parts/footer.php'; ?>
