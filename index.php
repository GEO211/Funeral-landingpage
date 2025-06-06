<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Funeral - Compassionate Funeral Services</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <button class="navbar-toggle" aria-label="Toggle navigation">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="nav-links">
                <li><a href="#home">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#get-started" class="btn-primary">Get Started</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" aria-label="Funeral Services Introduction" id = "home">
        <div class="hero-card">
            <div class="hero-image">
                <img class="featured-img" src="images/funeral.jpg" alt="Funeral Service" />
                <img class="featured-img" src="images/coffin1.jpg" alt="Coffin Service" />
                <img class="featured-img" src="images/coffin2.jpg" alt="Coffin Service" />
                <img class="featured-img" src="images/coffin3.jpg" alt="Coffin Service" />
                <div class="slider-dots"></div>
            </div>
            <div class="hero-right">
                <div class="hero-logo-circle">
                    <img src="images/logo2.png" alt="Safe Funeral Logo" />
                </div>
                <div class="hero-context">
                    <h1>Compassionate Funeral Services</h1>
                    <p>Providing dignified and respectful funeral services with care and understanding. Available 24/7 to support you during difficult times.</p>
                </div>
                <a href="#contact" class="btn-primary hero-btn">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <style>
            .about-section {
                min-height: 100vh;
                display: flex;
                align-items: center;
                background: linear-gradient(45deg, #FF6B00, #FFA066);
                color: white;
                padding: 80px 0;
                scroll-snap-align: start;
            }
            .about-container {
                display: grid;
                grid-template-columns: 1fr 1.5fr;
                gap: 60px;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 40px;
                width: 100%;
            }
            .services-list {
                padding-right: 20px;
            }
            .service-item {
                margin-bottom: 60px;
                opacity: 0;
                transform: translateY(20px);
                animation: fadeInUp 0.6s ease forwards;
            }
            .service-item:nth-child(1) { animation-delay: 0.2s; }
            .service-item:nth-child(2) { animation-delay: 0.4s; }
            .service-item:nth-child(3) { animation-delay: 0.6s; }
            @keyframes fadeInUp {
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            .service-item h3 {
                font-size: 2.5rem;
                margin-bottom: 20px;
                color: white;
                font-weight: 700;
            }
            .service-item p {
                font-size: 1.2rem;
                line-height: 1.6;
                color: rgba(255, 255, 255, 0.9);
            }
            .about-content {
                position: relative;
                opacity: 0;
                transform: translateX(20px);
                animation: fadeInRight 0.8s ease 0.4s forwards;
            }
            @keyframes fadeInRight {
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            .about-content h2 {
                font-size: 3rem;
                margin-bottom: 30px;
                color: white;
                font-weight: 700;
            }
            .about-content img {
                width: 100%;
                border-radius: 20px;
                margin-bottom: 30px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            }
            .about-content p {
                font-size: 1.1rem;
                line-height: 1.8;
                color: rgba(255, 255, 255, 0.9);
            }
            @media (max-width: 1200px) {
                .about-container {
                    padding: 0 20px;
                    gap: 40px;
                }
                .service-item h3 {
                    font-size: 2rem;
                }
            }
            @media (max-width: 768px) {
                .about-section {
                    padding: 60px 0;
                }
                .about-container {
                    grid-template-columns: 1fr;
                    gap: 40px;
                }
                .services-list {
                    padding-right: 0;
                }
                .service-item {
                    margin-bottom: 40px;
                }
                .service-item h3 {
                    font-size: 1.8rem;
                }
                .about-content h2 {
                    font-size: 2.2rem;
                }
            }
        </style>
        <div class="about-container">
            <div class="services-list">
                <div class="service-item">
                    <h3>Immediate Need</h3>
                    <p>If you have immediate need of our services, we're available for you 24 hours a day.</p>
                </div>
                <div class="service-item">
                    <h3>Pre-Arrangement</h3>
                    <p>A gift to your family sparing them hard decisions at an emotional time.</p>
                </div>
                <div class="service-item">
                    <h3>Obituaries & Tributes</h3>
                    <p>It's not always possible to pay respects in person, so we hope that this small token will help.</p>
                </div>
            </div>
            <div class="about-content">
                <h2>About Safe Funeral</h2>
                <img src="images/about1.png" alt="Senior couple smiling">
                <p>Safe Funeral Reservation and Services it comes time to choose among the funeral home. You can trust us to care for a loved one or to take care of your pre-planning arrangements, we offer the following information about our company history and our valued staff. It is our goal to guide and support you through every step of the arrangement process and to help you pay tribute to the special memory of your loved one. Learn Why We Are The Best Funeral Home To Offer If you need immediate assistance, please do not hesitate to give us a call at (613) 634-3722. We are available 24 hours a day, 7 days a week to answer any questions that you have. Make sure that you are completely comfortable with the funeral home services you choose - Also come in and take a tour of our Safe Funeral.</p>
            </div>
        </div>
    </section>

    <!-- Products & Services Section -->
    <section class="products-services">
        <div class="container">
            <h2 class="section-title">Our Products & Services</h2>
            
            <!-- Products Grid -->
            <div class="products-grid">
                <!-- Left Column - Products -->
                <div class="products-column">
                    <!-- Casket Selection -->
                    <div class="product-item">
                        <h3>Casket Selection</h3>
                        <div class="product-slider">
                            <img src="images/casket.jpg" alt="Laser Casket" class="product-image">
                            <div class="product-details">
                                <div class="price">Laser ₱15,000</div>
                                <div class="navigation">
                                    <button class="nav-arrow prev">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="nav-arrow next">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Flower Selection -->
                    <div class="product-item">
                        <h3>Flower Selection</h3>
                        <div class="product-slider">
                            <img src="images/flower.jpg" alt="Amery Flowers" class="product-image">
                            <div class="product-details">
                                <div class="price">Amery ₱2,000</div>
                                <div class="navigation">
                                    <button class="nav-arrow prev">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="nav-arrow next">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Services -->
                <div class="services-column">
                    <h3>Our Services</h3>
                    <div class="services-cards">
                        <!-- Funeral Services -->
                        <div class="service-card">
                            <img src="images/funeral.jpg" alt="Funeral Services">
                            <div class="service-content">
                                <h4>Funeral Services</h4>
                                <p>Comprehensive funeral services tailored to honor your loved ones with dignity and respect.</p>
                            </div>
                        </div>

                        <!-- Cremation Services -->
                        <div class="service-card">
                            <img src="images/cremation.jpeg" alt="Cremation Services">
                            <div class="service-content">
                                <h4>Cremation Services</h4>
                                <p>Professional cremation services with options for memorial services and urns.</p>
                            </div>
                        </div>

                        <!-- Embalming Services -->
                        <div class="service-card">
                            <img src="images/emblaming.jpg" alt="Embalming Services">
                            <div class="service-content">
                                <h4>Embalming Services</h4>
                                <p>Expert embalming services performed by licensed professionals with utmost care.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <style>
            /* Contact Section Styles */
            .contact-section {
                background: linear-gradient(135deg, rgba(255, 107, 0, 0.05) 0%, rgba(255, 133, 52, 0.1) 100%);
                padding: 100px 0;
                position: relative;
            }

            .contact-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 300px;
                background: url('images/background.jpg') center/cover no-repeat;
                z-index: 0;
            }

            .contact-section::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 300px;
                background: rgba(0, 0, 0, 0.7);
                z-index: 0;
            }

            .contact-header {
                position: relative;
                z-index: 1;
                text-align: center;
                color: white;
                padding: 60px 0;
                margin-bottom: 60px;
            }

            .contact-header h2 {
                font-size: 48px;
                font-weight: 700;
                margin-bottom: 15px;
                text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            }

            .contact-header p {
                font-size: 18px;
                opacity: 0.9;
            }

            .contact-wrapper {
                position: relative;
                z-index: 1;
                background: white;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                overflow: hidden;
                display: grid;
                grid-template-columns: 1fr 1.5fr;
            }

            .contact-info {
                background: linear-gradient(135deg, #FF6B00, #FF8534);
                color: white;
                padding: 60px;
            }

            .contact-info .section-title {
                color: white;
                text-align: left;
                font-size: 32px;
                margin-bottom: 15px;
                padding: 0;
            }

            .contact-info .section-title::after {
                display: none;
            }

            .contact-info .section-subtitle {
                color: white;
                font-size: 16px;
                margin-bottom: 40px;
            }

            .contact-details {
                display: flex;
                flex-direction: column;
                gap: 30px;
            }

            .contact-item {
                display: flex;
                align-items: flex-start;
                gap: 20px;
                padding: 25px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 12px;
                transition: transform 0.3s ease;
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }

            .contact-item:hover {
                transform: translateY(-5px);
            }

            .contact-item i {
                font-size: 24px;
                color: white;
                background: rgba(255, 255, 255, 0.2);
                padding: 15px;
                border-radius: 10px;
            }

            .item-details h3 {
                font-size: 18px;
                color: white;
                margin-bottom: 5px;
                font-weight: 600;
            }

            .item-details p {
                font-size: 16px;
                color: white;
                margin-bottom: 5px;
                font-weight: 500;
            }

            .item-details span {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.8);
            }

            .contact-form-wrapper {
                padding: 60px;
                background: white;
            }

            .form-header {
                margin-bottom: 30px;
            }

            .form-header h3 {
                font-size: 24px;
                color: #333;
                margin-bottom: 10px;
                font-weight: 600;
            }

            .form-header p {
                font-size: 15px;
                color: #666;
            }

            .form-row {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                font-size: 14px;
                color: #333;
                margin-bottom: 8px;
                font-weight: 500;
            }

            .form-group input,
            .form-group textarea {
                width: 100%;
                padding: 12px 15px;
                border: 1px solid #ddd;
                border-radius: 8px;
                font-size: 15px;
                transition: all 0.3s ease;
            }

            .form-group input:focus,
            .form-group textarea:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 3px rgba(255, 107, 0, 0.1);
                outline: none;
            }

            .submit-btn {
                width: 100%;
                padding: 15px;
                background: linear-gradient(135deg, #FF6B00, #FF8534);
                color: white;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                font-weight: 600;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                transition: all 0.3s ease;
            }

            .submit-btn:hover {
                background: linear-gradient(135deg, #FF8534, #FF6B00);
                transform: translateY(-2px);
            }

            .submit-btn i {
                font-size: 18px;
                transition: transform 0.3s ease;
            }

            .submit-btn:hover i {
                transform: translateX(5px);
            }

            @media (max-width: 1024px) {
                .contact-wrapper {
                    grid-template-columns: 1fr;
                }
                
                .contact-info,
                .contact-form-wrapper {
                    padding: 40px;
                }
            }

            @media (max-width: 768px) {
                .contact-section {
                    padding: 60px 0;
                }
                
                .contact-header h2 {
                    font-size: 36px;
                }
                
                .contact-header p {
                    font-size: 16px;
                }
                
                .form-row {
                    grid-template-columns: 1fr;
                }
                
                .contact-info,
                .contact-form-wrapper {
                    padding: 30px;
                }
            }
        </style>

        <div class="contact-header">
            <h2>Contact Us</h2>
            <p>We're here to help you 24/7. Reach out to us anytime.</p>
        </div>

        <div class="container">
            <div class="contact-wrapper">
                <!-- Contact Info -->
                <div class="contact-info">
                    <h2 class="section-title">Get in Touch</h2>
                    <p class="section-subtitle">We're available 24/7 to assist you</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <div class="item-details">
                                <h3>Phone Number</h3>
                                <p>(613) 634-3722</p>
                                <span>Available 24/7</span>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="item-details">
                                <h3>Location</h3>
                                <p>123 Memorial Drive</p>
                                <span>Manila, Philippines</span>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div class="item-details">
                                <h3>Email</h3>
                                <p>info@safefuneral.com</p>
                                <span>24/7 online support</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <div class="form-header">
                        <h3>Send us a message</h3>
                        <p>Fill out the form below and we'll get back to you shortly.</p>
                    </div>
                    
                    <form class="contact-form" action="process_contact.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="How can we help you?" rows="4"></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            Send Message
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="images/logo.png" alt="Safe Funeral Logo">
                    <p>Compassionate funeral services for your loved ones</p>
                </div>
                <div class="footer-links">
                    <div class="footer-section">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#careers">Careers</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#immediate">Immediate Need</a></li>
                            <li><a href="#pre-arrangement">Pre-Arrangement</a></li>
                            <li><a href="#obituaries">Obituaries</a></li>
                        </ul>
                    </div>
                    <div class="footer-section">
                        <h4>Connect</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Safe Funeral. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="js/slider.js"></script>
</body>
</html> 