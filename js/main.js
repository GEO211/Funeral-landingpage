document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Form submission handling
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Collect form data
            const formData = new FormData(this);
            const data = {};
            formData.forEach((value, key) => data[key] = value);
            
            // Here you would typically send the data to your server
            console.log('Form submitted with data:', data);
            
            // Show success message
            alert('Thank you for your interest! We will contact you soon.');
            this.reset();
        });
    }

    // Add scroll-based animations
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.service-card, .stat-item');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            
            if (elementTop < window.innerHeight && elementBottom > 0) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };

    // Initialize animation styles
    document.querySelectorAll('.service-card, .stat-item').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    });

    // Listen for scroll events
    window.addEventListener('scroll', animateOnScroll);
    // Initial check for elements in view
    animateOnScroll();

    // Hero Image Slider
    const featuredImgs = document.querySelectorAll('.featured-img');
    const dotsContainer = document.querySelector('.slider-dots');
    let currentImg = 0;
    let sliderInterval;

    // Create dots
    if (dotsContainer && featuredImgs.length > 1) {
        for (let i = 0; i < featuredImgs.length; i++) {
            const dot = document.createElement('button');
            dot.className = 'slider-dot';
            dot.setAttribute('aria-label', `Go to image ${i+1}`);
            dot.addEventListener('click', () => {
                showFeaturedImg(i);
                stopFeaturedSlider();
                startFeaturedSlider();
            });
            dotsContainer.appendChild(dot);
        }
    }
    const sliderDots = dotsContainer ? dotsContainer.querySelectorAll('.slider-dot') : [];

    function showFeaturedImg(idx) {
        featuredImgs.forEach((img, i) => {
            if (i === idx) {
                img.classList.add('active');
            } else {
                img.classList.remove('active');
            }
            if (sliderDots[i]) sliderDots[i].classList.toggle('active', i === idx);
        });
        currentImg = idx;
    }

    function nextFeaturedImg() {
        let next = (currentImg + 1) % featuredImgs.length;
        showFeaturedImg(next);
    }

    function startFeaturedSlider() {
        sliderInterval = setInterval(nextFeaturedImg, 5000);
    }

    function stopFeaturedSlider() {
        clearInterval(sliderInterval);
    }

    if (featuredImgs.length > 0) {
        showFeaturedImg(0);
        startFeaturedSlider();
    }

    // Navbar Hamburger Toggle
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navLinks = document.querySelector('.nav-links');
    if (navbarToggle && navLinks) {
        navbarToggle.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });
        // Optional: close menu when a link is clicked
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
            });
        });
    }
}); 