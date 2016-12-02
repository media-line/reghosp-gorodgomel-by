jQuery(document).ready(function() {
	
    var prod = '';	
	var price = '';
	 
    jQuery('.form_button').click(function() {
	    prod = jQuery(this).parent().parent().find('.prod_name').text();
		price = jQuery(this).parent().parent().find('#block_price').text();
	});


	jQuery('.btn-primary').click(function(e){
		e.preventDefault();
			
        var error = 0;
			
		var name = jQuery('input[name=fio]', this.form).val();
		var email = jQuery('input[name=email]', this.form).val();
		var phone = jQuery('input[name=phone]', this.form).val();		
        var recipient = jQuery('input[name=recipient]', this.form).val();
        var gRecaptchaResponse = $("#g-recaptcha-response").val();
		
		if (name == '') {
		   jQuery('input[name=fio]').addClass('border_red');
		   error = 1;
		} else {
		   jQuery('input[name=fio]').removeClass('border_red');
		   error = 0;		
		}
		if (email == '') {
		   jQuery('input[name=email]').addClass('border_red');
		   error = 1;
		} else {
		   jQuery('input[name=email]').removeClass('border_red');
		   error = 0;		
		}
		if (phone == '') {
		   jQuery('input[name=phone]').addClass('border_red');
		   error = 1;
		} else {
		   jQuery('input[name=phone]').removeClass('border_red');
		   error = 0;		
		}
		
        if (prod == '') {
		    prod = jQuery('.prod_name').text();
		}
        if (price == '') {
		    price = jQuery('#block_price').text();
		}

		if (!error) {
			$.ajax({
				type: "POST",
				url: "/modules/mod_order/helper.php",
				data: "name="+name+"&email="+email+"&phone="+phone+"&recipient="+recipient+"&prod="+prod+"&price="+price+"&g-recaptcha-response="+gRecaptchaResponse,
				success: function(msg){
					jQuery('#mod_form').modal('hide');
			        jQuery('#mod_thanks').modal();
				} 
			});
			
		}
		
	})			
});