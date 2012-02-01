/* Author:

*/

$(function(){
    $('.nivoSlider').nivoSlider({
        directionNavHide: false
    });

    var gallery = (function(){
        var link = $('#galleryLink');

        link.bind('click', function(){
            //on click
            $('#projectList').slideToggle(200);
            return false
        });
    })();



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
                    $('#main').css({
                        background: 'url("img/thankyou_bg.jpg")',
                        height: 427
                    });
                }
            }
        });
        return false;
    });
});
