jQuery(function() {
	video();
});


function video() {
	var h = jQuery(window).height();
	jQuery("#video").height(h);
	var inner = jQuery("#inner");
	inner.css('padding-top',((h - inner.height()) / 2));
}
