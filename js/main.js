	//Animation Function
function animateObject(element_ID, animation) {
	$(element_ID).addClass(animation + " animated");
	var wait = window.setTimeout( function(){
		$(element_ID).removeClass(animation + " animated");
	}, 1300
	);
}

$(document).ready(function(){
	$(window).resize();

//	HIDE VIDEO
	$('#mashvid').hide();

//	QUOTE BOX CYCLING
	$('.fade-box .fade-item');
		setInterval(function(){
			$('.fade-box .fade-item').filter(':visible').fadeOut(1500,function(){
				if($(this).next('.fade-item').size()){
					$(this).next().fadeIn(1500);
				}
				else{
					$('.fade-box .fade-item').eq(0).fadeIn(1500);
				}
			});
		},8000);
	
//	SCROLL TO NAV TARGET
	$('a[href*=#]').click(function(e) {
		$(".nav-box").removeClass("navOpen");
		$(".nav-toggle, .nav-toggle-small").removeClass("active");
		if (location.pathname.replace('/^\//','') == this.pathname.replace('/^\//','') && location.hostname == this.hostname) {
			var hash = this.hash;
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
			if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body')
				.animate({
					scrollTop: targetOffset
				}, 1250, "easeInOutQuint", function() {
					location.hash = hash;
				});
				e.preventDefault();
	
			}
		}
	});

//	HIGHLIGHT NAV BASED ON SCROLL LOCATION + DIRECTION
	$('.nav-anchor')
		.waypoint(function(direction) {
			var anchorName = this.id;
			if (direction === 'down') {
				$("a.nav-button.active").not(".nav-toggle").removeClass("active");
				$("a#nav_" + anchorName).addClass("active");
			}
	},
	{ offset: '50%' }
	);
	
	$('.nav-anchor')
		.waypoint(function(direction) {
			var anchorName = this.id;
			if (direction === 'up') {
				$("a.nav-button.active").not(".nav-toggle").removeClass("active");
				$("a#nav_" + anchorName).addClass("active");
			}
	},
	{ offset: function() { return $(this).height()*-0.5;}
	});


//	TOGGLE MOBILE NAV STATE
	$(".nav-toggle, .nav-toggle-small").on("click", function(){
		$(".nav-box").toggleClass("navOpen");
		$(".nav-toggle, .nav-toggle-small").toggleClass("active");
	});


//	NEWSLETTER SUBMIT
	$('#newsletterForm').submit(function() {
		$("#newsletterMessage").html("Adding your email address...");
		$.ajax({
			url: 'php/store-address.php', // proper url to your "store-address.php" file
			data: $('#newsletterForm').serialize(),
			success: function(msg) {
				$('#newsletterMessage').html(msg);
			},
			error: function() {
				$('#newsletterForm #email').addClass('error');
			}
		});
		return false;
	});
	
//	CONTACT FORM SUBMIT
	$("#contactSubmit").click(function() {
		var name = $("#contactName").val();
		var email = $("#contactEmail").val();
		var company = $("#contactCompany").val();
		var text = $("#contactMessage").val();
		var dataString = 'name='+ name + '&email=' + email + '&company=' + company + '&text=' + text;
		
		$.ajax({
			type: "POST",
			url: "php/contact.php",
			data: dataString,
			
			success: function(){
				$('#contactForm').css('opacity','0');
				$('.contactSuccess').fadeIn(1000);
			}
		});
		
		return false;
	});
	
//	VIDEO CONTROLS
	var mashVid = new MediaElement('mashvid', {
		// force iPad's native controls
		iPadUseNativeControls: true,
		// force iPhone's native controls
		iPhoneUseNativeControls: true,
		// force Android's native controls
		AndroidUseNativeControls: true,
		success: function(player, node) {
			player.addEventListener('ended', function(e){
			$('#mashvid')[0].webkitExitFullScreen();
			$('#mashvid').fadeOut();
			$("#hero-button-1").css({"opacity" : "1", "z-index" : "500"});
			console.log("player-ended");
			});
			player.addEventListener('pause', function(e){
				if ($('#mashvid')[0].webkitDisplayingFullscreen == false) {
					$('#mashvid').fadeOut();
					$("#hero-button-1").css({"opacity" : "1", "z-index" : "500"});
					console.log("exited-fullscreen");
				}
			});
		},
		error: function () {
		
		}
	});
	
	$(".play-button").click(function() {
		$("#hero-button-1").css({"opacity" : "0", "z-index" : "-500"});
		$("#mashvid").fadeIn(500);
		mashVid.play();
		console.log("play-clicked");
	});
	
	$(".touch .play-button").click(function() {
		$("#mashvid").fadeIn(500);
		$("#hero-button-1").css({"opacity" : "1", "z-index" : "500"});
		mashVid.play();
		$('#mashvid')[0].webkitEnterFullScreen();
	});
	
	$("#mashvid").click(function() {
		$("#mashvid").fadeOut(500);
		$("#hero-button-1").css({"opacity" : "1", "z-index" : "500"});
		mashVid.pause();
		console.log("video-clicked");
	});

	
});

$(window).resize(function() {
	if ($(this).width() > 980) {
	//	RESIZE NAV ON SCROLL
		if ($(window).scrollTop() > 100) {
			$('.nav-button, .nav-container').addClass('navSmall');
		}
		else
		{
			$('.nav-button, .nav-container').removeClass('navSmall');
		}
		$(window).scroll(function () {
			if ($(window).scrollTop() > 100) {
				$('.nav-button, .nav-container').addClass('navSmall');
			}
			else
			{
				$('.nav-button, .nav-container').removeClass('navSmall');
			}
		});
	} else {
		$('.nav-button, .nav-container').addClass('navSmall');
	}
});
