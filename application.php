<?php
/* $error = '';
  $error = $_GET['value']; */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AKP - Online Application</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le styles -->
        <link href="bootstrap.min.css" rel="stylesheet"/>

        <link href="style/multi_menu.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/load-scripts.js?1204201209"></script>

        <script language="text/javascript" src="js/gen_validatorv4.js">

        <script type="text/javascript">

                var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-23019901-1']);
            _gaq.push(['_setDomainName', "bootswatch.com"]);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <script type="text/javascript">

            function renderpage(pages){
                var iframe = document.createElement("iframe");
                iframe.setAttribute("src", pages);

                if(pages == 'maidoverview.html'){
                    iframe.style.width = 1000+"px";
                    iframe.style.height = 1300+"px";
                }else if(pages == 'localoverview.html'){
                    iframe.style.width = 1000+"px";
                    iframe.style.height = 1300+"px";
                }else if(pages == './accreditation.html'){
                    iframe.style.width = 1000+"px";
                    iframe.style.height = 700+"px";
                }else{
                    iframe.style.width = 1000+"px";
                    iframe.style.height = 500+"px";
                }
                iframe.setAttribute("frameborder", "0");
                var content_div = document.getElementById("service-content");
                content_div .innerHTML = '';
                content_div.appendChild(iframe)
            }
        </script>

        <style type="text/css">
            .rockable, .useful-links, .social {
                float: left;
                line-height: 18px;
                margin: 40px 0 0;
                width: 320px;
            }
            ol, ul {
                list-style: none inside none;
            }
            .rockable h5, .useful-links h5, .social h5 {
                color: #FFFFFF;
                font-family: 'Ubuntu',arial,serif;
                font-size: 18px;
                font-style: italic;
                margin: 0 0 30px;
                text-shadow: 1px 1px 0 #000000;
            }

            .rockable li, .useful-links li {
                list-style-image: url("li_image.png");
            }
            .rockable li a, .useful-links li a {
                color: #DADADA;
                font-family: Verdana,Geneva,sans-serif;
                font-size: 11px;
                text-decoration: none;
                text-shadow: 1px 1px 0 #000000;
            }
            #footer-container {
                margin: 0 auto;
                width: 960px;
            }
            #footer-shadow {
                background: url("footer-shadow.png") repeat-x scroll 0 0 transparent;
                height: 15px;
                margin-top: -15px;
                position: absolute;
                width: 100%;
            }

            #footer-area {
                background: url("footer_bg2.jpg");
                height: 201px;
                position: relative;
            }

            #footer-area {
                background: url("footer_bg2.jpg") repeat-x scroll 0 0 transparent;
                height: 201px;
                position: relative;
            }
            h1, h2, h3, h4, h5, h6 {
                clear: both;
                font-weight: normal;
            }

            .twitter-bird {
                background: url("twi_bird.png") no-repeat scroll 0 0 transparent;
                cursor: pointer;
                float: left;
                height: 26px;
                width: 100px;
            }
            .twitter-bird a {
                color: #DADADA;
                font-family: Verdana,Geneva,sans-serif;
                font-size: 11px;
                padding: 0 0 0 50px;
                text-decoration: none;
            }

            .facebook-icon {
                background: url("facebok_icon.png") no-repeat scroll 0 0 transparent;
                cursor: pointer;
                float: left;
                height: 26px;
                width: 110px;
            }
            .twi-bird a {
                color: #DADADA;
                font-family: Verdana,Geneva,sans-serif;
                font-size: 11px;
                padding: 0 0 0 40px;
                text-decoration: none;
            }
            .facebook-icon a {
                color: #DADADA;
                font-family: Verdana,Geneva,sans-serif;
                font-size: 11px;
                padding: 0 0 0 40px;
                text-decoration: none;
            }
            .rss-footer a {
                color: #DADADA;
                font-family: Verdana,Geneva,sans-serif;
                font-size: 11px;
                padding: 0 0 0 45px;
                text-decoration: none;
            }
        </style>
        <style type="text/css">

            .navbar-inner {
                background: url("home3.jpg");
                height: 80px;
            }
            .body-content{
                background: url("featured_bg.jpg");
            }
            .navbar .brand {
                color: #F5F3DC;
                font-size: 26px;
                padding: 5px;
            }
            .copyright-container {
                margin: 0 auto;
                width: 960px;
            }
            #copyright-area {
                background: url("copyright_bg.jpg") repeat-x scroll 0 0 transparent;
                height: 29px;
            }
            #nav-wrapper {
                height: auto;
                position: absolute;
                top: 130px;
                right:0px;
                width:103%;
                z-index: 39000;
            }
            div#nav-wrapper ul.no-subnav {
                background: url("bg-main-nav-skinny.png") repeat-x scroll left top transparent;
                height: 61px;
            }
            #main-nav li#neighborhood {
                background: url("nav-frame.png") no-repeat scroll left top transparent;
                margin-left: -489px;
            }
            #main-nav li#transportation {
                background: url("nav-frame.png") no-repeat scroll left top transparent;
                margin-left: -277px;
            }
            #main-nav li#home {
                height: 42px;
                margin-left: -94px;
                top: 7px;
                width: 188px;
            }

            #main-nav li#history {
                background: url("nav-frame.png") no-repeat scroll left top transparent;
                margin-left: 137px;
            }

            #main-nav li#development {
                background: url("nav-frame.png") no-repeat scroll left top transparent;
                margin-left: 349px;
            }
            #main-nav li {
                display: block;
                height: 24px;
                left: 50%;
                overflow: hidden;
                position: absolute;
                top: 13px;
                width: 140px;
            }

            /*  #main-nav li#transportation a {
                  background: url("nav-sprite-transportation.png") no-repeat scroll 50% 0 transparent;
              }
            */
            #main-nav li a {
                display: block;
                height: 48px;
                position: absolute;
                text-indent: 40px;
                top: 0;
                width: 100%;
                text-decoration: none;
            }
            #nav-wrapper.stick {
                position: fixed;
                top: 0;
            }

            /*a {
                -moz-transition: color 0.25s ease 0s;
                color: #F6871F;
                font: bold 14px/25px "Droid Sans",Helvetica,Arial,sans-serif;
                text-decoration: none;
            }*/
            ul#sub-nav li a {
                -moz-transition: color 0.25s ease 0s;
                color: #222222;
                display: inline;
                font: bold 12px/10px "Droid Sans",Helvetica,Arial,sans-serif;
                text-transform: uppercase;
            }


            a:link {
                color: #FFFFFF;

            }

            a:hover {
                color: #F5AB67;
            }
            a:link {
                text-decoration:  none;

            }

            ul#sub-nav li a:hover, ul#sub-nav li a:active {
                color: #F6871F;
            }
            ul#sub-nav a.subnav-selected {
                color: #F6871F;
            }

            #main-nav li#home a {
                background: url("homelinkimg.png") no-repeat scroll left top transparent;
                height: 100%;
                left: 0;
                width: 100%;
            }
            @font-face {
                font-family: 'Droid Sans';
                font-style: normal;
                font-weight: bold;
                src: local('Droid Sans Bold'), local('DroidSans-Bold'), url('http://themes.googleusercontent.com/static/fonts/droidsans/v3/EFpQQyG9GqCrobXxL-KRMQFhaRv2pGgT5Kf0An0s4MM.woff') format('woff');
            }
            @font-face {
                font-family: 'Droid Sans';
                font-style: normal;
                font-weight: normal;
                src: local('Droid Sans'), local('DroidSans'), url('http://themes.googleusercontent.com/static/fonts/droidsans/v3/s-BiyweUPV0v-yRb-cjciBsxEYwM7FgeyaSgU71cLG0.woff') format('woff');
            }
            @font-face {
                font-family: 'Vollkorn';
                font-style: italic;
                font-weight: normal;
                src: local('Vollkorn Italic'), local('Vollkorn-Italic'), url('http://themes.googleusercontent.com/static/fonts/vollkorn/v3/Oiz0tNwvC-Nd29SBQWfWTBsxEYwM7FgeyaSgU71cLG0.woff') format('woff');
            }
            .twi-bird{
                background:url("twi_bird.png") no-repeat scroll 0% 0% transparent
            }
            .twi-bird:hover {
                background:url(twi_bird_hover.png) no-repeat;
            }
            .fb-icon{
                background:url("facebok_icon.png") no-repeat scroll 0% 0% transparent
            }
            .fb-icon:hover {
                background:url(facebok_icon_hover.png) no-repeat;
            }
            .rss-icon{
                background:url("rss_footer.png") no-repeat scroll 0% 0% transparent
            }
            .rss-icon:hover {
                background:url(rss_footer_hover.png) no-repeat;
            }
            .word{
                color: #F5F3DC;
                font-size: 15px;
                padding: 0px;
            }

        </style>
        <script type="text/javascript">
            window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=
                    z.s=d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o
            ){z.set._.push(o)};$.setAttribute('charset','utf-8');$.async=!0;z.set.
                    _=[];$.src=('https:'==d.location.protocol?'https://ssl':'http://cdn')+
                    '.zopim.com/?xRcY46uTwYA92tVLsBfjdGy92f0oOc6P';$.type='text/java'+s;z.
                    t=+new Date;z._=[];e.parentNode.insertBefore($,e)})(document,'script')
        </script>
        <link type="text/css" href="css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <link rel="stylesheet" href="css/ui-lightness/demos.css">
        <script type="text/javascript">
            $(function() {
                $( "#service-option").accordion({
                    event: "mouseover",
                    clearStyle: true,
                    autoHeight: false

                });
            });

        </script>

        <style type="text/css">

            li a{
                text-decoration: none;
            }
            li a:hover{
                color: #66CCFF;
            }
            .service-content {
                font-size: 13px;
                word-wrap:break-word;
                float: none;
                padding: 20px;

            }
            div p{
                word-wrap:break-word;
            }
            /*  a:link {color:#ffffff;}
              a:visited {color:#0000FF;}
              a:hover {color:#FF66CC;}
              a:active {color:#0000FF;}*/

            .back-to-top{
                float: right;
            }
            /*#main-nav li#neighborhood a{
                background: url("home.png") no-repeat scroll left top transparent;
            }
            #main-nav li#neighborhood a:hover{
                background: url("home.png") no-repeat scroll left top transparent;
                background-position: 0px -20px;

            }

            #main-nav li#transportation a{
                background: url("about.png") no-repeat scroll left top transparent;
            }
            #main-nav li#transportation a:hover{
                background: url("about.png") no-repeat scroll left top transparent;
                background-position: 0px -22px;

            }

            #main-nav li#history a{
                background: url("service.png") no-repeat scroll left top transparent;
            }
            #main-nav li#history a:hover{
                background: url("service.png") no-repeat scroll left top transparent;
                background-position: 0px -20px;

            }

            #main-nav li#development a{
                background: url("contact.png") no-repeat scroll left top transparent;
                top: 0;
            }
            #main-nav li#development a:hover{
                background: url("contact.png") no-repeat scroll left top transparent;
                background-position:  0px -24px ;
            }*/

        </style>
        <style type="text/css">
            .online-form{
                border:2px solid red;
                text-align: center;
                height: 300px;
                width: 200px;
                background: black;

            }

        </style>

    </head>

    <body class="body-content" data-spy="scroll" data-target=".subnav" data-offset="50">
        <div class="navbar navbar-fixed-top" style="position:absolute">
            <div class="navbar-inner" style="height:150px">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                     <div class="nav-collapse" style="left:30px; position: absolute;">
                        <a class="brand" href="../">
                            <embed src="logo.swf" width="180" height="120" type="application/x-shockwave-flash"/></embed>
                        </a>
                    </div>
                </div>

            </div>
            <header class="jumbotron subhead" id="overview">

                <div id="nav-wrapper">
                    <ul id="main-nav" class="no-subnav">
                        <li id="neighborhood">
                            <a href="index.php" ><b></b></a>
                        </li>
                        <li id="transportation">
                            <a href="aboutus.html"><b></b></a>
                        </li>
                        <li id="home">
                            <a href="/"></a>
                        </li>
                        <li id="history">
                            <a href="service.html" ><b></b></a>
                        </li>
                        <li id="development">
                            <a href="main_contact.html" ><b></b></a>
                        </li>
                    </ul>
                </div>
            </header>
        </div>

        <br/><br/><br/><br/>
        <br/><br/><br/><br/>
        <br/><br/>

        <div class="container" style="min-height:600px">
            <div class="row" >
                <div class="span3" >
                    <div id="service-option">
                        <h3 id="clk"><a href="service.html">Maid Services</a></h3>
                        <div>
                            <ul >
                                <li><a href="service.html">Introduction</a></li>
                                <li><a  onclick="renderpage('./accreditation.html')">Accreditations</a></li>
                                <li><a   onclick="renderpage('maidservice.html')">Services</a></li>
                                <li><a  onclick="renderpage('maidoverview.html')">Overview</a></li>
                                <li><a href="onlineapp.php" >Online Application</a></li>
                            </ul>
                        </div>
                        <h3><a  onclick="renderpage('localintro.html')">Local Recruitment</a></h3>
                        <div>
                            <ul>
                                <li><a  onclick="renderpage('localintro.html')">Introduction</a></li>
                                <li><a  onclick="renderpage('localoverview.html')">Overview</a></li>
                                <li><a  onclick="renderpage('localwhyus.html')">Why Us</a></li>
                            </ul>
                        </div>
                        <h3><a  onclick="renderpage('foreignintro.html')">Foreign Recruitment</a></h3>
                        <div>
                            <ul>
                                <li><a  onclick="renderpage('foreignintro.html')">Introduction</a></li>
                            </ul>
                        </div>
                        <h3><a  onclick="renderpage('abroadintro.html')">Abroad Placement</a></h3>
                        <div>
                            <ul>
                                <li><a  onclick="renderpage('abroadintro.html')">Introduction</a></li>
                                <li><a  onclick="renderpage('abroadrequirement.html')">Requirement&<br/>Qualification </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="span9">
                    <div class="well">
                        <div id="app-main" class="app-main">
                            <!--<img src="form.png" /><br/>-->
                            <h2><center><b>APPLICATION TO EMPLOY A FOREIGN DOMESTIC MAID</b></center></h2><br/>
                            <form id="application" action="sendapplication.php" method="POST" >

                                <table cellpadding="2" cellspacing="0" border="0">
                                    <tr><th width="302px"></th><th></th></tr>
                                    <tr>
                                        <td>
                                            <label  for="nameofhusband">1.
                                                <b>Name of husband</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="nameofhusband" type="text"  required ="true" id="nameofhusband" style ="width:272px"/>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="husband_nricno">
                                                &nbsp &nbsp  <b>NRIC No</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="husband_nricno" type="text" required ="true" id="husband_nricno" style ="width:272px"/>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="nameofwife" >&nbsp &nbsp  <b>Name of wife:</b></label>
                                        </td>
                                        <td>
                                            <input name="nameofwife" type="text" required ="true" id="nameofwife" style ="width:272px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="wife_nricno">
                                                &nbsp &nbsp  <b>NRIC No</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="wife_nricno" type="text" required ="true" id="wife_nricno" style ="width:272px"/>

                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <label  for="address_residence" >2.
                                                <b>Type of House  Address <br/>&nbsp &nbsp(Residence)</b>:
                                            </label>
                                        </td>
                                        <td>
                                            <textarea rows="5"  name="address_residence" required ="true"  style="width:275px;margin-left:1px"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="house_telno">&nbsp &nbsp <b>Tel No</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="house_telno" type="text" required ="true"  id="house_telno" style ="width:272px"/>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <label  for="husb_ofc_address" >3.
                                                <b>Husband (Office)<br/>&nbsp &nbsp Name and Address</b>:
                                            </label>
                                        </td>
                                        <td>
                                            <textarea rows="5"  name="husb_ofc_address" required ="true"  style="width:275px;margin-left:1px"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="husb_ofc_telno">&nbsp &nbsp <b>Tel No</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="husb_ofc_telno" type="text" required ="true"  id="husb_ofc_telno" style ="width:272px"/>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <label  for="wife_ofc_address" >4.
                                                <b>Wife (Office) <br/>&nbsp &nbsp Name and Address</b>:
                                            </label>
                                        </td>
                                        <td>
                                            <textarea rows="5"  name="wife_ofc_address"  required ="true"  style="width:275px;margin-left:1px"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="wife_ofc_telno">&nbsp &nbsp <b>Tel No</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="wife_ofc_telno" type="text" required ="true" id="wife_ofc_telno" style ="width:272px"/>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td><label  for="income_husband">5.
                                                <b>Monthly Income</b>
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="income_husband">
                                                &nbsp &nbsp <b>Husband</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="income_husband" type="text" required ="true" id="nameofhusband" style ="width:272px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="income_wife">
                                                &nbsp &nbsp <b>Wife</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="income_wife" type="text" required ="true"  id="income_wife" style ="width:272px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label  for="occp_husband">6.
                                                <b>Occupation/Profession</b>
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="occp_husband">
                                                &nbsp &nbsp <b>Husband</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="occp_husband" type="text" required ="true"  id="occp_husband" style ="width:272px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                            <label  for="occp_wife">
                                                &nbsp &nbsp <b>Wife</b>:
                                            </label>
                                        </td>
                                        <td >
                                            <input name="occp_wife" type="text"  required ="true" id="occp_wife" style ="width:272px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="num_child">7.
                                                <b>Number Of Children</b>:</label>
                                        </td>
                                        <td>
                                            <input name="num_child" type="text" required ="true" id="num_child" style ="width:272px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="type_of_maid">8.
                                                <b>Type of maid Preferred</b>:</label>
                                        </td>
                                        <td>
                                            <select name="type_of_maid" id="type_of_maid">
                                                <option value="0">-Choose-</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Philippines">Philippines</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for="age">&nbsp &nbsp <b>Age preferred</b>:</label>
                                        </td>
                                        <td>
                                            <input name="age" type="text" required ="true" id="age" style ="width:272px"/>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="yes_no">9.
                                                <b>Have you applied for a maid before?</b>:</label>
                                        </td>
                                        <td>
                                            <select name="yes_no" id="yes_no">
                                                <option value="01">-Choose-</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="file_no">&nbsp &nbsp <b>If yes, File No</b>:</label>
                                        </td>
                                        <td>
                                            <input name="file_no" type="text"  id="file_no" style ="width:272px"/>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name_of_maid">&nbsp &nbsp <b>Name Of Maid</b>:</label>
                                        </td>
                                        <td>
                                            <input name="name_of_maid" type="text" id="name_of_maid" style ="width:272px"/>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align:right;padding-right: 20px">
                                            <input  class="btn btn-info" name="submit" type="submit"  value="Submit"/>
                                        </td><td>
                                            <input  class="btn btn-info" type="reset" value="Reset!"/>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <div id="notes" >
                                <h4>NOTES</h4>
                                <b>THE FOLLOWING MUST BE SUBMITTED TO THE AGENCY:</b><br>

                                <p><b>1.</b>&nbsp; copies of passport size photographs - both husband and wife.</p>
                                <p><b>2.</b>&nbsp; 2 photo copies of husband and wife identity card.</p>
                                <p><b>3.</b>&nbsp; Business Registration / B Form + PCB (Income Tax)  / Receipt Tax / EA Form / Pay slip (3 Month) / EPF Statement /<br/>&nbsp; &nbsp; Employment Letter / for both husband and wife (Combined RM60,000 above- Sri Lankan / RM36,000 above -<br/>&nbsp; &nbsp; Indonesian) / Utility Bill.</p>
                                <p><b>4.</b>&nbsp; 2 copies of Marriage Certificate & Children’s Birth Certificate(s).</p>
                                <p><b>5.</b>&nbsp; Personal Bond – RM750.00 Sri Lankan/ RM500.00 Indonesian.</p>
                                <p><b>6.</b>&nbsp; Photograph of residents house and surrounding area.</p>
                                <p><b>7.</b>&nbsp; Bank / Fixed Deposit Statement Upon signing, the employer must remit the sum of RM4000.00 as<br/>
                                    &nbsp; &nbsp; deposit payable to AGENSI PEKERJAAN KINTA SDN.BHD.</p><br/>


                                <b>IF APPLYING FOR AGED PARENTS</b><br>
                                <p><b>1.</b>&nbsp; 2 photo copies of Identity Card.</p>
                                <p><b>2.</b>&nbsp; 2 copies of passport size photographs.</p>
                                <p><b>3.</b>&nbsp; Medical report from Hospital ONLY & Supporting Medical bills.</p>
                                <p><b>4.</b>&nbsp; Full length photograph of patient’s physical condition.</p>
                                <p><b>5.</b>&nbsp; 2 copies of Birth Certificate of the employer. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   <div style="background-image:url('footer_bg2.jpg');height: 60px">
            <!-- <footer class="footer" style="background-image:url('footer_bg2.jpg');height: 60px;position:relative;right:40px ">-->
            <div class="navbar navbar-fixed-bottom" style="position:relative">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <div style="position:relative;left: 100px;">
                                <a class="brand" style="font-size: 14px;" href="../">Useful Links</a>
                            </div>
                             <div style="float:left;position:relative;right: 150px;top: 29px;">

                                <a class="brand" style="font-size: 9px;padding-right: 50px" href="#">Copyright © 2012 VP Tech</a>
                                <a class="brand" style="font-size: 14px;" href="faq.html">FAQ</a>
                            </div>

                        </div>
                        <div class="span6">
                            <div style="position:relative;right:85px;"><p class="navbar-text pull-right"><a class="brand" style="font-size: 14px;" href="../">Stay In Touch</a></p></div>
                            <div style="position:relative;left: 15px;top: 29px;">
                                <ul class="nav pull-right">
                                    <li >
                                        <a class="twi-bird" href="https://twitter.com/APKinta"><span class="icon-bar"></span></a>
                                    </li>
                                    <li class="">
                                        <a style="color: #F5F3DC;font-size: 15px; padding: 2px 10px 11px;" href="https://twitter.com/APKinta">Twitter</a>
                                    </li>
                                    <li >
                                        <a class="fb-icon" href="http://www.facebook.com/APKintaa"><span class="icon-bar"></span></a>
                                    </li>
                                    <li class="">
                                        <a style="color: #F5F3DC;font-size: 15px; padding: 2px 10px 11px;" href="http://www.facebook.com/APKintaa">Facebook</a>
                                    </li>
                                    <li class="rss-icon">
                                        <a class="rss-icon" href="http://feeds.feedburner.com/apk"><span class="icon-bar"></span></a>
                                    </li>
                                    <li class="">
                                        <a style="color: #F5F3DC;font-size: 15px; padding: 2px 10px 11px;" href="http://feeds.feedburner.com/APKintaa">RSS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </body>

</html>
