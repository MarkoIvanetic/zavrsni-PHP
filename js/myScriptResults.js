$(document).ready(function() {
    // i counts the questions, it's not 0 because first question is preloaded
    var i = 1;
    var userResults = 0;
    var maxHeight = 0;
    var questionStep = 10;
    var userStartedResults = 0;
    if (window.location.search == '?results') {
        userResults = 1;
    }
    //This one is the beauty, makes them all same height
    var getBestAnswer = function() {
        $(".answers:visible").each(function() {
            if ($(this).find("input").val() == 75) {
                $(this).find("button").addClass("bestAnswerButton");
                $(this).find("button").text("Best Answer");
            }
        });
    }
    var setHeight = function() {
        var maxHeight = 0;
        $(".answers p").each(function() {
            if ($(this).innerHeight() > maxHeight) {
                maxHeight = $(this).innerHeight();
            }
        });
        $(".answers p").css("min-height", maxHeight);
    };
    //In case first stage has been passed

    var checkedAnswer = 0;
    var totalScore = 0;
    $('#mainPage').click(function() {
            window.location.href.substr(0, window.location.href.indexOf('#'));
        })
        // In case the simulator has not been completed

    $('.answers').hide();
    $('#tips').show();
    $('#reviewAnwers').hide();
    $('#next').css('background-color', 'rgba(14,131,205,1)');
    $('#redirect').css('background-color', 'rgba(14,131,205,1)');
    $('#question' + i).show();
    $('.answerIndicator' + i).show();
    $('.tipIndicator' + i).show();
    $('#reviewAnwers').hide();
    $('#next').show();
    $('#tips').show();
    $('#next').removeAttr('disabled');
    $('#next').text("Next answer");
    $('.answerButton').attr("disabled", true);

    setHeight();
    getBestAnswer();

    $('.answers').removeClass("bestAnswer");
    $('.bestAnswer').removeClass("bestAnswer");
    $('#field2').addClass("bestAnswer");
    $('.bestAnswer button').addClass("bestAnswerButton");
    //####                $('#field2 span').text("Best answer");

    // NEXT - the most important function
    var nextQuestion = function() {
            $('#next').removeAttr('disabled');
            i += questionStep;
            window.scrollTo(0, 0);
            //Question height reset, it will be changed before end of IF below
            $(".answers p").css("min-height", "50px");

            // After pressing "Next", .activeAnswer will be removed from buttons
            $('.mainContainer button').removeClass('activeAnswers');
            $('.answers button').removeClass("bestAnswerButton");

            //Ako ima jos pitanja
            if ($('#question' + i)[0]) {
                $('#next').removeAttr('disabled');
                $('.answers').hide();
                $('.tipIndicator').hide();
                $('.questions').hide();
                $('#question' + i).show();
                $('.answerIndicator' + i).show();
                $('.tipIndicator' + i).show();
                setHeight();
                //Ako nema
            } else {
                $('.mainContainer').hide();
                $('.introTips').show();
                $("#redirect").click(function() {
                    window.location.replace("tipQuestions.php");
                });
            };
            getBestAnswer();
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

    //AFTER ANSWERING ALL QUESTIONS
    $('#next').css('background-color', 'rgba(14,131,205,1)');
    // $('#next').removeAttr('disabled');
    $('#next').addClass('blueButtonHover');

    $('#next').click(function() {
        //this will reload the page so that you cant see the answers.
        nextQuestion();

    });


    //This will loop through given answers and return the index of best one
    $('.answerButton').click(function() {
        return 0;
    });

    $('.loadingCover').hide();
    //end JSON
}); //end document.ready