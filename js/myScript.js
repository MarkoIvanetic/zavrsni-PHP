$(document).ready(function() {
    // i counts the questions, it's not 0 because first question is preloaded
    var i = 1;
    var userResults = 0;
    var scoreArray = [];
    var maxHeight = 0;
    var scoreMessage = "";
    //questionStep is made for testing, how much will question counter increment. 
    //(if you put 2 you will see every second question)
    var questionStep = 1;
    var userStartedResults = 0;

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
    //In case first stage has been passed
    var finalScore;
    $('#mainPage').click(function() {
            window.location.href.substr(0, window.location.href.indexOf('#'));
        })
        // In case the simulator has not been completed

        $('.introduction').show();
        $('.answers').hide();
        $('#next').hide();
        $('#fieldQuestion').hide();

    $('#start').click(function() {
        window.onbeforeunload = function() {
            return "Warning, this will reload the simulator!";
        }
        $('.answers').hide();
        $('.questions').hide();
        $('#question' + i).show();
        $('.answerIndicator' + i).show();

        $('#reviewAnwers').hide();
        $('.introduction').hide();
        $('#start').hide();
        $('#next').show();
        $('#fieldQuestion').show();
        setHeight();
    });
    var nextQuestion = function() {
            scoreArray.push(parseInt($('.activeAnswers input').val()));
            console.log('Total score: ' + sumArray(scoreArray));
            i += questionStep;
            window.scrollTo(0, 0);
            //Question height reset, it will be changed before end of IF below
            $(".answers p").css("min-height", "50px");
            // After pressing "Next", .activeAnswer will be removed from buttons
            $('.mainContainer button').removeClass('activeAnswers');
            $('.answers button').removeClass("bestAnswerButton");

            //Ako ima jos pitanja
            if ($('#question' + i)[0]) {
                $('#next').removeClass("blueButtonHover");
                $('#next').attr('disabled', true);
                $('.answers').hide();
                $('.questions').hide();
                $('#question' + i).show();
                $('.answerIndicator' + i).show();

                //AFTER ANSWERING ALL QUESTIONS
            } else {
                console.log('End of questions');

                var finalScore = Math.round(sumArray(scoreArray) / (scoreArray.length * 75) * 100);
                console.log(finalScore);

                if (finalScore < 26) {
                    scoreMessage = "You should consider yourself lucky if the security doesn't escort you out.";
                    console.log("Score Message no.25");
                } else if (finalScore > 26 && finalScore < 70) {
                    scoreMessage = "We are sorry, but you probably won't get the job. You should upgrade your interview skills.";
                    console.log("Score Message no.70");
                } else if (finalScore > 70 && finalScore < 80) {
                    scoreMessage = "Your result is average. You are on the line of getting the job.";
                    console.log("Score Message no.80");
                } else if (finalScore > 80 && finalScore < 90) {
                    scoreMessage = "You prepared yourself well. Interviewer is considering you for the job very seriously.";
                    console.log("Score Message no.90");
                } else if (finalScore >= 90) {
                    scoreMessage = "Well done! You impressed the interviewer and the job is probably yours";
                    console.log("Score Message no.100");
                }
                if(finalScore){
                $('.mainContainer').hide();
                $('.finalContainer').css("display", "inherit");
                $('.finalContainer').append('<h2 class="scoreClass">' + finalScore + '%</h2>');
                var counter = 0;
                var temp = 1;

                setInterval(function() {
                    if (counter <= finalScore) {
                        //this next if slows the counter down when it hits finalScore -10
                        if (counter > (finalScore - 10)) {
                            temp = 0.50;
                        }
                        $('.scoreClass').text(Math.round(counter) + "%");
                        $('.scoreClass').css("font-size", (75 + (counter * 0.75)))
                        counter += temp;
                    }
                    if (counter == finalScore) {
                        $('.finalContainer').append('<h3 class="col-xs-12" style="text-align:center;">' + scoreMessage + '</h3>');
                        $('.finalContainer p').text(scoreMessage).animate("opacity", "1");
                        $('#onward').show().css("background-color", "#FF595B");
                        $('.finalText').show();
                    }
                }, 50);}
            };

            setHeight();
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
    $('#next').css('background-color', '#FF595B');
    // $('#next').removeAttr('disabled');
    $('#next').unbind();
    $('#next').click(function() {
        window.onbeforeunload = null;
        //this will reload the page so that you cant see the answers.
        nextQuestion();

    });
    $('#onward').click(function(){
        window.location.replace("results.php");
    });

    $('#next').hide();
    $('#tips').hide();
    $('.answers').hide();
    $('#fieldQuestion').hide();
    $('#afterStuff').show();
    $('#afterStuff *').show(400);
    $('.aboutMe').slideDown();


    var activeAnswer = function() {
        $(this).addClass('activeAnswers');
        $('.answers').css("border","1px solid rgba(255,89,88,0.3)");
        $(this).closest('.answers').css("border","1px solid rgba(255,89,88,1)");
        $('button').not(this).removeClass('activeAnswers');
        $('button').not(this).removeClass('activeAnswers');
        $('#next').css('background-color', '#FF595B');
        $('#next').removeAttr('disabled');
        $('#next').addClass('blueButtonHover');
        console.log('Working active')
    }; //end activeAnswer function   

    var sumArray = function(array){
        var total = 0;
        for (var i = 0; i < array.length; i++) {
            total += array[i] << 0;
            }
        return total;
    }
    //This will loop through given answers and return the index of best one
    var getBestAnswer = function(arrayIndex) {
        var valueArray = [];
        valueArray.push(data.answerss[arrayIndex].answers[0].answerValue);
        valueArray.push(data.answerss[arrayIndex].answers[1].answerValue);
        valueArray.push(data.answerss[arrayIndex].answers[2].answerValue);
        return jQuery.inArray(100, valueArray);
    }
    $('.answerButton').click(activeAnswer);

    $('.loadingCover').hide();
    //end JSON
}); //end document.ready