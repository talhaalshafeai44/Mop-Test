<?php
   include 'configure.php';

   if(($_GET['cmd']==3))
    echo 'OH Waow by Owen Wilson';

   if(isset($_POST['nationalid'])){            
    $ins=$mysqli->query ("INSERT INTO `mop`.`train_students` 
    (`nationality`,
    `nationalid`,
    `date`,
    `fname`,
    `sname`,
    `city`,
    `university`,
    `year`,
    `major`,
    `email`,
    `phone`
    ) VALUES 
    ('$_POST[nationality]',
    '$_POST[nationalid]',
    '$_POST[date]', 
    '$_POST[fname]',
    '$_POST[sname]',
    '$_POST[city]',
    '$_POST[university]',
    '$_POST[year]',
    '$_POST[major]',
    '$_POST[email]',
    '$_POST[phone]'
    );
    ");
    if($ins)
    echo "
    <!DOCTYPE html>
<html lang='en' dir='rtl'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta name='description' content='MOP' />
    <meta http-equiv='content-type' content='text/html;charset=UTF-8' />
    <link rel='shortcut icon' href='https://www.mop.gov.jo/App_Themes/ThemeAr/Images/fav.png' />
    <title>
        تواصل معنا - وزارة التخطيط والتعاون الدولي
    </title>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>
    <link href='https://fonts.googleapis.com/css?family=Tajawal&amp;display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css' integrity='sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==' crossorigin='anonymous' />
    <link rel='stylesheet' href='style.css'>
</head>

<body>
    <div class='fluid-container'>
        <header>
            <div class='main-header'>
                <div class='logo'>
                    <img src='assets/crown.png' style='width: 100px;' alt='logo'>
                    <div class='name'>
                        <h2>المملكة الأردنية الهاشمية</h2>
                        <h2>وزارة التخطيط و التعاون الدولي</h2>
                    </div>
                </div>
                <div class='top-things'>
                    <div class='eservices'>
                        <h4>
                            <a href='#'>بريد الموظفين</a>
                        </h4>/
                        <h4>
                            <a href='#'>العطائات</a>
                        </h4>/
                        <h4>
                            <a href='#'>منصة بخدمتك</a>
                        </h4>
                    </div>
                    <div class='socials'>
                        <li class='yt'><i class='fab fa-youtube'></i></li>
                        <li class='tw'><i class='fab fa-twitter'></i></li>
                        <li class='fb'><i class='fab fa-facebook-f'></i></li>
                    </div>
                </div>
            </div>

        </header>
        <!-- end of header -->
        <nav class='navbar sticky-top navbar-expand-lg '>
            <a class='navbar-brand' style='color: #3E474C;' href='index.html'> <i class='fas fa-home'></i> الرئيسية
            </a>
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='' aria-expanded='false' aria-label='Toggle navigation'>
                <span>
                    <i class='fa fa-bars' style='color: #3E474C;' aria-hidden='true'></i>
                </span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav' style='width: 100%;'>
                    <li class='nav-item dropdown link-item '>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                     عن الوزارة
                  </a>
                        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                            <a class='dropdown-item' href='about.html'>نبذة عن الوزارة</a>
                            <a class='dropdown-item' href='organizationalchart.html'> الهيكل التنظيمي</a>
                            <a class='dropdown-item' href='plansandprograms.html'>	البرامج و الخطط  </a>
                            <a class='dropdown-item' href='faq.html'>	الاسئلة الشائعة  </a>
                            <a class='dropdown-item' href='tasksandduties.html'>	المهام و الواجبات  </a>
                            <a class='dropdown-item' href='ministers.html'>	الوزراء السابقين </a>
                        </div>
                    </li>
                    <li class='nav-item dropdown link-item '>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            التخطيط و المتابعة                      </a>
                        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                            <a class='dropdown-item' href='strategicalplan.html'>الخطة الاستراتيجية</a>
                            <a class='dropdown-item' href='annualreports.html'> التقارير السنوية</a>
                            <a class='dropdown-item' href='#'> تطوير الأداء المؤوسسي </a>
                            <a class='dropdown-item' href='servicesguide.html'> دليل الخدمات </a>
                            <a class='dropdown-item' href='nationalgoals.html'> الأهداف الوطنية </a>
                        </div>
                    </li>
                    <li class='nav-item link-item'>
                        <a class='nav-link' href='projectsandinitiaves.html' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            المبادرات              
                                </a>
                    </li>
                    <li class='nav-item dropdown link-item'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            الإعلام</a>
                        <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                            <a class='dropdown-item' href='news.html'>الأخبار</a>
                            <a class='dropdown-item' href='gallery.html'> المعرض</a>
                        </div>
                    </li>
                    <li class='nav-item link-item '>
                        <a class='nav-link' href='contactus.html'>تواصل معنا</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end of sticky nav -->

        <div class='container'>
        <h1 class='text-center' style='direction:ltr'>Thank You For Your Message!</h1>
        </div>
    <!-- end of units and departments section -->
    <footer>
        <div class='maps'>
            <h2>
                مقر الوزارة
            </h2>
            <iframe scrolling='no' frameborder='0' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2895.9553000463607!2d35.90548681464221!3d31.954757232761644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca07c65529b9f%3A0x39274bf436bd42d!2sMinistry%20of%20Planning%20%26%20International%20Cooperation!5e1!3m2!1sen!2sus!4v1579017229331!5m2!1sen!2sus'></iframe>
        </div>
        <div class='links'>
            <h2>
                تواصل معنا
            </h2>
            <div class='items'>
                <h4><a href='tel:(+962)654644466'>+962 6546 4466</a>: هاتف</h4>
                <h4><a href='tel:(+962)65464934'> +962 6546 4934</a>:فاكس </h4>
                <h4 style='text-align: right;'>
                    العنوان:
                    <a href='#'>
                         عمان,الدوار الثالث ،شارع توفيق أبو الهدى، مبنى رقم (4)
                        </a>
                </h4>
            </div>
        </div>
        <div class='links'>
            <h2>
                من الموقع
            </h2>
            <div class='items'>
                <h4>
                    <a href='#'>
                            الأسئلة الاكثر تكرارا
                        </a>
                </h4>
                <h4>
                    <a href='#'> روابط مفيدة</a>
                </h4>
                <h4><a href='#'>
                        وظائف
                    </a></h4>
            </div>
        </div>
    </footer>
    <h4 class='copyright'>.جميع الحقوق محفوظة © 2020 وزارة التخطيط والتعاون الدولي
    </h4>
    </div>
    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
</body>

</html>
    ";
    else
    echo $mysqli->error;
    }

?>