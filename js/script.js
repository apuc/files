$(document).ready(function(){
    $('#psd-close').on('click', function(){
        $('#psd-modal').css({display:"none"});
        $('#psd-body').html('<div class="psd-modal-wait"> <img src="/image/wait.gif" alt=""></div>');
    })
});