import steps from 'jquery-steps/build/jquery.steps.js'

$(document).ready(function(){

    const currentQuestion = $('#show_test').data('currentQuestion'); // no entiendo de donde sale el data ni el 'currenrQuestion' que tiene dentro
    console.log(currentQuestion); // no entiendo como llega el 0 al currentQuestion cuando no se ha empezado a hacer nada.

    function submitQuestion (index) {
        var buildIdDiv = 'show_test-p-' + index;
        var currentDiv = $('#' + buildIdDiv + ' form');
        currentDiv.submit();
    }

    $("#show_test").steps({
        startIndex: currentQuestion == 0 ? 0 : currentQuestion-1, // no entiendo este if
        
        onStepChanging: function (event, currentIndex, newIndexe) 
        {
            if(currentIndex < newIndexe)
            {
                submitQuestion(currentIndex);
            }
            return true;
        },

        onFinishing: function (event, currentIndex)
        {
            submitQuestion(currentIndex);
            return true;
        }
    });
});