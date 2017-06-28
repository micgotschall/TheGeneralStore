<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("inc/head.php"); include("inc/functions.php"); 
    
    $nextthreeblog=returnAllRecordInfo("date DESC",0,6,"blog");
    $bloghtml="";
foreach($nextthreeblog as $article){
    $descarray=explode(" ",$article['posting']);
    $shortdesc="";
    foreach ($descarray as $i => $word){
        if ($i<25){
            $shortdesc.=$word;
        }
        if ($i!=24){
            $shortdesc.=" ";
        }
    }
    $shortdesc.="...";
    $slug=slugify($article['title']);
    $img='http://www.missionbaymedia.com/admin/'.$article['img'];
    list($width, $height, $type, $attr)=getimagesize($img);
    if($width>$height){
        $adjustedheight=270;
        $adjustedwidth=($width*$adjustedheight)/$height;
        $pixeloffset=($adjustedwidth-300)/2;
        $cropstyle="margin-left:-".$pixeloffset."px;";
    }
    else{
        $adjustedwidth=300;
        $adjustedheight=($height*$adjustedwidth)/$width;
        $pixeloffset=($adjustedheight-270)/2;
        $cropstyle="margin-top:-".$pixeloffset."px;";
    }
$bloghtml.='                    <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <a class="blog-image" href="/blog/'.$article['id'].'/'.$slug.'/"><img src="'.$img.'" alt="'.$article['title'].'" style="'.$cropstyle.'"></a>
                        <h3><a href="/blog/'.$article['id'].'/'.$slug.'/">'.$article['title'].'</a></h3>
                        <p class="text-muted">'.$shortdesc.'</p>
                        <a href="/blog/'.$article['id'].'/'.$slug.'/" class="btn btn-default">Read More!</a>
                    </div>
                </div>';
    
}
    ?>
    <script src="js/creative.js"></script>
</head>

<body id="page-top">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Products</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Members</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header id="home">
        <div id="cbp-fwslider" class="cbp-fwslider">
            <ul>
                <li>
                    <a href="#"><img src="img/1.jpg" alt="img01" /></a>
                </li>
                <li>
                    <a href="#"><img src="img/2.jpg" alt="img02" /></a>
                </li>
                <li>
                    <a href="#"><img src="img/3.jpg" alt="img03" /></a>
                </li>
                <li>
                    <a href="#"><img src="img/4.jpg" alt="img04" /></a>
                </li>
                <li>
                    <a href="#"><img src="img/5.jpg" alt="img05" /></a>
                    <div class="container">
                        <div class="fb-page" data-href="https://www.facebook.com/generalstorecoop" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/generalstorecoop"><a href="https://www.facebook.com/generalstorecoop">The General Store Co-op</a></blockquote>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <script>
            jQuery(document).ready(function() {
                jQuery('#cbp-fwslider').cbpFWSlider();
            });

        </script>
    </header>


    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">About the General Store</h2>
                    <hr class="light">
                    <p class="text-faded">Mlkshk cardigan PBR&amp;B paleo. Brunch Etsy retro church-key twee Schlitz. Next level tofu sriracha butcher. Mixtape disrupt post-ironic authentic blog bespoke. Kale chips freegan banh mi pour-over mlkshk mumblecore. Skateboard whatever sartorial, four loko ennui butcher Pinterest. Mixtape small batch Odd Future kogi. Thundercats kogi pork belly, Shoreditch craft beer farm-to-table narwhal Schlitz pop-up Brooklyn. 90's semiotics PBR&amp;B dreamcatcher hashtag mixtape. </p>
                    <p class="text-faded">Viral distillery bespoke, beard skateboard Etsy banjo letterpress keytar forage Odd Future Bushwick dreamcatcher. Bespoke readymade ethical iPhone aesthetic, umami taxidermy Truffaut seitan. Viral 3 wolf moon yr, squid sartorial street art PBR&amp;B keytar brunch bespoke Schlitz. Four loko plaid fashion axe taxidermy fanny pack. Trust fund iPhone Williamsburg, try-hard Portland fingerstache mlkshk crucifix dreamcatcher Thundercats next level slow-carb listicle.</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>We are <em>"by the stuents for the students."</em></h2>
                <a href="members.php" class="btn btn-default btn-xl wow tada">See our members</a>
            </div>
        </div>
    </aside>

    <section id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Events</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img class="event-img" src="img/events/open_mic.jpg">
                        <h3>Open Mic</h3>
                        <p class="text-muted">A short synopsis of our no-doubt swaggy and mindblowing event.</p>
                        <a href="#" class="btn btn-default">Learn more!</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img class="event-img" src="img/events/open_mic_2.jpg">
                        <h3>Open Mic</h3>
                        <p class="text-muted">A short synopsis of our no-doubt swaggy and mindblowing event.</p>
                        <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img class="event-img" src="img/events/open_mic.jpg">
                        <h3>Open Mic</h3>
                        <p class="text-muted">A short synopsis of our no-doubt swaggy and mindblowing event.</p>
                        <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img class="event-img" src="img/events/open_mic_2.jpg">
                        <h3>Open Mic</h3>
                        <p class="text-muted">A short synopsis of our no-doubt swaggy and mindblowing event.</p>
                        <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="no-padding" id="portfolio">

    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>We buyback textbooks at the best rate around!</h2>
                <a href="books.html" class="btn btn-default btn-xl wow tada">Tell me more</a>
            </div>
        </div>
    </aside>
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Blog Posts</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
<?php 
            echo $bloghtml;
                    ?>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Get in touch if you have thoughts, comments, questions or if we just need to stock your favorite product.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 col-sm-12 text-center">
                    <div class="feedback-container">
                        <form id="interest-form" name="interest-form" method="get">
                            <div class="send-result"></div>
                            <input type="text" name="fname" id="fname" value="First Name" default-text="First Name"><?echo "<!--
                            -->" ?><input type="text" name="lname" id="lname" value="Last Name" default-text="Last Name">
                            <input type="email" name="email" id="email" value="Email Address" default-text="Email Address">
                            <textarea type="text" name="message" id="message" default-text="Comments">Comments</textarea>
                            <label for="captcha" name="captcha">Are you a human? Give it the 'ol college try.</label>
                            <p class="prompt"><span id="num1"></span> + <span id="num2"></span> = </p>
                            <input type="text" name="captcha" id="captcha" value="" default-text="">
                            <button type="submit" id="submit" name="submit" value="SUBMIT" class="submit">Submit</button>
                        </form>
                    </div>
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <span class="network-name">Find us on:</span>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/generalstorecoop/" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/gstorecoop/" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>Copyright © Kieran Mann 2015</p>
            <a class="page-scroll" href="#home"><i class="fa fa-chevron-circle-up pull-right" id="up-button"></i></a>
            <a href="mailto:kmann@missionbaymedia.com"><i class="fa fa-envelope pull-right" id="up-button"></i></a>
        </div>
    </footer>

</body>

</html>
