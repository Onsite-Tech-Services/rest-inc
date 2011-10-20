/* Author:

*/
$(function(){
    $('.nivoSlider').nivoSlider({
        directionNavHide: false
    });
    $('#contactForm').submit(function(){
        $.ajax({
            url: 'sendMail.php',
            dataType: 'json',
            data: $(this).serialize(),
            type: 'post',
            success:function(json){
                if(!json.result){
                    alert(json.errorArr[0]);
                }else if(json.result == 'OK'){
                    alert('Your message was sent.');
                }
            }
        });
        return false;
    });
});




