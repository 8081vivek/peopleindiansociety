<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - People of Indian Society</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: serif;
        }

        :root {
            --primary-green: #2e7d32;
            --light-green: #4caf50;
            --primary-green: #4caf50;
            --dark-green: #1b5e20;
            --light-bg: #f8fdf8;
            --card-bg: #ffffff;
            --text-dark: #333333;
            --text-light: #666666;
            --accent-gold: #d4af37;
            --border-color: #e0e0e0;
        }

        body {
            color: var(--text-dark);
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
             line-height: 1.6;
        }
 .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color:  #2e7d32;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            z-index: 100;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover, .back-to-top:focus {
            background-color: var(--primary-green);
            transform: translateY(-5px);
            outline: none;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(46, 125, 50, 0.9), rgba(27, 94, 32, 0.95)), url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to bottom, transparent, var(--light-bg));
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 25px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: 700;
        }

        .hero p {
            font-size: 1.4rem;
            max-width: 900px;
            margin: 0 auto 30px;
            line-height: 1.8;
            opacity: 0.95;
        }

        .tagline {
            font-size: 2rem;
            font-weight: 600;
            color: #e8f5e9;
            margin-top: 30px;
            padding: 15px 30px;
            border-left: 4px solid var(--accent-gold);
            border-right: 4px solid var(--accent-gold);
            display: inline-block;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        /* Main Content Sections */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--dark-green);
            position: relative;
        }

        .section-title h2 {
            font-size: 2.8rem;
            display: inline-block;
            padding-bottom: 15px;
            position: relative;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 100px;
            height: 4px;
            background-color: var(--light-green);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 800px;
            margin: 20px auto 40px;
        }

        /* Mission Section */
        .mission-section {
            background-color: var(--card-bg);
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.05);
            border-radius: 15px;
            padding: 60px;
            margin-top: -40px;
            position: relative;
            z-index: 3;
            border: 1px solid var(--border-color);
        }

        .mission-content {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .mission-text {
            flex: 1;
        }
.mission-image{
    width:100%;
    height:60%;
    overflow:hidden;
    border-radius:12px;
}

.mission-image img{
    width:100%;
    height:100%;
    object-fit:cover; /* image crop hogi, stretch nahi */
    display:block;
}

        .mission-text h3 {
            color: var(--dark-green);
            font-size: 2rem;
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .mission-text p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .highlight-box {
            background: #e8f5e9;
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid var(--light-green);
            margin-top: 25px;
        }

        .highlight-box p {
            font-style: italic;
            color: var(--dark-green);
            margin: 0;
            font-size: 1.2rem;
        }

        .mission-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            transition: transform 0.5s ease;
        }

        .mission-image:hover {
            transform: scale(1.03);
        }

        .mission-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* What We Do Section */
        .activities {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .activity-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 1px solid var(--border-color);
        }

        .activity-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: var(--light-green);
        }

        .activity-icon {
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            color: white;
            font-size: 2.8rem;
            padding: 35px;
            text-align: center;
        }

        .activity-content {
            padding: 30px;
        }

        .activity-content h3 {
            color: var(--dark-green);
            margin-bottom: 15px;
            font-size: 1.6rem;
        }

        .activity-content p {
            color: var(--text-light);
            line-height: 1.7;
        }

        /* Stats Section */
        .stats-section {
            background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
            color: white;
            padding: 80px 0;
            border-radius: 20px;
            margin: 80px 0;
            box-shadow: 0 15px 40px rgba(46, 125, 50, 0.2);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item {
            padding: 20px;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: var(--accent-gold);
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .stat-text {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Vision & Philosophy */
        .vision-philosophy {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 50px;
            margin-top: 40px;
        }

        .vision-box, .philosophy-box {
            background-color: var(--card-bg);
            padding: 50px 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            position: relative;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .vision-box:hover, .philosophy-box:hover {
            border-color: var(--light-green);
            transform: translateY(-5px);
        }

        .vision-box:before {
            content: '\f06c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: -25px;
            left: 40px;
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }

        .philosophy-box:before {
            content: '\f1bb';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            top: -25px;
            left: 40px;
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }

        .vision-box h3, .philosophy-box h3 {
            color: var(--dark-green);
            font-size: 1.9rem;
            margin-bottom: 25px;
        }

        .vision-box p, .philosophy-box p {
            color: var(--text-light);
            margin-bottom: 20px;
            line-height: 1.7;
        }

        /* Team Section */
        .team-section {
            background-color: #f5f9f5;
            padding: 80px 0;
            border-radius: 20px;
            margin: 80px 0;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .team-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            text-align: center;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .team-image {
            height: 250px;
            overflow: hidden;
        }

        .team-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-card:hover .team-image img {
            transform: scale(1.05);
        }

        .team-info {
            padding: 25px;
        }

        .team-info h4 {
            color: var(--dark-green);
            font-size: 1.4rem;
            margin-bottom: 5px;
        }

        .team-info .role {
            color: var(--light-green);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .team-info p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* Call to Action */
        .cta-section {
            text-align: center;
            padding: 100px 0;
            background: linear-gradient(rgba(46, 125, 50, 0.05), rgba(46, 125, 50, 0.1));
            border-radius: 20px;
            margin: 80px 0;
            border: 2px dashed var(--light-green);
        }

        .cta-section h2 {
            font-size: 2.8rem;
            margin-bottom: 25px;
            color: var(--dark-green);
        }

        .cta-section p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 50px;
            color: var(--text-light);
            line-height: 1.8;
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            color: white;
            padding: 18px 50px;
            font-size: 1.3rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 25px rgba(46, 125, 50, 0.3);
            border: 3px solid transparent;
        }

        .cta-button:hover {
            background: transparent;
            color: var(--primary-green);
            border-color: var(--primary-green);
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(46, 125, 50, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 1100px) {
            .vision-philosophy {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 992px) {
            .mission-content {
                flex-direction: column;
            }
            
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .tagline {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 80px 0 60px;
            }
            
            .hero h1 {
                font-size: 2.3rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
            
            .mission-section {
                padding: 40px 30px;
            }
            
            .vision-box, .philosophy-box {
                padding: 40px 25px 25px;
            }
            
            .vision-box:before, .philosophy-box:before {
                left: 50%;
                transform: translateX(-50%);
                top: -30px;
            }
            
            .activities {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .tagline {
                font-size: 1.4rem;
                padding: 10px 20px;
            }
            
            section {
                padding: 60px 0;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .stat-number {
                font-size: 2.8rem;
            }
        }
    </style>
</head>
<body>
@include('header')

    <!-- Mission Section -->
    <section class="mission-section container">
        <div class="container">
            <div class="mission-content">
                <div class="mission-text">
                    <h3>From Plantation to Green Revolution</h3>
                    <p>Founded on the principle that environmental conservation is not just a responsibility but our cultural heritage, People of Indian Society emerged as a response to the growing need for sustainable living practices in our rapidly developing nation.</p>
                    <p>Our mission extends beyond planting trees; we cultivate environmental consciousness, foster community engagement, and build a sustainable future where humanity and nature thrive in harmony.</p>
                    <p>We believe that every sapling planted today is a promise to future generations - a promise of cleaner air, richer soil, cooler temperatures, and a healthier ecosystem.</p>
                    <div class="highlight-box">
                        <p>"We do not inherit the earth from our ancestors; we borrow it from our children." - Ancient Indian Wisdom</p>
                    </div>
                </div>
               <div class="mission-image">
    <img src="image/jonathan-kemper-CbZh3kaPxrE-unsplash.jpg"
         alt="Community plantation activity">
</div>

            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Our Work & Impact</h2>
            </div>
            <p class="section-subtitle">Through diverse initiatives and community-driven programs, we're creating lasting environmental change across India</p>
            
            <div class="activities">
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Mass Plantation Drives</h3>
                        <p>Organizing large-scale tree plantation events in urban and rural areas, involving communities, schools, and corporations in greening initiatives.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Native Species Conservation</h3>
                        <p>Promoting indigenous plant species that are naturally adapted to local conditions, ensuring higher survival rates and supporting local biodiversity.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Environmental Education</h3>
                        <p>Developing curriculum-based programs for schools and conducting workshops to instill environmental values from a young age.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Community Empowerment</h3>
                        <p>Training local communities in sustainable agroforestry, rainwater harvesting, and eco-friendly livelihood practices.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Sustainability Projects</h3>
                        <p>Implementing circular economy models, waste management systems, and renewable energy solutions in partnership with communities.</p>
                    </div>
                </div>
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-hand-holding-water"></i>
                    </div>
                    <div class="activity-content">
                        <h3>Water Conservation</h3>
                        <p>Integrating tree plantation with water conservation through check dams, percolation tanks, and watershed management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Vision & Philosophy Section -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Our Vision & Philosophy</h2>
            </div>
            <div class="vision-philosophy">
                <div class="vision-box">
                    <h3>Our Vision for India</h3>
                    <p>We envision an India where environmental stewardship is woven into the fabric of our society - where every citizen understands their role in preserving our natural heritage and takes tangible action toward sustainability.</p>
                    <p>Our goal is to contribute significantly to India's commitment to increase forest cover, combat climate change, and create resilient ecosystems that support both wildlife and human communities.</p>
                    <p>We dream of a future where cities are green lungs, villages are biodiversity hotspots, and every child grows up with a deep connection to and respect for nature.</p>
                </div>
                <div class="philosophy-box">
                    <h3>Our Guiding Philosophy</h3>
                    <p>"Vasudhaiva Kutumbakam" - The world is one family. This ancient Indian philosophy guides our work, reminding us that all living beings are interconnected and that caring for the environment is caring for our extended family.</p>
                    <p>We believe in the power of collective action, the wisdom of traditional ecological knowledge, and the necessity of integrating modern scientific approaches with time-tested practices.</p>
                    <p>Our approach is holistic - we don't just plant trees; we nurture ecosystems, empower communities, and build sustainable relationships between people and the planet.</p>
                </div>
            </div>
        </div>
    </section>

      @include('footer')
           <a href="#main-content" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <script>
                    const backToTopBtn = document.querySelector('.back-to-top');

         // Back to top functionality
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            });
            
            backToTopBtn.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
                document.querySelector('.skip-to-content').focus();
            });
            
    </script>

    <!-- Team Section -->
   


  
       
</body>
</html>