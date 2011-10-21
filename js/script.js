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
                    $('#contactForm').remove();
                    $('#main').css('background', 'url("img/thankyou_bg.jpg")');
                }
            }
        });
        return false;
    });
});




