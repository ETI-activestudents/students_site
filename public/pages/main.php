<!doctype html>
<html lang="en">
<head>
    <title>ETI Main</title>
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
        <a  id="nav_section_about" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="#section_about">
            <i class="fa-solid fa-circle-info"></i>
            <span class="">ABOUT</span>
        </a>
        <a id="nav_section_news" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="#section_news">
            <i class="fa-solid fa-rss"></i>
            <span class="" >NEWS</span>
        </a>
        <a id="nav_section_sp" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="#section_sp">
            <i class="fa-solid fa-graduation-cap"></i>
            <span class="" >SP</span>
        </a>
        <a id="nav_section_contacts" onclick="document.getElementById('_1').checked = false;this.parentElement.classList.toggle('open')" class="main_nav_link hide_able underline" href="#section_contacts">
            <i class="fa-solid fa-phone"></i>
            <span class="">CONTACTS</span>
        </a>
        <a class="main_nav_link" href="/login"><i class="fa-solid fa-right-to-bracket"></i>LOGIN</a>
    </nav>
    <header class="main_header" id="section_header">
        <div class="main_header_logo">
            <a class="main_header_logo_link" onclick="window.location.reload()">ACTIVE&nbsp;STUDENTS</a>
        </div>
    </header>
    <div class="main_content">
        <section id="section_about" class="section_about">
            <h1>ABOUT US</h1>
            <h2>Опис сайту</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, accusantium adipisci architecto assumenda deleniti eligendi eveniet exercitationem id, impedit ipsam mollitia quaerat quidem recusandae, repellendus temporibus! Ab adipisci aperiam architecto atque aut blanditiis commodi corporis, dignissimos dolore ducimus eius eligendi est eveniet expedita explicabo fuga ipsam iusto laboriosam laudantium molestias nesciunt nisi nobis obcaecati officia pariatur praesentium quam quas quia quis quod quos ratione recusandae reprehenderit sit tempora temporibus velit? Ab ad distinctio esse ipsam molestiae, natus nemo suscipit voluptatibus. Alias, animi architecto atque consectetur doloremque eaque enim, eveniet ipsam ipsum modi nemo perferendis porro quasi rem tempore temporibus tenetur.
            </p>
            <a class="long_btn" href="/about">About us</a>
            <div class="section_about_nav">
                <div class="section_about_nav_block">
                    <h2>Гостям</h2>
                    <img src="/files/img/about_previews/_school.png" alt="#1">
                    <p>Розділи та інформація для гостей інституту, школярів та їх батьків, слухачів.</p>
                    <ul class="section_about_nav_block_list">
                        <li><a href="">Про інститут</a></li>
                        <li><a href="">Події</a></li>
                    </ul>
                </div>
                <div class="section_about_nav_block">
                    <h2>Абітурієнтам</h2>
                    <img src="/files/img/about_previews/_abiturient.png" alt="#1">
                    <p>Розділи та інформація для абітурієнтів, майбутніх абітурієнтів та їх батьків.</p>
                    <ul class="section_about_nav_block_list">
                        <li><a href="">Вступна кампанія</a></li>
                        <li><a href="">Навчальні програми</a></li>
                    </ul>
                </div>
                <div class="section_about_nav_block">
                    <h2>Студентам</h2>
                    <img src="/files/img/about_previews/_students.png" alt="#1">
                    <p>Розділи та інформація для студентів очного, заочного відділення.</p>
                    <ul class="section_about_nav_block_list">
                        <li><a href="">Розклад</a></li>
                        <li><a href="">Викладачі</a></li>
                    </ul>
                </div>
                <div class="section_about_nav_block">
                    <h2>Викладачам</h2>
                    <img src="/files/img/about_previews/_teacher.png" alt="#1">
                    <p>Розділи та інформація для викладачів, методистів та інших осіб, задіяних в навчальному процесі.</p>
                    <ul class="section_about_nav_block_list">
                        <li><a href="">Розклад</a></li>
                        <li><a href="">Списки груп</a></li>
                    </ul>
                </div>
                <div class="section_about_nav_block">
                    <h2>Деканату</h2>
                    <img src="/files/img/about_previews/_director.png" alt="#1">
                    <p>Розділи та інформація для керівництва інституту та деканату.</p>
                    <ul class="section_about_nav_block_list">
                        <li><a href="">Інформація</a></li>
                        <li><a href="">Ще інформація</a></li>
                    </ul>
                </div>
            </div>
            <div class="line_block">
                <div class="section_about_stats_item">
                    <h3>100+</h3>
                    <p>Users</p>
                </div>
                <div class="section_about_stats_item">
                    <h3>200+</h3>
                    <p>Posts</p>
                </div>
                <div class="section_about_stats_item">
                    <h3>1000+</h3>
                    <p>Messages</p>
                </div>
                <div class="section_about_stats_item">
                    <h3>12+</h3>
                    <p>Developers</p>
                </div>
            </div>
        </section>
        <section id="section_news" class="section_news">
            <div class="section_news_image"></div>
            <a class="long_btn" href="/news">View all</a>
            <div class="section_news_grid">
                <div class="section_news_grid_item" >
                    <h2>Heading #1</h2>
                    <img src="/files/img/news_previews/news_1.jpg" alt="#1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
                    <em>01/01/2023 Author Name</em>
                    <em class="read_more"><a href="/news/1">Read more...</a></em>
                </div>
                <div class="section_news_grid_item">
                    <h2>Heading #2</h2>
                    <img src="/files/img/news_previews/news_2.jpg" alt="#2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
                    <em>01/01/2023 Author Name</em>
                    <em class="read_more"><a  href="/news/2">Read more...</a></em>
                </div>
                <div class="section_news_grid_item">
                    <h2>Heading #3</h2>
                    <img src="/files/img/news_previews/news_3.jpg" alt="#3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
                    <em>01/01/2023 Author Name</em>
                    <em class="read_more"><a  href="/news/3">Read more...</a></em>
                </div>
                <div class="section_news_grid_item">
                    <h2>Heading #4</h2>
                    <img src="/files/img/news_previews/news_4.jpg" alt="#4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
                    <em>01/01/2023 Author Name</em>
                    <em class="read_more"><a  href="/news/4">Read more...</a></em>
                </div>
                <div class="section_news_grid_item">
                    <h2>Heading #5</h2>
                    <img src="/files/img/news_previews/news_5.jpg" alt="#5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
                    <em>01/01/2023 Author Name</em>
                    <em class="read_more"><a href="/news/5">Read more...</a></em>
                </div>
                <div class="section_news_grid_item">
                    <h2>Heading #6</h2>
                    <img src="/files/img/news_previews/news_6.jpg" alt="#6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
                    <em>01/01/2023 Author Name</em>
                    <em class="read_more"><a href="/news/6">Read more...</a></em>
                </div>
                <div class="section_news_grid_item">
                    <h2>Heading #7</h2>
                    <img src="/files/img/news_previews/news_7.jpg" alt="#7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor et facilis illum modi, reprehenderit sequi!</p>
                    <em>01/01/2023 Author Name</em>
                    <em class="read_more"><a href="/news/7">Read more...</a></em>
                </div>
                <div class="section_news_grid_item">
                    <a class="add_new" href=""><i class="fa-solid fa-plus"></i>&nbsp;Додати новину</a>
                </div>
            </div>
        </section>
        <section id="section_sp" class="section_sp">
            <h1>STUDENTS PARLIAMENT</h1>
            <h2>Діяльність студентського парламенту</h2>
            <p>
                <b>Студентський Парламент</b> – колектив творчих, ініціативних і небайдужих молодих людей. Їх об’єднує одна велика ідея – залишити свій слід в історії інституту та реалізація цікавих студентських проектів.
                <br>
                <br>
                <b>Що робить Студпарламент:</b> <br>
                &blacksquare;&nbsp;захищає права і законні інтереси студентів; <br>
                &blacksquare;&nbsp;доносить позицію студентства до керівництва інституту; <br>
                &blacksquare;&nbsp;сприяє участі студентів у громадському житті, навчальній та науково-дослідній роботі; <br>
                &blacksquare;&nbsp;проводить студентські акції, заходи та програми; <br>
                <br>
                Найцікавішою діяльністю парламента є організація різних заходів. І звісно вже виникли свої традиції та свята, які щорічно святкуються у стінах нашого навчального закладу. Одними із таких є Хелловін, де костюмована вечірка та неймовірні фотозони не залишить байдужими нікого. Також є щотижневі тематичні заходи - вечори кіно та гри "Мафія".
                <br>
                Ми організовуємо дозвілля студентів нашого  інституту, аби хоч іноді нагадувати їм, що життя будь-якого студента не обмежується лише підготовкою до занять.            </p>
            <a class="long_btn" href="/sp">Go to SP section</a>
            <div class="section_sp_panel">
                <div class="section_sp_panel_menu">
                    <a id="sp_menu_1" class="section_sp_panel_menu_item menu_active" onclick="switchBlock(this)">
                        <i class="fa-solid fa-images"></i>
                        <span>Галерея</span>
                    </a>
                    <a id="sp_menu_2" class="section_sp_panel_menu_item" onclick="switchBlock(this)">
                        <i class="fa-solid fa-file-lines"></i>
                        <span>Положення</span>
                    </a>
                    <a id="sp_menu_3" class="section_sp_panel_menu_item" onclick="switchBlock(this)">
                        <i class="fa-solid fa-users"></i>
                        <span>Склад</span>
                    </a>
                    <a class="section_sp_panel_menu_item right" href="">
                        <i class="fa-solid fa-circle-question"></i>
                        <span>Приєднатись</span>
                    </a>
                </div>
                <section id="item_sp_menu_1" class="section_sp_panel_block active_item">
                    <h2>Галерея</h2>
                </section>
                <section id="item_sp_menu_2" class="section_sp_panel_block">
                    <h2>Положення</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, inventore iusto laborum qui ullam veritatis. Facere illo necessitatibus nulla perferendis!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius incidunt, ipsum minima nisi voluptas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta dolores eligendi illo iusto laboriosam laudantium nemo nostrum repellendus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, inventore iusto laborum qui ullam veritatis. Facere illo necessitatibus nulla perferendis!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius incidunt, ipsum minima nisi voluptas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta dolores eligendi illo iusto laboriosam laudantium nemo nostrum repellendus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium eius incidunt, ipsum minima nisi voluptas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut dicta dolores eligendi illo iusto laboriosam laudantium nemo nostrum repellendus.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum maiores minima porro!</p>
                </section>
                <section id="item_sp_menu_3" class="section_sp_panel_block">
                    <h2>Склад</h2>
                </section>
            </div>
            <div class="line_block" >
                <div class="section_sp_about_item">
                    <h3>10+</h3>
                    <p>Members</p>
                </div>
                <div class="section_sp_about_item">
                    <h3>200+</h3>
                    <p>Posts</p>
                </div>
                <div class="section_sp_about_item">
                    <h3>50+</h3>
                    <p>Events</p>
                </div>
                <div class="section_sp_about_item">
                    <h3>2+</h3>
                    <p>Editors</p>
                </div>
            </div>
        </section>
        <section id="section_contacts" class="section_contacts">
            <div class="section_contacts_image">

            </div>
            <div class="section_contacts_grid">
                <div class="section_contacts_grid_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2360.666023710425!2d32.261622313937515!3d48.51704052763144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d05d53964db68d%3A0x90cc56fb009280a3!2sEconomics%20and%20technology%20institute%20Robert%20Elworthy!5e1!3m2!1sen!2sus!4v1673040179264!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="section_contacts_grid_form">
                    <a href="https://goo.gl/maps/9YRDLrUvHyCNqqYf8" class="contacts_adress"><i class="fa-solid fa-map-location-dot"></i>вул. Є. Чикаленка, 3, Кропивницький</a>
                    <a href="tel:+380661259997" class="contacts_phone"><i class="fa-solid fa-phone-volume"></i>+38 (066) 125 99 97</a>
                    <a href="mailto:eti.activestudents@gmail.com" class="contacts_email"><i class="fa-solid fa-envelope"></i>eti.activestudents@gmail.com</a>
                    <form>
                        <input type="text" id="form_name" placeholder="Name">
                        <input type="email" id="form_email" placeholder="Email">
                        <textarea rows="3" maxlength="200" name="form_message" id="form_message" placeholder="Message"></textarea>
                        <button type="submit" class="btn"><i class="fa-solid fa-paper-plane"></i>Send</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php include_once '../public/pages/parts/footer.php'; ?>
    <script src="/js/holidays.js" type="text/javascript"></script>
    <script>
        onmousemove = (event) =>{
            let width = window.innerWidth;
            let height = window.innerHeight;
            let X = event.clientX;
            let Y = event.clientY;
            let side = '';
            let position = '';
            let element = document.getElementById('section_header');

            if(X > width / 2) {
                side = 'right';
            }
            if(X < width / 2) {
                side = 'left';
            }
            if(Y > height / 2) {
                position = 'bottom';
            }
            if(Y < height / 2) {
                position = 'top';
            }
            element.style.backgroundPositionX = side;
            element.style.backgroundPositionY = position;
            element.style.transitionDelay = '0.5s';
            element.style.transition = 'background-position 50s';
            element.style.transitionTimingFunction = 'linear';
        }
        switchBlock = (el) => {
            document.querySelectorAll('[id^="sp_menu_"]').forEach((block) => {
                el === block ? document.getElementById(`item_${el.id}`).classList.add('active_item') : document.getElementById(`item_${block.id}`).classList.remove('active_item');
                el === block ? block.classList.add('menu_active') : block.classList.remove('menu_active');
            });
        }
        resetActive = (el) => {
            document.querySelectorAll('[id^="nav_section_"]').forEach((i) => {
                 el === i ? i.children[1].classList.add('menu_active') : i.children[1].classList.remove('menu_active');
            });
        }
        const callback = ([entry]) => {
            const {isIntersecting} = entry;
            if(isIntersecting){
                resetActive(document.getElementById(`nav_${entry.target.id}`));
            }
        };
        const options = { root: null, rootMargin: '-60px',  threshold: 0.0 };
        const observer = new IntersectionObserver(callback, options);
        document.querySelectorAll('[id^="section_"]').forEach((section) => {
            observer.observe(section);
        });
    </script>
</body>

