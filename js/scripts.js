$(function(){


   $("#li-servicos").click(function(e){
		e.preventDefault();
		if($("#row-menu-servicos:visible").length){
			if($("#row-menu-servicos").hasClass('active')){
				$("#row-menu-servicos").animate({
					bottom :  '45px',
					top: '-41px'
					}, 300, function() {
					    // Animation complete.
					  });
				$("#row-menu-servicos").removeClass('active');
			}else{
				$("#row-menu-servicos").animate({
					bottom :  0,
					top: '7px'
					}, 300, function() {
					    // Animation complete.
					  });
				$("#row-menu-servicos").addClass('active');
			}
		}else{
			if($(".li-sub-menu:visible").length){
				$(".li-sub-menu").animate({
					height :  0
					}, 300, function() {
					    // Animation complete.
					  });
				$(".li-sub-menu").hide();
			}else{
				$(".li-sub-menu").show();
				$(".li-sub-menu").animate({
					height :  '40px'
					}, 300, function() {
					    // Animation complete.
					  });
			}
		}
		
   });
})
