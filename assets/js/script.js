$(function() {

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