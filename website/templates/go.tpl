<!DOCTYPE html>
<html>
<head>
<title>walter wiesnekker</title>
<meta charset="utf-8">

<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
<script type="text/javascript">
$(document).ready(function() {




    /* de eerste pagina click om naar het normale scherm te komen*/
    $('#eerst').click(function() {
        $('#firstcontainer').fadeOut('1', function() {

            $('#hoofd').fadeTo('slow', 0, function()
            {
                $(this).css({backgroundColor: "#A7D264"
  							  });
            }).fadeTo('slow', 1, function() {
                        $('#container').fadeIn('slow');
                    });



        });
    });
    $('#prj1').click(function() {
        $('#container').hide('fast', function() {
            $('#prjcont1').fadeIn('slow');
        });
    });
    $('#prj2').click(function() {
        $('#container').hide('fast', function() {
            $('#prjcont2').fadeIn('slow');
        });
    });
    $('#prj3').click(function() {
        $('#container').hide('fast', function() {
            $('#prjcont3').fadeIn('slow');
        });
    });
    $('#prj4').click(function() {
        $('#container').hide('fast', function() {
            $('#prjcont4').fadeIn('slow');
        });
    });

    $('.projectclick').click(function() {
        $('.project').fadeOut('fast', function() {
            $('#container').fadeIn('slow');
        });
    });





    /*het begin vna de mouse enters voor effect*/
    $('#menu').mouseenter(function() {
        $('#menu').fadeTo('slow', 1);
    });

    $('#menu').mouseleave(function() {
        $('#menu').fadeTo('fast', 0.5);
    });
    $('#menu1').mouseenter(function() {
        $('#menu1').fadeTo('slow', 1);
    });

    $('#menu1').mouseleave(function() {
        $('#menu1').fadeTo('fast', 0.5);
    });
    $('#menu2').mouseenter(function() {
        $('#menu2').fadeTo('slow', 1);
    });

    $('#menu2').mouseleave(function() {
        $('#menu2').fadeTo('fast', 0.5);
    });
    $('#menu3').mouseenter(function() {
        $('#menu3').fadeTo('slow', 1);
    });

    $('#menu3').mouseleave(function() {
        $('#menu3').fadeTo('fast', 0.5);
    });


    $('#eerst').mouseenter(function() {
        $('#eerst').fadeTo('slow', 1);
    });

    $('#eerst').mouseleave(function() {
        $('#eerst').fadeTo('fast', 0.5);
    });
    $('#menu4').mouseenter(function() {
        $('#menu4').fadeTo('slow', 1);
    });

    $('#menu4').mouseleave(function() {
        $('#menu4').fadeTo('fast', 0.5);
    });
    $('#menu5').mouseenter(function() {
        $('#menu5').fadeTo('slow', 1);
    });

    $('#menu5').mouseleave(function() {
        $('#menu5').fadeTo('fast', 0.5);
    });



    /*het begin van de functies voor het displayen van de verschillende paginas*/
    $("#menu").click(function() {
        $('#cont2').fadeOut('fast', function() {
            $('#cont3').fadeOut('fast', function() {
                $('#cont4').fadeOut('fast', function() {
                    $('#cont5').fadeOut('fast', function() {
                        $('#cont1').fadeIn('slow')
                        $('#hoofd').css({
                            backgroundColor: '#A7D264'
                        });
                    });
                });
            });
        });
    });
    $("#menu1").click(function() {
        $('#cont1').fadeOut('fast', function() {
            $('#cont3').fadeOut('fast', function() {
                $('#cont4').fadeOut('fast', function() {
                    $('#cont5').fadeOut('fast', function() {
                        $("#cont2").fadeIn('slow');
                        $('#hoofd').css({
                            backgroundColor: '#DDB064'
                        });
                    });

                });
            });
        });
    });
    $("#menu2").click(function() {
        $('#cont1').fadeOut('fast', function() {
            $('#cont2').fadeOut('fast', function() {
                $('#cont4').fadeOut('fast', function() {
                    $('#cont5').fadeOut('fast', function() {
                        $("#cont3").fadeIn('slow');
                        $('#hoofd').css({
                            backgroundColor: '#642DAD'
                        });
                    });
                });
            });
        });
    });
    $("#menu3").click(function() {
        $('#cont1').fadeOut('fast', function() {
            $('#cont3').fadeOut('fast', function() {
                $('#cont2').fadeOut('fast', function() {
                    $('#cont5').fadeOut('fast', function() {
                        $("#cont4").fadeIn('slow');
                        $('#hoofd').css({
                            backgroundColor: '#508ACB'
                        });
                    });
                });
            });
        });
    });
    $("#menu4").click(function() {
        $('#cont1').fadeOut('fast', function() {
            $('#cont3').fadeOut('fast', function() {
                $('#cont2').fadeOut('fast', function() {
                    $('#cont4').fadeOut('fast', function() {
                        $("#cont5").fadeIn('slow');
                        $('#hoofd').css({
                            backgroundColor: '#BB593C'
                        });
                    });
                });
            });
        });
    });
    $("#menu5").click(function() {
        $('#cont1').fadeOut('fast', function() {
            $('#cont3').fadeOut('fast', function() {
                $('#cont2').fadeOut('fast', function() {
                    $('#cont4').fadeOut('fast', function() {
                        $('#cont5').FadeOut('fast'function(){
                            $("#cont6").fadeIn('slow');
                            $('#hoofd').css({
                                backgroundColor: '#BB593C'
                            });
                        });
                    });
                });
            });
        });
    });





    $('#inlogbar').click(function() {
        $('#inlogbar').fadeOut('fast', function() {
            $('#inlogdiv').fadeIn('slow');
        });
    });
    $('#backdiv').click(function() {
        $('#inlogdiv').fadeOut('fast', function() {
            $('#inlogbar').fadeIn('slow');
        });
    });
    $('#registreer').click(function() {
        $('#inlogdiv').fadeOut('fast', function() {
            $('#rdiv').fadeIn('slow');
        });
    });
    $('#rdivback').click(function() {
        $('#rdiv').fadeOut('fast', function() {
            $('#inlogdiv').fadeIn('slow');
        });
    });

});


</script>
<link rel="stylesheet" type="text/css" href="templates/global.css">
</head>
<body id="hoofd">
<h1>walter wiesnekker portofolio/project site</h1>
<main id="firstcontainer">

    <div id="eerst">
        <p class="firstb">hallo world</p>
    </div>
    <h2 id='h2'>
        hallo ik ben Walter Wiesnekker
    </h2>
    <p id='peerst'>
        deze site is gemaakt voor het informeren van wat ik doe en wie ik ben
    </p>
</main>
<div id="container">
    <header></header>
    <div id="inlogbar"><p class="inlogp">klik hier voor een inlog</p></div>

    <div id="inlogdiv">
        <div id="backdiv"><p class="inlogp">back</p></div>
        <div id="logingform">
            <form action="login.php" method='post'>
                <label for="inlognaam">username: </label><input type="text" name="username" id="inlognaam">
                <br>
                <label for="wachtwoord">wachtwoord: </label><input type="password" name="wachtwoord" id="wachtwoord">
                <br>
                <input type="submit" value="inlog" name="rwpost">
            </form>
        </div>
        <div id="registreer"><p class="inlogp">registreer</p></div>
    </div>
    <div id="rdiv">
        <div id="rdivback"><p class=inlogp">back</p></div>
        <form action="login.php" method='post'>
            <label for="inlognaam">username: </label><input type="text" name="username" id="inlognaam">
            <br>
            <label for="wachtwoord">wachtwoord: </label><input type="password" name="wachtwoord" id="wachtwoord">
            <br>
            <label for="wachtwoord2">wachtwoord: </label><input type="password" name="wachtwoord2" id="wachtwoord2">
            <br>
            <input type="submit" value="registreer" name="rwpost">
        </form>
    </div>

    <nav id="navbar">
        <!-- navigatie div -->


        <ul>
            <li id="menu" class="menu">home</li>
            <li id="menu1" class="menu">project's</li>
            <li id="menu2" class="menu">about</li>
            <li id="menu3" class="menu">contact</li>
            <li id="menu4" class="menu">blog</li>
            <li id="menu5" class="menu">beheer</li>

        </ul>



        <!-- content divs -->
    </nav>
    <div id="cont1">
        <h3 class="wtent">walter wiesnekker heet u welkom</h3>
        <p>Welkom op mijn profiel website waar u mijn projecten en werk kan zien die ik maak/gemaakt heb.</p>
        <p>
            U kunt aan de linkerkant een navigatie balk zien klik op 1 van de knoppen en laat u verassen van wat u tegen kunt komen op deze website.
        </p>

    </div>
    <!--divs voor de gemaakte projecten door mij-->
    <div id="cont2" class="content">

        <ul id="ulprj">
            <li id="prj1" class="prjlist"></li>
            <li id="prj2" class="prjlist"></li>
            <li id="prj3" class="prjlist"></li>
            <li id="prj4" class="prjlist"></li>
        </ul>

    </div>

    <div id="cont3" class='content'>
        <h3 class="wtent">Alles over Walter Wiesnekker</h3>
        <p>Hallo ik ben Walter Wiesnekker en in ben een student applicatie ontwikkeling op het Zadkine in Rotterdam</p>
        <p>mijn hobby's zijn:</p>
        <ul>
            <li>
                code schijven
            </li>
            <li>
                trombone spelen
            </li>
            <li>
                gamen
            </li>
            <li>
                eten koken
            </li>
        </ul>
        <p>
            Verder heb ik kennis in html/css/jquery/javascript en een heel klein beetje php de basis ervan.
        </p>
    </div>
    <div id="cont4" class='content'>
        <h2 id='contacth'>contact </h2>
        <p> adres gegevens </p>
        <address>
            einsteinplaat 9<br>
            3063 JA<br>
            rotterdam<br>
            e-mail: <a href="mailto:walterwiesnekkerw@gmail.com">walterwiesnekkerw@gmail.com</a><br>
            tel: 06-10535681
        </address>
        <p>of mail mij direct via deze website</p>
        <form action="email.php" method='post' >
            <label for='naam'>naam: </label><input type='text' name='naam'id='naam'>
            <label for='email'>email: </label><input type='text' name='email' id='email'><br>
            <textarea name="contenttext" rows='8' cols='35' placeholder="schrijf hier uw bericht" id='area'></textarea><br>
            <input type='submit' value="submit" name="submit">
        </form>
    </div>
    <div id="cont5" class='content'>
        <h3 class='wtent'>blog</h3>
        <p class="blogpost">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, enim, molestias, illo earum ab aliquam nostrum consectetur incidunt voluptatem eos laborum hic nulla distinctio quae culpa aperiam magni
        </p>


        <p class="blogpost">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, enim, molestias, illo earum ab aliquam nostrum consectetur incidunt voluptatem eos laborum hic nulla distinctio quae culpa aperiam magni
        </p>

    </div>




</div>

<div id="prjcont1" class="project">

    <div class="projectclick">
        <p class="firstb">terug</p>
    </div>

    <h3 class="wtent2">project</h3>

    <p> <img src="img/lol.png" class="photo" alt="placeholder" alt="placeholder">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, blanditiis eveniet illum eos quidem! Sit, dolor et alias dicta magni autem maiores eligendi aperiam facere architecto! Maiores, hic amet quasi.</p><div class="pphoto"> <img src="img/lol.png" class="photo2" alt="placeholder"></div>
    <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, molestiae, iusto voluptates tenetur quod natus consequuntur illo rerum quidem nam! Hic, voluptas, cupiditate porro omnis quo quidem dolores ipsa pariatur.</p>>
</div>
<div id="prjcont2" class="project">

    <div class="projectclick">
        <p class="firstb">terug</p>
    </div>
    <h3 class="wtent2">project</h3>

    <p> <img src="img/lol.png" class="photo" alt="placeholder">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, blanditiis eveniet illum eos quidem! Sit, dolor et alias dicta magni autem maiores eligendi aperiam facere architecto! Maiores, hic amet quasi.</p><div class="pphoto"> <img src="img/lol.png" class="photo2" alt="placeholder"></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, molestiae, iusto voluptates tenetur quod natus consequuntur illo rerum quidem nam! Hic, voluptas, cupiditate porro omnis quo quidem dolores ipsa pariatur.</p>

</div>
<div id="prjcont3" class="project">

    <div class="projectclick">
        <p class="firstb">terug</p>
    </div>
    <h3 class="wtent2">project</h3>

    <p> <img src="img/lol.png" class="photo" alt="placeholder">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, blanditiis eveniet illum eos quidem! Sit, dolor et alias dicta magni autem maiores eligendi aperiam facere architecto! Maiores, hic amet quasi.</p><div class="pphoto"> <img src="img/lol.png" class="photo2" alt="placeholder"></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, molestiae, iusto voluptates tenetur quod natus consequuntur illo rerum quidem nam! Hic, voluptas, cupiditate porro omnis quo quidem dolores ipsa pariatur.</p>
</div>
<div id="prjcont4" class="project">

    <div class="projectclick">
        <p class="firstb">terug</p>
    </div>

    <h3 class="wtent2">project</h3>

    <p> <img src="img/lol.png" class="photo" alt="placeholder">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, blanditiis eveniet illum eos quidem! Sit, dolor et alias dicta magni autem maiores eligendi aperiam facere architecto! Maiores, hic amet quasi.</p><div class="pphoto"> <img src="img/lol.png" class="photo2" alt="placeholder"></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, molestiae, iusto voluptates tenetur quod natus consequuntur illo rerum quidem nam! Hic, voluptas, cupiditate porro omnis quo quidem dolores ipsa pariatur.</p>
</div>

</body>
</html>