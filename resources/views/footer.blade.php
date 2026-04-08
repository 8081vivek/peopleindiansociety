<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green India Initiative</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Variables */
        :root {
            --primary: #2e7d32;
            --primary-dark: #1b5e20;
            --primary-light: #4caf50;
            --secondary: #ff9800;
            --white: #ffffff;
            --light: #f5f5f5;
            --dark: #333333;
            --light-gray: #e0e0e0;
            --transition: all 0.3s ease;
        }

        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family:serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
        }

        

        /* Footer Styles */
        footer {
            background-color: var(--primary-dark);
            color: var(--white);
            padding: 80px 0 20px;
            margin-top: 80px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-about {
            display: flex;
            flex-direction: column;
        }

        .footer-logo {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--white);
            font-family: serif;
        }

        .footer-logo span {
            color: var(--secondary);
        }

        .footer-about p {
            margin-bottom: 25px;
            opacity: 0.9;
            line-height: 1.8;
            font-size: 1rem;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transition: var(--transition);
            text-decoration: none;
            color: var(--white);
            font-size: 1.2rem;
        }

        .social-icons a:hover {
            background-color: var(--secondary);
            transform: translateY(-5px);
            color: var(--white);
        }

        .footer-links h3,
        .footer-contact h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
            color: var(--white);
            font-weight: 600;
        }

        .footer-links h3::after,
        .footer-contact h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--secondary);
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 15px;
        }

        .footer-links ul li a {
            display: flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
            opacity: 0.9;
            color: var(--white);
            text-decoration: none;
            padding: 5px 0;
        }

        .footer-links ul li a:hover {
            color: var(--secondary) !important;
            padding-left: 5px;
            opacity: 1;
        }

        .footer-links ul li a i {
            color: var(--secondary);
            font-size: 0.9rem;
            transition: var(--transition);
        }

        .footer-links ul li a:hover i {
            color: var(--secondary);
        }

        .footer-contact p {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            opacity: 0.9;
            font-size: 1rem;
            line-height: 1.6;
        }

        .footer-contact i {
            color: var(--secondary);
            margin-top: 3px;
            min-width: 20px;
            text-align: center;
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .copyright p {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            flex-wrap: wrap;
        }

        .copyright i {
            color: var(--secondary);
            margin: 0 5px;
        }

        /* Newsletter Section (Optional - can add if needed) */
        .footer-newsletter {
            margin-top: 20px;
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--white);
        }

        .newsletter-form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .newsletter-form button {
            background-color: var(--secondary);
            color: var(--white);
            border: none;
            padding: 0 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
        }

        .newsletter-form button:hover {
            background-color: #f57c00;
        }

        /* Responsive Design for Footer */
        @media (max-width: 992px) {
            .footer-container {
                gap: 30px;
            }
            
            .footer-logo {
                font-size: 2rem;
            }
            
            .footer-links h3,
            .footer-contact h3 {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 768px) {
            footer {
                padding: 60px 0 20px;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .footer-about,
            .footer-links,
            .footer-contact {
                text-align: center;
            }
            
            .footer-links h3::after,
            .footer-contact h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-links ul li a {
                justify-content: center;
            }
            
            .social-icons {
                justify-content: center;
            }
            
            .footer-contact p {
                justify-content: center;
                text-align: center;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form input,
            .newsletter-form button {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            footer {
                padding: 50px 0 20px;
            }
            
            .footer-logo {
                font-size: 1.8rem;
            }
            
            .footer-about p {
                font-size: 0.95rem;
            }
            
            .footer-links h3,
            .footer-contact h3 {
                font-size: 1.2rem;
            }
            
            .social-icons a {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .copyright {
                font-size: 0.8rem;
            }
        }

        /* Animation for footer items */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer-about,
        .footer-links,
        .footer-contact {
            animation: fadeInUp 0.6s ease-out;
        }

        .footer-links {
            animation-delay: 0.2s;
        }

        .footer-contact {
            animation-delay: 0.4s;
        }
    </style>
</head>
<body>
  

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <div class="footer-logo">People of<span> India</span> Society</div>
                    <p>We are a nationwide initiative dedicated to greening India through community-driven tree plantation projects. Join us in creating a sustainable future for generations to come.</p>
                    
                    <!-- Optional Newsletter Section -->
                    <div class="footer-newsletter">
                        <h4 style="color: var(--white); margin-bottom: 15px; font-size: 1.1rem;">Subscribe to Our Newsletter</h4>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Your email address" required>
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                    
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=100094462670868" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="www.youtube.com/@vivekpatel-8081" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="a"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="misson"><i class="fas fa-chevron-right"></i> Our Mission</a></li>
                        <li><a href="activity"><i class="fas fa-chevron-right"></i> Plantation Programs</a></li>
                        <li><a href="g"><i class="fas fa-chevron-right"></i> Gallery</a></li>
<li>
  <a href="tel:+919450131799" class="call-link">
    <i class="fas fa-phone-alt"></i> Contact Us
</a>

</li>

                    </ul>
                </div>
                
                <div class="footer-contact">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Flat no 201 Vishambhar <br> Sadan Vikas Nagar <br>  Kanpur 202408 India</p>
                    <p><i class="fas fa-phone"></i> +91 94501 31799</p>
                    <p><i class="fas fa-envelope"></i> peopleofindiansociety@gmail.com</p>
                    <p><i class="fas fa-clock"></i> Monday - Saturday: 9:00 AM - 6:00 PM</p>
                    <p><i class="fas fa-clock"></i> Sunday: 10:00 AM - 2:00 PM</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2026 Green India Initiative. All Rights Reserved. | Designed with <i class="fas fa-heart"></i> for a Greener India</p>
                <p style="margin-top: 10px; font-size: 0.85rem;">Follow us on social media for updates on plantation drives and environmental initiatives.</p>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript for newsletter form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Newsletter form submission
            const newsletterForm = document.querySelector('.newsletter-form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const emailInput = this.querySelector('input[type="email"]');
                    const email = emailInput.value;
                    
                    if (email && email.includes('@')) {
                        alert('Thank you for subscribing to our newsletter!');
                        emailInput.value = '';
                    } else {
                        alert('Please enter a valid email address.');
                    }
                });
            }
            
            // Smooth scroll for footer links
            const footerLinks = document.querySelectorAll('.footer-links a[href^="#"]');
            footerLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Add animation on scroll for footer sections
            const observerOptions = {
                threshold: 0.1
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, observerOptions);
            
            const animatedElements = document.querySelectorAll('.footer-about, .footer-links, .footer-contact');
            animatedElements.forEach(el => {
                el.style.animationPlayState = 'paused';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>