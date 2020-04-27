/publics/jss

window.addEventListener("load", function () {
    //alert("OK, JS cargado");
    // chequear si Jquery funciona
    //$('body').css('background','red');

    //vonvertir de puntero a manita
    $('.btn-like').css('cursor', 'pointer');
    $('.btn-dislike').css('cursor', 'pointer');
    //convertir botton con un click like
    //like -> dislike y  black-> red
    //.unbind('click') para limpiar eventos antetriores del click opcional no necesario
    function like() {
        $('.btn-like').unbind('click').click(function () {
            console.log('like');
            $(this).addClass('btn-dislike').remove('btn-like');
            $(this).attr('src', 'img/heart-red.png');
            dislike();
        });
    }
    //llamar funciones 
    like();
    //convertir botton con un click dislike
    //dislike -> like y red-> black
    //.unbind('click') para limpiar eventos antetriores del click
    function dislike() {
        $('.btn-dislike').unbind('click').click(function () {
            console.log('dislike');
            $(this).addClass('btn-like').remove('btn-dislike');
            $(this).attr('src', 'img/heart-black.png');
            like();
        });
    }

    //llamar funciones
     dislike();
   

});
