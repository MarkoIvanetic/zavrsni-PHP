$(document).ready(function() {
    // i counts the questions, it's not 0 because first question is preloaded
    var i = 1;
    var userResults = 0;
    var totalscore = 0;
    var maxHeight = 0;
    var userStartedResults = 0;
    if (window.location.search == '?results') {
        userResults = 1;
    }
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
    if (userResults) {

    }
    var checkedAnswer = 0;
    var totalScore = 0;
    $('#mainPage').click(function() {
            window.location.href.substr(0, window.location.href.indexOf('#'));
        })
        // In case the simulator has not been completed
    if (!userResults) {
        $('.introduction').show();
        $('.answers').hide();
        $('#next').hide();
        $('#fieldQuestion').hide();
    }
    if (userResults) {
        $('#tips').show();
        $('.answers').show();
        $('#reviewAnwers').hide();
        $('.introduction').hide();
        $('#start').hide();
        $('#next').show();
        $('#fieldQuestion').show();
        $('#next').css('background-color', 'rgba(14,131,205,1)');
    }
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
        if (userResults) {
            $('#tips').show();
            $('#next').removeAttr('disabled');
            $('#next').css('background-color', 'rgba(14,131,205,1)');
            $('#next').text("See next answer");
            $('.answerButton').attr("disabled", true);
        }
        setHeight();
    });

    //Fetches the first set of data (1th question)
    // $('#fieldQuestion').text(data.answerss[0].answers);
    // $('#field0 p').text(data.answerss[0].answers[0].answer);
    // $('#field1 p').text(data.answerss[0].answers[1].answer);
    // $('#field2 p').text(data.answerss[0].answers[2].answer);
    // $('#tips').text("Tip: " + data.answerss[0].tip);
    if (userResults) {
        $('.answers').removeClass("bestAnswer");
        $('.bestAnswer').removeClass("bestAnswer");
        $('#field2').addClass("bestAnswer");
        $('.bestAnswer button').addClass("bestAnswerButton");
        $('.answerButton span').text("Inferior answer");
        $('#field2 span').text("Best answer");
    }
    // NEXT - the most important function
    var nextQuestion = function() {
            totalscore += parseInt($('.activeAnswers input').val());
            alert(totalscore);
            i += 1;
            window.scrollTo(0, 0);
            //Question height reset, it will be changed before end of IF below
            $(".answers p").css("min-height", "50px");
            // After pressing "Next", .activeAnswer will be removed from buttons
            $('.mainContainer button').removeClass('activeAnswers');
            $('.answers button').removeClass("bestAnswerButton");

            //Ako ima jos pitanja
            if ($('#question' + i)[0]) {
                $('#next').attr('disabled', true);
                $('.answers').hide();
                $('.questions').hide();
                $('#question' + i).show();
                $('.answerIndicator' + i).show();
                //Ako nema
            } else {
                alert("Nema dalje");
                if (window.location.search != '?results') {
                    window.location.href = window.location.href + "?" + "results";
                }
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

    //AFTER ANSWERING ALL QUESTIONS
    console.log('End of questions');
    //totalScore = Math.round(totalScore / (data.answerss.length * 100) * 100);
    console.log(totalScore);
    $('#tips').hide();
    $('.answers').hide();
    $('#fieldQuestion').hide();
    $('#next').hide();
    $('.finalContainer').css("display", "inherit");
    $('.finalContainer').append('<h2 class="scoreClass">' + totalScore + '%</h2>');
    var counter = 0;
    var temp = 1;
    //$('.finalContainer').click(function(){
    //next lines update every 50ms
    $('.finalContainer').append('<p></p>');
    setInterval(function() {
        if (counter <= totalScore) {
            //this next if slows the counter down when it hits totalScore -10
            if (counter > (totalScore - 10)) {
                temp = 0.50;
            }
            $('.scoreClass').text(Math.round(counter) + "%");
            $('.scoreClass').css("font-size", (75 + (counter * 0.75)))
            counter += temp;
        }
        if (counter == totalScore) {
            //$('.finalContainer').append('<p>' + scoreMessage + '</p>');
            $('.finalContainer p').text(scoreMessage).animate("opacity", "1");
            $('#next').text("See the best rated answers");
            $('#next').removeClass("blueButtonHover");
            $('#next').show();
        }
    }, 50);
    // });
    if (totalScore < 26) {
        scoreMessage = "You should consider yourself lucky if the security doesn't escort you out.";
        console.log("20");
    } else if (totalScore > 26 && totalScore < 70) {
        scoreMessage = "We are sorry, but you probably won't get the job. You should upgrade your interview skills.";
        console.log("70");
    } else if (totalScore > 70 && totalScore < 80) {
        scoreMessage = "Your result is average. You are on the line of getting the job.";
        console.log("80");
    } else if (totalScore > 80 && totalScore < 90) {
        scoreMessage = "You prepared yourself well. Interviewer is considering you for the job very seriously.";
        console.log("90");
    } else if (totalScore >= 90) {
        scoreMessage = "Well done! You impressed the interviewer and the job is probably yours";
    }

    $('#next').css('background-color', 'rgba(14,131,205,1)');
    // $('#next').removeAttr('disabled');
    $('#next').addClass('blueButtonHover');
    $('#next').unbind();

    $('#next').click(function() {
        window.onbeforeunload = null;
        //this will reload the page so that you cant see the answers.
        nextQuestion();

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
        $('button').not(this).removeClass('activeAnswers');
        $('#next').css('background-color', 'rgba(14,131,205,1)');
        $('#next').removeAttr('disabled');
        $('#next').addClass('blueButtonHover');
        console.log('Working active')
    }; //end activeAnswer function   

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
