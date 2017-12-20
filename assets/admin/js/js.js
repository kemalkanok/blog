/**
* Author: LimpidThemes
* Version: 1.0
* Description: Javascript file for the Pathshala Dashboard Template
* Date: 16-07-2017
**/

/**********************************************************
		BEGIN: MENU TOGGLE
**********************************************************/
jQuery(document).ready(function($){
	"use strict";

	// Blog DataTable
	$('#config_table').DataTable({
		/*Let's say you want to enable scrolling in the table - you would use the scrollY option:*/
		scrollY: 450,
		select: true
	});
	

	jQuery("#menu-toggle").click(function(e) {
		e.preventDefault();
		jQuery("#outer-wrapper").toggleClass("toggled");
	});
	
	//datepicker
	jQuery("#startDate").datepicker();
	jQuery("#endDate").datepicker();
	jQuery("#studentDOB").datepicker({changeYear: true});
	
});
