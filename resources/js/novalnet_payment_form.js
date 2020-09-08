jQuery(document).ready( function () {
	jQuery('#myModal').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="https://paygate.novalnet.de/paygate.jsp?vendor=4&product=14&tariff=30" width="700" height="450"></iframe>');
        }
    });
});
