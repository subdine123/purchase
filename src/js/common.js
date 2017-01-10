/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
    $BODY = $('body'),
    $MENU_TOGGLE = $('#menu_toggle'),
    $SIDEBAR_MENU = $('#sidebar-menu'),
    $SIDEBAR_FOOTER = $('.sidebar-footer'),
    $LEFT_COL = $('.left_col'),
    $RIGHT_COL = $('.right_col'),
    $NAV_MENU = $('.nav_menu'),
    $FOOTER = $('footer');

function save_purchase(){
	var data = { category: $("#category").val(), Arabic: $("#item_name").val(), chef: $("#chef").val(), quantity: $("#quantity").val(), 
				unit: $("#unit").val(),	date: $("#birthday").val() };
				
				
		function save_new(){	
		var data = { category: $("#category").val(), Arabic: $("#Arabic").val(), Indian: $("#Indian").val(), Chinese: $("#Chinese").val(), 
				Continental: $("#Continental").val(),Biriyani: $("#Biriyani").val(),Tandoori: $("#Tandoori").val(),Ice Cream: $("#Ice Cream").val(),Wastage: $("#Wastage").val(),Staff: $("#Staff").val() };
				
	//console.log(data); return false;
	url = "http://localhost/purchase/production/purchase.php";
	
	
	$.post( url, data, function( data ) {
			console.log(data);
			//$('#stock_result').append(data);	
	});
	window.location.reload();
}
