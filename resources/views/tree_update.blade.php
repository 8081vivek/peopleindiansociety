<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Growth Monitoring - Green India Society</title>
        <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:serif;
        }
        
        body {
       background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.09' fill-rule='evenodd'/%3E%3C/svg%3E");
    font-family: serif;
    background-color: var(--light);   
             color: #2c3e50;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .register-container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 80, 0, 0.15);
            min-height: 700px;
            max-height: 90vh;
        }
        
        /* Left Panel Styles - FIXED */
        .left-panel {
            flex: 1;
            background: linear-gradient(135deg, #1a472a 0%, #2d5a27 50%, #3e7c34 100%);
            color: white;
                background-color: var(--light);        ;

            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            position: sticky;
            top: 0;
            height: 100%;
            overflow-y: auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        
        .logo-icon {
            font-size: 2.5rem;
            color: #8bc34a;
            margin-right: 15px;
        }
        
        .logo-text {
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .logo-text span {
            color: #8bc34a;
        }
        
        .left-panel h1 {
            font-size: 2.5rem;
            margin-bottom: 25px;
            line-height: 1.3;
            font-weight: 700;
        }
        
        .left-panel p {
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 40px;
            opacity: 0.9;
        }
        
        .benefits {
            margin-top: auto;
        }
        
        .benefit-item {
            display: flex;
            margin-bottom: 30px;
            align-items: flex-start;
        }
        
        .benefit-icon {
            font-size: 1.8rem;
            color: #8bc34a;
            margin-right: 15px;
            margin-top: 5px;
        }
        
        .benefit-content h3 {
            font-size: 1.3rem;
            margin-bottom: 8px;
        }
        
        .benefit-content p {
            font-size: 0.95rem;
            margin-bottom: 0;
            opacity: 0.8;
            line-height: 1.6;
        }
        
        /* Right Panel - Growth Form - SCROLLABLE */
        .right-panel {
            flex: 1.2;
            padding: 50px 40px;
            overflow-y: auto;
            max-height: 100%;
        }
        
        .form-header {
            margin-bottom: 35px;
            text-align: center;
        }
        
        .form-header h2 {
            font-size: 2.2rem;
            color: #1a472a;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }
        
        .form-header h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #4caf50;
            border-radius: 2px;
        }
        
        .form-header p {
            color: #666;
            font-size: 1.1rem;
            margin-top: 20px;
        }
        
        .form-section {
            margin-bottom: 35px;
        }
        
        .section-title {
            font-size: 1.4rem;
            color: #2d5a27;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e8f5e9;
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 10px;
            color: #4caf50;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2d5a27;
            font-size: 1.05rem;
        }
        
        .required:after {
            content: " *";
            color: #e74c3c;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #dce7dc;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
            background-color: #f9fffa;
            font-family:serif;
        }
        
        input:focus, select:focus, textarea:focus {
            border-color: #4caf50;
            outline: none;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.2);
            background-color: white;
        }
        
        /* Tree Growth Metrics */
        .growth-metrics {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        @media (max-width: 768px) {
            .growth-metrics {
                grid-template-columns: 1fr;
            }
        }
        
        .metric-box {
            background: #f0f9f0;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid #4caf50;
        }
        
        .metric-value {
            display: flex;
            align-items: baseline;
            margin-top: 10px;
        }
        
        .metric-value input {
            flex: 1;
            margin-right: 10px;
        }
        
        .unit {
            color: #666;
            font-size: 0.9rem;
            white-space: nowrap;
        }
        
        /* Camera Section */
        .camera-container {
            margin-bottom: 25px;
        }
        
        .camera-box {
            width: 100%;
            height: 250px;
            background: #2c3e50;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            margin-bottom: 15px;
            border: 3px solid #34495e;
        }
        
        #cameraPreview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }
        
        #cameraFeed {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
        }
        
        .camera-placeholder {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            color: #ecf0f1;
            text-align: center;
            padding: 20px;
        }
        
        .camera-placeholder i {
            font-size: 60px;
            margin-bottom: 15px;
            opacity: 0.7;
        }
        
        .camera-controls {
            display: flex;
            gap: 10px;
        }
        
        .camera-btn {
            flex: 1;
            background-color: #2d5a27;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            font-size: 1rem;
        }
        
        .camera-btn:hover {
            background-color: #1e3f1a;
            transform: translateY(-2px);
        }
        
        .camera-btn:disabled {
            background-color: #95a5a6;
            cursor: not-allowed;
            transform: none;
        }
        
        .camera-btn i {
            margin-right: 10px;
        }
        
        .capture-btn {
            background-color: #27ae60;
        }
        
        .capture-btn:hover {
            background-color: #219653;
        }
        
        .photo-captured {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(46, 204, 113, 0.9);
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            display: none;
            z-index: 10;
        }
        
        /* Health Indicators */
        .health-indicators {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 15px;
        }
        
        .health-option {
            flex: 1;
            min-width: 120px;
        }
        
        .health-option input {
            display: none;
        }
        
        .health-option label {
            display: block;
            padding: 15px;
            background: #f5f9f5;
            border: 2px solid #dce7dc;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: normal;
        }
        
        .health-option input:checked + label {
            background: #e8f5e9;
            border-color: #4caf50;
            color: #2d5a27;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(76, 175, 80, 0.2);
        }
        
        /* Location Section */
        .location-container {
            background: #f0f9f0;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
            border-left: 5px solid #3498db;
        }
        
        .location-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .location-header i {
            color: #3498db;
            font-size: 1.3rem;
            margin-right: 10px;
        }
        
        .coordinates {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 15px;
        }
        
        /* Progress Bar */
        .progress-container {
            margin-top: 20px;
        }
        
        .progress-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .progress-bar {
            height: 10px;
            background: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(to right, #8bc34a, #4caf50);
            width: 0%;
            transition: width 0.5s ease;
        }
        
        /* Submit Button */
        .submit-btn {
            width: 100%;
            background: linear-gradient(to right, #2d5a27, #4caf50);
            color: white;
            border: none;
            padding: 18px;
            font-size: 1.2rem;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(45, 90, 39, 0.3);
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(45, 90, 39, 0.4);
        }
        
        .submit-btn:disabled {
            background: #95a5a6;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        .submit-btn i {
            margin-right: 12px;
        }
        
        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            z-index: 1000;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .notification.show {
            opacity: 1;
            transform: translateX(0);
        }
        
        .notification.success {
            background: linear-gradient(to right, #27ae60, #2ecc71);
        }
        
        .notification.error {
            background: linear-gradient(to right, #e74c3c, #c0392b);
        }
        
        .notification.info {
            background: linear-gradient(to right, #3498db, #2980b9);
        }
        
        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Custom Scrollbar for Right Panel */
        .right-panel::-webkit-scrollbar {
            width: 8px;
        }
        
        .right-panel::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .right-panel::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        
        .right-panel::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        /* Custom Scrollbar for Left Panel */
        .left-panel::-webkit-scrollbar {
            width: 6px;
        }
        
        .left-panel::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
        
        .left-panel::-webkit-scrollbar-thumb {
            background: rgba(139, 195, 74, 0.5);
            border-radius: 10px;
        }
        
        .left-panel::-webkit-scrollbar-thumb:hover {
            background: rgba(139, 195, 74, 0.7);
        }
        
        /* Responsive Design */
        @media (max-width: 900px) {
            .register-container {
                flex-direction: column;
                max-width: 600px;
                max-height: none;
                overflow-y: auto;
            }
            
            .left-panel {
                position: relative;
                height: auto;
                overflow-y: visible;
                padding: 30px 25px;
            }
            
            .right-panel {
                padding: 30px 25px;
                overflow-y: visible;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <!-- Left Panel - Information - FIXED -->
        <div class="left-panel">
            <div class="logo">
                <i class="fas fa-seedling logo-icon"></i>
                <div class="logo-text">Green<span>India</span>Society</div>
            </div>
            
            <h1>Track Tree Growth & Health</h1>
            <p>Monitor the development of your planted trees. Record growth metrics, capture progress photos, and contribute to our national green database.</p>
            
            <div class="benefits">
                <div class="benefit-item">
                    <i class="fas fa-tree benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Growth Monitoring</h3>
                        <p>Track height, canopy spread, trunk diameter and overall health of your trees over time.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-camera benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Visual Progress</h3>
                        <p>Capture live photos to document tree development and create a visual growth timeline.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-chart-line benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Growth Analytics</h3>
                        <p>Receive insights on growth patterns and health indicators for optimal tree care.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Growth Form - SCROLLABLE -->
        <div class="right-panel">
            <div class="form-header">
                <h2>Tree Growth Update</h2>
                <p>Record the current status and growth metrics of your registered tree</p>
            </div>
            
            <form id="growthForm" method="post" action="../update" enctype="multipart/form-data">
                @csrf
                <!-- Tree Identification -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-tree"></i> Tree Identification
                    </div>
                    
                    <div class="form-group">
                        <label for="treeId" class="required">Tree ID / Tag Number</label>

                        <input   type="hidden" name="treeId"  value="{{$tree->id}}" placeholder="Enter the unique ID of your tree" required>
                        <input  type="text" id="treeId"  value="POIS{{$tree->id}}" placeholder="Enter the unique ID of your tree" required>
                    </div>
                    <input type="hidden" name="user_id" value="{{$data->id}}">
                    <div class="form-group">
                        <label for="treeName">Tree Name (Optional)</label>
                        <input type="text" id="treeName" name="treeName" value="{{$tree->treeName}}" placeholder="e.g., Heritage Banyan, Community Mango">
                    </div>
                </div>
                
                <!-- Growth Metrics -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-ruler-vertical"></i> Growth Metrics
                    </div>
                    
                    <div class="growth-metrics">
                        <div class="metric-box">
                            <label for="height" class="required">Current Height</label>
                            <p class="metric-desc">Measure from ground to highest point</p>
                            <div class="metric-value">
                                <input type="number" id="height" name="height" step="0.1" min="0.1" max="100" placeholder="e.g., 2.5" required>
                                <span class="unit">meters</span>
                            </div>
                        </div>
                        
                        <div class="metric-box">
                            <label for="trunkDiameter" class="required">Trunk Diameter</label>
                            <p class="metric-desc">Measure at 1.3m above ground (DBH)</p>
                            <div class="metric-value">
                                <input type="number" id="trunkDiameter" name="trunkDiameter" step="0.5" min="1" placeholder="e.g., 15" required>
                                <span class="unit">centimeters</span>
                            </div>
                        </div>
                        
                        <div class="metric-box">
                            <label for="canopySpread">Canopy Spread</label>
                            <p class="metric-desc">Average diameter of tree crown</p>
                            <div class="metric-value">
                                <input type="number" id="canopySpread" name="canopySpread" step="0.1" min="0.1" placeholder="e.g., 3.2">
                                <span class="unit">meters</span>
                            </div>
                        </div>
                        
                        <div class="metric-box">
                            <label for="newGrowth">New Growth</label>
                            <p class="metric-desc">New branch length since last update</p>
                            <div class="metric-value">
                                <input type="number" id="newGrowth" name="newGrowth" step="0.5" min="0" placeholder="e.g., 20">
                                <span class="unit">centimeters</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Health Assessment -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-heartbeat"></i> Health Assessment
                    </div>
                    
                    <div class="form-group">
                        <label class="required">Overall Health Status</label>
                        <div class="health-indicators">
                            <div class="health-option">
                                <input type="radio" id="health-excellent" name="health" value="excellent" required>
                                <label for="health-excellent">
                                    <i class="fas fa-leaf" style="color: #27ae60; margin-right: 5px;"></i>
                                    Excellent
                                </label>
                            </div>
                            <div class="health-option">
                                <input type="radio" id="health-good" name="health" value="good">
                                <label for="health-good">
                                    <i class="fas fa-leaf" style="color: #2ecc71; margin-right: 5px;"></i>
                                    Good
                                </label>
                            </div>
                            <div class="health-option">
                                <input type="radio" id="health-fair" name="health" value="fair">
                                <label for="health-fair">
                                    <i class="fas fa-leaf" style="color: #f39c12; margin-right: 5px;"></i>
                                    Fair
                                </label>
                            </div>
                            <div class="health-option">
                                <input type="radio" id="health-poor" name="health" value="poor">
                                <label for="health-poor">
                                    <i class="fas fa-leaf" style="color: #e74c3c; margin-right: 5px;"></i>
                                    Poor
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="observations">Observations & Issues</label>
                        <textarea id="observations" name="observations" rows="3" placeholder="Note any visible issues like pests, diseases, leaf discoloration, or other concerns..."></textarea>
                    </div>
                </div>
                
                <!-- Progress Photo -->
                <div class="form-section">
    <div class="section-title">
        <i class="fas fa-image"></i> Progress Photo
    </div>
    
    <div class="camera-container">
        <div class="camera-box" style="display:flex; align-items:center; justify-content:center;">
            <div class="camera-placeholder">
                <i class="fas fa-cloud-upload-alt"></i>
                <span>Upload latest photo of your tree</span>
            </div>
            <img id="cameraPreview" alt="Uploaded Tree Photo" style="display:none; width:100%; height:100%; object-fit:cover;">
        </div>

        <div class="camera-controls">
            <input 
                type="file" 
                name="progress_photo" 
                id="photoUpload"
                accept="image/*"
                style="display:none"
            >

            <button type="button" class="camera-btn" onclick="document.getElementById('photoUpload').click()">
                <i class="fas fa-upload"></i> Upload Photo
            </button>

            <button type="button" class="camera-btn" id="removePhotoBtn" style="display:none;">
                <i class="fas fa-times"></i> Remove
            </button>
        </div>
    </div>
</div>

                
                <!-- Location & Date -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-map-marker-alt"></i> Date
                    </div>
                    
                    <div class="form-group">
                        <label for="updateDate" class="required">Update Date</label>
                        <input type="date" id="updateDate" name="updateDate" required>
                    </div>
                    
                    <div >
                        <!-- <div class="location-header">
                            
                        </div> -->
                        
                       
                    </div>
                </div>
                
                <!-- Progress Tracking -->
                <div class="form-section">
                    <div class="section-title">
                        <i class="fas fa-chart-bar"></i> Growth Progress
                    </div>
                    
                    <div class="progress-container">
                        <div class="progress-header">
                            <span>Growth Completion</span>
                            <span id="progressPercent">0%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" id="progressFill"></div>
                        </div>
                        <p style="margin-top: 10px; font-size: 0.9rem; color: #666;">Based on expected mature size for this tree species</p>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <button class="submit-btn" id="submitBtn">
                    <i class="fas fa-cloud-upload-alt"></i> Submit Growth Update
                </button>
            </form>
        </div>
    </div>
    
    <!-- Notification Container -->
    <div id="notificationContainer"></div>

    <script>
document.addEventListener('DOMContentLoaded', function () {

    // Default date = today
    const updateDateInput = document.getElementById('updateDate');
    if (updateDateInput) {
        updateDateInput.value = new Date().toISOString().split('T')[0];
    }

    // Progress bar inputs
    const heightInput = document.getElementById('height');
    const trunkInput = document.getElementById('trunkDiameter');
    const canopyInput = document.getElementById('canopySpread');

    if (heightInput) heightInput.addEventListener('input', updateProgressBar);
    if (trunkInput) trunkInput.addEventListener('input', updateProgressBar);
    if (canopyInput) canopyInput.addEventListener('input', updateProgressBar);
});

// Progress bar function
function updateProgressBar() {
    const height = parseFloat(document.getElementById('height')?.value) || 0;
    const trunk = parseFloat(document.getElementById('trunkDiameter')?.value) || 0;
    const canopy = parseFloat(document.getElementById('canopySpread')?.value) || 0;

    const heightProgress = Math.min((height / 15) * 100, 100);
    const trunkProgress = Math.min((trunk / 50) * 100, 100);
    const canopyProgress = Math.min((canopy / 10) * 100, 100);

    const total = Math.round(
        (heightProgress * 0.5) +
        (trunkProgress * 0.3) +
        (canopyProgress * 0.2)
    );

    const progressPercent = document.getElementById('progressPercent');
    const progressFill = document.getElementById('progressFill');

    if (!progressPercent || !progressFill) return;

    progressPercent.innerText = total + '%';
    progressFill.style.width = total + '%';

    if (total < 30) {
        progressFill.style.background = '#e74c3c';
    } else if (total < 70) {
        progressFill.style.background = '#f39c12';
    } else {
        progressFill.style.background = '#4caf50';
    }
}
</script>
<script>
const photoUpload = document.getElementById('photoUpload');
const preview = document.getElementById('cameraPreview');
const removeBtn = document.getElementById('removePhotoBtn');

if (photoUpload) {
    photoUpload.addEventListener('change', function () {
        const file = this.files[0];
        if (!file) return;

        if (!file.type.startsWith('image/')) {
            alert('Please upload an image file');
            this.value = '';
            return;
        }

        if (file.size > 5 * 1024 * 1024) {
            alert('Image must be less than 5MB');
            this.value = '';
            return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
            removeBtn.style.display = 'inline-flex';
        };
        reader.readAsDataURL(file);
    });
}

if (removeBtn) {
    removeBtn.addEventListener('click', function () {
        photoUpload.value = '';
        preview.src = '';
        preview.style.display = 'none';
        removeBtn.style.display = 'none';
    });
}
</script>

</body>
</html> 