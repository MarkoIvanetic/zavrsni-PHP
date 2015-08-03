$(document).ready(function() {
    // i counts the questions, it's not 0 because first question is preloaded
    var i = 1;
    var maxHeight = 0;
    var questionStep = 1;

    //This one is the beauty, makes them all same height

    var setHeight = function() {
        var maxHeight = 0;
        $(".answers p").each(function() {
            if ($(this).innerHeight() > maxHeight) {
                maxHeight = $(this).innerHeight();
            }
        });
        $(".answers p").css("min-height", maxHeight);
    };

    $('#next').show();
    $('#next').css('background-color', 'rgba(14,131,205,1)');

    $('#question' + i).show();
    $('#tip' + i).show();

    setHeight();

    // NEXT - the most important function
    var nextQuestion = function() {
            i += questionStep;
            window.scrollTo(0, 0);
            //Ako ima jos pitanja
            if ($('#question' + i)[0]) {
                $('.answers').hide();
                $('.questions').hide();

                $('#question' + i).show();
                $('#tip' + i).show();
                setHeight();
                //Ako nema
            } else {
    $('.mainContainer').hide();
    $('#afterStuff').show();
    $('#afterStuff *').show(400);
    $('.aboutMe').slideDown();
            };
        }
        //End function "next question"

    //This one is the beauty, makes them all same height
    var maxHeight = 0;
    $(".answers p").each(function() {
        if ($(this).innerHeight() > maxHeight) {
            maxHeight = $(this).innerHeight();
        }
    });

    $(".answers p").css("min-height", maxHeight);
    $(".answers p").css("min-height", maxHeight);

    
    $('#next').click(function() {
        //this will reload the page so that you cant see the answers.
        nextQuestion();
    });

    $('.loadingCover').hide();
    //end JSON
}); //end document.ready