$(document).ready(function(){
	$(".accordion").accordion({ active: false, collapsible: true, autoHeight: false });

	$('.address').qtip({ style: { classes: 'ui-tooltip-green ui-tooltip-rounded' }, position: { my: 'top middle', at: 'bottom middle', container: $('.address'), adjust: { x: 0 }  }, content: { attr: 'title' } });

	$('.facebook').qtip({ style: { classes: 'ui-tooltip-green ui-tooltip-rounded' }, position: { my: 'top right', at: 'bottom left', container: $('.facebook'), adjust: { x: 25 }  }, content: { attr: 'title' } });
	$('.twitter').qtip({ style: { classes: 'ui-tooltip-green ui-tooltip-rounded' }, position: { my: 'top right', at: 'bottom left', container: $('.twitter'), adjust: { x: 25 }  }, content: { attr: 'title' } });
	$('.linkedin').qtip({ style: { classes: 'ui-tooltip-green ui-tooltip-rounded' }, position: { my: 'top right', at: 'bottom left', container: $('.linkedin'), adjust: { x: 25 }  }, content: { attr: 'title' } });
});
