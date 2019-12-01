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
})(window);	
	 </script>
	 
<?php
include "newslettter.php";
include "footer.php";
?>