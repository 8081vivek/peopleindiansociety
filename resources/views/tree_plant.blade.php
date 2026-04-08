<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Registration System | People of India Society</title>
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
            --light-gray: #f5f5f5;
            --border-radius: 12px;
            --box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family:serif;
            background-color: #f8fcf8;
            color: var(--text-color);
            line-height: 1.7;
            min-height: 100vh;
            padding: 20px;
            background-image: radial-gradient(circle at 10% 20%, rgba(232, 245, 233, 0.3) 0%, rgba(240, 248, 240, 0.1) 90%);
        }
        
        .container {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 0;
            max-width: 1300px;
            margin: 0 auto;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            background: white;
            min-height: 90vh;
        }
        
        /* Left Panel - Information Section */
        .left-panel {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--dark-green) 100%);
            color: white;
            padding: 40px 35px;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }
        
        .left-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path fill="%231e3f1a" fill-opacity="0.1" d="M20,30 C40,15 60,15 80,30 L80,70 C60,85 40,85 20,70 Z"/></svg>');
            background-size: 200px;
            opacity: 0.1;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        
        .logo-icon {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-right: 15px;
        }
        
        .logo-text {
            font-family:serif;
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        
        .logo-text span {
            color: var(--accent-color);
        }
        
        .left-panel h1 {
            font-family:serif;
            font-size: 2.4rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 25px;
            margin-top: 10px;
        }
        
        .left-panel p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 40px;
            max-width: 95%;
        }
        
        .benefits {
            margin-top: auto;
        }
        
        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .benefit-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .benefit-icon {
            font-size: 1.8rem;
            color: var(--accent-color);
            margin-right: 20px;
            margin-top: 5px;
            flex-shrink: 0;
        }
        
        .benefit-content h3 {
            font-family:serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .benefit-content p {
            font-size: 1rem;
            opacity: 0.8;
            margin-bottom: 0;
        }
        
        /* Right Panel - Registration Form */
        .right-panel {
            padding: 40px 35px;
            overflow-y: auto;
            max-height: 90vh;
        }
        
        .right-panel h2 {
            font-family:serif;
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 8px;
            text-align: center;
        }
        
        .right-panel .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 35px;
            font-size: 1.05rem;
        }
        
        .form-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        @media (max-width: 1024px) {
            .container {
                grid-template-columns: 1fr;
                max-width: 800px;
            }
            
            .form-container {
                grid-template-columns: 1fr;
            }
        }
        
        .form-section {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
            transition: var(--transition);
        }
        
        .form-section:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transform: translateY(-3px);
        }
        
        .form-section h3 {
            font-family:serif;
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light-green);
            display: flex;
            align-items: center;
        }
        
        .form-section h3 i {
            margin-right: 12px;
            color: var(--secondary-color);
        }
        
        .form-group {
            margin-bottom: 22px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--primary-color);
            font-size: 1rem;
        }
        
        .required::after {
            content: " *";
            color: #e74c3c;
        }
        
        select, input, textarea {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e0e6e0;
            border-radius: 8px;
            font-size: 16px;
            transition: var(--transition);
            background-color: white;
            font-family:  serif;
        }
        
        select:focus, input:focus, textarea:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.15);
        }
        
        .tree-select-container {
            position: relative;
        }
        
        .tree-select-container i {
            position: absolute;
            right: 16px;
            top: 44px;
            color: var(--secondary-color);
            pointer-events: none;
        }
        
        /* Camera Section */
        .camera-container {
            position: relative;
            margin-bottom: 25px;
        }
        
        .camera-box {
            width: 100%;
            height: 280px;
            background-color: #1a2c3b;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            margin-bottom: 15px;
            border: 3px solid #2c3e50;
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
        }
        
        .camera-placeholder i {
            font-size: 70px;
            margin-bottom: 15px;
            opacity: 0.8;
        }
        
        .camera-placeholder span {
            font-size: 1.1rem;
            text-align: center;
            max-width: 80%;
        }
        
        .camera-controls {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        
        .camera-btn {
            flex: 1;
            min-width: 120px;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 14px 18px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            font-size: 1rem;
            font-family:  serif;
        }
        
        .camera-btn:hover {
            background-color: var(--dark-green);
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        
        .camera-btn:disabled {
            background-color: #95a5a6;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        .camera-btn i {
            margin-right: 10px;
        }
        
        .capture-btn {
            background-color: #e74c3c;
        }
        
        .capture-btn:hover:not(:disabled) {
            background-color: #c0392b;
        }
        
        .retake-btn {
            background-color: #3498db;
        }
        
        .retake-btn:hover:not(:disabled) {
            background-color: #2980b9;
        }
        
        .photo-captured {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: rgba(46, 204, 113, 0.95);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: none;
            z-index: 10;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
        }
        
        .photo-captured i {
            margin-right: 6px;
        }
        
        /* Location Section */
        .location-container {
            padding: 22px;
            background-color: var(--light-green);
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 5px solid var(--secondary-color);
        }
        
        .location-header {
            display: flex;
            align-items: center;
            margin-bottom: 18px;
        }
        
        .location-header i {
            color: var(--secondary-color);
            font-size: 24px;
            margin-right: 15px;
        }
        
        .coordinates-display {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
            margin-bottom: 18px;
        }
        
        .coordinate-value {
            background-color: white;
            padding: 14px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-family: monospace;
            font-size: 1rem;
            margin-top: 5px;
            font-weight: 600;
            color: #2d5a27;
        }
        
        .address-details {
            background-color: white;
            padding: 18px;
            border-radius: 8px;
            margin-top: 10px;
            border: 1px solid #ddd;
        }
        
        .address-row {
            display: flex;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .address-row:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .address-label {
            font-weight: 600;
            min-width: 90px;
            color: var(--primary-color);
        }
        
        /* Submit Button */
        .submit-btn {
            grid-column: 1 / -1;
            background: linear-gradient(to right, var(--primary-color), var(--dark-green));
            color: white;
            border: none;
            padding: 20px;
            font-size: 1.25rem;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            box-shadow: 0 6px 15px rgba(45, 90, 39, 0.3);
            font-family: serif;
            letter-spacing: 0.5px;
        }
        
        .submit-btn:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(45, 90, 39, 0.4);
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
        
        /* Status Section */
        .status-box {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            margin-top: 30px;
            border-left: 5px solid var(--secondary-color);
            box-shadow: var(--box-shadow);
        }
        
        .status-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .status-header i {
            margin-right: 15px;
            color: var(--secondary-color);
            font-size: 1.6rem;
        }
        
        .status-header h3 {
            font-family:serif;
            font-size: 1.5rem;
            color: var(--primary-color);
        }
        
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(0,0,0,.1);
            border-radius: 50%;
            border-top-color: var(--secondary-color);
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .timestamp {
            color: #666;
            font-style: italic;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
            font-size: 0.95rem;
        }
        
        /* API Status */
        .api-status {
            background-color: #e3f2fd;
            padding: 14px 18px;
            border-radius: 8px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-left: 4px solid #2196f3;
        }
        
        .api-status span {
            display: flex;
            align-items: center;
        }
        
        .success-badge {
            background-color: var(--secondary-color);
            color: white;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .error-badge {
            background-color: #e74c3c;
            color: white;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        /* Notification System */
        .notification {
            position: fixed;
            top: 25px;
            right: 25px;
            padding: 18px 24px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            z-index: 1000;
            opacity: 0;
            transform: translateX(100%);
            transition: var(--transition);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            max-width: 350px;
            font-family: 'Source Serif Pro', serif;
        }
        
        .notification.show {
            opacity: 1;
            transform: translateX(0);
        }
        
        .notification.success {
            background-color: var(--secondary-color);
        }
        
        .notification.error {
            background-color: #e74c3c;
        }
        
        .notification.info {
            background-color: #3498db;
        }
        
        .location-loading {
            display: inline-block;
            margin-left: 10px;
        }
        
        /* Footer */
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #666;
            font-size: 0.9rem;
            border-top: 1px solid #eee;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            
            .right-panel {
                padding: 25px 20px;
            }
            
            .left-panel {
                padding: 30px 25px;
            }
            
            .left-panel h1 {
                font-size: 2rem;
            }
            
            .form-section {
                padding: 25px 20px;
            }
            
            .camera-controls {
                flex-direction: column;
            }
            
            .camera-btn {
                width: 100%;
            }
            
            .coordinates-display {
                grid-template-columns: 1fr;
            }
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 0.85rem;
            margin-top: 5px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Panel - Information -->
        <div class="left-panel">
            <div class="logo">
                <i class="fas fa-seedling logo-icon"></i>
                <div class="logo-text">Green<span>India</span>Society</div>
            </div>
            
            <h1>Join Our Green Revolution</h1>
            <p>Register trees to contribute to India's green cover. Our mission is to plant and nurture millions of trees across the country, creating a sustainable ecosystem for future generations. Every tree you register helps us track growth, monitor health, and ensure long-term survival.</p>
            
            <div class="benefits">
                <div class="benefit-item">
                    <i class="fas fa-tree benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Track Tree Growth</h3>
                        <p>Monitor your registered trees' growth, health, and environmental impact over time with detailed analytics.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-leaf benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Environmental Impact</h3>
                        <p>Each mature tree absorbs ~22kg of CO2 annually. Your registration helps quantify environmental benefits.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-hands-helping benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Community Network</h3>
                        <p>Connect with other tree enthusiasts, volunteers, and environmentalists across India.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Registration Form -->
        <div class="right-panel">
            <h2>Tree Registration System</h2>
            <p class="subtitle">Register trees with live photo capture, GPS location, and species verification</p>
            
            <div class="api-status">
                <span>
                    <div class="loading" id="apiLoading"></div>
                    <span id="apiStatus">Fetching tree species data from API...</span>
                </span>
                <span class="success-badge" id="apiSuccess" style="display: none;">Data Loaded</span>
                <span class="error-badge" id="apiError" style="display: none;">API Error</span>
            </div>
            
            <form id="treeForm" action="register" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-container">
                    <!-- Tree Details Section -->
                    <div class="form-section">
                        <h3><i class="fas fa-info-circle"></i> Tree Details</h3>
                        
                        <div class="form-group tree-select-container">
                            <label for="treeType" class="required">Select Tree Species</label>
                            <select id="treeType" name="treeType" required>
                                <option value="">Loading tree species from API...</option>
                            </select>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        
                        <div class="form-group">
                            <label for="plantingDate" class="required">Planting Date</label>
                            <input type="date" id="plantingDate" name="plantingDate" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="height" class="required">Height (meters)</label>
                            <input type="number" id="height" name="height" step="0.1" min="0.1" max="100" placeholder="e.g., 2.5" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="age" class="required">Estimated Age (days)</label>
                            <input type="number" id="age" name="age" min="0" max="1000" placeholder="e.g., 5" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="health" class="required">Health Condition</label>
                            <select id="health" name="health" required>
                                <option value="">Select health condition</option>
                                <option value="excellent">Excellent - Full canopy, no visible issues</option>
                                <option value="good">Good - Healthy with minor issues</option>
                                <option value="fair">Fair - Some damage or disease</option>
                                <option value="poor">Poor - Significant damage or disease</option>
                            </select>
                        </div>
                        
                        <!-- Hidden fields for location data -->
                         <input type="hidden" name="user_id" value="{{$data->id}}">
                        <input type="hidden" id="latitude" name="latitude">
                        <input type="hidden" id="longitude" name="longitude">
                        <input type="hidden" id="village" name="village">
                        <input type="hidden" id="city" name="city">
                        <input type="hidden" id="state" name="state">
                        <input type="hidden" id="country" name="country">
                        <input type="hidden" id="photoData" name="photoData">
                        
                        <!-- File input for photo upload -->
                        <input type="file" id="photoUpload" name="photoUpload" accept="image/*" style="display: none;">
                    </div>
                    
                    <!-- Photo & Location Section -->
                    <div class="form-section">
                        <h3><i class="fas fa-camera"></i> Live Photo & Location</h3>
                        
                        <div class="form-group camera-container">
                            <label class="required">Tree Photo</label>
                            <div class="camera-box">
                                <div class="camera-placeholder" id="cameraPlaceholder">
                                    <i class="fas fa-tree"></i>
                                    <span>Camera not active. Click "Start Camera" to begin</span>
                                </div>
                                <video id="cameraFeed" autoplay playsinline></video>
                                <img id="cameraPreview" alt="Captured Tree Photo">
                                <div class="photo-captured" id="photoCapturedBadge">
                                    <i class="fas fa-check"></i> Photo Captured
                                </div>
                            </div>
                            
                            <div class="camera-controls">
                                <!-- <button type="button" class="camera-btn" id="startCameraBtn">
                                    <i class="fas fa-video"></i> Start Camera
                                </button>
                                <button type="button" class="camera-btn capture-btn" id="captureBtn" disabled>
                                    <i class="fas fa-camera"></i> Capture Photo
                                </button>
                                <button type="button" class="camera-btn retake-btn" id="retakeBtn" disabled>
                                    <i class="fas fa-redo"></i> Retake Photo
                                </button> -->
                                <button type="button" class="camera-btn" id="uploadPhotoBtn">
                                    <i class="fas fa-upload"></i> Upload Photo
                                </button>
                            </div>
                            <p style="margin-top: 10px; font-size: 0.9rem; color: #666;" id="photoInfo">You can capture from camera or upload an existing photo</p>
                        </div> 
                        
                        <div class="form-group">
                            <label class="required">Live Location</label>
                            <div class="location-container">
                                <div class="location-header">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <div id="locationStatus">Fetching your location...</div>
                                        <small class="location-loading" id="locationLoading" style="display: none;">
                                            <div class="loading" style="width: 15px; height: 15px;"></div> Getting address details...
                                        </small>
                                    </div>
                                </div>
                                
                                <div class="coordinates-display">
                                    <div>
                                        <label>Latitude:</label>
                                        <div class="coordinate-value" id="latDisplay">-</div>
                                    </div>
                                    <div>
                                        <label>Longitude:</label>
                                        <div class="coordinate-value" id="lngDisplay">-</div>
                                    </div>
                                </div>
                                
                                <div id="addressDetails" style="display: none;">
                                    <div class="address-details">
                                        <div class="address-row">
                                            <span class="address-label">Village/Town:</span>
                                            <span id="villageDisplay">-</span>
                                        </div>
                                        <div class="address-row">
                                            <span class="address-label">City:</span>
                                            <span id="cityDisplay">-</span>
                                        </div>
                                        <div class="address-row">
                                            <span class="address-label">State:</span>
                                            <span id="stateDisplay">-</span>
                                        </div>
                                        <div class="address-row">
                                            <span class="address-label">Country:</span>
                                            <span id="countryDisplay">-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="notes">Additional Notes</label>
                            <textarea id="notes" name="notes" rows="4" placeholder="Any additional information about the tree, surroundings, special characteristics, nearby landmarks, or observations..."></textarea>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <i class="fas fa-paper-plane"></i> Register Tree
                    </button>
                </div>
            </form>
            
            <div class="status-box">
                <div class="status-header">
                    <i class="fas fa-history"></i>
                    <h3>Registration Status</h3>
                </div>
                <p id="registrationStatus">Form ready for submission. All tree data will be recorded with timestamp and location.</p>
                <div class="timestamp">
                    <div>Form opened at: <span id="openTime"></span></div>
                    <div id="submitTime" style="display: none;">Tree registered at: <span id="submittedTime"></span></div>
                </div>
            </div>
            
           
        </div>
    </div>
    
    <!-- Notification Container -->
    <div id="notificationContainer"></div>

    <script>
        // DOM Elements
        const treeForm = document.getElementById('treeForm');
        const treeTypeSelect = document.getElementById('treeType');
        const apiLoading = document.getElementById('apiLoading');
        const apiStatus = document.getElementById('apiStatus');
        const apiSuccess = document.getElementById('apiSuccess');
        const apiError = document.getElementById('apiError');
        const locationStatus = document.getElementById('locationStatus');
        const locationLoading = document.getElementById('locationLoading');
        const latitudeInput = document.getElementById('latitude');
        const longitudeInput = document.getElementById('longitude');
        const addressDetails = document.getElementById('addressDetails');
        const villageDisplay = document.getElementById('villageDisplay');
        const cityDisplay = document.getElementById('cityDisplay');
        const stateDisplay = document.getElementById('stateDisplay');
        const countryDisplay = document.getElementById('countryDisplay');
        const latDisplay = document.getElementById('latDisplay');
        const lngDisplay = document.getElementById('lngDisplay');
        const startCameraBtn = document.getElementById('startCameraBtn');
        const captureBtn = document.getElementById('captureBtn');
        const retakeBtn = document.getElementById('retakeBtn');
        const uploadPhotoBtn = document.getElementById('uploadPhotoBtn');
        const photoUpload = document.getElementById('photoUpload');
        const cameraPlaceholder = document.getElementById('cameraPlaceholder');
        const cameraFeed = document.getElementById('cameraFeed');
        const cameraPreview = document.getElementById('cameraPreview');
        const photoCapturedBadge = document.getElementById('photoCapturedBadge');
        const photoDataInput = document.getElementById('photoData');
        const photoInfo = document.getElementById('photoInfo');
        const submitBtn = document.getElementById('submitBtn');
        const registrationStatus = document.getElementById('registrationStatus');
        const openTimeSpan = document.getElementById('openTime');
        const submitTimeDiv = document.getElementById('submitTime');
        const submittedTimeSpan = document.getElementById('submittedTime');
        
        // Global variables
        let stream = null;
        let capturedPhoto = null;
        let currentLocation = null;
        let treeSpeciesData = [];
        let isCameraActive = false;
        
        // Set form open timestamp
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            const formattedTime = now.toLocaleString('en-IN', {
                day: '2-digit',
                month: 'short',
                year: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            openTimeSpan.textContent = formattedTime;
            
            // Set default planting date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('plantingDate').value = today;
            
            // Fetch tree species from API
            fetchTreeSpecies();
            
            // Get live location
            getLiveLocation();
            
            // Initialize upload button
            uploadPhotoBtn.addEventListener('click', function() {
                photoUpload.click();
            });
            
            // Handle photo upload
            photoUpload.addEventListener('change', handlePhotoUpload);
        });
        
        // Handle photo upload
        function handlePhotoUpload(e) {
            const file = e.target.files[0];
            if (file) {
                // Check file size (max 5MB)
                if (file.size > 5 * 1024 * 1024) {
                    showNotification('File size should be less than 5MB', 'error');
                    return;
                }
                
                // Check file type
                if (!file.type.match('image.*')) {
                    showNotification('Please select an image file', 'error');
                    return;
                }
                
                const reader = new FileReader();
                reader.onload = function(event) {
                    capturedPhoto = event.target.result;
                    cameraPreview.src = capturedPhoto;
                    photoDataInput.value = capturedPhoto;
                    
                    // Show preview
                    cameraPlaceholder.style.display = 'none';
                    cameraFeed.style.display = 'none';
                    cameraPreview.style.display = 'block';
                    photoCapturedBadge.style.display = 'block';
                    
                    photoInfo.textContent = "Photo uploaded: " + file.name + " (" + Math.round(file.size / 1024) + " KB)";
                    
                    // Enable/disable buttons
                    captureBtn.disabled = true;
                    retakeBtn.disabled = false;
                    startCameraBtn.disabled = true;
                    
                    showNotification('Photo uploaded successfully!', 'success');
                };
                reader.readAsDataURL(file);
            }
        }
        
        // Fetch tree species from API
        async function fetchTreeSpecies() {
            try {
                // For demo, we'll use a sample tree data
                useSampleTreeData();
                
                // Simulate API loading delay
                setTimeout(() => {
                    apiLoading.style.display = 'none';
                    apiStatus.textContent = `20 tree species loaded from database`;
                    apiSuccess.style.display = 'inline-block';
                    
                    showNotification('Tree species data loaded successfully!', 'success');
                }, 1500);
                
            } catch (error) {
                console.error('Error fetching tree species:', error);
                useSampleTreeData();
                
                apiLoading.style.display = 'none';
                apiError.style.display = 'inline-block';
                apiStatus.textContent = 'Using local tree database';
                
                showNotification('Using local tree database (API unavailable)', 'info');
            }
        }
        
        // Fallback function with sample tree data
        function useSampleTreeData() {
            const sampleTrees = [
                {id: "1", name: "Mango (Mangifera indica)"},
                {id: "2", name: "Neem (Azadirachta indica)"},
                {id: "3", name: "Banyan (Ficus benghalensis)"},
                {id: "4", name: "Peepal (Ficus religiosa)"},
                {id: "5", name: "Indian Gooseberry (Amla)"},
                {id: "6", name: "Sandalwood (Santalum album)"},
                {id: "7", name: "Ashoka (Saraca asoca)"},
                {id: "8", name: "Arjun (Terminalia arjuna)"},
                {id: "9", name: "Guava (Psidium guajava)"},
                {id: "10", name: "Coconut Palm (Cocos nucifera)"},
                {id: "11", name: "Banana (Musa paradisiaca)"},
                {id: "12", name: "Jackfruit (Artocarpus heterophyllus)"},
                {id: "13", name: "Teak (Tectona grandis)"},
                {id: "14", name: "Bamboo (Bambusoideae)"},
                {id: "15", name: "Tulsi (Ocimum tenuiflorum)"},
                {id: "16", name: "Jamun (Syzygium cumini)"},
                {id: "17", name: "Chiku (Manilkara zapota)"},
                {id: "18", name: "Pomegranate (Punica granatum)"},
                {id: "19", name: "Tamarind (Tamarindus indica)"},
                {id: "20", name: "Gulmohar (Delonix regia)"}
            ];
            
            // Clear loading option
            treeTypeSelect.innerHTML = '<option value="">Select a tree species</option>';
            
            // Add sample tree species
            sampleTrees.forEach(tree => {
                const option = document.createElement('option');
                option.value = tree.name;
                option.textContent = tree.name;
                treeTypeSelect.appendChild(option);
            });
            
            treeSpeciesData = sampleTrees;
        }
        
        // Get live location with reverse geocoding
        function getLiveLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    async (position) => {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;
                        
                        // Update display
                        latDisplay.textContent = lat.toFixed(6);
                        lngDisplay.textContent = lng.toFixed(6);
                        
                        // Update hidden inputs
                        latitudeInput.value = lat;
                        longitudeInput.value = lng;
                        
                        currentLocation = { lat, lng };
                        
                        locationStatus.textContent = "Location fetched! Getting address details...";
                        locationLoading.style.display = 'block';
                        
                        try {
                            const address = await reverseGeocode(lat, lng);
                            
                            // Update display
                            villageDisplay.textContent = address.village || address.town || address.city_district || "Not available";
                            cityDisplay.textContent = address.city || address.town || address.county || "Not available";
                            stateDisplay.textContent = address.state || "Not available";
                            countryDisplay.textContent = address.country || "Not available";
                            
                            // Update hidden inputs
                            document.getElementById('village').value = villageDisplay.textContent;
                            document.getElementById('city').value = cityDisplay.textContent;
                            document.getElementById('state').value = stateDisplay.textContent;
                            document.getElementById('country').value = countryDisplay.textContent;
                            
                            // Show address details
                            addressDetails.style.display = 'block';
                            locationStatus.textContent = `Location: ${address.village || address.town || address.city || address.state || 'Unknown location'}`;
                            locationLoading.style.display = 'none';
                            
                            showNotification('Location and address details fetched successfully!', 'success');
                            
                        } catch (error) {
                            // Set default values
                            villageDisplay.textContent = "Unknown";
                            cityDisplay.textContent = "Unknown";
                            stateDisplay.textContent = "Unknown";
                            countryDisplay.textContent = "Unknown";
                            
                            document.getElementById('village').value = "Unknown";
                            document.getElementById('city').value = "Unknown";
                            document.getElementById('state').value = "Unknown";
                            document.getElementById('country').value = "Unknown";
                            
                            addressDetails.style.display = 'block';
                            locationLoading.style.display = 'none';
                            
                            showNotification('Location fetched but address details unavailable', 'info');
                        }
                    },
                    (error) => {
                        console.error("Geolocation error:", error);
                        locationStatus.textContent = "Location access denied. Using default coordinates.";
                        
                        // Set default coordinates (New Delhi, India)
                        const defaultLat = 28.6139;
                        const defaultLng = 77.2090;
                        
                        // Update display
                        latDisplay.textContent = defaultLat;
                        lngDisplay.textContent = defaultLng;
                        
                        // Update hidden inputs
                        latitudeInput.value = defaultLat;
                        longitudeInput.value = defaultLng;
                        
                        villageDisplay.textContent = "New Delhi";
                        cityDisplay.textContent = "Delhi";
                        stateDisplay.textContent = "Delhi";
                        countryDisplay.textContent = "India";
                        
                        document.getElementById('village').value = "New Delhi";
                        document.getElementById('city').value = "Delhi";
                        document.getElementById('state').value = "Delhi";
                        document.getElementById('country').value = "India";
                        
                        addressDetails.style.display = 'block';
                        showNotification('Using default location (permission denied)', 'info');
                    },
                    {
                        enableHighAccuracy: true,
                        timeout: 10000,
                        maximumAge: 0
                    }
                );
            } else {
                locationStatus.textContent = "Geolocation not supported by browser.";
                
                // Set default coordinates
                const defaultLat = 28.6139;
                const defaultLng = 77.2090;
                
                latDisplay.textContent = defaultLat;
                lngDisplay.textContent = defaultLng;
                
                latitudeInput.value = defaultLat;
                longitudeInput.value = defaultLng;
                
                villageDisplay.textContent = "New Delhi";
                cityDisplay.textContent = "Delhi";
                stateDisplay.textContent = "Delhi";
                countryDisplay.textContent = "India";
                
                document.getElementById('village').value = "New Delhi";
                document.getElementById('city').value = "Delhi";
                document.getElementById('state').value = "Delhi";
                document.getElementById('country').value = "India";
                
                addressDetails.style.display = 'block';
                showNotification('Geolocation not supported by your browser', 'error');
            }
        }
        
        // Reverse geocoding function using OpenStreetMap Nominatim
        async function reverseGeocode(lat, lng) {
            try {
                const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`);
                
                if (!response.ok) {
                    throw new Error('Reverse geocoding failed');
                }
                
                const data = await response.json();
                
                if (data.address) {
                    return data.address;
                } else {
                    throw new Error('No address details found');
                }
            } catch (error) {
                console.error("Reverse geocoding error:", error);
                throw error;
            }
        }
        
        // Camera functionality - Start camera
        startCameraBtn.addEventListener('click', async function () {
            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: {
                        facingMode: 'environment',
                        width: { ideal: 1280 },
                        height: { ideal: 720 }
                    }
                });
                
                cameraFeed.srcObject = stream;
                cameraFeed.style.display = 'block';
                cameraPlaceholder.style.display = 'none';
                cameraPreview.style.display = 'none';
                photoCapturedBadge.style.display = 'none';
                
                captureBtn.disabled = false;
                retakeBtn.disabled = true;
                startCameraBtn.disabled = true;
                startCameraBtn.innerHTML = '<i class="fas fa-video"></i> Camera Active';
                isCameraActive = true;
                
                showNotification('Camera started successfully! Aim at the tree for a clear photo.', 'success');
            } catch (error) {
                console.error('Camera access error:', error);
                showNotification('Camera access denied or not available. You can upload a photo instead.', 'error');
                
                cameraPlaceholder.innerHTML = `
                    <i class="fas fa-tree"></i>
                    <span>Camera not available. Please use "Upload Photo" button.</span>
                `;
                
                startCameraBtn.disabled = true;
                isCameraActive = false;
            }
        });
        
        // Capture photo
        captureBtn.addEventListener('click', function () {
            if (isCameraActive && stream) {
                const canvas = document.createElement('canvas');
                canvas.width = cameraFeed.videoWidth;
                canvas.height = cameraFeed.videoHeight;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(cameraFeed, 0, 0, canvas.width, canvas.height);
                
                capturedPhoto = canvas.toDataURL('image/jpeg', 0.8);
                cameraPreview.src = capturedPhoto;
                photoDataInput.value = capturedPhoto;
                
                cameraFeed.pause();
                cameraFeed.style.display = 'none';
                
                photoInfo.textContent = "Photo captured successfully! Size: " + Math.round(capturedPhoto.length / 1024) + " KB";
            }
            
            cameraPreview.style.display = 'block';
            photoCapturedBadge.style.display = 'block';
            
            captureBtn.disabled = true;
            retakeBtn.disabled = false;
            
            showNotification('Photo captured successfully!', 'success');
        });
        
        // Retake photo
        retakeBtn.addEventListener('click', function () {
            cameraPreview.style.display = 'none';
            photoCapturedBadge.style.display = 'none';
            photoDataInput.value = '';
            capturedPhoto = null;
            
            captureBtn.disabled = false;
            retakeBtn.disabled = true;
            
            if (isCameraActive && stream) {
                cameraFeed.style.display = 'block';
                cameraFeed.play();
            } else {
                cameraPlaceholder.style.display = 'flex';
                cameraPlaceholder.innerHTML = `
                    <i class="fas fa-tree"></i>
                    <span>Camera not active. Click "Start Camera" to begin or "Upload Photo"</span>
                `;
            }
            
            photoInfo.textContent = "You can capture from camera or upload an existing photo";
            showNotification('Camera ready for a new photo.', 'info');
        });
        
        // Form submission
     
        // Function to reset form
        function resetForm() {
            treeForm.reset();
            
            // Reset planting date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('plantingDate').value = today;
            
            // Reset camera
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
                stream = null;
            }
            
            cameraPlaceholder.style.display = 'flex';
            cameraPlaceholder.innerHTML = `
                <i class="fas fa-tree"></i>
                <span>Camera not active. Click "Start Camera" to begin</span>
            `;
            cameraFeed.style.display = 'none';
            cameraPreview.style.display = 'none';
            photoCapturedBadge.style.display = 'none';
            startCameraBtn.disabled = false;
            startCameraBtn.innerHTML = '<i class="fas fa-video"></i> Start Camera';
            captureBtn.disabled = true;
            retakeBtn.disabled = true;
            capturedPhoto = null;
            photoDataInput.value = '';
            isCameraActive = false;
            photoInfo.textContent = "You can capture from camera or upload an existing photo";
            
            // Clear photo upload
            photoUpload.value = '';
        }
        
        // Form validation
        function validateForm() {
            let isValid = true;
            const requiredFields = treeForm.querySelectorAll('[required]');
            
            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach(el => el.remove());
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = '#e74c3c';
                    isValid = false;
                    
                    // Add error message
                    const errorMsg = document.createElement('span');
                    errorMsg.className = 'error-message';
                    errorMsg.textContent = 'This field is required';
                    field.parentNode.appendChild(errorMsg);
                } else {
                    field.style.borderColor = '#ddd';
                }
            });
            
            // Check if location is available
            if (!latitudeInput.value || !longitudeInput.value) {
                showNotification('Please wait for location to be fetched', 'error');
                isValid = false;
            }
            
            // Check if photo is captured or uploaded
            if (!photoDataInput.value && !photoUpload.files[0]) {
                showNotification('Please capture or upload a photo of the tree', 'error');
                isValid = false;
            }
            
            return isValid;
        }
        
        // Notification system
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.textContent = message;
            
            document.getElementById('notificationContainer').appendChild(notification);
            
            // Show notification
            setTimeout(() => {
                notification.classList.add('show');
            }, 10);
            
            // Hide after 5 seconds
            setTimeout(() => {
                notification.classList.remove('show');
                
                // Remove from DOM after animation
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 300);
            }, 5000);
        }
        
        // Prevent form submission on Enter key in textarea
        document.getElementById('notes').addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>