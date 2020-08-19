$(function() {

    $(document).ready(function() {
       if($("#passwordResult").val() != "" ) {

           var pass = $('#passwordResult').val();
           var strength = 1;
           var arr = [/.{15,}/, /[a-z]+/, /[0-9]+/, /[A-Z]+/];
           jQuery.map(arr, function(regexp) {
             if(pass.match(regexp))
                strength++;
           });

           for(var i =1;i<=strength;i++) {
       
               $('#pass-info'+i).addClass('pass-info'+i);
           }
           if( strength == 5) { 
               
               $('.passwordResultLetter').text('Senha muito forte.');
           } else if( strength == 4) { 
               
               $('.passwordResultLetter').text('Senha forte.');
           } else if(strength == 3) {
               $('.passwordResultLetter').text('Senha moderada.');
           } else if (strength == 2) {
               $('.passwordResultLetter').text('Senha fraca.');
           } else {
               $('.passwordResultLetter').text('Senha muito fraca.');
           }
       }
    });
    

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