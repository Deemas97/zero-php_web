$(document).ready(function() {
    // Hero video control
    const heroVideo = document.querySelector('.hero-video');
    if (heroVideo) {
        heroVideo.play().catch(e => console.log("Autoplay prevented:", e));
    }

    // Smooth scrolling for anchor links
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        
        const target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 80
            }, 800, 'swing');
            
            // Close mobile menu if open
            if ($('.navbar-collapse').hasClass('show')) {
                $('.navbar-toggler').click();
            }
        }
    });
    
    // Header scroll effect
    $(window).scroll(function() {
        const scroll = $(window).scrollTop();
        $('.landing-header').toggleClass('scrolled', scroll > 50);
        
        // Update breadcrumbs based on scroll position
        updateBreadcrumbs();
    });

    const featuresSwiper = new Swiper('.features-carousel.swiper', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 2,
            }
        }
    });

    // Mobile menu overlay and behavior
    const navbarToggler = document.querySelector('.navbar-toggler');
    const mobileOverlay = document.querySelector('.mobile-menu-overlay');
    const navLinks = document.querySelectorAll('.nav-link');
    
    if (navbarToggler && mobileOverlay) {
        navbarToggler.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'false';
            mobileOverlay.style.opacity = isExpanded ? '0' : '1';
            mobileOverlay.style.visibility = isExpanded ? 'hidden' : 'visible';
        });
        
        mobileOverlay.addEventListener('click', function() {
            navbarToggler.click();
        });
        
        // Close menu when clicking on nav links (mobile)
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 992) {
                    navbarToggler.click();
                }
            });
        });
    }
    
    // Initialize breadcrumbs
    function updateBreadcrumbs() {
        const sections = [
            { id: 'platform', name: 'Платформа' },
            { id: 'platform_about', name: 'Платформа' },
            { id: 'production', name: 'Видеопродакшн' },
            { id: 'production_pricing', name: 'Видеопродакшн' },
            { id: 'producing', name: 'Продюсирование' },
            { id: 'producing_pricing', name: 'Продюсирование' },
            { id: 'contacts', name: 'Контакты' },
            { id: 'courses', name: 'Обучение' }
        ];
        
        let currentSection = 'Главная';
        const scrollPosition = window.scrollY + 100;
        
        sections.forEach(section => {
            const element = document.getElementById(section.id);
            if (element) {
                const offset = element.offsetTop;
                const height = element.offsetHeight;
                
                if (scrollPosition >= offset && scrollPosition < offset + height) {
                    currentSection = section.name;
                }
            }
        });
        
        document.querySelectorAll('.breadcrumbs-text').forEach(el => {
            el.textContent = currentSection;
        });
    }
    
    // Initial breadcrumbs update
    updateBreadcrumbs();

    // Initialize fashion gallery swiper
    const fashionSwiper = new Swiper('.card-fashion-gallery', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    
    // Modal functionality
    let currentImageIndex = 0;
    const imagePaths = [
        '/assets/img/fashion/1.JPG',
        '/assets/img/fashion/2.JPG',
        '/assets/img/fashion/3.JPG',
        '/assets/img/fashion/4.JPG'
    ];
    
    $('#fashionModal').on('show.bs.modal', function(event) {
        const button = $(event.relatedTarget);
        const imgSrc = button.data('img');
        currentImageIndex = imagePaths.indexOf(imgSrc);
        $('#modalImage').attr('src', imgSrc);
    });
    
    $('#nextImage').click(function() {
        currentImageIndex = (currentImageIndex + 1) % imagePaths.length;
        $('#modalImage').attr('src', imagePaths[currentImageIndex]);
    });
    
    $('#prevImage').click(function() {
        currentImageIndex = (currentImageIndex - 1 + imagePaths.length) % imagePaths.length;
        $('#modalImage').attr('src', imagePaths[currentImageIndex]);
    });
    
    // Keyboard navigation
    $(document).keydown(function(e) {
        if ($('#fashionModal').hasClass('show')) {
            e.preventDefault();
            if (e.keyCode == 37) { // left arrow
                $('#prevImage').click();
            } else if (e.keyCode == 39) { // right arrow
                $('#nextImage').click();
            }
        }
    });

    const pricingProductionSwiper = new Swiper('#production_pricing-carousel', {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            }
        }
    });

    const pricingProducingSwiper = new Swiper('#producing_pricing-carousel', {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });
});