<?php
// require "src/setup.src.php";
require "src/header.src.php";
// require "src/sidebar.src.php";
// require "src/navbar.src.php";
?>
<!--  navigation -->
<div class="nav-holder main-menu">
        <nav>
                <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="karriere.php">Karriere</a></li>
                        <li><a href="contact.php" class="act-link">Kontakt</a></li>
                </ul>
        </nav>
</div>
<!-- navigation  end -->
</div>
</div>
</header>
<!-- header end  -->
<!-- wrapper -->
<div id="wrapper">
        <!-- content    -->
        <div class="content">
                <!-- section -->
                <section class="no-padding" data-scrollax-parent="true">
                        <div class="parallax-inner page-title-wrap">
                                <div class="bg" data-bg="src/images/main/1.jpg" data-scrollax="properties: { translateY: '40%' }"></div>
                                <div class="parallax-wrap">
                                        <div class="container">
                                                <div class="page-title">
                                                        <h3>NEHMEN SIE KONTAKT MIT UNS AUF / ANFRAGE</h3>
                                                        <p> Ihre Anfrage, unser Service</p>
                                                </div>
                                                <div class="hero-scroll-down-notifer  ">
                                                        <div class="scroll-down-wrap ">
                                                                <div class="mousey">
                                                                        <div class="scroller color-bg"></div>
                                                                </div>
                                                        </div>
                                                        <i class="far fa-angle-down"></i>
                                                </div>
                                                <div class="pw_dec"></div>
                                        </div>
                                </div>
                        </div>
                </section>
                <!-- section  end-->
                <div class="breadcrumbs fl-wrap">
                        <div class="container">
                                <div class="breadcrumbs-list">
                                        <a href="#">Home</a><a href="#">Pages</a> <span>Contacts</span>
                                </div>
                        </div>
                </div>
                <!--section -->
                <section class="gray-bg small-top_padding stp-bot">
                        <div class="hex-bg"><span class="hex hex1"></span><span class="hex hex2"></span><span class="hex hex3"></span></div>
                        <div class="container">
                                <div class="row">
                                        <!--card-item -->
                                        <div class="col-md-4">
                                                <div class="card-item fl-wrap">
                                                        <i class="fal fa-envelope"></i>
                                                        <span class="card-item_num">01.</span>
                                                        <h4>Unsere Mails</h4>
                                                        <p>Schreiben Sie uns</p>
                                                        <a class="card-link" href="mailto:kontakt@european-car-transfer.com">kontakt@european-car-transfer.com</a>
                                                </div>
                                        </div>
                                        <!--card-item end -->
                                        <!--card-item -->
                                        <div class="col-md-4">
                                                <div class="card-item fl-wrap">
                                                        <i class="fal fa-phone"></i>
                                                        <span class="card-item_num">02.</span>
                                                        <h4>Unsere Telefone</h4>
                                                        <p>rufen Sie uns einfach an. </p>
                                                        <a class="card-link" href="tel:+49(172)1635880">0172 163 5880</a>
                                                        <br>
                                                        <a class="card-link" href="tel:+49(3381)3282597">03381 328 2597</a>
                                                </div>
                                        </div>
                                        <!--card-item end -->
                                        <!--card-item -->
                                        <div class="col-md-4">
                                                <div class="card-item fl-wrap">
                                                        <i class="fal fa-map-marker"></i>
                                                        <span class="card-item_num">03.</span>
                                                        <h4>Unsere Adresse</h4>
                                                        <p>Sie finden uns hier. </p>
                                                        <a class="card-link" href="//goo.gl/maps/UQ8Vzq7k25eyzAJT8" target="_blank">Chausseestr 33A 14778 Beetzsee</a>
                                                </div>
                                        </div>
                                        <!--card-item end -->
                                </div>
                                <div class="contacts-opt fl-wrap">
                                        <div class="contact-social">
                                                <span class="cs-title">Find us on: </span>
                                                <ul>
                                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                </ul>
                                        </div>
                                        <a href="#" class="btn float-btn cf_btn"><i class="fas fa-caret-right"></i><span>Jetzt anfrage</span></a>
                                        <div id="contact-form-success" style="display: none;" class="contact-notifer">Ihre Nachricht wurde erfolgreich gesendet. Danke. <br> Wir werden versuchen, den Brief innerhalb kurzer Zeit zu beantworten.</div>
                                </div>
                                <!-- <div class="map-links_title">Standort unserer Büros:</div>
                                        <br><br><br><br>
                                        <div class="map-container mapC_vis">
                                                <div id="singleMap" data-latitude="52.451401" data-longitude="12.539145"></div>
                                                <div class="scrollContorl"></div>
                                        </div> -->
                        </div>
                </section>
                <!--services end-->
        </div>
        <div class="contact-form-wrap" id="contact-form" style="display: none;">
                <div class="contact-form-container">
                        <div class="contact-form-main fl-wrap">
                                <div class="contact-form-header">
                                        <h4>ANFRAGE</h4>
                                        <span class="close-contact-form"><i class="fas fa-times"></i></span>
                                </div>
                                <div id="contact-form" class="contact-form fl-wrap">
                                        <div id="message" style="display: none;"></div>
                                        <form class="custom-form" method="post" id="contact" name="contact">
                                                <fieldset>
                                                        <input class="custom-form_Transport" type="city" name="Transportvon" id="Transportvon:" placeholder="Transport von" value size="40">
                                                        <input class="custom-form_Transport" type="city" name="Transportnach" id="Transportnach:" placeholder="Transport nach" value size="40">
                                                        <input class="custom-form_email" type="text" name="marker-model" id="marker-model" placeholder="Automarke und Modell">
                                                </fieldset>
                                                <h4>Wie wollen Sie kontaktiert werden?</h4>
                                                <fieldset>
                                                        <label style="padding-top:20px;">Name</label><span id="userName-info" class="info"></span><br />
                                                        <input class="custom-form_name" type="name" name="name" id="name" placeholder="Dein Name *" minlength="4" maxlength="25" required>
                                                        <input class="custom-form_email" type="email" name="email" id="email" placeholder="Email Address*" required>
                                                        <!-- <input class="custom-form_email" type="email" name="email" id="email" placeholder="Email Address*" oninput="this.value = this.value.replace(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/).replace(/(\..*?)\..*/g, '$1');" required> -->
                                                        <input class="custom-form_email" type="tel" name="tel" id="tel" placeholder="Tel *" minlength="10" max="16" oninput="this.value = this.value.replace(/[^0-9+]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                                                        <textarea class="custom-form_msg" name="msg" id="msg" placeholder="Ihre Nachricht:" minlength="50" max="1000" required></textarea>
                                                </fieldset>
                                                <br>
                                                <p><input type="checkbox" name="checkbox" value="1" aria-required="true" aria-invalid="false" required>     Mit der Nutzung dieses Formulars erkl&auml;ren Sie sich mit der Speicherung und Verarbeitung Ihrer Daten durch diese Website einverstanden.</p>
                                                <button class="btn float-btn" style="margin-top:25px;" name="submit" id="submit"><i class="fas fa-caret-right"></i><span>Nachricht senden</span></button>
                                        </form>
                                </div>
                                <!-- contact form  end-->
                        </div>
                </div>
                <div class="contact-form-overlay"></div>
        </div>
        <?php
        include "src/footer.src.php";
        // include "src/footer.scp.php";
        ?>