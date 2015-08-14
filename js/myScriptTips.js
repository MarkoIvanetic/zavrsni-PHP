$(document).ready(function() {
    // i counts the questions, it's not 0 because first question is preloaded
    var i = 1;
    var questionStep = 1;

    $('#next').show();
    $('#next').css('background-color', '#FF595B');
    $('#next').css('opacity', '1');

    $('#question' + i).show();
    $('#tip' + i).show();


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
                $('#tip' + i + ' p').css("min-height","50px");
                //Ako nema
            } else {
    $('.mainContainer').hide();
    $('#afterStuff').show();
    $('#afterStuff *').show(400);
    $('.aboutMe').slideDown();
            };
        }
        //End function "next question"

    $('#next').click(function() {
        //this will reload the page so that you cant see the answers.
        nextQuestion();
    });

    $('.loadingCover').hide();
    //end JSON
}); //end document.ready