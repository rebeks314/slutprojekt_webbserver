$(document).ready(function() {

    $.getJSON("indexPhP.php", function(data) {

        $.each(data, function(key, value) {

            switch (value.id) {

//                omoss sida

                case "omOssRubrik":
                    $('#omOssRubrik').append(value.text);
                    $('#omOssRubrikInput').val(value.text);
                    break;

                case "omOsstext1":
                    $('#omOsstext1').append(value.text);
                    $('#omOssTextInput').val(value.text);
                    break;

//                    kundservice sida

                case "KundservisRubrik":
                    $('#KundservisRubrik').append(value.text);
                    $('#KundservisRubrikInput').val(value.text);

                    break;

                case "KundserviceText1":
                    $('#KundserviceText1').append(value.text);
                    $('#KundserviceText1Input').val(value.text);
                    break;

//                    kontakt Uppgifter

                case "KontaktUppgifterRubrik":
                    $('#KontaktUppgifterRubrik').append(value.text);
                    $('#KontaktUppgifterRubrikInput').val(value.text);
                    break;

                case "KontaktUppgifterText1":
                    $('#KontaktUppgifterText1').append(value.text);
                    $('#KontaktUppgifterText1Input').val(value.text);

                    break;

                case "KontaktUppgifterText2":
                    $('#KontaktUppgifterText2').append(value.text);
                    $('#KontaktUppgifterText2Input').val(value.text);
                    break;

                case "KontaktUppgifterText3":
                    $('#KontaktUppgifterText3').append(value.text);
                    $('#KontaktUppgifterText3Input').val(value.text);
                    break;

//                     index sida

                case "bildSpelBild1":
                    $('#bildSpelBild1').attr("src", value.img);
                    break;

                case "bildSpelBild2":
                    $('#bildSpelBild2').attr("src", value.img);
                    break;

                case "bildSpelBild3":
                    $('#bildSpelBild3').attr("src", value.img);
                    break;

                case "bildSpelBild4":
                    $('#bildSpelBild4').attr("src", value.img);
                    break;

                case "treBoxBild1":
                    $('#treBoxBild1').attr("src", value.img);
                    break;

                case "treBoxBild2":
                    $('#treBoxBild2').attr("src", value.img);
                    break;

                case "treBoxBild3":
                    $('#treBoxBild3').attr("src", value.img);
                    break;

//                    hundsida

                case "hundRuta1":
                    $('#hundRuta1').append(value.text);
                    $('#hundRuta1Input').val(value.text);
                    break;
                    
                    case "hundRuta1Pris":
                    $('#hundRuta1Pris').append(value.text);
                    $('#hundRuta1PrisInput').val(value.text);
                    break;
                    
                    case "hundRuta1Bild":
                    $('#hundRuta1Bild').attr("src", value.img);
                    $('#hundRuta1BildInput').val(value.img);
                    break;
                    
                    case "hundRuta2":
                    $('#hundRuta2').append(value.text);
                    $('#hundRuta2Input').val(value.text);
                    break;
                    
                    case "hundRuta2Pris":
                    $('#hundRuta2Pris').append(value.text);
                    $('#hundRuta2PrisInput').val(value.text);
                    break;
                    
                    case "hundRuta2Bild":
                    $('#hundRuta2Bild').attr("src", value.img);
                    $('#hundRuta2BildInput').val(value.img);
                    break;
                    
                    case "hundRuta3":
                    $('#hundRuta3').append(value.text);
                    $('#hundRuta3Input').val(value.text);
                    break;
                    
                    case "hundRuta3Pris":
                    $('#hundRuta3Pris').append(value.text);
                    $('#hundRuta3PrisInput').val(value.text);
                    break;
                    
                    case "hundRuta3Bild":
                    $('#hundRuta3Bild').attr("src", value.img);
                    $('#hundRuta3BildInput').val(value.img);
                    break;
                    
                    case "hundRuta4":
                    $('#hundRuta4').append(value.text);
                    $('#hundRuta4Input').val(value.text);
                    break;
                    
                    case "hundRuta4Pris":
                    $('#hundRuta4Pris').append(value.text);
                    $('#hundRuta4PrisInput').val(value.text);
                    break;
                    
                    case "hundRuta4Bild":
                    $('#hundRuta4Bild').attr("src", value.img);
                    $('#hundRuta4BildInput').val(value.img);
                    break;


            }



            console.log(data);

        });
    });

    $(".btn-Redigera").click(function() {
        $(".pop-upOmOss").show();
    });

    $(".btn-RedigeraKund").click(function() {
        $(".pop-upKundservice").show();
    });
    
    $(".btn-Redigera.Köp.hund1").click(function() {
        $(".pop-upHundRuta1").show();
    });
    
    $(".btn-Redigera.Köp.hund2").click(function() {
        $(".pop-upHundRuta2").show();
    });
    
    $(".btn-Redigera.Köp.hund3").click(function() {
        $(".pop-upHundRuta3").show();
    });
    
    $(".btn-Redigera.Köp.hund4").click(function() {
        $(".pop-upHundRuta4").show();
    });

});