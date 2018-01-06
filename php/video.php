<?php header("Access-Control-Allow-Origin: *"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <title>原力與你同在</title>
    <link rel="stylesheet" href="./css/video.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/slideMenu.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <script type="text/javascript" src="js/comment_insert.js"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo3").flexisel({
                visibleItems: 3,
                itemsToScroll: 1,
                autoPlay: {
                    enable: true,
                    interval: 5000,
                    pauseOnHover: true
                }
            });
        });
    </script>

    <script>
        /*
        $(document).ready(function () {

            $.ajax({
                origin: "*",
                type: "POST",
                url: 'https://jayonweb.000webhostapp.com/test.php',
                data: {}, //send data if needed
                success: function () {
                    alert("Success!");
                }
            });
        })*/
    </script>
    <!--banned advertise-->
    <script>
        $(document).ready(function () {
            $('body').find('img[src$="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"]').remove();
        });
    </script>
</head>

<body id="body">
<h1 style="width: 95%; height: 100px; margin: 0px auto; line-height: 100px">原力與你同在</h1>
<div class="blook">
    <ul id="flexiselDemo3">
        <li>
            <img src="./pic/香腸.jpg" class="pic"/>
        </li>
        <li>
            <img src="./pic/竹筒飯.jpg" class="pic"/>
        </li>
        <li>
            <img src="./pic/南投.jpg" class="pic"/>
        </li>
        <li>
            <img src="./pic/logo.jpg" class="pic"/>
        </li>
        <!-- items mirrored twice, total of 12 -->
    </ul>
</div>
<div class="container-fluid block_color">


    <br>
    <div id="toolbar" name="工具列">
        <nav id="log_pic">
            <img src="./pic/logo.jpg" id="logo">
        </nav>
        <nav id="logo_div" class="htoolbar">
            <p>

                <a href="index.html">回首頁</a> |
                <a href="food.html">美食區</a> |
                <a href="video.html">影片區</a> |
                <a href="play.html">導覽區</a>
            </p>

        </nav>

        <nav id="lang" class="htoolbar">
            <p>
                <a href="" class="">English</a> |
                <a href="" class="">日本語</a>
            </p>

        </nav>

    </div>
    <br>

    <br>
    <br>


    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

    <div id="play" class="blook2 col-sm-12">

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">烹調</a>
            <a href="#">風景</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ntr-mUvOuoc" frameborder="0" gesture="media"
                allow="encrypted-media" allowfullscreen></iframe>

        <div class="wrapper">
            <div class="page-data">Comment Area</div>
            <div class="command-wrapper">
                <h3 class="comment-title">Video feedback</h3>
                <div class="comment-insert">
                    <h3 class="who-says"><span>Says:</span> Sammy.D</h3>
                    <div class="comment-insert-container">
                        <textarea id="comment-post-text" class="comment-insert-text"></textarea>
                    </div>
                    <div id="comment-post-btn" class="comment-post-btn-wrapper">
                        Post
                    </div>
                </div>
                <div class="comments-list">
                    <ul class="comments-holder-ul">
                        <?php $comments = array("a", "b", "c", "d"); ?>
                        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/May-the-Force-be-with-you/php/comment_box.php'; ?>
                    </ul>
                </div>
            </div>
        </div>
        <input type="hidden" id="userId" value="1"/>
        <input type="hidden" id="userName" value="jayonv"/>
    </div>


</div>

<hr>

<!--「日期特效-文字時鐘」程式碼的開始 -->

<script language="JavaScript">

    <!--
    document.write('<div align="center"><font size="2">');
    document.write("<span id='clock'></span>");
    var now, hours, minutes, seconds, timeValue;

    function showtime() {
        now = new Date();
        hours = now.getHours();
        minutes = now.getMinutes();
        seconds = now.getSeconds();
        timeValue = (hours >= 12) ? "PM " : "AM ";
        timeValue += ((hours > 12) ? hours - 12 : hours) + " :";
        timeValue += ((minutes < 10) ? " 0" : " ") + minutes + " :";
        timeValue += ((seconds < 10) ? " 0" : " ") + seconds + " s";
        clock.innerHTML = timeValue;
        setTimeout("showtime()", 100);
    }

    showtime();
    document.write('</font></div>');
    //-->
</script>
<hr>

<!--「日期特效-文字時鐘」程式碼的結束 -->
</body>

</html>
