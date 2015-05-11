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

                    break;

                case "KundserviceText1":
                    $('#KundserviceText1').append(value.text);
                    break;
                    
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


//    $(".btn-Redigera").click(function() {
//        $(".pop-upOmOss").hide();
//    });


});