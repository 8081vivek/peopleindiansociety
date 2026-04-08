<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Encyclopedia - Types & Growth Patterns</title>
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
            --forest-green: #228B22;
            --bark-brown: #8B4513;
            --leaf-green: #32CD32;
            --growth-yellow: #FFD700;
            --soil-brown: #A0522D;
            --sky-blue: #87CEEB;
            --light-beige: #F5F5DC;
             --primary-green: #2e7d32;
            --light-green: #4caf50;
            --dark-green: #1b5e20;
            --light-bg: #f9f9f9;
            --card-bg: #ffffff;
            --text-dark: #333333;
            --text-light: #666666;
            --star-color: #ffc107;
            --border-color: #e0e0e0;
        }

        body {
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
             background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");

        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Main Header */
        .main-header {
            text-align: center;
            border-radius: 0 0 40px 40px;
            
        }

        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--secondary-green)!important;
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

       

        .header-title {
            font-size: 3.5rem;
            margin-bottom: 10px;
            color:var(--primary-green);
        }

        .header-subtitle {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto;
                        color:var(--primary-green);

            font-weight: 300;
        }

        .tree-icon-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 25px;
            flex-wrap: wrap;
        }

        .tree-icon {
            font-size: 2.5rem;
            color: white;
            background:var(--forest-green);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            margin-bottom:20px;
        }

        .tree-icon:hover {
            background:var(--light-green);
            transform: translateY(-5px);
            Cursor:pointer;       }

        /* Navigation Tabs */
        .tree-type-nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 3rem;
            padding: 20px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
           
        }

        .type-tab {
            padding: 15px 25px;
            background-color: var(--light-beige);
            border: 2px solid var(--forest-green);
            border-radius: 50px;
            font-weight: 600;
            color: var(--bark-brown);
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
        }

        .type-tab:hover, .type-tab.active {
            background-color: var(--forest-green);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(34, 139, 34, 0.3);
        }

        /* Tree Cards Grid */
        .tree-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 4rem;
        }

        .tree-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
            position: relative;
            border-top: 8px solid var(--forest-green);
        }

        .tree-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .tree-card.featured {
            border-top: 8px solid var(--growth-yellow);
            grid-column: span 2;
        }

        @media (max-width: 1100px) {
            .tree-card.featured {
                grid-column: span 1;
            }
        }

        .featured-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--growth-yellow);
            color: var(--bark-brown);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 700;
            z-index: 2;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .tree-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .tree-card:hover .tree-image {
            transform: scale(1.05);
        }

        .tree-content {
            padding: 25px;
        }

        .tree-scientific {
            font-style: italic;
            color: #666;
            margin-bottom: 5px;
            font-size: 0.95rem;
        }

        .tree-name {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--forest-green);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tree-type-badge {
            display: inline-block;
            padding: 5px 15px;
            background-color: var(--leaf-green);
            color: white;
            border-radius: 50px;
            font-size: 0.85rem;
            margin-bottom: 15px;
        }

        .tree-description {
            color: #666;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .tree-specs {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .spec-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #555;
        }

        .spec-item i {
            color: var(--forest-green);
        }

        /* Growth Visualization */
        .growth-section {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 4rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .section-title {
            font-size: 2.2rem;
            color: var(--forest-green);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--leaf-green);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .growth-stages {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin: 40px 0;
            position: relative;
            min-height: 300px;
        }

        .growth-stage {
            text-align: center;
            flex: 1;
            position: relative;
            z-index: 2;
        }
     
        .stage-icon {
            width: 70px;
            height: 70px;
            background-color: var(--forest-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin: 0 auto 15px;
            transition: all 0.3s;
        }

        .growth-stage:hover .stage-icon {
            background-color: var(--leaf-green);
            transform: scale(1.2);
        }

        .stage-title {
            font-weight: 700;
            color: var(--bark-brown);
            margin-bottom: 10px;
        }

        .stage-duration {
            font-size: 0.9rem;
            color: #777;
        }

        .growth-line {
            position: absolute;
            bottom: 35px;
            left: 10%;
            right: 10%;
            height: 5px;
            background: linear-gradient(to right, var(--soil-brown), var(--forest-green), var(--leaf-green));
            z-index: 1;
        }

        /* Tree Benefits */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .benefit-card {
            background-color: #f9f9f9;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s;
            border-left: 5px solid var(--leaf-green);
        }

        .benefit-card:hover {
            background-color: #f0f7f0;
            transform: translateY(-10px);
        }

        .benefit-icon {
            font-size: 2.5rem;
            color: var(--forest-green);
            margin-bottom: 15px;
        }

        .benefit-title {
            font-size: 1.3rem;
            color: var(--bark-brown);
            margin-bottom: 10px;
        }

        /* Comparison Table */
        .comparison-section {
            background-color: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 4rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            overflow-x: auto;
        }

        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .comparison-table th {
            background-color: var(--forest-green);
            color: white;
            padding: 15px;
            text-align: left;
        }

        .comparison-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .comparison-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .comparison-table tr:hover {
            background-color: #f0f7f0;
        }

        /* Footer */
        .page-footer {
            background-color: var(--bark-brown);
            color: white;
            padding: 3rem 0;
            border-radius: 40px 40px 0 0;
            margin-top: 4rem;
            text-align: center;
        }

        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-title {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--light-beige);
        }

        .footer-text {
            color: #ddd;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .plant-tree-btn {
            display: inline-block;
            background-color: var(--leaf-green);
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .plant-tree-btn:hover {
            background-color: var(--forest-green);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-title {
                font-size: 2.5rem;
            }
            
            .header-subtitle {
                font-size: 1.2rem;
            }
            
            .tree-type-nav {
                flex-direction: column;
                align-items: center;
            }
            
            .type-tab {
                width: 90%;
                justify-content: center;
            }
            
            .tree-grid {
                grid-template-columns: 1fr;
            }
            
            .growth-stages {
                flex-direction: column;
                align-items: center;
                gap: 40px;
            }
            
            .growth-line {
                display: none;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
        }

        /* Animation for growth stages */
        @keyframes grow {
            0% { transform: scale(0.8); opacity: 0.5; }
            100% { transform: scale(1); opacity: 1; }
        }

        .growth-stage {
            animation: grow 0.5s ease-out forwards;
        }

        .growth-stage:nth-child(1) { animation-delay: 0.1s; }
        .growth-stage:nth-child(2) { animation-delay: 0.3s; }
        .growth-stage:nth-child(3) { animation-delay: 0.5s; }
        .growth-stage:nth-child(4) { animation-delay: 0.7s; }
        .growth-stage:nth-child(5) { animation-delay: 0.9s; }
    </style>
</head>
<body>
    @include('header')
    <div class="container">
        <!-- Main Header -->
        <div class="main-header">
            <h1 class="header-title"><i class="fas fa-tree"></i> Tree Plantaion</h1>
            <p class="header-subtitle">Explore different tree types, growth patterns, and their importance in our ecosystem</p>
            <div class="tree-icon-container">
                <div class="tree-icon"><i class=" fas fa-seedling"></i></div>
                <div class="tree-icon"><i class=" fas fa-leaf"></i></div>
                <div class="tree-icon"><i class=" fas fa-mountain"></i></div>
                <div class="tree-icon"><i class=" fas fa-cloud-rain"></i></div>
                <div class="tree-icon"><i class=" fas fa-sun"></i></div>
            </div>
        </div>

        <!-- Tree Type Navigation -->
        <div class="tree-type-nav">
            <div class="type-tab active" data-type="all">
                <i class="fas fa-tree"></i> All Trees
            </div>
            <div class="type-tab" data-type="deciduous">
                <i class="fas fa-leaf"></i> Deciduous
            </div>
            <div class="type-tab" data-type="evergreen">
                <i class="fas fa-tree"></i> Evergreen
            </div>
            <div class="type-tab" data-type="fruit">
                <i class="fas fa-apple-alt"></i> Fruit Trees
            </div>
            <div class="type-tab" data-type="flowering">
                <i class="fas fa-spa"></i> Flowering
            </div>
            <div class="type-tab" data-type="indian">
                <i class="fas fa-globe-asia"></i> Indian Native
            </div>
        </div>

        <!-- Tree Cards Grid -->
        <div class="tree-grid" id="treeGrid">
            <!-- Neem Tree -->
            <div class="tree-card featured" data-type="indian evergreen">
                <div class="featured-badge">Most Important Indian Tree</div>
                <div class="tree-content">
                    <p class="tree-scientific">Azadirachta indica</p>
                    <h3 class="tree-name">Neem Tree <i class="fas fa-star" style="color: var(--growth-yellow);"></i></h3>
                    <span class="tree-type-badge">Evergreen • Medicinal • Indian Native</span>
                    <p class="tree-description">The Neem tree is known as "India's village pharmacy" due to its numerous medicinal properties. Every part of the tree has therapeutic value and is used in Ayurvedic medicine.</p>
                    <div class="tree-specs">
                        <div class="spec-item"><i class="fas fa-ruler-vertical"></i> Height: 15-20 meters</div>
                        <div class="spec-item"><i class="fas fa-expand-arrows-alt"></i> Spread: 10-15 meters</div>
                        <div class="spec-item"><i class="fas fa-temperature-high"></i> Climate: Tropical</div>
                        <div class="spec-item"><i class="fas fa-tint"></i> Water: Drought-resistant</div>
                        <div class="spec-item"><i class="fas fa-clock"></i> Lifespan: 150-200 years</div>
                    </div>
                </div>
            </div>

            <!-- Banyan Tree -->
            <div class="tree-card" data-type="indian evergreen">
                <div class="tree-content">
                    <p class="tree-scientific">Ficus benghalensis</p>
                    <h3 class="tree-name">Banyan Tree <i class="fas fa-shield-alt" style="color: var(--forest-green);"></i></h3>
                    <span class="tree-type-badge">Evergreen • National Tree of India</span>
                    <p class="tree-description">Known for its aerial roots that grow into thick woody trunks, the Banyan is considered sacred in India. It's one of the largest trees in the world by canopy coverage.</p>
                    <div class="tree-specs">
                        <div class="spec-item"><i class="fas fa-ruler-vertical"></i> Height: 20-30 meters</div>
                        <div class="spec-item"><i class="fas fa-expand-arrows-alt"></i> Canopy: Up to 200 meters wide</div>
                        <div class="spec-item"><i class="fas fa-temperature-high"></i> Climate: Tropical/Subtropical</div>
                    </div>
                </div>
            </div>

            <!-- Mango Tree -->
            <div class="tree-card" data-type="indian fruit deciduous">
                <img src="https://images.unsplash.com/photo-1592921870789-04563d55041c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Mango Tree" class="tree-image">
                <div class="tree-content">
                    <p class="tree-scientific">Mangifera indica</p>
                    <h3 class="tree-name">Mango Tree <i class="fas fa-apple-alt" style="color: var(--growth-yellow);"></i></h3>
                    <span class="tree-type-badge">Fruit Tree • Deciduous • Indian Native</span>
                    <p class="tree-description">The mango tree is the national fruit tree of India. It produces delicious fruits and provides excellent shade. Different varieties fruit at different times of the year.</p>
                    <div class="tree-specs">
                        <div class="spec-item"><i class="fas fa-ruler-vertical"></i> Height: 10-15 meters</div>
                        <div class="spec-item"><i class="fas fa-expand-arrows-alt"></i> Spread: 10-12 meters</div>
                        <div class="spec-item"><i class="fas fa-temperature-high"></i> Climate: Tropical</div>
                        <div class="spec-item"><i class="fas fa-hourglass-half"></i> Fruit bearing: 3-5 years</div>
                    </div>
                </div>
            </div>

            <!-- Gulmohar -->
            <div class="tree-card" data-type="flowering deciduous">
                <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gulmohar Tree" class="tree-image">
                <div class="tree-content">
                    <p class="tree-scientific">Delonix regia</p>
                    <h3 class="tree-name">Gulmohar <i class="fas fa-spa" style="color: #ff4500;"></i></h3>
                    <span class="tree-type-badge">Flowering • Deciduous • Ornamental</span>
                    <p class="tree-description">Also known as the Flame Tree, Gulmohar produces stunning red-orange flowers in summer. It's widely planted as an ornamental tree across India for its vibrant blooms.</p>
                    <div class="tree-specs">
                        <div class="spec-item"><i class="fas fa-ruler-vertical"></i> Height: 5-12 meters</div>
                        <div class="spec-item"><i class="fas fa-expand-arrows-alt"></i> Spread: 8-10 meters</div>
                        <div class="spec-item"><i class="fas fa-temperature-high"></i> Climate: Tropical/Subtropical</div>
                        <div class="spec-item"><i class="fas fa-palette"></i> Flower color: Red/Orange</div>
                    </div>
                </div>
            </div>

            <!-- Teak -->
            <div class="tree-card" data-type="indian deciduous">
                <img src="https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Teak Tree" class="tree-image">
                <div class="tree-content">
                    <p class="tree-scientific">Tectona grandis</p>
                    <h3 class="tree-name">Teak <i class="fas fa-cube" style="color: var(--bark-brown);"></i></h3>
                    <span class="tree-type-badge">Deciduous • Timber • Indian Native</span>
                    <p class="tree-description">Teak is one of the world's most valuable timber trees, known for its durability, water resistance, and beautiful grain. It's extensively cultivated in plantations across India.</p>
                    <div class="tree-specs">
                        <div class="spec-item"><i class="fas fa-ruler-vertical"></i> Height: 30-40 meters</div>
                        <div class="spec-item"><i class="fas fa-expand-arrows-alt"></i> Trunk: 1-1.5 meters diameter</div>
                        <div class="spec-item"><i class="fas fa-temperature-high"></i> Climate: Tropical</div>
                        <div class="spec-item"><i class="fas fa-clock"></i> Maturity: 20-25 years</div>
                    </div>
                </div>
            </div>

            <!-- Coconut -->
            <div class="tree-card" data-type="indian fruit evergreen">
                <img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Coconut Tree" class="tree-image">
                <div class="tree-content">
                    <p class="tree-scientific">Cocos nucifera</p>
                    <h3 class="tree-name">Coconut Palm <i class="fas fa-umbrella-beach" style="color: var(--growth-yellow);"></i></h3>
                    <span class="tree-type-badge">Palm • Fruit • Evergreen • Coastal</span>
                    <p class="tree-description">The coconut tree is called the "Tree of Life" in tropical regions. Every part of the tree is useful - from the fruits for food and water to leaves for thatching and trunk for timber.</p>
                    <div class="tree-specs">
                        <div class="spec-item"><i class="fas fa-ruler-vertical"></i> Height: 20-30 meters</div>
                        <div class="spec-item"><i class="fas fa-expand-arrows-alt"></i> Frond length: 4-6 meters</div>
                        <div class="spec-item"><i class="fas fa-temperature-high"></i> Climate: Coastal Tropical</div>
                        <div class="spec-item"><i class="fas fa-tint"></i> Salt tolerance: Very High</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tree Growth Visualization -->
        <div class="growth-section">
            <h2 class="section-title"><i class="fas fa-chart-line"></i> Tree Growth Stages</h2>
            <p>Understanding how trees grow from seed to maturity helps in proper plantation and care. Below are the key growth stages of a typical deciduous tree:</p>
            
            <div class="growth-stages">
                
                <div class="growth-stage">
                    <div class="stage-icon"><i class="fas fa-seedling"></i></div>
                    <h4 class="stage-title">Germination</h4>
                    <p class="stage-duration">Week 1-4</p>
                    <p>Seed absorbs water, breaks dormancy, and sprouts root and shoot.</p>
                </div>
                
                <div class="growth-stage">
                    <div class="stage-icon"><i class="fas fa-leaf"></i></div>
                    <h4 class="stage-title">Seedling</h4>
                    <p class="stage-duration">Month 1-6</p>
                    <p>First true leaves develop. Plant establishes root system.</p>
                </div>
                
                <div class="growth-stage">
                    <div class="stage-icon"><i class="fas fa-tree"></i></div>
                    <h4 class="stage-title">Sapling</h4>
                    <p class="stage-duration">Year 1-3</p>
                    <p>Rapid vertical growth. Develops stronger trunk and branches.</p>
                </div>
                
                <div class="growth-stage">
                    <div class="stage-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                    <h4 class="stage-title">Maturation</h4>
                    <p class="stage-duration">Year 3-10</p>
                    <p>Focus shifts to horizontal growth and canopy development.</p>
                </div>
                
                <div class="growth-stage">
                    <div class="stage-icon"><i class="fas fa-star"></i></div>
                    <h4 class="stage-title">Maturity</h4>
                    <p class="stage-duration">Year 10+</p>
                    <p>Full size achieved. Begins flowering/fruiting regularly.</p>
                </div>
            </div>
            
            <h3 style="color: var(--forest-green); margin-top: 40px;">Factors Affecting Tree Growth</h3>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-sun"></i></div>
                    <h4 class="benefit-title">Sunlight</h4>
                    <p>Most trees need 6+ hours of direct sunlight daily for optimal growth</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-tint"></i></div>
                    <h4 class="benefit-title">Water</h4>
                    <p>Regular watering crucial in early years. Mature trees need deep, infrequent watering</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-layer-group"></i></div>
                    <h4 class="benefit-title">Soil Quality</h4>
                    <p>Well-draining soil with proper nutrients and pH balance is essential</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon"><i class="fas fa-temperature-high"></i></div>
                    <h4 class="benefit-title">Climate</h4>
                    <p>Temperature, humidity, and seasonal changes significantly impact growth rates</p>
                </div>
            </div>
        </div>

        <!-- Tree Comparison -->
        <div class="comparison-section">
            <h2 class="section-title"><i class="fas fa-balance-scale"></i> Tree Comparison</h2>
            <p>Compare different tree types to understand which might be suitable for your needs:</p>
            
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Tree Type</th>
                        <th>Growth Rate</th>
                        <th>Water Needs</th>
                        <th>Maintenance</th>
                        <th>Best For</th>
                        <th>Special Features</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Neem</strong></td>
                        <td>Fast</td>
                        <td>Low</td>
                        <td>Low</td>
                        <td>Medicinal use, Shade</td>
                        <td>Drought resistant, Pest repellent</td>
                    </tr>
                    <tr>
                        <td><strong>Banyan</strong></td>
                        <td>Slow-Medium</td>
                        <td>Medium</td>
                        <td>Medium</td>
                        <td>Large spaces, Parks</td>
                        <td>Huge canopy, Long lifespan</td>
                    </tr>
                    <tr>
                        <td><strong>Mango</strong></td>
                        <td>Medium</td>
                        <td>Medium</td>
                        <td>Medium-High</td>
                        <td>Fruit, Gardens</td>
                        <td>Seasonal fruit, Good shade</td>
                    </tr>
                    <tr>
                        <td><strong>Gulmohar</strong></td>
                        <td>Fast</td>
                        <td>Low-Medium</td>
                        <td>Low</td>
                        <td>Ornamental, Streets</td>
                        <td>Beautiful flowers, Fast growth</td>
                    </tr>
                    <tr>
                        <td><strong>Teak</strong></td>
                        <td>Slow</td>
                        <td>Medium</td>
                        <td>Low</td>
                        <td>Timber, Large areas</td>
                        <td>Valuable wood, Long-term</td>
                    </tr>
                    <tr>
                        <td><strong>Coconut</strong></td>
                        <td>Slow</td>
                        <td>High</td>
                        <td>Medium</td>
                        <td>Coastal areas, Fruit</td>
                        <td>Multiple uses, Salt tolerant</td>
                    </tr>
                </tbody>
            </table>
        </div>

       @include('treePlantingTimeLine')
    </div>
@include('footer')
   <a href="#main-content" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <script>
                    const backToTopBtn = document.querySelector('.back-to-top');
// Tree type filtering
        document.querySelectorAll('.type-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Update active tab
                document.querySelectorAll('.type-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                const type = this.getAttribute('data-type');
                const treeCards = document.querySelectorAll('.tree-card');
                
                // Show/hide trees based on selected type
                treeCards.forEach(card => {
                    if (type === 'all' || card.getAttribute('data-type').includes(type)) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
                
                // Show message if no trees match
                setTimeout(() => {
                    const visibleTrees = document.querySelectorAll('.tree-card[style*="display: block"]');
                    if (visibleTrees.length === 0 && type !== 'all') {
                        alert(`No ${type} trees found in the current selection. Try another category!`);
                    }
                }, 350);
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
            
        // Tree card click interaction
        document.querySelectorAll('.tree-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (!e.target.closest('a') && !e.target.closest('button')) {
                    const treeName = this.querySelector('.tree-name').textContent;
                    const treeSciName = this.querySelector('.tree-scientific').textContent;
                    
                    // Create a modal-like alert with tree info
                    const treeType = this.getAttribute('data-type');
                    alert(`Selected: ${treeName} (${treeSciName})\n\nType: ${treeType.replace(/indian|deciduous|evergreen|fruit|flowering/g, match => {
                        const types = {
                            'indian': 'Indian Native',
                            'deciduous': 'Deciduous',
                            'evergreen': 'Evergreen',
                            'fruit': 'Fruit Tree',
                            'flowering': 'Flowering Tree'
                        };
                        return types[match] || match;
                    }).replace(/ • /g, ', ')}\n\nClick the "Learn More" button (to be implemented) for detailed information.`);
                }
            });
        });
        
        // Growth stage hover effect
        document.querySelectorAll('.growth-stage').forEach(stage => {
            stage.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.stage-icon');
                icon.style.transform = 'scale(1.3)';
                icon.style.backgroundColor = 'var(--leaf-green)';
            });
            
            stage.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.stage-icon');
                icon.style.transform = 'scale(1)';
                icon.style.backgroundColor = 'var(--forest-green)';
            });
        });
        
        // Plant tree button
        document.querySelector('.plant-tree-btn').addEventListener('click', function(e) {
            e.preventDefault();
            alert("Tree Planting Guide:\n\n1. Choose native species suitable for your area\n2. Plant during monsoon season for best results\n3. Dig a hole twice as wide as the root ball\n4. Water regularly for first 2 years\n5. Add mulch to retain moisture\n6. Protect from animals and harsh weather\n\nPlant a tree today for a greener tomorrow!");
        });
        
        // Animate growth stages on scroll
        const observerOptions = {
            threshold: 0.5
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.growth-stage').forEach(stage => {
            observer.observe(stage);
        });
    </script>
</body>
</html>