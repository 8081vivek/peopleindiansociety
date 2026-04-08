    var heroSwiper = new Swiper(".mySwiper", {
            speed: 600,
            parallax: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
        
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const nav = document.getElementById('mainNav');
            nav.classList.toggle('active');
            this.innerHTML = nav.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : 
                '<i class="fas fa-bars"></i>';
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('#mainNav a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mainNav').classList.remove('active');
                document.getElementById('mobileMenuBtn').innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
        
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.style.padding = '10px 0';
                header.style.boxShadow = '0 5px 20px rgba(0,0,0,0.1)';
            } else {
                header.style.padding = '15px 0';
                header.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
            }
        });
        
    