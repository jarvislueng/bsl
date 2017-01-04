$('.double_date_picker').daterangepicker({
	"locale" : {
		"format" : "YYYY-MM-DD",
		"separator" : " to "
	},
	"autoApply" : true,
	"showDropdowns" : true
});
$('.single_date_picker').daterangepicker({
	"locale" : {
		"format" : "YYYY-MM-DD",
		"separator" : " to "
	},
	"singleDatePicker" : true,
	"showDropdowns" : true
});