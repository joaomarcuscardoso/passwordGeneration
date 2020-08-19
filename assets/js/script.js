$(function() {
    var pass = $('#passwordResult').val();

    var strength = 1;
    var arr = [/.{5,}/, /[a-z]+/, /[0-9]+/, /[A-Z]+/];
    jQuery.map(arr, function(regexp) {
      if(pass.match(regexp))
         strength++;
    });
    for(var i =1;i<=strength;i++) {

        $('#pass-info'+i).addClass('pass-info'+i);
    }
});

function clickCopyBoard() {

    var copyText = document.getElementById("passwordResult");

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/
    
    /* Copy the text inside the text field */
    document.execCommand("copy");

    alert("Texto copiado com sucesso");
    
}