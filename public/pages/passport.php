<!doctype html>
<html lang="en">
<head>
    <title>ETI Passport</title>
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
        <a class="main_header_logo_link" id="logo_counter" onclick="window.location.reload()">PASSPORT</a>
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
<div class="passport_content">
    <h4>Паспорт проекту «Студентський сайт»</h4>
    <b>Домен сайту:</b>
    <a href="https://eti-activestudents.kr.ua" target="_blank">eti-activestudents.kr.ua</a>
    <b>Хостинг сайту:</b>
    <a href="https://cp.cityhost.ua" target="_blank"> Зовнішній хостинг-провайдер «Cityhost”</a>
    <b>Поштова скринька сайту для зворотнього зв’язку:</b>
    <a href="mailto:Eti.activestudents@gmail.com" target="_blank" type="email">Eti.activestudents@gmail.com</a>
    <b>Куратор проекту:</b>
    Доцент кафедри інформаційних технологій Сурков К.Ю.
    <b>Мета проекту:</b>
    <p>Організація колективної роботи студентів, отримання досвіду роботи в проектах по створенню сайтів, розвиток таких навичок як:</p>
    <ul class="normal_ul">
        <li>вміння працювати в колективі</li>
        <li>здатність до колективного вирішення питань</li>
        <li>вдосконалення навичок програмування, дизайну, контент-менеджменту, проектування тощо</li>
    </ul>
    <b>Суть проекту:</b>
    <p>Колективне проектування, розробка, наповнення та підтримка студентського сайту власними силами:</p>
    <ul class="normal_ul">
        <li>проектування сайту;</li>
        <li>розробка дизайну;</li>
        <li>розробка HTML шаблону;</li>
        <li>проектування бази даних;</li>
        <li>налаштування серверу;</li>
        <li>вирішення питання запуску сайту (пошук CMS або написання власної CMS на мові PHP);</li>
        <li>наповнення сайту контентом;</li>
        <li>адміністрування сайту та модерація контенту</li>
        <li>інші питання.</li>
    </ul>
    <b>Учасники проекту:</b>
    <ol class="decimal_ul">
        <li>Студентський парламент.</li>
        <li>Команда розробників (студенти 1-3 курсів напряму «Комп’ютерні науки»):
            <ul class="none_ul second_ul">
                <li>
                    <b>1 курс:</b>
                    <ol class="decimal_ul">
                        <li>Анастасія Литвин.</li>
                        <li>Володимир Карчевський.</li>
                        <li>Ігор Моргун.</li>
                        <li>Ібе Джанет.</li>
                    </ol>
                </li>
                <li>
                    <b>2 курс:</b>
                    <ol class="decimal_ul">
                        <li>Богдан Вербовий.</li>
                        <li>Давид Лапін.</li>
                        <li>Іван Гуйван.</li>
                        <li>Максим Ніора.</li>
                        <li>Максим Осадчук.</li>
                        <li>Олександр Цаплін.</li>
                    </ol>
                </li>
                <li>
                    <b>3 курс:</b>
                    <ol class="decimal_ul">
                        <li>Анастасія Анастасьєва.</li>
                        <li>Дмитро Приймак.</li>
                    </ol>
                </li>
            </ul>
        </li>
        <li>Всі студенти інституту по бажанню. Запис в проект здійснюється через студентський парламент.</li>
    </ol>


    <h4>Початковий план роботи проекту:</h4>
    <ol class="decimal_ul">
        <li>
            &checkmark; Перший запуск сайту та розміщення на ньому інформаційної довідки та паспорту проекту.
        </li>
        <li>
            &checkmark; Розробка та запуск на сайті форми опитування для колективного вирішення нагальних питань.
        </li>
        <li>
            Формування робочих груп по напрямкам роботи.
        </li>
        <li>
            Формування та розподіл завдань для робочих груп.
        </li>
        <li>
            Створення графіку роботи.
        </li>
        <li>
            Обговорення форми звітності.
        </li>
        <li>
            Формування стратегії розвитку проекту.
        </li>
    </ol>
    <b>Завантажити текстовий варіант паспорту проекту:</b>
    <a class="btn" href="https://docs.google.com/document/d/1Jc_1FRgHbGmGTskfrMBcsZR5axFNoWnP/edit?usp=sharing&ouid=112739024591007289154&rtpof=true&sd=true" target="_blank">Паспорт проекту</a>
</div>

<?php include_once '../public/pages/parts/footer.php'; ?>

</body>
</html>