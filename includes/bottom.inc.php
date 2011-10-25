<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || strstr($_SERVER['HTTP_HOST'],'192.168.2') || $_SERVER['HTTP_HOST'] == '127.0.0.1'){
    echo ('<script src="js/libs/jquery-1.6.4.min.js"></script>');
}else{
    echo<<<HEREDOC
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.4.min.js"><\/script>')</script>
HEREDOC;
}
?>
<script defer src="js/libs/jquery.nivo.slider.js"></script>
<script defer src="js/libs/jquery.jcarousel.min.js"></script>
<script defer src="js/plugins.js"></script>
<script defer src="js/script.js"></script>
<?php
if ($_SERVER['HTTP_HOST'] == 'localhost' || strstr($_SERVER['HTTP_HOST'],'192.168.2') || $_SERVER['HTTP_HOST'] == '127.0.0.1'){
}else{
    echo<<<HEREDOC
    <!--<script>-->
    <!--  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];-->
    <!--  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];-->
    <!--  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';-->
    <!--  s.parentNode.insertBefore(g,s)}(document,'script'));-->
    <!--</script>-->
HEREDOC;
}
?>
<!--[if lt IE 7 ]>
  <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

 
