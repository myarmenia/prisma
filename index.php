<html dir="ltr" lang="en-US">
<head>
<?php 
//echo !extension_loaded('openssl')?"Not Available":"Available";
//phpinfo();
include('head.php');
?>
    <style>
        .hesperiden .tp-tab {
            border-bottom: 0;
        }

        .hesperiden .tp-tab:hover,
        .hesperiden .tp-tab.selected {
            background-color: #E5E5E5;
        }
    </style>
</head>
<body class="stretched overlay-menu">
<iframe src="prisma_anim.html" width="400" height="400" align="left"
        style="position: fixed;top: 50%;right: -77px;z-index: 140;"></iframe>
<div id="wrapper" class="clearfix">
    <header id="header-own" class="sticky-style-2">
<?php
 include('header.php');
 ?>
    </header>
    <section id="slider" class="slider-element revslider-wrap clearfix">
        <div class="rev_slider_wrapper1"
             style="width: 100%;margin: 0 auto; background: url('images/board.jpg') no-repeat center; background-size: cover;padding:0px;margin-top:0px;margin-bottom:0px; height:600px">
            <div id="slider_text" class="section center nobg" style="padding:350px 0 300px">
                <div class="alternate-reverse"></div>
                <h3 id="inner" class="h1 t700 own <?php if($lng === 'arm'){ echo 'own-h4';}?>"
                    data-animate="slideInRight" style="color: #ffc917;position: relative;bottom: -25px;"><?php echo vazox;?>
                </h3>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="btns primary-navigation-wrapper">
            <nav class="primary-navigation">
                <a id="abouts" class="pbutton  btn js-btn"><?php echo About;?></a>
                <a id="services" class="pbutton btn js-btn"><?php echo Services;?></a>
                <a id="news" class="pbutton btn js-btn" style="display: <?php echo $s_news>=3 ?  'block' : 'none'; ?>"><?php echo News;?></a>
                <a id="careers" class="pbutton btn js-btn"
                   style="display: <?php echo $s_jobs>0 || $s_intern>0?  'block' : 'none'; ?>"><?php echo Careers;?></a>
                <a id="contacts" class="pbutton btn js-btn"><?php echo Contact;?></a>
            </nav>
        </div>
    </section>
    <section id="content-about" class="js-section abouts">
        <div class="content-wrap" style="transform: none;">
            <div class="container clearfix" style="transform: none;">

                <h4 class="mb-2 ls1 uppercase t700"><?php echo About;?></h4>
                <div class="line line-xs line-sports"></div>
                <div class="row clearfix not-animate" data-animate="fadeIn" style="transform: none;">
                    <div class="col-md-4 p-3">
                        <div class="entry-div">
                            <div class="entry mb-1 dark clearfix"
                                 style="background: url('images/about/2.jpg') no-repeat center bottom; background-size: cover; height: 397px;">
                                <div class="entry-title pt-3">
                                    <h3 class="text-light"><?php echo OVERVIEW;?></h3>
                                </div>
                                <div class="entry-content">
                                    <p class="t300"> <?php echo OVERVIEW_t;?> ...</p>
                                </div>
                                <div style="position: absolute; left: 0; bottom: 46px; width: 100%;" class="more-about">

                                    <ul class="entry-meta hover clearfix">
                                        <li class="fleft ls1"><a id="ab2" class="read-more-abt" href="#"
                                                                 style="color:#ffc917"><?php echo read_more;?> →
                                            <div class="content-ab2" style="display:none">
                                                <h1><?php echo OVERVIEW;?></h1>
                                                <p><?php echo OVERVIEW_t_long;?>
                                                </p>
                                            </div>
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 p-3">
                        <div class="entry-div">
                            <div class="entry mb-1 dark clearfix"
                                 style="background: url('images/about/1.jpg') no-repeat center bottom; background-size: cover; height: 397px;">
                                <div class="entry-title pt-3">
                                    <h3 class="text-light"><?php echo VALUES;?></h3>
                                </div>
                                <div class="entry-content">
                                    <p class="t300"><?php echo VALUES_t;?> ...</p>

                                </div>
                                <div style="position: absolute; left: 0; bottom: 46px;width: 100%;" class="more-about">


                                    <ul class="entry-meta hover clearfix">
                                        <li class="fleft ls1"><a id="ab1" class="read-more-abt" href="#"
                                                                 style="color:#ffc917"><?php echo read_more;?> →
                                            <div class="content-ab1" style="display:none">
                                                <h1><?php echo VALUES;?></h1>
                                                <p><?php echo VALUES_t_long;?></p>
                                            </div>


                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="entry-div">
                            <div class="entry mb-1 dark clearfix"
                                 style="background: url('images/about/3.jpg') no-repeat center bottom; background-size: cover; height: 397px;">
                                <div class="entry-title pt-3">
                                    <h3 class="text-light"><?php echo TEAM;?></h3>
                                </div>
                                <div class="entry-content">
                                    <p class="t300"><?php echo TEAM_t;?>... </p>
                                </div>
                                <div style="position: absolute; left: 0; bottom: 46px; width: 100%;" class="more-about">
                                    <ul class="entry-meta hover clearfix">
                                        <li class="fleft ls1"><a id="ab3" class="read-more-abt" href="#"
                                                                 style="color:#ffc917"><?php echo read_more;?> →
                                            <div class="content-ab3" style="display:none">
                                                <h1><?php echo TEAM;?></h1>
                                                <p><?php echo TEAM_t_long;?></p></div>
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="content-service" class="js-section services">
        <div id="price"
             class="content-wrap section page-section parallax nobottompadding nobottommargin dark skrollable skrollable-before"
             style="height: 800px;background-image: url(&quot;images/3.jpg&quot;); background-size: cover;  background-position: 0px 0px;"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px 
	300px;">
            <div class="heading-block bottommargin-lg center clearfix">
                <h1 class="parall-logo-name"><?php echo Prisma;?> </h1>
                <h4 class="parall-text"><?php echo Prisma_t;?> </h4>
            </div>
            <div class="container clearfix  m-3">
                <div class="row clearfix">
                    <div class="col-md-12">

                        <h4 class="mb-2 ls1 uppercase t700 <?php if($lng === 'arm'){ echo 'own-h4';}?>"><?php echo Services;?> </h4>
                        <div class="line line-xs line-sports"></div>

                        <div class="row1 mt-5">
                            <div class="row not-animate" data-animate="bounceInLeft">
                                <div class=" col-md-6 entry feature-box p-4 media-box">
                                    <div class="fbox-desc">
                                        <h3 class="ls0 <?php if($lng === 'arm'){ echo 'own-h3';}?>"><?php echo Services1;?></h3>
                                        <p class="mt-2"><?php echo Services1_t;?>
                                        </p>
                                    </div>
                                    <a href="strategic" target="_blank" class="btn btn-link mt-3 t400 color p-0"
                                       style="font-size: 16px;"><?php echo read_more;?> <i
                                            class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
                                </div>
                                <div class=" col-md-6 entry feature-box p-4 media-box">
                                    <div class="fbox-desc">
                                        <h3 class="ls0 <?php if($lng === 'arm'){ echo 'own-h3';}?>"><?php echo Services2;?></h3>
                                        <p class="mt-2"><?php echo Services2_t;?></p>
                                    </div>
                                    <a href="research" target="_blank" class="btn btn-link mt-3 t400 color p-0"
                                       style="font-size: 16px;"><?php echo read_more;?> <i
                                            class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
                                </div>
                            </div>
                            <div class="row mt-5 own not-animate" data-animate="bounceInRight">
                                <div class=" col-md-6 entry feature-box p-4 media-box">

                                    <div class="fbox-desc">
                                        <h3 class="ls0 <?php if($lng === 'arm'){ echo 'own-h3';}?>"><?php echo Services3;?></h3>
                                        <p class="mt-2"><?php echo Services3_t;?></p>
                                    </div>
                                    <a href="monitoring" target="_blank" class="btn btn-link mt-3 t400 color p-0"
                                       style="font-size: 16px;"><?php echo read_more;?> <i
                                            class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
                                </div>
                                <div class=" col-md-6 entry feature-box p-4 media-box">
                                    <div class="fbox-desc">
                                        <h3 class="ls0 <?php if($lng === 'arm'){ echo 'own-h3';}?>"><?php echo Services4;?></h3>
                                        <p class="mt-2"><?php echo Services4_t;?></p>
                                    </div>
                                    <a href="capacity" target="_blank" class="btn btn-link mt-3 t400 color p-0"
                                       style="font-size: 16px;"><?php echo read_more;?> <i
                                            class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="new" class="js-section news" style="display: <?php echo $s_news>=3 ?  'block' : 'none'; ?>">
        <div id="price"
             class="section page-section parallax nobottompadding nobottommargin dark skrollable skrollable-before"
             style="height: 800px;background-image: url(&quot;images/news.jpg&quot;); background-size: cover;  background-position: 0px 0px;"
             data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px 
	300px;">
            <div class="heading-block bottommargin-lg center clearfix">
                <h1 class="parall-logo-name"><?php echo Prisma;?> </h1>
                <h4 class="parall-text"><?php echo Prisma_t;?> </h4>
            </div>
            <div class="content-wrap1 " style="transform: none;">
                <div class="container clearfix mt-5">
                    <div class="row clearfix">
                        <h4 class="mb-2 ls1 uppercase t700"><?php echo News;?></h4>
                        <div class="line line-xs line-sports"></div>
                        <?php 
				if($s_news>=3){
                        include('insert_news.php');
                        }
                        ?>
                    </div>
                </div>
            </div>

    </section>
    <section id="career" class="js-section  not-animate careers <?php echo $s_news>=3 ?'': 'light'; ?>"
             data-animate="fadeIn" style="display:block">
        <div class="content-wrap" style="transform: none;">
            <div class="container clearfix ">
                <div class="heading-block bottommargin-lg center clearfix">
                    <h1 class="parall-logo-name"><?php echo Prisma;?> </h1>
                    <h4 class="parall-text"><?php echo Prisma_t;?></h4>
                </div>
                <div class="row" style="display: <?php echo $s_jobs>0 || $s_intern>0 ?  '' : 'none'; ?>">
                    <?php		 
	 if ($s_jobs>0){include('insert_jobs.php');}
                    if ($s_intern>0){include('insert_intern.php');}
                    ?>
                </div>

                <div class="container clearfix mt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="mb-2 ls1 uppercase t700"
                                style="text-align: left; color:#fff!import"><?php echo parners;?></h4>
                            <div class="line line-xs line-sports"></div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                 <?php 
                                    include('insert_partners.php');
                                ?>
                                <div class="col-md-3"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="black" class="mfp-bg mfp-no-margins mfp-fade mfp-ready"></div>
    <div>
        <div id="about_text" class="mfp-wrap mfp-auto-cursor mfp-no-margins ">
            <div class="content">
                <h1></h1>
                <p></p>
            </div>
            <button title="Close" type="button" class="mfp-close">×</button>
        </div>
    </div>
</div>

<div id="apply-form" class="mfp-wrap mfp-auto-cursor mfp-no-margins " tabindex="-1" style=" overflow: hidden auto;">
    <div class="mfp-container mfp-s-ready mfp-inline-holder">
        <div class="mfp-content">
            <div class="modal1 subscribe-widget undefined animated" id="myModal1">
                <div class="block dark divcenter"
                     style="background-color: rgba(0, 0, 0, 0.58); max-width: 430px; box-shadow: rgb(0, 0, 0) 0px 0px 20px; height: 400px;"
                     data-height-xl="400">
                    <div style="padding: 40px; display: flex;justify-content: center;">
                        <form id="own_form" class="widget-subscribe-form2 custumjs" action="apply_career.php"
                              method="post" style="max-width: 400px;">
                            <div class="form-result"></div>
                            <input type="text" id="prof" name="prof"
                                   class="form-control form-control-lg not-dark required">
                            <input type="text" id="name" name="name"
                                   class="form-control form-control-lg not-dark required"
                                   placeholder="<?php echo full_name;?>">
                            <input type="email" id="email" name="email"
                                   class="form-control form-control-lg not-dark required email"
                                   placeholder="<?php echo Email;?>">
                            <input id="p" type="hidden" name="p" value="1"/>
                            <input id="job_type" name="job_type" type="hidden"/>
                            <label for="exampleFormControlFile1"><?php echo Attache;?></label>
                            <input type="file" name="fayl" class="form-control-file" id="exampleFormControlFile1"
                                   required>
                            <button class="button button-rounded button-border button-light noleftmargin inlin"
                                    style="margin-top:20px;"><?php echo Apply;?></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <button title="Close" type="button" class="mfp-close">×</button>
</div>

<footer id="footer" class="dark js-section contacts" style="background-color: rgb(85, 86, 86);">
    <div class="container fon">
        <div class="heading-block bottommargin-lg center clearfix">
            <h1 class="parall-logo-name"><?php echo Prisma;?> </h1>
            <h4 class="parall-text"><?php echo Prisma_t;?></h4>
        </div>
        <div class="footer-widgets-wrap row clearfix" style="display: flex;
    justify-content: center;">
            <div class="col-lg-8 col-sm-7 mb-5 mb-sm-0">
                <div class="widget widget_links clearfix">
                    <div id="q-contact" class="widget quick-contact-widget form-widget clearfix">
                        <h4 class="highlight-me"><?php echo Quick_Contact;?></h4>
                        <form id="quick-contact-mail" action="form.php" method="post"
                              class="quick-contact-form nobottommargin customjs">
                            <div class="form-result_mail"></div>
                            <input type="text" class="required sm-form-control input-block-level" id="name-form"
                                   name="name-form" value="" placeholder="<?php echo full_name;?>"/>
                            <input type="text" class="required sm-form-control email input-block-level" id="email-form"
                                   name="email-form" value="" placeholder="<?php echo Email;?>">
                            <textarea class="required sm-form-control input-block-level short-textarea" id="mess-form"
                                      name="mess-form" rows="4" cols="30" placeholder="<?php echo mess;?>"></textarea>
                            <input type="text" class="hidden" id="quick-contact-form-botcheck"
                                   name="quick-contact-form-botcheck" value="">
                            <input type="hidden" name="prefix" value="quick-contact-form-">
                            <button type="submit" id="email-submit" class="button button-small button-3d"
                                    value="submit"><?php echo Send_Email;?></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 mb-5 mb-lg-0">
                <div>
                    <address class="address">
                        <p style="margin-bottom:0"><?php echo mob;?>: +374 95005011 | +374 95005218</p>
                        <p><?php echo Email;?>: info@prisma.am </p>

                        <div class="align-self-center">
                            <div>
                                <a href="#" class="social-icon inline-block si-small si-rounded  si-mini si-skype own">
                                    <i class="icon-skype"></i>
                                    <i class="icon-skype"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-rounded  si-mini si-viber own">
                                    <i class="icon-viber"></i>
                                    <i class="icon-viber"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-rounded  si-mini si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-rounded si-mini si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-rounded  si-mini si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div id="copyrights" class="">
        <div class="container clearfix">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-4 col-xs-12 align-self-center">
                    <div id="logo" style=" margin-right: 19px">
                        <a href="index.php" class="standard-logo"><img class="divcenter" src="images/logo.png"
                                                                       alt="Prisma Logo" width="123px"
                                                                       height="auto"></a>
                    </div>
                </div>

                <div class=" col-md-4 col-sm-4 col-xs-12 align-self-center">
                    <div style="text-align: center;font-size: 13px"><?php echo Copyrights;?></div>
                    <div style="text-align: center;font-size: 13px"><?php echo dev;?>   <a href="https://web-ex.tech/"
                                                                                           target="_blank">Webex
                        Technologies LLC </a></div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 align-self-center">
                    <div class="copyrights-menu fright copyright-links m-0 clearfix">
                        <div style="display: flex;justify-content: center; z-index:200; position:relative">
                            <a href="#"
                               class="social-icon inline-block si-small si-rounded  si-mini si-colored  si-skype">
                                <i class="icon-skype"></i>
                                <i class="icon-skype"></i>
                            </a>
                            <a href="#"
                               class="social-icon inline-block si-small si-rounded  si-colored si-mini si-viber">
                                <i class="icon-viber"></i>
                                <i class="icon-viber"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<div id="gotoTop" class="icon-angle-up"></div>
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
<script src="plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugin/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/scroll.js"></script>
<script src="js/news.js"></script>

<script>
    var k = 0;

    <?php
    if($lng === 'arm'){
        echo  "var t=['Փաստահեն ընտրություն','Տվյալները խոսում են','Տվյալների միտումները կանխագուշակում են ապագան','Որակյալ ռազմավարությունն առավելություն է']";
    }
    elseif($lng === 'eng'){
        echo  "var t=['Evidence Based Choices','Listen to Data','Plan Strategically – It’s Efficient','Trends Tell The Future']";

    }

    ?>

    var tpj=jQuery;
    tpj(document).ready(function() {
        tpj(".nav-link").click(function (e) {
            e.preventDefault();
            var id_t = tpj(this).attr('id')
            $(this).addClass("bg-dark");
            tpj('.nav-link').each(function () {
                if (id_t != $(this).attr('id')) {
                    $(this).removeClass("bg-dark");
                }
            })
            $.ajax({
                method: 'POST',
                url: 'set_lng.php',
                data: {data: id_t},
            }).done(function (status) {
                $("#lng_set").html(status);

            });
//console.log(tpj(this).attr('id'))

        });

        tpj(".no_action").click(function (e) {e.preventDefault();});
        tpj(".menu_cl").click(function () {
        var url=tpj(this).attr('data-href');
        var id="#"+tpj(this).attr('data-id');
        var id_t=tpj(this).attr('data-id');
        setTimeout(function(){
        //console.log(id)
        tpj(id).removeClass().addClass( "pbutton btn js-btn active aa" )},10)
        if(id === '#home' || id === '#abouts' || id === '#contacts'|| id === '#services' ||  id === '#news' || id === '#careers' || id === '#interns' ){
        window.location.href=url;
        tpj('.js-btn').each(function(){
        if(id_t != $(this).attr('id') ){
        $(this).removeClass().addClass( "pbutton btn js-btn" );
    }
    })

    }
        else{
        window.open(
        url,
        '_blank'
        );


    }
    })
        setInterval(function(){
        k++;
        if(k<4){
        tpj("#inner").text(t[k]);
        if(!(k%2)){
        tpj("#inner").removeClass().addClass('h1 t700 slideInRight own animated');
    }
        else{
        tpj("#inner").removeClass().addClass('h1 t700 slideInLeft  own animated');
    }
    }
        else{
        k=0;
        tpj("#inner").text(t[k]);
        if(!(k%2)){
        tpj("#inner").removeClass().addClass('h1 t700 slideInRight own animated');
    }
        else{
        tpj("#inner").removeClass().addClass('h1 t700 slideInLeft own animated');
    }
    }

    },6000)
        // about

        tpj(".read-more-abt").click(function(e){
        e.preventDefault();
        var id = tpj(this).attr('id');
        var class_name=".content-"+id;
        var code=tpj(class_name).html();
        tpj("#about_text").css({"opacity":"1", "z-index":"1043"})
        tpj("#about_text .content ").html(code);
        tpj("#black").css({"opacity":"1", "z-index":"1043"});
        tpj(".mfp-close").click(function(){
        tpj("#black").removeAttr('style');
        tpj("#about_text .content").text('');
        tpj("#about_text").css({"opacity":"0", "z-index":"-1"});
    })
    })

        if(tpj(".job_intern")){
        $("#stat").html('');
        tpj(".job_intern").click(function(){
        tpj("#own_form").trigger('reset');
        $('#job_type').val('intern');
        var l=tpj(this);
        var id = "#prof"+l.attr('id');
        var proff= tpj(id).html();
        tpj("#black, #apply-form").css({"opacity":"1", "z-index":"1043"});
        tpj("input#prof").css({"color":"#FFC107", "pointer-events": "none" }).val(proff);
        tpj(".mfp-close").click(function(){
        tpj("#black, #apply-form").removeAttr('style');
        tpj("input#prof").removeAttr('style');
    })
        tpj(".inlin").on('click', function(e){
        e.preventDefault();
        var form = this.form;
        send_ajax(form);
    })
    })
    }

        tpj("#email-submit").click(function(e){
        e.preventDefault();
        // console.log("click")
        var email = tpj('#email-form').val().trim();
        var name = tpj('#name-form').val().trim();
        var mess = tpj('#mess-form').val().trim();
        //  console.log("click")
        var form = this.form;
        if (email && name && mess) {
        // console.log("click_if")
        send_ajax(form,'email');
    }
        else{
        // console.log("click_else")
        tpj(".form-result_mail").html('<span style="color:red; margin: 0 3px 10px;display: block;"><?php echo status; ?></span>');
    }
    })




        if(tpj(".job")){
        tpj(".job").click(function(){
        $("#stat").html('');
        tpj("#own_form").trigger('reset');
        var l=tpj(this);
        var id = "#prof"+l.attr('id');
        $('#job_type').val('job');
        var proff= tpj(id).html();
        tpj("#black, #apply-form").css({"opacity":"1", "z-index":"1043"});
        tpj("input#prof").css({"color":"#FFC107", "pointer-events": "none" }).val(proff);
        tpj(".mfp-close").click(function(){
        tpj("#black, #apply-form").removeAttr('style');
        tpj("input#prof").removeAttr('style');
    })
        tpj(".inlin").on('click', function(e){
        e.preventDefault();
        var form = this.form;
        var prof = tpj('#prof').val().trim();
        var email = tpj('#email').val().trim();
        var name = tpj('#name').val().trim();
        var file = tpj('input[type="file"]').val().trim();

        if (prof && name && file && email) {
        send_ajax(form,'job');
    }
        else{
        tpj(".form-result").html('<span style="color:red;"><?php echo status; ?></span>');
    }
    })

    })
    }
    });

    function send_ajax(form,id){
        var data = new FormData(form);
        var url = form.action;
        $.ajax({
        type: 'POST',
        url: url,
        data: data,
        processData: false,
        contentType: false
    }).done(function (status) {
        if(id === 'job'){
        $(".form-result").html(status);
        tpj("#own_form").trigger('reset');
        setTimeout(function(){
        tpj(".mfp-close").trigger('click');
    },2000)
    }
        $(".form-result_mail").html(status);
        tpj("#quick-contact-mail").trigger('reset');
        setTimeout(function(){
        tpj(".form-result_mail").html('');
    },2000)
    });


    }

</script>

</body>
</html>