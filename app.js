function firstFunc()
{
    console.log('Applikation initialisiert...');
    var modell = $('#modell').val();
    //var kraftstoff = $('#kraftstoff').val();
    var bauart = $('#bauart').val();
    var email = $('#email').val();
    var farbe = $('#farbe').val();
    var html = '<ul>\
                <li>modell:'+ modell + ' modell</li>\
                <li>Bauart:'+ bauart +' bauart</li>\
                <li>Email:' + email + 'email</li>\
                </ul>';

    $.ajax({
        type: "POST",
        url: "ajax.php",
        data: {modell: modell, bauart: bauart, email: email, farbe: farbe},
        dataType: "JSON",

        beforeSend: function(){
            console.log('Daten werden abgerufen...');
            //$('#ergebnis').html().fadeIn(800).removeClass('hidden');
        },

        success: function(response){
            console.log(response);
        },

         error: function(err){
            console.error('Etwas hat nicht geklappt');
        },

         complete: function(){

        },

    });


    $('#modell').val('Sommerauto 2016');

    //console.log(modell);
    //console.log(kraftstoff);
    //console.log(farbe);
    //console.log(email);

}
