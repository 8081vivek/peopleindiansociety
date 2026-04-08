
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Plantation Program | People of Indian Society</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Source+Serif+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2d5a27;
            --secondary-color: #4caf50;
            --light-green: #e8f5e9;
            --dark-green: #1e3f1a;
            --accent-color: #8bc34a;
            --text-color: #333;
            --border-radius: 12px;
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: serif;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
            color: var(--text-color);
            line-height: 1.7;
            padding: 0;
        }
        
        .plant-program-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
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
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(45, 90, 39, 0.9), rgba(30, 63, 26, 0.9)), 
                        url('https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            border-radius: var(--border-radius);
            padding: 60px 40px;
            color: white;
            margin-bottom: 50px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="white" opacity="0.1"/></svg>');
            background-size: cover;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero-section h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.2rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .hero-section p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            opacity: 0.95;
        }
        
        .highlight-stats {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.8rem;
            font-weight: 700;
            color: var(--accent-color);
            display: block;
            font-family: 'Playfair Display', serif;
        }
        
        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
            margin-top: 5px;
        }
        
        /* Program Cards */
        .program-section {
            margin-bottom: 60px;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: var(--primary-color);
            margin-bottom: 40px;
            text-align: center;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--secondary-color);
            border-radius: 2px;
        }
        
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .program-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            border: 1px solid #e0e6e0;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .program-image {
            height: 200px;
            overflow: hidden;
        }
        
        .program-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .program-card:hover .program-image img {
            transform: scale(1.05);
        }
        
        .program-content {
            padding: 30px;
        }
        
        .program-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        .program-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .program-desc {
            color: #666;
            margin-bottom: 20px;
        }
        
        .program-features {
            list-style: none;
            margin-bottom: 25px;
        }
        
        .program-features li {
            padding: 8px 0;
            padding-left: 30px;
            position: relative;
        }
        
        .program-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--secondary-color);
            font-weight: bold;
        }
        
        .program-btn {
            display: inline-block;
            background: linear-gradient(to right, var(--primary-color), var(--dark-green));
            color: white;
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-family: 'Source Serif Pro', serif;
        }
        
        .program-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(45, 90, 39, 0.3);
        }
        
        /* Timeline Section */
        .timeline-section {
            background: var(--light-green);
            border-radius: var(--border-radius);
            padding: 50px 40px;
            margin-bottom: 60px;
        }
        
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 40px auto 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: var(--secondary-color);
        }
        
        .timeline-item {
            display: flex;
            justify-content: flex-end;
            padding-right: 50%;
            position: relative;
            margin-bottom: 40px;
        }
        
        .timeline-item:nth-child(even) {
            justify-content: flex-start;
            padding-right: 0;
            padding-left: 50%;
        }
        
        .timeline-content {
            background: white;
            padding: 25px;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            width: 90%;
            position: relative;
        }
        
        .timeline-content::before {
            content: '';
            position: absolute;
            top: 20px;
            right: -10px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent transparent transparent white;
        }
        
        .timeline-item:nth-child(even) .timeline-content::before {
            left: -10px;
            right: auto;
            border-color: transparent white transparent transparent;
        }
        
        .timeline-dot {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: white;
            border: 4px solid var(--secondary-color);
            border-radius: 50%;
            z-index: 2;
        }
        
        .timeline-date {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        /* Registration Section */
        .registration-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-green) 100%);
            border-radius: var(--border-radius);
            padding: 60px 40px;
            color: white;
            text-align: center;
        }
        
        .registration-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .registration-form {
            max-width: 600px;
            margin: 40px auto 0;
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
        }
        
        .form-group {
            margin-bottom: 25px;
            text-align: left;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 14px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.9);
            font-family: 'Source Serif Pro', serif;
            font-size: 1rem;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .submit-btn {
            background: var(--accent-color);
            color: var(--dark-green);
            font-weight: 700;
            padding: 16px 40px;
            font-size: 1.1rem;
            margin-top: 20px;
        }
        
        .submit-btn:hover {
            background: white;
            color: var(--dark-green);
        }
        
        /* Success Stories */
        .stories-section {
            margin-bottom: 60px;
        }
        
        .stories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .story-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }
        
        .story-quote {
            font-size: 3rem;
            color: var(--secondary-color);
            opacity: 0.3;
            margin-bottom: 20px;
        }
        
        .story-text {
            font-style: italic;
            margin-bottom: 25px;
            color: #555;
        }
        
        .story-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--light-green);
        }
        
        .author-info h4 {
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section {
                padding: 40px 20px;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .highlight-stats {
                gap: 30px;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .program-grid {
                grid-template-columns: 1fr;
            }
            
            .timeline::before {
                left: 20px;
            }
            
            .timeline-item,
            .timeline-item:nth-child(even) {
                padding: 0;
                padding-left: 50px;
                justify-content: flex-start;
            }
            
            .timeline-dot {
                left: 10px;
            }
            
            .timeline-content::before {
                left: -10px !important;
                right: auto !important;
                border-color: transparent white transparent transparent !important;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .registration-form {
                padding: 30px 20px;
            }
        }
        
        @media (max-width: 480px) {
            .plant-program-container {
                padding: 20px 15px;
            }
            
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .highlight-stats {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    @include('header')
    <div class="plant-program-container">
        
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-content">
                <h1>Green India Plantation Program</h1>
                <p>Join our nationwide movement to plant 1 million trees across India. Together, we can restore ecosystems, combat climate change, and create a sustainable future for generations to come.</p>
                
                <div class="highlight-stats">
                    <div class="stat-item">
                        <span class="stat-number">500K+</span>
                        <span class="stat-label">Trees Planted</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">25K+</span>
                        <span class="stat-label">Volunteers</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">120+</span>
                        <span class="stat-label">Cities Covered</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">95%</span>
                        <span class="stat-label">Survival Rate</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Program Types Section -->
        <section class="program-section">
            <h2 class="section-title">Our Plantation Programs</h2>
            
            <div class="program-grid">
                <!-- Program 1 -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Urban Forest Program">
                    </div>
                    <div class="program-content">
                        <div class="program-icon">
                            <i class="fas fa-city"></i>
                        </div>
                        <h3 class="program-title">Urban Forest Program</h3>
                        <p class="program-desc">Transforming concrete jungles into green havens through strategic urban tree plantation.</p>
                        
                        <ul class="program-features">
                            <li>Park and roadside plantation</li>
                            <li>School and college campus greening</li>
                            <li>Residential society plantation drives</li>
                            <li>Maintenance for 3 years</li>
                        </ul>
                        
                        <button class="program-btn">Join This Program</button>
                    </div>
                </div>
                
                <!-- Program 2 -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Farmland Agroforestry">
                    </div>
                    <div class="program-content">
                        <div class="program-icon">
                            <i class="fas fa-tractor"></i>
                        </div>
                        <h3 class="program-title">Farmland Agroforestry</h3>
                        <p class="program-desc">Integrating trees into agricultural landscapes for sustainable farming and income generation.</p>
                        
                        <ul class="program-features">
                            <li>Fruit and timber tree plantation</li>
                            <li>Training for farmers</li>
                            <li>Market linkage support</li>
                            <li>Soil conservation techniques</li>
                        </ul>
                        
                        <button class="program-btn">Join This Program</button>
                    </div>
                </div>
                
                <!-- Program 3 -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Coastal Mangrove Restoration">
                    </div>
                    <div class="program-content">
                        <div class="program-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <h3 class="program-title">Coastal Mangrove Restoration</h3>
                        <p class="program-desc">Protecting coastlines and marine ecosystems through mangrove plantation and conservation.</p>
                        
                        <ul class="program-features">
                            <li>Mangrove sapling plantation</li>
                            <li>Coastal community involvement</li>
                            <li>Marine biodiversity protection</li>
                            <li>Tsunami and erosion control</li>
                        </ul>
                        
                        <button class="program-btn">Join This Program</button>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Program Timeline -->
        <section class="timeline-section">
            <h2 class="section-title">Program Timeline</h2>
            
            <div class="timeline">
                <!-- Timeline Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-calendar-alt"></i>
                            Phase 1: Preparation (Jan - Mar)
                        </div>
                        <h3>Site Selection & Planning</h3>
                        <p>Identification of plantation sites, soil testing, community mobilization, and resource planning.</p>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-calendar-alt"></i>
                            Phase 2: Implementation (Apr - Jun)
                        </div>
                        <h3>Mass Plantation Drives</h3>
                        <p>Large-scale plantation events, volunteer training, sapling distribution, and initial planting.</p>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-calendar-alt"></i>
                            Phase 3: Maintenance (Jul - Dec)
                        </div>
                        <h3>Care & Monitoring</h3>
                        <p>Regular watering, protection from pests, growth monitoring, and community engagement.</p>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-calendar-alt"></i>
                            Phase 4: Evaluation (Jan - Mar Next Year)
                        </div>
                        <h3>Impact Assessment</h3>
                        <p>Survival rate analysis, environmental impact measurement, and planning for next cycle.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Success Stories -->
        <section class="stories-section">
            <h2 class="section-title">Success Stories</h2>
            
            <div class="stories-grid">
                <!-- Story 1 -->
                <div class="story-card">
                    <div class="story-quote">"</div>
                    <p class="story-text">"Our village transformed from barren land to a lush green forest within 2 years. The Green India Society not only provided saplings but also trained us in maintenance techniques."</p>
                    <div class="story-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rajesh Kumar" class="author-avatar">
                        <div class="author-info">
                            <h4>Rajesh Kumar</h4>
                            <p>Farmer, Rajasthan</p>
                        </div>
                    </div>
                </div>
                
                <!-- Story 2 -->
                <div class="story-card">
                    <div class="story-quote">"</div>
                    <p class="story-text">"As a corporate volunteer, I've participated in 5 plantation drives. Seeing the trees grow and knowing I'm contributing to cleaner air gives me immense satisfaction."</p>
                    <div class="story-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Priya Sharma" class="author-avatar">
                        <div class="author-info">
                            <h4>Priya Sharma</h4>
                            <p>Corporate Volunteer, Mumbai</p>
                        </div>
                    </div>
                </div>
                
                <!-- Story 3 -->
                <div class="story-card">
                    <div class="story-quote">"</div>
                    <p class="story-text">"The mangrove plantation saved our coastal village from erosion. Now we have fish returning to our waters and protection from storms. Thank you Green India!"</p>
                    <div class="story-author">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Arun Nair" class="author-avatar">
                        <div class="author-info">
                            <h4>Arun Nair</h4>
                            <p>Fisherman, Kerala</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Registration Section -->
        <section class="registration-section">
            <h2>Join Our Next Plantation Drive</h2>
            <p>Be part of the change. Register for upcoming plantation programs in your city.</p>
            
            <div class="registration-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="Enter your email">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="city">Select City</label>
                        <select id="city">
                            <option value="">Choose your city</option>
                            <option value="delhi">Delhi</option>
                            <option value="mumbai">Mumbai</option>
                            <option value="bangalore">Bangalore</option>
                            <option value="chennai">Chennai</option>
                            <option value="kolkata">Kolkata</option>
                            <option value="hyderabad">Hyderabad</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="program">Select Program</label>
                    <select id="program">
                        <option value="">Choose a program</option>
                        <option value="urban">Urban Forest Program</option>
                        <option value="farmland">Farmland Agroforestry</option>
                        <option value="coastal">Coastal Mangrove Restoration</option>
                        <option value="all">All Programs</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Additional Information (Optional)</label>
                    <textarea id="message" rows="3" placeholder="Tell us about your interests or any specific requirements..."></textarea>
                </div>
                
                <button class="program-btn submit-btn">Register Now</button>
            </div>
        </section>
        
    </div>
    @include('footer')
       <a href="#main-content" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script>
                    const backToTopBtn = document.querySelector('.back-to-top');

        // Form Submission
        document.querySelector('.submit-btn').addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const city = document.getElementById('city').value;
                        const backToTopBtn = document.querySelector('.back-to-top');
const program = document.getElementById('program').value;
            
            // Simple validation
            if (!name || !email || !phone || !city || !program) {
                alert('Please fill in all required fields');
                return;
            }
            
            // Create success message
            const programNames = {
                'urban': 'Urban Forest Program',
                'farmland': 'Farmland Agroforestry',
                'coastal': 'Coastal Mangrove Restoration',
                'all': 'All Programs'
            };
            
            // Show success message
            alert(`Thank you ${name}! You have successfully registered for ${programNames[program]} in ${city}. We will contact you at ${email} or ${phone} with further details.`);
            
            // Reset form
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            document.getElementById('phone').value = '';
            document.getElementById('city').value = '';
            document.getElementById('program').value = '';
            document.getElementById('message').value = '';
        });
        
        // Program card buttons
        document.querySelectorAll('.program-btn:not(.submit-btn)').forEach(button => {
            button.addEventListener('click', function() {
                const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
                alert(`You selected: ${programTitle}\n\nPlease fill the registration form below to join this program.`);
                
                // Scroll to registration form
                document.querySelector('.registration-section').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
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
            
        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('.program-card, .timeline-item, .story-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>
