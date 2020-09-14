jQuery(document).ready( function () {
	jQuery('#myModal').click(function(){ 
		
	alert('yes');
		Novalnet.setParam("vendor", "4");
        Novalnet.setParam("product", "14");
        Novalnet.setParam("tariff", "30");
        Novalnet.setParam("test_mode", "1");
        Novalnet.setParam('amount', "100");
        Novalnet.setParam('currency', "EUR");
        Novalnet.setParam('lang', "DE");
        Novalnet.setParam('address_form', 1);
        Novalnet.setParam('skip_cfm', 1);
        Novalnet.setParam('skip_suc', 1);
        Novalnet.setParam('first_name', "Novalnet");
        Novalnet.setParam('last_name', "test");
        Novalnet.setParam('return_url', 'https://xtbc6hrp0qu9.plentymarkets-cloud02.com/confirmation/');
        Novalnet.setParam('return_method', 'POST');
        Novalnet.setParam('error_return_method', 'POST');
        Novalnet.setParam('lhide', 1);
        Novalnet.setParam('shide', 1);
        Novalnet.setParam('thide', 1);
        Novalnet.setParam('no_nc', 1);
        Novalnet.setParam('email', "nishab_j@novalnetsolutions.com");
        Novalnet.setParam('country_code', "DE");
        Novalnet.setParam("nn_it", "overlay");
        Novalnet.setParam("ep_retry", "1");
        Novalnet.setParam("sfid", "novalnet_payment_form");
        Novalnet.setParam("sfautosubmit", "1");
	Novalnet.setParam("payment_type", "INVOICE_START");
		Novalnet.setParam("invoice_type", "INVOICE");
	Novalnet.render('novanet_payment_form_div');
	});	
	//var iframe_src = jQuery('#nn_url').val();
	//console.log(iframe_src);
	//jQuery('#myModal').click(function(){ 
       // if(!$('#iframe').length) {
              //  $('#iframeHolder').html('<iframe id="iframe" src="iframe_src" width="700" height="450"></iframe>');
       // }
    //});
	
});
