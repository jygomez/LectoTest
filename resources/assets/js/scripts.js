import steps from 'jquery-steps/build/jquery.steps.js'

$(document).ready(function(){
    function submitQuestion (index) {
        var buildIdDiv = 'show_test-p-' + index;
        var currentDiv = $('#' + buildIdDiv + ' form');
        console.log(currentDiv);
        currentDiv.submit();
    }

    $("#show_test").steps({
        onStepChanging: function (event, currentIndex, newIndexe) 
        {
            submitQuestion(currentIndex-1);
            return true;
        },
        onFinishing: function (event, currentIndex)
        {
            console.log('on finishing');
            return true;
        }
    });
});