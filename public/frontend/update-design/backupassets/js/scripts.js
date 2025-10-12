$(document).ready(function(){
	// Mobile Menu
	$('.menu_icon').click(function(){
		$('.fixed_overlay').show();
		$('.dropdown_menu_main').addClass('dropdown_menu_main_show');
		// $('body').addClass('header_fixed');
		$('.header_main').addClass('header_inherit');

		return false
	});
	$('.menu_close_icon, .fixed_overlay').click(function(){
		$('.fixed_overlay').hide();
		$('.dropdown_menu_main').removeClass('dropdown_menu_main_show');
		// $('body').removeClass('header_fixed');
		$('.header_main').removeClass('header_inherit');

		return false
	});


	// Dashboard Mobile Menu
	$('.dashboard_mobile_menu_bar').click(function(){
		$('.dashboard_design').addClass('dashboard_design_overley');
		$('.dashboard_left_main').fadeIn(100);

		return false
	});
	$('.dashboard_mobile_menu_close').click(function(){
		$('.dashboard_design').removeClass('dashboard_design_overley');
		$('.dashboard_left_main').fadeOut(100);

		return false
	});



	// Checkbox design Page-(Book-Free-Assessment)
	const checkboxes = document.querySelectorAll(".subject-option input[type='checkbox']");
	checkboxes.forEach(checkbox => {
	  // Initial set
	  if (checkbox.checked) {
	    checkbox.parentElement.classList.add("active");
	  }

	  // On change
	  checkbox.addEventListener("change", function () {
	    if (this.checked) {
	      this.parentElement.classList.add("active");
	    } else {
	      this.parentElement.classList.remove("active");
	    }
	  });
	});



	// Parents Say About-Us Carousel (Home Page)
	$('.parent_say_about_us_contents').owlCarousel({
		loop:true,
		nav:true,
		dots:false,
		center: true,
		autoplay: false,
		margin: 25,
		responsive : {
		    0 : {
						margin: 10,
		        items:1.1,
		    },
		    575 : {
		        items:1.4,
		    },
		    768 : {
		        items:1.9,
		    },
		    992 : {
		        items:2.2,
		    },
		    1200 : {
		        items:3.2,
		    },
		    1600 : {
		        items:3.5,
		    },
		    1900 : {
		        items:3.8,
		    }
		}
	});
	$( ".owl-prev").html('<i class="fa-solid fa-arrow-left"></i>');
	$( ".owl-next").html('<i class="fa-solid fa-arrow-right"></i>');


	// Feedback Carousel
    $(".feedback_carousel").owlCarousel({
        loop:true,
				nav:true,
				dots:false,
				center: true,
				autoplay:false,
				margin: 25,
				responsive : {
				    0 : {
				        items:1,
								margin: 10,
				    },
				    480 : {
				        items:1.8,
				    },
				    768 : {
				        items:2.2,
				    },
				    992 : {
				        items:3,
				    },
				    1200 : {
				        items:3,
								margin: 50,
				    }
				}
		    });
			$( ".owl-prev").html('<i class="fa-solid fa-arrow-left"></i>');
			$( ".owl-next").html('<i class="fa-solid fa-arrow-right"></i>');

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



  // Our-Products Carousel
	$('.our_featured_products_contents').owlCarousel({
		items:4,
		loop:true,
		nav:true,
		dots:false,
		autoplay:false,
		margin: 20,
		responsive : {
		    0 : {
		        items:1,
		    },
		    480 : {
		        items:1,
		    },
		    768 : {
		        items:2,
		    },
		    992 : {
		        items:3,
		    },
		    1200 : {
		        items:4,
		    }
		}
	});
	$( ".owl-prev").html('<i class="fa-solid fa-arrow-left"></i>');
	$( ".owl-next").html('<i class="fa-solid fa-arrow-right"></i>');




	// Gallery Carousel (About Page)
    document.querySelectorAll('.mt_carousel_wrapper').forEach(wrapper => {
    const container = wrapper.querySelector('.mt_gallery_tab_contents');
    const items = Array.from(container.children);
    const total = items.length;
    let currentIndex = 2;

    function getIndex(i) {
      return (i + total) % total;
    }

    function renderCarousel() {
      items.forEach(item => {
        item.classList.remove('level-0', 'level-1', 'level-2');
      });

      const indexes = [
        getIndex(currentIndex - 2),
        getIndex(currentIndex - 1),
        getIndex(currentIndex),
        getIndex(currentIndex + 1),
        getIndex(currentIndex + 2),
      ];

      container.innerHTML = '';
      indexes.forEach((i, idx) => {
        if (idx === 0 || idx === 4) items[i].classList.add('level-0');
        if (idx === 1 || idx === 3) items[i].classList.add('level-1');
        if (idx === 2) items[i].classList.add('level-2');
        container.appendChild(items[i]);
      });
    }

    wrapper.querySelector('.nextBtn').addEventListener('click', () => {
      currentIndex = (currentIndex + 1) % total;
      renderCarousel();
    });

    wrapper.querySelector('.prevBtn').addEventListener('click', () => {
      currentIndex = (currentIndex - 1 + total) % total;
      renderCarousel();
    });

    renderCarousel(); // Initial load
  });



});



// Dropdown Menu
document.addEventListener("DOMContentLoaded", function () {
  const dropdownItems = document.querySelectorAll(".navbar li");

  dropdownItems.forEach(item => {
    const toggle = item.querySelector(".dropdown_toggle");
    const icon = toggle?.querySelector("i");
    const dropdownMenu = item.querySelector(".dropdown_menu");

    toggle?.addEventListener("click", function (e) {
      e.preventDefault();

      const isActive = item.classList.contains("active");

      dropdownItems.forEach(li => {
        li.classList.remove("active");
        const ic = li.querySelector(".dropdown_toggle i");
        if (ic) {
          ic.classList.remove("fa-angle-up");
          ic.classList.add("fa-angle-down");
        }
        if (window.innerWidth <= 1200) {
          const liDropdown = li.querySelector(".dropdown_menu");
          if (liDropdown) liDropdown.style.display = "none";
        }
      });

      if (!isActive) {
        item.classList.add("active");
        if (icon) {
          icon.classList.remove("fa-angle-down");
          icon.classList.add("fa-angle-up");
        }
        if (window.innerWidth <= 1200 && dropdownMenu) {
          dropdownMenu.style.display = "block";
        }
      }
    });
  });

  // ✅ Submenu toggle for mobile
  if (window.innerWidth <= 1200) {
    document.querySelectorAll(".has_submenu > a").forEach(link => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        const parent = this.parentElement;
        parent.classList.toggle("active");
      });
    });
  }

  // বাইরে click করলে সব বন্ধ
  document.addEventListener("click", function (e) {
    if (!e.target.closest(".navbar")) {
      dropdownItems.forEach(item => {
        item.classList.remove("active");

        const icon = item.querySelector(".dropdown_toggle i");
        const dropdownMenu = item.querySelector(".dropdown_menu");

        if (icon) {
          icon.classList.remove("fa-angle-up");
          icon.classList.add("fa-angle-down");
        }

        if (window.innerWidth <= 1200 && dropdownMenu) {
          dropdownMenu.style.display = "none";
        }
      });
    }
  });
});





// Section Animation
$('a[href*=#]').on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
});





