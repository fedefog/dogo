$(document).ready(function() {

// Header sub menus 

	var tim;

	$(".dropdown").hover(function(){
		clearInterval(tim);
		var nav = this.id;
		$(".sub-header").removeClass("show");
		$("#nav-" + nav ).addClass("show");
	}, function(){
		var nav = this.id;
		tim = setTimeout(function(){
			$("#nav-" + nav ).removeClass("show");
		}, 1000);
	});

	$(".sub-header").hover(function(){
		clearInterval(tim);
	}, function(){
		$(".sub-header").removeClass("show");
	});


// Products hover

	$(".product").hover(function(){
		$(this).addClass("selected");
	}, function(){
		$(".product").removeClass("selected");
	});


// Like button
	$(".like").click(function(){

		for(i=1; i<3; i++){
			if($(this).find("i:nth-of-type("+ i +")").hasClass("hidden")){
				$(this).find("i:nth-of-type("+ i +")").removeClass("hidden");
			}
			else{
				$(this).find("i:nth-of-type("+ i +")").addClass("hidden");
			}
		}

	});

// Color and size buttons

	$(".btn-sizes").click(function(){
		$(".btn-sizes").removeClass("selected")
		$(this).addClass("selected");
	})

	$(".btn-colors").click(function(){
		$(".btn-colors").removeClass("selected")
		$(this).addClass("selected");
	})

});

