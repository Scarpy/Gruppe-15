<?php 

?>
<div class="header" id="stickyheader">
	<ul class="header-manu">
		<li><a href="#">HJEM</a></li>
		<li><a href="#">OM OSS</a></li>
		<li><a href="#">SØK</a></li>
		<li><a href="#">STATISTIKK</a></li>
	</ul>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
	$(function(){
    var stickyHeaderTop = $('#stickyheader').offset().top;

    $(window).scroll(function(){
            if( $(window).scrollTop() > 800 ) {
                    $('#stickyheader').css({position: 'fixed', top: '0px'});
            } else {
                    $('#stickyheader').css({position: 'absolute', top: '115px'});
            }
    	});
	});
</script>