$(document).ready(function() {

    $.getJSON("indexPhP.php", function(data) {

        $.each(data, function(key, value) {

            switch (value.id) {

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
            }



            console.log(data);

        });
    });
});