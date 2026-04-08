<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People of Indian Society - Tree Planting Timeline</title>
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
            --soil-brown:#1b5e20;
            --leaf-green: #228B22;
            --water-blue: #2e7d32;
            --sun-yellow: #FFD700;
            --seed-brown: #2e7d32;
            --light-beige: #F5F5DC;
          
        }

        body {
                        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
           
        }

        .planting-timeline-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .timeline-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 3px solid var(--leaf-green);
        }

        .timeline-title {
            font-size: 2.8rem;
            color: var(--soil-brown);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .timeline-subtitle {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Timeline Layout */
        .timeline {
            position: relative;
            padding: 40px 0;
        }

        /* Vertical Line */
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 100%;
            background: linear-gradient(to bottom, var(--seed-brown), var(--leaf-green));
            border-radius: 10px;
        }

        /* Timeline Items */
        .timeline-item {
            display: flex;
            margin-bottom: 60px;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }

        /* Timeline Content */
        .timeline-content {
            width: 45%;
            padding: 25px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            position: relative;
            border-top: 5px solid var(--leaf-green);
        }

        .timeline-item:nth-child(odd) .timeline-content {
            border-top-color: var(--sun-yellow);
        }

        .timeline-item:nth-child(even) .timeline-content {
            border-top-color: var(--water-blue);
        }

        .step-number {
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background: var(--soil-brown);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            z-index: 2;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .timeline-item:nth-child(odd) .step-number {
            left: auto;
            right: -25px;
            transform: translateX(50%);
        }

        .timeline-item:nth-child(even) .step-number {
            left: -25px;
            transform: translateX(-50%);
        }

        .step-title {
            font-size: 1.6rem;
            color: var(--soil-brown);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .step-icon {
            color: var(--leaf-green);
            font-size: 1.8rem;
        }

        .step-duration {
            display: inline-block;
            background: var(--light-beige);
            color: var(--soil-brown);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .step-description {
            color: #555;
            margin-bottom: 15px;
            line-height: 1.7;
        }

        /* Checklist */
        .checklist {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 10px;
            margin-top: 15px;
            border-left: 4px solid var(--leaf-green);
        }

        .checklist-title {
            font-weight: 600;
            color: var(--soil-brown);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checklist-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 8px;
        }

        .checklist-item i {
            color: var(--leaf-green);
            margin-top: 3px;
        }

        /* Tool List */
        .tool-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .tool-item {
            background: #e8f5e8;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: var(--soil-brown);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .tool-item i {
            color: var(--water-blue);
        }

        /* Timeline Images */
        .timeline-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-top: 15px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        /* Season Indicator */
        .season-indicator {
            display: inline-block;
            padding: 5px 15px;
            background: #fff8e1;
            color: #e65100;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-top: 10px;
            border: 1px dashed #ff9800;
        }

        /* Timeline Circle */
        .timeline-circle {
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: var(--leaf-green);
            border-radius: 50%;
            z-index: 2;
            border: 4px solid white;
            box-shadow: 0 0 0 3px var(--leaf-green);
        }

        .timeline-item:nth-child(odd) .timeline-circle {
            left: auto;
            right: -7px;
        }

        .timeline-item:nth-child(even) .timeline-circle {
            left: -7px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .timeline::before {
                left: 30px;
            }

            .timeline-item {
                flex-direction: row !important;
                margin-left: 60px;
            }

            .timeline-content {
                width: 100%;
            }

            .timeline-item:nth-child(odd) .step-number,
            .timeline-item:nth-child(even) .step-number {
                left: -75px;
                right: auto;
                transform: translateX(0);
            }

            .timeline-circle {
                left: 23px !important;
                right: auto !important;
            }
        }

        @media (max-width: 576px) {
            .timeline-title {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }

            .planting-timeline-container {
                padding: 20px;
            }

            .timeline-content {
                padding: 20px;
            }

            .step-title {
                font-size: 1.4rem;
            }
        }

        /* Interactive Elements */
        .interactive-section {
            background: linear-gradient(to right, #e8f5e8, #f9f4e6);
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
            text-align: center;
        }

        .quiz-title {
            font-size: 1.8rem;
            color: var(--soil-brown);
            margin-bottom: 20px;
        }

        .quiz-question {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 20px;
        }

        .quiz-options {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 20px;
        }

        .quiz-option {
            padding: 12px 25px;
            background: white;
            border: 2px solid var(--leaf-green);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
        }

        .quiz-option:hover {
            background: var(--leaf-green);
            color: white;
            transform: translateY(-3px);
        }

        .quiz-option.selected {
            background: var(--leaf-green);
            color: white;
            box-shadow: 0 5px 15px rgba(34, 139, 34, 0.3);
        }

        .quiz-result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            background: white;
            display: none;
        }

        .quiz-result.show {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Download Guide Button */
        .download-guide {
            display: inline-block;
            background: var(--soil-brown);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 30px;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(139, 69, 19, 0.3);
        }

        .download-guide:hover {
            background: var(--leaf-green);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(34, 139, 34, 0.3);
        }

        .download-guide i {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="planting-timeline-container">
        <div class="timeline-header">
            <h1 class="timeline-title">
                <i class="fas fa-seedling"></i>
                How to Plant a Tree
                <i class="fas fa-tree"></i>
            </h1>
            <p class="timeline-subtitle">Follow this comprehensive timeline guide to successfully plant and nurture a tree from selection to maturity</p>
        </div>

        <div class="timeline">
            <!-- Step 1 -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <div class="step-number">1</div>
                    <h3 class="step-title">
                        <i class="fas fa-search step-icon"></i>
                        Select the Right Tree
                    </h3>
                    <span class="step-duration">Week 1</span>
                    <p class="step-description">Choose a tree species suitable for your climate, soil type, and available space. Consider the tree's mature size, growth rate, and purpose (shade, fruit, ornamental).</p>
                    
                    <div class="checklist">
                        <div class="checklist-title">
                            <i class="fas fa-clipboard-check"></i>
                            Selection Checklist
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Native species are best for local wildlife</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Consider mature height and canopy spread</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Check soil compatibility (pH, drainage)</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Assess sunlight requirements</span>
                        </div>
                    </div>
                    
                    <span class="season-indicator">Best Season: Early Spring or Monsoon</span>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <div class="step-number">2</div>
                    <h3 class="step-title">
                        <i class="fas fa-map-marked-alt step-icon"></i>
                        Choose the Perfect Location
                    </h3>
                    <span class="step-duration">Week 1</span>
                    <p class="step-description">Find a spot with adequate space for the tree's roots and canopy to grow without interfering with buildings, power lines, or other trees.</p>
                    
                    <div class="tool-list">
                        <div class="tool-item">
                            <i class="fas fa-ruler"></i>
                            Measuring Tape
                        </div>
                        <div class="tool-item">
                            <i class="fas fa-sun"></i>
                            Sunlight Meter
                        </div>
                        <div class="tool-item">
                            <i class="fas fa-vial"></i>
                            Soil Test Kit
                        </div>
                    </div>
                    
                    <img src="https://images.unsplash.com/photo-1589923186741-7d1d6ccee3c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tree Location Planning" class="timeline-image">
                </div>
            </div>

            <!-- Step 3 -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <div class="step-number">3</div>
                    <h3 class="step-title">
                        <i class="fas fa-shovel step-icon"></i>
                        Prepare the Planting Hole
                    </h3>
                    <span class="step-duration">Day of Planting</span>
                    <p class="step-description">Dig a hole 2-3 times wider than the root ball but no deeper than the root ball's height. Roughen the sides of the hole to help roots penetrate the surrounding soil.</p>
                    
                    <div class="checklist">
                        <div class="checklist-title">
                            <i class="fas fa-clipboard-check"></i>
                            Hole Preparation
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Width: 2-3x root ball diameter</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Depth: Same as root ball height</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Loosen soil at bottom for drainage</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Mix compost with excavated soil (optional)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <div class="step-number">4</div>
                    <h3 class="step-title">
                        <i class="fas fa-tree step-icon"></i>
                        Plant the Tree
                    </h3>
                    <span class="step-duration">Day of Planting</span>
                    <p class="step-description">Gently place the tree in the hole, ensuring the root flare (where roots meet trunk) is level with or slightly above ground. Backfill with soil, tamping gently to remove air pockets.</p>
                    
                    <img src="https://images.unsplash.com/photo-1593005510321-9c4c90e24a75?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Planting a Tree" class="timeline-image">
                    
                    <div class="tool-list">
                        <div class="tool-item">
                            <i class="fas fa-shovel"></i>
                            Shovel
                        </div>
                        <div class="tool-item">
                            <i class="fas fa-hand-paper"></i>
                            Gloves
                        </div>
                        <div class="tool-item">
                            <i class="fas fa-tint"></i>
                            Watering Can
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <div class="step-number">5</div>
                    <h3 class="step-title">
                        <i class="fas fa-tint step-icon"></i>
                        Water and Mulch
                    </h3>
                    <span class="step-duration">Day of Planting + First Year</span>
                    <p class="step-description">Water thoroughly after planting. Apply 2-4 inches of organic mulch around the tree (keeping away from trunk) to retain moisture and suppress weeds.</p>
                    
                    <div class="checklist">
                        <div class="checklist-title">
                            <i class="fas fa-clipboard-check"></i>
                            Watering Schedule
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>First week: Water daily</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>First 3 months: Water 2-3 times weekly</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>First year: Water weekly during dry periods</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Deep watering encourages deep roots</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <div class="step-number">6</div>
                    <h3 class="step-title">
                        <i class="fas fa-cut step-icon"></i>
                        Pruning and Staking
                    </h3>
                    <span class="step-duration">Year 1-3</span>
                    <p class="step-description">Remove only dead, damaged, or diseased branches initially. Stake only if necessary (in windy areas) and remove stakes after 1-2 years.</p>
                    
                    <img src="https://images.unsplash.com/photo-1570058680114-24dd3a064f79?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Tree Pruning" class="timeline-image">
                </div>
            </div>

            <!-- Step 7 -->
            <div class="timeline-item">
                <div class="timeline-circle"></div>
                <div class="timeline-content">
                    <div class="step-number">7</div>
                    <h3 class="step-title">
                        <i class="fas fa-heartbeat step-icon"></i>
                        Long-term Care
                    </h3>
                    <span class="step-duration">Year 2-10+</span>
                    <p class="step-description">Monitor for pests and diseases. Fertilize if needed based on soil tests. Continue proper watering during droughts. Enjoy watching your tree grow!</p>
                    
                    <div class="checklist">
                        <div class="checklist-title">
                            <i class="fas fa-clipboard-check"></i>
                            Annual Care Tasks
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Spring: Check for winter damage, apply mulch</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Summer: Monitor water needs, watch for pests</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Fall: Rake leaves, prepare for winter</span>
                        </div>
                        <div class="checklist-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Winter: Protect young trees from frost</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interactive Quiz -->
        <div class="interactive-section">
            <h3 class="quiz-title"> Download Complete Planting Guide (PDF)</h3>
            <p class="quiz-question">"Your are learn Planting in 7 steps"</p>
            
            <a href="treeSteps" class="download-guide" download>
                <i class="fas fa-download"></i>
                Download Now (PDF)
            </a>
        </div>

        <!-- Download Guide -->
        <div style="text-align: center; margin-top: 50px;">
           
        </div>
    </div>

    <script>
        // Animate timeline items on scroll
        const timelineItems = document.querySelectorAll('.timeline-item');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.2 });
        
        timelineItems.forEach(item => {
            observer.observe(item);
        });

       
    </script>
</body>
</html>