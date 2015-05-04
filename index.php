<!DOCTYPE html>

<html>
    <head>
        <title>Djurkostymer.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="index.css" type="text/css"/>
        <link rel="stylesheet" href="delad.css" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
        <link rel="icon" href="img/gandalfhundutklipp.gif" type="img/x-icon">




    </head>
    <body>

        <header>

            <ul>
                <li><a href="index.php">Butik</a></li>
                <li><a href="omOss.php">Om oss</a></li>
                <li><a href="loggain.html">Logga in</a></li>

            </ul>

            <div class="vänsterboxheader">

                <a href="index.php">Djur-</a>
                <a href="index.php">kostymer.com</a>

            </div>

        </header>



        <div id="wrapper">

            <div id="nav">

                <button id="sök" type="button">Sök</button> 
                <input id="mysearch" type="search"/>

                <div id="navproduktruta">
                    <h3>Produkter</h3>
                </div>

                <nav class="main-nav">
                    <ul>
                        <li><a href="Vuxna.html">Vuxna</a>
                            <ul>
                                <li><a href="#">Kille</a></li>
                                <li><a href="#">Tjej</a></li>
                            </ul>
                        </li>  
                        <li><a href="Barn.html">Barn</a>
                            <ul>
                                <li><a href="#">Kille</a></li>
                                <li><a href="#">Tjej</a></li>
                            </ul>
                        </li>
                        <li><a href="hund1.html">Hund</a></li>
                        <li><a href="Katt.html">Katt</a></li>                  
                    </ul>
                </nav>

            </div>





            <div id="section1">

                <div id="Ruta1" class="shadow">

                    <div class="slideshow">
                        <img id="bildSpelBild1" src="" width="900" height="440" alt="" />
                        <img id="bildSpelBild2" src="" width="900" height="440" alt="" />
                        <img id="bildSpelBild3" src="" width="900" height="440" alt=""/>
                        <img id="bildSpelBild4" src="" width="900" height="440" alt=""/>		
                    </div>

                </div>

            </div>

            <div class="sectiontrebox">

                <div id="treboxarbox">

                    <div class="trebox1 shadow" >

                        <div class="treboxliten">

                            <img id="treBoxBild1" src="" width="270" height="430" alt=""/>

                        </div>

                    </div>

                    <div class="trebox1 shadow" >

                        <div class="treboxliten">

                            <img id="treBoxBild2" src="" width="270" height="430" alt=""/>

                        </div>

                    </div>

                    <div class="trebox2 shadow">

                        <div class="treboxliten">

                            <img id="treBoxBild3" src="" width="270" height="430" alt=""/>

                        </div>

                    </div>

                </div>

            </div>

            <div id="footer">

                <div id="footerbox">

                    <div class="footertrebox" >

                        <h3>Information</h3>

                        <ul>  
                            <li><a href="omoss.php">Om oss</a></li>
                            <li><a href="kontaktkund.php">Kontakt oss</a></li>
                            <li><a href="kontaktkund.php">Kundservis</a></li>
                        </ul> 
                    </div>

                    <div class="footertrebox" >

                        <h3>Kontakt info</h3>

                        <p>Telefon: 0701237564 </p>
                        <p>Mail: hurrdurr@gmail.com </p>
                        <p>Adress: hurrdurrgatan 79a </p>       

                    </div>

                    <div class="footertrebox1" >

                        <h3>Min sida</h3>

                        <ul>

                            <li><a href="loggain.html">Logga in</a></li>
                            <li><a href="loggain.html">Sign up</a></li>
                            <li><a href="#">Hjälp</a></li>

                        </ul>

                    </div>



                </div>
            </div>             
        </div>

        <!--include jQuery library--> 
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!--include Cycle plugin--> 
        <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.slideshow').cycle({
                    fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                });
            });
        </script>

        <script src="indexJS.js"></script>

    </body>   

</html>
