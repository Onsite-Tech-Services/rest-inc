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


    $('#carousel').jcarousel({
        auto: 4,
        wrap: 'last',
        initCallback: mycarousel_initCallback
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
function mycarousel_initCallback(carousel)
{
    //load first image
//    $('#imageDisplay').css('backgroundImage', 'url(img/projects/prod1/img01.jpg)');

    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });

    //click carousel item
    $('#carousel').find('.jcarousel-item a').click(function(){
        $this = $(this);
        imgSrc = $this.attr('href');
        $('#carousel').find('li.active').removeClass('active');
        $this.closest('li').addClass('active');
        $('#imageDisplay').find('img').attr('src',imgSrc);
        return false;
    });

}