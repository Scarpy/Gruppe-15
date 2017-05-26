<?php
    require 'core/init.php';
    echo Init::header();

    echo '<div id="hjem" class="container" style="background: url(./img/bakgrunn.png) no-repeat center">';
    
    require_once 'core/header.php';
?>
		<div class="container--inner">
			<div class="container--inner--text">
				<h1>Westerdals billigste øl</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac leo ut turpis vulputate porta sit amet vel elit. Sed nec risus in orci sollicitudin euismod ut eu ipsum.</p>
			</div>
	    </div>
	    <img id="pilNed" src="img/icons/Pilnedover.png">
	</div>
	<div id="infoContainer">
        <!--<div id="infoBoxBorder"></div>-->
        <div id="infoColumn1">
    		<img id="fjerdingen" src="img/Fjerdingen.jpg">
    	</div>
		<div id="infoColumn2">
		    <p>Lorem ipsum dolor sit amet, vim inermis verterem ei, duis aeterno dolorum mel ut. Per ei eius mazim ocurreret. Mollis officiis tincidunt ei qui, ut omnes quodsi has. Eam falli inermis at, adipisci consequuntur mei te. Debitis appetere sed an. Sensibus expetenda pri eu, bonorum saperet suscipit est ut, eu has iisque urbanitas.</p>
		        
		    <p>Fugit commodo has cu, legimus postulant ex eos. Dicta maluisset ne vis, sit et euismod instructior, has et facilis scaevola. Ne eum fuisset pertinax. Ius ne phaedrum antiopam laboramus, luptatum qualisque tincidunt ut vis. Ne prima libris voluptatum eum, mel gloriatur conceptam persequeris id.</p>
		        
		    <p>Sit ei dicant volutpat, consul sanctus adipisci ne sea, tollit ubique mediocritatem in nec. Conceptam maiestatis at per. Error impedit copiosae id mei, has nulla petentium ad, vel paulo graeci patrioque at. Feugait posidonium cum eu, clita utamur utroque vim ea.</p>
        </div>
	</div>

	<?php require 'sokeside.php' ?>

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(function(){
	    var stickyHeaderTop = $('#stickyheader').offset().top;

	    $(window).scroll(function(){
	            if( $(window).scrollTop() > 800 ) {
	                    $('#stickyheader').css({position: 'fixed', top: '0px', background: '#d6e6e8'});
	            } else {
	                    $('#stickyheader').css({position: 'absolute', top: '115px', background: 'transparent'});
	            }
	    	});
		});
	</script>


<?php
	require '/core/init.php';
    echo Init::footer();
?>

