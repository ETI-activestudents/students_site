<footer class="main_footer">
    <?php
        if($_SERVER['REQUEST_URI'] === '/'){
            echo '<button class="main_footer_button" onclick="document.querySelector(\'#section_header\').scrollIntoView()"><i class="fa fa-arrow-up"></i> To the top</button>';
        }
    ?>
    <div class="main_footer_credits">
        <div class="main_footer_credits_helpers">
            <h2>За підтримки:</h2>
            <a href="https://eti.edu.ua" target="_blank">eti.edu.ua</a>
            <a href="">CompanyName2</a>
            <a href="">CompanyName3</a>
        </div>
        <div class="main_footer_credits_devs">
            <h2>Розробники:</h2>
            <a href="">Student Name1</a>
            <a href="">Student Name1</a>
            <a href="">Student Name2</a>
            <a href="">Student Name3</a>
            <a href="">Student Name4</a>
            <a href="">Student Name5</a>
            <a href="">Student Name6</a>
            <a href="">Student Name7</a>
            <a href="">Student Name8</a>
            <a href="">Student Name9</a>
            <a href="">Student Name10</a>
        </div>
        <div class="main_footer_credits_links">
            <h2>Посилання:</h2>
            <a href="https://www.w3schools.com" target="_blank">W3schools</a>
            <a href="https://w3schoolsua.github.io" target="_blank">W3schools UA</a>
            <a href="https://www.php.net" target="_blank">PHP</a>
            <a href="https://developer.mozilla.org/ru/docs/Learn/Getting_started_with_the_web/CSS_basics" target="_blank">Developer.Mozilla</a>
            <a href="https://nginx.org/ru/" target="_blank">Nginx</a>
            <a href="https://www.codewars.com/dashboard" target="_blank">Codewars</a>
            <a href="https://cssbattle.dev" target="_blank">CSS Battle</a>
        </div>
    </div>
    <div class="main_footer_media">
        <a href="https://www.instagram.com/etielvorti" target="_blank"><i class="fa fa-instagram"></i></a>
        <a href="https://www.facebook.com/etiactivestudents" target="_blank"><i class="fa fa-facebook-official"></i></a>
        <a href="https://www.tiktok.com/@eti_elvorti" target="_blank"><i class="fa fa-tiktok"></i></a>
        <a href="https://t.me/joinchat/6kTGEFvzUx02NzJi?tpclid=facebook.PAAaZBmGmqmcMfDzdpoev6TbgLrm0mAj9pyhZCY64dfUQ7cW1v41PFsPtx8mI" target="_blank"><i class="fa fa-telegram"></i></a>
        <a href="https://www.figma.com/files/team/1172443273592127423/Eti-activestudents?fuid=1172858564030581867" target="_blank"><i class="fa fa-figma"></i></a>
        <a href="https://trello.com/b/wgYSNX0b/%D0%BF%D0%BB%D0%B0%D0%BD-%D1%80%D0%BE%D0%B1%D0%BE%D1%82%D0%B8" target="_blank"><i class="fa fa-trello"></i></a>
        <a href="https://github.com/ETI-activestudents/students_site" target="_blank"><i class="fa fa-github"></i></a>
    </div>
    <a href="/" class="main_footer_copy"><i class="fa fa-copyright"></i>ETI ActiveStudents 2022-2023</a>
</footer>