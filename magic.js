// magic.js
$(document).ready(function() {

    // process the form
    $('form').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'name'              : $('input[name=name]').val(),
        };
        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : 'process.php', // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data); 

                // here we will handle errors and validation messages
        if ( ! data.success) {
            

        } else {

            
            // ALL GOOD! just show the success message!
            /*var arr = reallyLongArray;
var textToInsert = [];
var i = 0;
var length = arr.length;
for (var a = 0; a <length; a += 1) {
    textToInsert[i++]  = '<tr><td name="pieTD">';
    textToInsert[i++] = arr[a];
    textToInsert[i++] = '</td> </tr>' ;
 
}
$('table').append(textToInsert.join(''));*/
           // for (var key in data) {
           //     if (data.hasOwnProperty(key)) {
           //         alert(key + " -> " + data[key]);
           //     }
           // }
            //$('#pet-name-1').html("");
            //$('#pet-name-1').append(data.message);
            $('#append').append("  <div class= 'col-xs-12 img-border'><div class='row'>+ <a href='#and'><span id=''>"+ data.message + "</span></a> </div> <span class='img-wrapper'> <img src='img/standard-dog.jpg' class='mythumbnail' alt='doggie'/> <a class='button-overlay' href='#'> <span class='glyphicon glyphicon-heart'></span> </a> </span> </div>")
           // $('#append').append('<div class="">' + data.message + '</div>');

            // usually after form submission, you'll want to redirect
            // window.location = '/thank-you'; // redirect a user to another page
            //alert('success'); // for now we'll just alert the user

        }
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});