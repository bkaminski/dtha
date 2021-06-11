(function( $ ) {
	
//TRIGGER SEARCH MODA
 $(".dctp-modal").click(function(){
 	$("#dctpModal").modal('show');
 });



$('#billing_first_name_field, #account_username_field, #createaccount, #shipping_postcode_field, #shipping_state_field, #shipping_city_field, #shipping_address_1_field, #shipping_address_2_field, #account_password_field, #shipping_country_field, #billing_last_name_field, #billing_company_field, #shipping_company_field, #billing_country_field, #billing_address_1_field, #billing_address_2_field, #billing_city_field, #billing_state_field, #billing_postcode_field, #billing_phone_field, #billing_email_field, #order_comments_field, #shipping_first_name_field, #shipping_last_name_field').addClass('form-group').removeClass('form-row form-row-first form-row-last');
$('#billing_first_name, #billing_last_name, #shipping_city, #shipping_postcode, #shipping_state, #account_username, #shipping_address_1, #shipping_address_2, #account_password, #shipping_country, #billing_company, #billing_country, #shipping_company, #billing_address_1, #billing_address_2, #billing_city, #billing_state, #billing_postcode, #billing_phone, #billing_email, #order_comments, #shipping_first_name, #shipping_last_name').addClass('form-control');
$('.col-1').addClass('noClass').removeClass('col-1');
$('.col-2').addClass('noClass').removeClass('col-2');
	
})( jQuery );