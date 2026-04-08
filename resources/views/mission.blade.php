<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People of Indian Society Plantation Mission</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: serif;
        }
        
        body {
            color: #333;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
           
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
            padding: 20px;
        }
        
        .mission-banner {
            text-align: center;
            padding: 40px 20px;
            background-color: #2e7d32;
            color: white;
            border-radius: 15px;
            margin-bottom: 40px;
            box-shadow: 0 10px 20px rgba(46, 125, 50, 0.2);
            background-image: url('https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-blend-mode: multiply;
            position: relative;
        }
        
        .mission-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(46, 125, 50, 0.8);
            border-radius: 15px;
        }
        
        .mission-banner h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
            position: relative;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .mission-banner p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .tagline {
            font-style: italic;
            margin-top: 10px;
            font-size: 1.2rem;
        }
        
        .mission-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .mission-card {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .mission-card h2 {
            color: #2e7d32;
            margin-bottom: 20px;
            font-size: 1.8rem;
            display: flex;
            align-items: center;
        }
        
        .mission-card h2 i {
            margin-right: 10px;
            font-size: 1.5rem;
        }
        
        .mission-card p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .highlight {
            background-color: #e8f5e9;
            border-left: 5px solid #2e7d32;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .stat-box {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #2e7d32;
            display: block;
            margin-bottom: 10px;
        }
        
        .stat-text {
            font-size: 1.1rem;
            color: #555;
        }
        
        .action-section {
            text-align: center;
            padding: 50px 20px;
            background-color: #1b5e20;
            color: white;
            border-radius: 15px;
            margin-top: 40px;
        }
        
        .action-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .action-btn {
            display: inline-block;
            background-color: #ff9800;
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 152, 0, 0.3);
        }
        
        .action-btn:hover {
            background-color: #f57c00;
            transform: scale(1.05);
        }
        
        .plant-types {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .plant-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .plant-img {
            height: 180px;
            background-size: cover;
            background-position: center;
        }
        
        .plant-info {
            padding: 20px;
        }
        
        .plant-info h3 {
            color: #2e7d32;
            margin-bottom: 10px;
        }
        
        .quote-section {
            text-align: center;
            padding: 40px;
            font-style: italic;
            font-size: 1.3rem;
            color: #1b5e20;
            background-color: #e8f5e9;
            border-radius: 15px;
            margin: 50px 0;
        }
        
        .quote-author {
            margin-top: 15px;
            font-weight: bold;
            font-style: normal;
        }
        
        @media (max-width: 768px) {
            .mission-banner h1 {
                font-size: 2.5rem;
            }
            
            .mission-banner p {
                font-size: 1.2rem;
            }
            
            .mission-content {
                grid-template-columns: 1fr;
            }
        }
        
     
    </style>
</head>
<body>
    @include('header')
    <br>
    <br>
    <div class="container">
        <div class="mission-banner">
            <h1>People of Indian Society Mission</h1>
            <p>Join us in our mission to green India, one tree at a time. Together, we can create a sustainable future for generations to come.</p>
            <p class="tagline">"The best time to plant a tree was 20 years ago. The second best time is now."</p>
        </div>
        
        <div class="mission-content">
            <div class="mission-card">
                <h2><i class="fas fa-seedling"></i> Our Mission</h2>
                <p>To mobilize every member of Indian society to participate in large-scale tree plantation drives, creating a greener, healthier, and more sustainable environment for current and future generations.</p>
                
                <div class="highlight">
                    <p>We aim to plant 10 million trees across India by 2030, focusing on native species that support local ecosystems and biodiversity.</p>
                </div>
                
                <p>Our mission extends beyond just planting trees - we focus on nurturing them to maturity and ensuring they become part of thriving ecosystems.</p>
            </div>
            
            <div class="mission-card">
                <h2><i class="fas fa-bullseye"></i> Our Vision</h2>
                <p>To transform India into a global leader in environmental conservation through community-driven plantation initiatives that restore ecological balance and combat climate change.</p>
                
                <p>We envision an India where:</p>
                <ul style="padding-left: 20px; margin-top: 15px;">
                    <li>Every citizen has planted at least one tree</li>
                    <li>Urban areas have 30% green cover</li>
                    <li>Rural communities benefit from agroforestry</li>
                    <li>Biodiversity is protected and enhanced</li>
                </ul>
            </div>
            
            <div class="mission-card">
                <h2><i class="fas fa-handshake"></i> How You Can Help</h2>
                <p>Every individual can contribute to this mission. Here's how you can make a difference:</p>
                
                <ul style="padding-left: 20px; margin-top: 15px;">
                    <li>Plant at least one tree every year on your birthday</li>
                    <li>Participate in local plantation drives</li>
                    <li>Adopt a sapling and care for it until maturity</li>
                    <li>Educate others about the importance of trees</li>
                    <li>Support organizations working on reforestation</li>
                    <li>Choose sustainable products and reduce paper consumption</li>
                </ul>
            </div>
        </div>
        
    
        
        <div class="mission-card">
            <h2><i class="fas fa-leaf"></i> Recommended Native Trees for India</h2>
            <p>Planting native species is crucial for maintaining ecological balance. Here are some excellent choices for different regions:</p>
            
            <div class="plant-types">
                <div class="plant-card">
                    <div class="plant-img" style="background-image: url('https://images.unsplash.com/photo-1611273426858-450d8e3c9fce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                    <div class="plant-info">
                        <h3>Neem (Azadirachta indica)</h3>
                        <p>Medicinal, drought-resistant, purifies air, provides shade.</p>
                    </div>
                </div>
                
                <div class="plant-card">
                    <div class="plant-img" style="background-image: url('https://images.unsplash.com/photo-1519682577862-22b62b24e493?ixlib=rb-1.2.1&auto=format&fit=crop&w-1350&q=80');"></div>
                    <div class="plant-info">
                        <h3>Banyan (Ficus benghalensis)</h3>
                        <p>Large canopy, supports biodiversity, cultural significance.</p>
                    </div>
                </div>
                
                <div class="plant-card">
                    <div class="plant-img" style="background-image: url('https://th.bing.com/th/id/OIP.XTvcu7Y3g7uc6tGX1tx1dgHaEJ?w=316&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3');"></div>
                    <div class="plant-info">
                        <h3>Peepal (Ficus religiosa)</h3>
                        <p>Oxygen-rich, religious importance, supports bird life.</p>
                    </div>
                </div>
                
                <div class="plant-card">
                    <div class="plant-img" style="background-image: url('https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?ixlib=rb-1.2.1&auto=format&fit=crop&w-1350&q=80');"></div>
                    <div class="plant-info">
                        <h3>Mango (Mangifera indica)</h3>
                        <p>Fruit-bearing, provides shade, cultural importance.</p>
                    </div>
                </div>
            </div>
        </div>
</div>
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

</body>
</html>