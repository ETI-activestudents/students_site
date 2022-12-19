<!doctype html>
<html lang="en">
<head>
    <title>ETI Main</title>
    <meta charset="UTF-8">
    <link rel="icon" href="/files/img/ico/eti_ico_48.svg" type="image/x-icon">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preload" href="/themes/default/fonts/LCChalk.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;700&display=swap" rel="stylesheet">
    <?php $version = Date('his');
    echo '<link rel="stylesheet" href="/themes/default/main.css?v='.$version.'">';
    ?>
    <script src='/js/fontawesome.js'></script>
    <!--
        для комментариев
    -->
</head>
<body>
    <header class="main_header">
        <a href="" onclick="location.reload();">ETI ActiveStudents</a>
    </header>
    <nav class="main_nav">
        <ul class="main_nav_menu">
            <li class="main_nav_menu_item"><a href="/" class="main_nav_menu_item_link" title="Coming soon">Новини</a></li>
            <li class="main_nav_menu_item"><a href="/" class="main_nav_menu_item_link" title="Coming soon">Iнститут</a></li>
            <li class="main_nav_menu_item"><a href="/" class="main_nav_menu_item_link" title="Coming soon">Студпарламент</a></li>
            <li class="main_nav_menu_item" ><a href="../passport" class="main_nav_menu_item_link">Passport</a></li>
        </ul>
    </nav>
    <div class="main_content">
        <h3>Результати голосування</h3>
        <img class="main_content_image" src="/files/img/main_page/votes_diagram.png" alt="votes_diagram" title="діаграма">
        <img class="main_content_image" src="/files/img/main_page/votes_list.png" alt="votes_list" title="список">
        <p class="main_content_p">Отже, для сайту буде використовуватись даний шаблон: </p>
        <a class="main_content_link" href="https://www.w3schools.com/w3css/tryw3css_templates_parallax.htm" target="_blank">Переглянути шаблон</a>
        <h3>Інші шаблони</h3>
        <ul>
            <li><a href="https://www.w3schools.com/w3css/tryw3css_templates_start_page.htm">4%</a></li>
            <li><a href="https://startbootstrap.com/previews/clean-blog-jekyll">6%</a></li>
            <li><a href="https://startbootstrap.com/previews/freelancer">8%</a></li>
            <li><a href="https://www.w3schools.com/w3css/tryw3css_templates_band.htm">16%</a></li>
            <li><a href="https://startbootstrap.com/previews/agency">22%</a></li>
        </ul>
    </div>
    <footer class="main_footer">
        <ul class="main_footer_media">
            <li class="main_footer_media_item">
                <a href="https://www.instagram.com/etielvorti" class="main_footer_media_item_link">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="main_footer_media_item">
                <a href="https://www.facebook.com/etiactivestudents" class="main_footer_media_item_link">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="main_footer_media_item">
                <a href="https://www.tiktok.com/@eti_elvorti" class="main_footer_media_item_link">
                    <i class="fab fa-tiktok"></i>
                </a>
            </li>
            <li class="main_footer_media_item">
                <a href="https://t.me/joinchat/6kTGEFvzUx02NzJi?tpclid=facebook.PAAaZBmGmqmcMfDzdpoev6TbgLrm0mAj9pyhZCY64dfUQ7cW1v41PFsPtx8mI" class="main_footer_media_item_link">
                    <i class="fab fa-telegram"></i>
                </a>
            </li>
            <li class="main_footer_media_item">
                <a href="https://www.figma.com/files/team/1172443273592127423/Eti-activestudents?fuid=1172858564030581867" class="main_footer_media_item_link">
                    <i class="fab fa-figma"></i>
                </a>
            </li>
            <li class="main_footer_media_item">
                <a href="https://trello.com/b/wgYSNX0b/%D0%BF%D0%BB%D0%B0%D0%BD-%D1%80%D0%BE%D0%B1%D0%BE%D1%82%D0%B8" class="main_footer_media_item_link">
                    <i class="fab fa-trello"></i>
                </a>
            </li>
            <li class="main_footer_media_item">
                <a href="https://github.com/ETI-activestudents?tab=repositories" class="main_footer_media_item_link">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </footer>
</body>
