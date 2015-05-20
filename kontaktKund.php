<!DOCTYPE html>

<html>
    <head>
        <title>Djurkostymer.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="Kontaktkund.css" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
        <link rel="icon" href="img/gandalfhundutklipp.gif" type="img/x-icon">
    </head>

    <body>

        <header>

            <ul>
                <li><a href="index.php">Butik</a></li>
                <li><a href="omoss.php">Om oss</a></li>
                <li><a href="loggain.php">Logga in</a></li>

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

                <div id="sectionvänster">

                    <div id="sectionloggin" class="shadow">

                        <div id="sectionvlilitenv">

                            <h1 id="KontaktUppgifterRubrik"></h1>
                            <p id="KontaktUppgifterText1"></p>
                            <p id="KontaktUppgifterText2"></p>
                            <p id="KontaktUppgifterText3"></p>

                            <input type="submit" name="Redigera" value="Redigera" class="btn-Redigera">

                        </div>

                    </div>

                </div>

                <div id="sectionhöger">

                    <div id="sectiongåmed" class="shadow">

                        <div id="sectionhgmlitenh">

                            <h1 id="KundservisRubrik"></h1>
                            <P id="KundserviceText1"></P>
                            
                            <input type="submit" name="Redigera" value="Redigera" class="btn-RedigeraKund">
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
                    <form method="POST" action="kontaktKundSave.php" id="usrform">
                        <input type="hidden" value="KontaktUppgifterRubrik" name="id">
                        Rubrik: <input type="text" id="KontaktUppgifterRubrikInput" name="text" value="">
                        <input id="skickaVarde" type="submit">
                    </form>         
                    <br>
                    <br>
                    <form method="POST" action="kontaktKundSave.php" id="usrform">
                        <input type="hidden" value="KontaktUppgifterText1" name="id">
                        Tel: <input type="text" id="KontaktUppgifterText1Input" name="text" value="">
                        <input id="skickaVarde" type="submit">
                    </form>         
                    <br>
                    <br>
                    <form method="POST" action="kontaktKundSave.php" id="usrform">
                        <input type="hidden" value="KontaktUppgifterText2" name="id">
                        Mail: <input type="text" id="KontaktUppgifterText2Input" name="text" value="">
                        <input id="skickaVarde" type="submit">
                    </form>         
                    <br>
                    <br>
                    <form method="POST" action="kontaktKundSave.php" id="usrform">
                        <input type="hidden" value="KontaktUppgifterText3" name="id">
                        Adress: <input type="text" id="KontaktUppgifterText3Input" name="text" value="">
                        <input id="skickaVarde" type="submit">
                    </form>         
                    <br>
                    <br>
                </div>
            </div>
            
            <div class="pop-upKundservice">

            <div class="pop-upOmOss2">
                <form method="POST" action="kontaktKundSave.php" id="usrform">
                    <input type="hidden" value="KundservisRubrik" name="id">
                    Rubrik: <input type="text" id="KundservisRubrikInput" name="text" value="">
                    <input id="skickaVarde" type="submit">
                </form>         
                <br>
                <br>
                <form method="POST" action="kontaktKundSave.php" id="usrform">
                    <input type="hidden" value="KundserviceText1" name="id">
                Text: <textarea rows="4" cols="50"  name="text" id="KundserviceText1Input" ></textarea>
                <input id="skickaVarde" type="submit">
                </form>
                <br>
                <br>
            </div>
        </div>

            <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
            <script src="indexJS.js"></script>

    </body>
</html>