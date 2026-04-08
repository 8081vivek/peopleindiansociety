<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the rich botanical heritage of India through our gallery of medicinal, sacred, and cultural plants.">
    <title>Plants of Indian Society | Botanical Gallery</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #1b5e20;
            --secondary-green: #2e7d32;
            --accent-green: #4caf50;
            --light-green: #e8f5e9;
            --lighter-green: #f0f8f0;
            --text-dark: #333;
            --text-medium: #555;
            --text-light: #777;
            --white: #fff;
            --shadow-light: 0 4px 8px rgba(0,0,0,0.05);
            --shadow-medium: 0 5px 15px rgba(0,0,0,0.08);
            --shadow-heavy: 0 15px 30px rgba(0,0,0,0.15);
            --border-radius: 10px;
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: serif;
        }
        
        body {
            background-color: var(--lighter-green);
            color: var(--text-dark);
            line-height: 1.6;
            min-height: 100vh;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .skip-to-content {
            position: absolute;
            top: -40px;
            left: 0;
            background: var(--primary-green);
            color: white;
            padding: 8px 16px;
            z-index: 100;
            text-decoration: none;
            border-radius: 0 0 4px 0;
            transition: top 0.3s;
        }
        
        .skip-to-content:focus {
            top: 0;
        }
        
        main {
            padding: 20px 0;
        }
        
        .page-title {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--accent-green);
        }
        
        .page-title h1 {
            color: var(--primary-green);
            font-size: 2.8rem;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        }
        
        .page-title p {
            color: var(--secondary-green);
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .gallery-stats {
            display: flex;
            justify-content: space-around;
            background-color: var(--white);
            padding: 20px;
            border-radius: var(--border-radius);
            margin-bottom: 40px;
            box-shadow: var(--shadow-light);
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .stat-item {
            text-align: center;
            padding: 10px;
            flex: 1;
            min-width: 150px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-green);
        }
        
        .stat-label {
            color: var(--secondary-green);
            font-size: 1rem;
        }
        
        .gallery-controls {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
            padding: 15px;
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-light);
        }
        
        .filter-btn {
            padding: 10px 20px;
            background-color: var(--light-green);
            border: 2px solid transparent;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            color: var(--primary-green);
            display: flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
        }
        
        .filter-btn:hover, .filter-btn:focus {
            background-color: var(--accent-green);
            color: var(--white);
            transform: translateY(-2px);
            outline: none;
        }
        
        .filter-btn.active {
            background-color: var(--secondary-green);
            color: white;
            border-color: var(--primary-green);
        }
        
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }
        
        .gallery-item {
            background-color: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-medium);
            transition: var(--transition);
            position: relative;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s forwards;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
        }
        
        .gallery-img-container {
            width: 100%;
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }
        
        .gallery-content {
            padding: 20px;
        }
        
        .gallery-content h3 {
            color: var(--primary-green);
            margin-bottom: 10px;
            font-size: 1.4rem;
        }
        
        .gallery-content p {
            color: var(--text-medium);
            font-size: 0.95rem;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 10px;
        }
        
        .plant-type-tag {
            display: inline-block;
            background-color: var(--light-green);
            color: var(--primary-green);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .usage-tag {
            display: inline-block;
            background-color: #f1f8e9;
            color: #33691e;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .gallery-info {
            background-color: var(--white);
            padding: 30px;
            border-radius: var(--border-radius);
            margin-bottom: 30px;
            box-shadow: var(--shadow-light);
        }
        
        .gallery-info h2 {
            color: var(--primary-green);
            margin-bottom: 15px;
            font-size: 1.8rem;
        }
        
        .gallery-info p {
            margin-bottom: 15px;
            color: var(--text-medium);
        }
        
        .highlight {
            background-color: #f1f8e9;
            padding: 20px;
            border-left: 4px solid var(--accent-green);
            margin-top: 20px;
            border-radius: 0 5px 5px 0;
        }
        
        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 20px;
            display: none;
        }
        
        .empty-state i {
            font-size: 3rem;
            color: var(--text-light);
            margin-bottom: 20px;
        }
        
        .empty-state h3 {
            color: var(--primary-green);
            margin-bottom: 10px;
        }
        
        .empty-state p {
            color: var(--text-medium);
            max-width: 500px;
            margin: 0 auto;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--secondary-green);
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
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .gallery-container {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 20px;
            }
            
            .page-title h1 {
                font-size: 2.4rem;
            }
            
            .gallery-stats {
                justify-content: center;
            }
            
            .stat-item {
                min-width: 170px;
            }
        }
        
        @media (max-width: 768px) {
            .gallery-container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .page-title h1 {
                font-size: 2rem;
            }
            
            .page-title p {
                font-size: 1.1rem;
            }
            
            .gallery-controls {
                gap: 8px;
                padding: 12px;
            }
            
            .filter-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .stat-label {
                font-size: 0.9rem;
            }
            
            .gallery-info {
                padding: 20px;
            }
            
            .back-to-top {
                bottom: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
                font-size: 1.3rem;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding: 0 15px;
            }
            
            .gallery-container {
                grid-template-columns: 1fr;
            }
            
            .page-title h1 {
                font-size: 1.8rem;
            }
            
            .page-title p {
                font-size: 1rem;
            }
            
            .gallery-stats {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .stat-item {
                min-width: 100%;
                padding: 15px;
            }
            
            .stat-number {
                font-size: 2.2rem;
            }
            
            .gallery-controls {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-btn {
                justify-content: center;
            }
            
            .gallery-img-container {
                height: 220px;
            }
        }
        
        @media (max-width: 400px) {
            .page-title h1 {
                font-size: 1.6rem;
            }
            
            .gallery-img-container {
                height: 200px;
            }
            
            .gallery-content h3 {
                font-size: 1.2rem;
            }
        }
        
        /* Animation delays for gallery items */
        .gallery-item:nth-child(1) { animation-delay: 0.1s; }
        .gallery-item:nth-child(2) { animation-delay: 0.2s; }
        .gallery-item:nth-child(3) { animation-delay: 0.3s; }
        .gallery-item:nth-child(4) { animation-delay: 0.4s; }
        .gallery-item:nth-child(5) { animation-delay: 0.5s; }
        .gallery-item:nth-child(6) { animation-delay: 0.6s; }
        .gallery-item:nth-child(7) { animation-delay: 0.7s; }
        .gallery-item:nth-child(8) { animation-delay: 0.8s; }
        .gallery-item:nth-child(9) { animation-delay: 0.9s; }
        .gallery-item:nth-child(10) { animation-delay: 1.0s; }
        .gallery-item:nth-child(11) { animation-delay: 1.1s; }
        .gallery-item:nth-child(12) { animation-delay: 1.2s; }
        
        /* Reduced motion preference */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            
            .gallery-item {
                animation: none !important;
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>
</head>
<body>
    @include('header')
    <!-- Skip to Content Link -->
    <a href="#main-content" class="skip-to-content" tabindex="0">Skip to main content</a>
    
    <main id="main-content">
        <div class="container">
            <section class="gallery">
                <!-- Page Title -->
                <div class="page-title">
                    <h1>Plants of Indian Society</h1>
                    <p>Explore the rich botanical heritage of India through our gallery of medicinal, sacred, and cultural plants.</p>
                </div>
                
                <!-- Gallery Stats -->
                <div class="gallery-stats">
                    <div class="stat-item">
                        <div class="stat-number" aria-label="18,000 plant species">18,000</div>
                        <div class="stat-label">Plant Species</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" aria-label="Over 7,000 medicinal plants">7,000+</div>
                        <div class="stat-label">Medicinal Plants</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" aria-label="5,000 years of use">5,000</div>
                        <div class="stat-label">Years of Use</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" aria-label="45% of global medicinal plants">45%</div>
                        <div class="stat-label">Global Medicinal Plants</div>
                    </div>
                </div>
                
                <!-- Gallery Controls -->
                <div class="gallery-controls" role="toolbar" aria-label="Plant category filters">
                    <button class="filter-btn active" data-filter="all" aria-pressed="true">
                        <i class="fas fa-seedling"></i> All Plants
                    </button>
                    <button class="filter-btn" data-filter="medicinal" aria-pressed="false">
                        <i class="fas fa-leaf"></i> Medicinal
                    </button>
                    <button class="filter-btn" data-filter="sacred" aria-pressed="false">
                        <i class="fas fa-pray"></i> Sacred
                    </button>
                    <button class="filter-btn" data-filter="spices" aria-pressed="false">
                        <i class="fas fa-pepper-hot"></i> Spices
                    </button>
                    <button class="filter-btn" data-filter="trees" aria-pressed="false">
                        <i class="fas fa-tree"></i> Trees
                    </button>
                    <button class="filter-btn" data-filter="flowers" aria-pressed="false">
                        <i class="fas fa-spa"></i> Flowers
                    </button>
                    <button class="filter-btn" data-filter="food" aria-pressed="false">
                        <i class="fas fa-utensils"></i> Food Plants
                    </button>
                </div>
                
                <!-- Empty State (Hidden by default) -->
                <div class="empty-state" id="empty-state">
                    <i class="fas fa-seedling"></i>
                    <h3>No plants found</h3>
                    <p>Try selecting a different category or check back later for more plant additions to our gallery.</p>
                    <button class="filter-btn" data-filter="all" style="margin-top: 20px;">
                        <i class="fas fa-redo"></i> Show All Plants
                    </button>
                </div>
                
                <!-- Gallery Container -->
                <div class="gallery-container" role="list" aria-label="Gallery of Indian plants">
                    <!-- Gallery Item 1 -->
                    <div class="gallery-item" data-category="sacred trees" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://th.bing.com/th/id/OIP.XTvcu7Y3g7uc6tGX1tx1dgHaEJ?w=316&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" 
                                 alt="Sacred Peepal Tree (Ficus religiosa) - a large tree with heart-shaped leaves, considered sacred in Hinduism, Buddhism, and Jainism" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Sacred Peepal Tree</h3>
                            <p>The Peepal tree (Ficus religiosa) is considered sacred in Hinduism, Buddhism, and Jainism. It's often found near temples and is worshipped for its spiritual significance.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Sacred Tree</span>
                                <span class="usage-tag">Spiritual</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 2 -->
                    <div class="gallery-item" data-category="medicinal" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://cdn.britannica.com/87/207887-050-F48CB55D/basil.jpg" 
                                 alt="Tulsi plant (Holy Basil) - small green leaves with medicinal properties, known as the Queen of Herbs in Ayurveda" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Tulsi (Holy Basil)</h3>
                            <p>Known as the "Queen of Herbs" in Ayurveda, Tulsi is revered for its medicinal properties. It's used to treat respiratory issues, fever, and stress, and is worshipped in many Indian households.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Medicinal Herb</span>
                                <span class="usage-tag">Ayurvedic</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 3 -->
                    <div class="gallery-item" data-category="spices" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" 
                                 alt="Turmeric plant (Haldi) - golden rhizomes used as spice and medicine with anti-inflammatory properties" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Rice</h3>
                            <p>A staple grain in Indian cuisine, rice is also used in Ayurvedic treatments for its nutritional and healing properties. It is essential for maintaining health and energy in traditional Indian diets.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Cereal</span>
                                <span class="usage-tag">Nutritious & Medicinal</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 4 -->
                    <div class="gallery-item" data-category="trees" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://th.bing.com/th/id/OIP.1KnxUvn4Rku-OQN_Bd-vGwHaEK?w=256&h=150&c=6&o=7&dpr=1.3&pid=1.7&rm=3" 
                                 alt="Neem tree - called the village pharmacy in India, with numerous medicinal uses in Ayurvedic treatments" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Neem Tree</h3>
                            <p>Called "the village pharmacy" in India, Neem has numerous medicinal uses. Every part of the tree - leaves, bark, seeds - is used in Ayurvedic treatments for skin conditions, diabetes, and more.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Medicinal Tree</span>
                                <span class="usage-tag">Traditional Medicine</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 5 -->
                    <div class="gallery-item" data-category="flowers" role="listitem">
                        <div class="gallery-img-container">
                            <img src="data:image/webp;base64,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" 
                                 alt="Sacred Lotus - India's national flower, symbolizing purity and beauty in Hinduism and Buddhism" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Sacred Lotus</h3>
                            <p>India's national flower, the Lotus holds profound spiritual significance in Hinduism and Buddhism. It symbolizes purity, beauty, and divine birth, growing untouched by the muddy water it blooms in.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Aquatic Flower</span>
                                <span class="usage-tag">Spiritual Symbol</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 6 -->
                    <div class="gallery-item" data-category="spices" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://spicehuttfoods.com/wp-content/uploads/2020/08/cardamom.jpg" 
                                 alt="Cardamom plant (Elaichi) - known as the Queen of Spices, native to the Western Ghats of India" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Cardamom (Elaichi)</h3>
                            <p>Known as the "Queen of Spices," cardamom is native to the Western Ghats of India. It's used extensively in Indian sweets, teas, and savory dishes, and has digestive benefits.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Spice</span>
                                <span class="usage-tag">Culinary & Medicinal</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 7 -->
                    <div class="gallery-item" data-category="food" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://www.thespruce.com/thmb/MRITIIYa_5vaBB1fwPHnD45Lwc4=/4338x2893/filters:no_upscale():max_bytes(150000):strip_icc()/grow-mango-seeds-1902625-05-73d31c720a0947cea796163d4d113869.jpg" 
                                 alt="Mango tree - India's national fruit, deeply embedded in Indian culture and mentioned in ancient scriptures" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Mango Tree</h3>
                            <p>India's national fruit, the mango is called the "king of fruits." The mango tree is deeply embedded in Indian culture, mentioned in ancient scriptures, and its leaves are used in religious ceremonies.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Fruit Tree</span>
                                <span class="usage-tag">Cultural Significance</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 8 -->
                    <div class="gallery-item" data-category="medicinal" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" 
                                 alt="Ashwagandha plant - a powerful adaptogen in Ayurvedic medicine used to reduce stress and boost energy" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Ashwagandha</h3>
                            <p>A powerful adaptogen in Ayurvedic medicine, Ashwagandha is used to reduce stress, boost energy, and improve concentration. Its name means "smell of a horse," referring to its unique odor.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Medicinal Herb</span>
                                <span class="usage-tag">Adaptogen</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 9 -->
                    <div class="gallery-item" data-category="sacred" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://th.bing.com/th/id/OIP.1Abskj9U7AgXtuhN07Hs7QHaE8?w=236&h=150&c=6&o=7&dpr=1.3&pid=1.7&rm=3" 
                                 alt="Banyan tree - India's national tree, considered sacred and representing eternal life" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Banyan Tree</h3>
                            <p>India's national tree, the Banyan is considered sacred and represents eternal life due to its ever-expanding branches. It's often the center of village life and community gatherings.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Sacred Tree</span>
                                <span class="usage-tag">National Tree</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 10 -->
                    <div class="gallery-item" data-category="food" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" 
                                 alt="Rice paddy fields - the staple food for most Indians, shaping the rural landscape" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Rice Paddy</h3>
                            <p>The staple food for most Indians, rice is not just a crop but a way of life. Rice cultivation shapes the rural landscape and is central to festivals, rituals, and daily meals across India.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Staple Crop</span>
                                <span class="usage-tag">Food Security</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 11 -->
                    <div class="gallery-item" data-category="flowers" role="listitem">
                        <div class="gallery-img-container">
                            <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=862&q=80" 
                                 alt="Marigold flowers (Genda) - bright orange flowers ubiquitous in Indian festivals and religious ceremonies" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Marigold (Genda)</h3>
                            <p>Bright orange marigolds are ubiquitous in Indian festivals, weddings, and religious ceremonies. They're used for decoration, worship, and even have medicinal properties in traditional remedies.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Festival Flower</span>
                                <span class="usage-tag">Religious & Decorative</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 12 -->
                    <div class="gallery-item" data-category="medicinal" role="listitem">
                        <div class="gallery-img-container">
                            <img src="data:image/webp;base64,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" 
                                 alt="Aloe vera plant - widely grown in Indian homes for skin care, wound healing, and digestive health" 
                                 class="gallery-img" loading="lazy">
                        </div>
                        <div class="gallery-content">
                            <h3>Aloe Vera</h3>
                            <p>Widely grown in Indian homes for its medicinal properties, Aloe Vera is used for skin care, wound healing, and digestive health. It's a common ingredient in Ayurvedic and cosmetic products.</p>
                            <div class="tags-container">
                                <span class="plant-type-tag">Medicinal Succulent</span>
                                <span class="usage-tag">Skin & Health</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gallery Information -->
                <div class="gallery-info">
                    <h2>Plants in Indian Society & Culture</h2>
                    <p>Plants are deeply intertwined with Indian society, culture, and spirituality. India is one of the world's 17 mega-diverse countries, home to about 18,000 species of flowering plants, of which approximately 7,000 have documented medicinal uses in traditional systems like Ayurveda, Siddha, and Unani.</p>
                    
                    <p>From sacred trees like the Peepal and Banyan that are worshipped, to medicinal herbs like Tulsi and Neem that form the basis of traditional healthcare, plants permeate every aspect of Indian life. They feature prominently in religious rituals, festivals, traditional medicine, cuisine, art, and even economic activities.</p>
                    
                    <div class="highlight">
                        <p><strong>Botanical Wisdom:</strong> India's ancient texts like the Vedas, Ayurvedic scriptures, and folk traditions contain extensive knowledge about plants and their uses, representing one of the oldest continuous traditions of plant-based wisdom in human history.</p>
                    </div>
                    
                    <p>The gallery above showcases just a fraction of India's botanical diversity. Each plant tells a story of cultural significance, traditional knowledge, and ecological importance that has been preserved and passed down through generations in Indian society.</p>
                </div>
            </section>
        </div>
    </main>
    
    <!-- Back to Top Button -->
    <a href="#main-content" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </a>
    @include('footer')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');
            const emptyState = document.getElementById('empty-state');
            const backToTopBtn = document.querySelector('.back-to-top');
            
            // Filter functionality
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-pressed', 'false');
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    this.setAttribute('aria-pressed', 'true');
                    
                    const filterValue = this.getAttribute('data-filter');
                    let visibleItems = 0;
                    
                    // Show/hide gallery items based on filter
                    galleryItems.forEach(item => {
                        const categories = item.getAttribute('data-category');
                        if (filterValue === 'all' || categories.includes(filterValue)) {
                            item.style.display = 'block';
                            visibleItems++;
                            // Add fade in effect
                            item.style.opacity = '0';
                            setTimeout(() => {
                                item.style.transition = 'opacity 0.5s ease';
                                item.style.opacity = '1';
                            }, 10);
                        } else {
                            item.style.display = 'none';
                        }
                    });
                    
                    // Show empty state if no items match the filter
                    if (visibleItems === 0) {
                        emptyState.style.display = 'block';
                    } else {
                        emptyState.style.display = 'none';
                    }
                    
                    // Scroll to gallery after filtering
                    document.querySelector('.gallery-container').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
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
            
            // Stats counter animation
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const originalText = stat.textContent;
                stat.textContent = '0';
                
                const updateCounter = () => {
                    const target = originalText.replace(',', '').replace('+', '').replace('%', '');
                    const count = +target;
                    const increment = count / 50;
                    let current = 0;
                    
                    const timer = setInterval(() => {
                        current += increment;
                        if (current > count) {
                            stat.textContent = originalText;
                            clearInterval(timer);
                        } else {
                            if (originalText.includes('+')) {
                                stat.textContent = Math.floor(current) + '+';
                            } else if (originalText.includes('%')) {
                                stat.textContent = Math.floor(current) + '%';
                            } else {
                                stat.textContent = Math.floor(current).toLocaleString();
                            }
                        }
                    }, 30);
                };
                
                // Start counter when element is in viewport
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(stat);
            });
            
            // Image error handling
            const images = document.querySelectorAll('.gallery-img');
            images.forEach(img => {
                img.addEventListener('error', function() {
                    this.alt = 'Image failed to load';
                    this.style.backgroundColor = '#f5f5f5';
                    this.style.padding = '20px';
                    this.parentElement.innerHTML = `
                        <div style="height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#f5f5f5; color:#666;">
                            <i class="fas fa-image" style="font-size:3rem; margin-bottom:10px;"></i>
                            <p>Plant Image</p>
                        </div>
                    `;
                });
            });
            
            // Accessibility improvements
            galleryItems.forEach(item => {
                item.setAttribute('tabindex', '0');
                item.addEventListener('focus', function() {
                    this.style.outline = '2px solid var(--accent-green)';
                    this.style.outlineOffset = '2px';
                });
                
                item.addEventListener('blur', function() {
                    this.style.outline = 'none';
                });
            });
            
            // Reduce motion preference
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
            if (reduceMotion.matches) {
                document.querySelectorAll('.gallery-item').forEach(item => {
                    item.style.animation = 'none';
                    item.style.opacity = '1';
                    item.style.transform = 'none';
                });
            }
        });
    </script>
</body>
</html>