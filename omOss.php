<!DOCTYPE html>



<html>
    <head>
        <title>Djurkostymer.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="omOss.css" type="text/css"/>
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
                        <li><a href="Vuxna.php">Vuxna</a>
                            <ul>
                                <li><a href="#">Kille</a></li>
                                <li><a href="#">Tjej</a></li>
                            </ul>
                        </li>               
                        <li><a href="Barn.php">Barn</a>
                            <ul>
                                <li><a href="#">Kille</a></li>
                                <li><a href="#">Tjej</a></li>
                            </ul>
                        </li>
                        <li><a href="hund.php">Hund</a></li>
                        <li><a href="Katt.php">Katt</a></li>                  
                    </ul>
                </nav>

            </div>

            <div id="sectionruta">

                <div id="omossram" class="shadow">

                    <div id="omossliten">

                        <h1 id="omOssRubrik"></h1>

                        <p id="omOsstext1"></p>                       

                        <input type="submit" name="Redigera" value="Redigera" class="btn-Redigera">

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


        <div class="pop-upOmOss">

            <div class="pop-upOmOss2">
                <form method="POST" action="omOssSave.php" id="usrform">
                    <input type="hidden" value="omOssRubrik" name="id">
                    Rubrik: <input type="text" id="omOssRubrikInput" name="text" value="staaart">
                    <input id="skickaVarde" type="submit">
                </form>         
                <br>
                <br>
                <form method="POST" action="omOssSave.php" id="usrform">
                    <input type="hidden" value="omOsstext1" name="id">
                Text: <textarea rows="4" cols="50"  name="text" id="omOssTextInput" ></textarea>
                <input id="skickaVarde" type="submit">
                </form>
                <br>
                <br>
            </div>
        </div>

    </body>
</html>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="indexJS.js"></script>
