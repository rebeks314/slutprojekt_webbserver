$(document).ready(function() {

    $.getJSON("indexPhP.php", function(data) {

        $.each(data, function(key, value) {

            switch (value.id) {

//                omoss sida

                case "omOssRubrik":
                    $('#omOssRubrik').append(value.text);
                    break;

                case "omOsstext1":
                    $('#omOsstext1').append(value.text);
                    break;

                case "omOsstext2":
                    $('#omOsstext2').append(value.text);
                    break;

                case "omOsstext3":
                    $('#omOsstext3').append(value.text);
                    break;

                case "omOsstext4":
                    $('#omOsstext4').append(value.text);
                    break;

//                    kundservice sida

                case "KundservisRubrik":
                    $('#KundservisRubrik').append(value.text);
                    break;

                case "KundserviceText1":
                    $('#KundserviceText1').append(value.text);
                    break;

                case "KundserviceText2":
                    $('#KundserviceText2').append(value.text);
                    break;

                case "KundserviceText3":
                    $('#KundserviceText3').append(value.text);
                    break;
                    
                    case "KundserviceRubrik1":
                    $('#KundserviceRubrik1').append(value.text);
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
});