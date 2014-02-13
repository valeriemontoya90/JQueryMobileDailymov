
		$(function(){
			$(".page0 .menu").hide();
			$(".page0 .aller_menu").click(function(){
				if ($(".page0 .menu").is(":hidden")) {
					$(".page0 .menu").show();
				} else {
					$(".page0 .menu").hide();
				}
			});
		});