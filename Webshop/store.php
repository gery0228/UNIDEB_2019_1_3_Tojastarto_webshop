<?php
include 'header.php';
?>
     <script id="jsbin-javascript">
(function (global) {
	
	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}
	
    var _hash = "!";
	
	var noBackPlease = function () 
	{
        global.location.href += "#";
		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () 
		{
            global.location.href += "!";
        }, 50);
    };
	
	// Earlier we had setInerval here....
    global.onhashchange = function () 
	{
        if (global.location.hash !== _hash) 
		{
            global.location.hash = _hash;
        }
    };
	
	
	global.onload = function () 
	{        
		noBackPlease();
		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) 
		{
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) 
			{
                e.preventDefault();
            }
            
			// stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };		
    };
})(window);	
	 </script>
		<div class="main main-raised"> 
        
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div id="get_category">
				        </div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Ár</h3>
							<div class="price-filter">
								<div id="price-slider" class="noUi-target noUi-ltr noUi-horizontal">
									<div class="noUi-base">
										<div class="noUi-origin" style="left: 0%;">
											<div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="1.00" style="z-index: 5;">
											</div>
										</div>
										<div class="noUi-connect" style="left: 0%; right: 0%;">
										</div>
										<div class="noUi-origin" style="left: 100%;">
											<div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="999.00" style="z-index: 4;">
											</div>
										</div>
									</div>
								</div>
								
<?php
include "newslettter.php";
include "footer.php";
?>