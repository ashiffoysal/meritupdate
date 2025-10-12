$(document).ready(function(){
	// Mobile Menu
	$('.menu_icon').click(function(){
		$('.menu').slideToggle(300);

		return false
	});

	// Mobile Menu Icon
	$(document).ready(function(){
		$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
			$(this).toggleClass('open');
		});
	});


	// Endorsed Carousel
	$('.endorsed_carousel').owlCarousel({
		loop:true,
		nav:true,
		dots:true,
		center: true,
		autoplay:false,
		responsive : {
		    0 : {
		        items:1.4,
		    },
		    480 : {
		        items:1.8,
		    },
		    768 : {
		        items:2.4,
		    },
		    992 : {
		        items:3,
		    },
		    1200 : {
		        items:3,
		    }
		}
	});
	$( ".owl-prev").html('<i class="fa fa-arrow-left"></i>');
	$( ".owl-next").html('<i class="fa fa-arrow-right"></i>');

	$(".owl-carousel").on("changed.owl.carousel", function(event) {
	  $(".owl-item").removeClass("zoom");
	  $(".owl-item.active.center").addClass("zoom");
	});



	// Testimonials Carousel
	$('.testimonials_carousel').owlCarousel({
		loop:true,
		nav:true,
		dots:true,
		center: true,
		autoplay:false,
		margin: 25,
		responsive : {
		    0 : {
				margin: 10,
		        items:1.2,
		    },
		    480 : {
		        items:1.2,
		    },
		    768 : {
		        items:1.6,
		    },
		    992 : {
		        items:2,
		    },
		    1200 : {
		        items:3,
		    }
		}
	});
	$( ".owl-prev").html('<i class="fa fa-arrow-left"></i>');
	$( ".owl-next").html('<i class="fa fa-arrow-right"></i>');



	// Feedback Carousel
    $(".feedback_carousel").owlCarousel({
        loop:true,
		nav:true,
		dots:true,
		center: true,
		autoplay:false,
		margin: 25,
		responsive : {
		    0 : {
		        items:1.4,
		    },
		    480 : {
		        items:1.8,
		    },
		    768 : {
		        items:2.4,
		    },
		    992 : {
		        items:3,
		    },
		    1200 : {
		        items:3,
		    }
		}
    });

    $(".owl-prev").html('<i class="fa fa-arrow-left"></i>');
    $(".owl-next").html('<i class="fa fa-arrow-right"></i>');

    $(".feedback_carousel").on('translated.owl.carousel', function(){
        $(".feedback_carousel_video").each(function(){
            this.pause();
            this.currentTime = 0;
            $(this).siblings(".play_icon").css("opacity", "1");
        });
    });

    $(document).on("mouseenter", ".owl-item.active.center .feedback_carousel_single", function(){
        let video = $(this).find(".feedback_carousel_video").get(0);
        let playIcon = $(this).find(".play_icon");
        
        if(video) {
            video.play();
            playIcon.css("opacity", "0"); // Hide play icon when playing
        }
    });

    $(document).on("mouseleave", ".owl-item.active.center .feedback_carousel_single", function(){
        let video = $(this).find(".feedback_carousel_video").get(0);
        let playIcon = $(this).find(".play_icon");
        
        if(video) {
            video.pause();
            video.currentTime = 0;
            playIcon.css("opacity", "1"); // Show play icon when stopped
        }
    });




});




// Preview-Tabs Carousel
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".book-slider").forEach(slider => {
        let books = slider.querySelectorAll(".book");
        let prevBtn = slider.querySelector(".prev");
        let nextBtn = slider.querySelector(".next");
        let currentIndex = 0;

        function getOffset() {
            let screenWidth = window.innerWidth;
            if (screenWidth < 480) return 140;
            if (screenWidth < 768) return 200;
            if (screenWidth < 991) return 250;
            if (screenWidth < 1149) return 300;
            if (screenWidth < 1400) return 330;
            return 450;
        }

        function getGap() {
            let screenWidth = window.innerWidth;
            if (screenWidth < 575) return 15;  
            if (screenWidth < 768) return 22;
            if (screenWidth < 991) return 35;
            if (screenWidth < 1150) return 55;
            return 80; 
        }

        function updateStackedEffect() {
            let baseOffset = getOffset();
            let extraGap = getGap();

            books.forEach((book, index) => {
                let position = index - currentIndex;
                let offset;

                if (position === 0) {
                    offset = 0;
                } else if (position === 1) {
                    offset = baseOffset;
                } else {
                    offset = baseOffset + (position - 1) * extraGap;
                }

                let scale = position === 0 ? 1.1 : 1 - (Math.abs(position) * 0.05);
                let zIndex = books.length - Math.abs(position);

                book.style.transform = `translateX(${offset}px) scale(${scale})`;
                book.style.zIndex = zIndex;
                book.style.opacity = position < 0 ? "0" : "1";

                if (position > 1) {
                    book.classList.add("blur");
                } else {
                    book.classList.remove("blur");
                }
            });

            // **Prev Button প্রথমে লুকানো থাকবে, এবং Next ক্লিকের পর show হবে**
            prevBtn.style.display = currentIndex === 0 ? "none" : "block";
            nextBtn.style.display = currentIndex === books.length - 1 ? "none" : "block";
        }

        nextBtn.addEventListener("click", function () {
            if (currentIndex < books.length - 1) {
                currentIndex++;
                updateStackedEffect();
            }
        });

        prevBtn.addEventListener("click", function () {
            if (currentIndex > 0) {
                currentIndex--;
                updateStackedEffect();
            }
        });

        window.addEventListener("resize", updateStackedEffect);

        // **প্রথমবার লোড হওয়ার সময় Prev Button লুকিয়ে রাখছি**
        prevBtn.style.display = "none";
        updateStackedEffect();
    });

});



	// Checkout Page Payment Radio
	function changeTab(tab) {
	    // Hide all content boxes
	    document.getElementById("contentBox1").style.display = "none";
	    document.getElementById("contentBox2").style.display = "none";

	    // Show the selected one
	    if (tab === 1) {
	        document.getElementById("contentBox1").style.display = "block";
	    } else {
	        document.getElementById("contentBox2").style.display = "block";
	    }

	    // Active state change
	    document.querySelectorAll('.card-option').forEach(el => el.classList.remove('active'));
	    document.querySelectorAll('.card-option')[tab - 1].classList.add('active');
	}
	// Initialize with first option selected
	changeTab(1);


	document.addEventListener("DOMContentLoaded", function () {
	    const bookOptions = document.querySelectorAll(".book-option");

	    bookOptions.forEach(option => {
	        option.addEventListener("click", function () {
	            bookOptions.forEach(opt => opt.classList.remove("active"));
	            this.classList.add("active");
	        });
	    });

	    // ✅ Page Load-এ যেটা checked থাকে সেটার active class set করবে
	    document.querySelector(".book-option input:checked").parentElement.classList.add("active");
	});





	// Flag changes with select
	const countryCodeSelect = document.getElementById("country-code");
	const flagIcon = document.getElementById("flag-icon");

	countryCodeSelect.addEventListener("change", function () {
	  const selectedOption = this.options[this.selectedIndex];
	  const flagUrl = selectedOption.getAttribute("data-flag");
	  
	  // Update the flag icon dynamically
	  flagIcon.src = flagUrl;
	});






