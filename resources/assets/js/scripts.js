import steps from 'jquery-steps/build/jquery.steps.js'
import 'jquery-toast-plugin/dist/jquery.toast.min.js'

$(document).ready(function(){


    function submitQuestion (index) {
        var buildIdDiv = 'show_test-p-' + index;
        var currentDiv = $('#' + buildIdDiv + ' form');
        currentDiv.submit();
    }

    function saveAnswer(index) {

        var buildIdDiv = 'show_test-p-' + index;
        var currentForm = $('#' + buildIdDiv + ' form');
        var data = currentForm.serializeArray(); //Convierte un HTML form en Objecto JSON



        $.ajax({
            method: 'POST', // Type of response and matches what we said in the route
            url: '/save_answer', // This is the url we gave in the route
            data: data, // a Multipart object to send back
            success: function(response){ // What to do if we succeed

                if (response.status !== 'ok' ) {
                    $.toast({
                        position: 'top-right',
                        heading: 'Error',
                        text: response.message,
                        showHideTransition: 'fade',
                        icon: 'error'
                    });
                }

            },
            error: function(xhr, textStatus, errorThrown) { // What to do if we fail
                $.toast({
                    position: 'top-right',
                    heading: 'Error',
                    text: textStatus,
                    showHideTransition: 'fade',
                    icon: 'error'
                });
                //console.log('ERROR');
                //console.log(JSON.stringify(jqXHR));
                //console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });

    }


    $("#show_test").steps({
        startIndex: 0, // no entiendo este if

        onStepChanged: function (event, newIndex, currentIndex)
        {
            if (newIndex > currentIndex) {
                saveAnswer(currentIndex);
            }
            return true;
        },

        onFinished: function (event, currentIndex)
        {
            saveAnswer(currentIndex);

            var testId = $("#show_test").data('testid');

            window.location.href  = '/test/' + testId + '/calification';
            return true;
        }
    });
});