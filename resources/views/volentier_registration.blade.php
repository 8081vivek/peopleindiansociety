<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration - People of Indian Society</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2E7D32;
            --primary-light: #4CAF50;
            --primary-dark: #1B5E20;
            --secondary: #FF9800;
            --accent: #FF5722;
            --light: #F8FDF8;
            --dark: #212121;
            --gray: #757575;
            --light-gray: #EEEEEE;
            --white: #FFFFFF;
            --shadow: 0 10px 30px rgba(46, 125, 50, 0.1);
            --shadow-dark: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(76, 175, 80, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(255, 152, 0, 0.05) 0%, transparent 20%);
            min-height: 100vh;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        .volunteer-header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
        }
        
        .logo-icon {
            color: var(--primary);
            font-size: 2rem;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'Montserrat', sans-serif;
        }
        
        .logo-text span {
            color: var(--secondary);
        }
        
        .back-home {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s ease;
        }
        
        .back-home:hover {
            color: var(--primary-dark);
        }
        
        /* Main Content */
        .main-content {
            padding: 60px 0;
            min-height: calc(100vh - 150px);
        }
        
        .registration-container {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 60px;
            align-items: start;
        }
        
        @media (max-width: 992px) {
            .registration-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
        
        /* Registration Info */
        .registration-info {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: var(--white);
            padding: 40px;
            border-radius: 20px;
            box-shadow: var(--shadow-dark);
            position: sticky;
            top: 100px;
        }
        
        .info-header {
            margin-bottom: 30px;
        }
        
        .info-header h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .info-header p {
            opacity: 0.9;
            font-size: 1.1rem;
        }
        
        .benefits-list {
            list-style: none;
            margin-bottom: 40px;
        }
        
        .benefits-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .benefits-list i {
            color: var(--secondary);
            font-size: 1.2rem;
            margin-top: 3px;
            flex-shrink: 0;
        }
        
        .stats-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 25px;
            margin-top: 30px;
        }
        
        .stats-box h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .stat-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .stat-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        /* Registration Form */
        .registration-form-container {
            background-color: var(--white);
            border-radius: 20px;
            padding: 40px;
            box-shadow: var(--shadow-dark);
        }
        
        .form-header {
            margin-bottom: 30px;
            text-align: center;
        }
        
        .form-header h2 {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .form-header p {
            color: var(--gray);
        }
        
        .form-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            position: relative;
        }
        
        .form-progress::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: var(--light-gray);
            z-index: 1;
        }
        
        .progress-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .step-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--light-gray);
            color: var(--gray);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .progress-step.active .step-number {
            background-color: var(--primary);
            color: var(--white);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }
        
        .progress-step.completed .step-number {
            background-color: var(--secondary);
            color: var(--white);
        }
        
        .step-label {
            font-size: 0.9rem;
            color: var(--gray);
            font-weight: 500;
        }
        
        .progress-step.active .step-label {
            color: var(--primary);
            font-weight: 600;
        }
        
        .form-step {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        .form-step.active {
            display: block;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark);
            font-weight: 500;
        }
        
        .form-group.required label::after {
            content: ' *';
            color: #e53935;
        }
        
        .form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid var(--light-gray);
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: var(--white);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.1);
        }
        
        .form-control.error {
            border-color: #e53935;
        }
        
        .error-message {
            color: #e53935;
            font-size: 0.85rem;
            margin-top: 5px;
            display: none;
        }
        
        .error-message.show {
            display: block;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }
        
        .select-wrapper {
            position: relative;
        }
        
        .select-wrapper::after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            pointer-events: none;
        }
        
        select.form-control {
            appearance: none;
            cursor: pointer;
        }
        
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 15px;
        }
        
        .checkbox-group input[type="checkbox"] {
            margin-top: 5px;
            flex-shrink: 0;
        }
        
        .checkbox-group label {
            margin-bottom: 0;
            font-weight: normal;
            cursor: pointer;
        }
        
        .terms-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .terms-link:hover {
            text-decoration: underline;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid var(--light-gray);
        }
        
        .btn {
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }
        
        .btn-primary:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(46, 125, 50, 0.4);
        }
        
        .btn-secondary {
            background: linear-gradient(135deg, var(--secondary), #FFB74D);
            color: var(--white);
            box-shadow: 0 5px 15px rgba(255, 152, 0, 0.3);
        }
        
        .btn-secondary:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 152, 0, 0.4);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .btn-outline:hover:not(:disabled) {
            background-color: var(--primary);
            color: var(--white);
            transform: translateY(-3px);
        }
        
        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
            box-shadow: none !important;
        }
        
        .success-message {
            text-align: center;
            padding: 40px 20px;
            display: none;
        }
        
        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            margin: 0 auto 30px;
            box-shadow: 0 10px 30px rgba(46, 125, 50, 0.3);
        }
        
        .success-message h2 {
            color: var(--primary);
            font-size: 2rem;
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .success-message p {
            color: var(--gray);
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Footer */
        .volunteer-footer {
            background-color: var(--primary-dark);
            color: var(--white);
            padding: 40px 0 20px;
            margin-top: 60px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-section h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .footer-section p {
            opacity: 0.8;
            line-height: 1.8;
        }
        
        .contact-info p {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            opacity: 0.8;
        }
        
        .contact-info i {
            margin-right: 10px;
            color: var(--secondary);
            width: 20px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.9rem;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes successPulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
        
        .success-pulse {
            animation: successPulse 1s ease;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .registration-info, .registration-form-container {
                padding: 30px;
            }
            
            .info-header h1 {
                font-size: 1.8rem;
            }
            
            .form-header h2 {
                font-size: 1.6rem;
            }
            
            .btn {
                padding: 12px 25px;
                font-size: 0.95rem;
            }
        }
        
        @media (max-width: 576px) {
            .registration-info, .registration-form-container {
                padding: 25px 20px;
            }
            
            .form-actions {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
            }
            
            .form-progress {
                margin-bottom: 30px;
            }
            
            .step-label {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="volunteer-header">
        <div class="container header-container">
            <a href="index.html" class="logo">
                <i class="fas fa-seedling logo-icon"></i>
                <div class="logo-text">Green<span>India</span>Initiative</div>
            </a>
            <a href="index.html" class="back-home">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="registration-container">
                <!-- Registration Information -->
                <div class="registration-info">
                    <div class="info-header">
                        <h1>Become a Green Volunteer</h1>
                        <p>Join our growing community of environmental champions and make a real difference in India's green future.</p>
                    </div>
                    
                    <ul class="benefits-list">
                        <li>
                            <i class="fas fa-certificate"></i>
                            <div>
                                <h4>Earn Certificates</h4>
                                <p>Get recognized for your contribution with volunteer certificates.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-users"></i>
                            <div>
                                <h4>Join a Community</h4>
                                <p>Connect with like-minded individuals passionate about the environment.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-tree"></i>
                            <div>
                                <h4>Hands-on Experience</h4>
                                <p>Participate in tree plantation drives and environmental workshops.</p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-chart-line"></i>
                            <div>
                                <h4>Track Your Impact</h4>
                                <p>Monitor the trees you've planted and your environmental contribution.</p>
                            </div>
                        </li>
                    </ul>
                    
                    <div class="stats-box">
                        <h3>Our Volunteer Community</h3>
                        <div class="stat-item">
                            <span>Active Volunteers</span>
                            <span>8,942</span>
                        </div>
                        <div class="stat-item">
                            <span>Trees Planted</span>
                            <span>125,847+</span>
                        </div>
                        <div class="stat-item">
                            <span>Cities Covered</span>
                            <span>147</span>
                        </div>
                    </div>
                </div>
                
                <!-- Registration Form -->
                <div class="registration-form-container">
                    <!-- Progress Steps -->
                    <div class="form-progress">
                        <div class="progress-step active" id="step1">
                            <div class="step-number">1</div>
                            <div class="step-label">Personal Info</div>
                        </div>
                        <div class="progress-step" id="step2">
                            <div class="step-number">2</div>
                            <div class="step-label">Location & Skills</div>
                        </div>
                        <div class="progress-step" id="step3">
                            <div class="step-number">3</div>
                            <div class="step-label">Availability</div>
                        </div>
                        <div class="progress-step" id="step4">
                            <div class="step-number">4</div>
                            <div class="step-label">Review & Submit</div>
                        </div>
                    </div>
                    
                    <!-- Success Message (Hidden by default) -->
                    <div class="success-message" id="successMessage">
                        <div class="success-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <h2>Registration Successful!</h2>
                        <p>Thank you for joining the Green India Initiative as a volunteer. We've sent a confirmation email with further instructions. Our team will contact you within 2-3 business days.</p>
                        <div style="display: flex; gap: 15px; justify-content: center; margin-top: 30px;">
                            <a href="volunteer-dashboard.html" class="btn btn-primary">
                                <i class="fas fa-tachometer-alt"></i> Go to Dashboard
                            </a>
                            <a href="index.html" class="btn btn-outline">
                                <i class="fas fa-home"></i> Back to Home
                            </a>
                        </div>
                    </div>
                    
                    <!-- Step 1: Personal Information -->
                    <form id="volunteerForm" class="form-step active" data-step="1">
                        <div class="form-header">
                            <h2>Personal Information</h2>
                            <p>Tell us about yourself</p>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group required">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" class="form-control" required>
                                <div class="error-message" id="firstNameError">Please enter your first name</div>
                            </div>
                            
                            <div class="form-group required">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" class="form-control" required>
                                <div class="error-message" id="lastNameError">Please enter your last name</div>
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                            <div class="error-message" id="emailError">Please enter a valid email address</div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group required">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" class="form-control" required>
                                <div class="error-message" id="phoneError">Please enter a valid phone number</div>
                            </div>
                            
                            <div class="form-group required">
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" class="form-control" required>
                                <div class="error-message" id="dobError">You must be at least 16 years old</div>
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label for="gender">Gender</label>
                            <div class="select-wrapper">
                                <select id="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                    <option value="prefer-not-to-say">Prefer not to say</option>
                                </select>
                            </div>
                            <div class="error-message" id="genderError">Please select your gender</div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn btn-outline" disabled>Previous</button>
                            <button type="button" class="btn btn-primary" id="nextStep1">Next Step</button>
                        </div>
                    </form>
                    
                    <!-- Step 2: Location & Skills -->
                    <form class="form-step" data-step="2">
                        <div class="form-header">
                            <h2>Location & Skills</h2>
                            <p>Where are you located and what skills do you have?</p>
                        </div>
                        
                        <div class="form-group required">
                            <label for="address">Full Address</label>
                            <textarea id="address" class="form-control" rows="3" required></textarea>
                            <div class="error-message" id="addressError">Please enter your address</div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group required">
                                <label for="city">City</label>
                                <input type="text" id="city" class="form-control" required>
                                <div class="error-message" id="cityError">Please enter your city</div>
                            </div>
                            
                            <div class="form-group required">
                                <label for="state">State</label>
                                <div class="select-wrapper">
                                    <select id="state" class="form-control" required>
                                        <option value="">Select State</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="mumbai">Maharashtra</option>
                                        <option value="karnataka">Karnataka</option>
                                        <option value="tamilnadu">Tamil Nadu</option>
                                        <option value="westbengal">West Bengal</option>
                                        <option value="gujarat">Gujarat</option>
                                        <option value="rajasthan">Rajasthan</option>
                                        <option value="up">Uttar Pradesh</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="error-message" id="stateError">Please select your state</div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group required">
                                <label for="pincode">PIN Code</label>
                                <input type="text" id="pincode" class="form-control" required maxlength="6">
                                <div class="error-message" id="pincodeError">Please enter a valid 6-digit PIN code</div>
                            </div>
                            
                            <div class="form-group">
                                <label for="language">Primary Language</label>
                                <div class="select-wrapper">
                                    <select id="language" class="form-control">
                                        <option value="">Select Language</option>
                                        <option value="hindi">Hindi</option>
                                        <option value="english">English</option>
                                        <option value="bengali">Bengali</option>
                                        <option value="tamil">Tamil</option>
                                        <option value="telugu">Telugu</option>
                                        <option value="marathi">Marathi</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Skills & Experience (Select all that apply)</label>
                            <div class="checkbox-group">
                                <input type="checkbox" id="skillPlanting" value="tree-planting">
                                <label for="skillPlanting">Tree Planting Experience</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="skillGardening" value="gardening">
                                <label for="skillGardening">Gardening/Nursery Experience</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="skillTeaching" value="teaching">
                                <label for="skillTeaching">Teaching/Workshop Facilitation</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="skillLeadership" value="leadership">
                                <label for="skillLeadership">Team Leadership</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="skillSocialMedia" value="social-media">
                                <label for="skillSocialMedia">Social Media/Content Creation</label>
                            </div>
                            <div class="checkbox-group">
                                <input type="checkbox" id="skillOther" value="other">
                                <label for="skillOther">Other (please specify in notes)</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="notes">Additional Notes</label>
                            <textarea id="notes" class="form-control" rows="3" placeholder="Any additional information about your skills, experience, or motivation to volunteer..."></textarea>
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn btn-outline" id="prevStep2">Previous</button>
                            <button type="button" class="btn btn-primary" id="nextStep2">Next Step</button>
                        </div>
                    </form>
                    
                    <!-- Step 3: Availability -->
                    <form class="form-step" data-step="3">
                        <div class="form-header">
                            <h2>Availability & Preferences</h2>
                            <p>When are you available to volunteer?</p>
                        </div>
                        
                        <div class="form-group required">
                            <label>Preferred Days</label>
                            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 15px;">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="dayWeekday" value="weekday">
                                    <label for="dayWeekday">Weekdays</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="dayWeekend" value="weekend">
                                    <label for="dayWeekend">Weekends</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="dayFlexible" value="flexible">
                                    <label for="dayFlexible">Flexible</label>
                                </div>
                            </div>
                            <div class="error-message" id="daysError">Please select at least one option</div>
                        </div>
                        
                        <div class="form-group required">
                            <label for="timeCommitment">Time Commitment per Month</label>
                            <div class="select-wrapper">
                                <select id="timeCommitment" class="form-control" required>
                                    <option value="">Select Commitment</option>
                                    <option value="1-5">1-5 hours</option>
                                    <option value="6-10">6-10 hours</option>
                                    <option value="11-20">11-20 hours</option>
                                    <option value="21+">21+ hours</option>
                                    <option value="flexible">Flexible/Varies</option>
                                </select>
                            </div>
                            <div class="error-message" id="commitmentError">Please select your time commitment</div>
                        </div>
                        
                        <div class="form-group">
                            <label>Areas of Interest (Select all that apply)</label>
                            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 15px;">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="interestPlanting" value="planting">
                                    <label for="interestPlanting">Tree Planting Drives</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="interestAwareness" value="awareness">
                                    <label for="interestAwareness">Environmental Awareness</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="interestWorkshop" value="workshop">
                                    <label for="interestWorkshop">Workshop Facilitation</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="interestCoordination" value="coordination">
                                    <label for="interestCoordination">Event Coordination</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="interestSocial" value="social-media">
                                    <label for="interestSocial">Social Media Promotion</label>
                                </div>
                                <div class="checkbox-group">
                                    <input type="checkbox" id="interestFundraising" value="fundraising">
                                    <label for="interestFundraising">Fundraising</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label>How did you hear about us?</label>
                            <div class="select-wrapper">
                                <select id="referralSource" class="form-control" required>
                                    <option value="">Select Source</option>
                                    <option value="social-media">Social Media</option>
                                    <option value="friend">Friend/Family</option>
                                    <option value="website">Website</option>
                                    <option value="event">Event/Workshop</option>
                                    <option value="news">News Article</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="error-message" id="referralError">Please select how you heard about us</div>
                        </div>
                        
                        <div class="form-group required">
                            <div class="checkbox-group">
                                <input type="checkbox" id="terms" required>
                                <label for="terms">I agree to the <a href="terms.html" class="terms-link" target="_blank">Terms & Conditions</a> and <a href="privacy.html" class="terms-link" target="_blank">Privacy Policy</a></label>
                            </div>
                            <div class="error-message" id="termsError">You must agree to the terms and conditions</div>
                        </div>
                        
                        <div class="form-group required">
                            <div class="checkbox-group">
                                <input type="checkbox" id="communications" required>
                                <label for="communications">I agree to receive communications about volunteer opportunities and updates</label>
                            </div>
                            <div class="error-message" id="communicationsError">You must agree to receive communications</div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn btn-outline" id="prevStep3">Previous</button>
                            <button type="button" class="btn btn-primary" id="nextStep3">Review & Submit</button>
                        </div>
                    </form>
                    
                    <!-- Step 4: Review & Submit -->
                    <form class="form-step" data-step="4">
                        <div class="form-header">
                            <h2>Review Your Information</h2>
                            <p>Please review all details before submitting</p>
                        </div>
                        
                        <div class="review-section">
                            <h3 style="color: var(--primary); margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid var(--light-gray);">Personal Information</h3>
                            <div id="reviewPersonal" style="margin-bottom: 30px;"></div>
                            
                            <h3 style="color: var(--primary); margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid var(--light-gray);">Location & Skills</h3>
                            <div id="reviewLocation" style="margin-bottom: 30px;"></div>
                            
                            <h3 style="color: var(--primary); margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid var(--light-gray);">Availability</h3>
                            <div id="reviewAvailability"></div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="button" class="btn btn-outline" id="prevStep4">Previous</button>
                            <button type="button" class="btn btn-secondary" id="submitForm">
                                <i class="fas fa-paper-plane"></i> Submit Registration
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="volunteer-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Green India Initiative</h3>
                    <p>A nationwide movement to create a greener, healthier India through community-driven tree plantation projects.</p>
                </div>
                
                <div class="footer-section contact-info">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Green India Initiative, New Delhi, India</p>
                    <p><i class="fas fa-phone"></i> +91 1800-123-4567</p>
                    <p><i class="fas fa-envelope"></i> volunteers@greenindia.org</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="index.html" style="color: white; text-decoration: none;">Home</a></p>
                    <p><a href="about.html" style="color: white; text-decoration: none;">About Us</a></p>
                    <p><a href="volunteer.html" style="color: white; text-decoration: none;">Volunteer Program</a></p>
                    <p><a href="contact.html" style="color: white; text-decoration: none;">Contact</a></p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Green India Initiative. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Form Data Storage
        let formData = {
            personal: {},
            location: {},
            availability: {}
        };

        // DOM Elements
        const steps = document.querySelectorAll('.form-step');
        const progressSteps = document.querySelectorAll('.progress-step');
        const successMessage = document.getElementById('successMessage');
        const forms = document.querySelectorAll('form.form-step');
        const submitBtn = document.getElementById('submitForm');
        
        // Navigation Functions
        function showStep(stepNumber) {
            // Hide all steps
            steps.forEach(step => {
                step.classList.remove('active');
            });
            
            // Show current step
            const currentStep = document.querySelector(`.form-step[data-step="${stepNumber}"]`);
            if (currentStep) {
                currentStep.classList.add('active');
            }
            
            // Update progress indicators
            progressSteps.forEach((step, index) => {
                if (index < stepNumber) {
                    step.classList.add('completed');
                    step.classList.remove('active');
                } else if (index === stepNumber - 1) {
                    step.classList.add('active');
                    step.classList.remove('completed');
                } else {
                    step.classList.remove('active', 'completed');
                }
            });
            
            // Scroll to top of form
            document.querySelector('.registration-form-container').scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start' 
            });
        }
        
        // Validation Functions
        function validateStep1() {
            let isValid = true;
            
            // First Name
            const firstName = document.getElementById('firstName');
            const firstNameError = document.getElementById('firstNameError');
            if (!firstName.value.trim()) {
                showError(firstName, firstNameError, 'Please enter your first name');
                isValid = false;
            } else {
                clearError(firstName, firstNameError);
            }
            
            // Last Name
            const lastName = document.getElementById('lastName');
            const lastNameError = document.getElementById('lastNameError');
            if (!lastName.value.trim()) {
                showError(lastName, lastNameError, 'Please enter your last name');
                isValid = false;
            } else {
                clearError(lastName, lastNameError);
            }
            
            // Email
            const email = document.getElementById('email');
            const emailError = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim()) {
                showError(email, emailError, 'Please enter your email address');
                isValid = false;
            } else if (!emailRegex.test(email.value)) {
                showError(email, emailError, 'Please enter a valid email address');
                isValid = false;
            } else {
                clearError(email, emailError);
            }
            
            // Phone
            const phone = document.getElementById('phone');
            const phoneError = document.getElementById('phoneError');
            const phoneRegex = /^[0-9]{10}$/;
            if (!phone.value.trim()) {
                showError(phone, phoneError, 'Please enter your phone number');
                isValid = false;
            } else if (!phoneRegex.test(phone.value.replace(/\D/g, ''))) {
                showError(phone, phoneError, 'Please enter a valid 10-digit phone number');
                isValid = false;
            } else {
                clearError(phone, phoneError);
            }
            
            // Date of Birth
            const dob = document.getElementById('dob');
            const dobError = document.getElementById('dobError');
            if (!dob.value) {
                showError(dob, dobError, 'Please enter your date of birth');
                isValid = false;
            } else {
                const birthDate = new Date(dob.value);
                const today = new Date();
                const age = today.getFullYear() - birthDate.getFullYear();
                const monthDiff = today.getMonth() - birthDate.getMonth();
                
                if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                
                if (age < 16) {
                    showError(dob, dobError, 'You must be at least 16 years old to volunteer');
                    isValid = false;
                } else {
                    clearError(dob, dobError);
                }
            }
            
            // Gender
            const gender = document.getElementById('gender');
            const genderError = document.getElementById('genderError');
            if (!gender.value) {
                showError(gender, genderError, 'Please select your gender');
                isValid = false;
            } else {
                clearError(gender, genderError);
            }
            
            if (isValid) {
                // Save data
                formData.personal = {
                    firstName: firstName.value.trim(),
                    lastName: lastName.value.trim(),
                    email: email.value.trim(),
                    phone: phone.value.trim(),
                    dob: dob.value,
                    gender: gender.value
                };
            }
            
            return isValid;
        }
        
        function validateStep2() {
            let isValid = true;
            
            // Address
            const address = document.getElementById('address');
            const addressError = document.getElementById('addressError');
            if (!address.value.trim()) {
                showError(address, addressError, 'Please enter your address');
                isValid = false;
            } else {
                clearError(address, addressError);
            }
            
            // City
            const city = document.getElementById('city');
            const cityError = document.getElementById('cityError');
            if (!city.value.trim()) {
                showError(city, cityError, 'Please enter your city');
                isValid = false;
            } else {
                clearError(city, cityError);
            }
            
            // State
            const state = document.getElementById('state');
            const stateError = document.getElementById('stateError');
            if (!state.value) {
                showError(state, stateError, 'Please select your state');
                isValid = false;
            } else {
                clearError(state, stateError);
            }
            
            // PIN Code
            const pincode = document.getElementById('pincode');
            const pincodeError = document.getElementById('pincodeError');
            const pincodeRegex = /^[0-9]{6}$/;
            if (!pincode.value.trim()) {
                showError(pincode, pincodeError, 'Please enter your PIN code');
                isValid = false;
            } else if (!pincodeRegex.test(pincode.value)) {
                showError(pincode, pincodeError, 'Please enter a valid 6-digit PIN code');
                isValid = false;
            } else {
                clearError(pincode, pincodeError);
            }
            
            // Skills checkboxes
            const skills = [];
            if (document.getElementById('skillPlanting').checked) skills.push('Tree Planting');
            if (document.getElementById('skillGardening').checked) skills.push('Gardening');
            if (document.getElementById('skillTeaching').checked) skills.push('Teaching');
            if (document.getElementById('skillLeadership').checked) skills.push('Leadership');
            if (document.getElementById('skillSocialMedia').checked) skills.push('Social Media');
            if (document.getElementById('skillOther').checked) skills.push('Other');
            
            if (isValid) {
                // Save data
                formData.location = {
                    address: address.value.trim(),
                    city: city.value.trim(),
                    state: state.value,
                    pincode: pincode.value.trim(),
                    language: document.getElementById('language').value,
                    skills: skills,
                    notes: document.getElementById('notes').value.trim()
                };
            }
            
            return isValid;
        }
        
        function validateStep3() {
            let isValid = true;
            
            // Preferred Days
            const dayWeekday = document.getElementById('dayWeekday');
            const dayWeekend = document.getElementById('dayWeekend');
            const dayFlexible = document.getElementById('dayFlexible');
            const daysError = document.getElementById('daysError');
            
            if (!dayWeekday.checked && !dayWeekend.checked && !dayFlexible.checked) {
                showError(null, daysError, 'Please select at least one option');
                isValid = false;
            } else {
                clearError(null, daysError);
            }
            
            // Time Commitment
            const timeCommitment = document.getElementById('timeCommitment');
            const commitmentError = document.getElementById('commitmentError');
            if (!timeCommitment.value) {
                showError(timeCommitment, commitmentError, 'Please select your time commitment');
                isValid = false;
            } else {
                clearError(timeCommitment, commitmentError);
            }
            
            // Areas of Interest
            const interests = [];
            if (document.getElementById('interestPlanting').checked) interests.push('Tree Planting');
            if (document.getElementById('interestAwareness').checked) interests.push('Awareness');
            if (document.getElementById('interestWorkshop').checked) interests.push('Workshops');
            if (document.getElementById('interestCoordination').checked) interests.push('Coordination');
            if (document.getElementById('interestSocial').checked) interests.push('Social Media');
            if (document.getElementById('interestFundraising').checked) interests.push('Fundraising');
            
            // Referral Source
            const referralSource = document.getElementById('referralSource');
            const referralError = document.getElementById('referralError');
            if (!referralSource.value) {
                showError(referralSource, referralError, 'Please select how you heard about us');
                isValid = false;
            } else {
                clearError(referralSource, referralError);
            }
            
            // Terms
            const terms = document.getElementById('terms');
            const termsError = document.getElementById('termsError');
            if (!terms.checked) {
                showError(terms, termsError, 'You must agree to the terms and conditions');
                isValid = false;
            } else {
                clearError(terms, termsError);
            }
            
            // Communications
            const communications = document.getElementById('communications');
            const communicationsError = document.getElementById('communicationsError');
            if (!communications.checked) {
                showError(communications, communicationsError, 'You must agree to receive communications');
                isValid = false;
            } else {
                clearError(communications, communicationsError);
            }
            
            if (isValid) {
                // Save data
                const days = [];
                if (dayWeekday.checked) days.push('Weekdays');
                if (dayWeekend.checked) days.push('Weekends');
                if (dayFlexible.checked) days.push('Flexible');
                
                formData.availability = {
                    preferredDays: days,
                    timeCommitment: timeCommitment.value,
                    interests: interests,
                    referralSource: referralSource.value
                };
                
                // Generate review
                generateReview();
            }
            
            return isValid;
        }
        
        function showError(input, errorElement, message) {
            if (input) {
                input.classList.add('error');
            }
            errorElement.textContent = message;
            errorElement.classList.add('show');
        }
        
        function clearError(input, errorElement) {
            if (input) {
                input.classList.remove('error');
            }
            errorElement.classList.remove('show');
        }
        
        // Generate Review Content
        function generateReview() {
            const personal = formData.personal;
            const location = formData.location;
            const availability = formData.availability;
            
            // Personal Information
            const personalReview = document.getElementById('reviewPersonal');
            personalReview.innerHTML = `
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Name:</strong>
                    <span>${personal.firstName} ${personal.lastName}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Email:</strong>
                    <span>${personal.email}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Phone:</strong>
                    <span>${personal.phone}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Date of Birth:</strong>
                    <span>${new Date(personal.dob).toLocaleDateString('en-IN')}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px;">
                    <strong>Gender:</strong>
                    <span>${personal.gender.charAt(0).toUpperCase() + personal.gender.slice(1)}</span>
                </div>
            `;
            
            // Location & Skills
            const locationReview = document.getElementById('reviewLocation');
            locationReview.innerHTML = `
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Address:</strong>
                    <span>${location.address}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>City:</strong>
                    <span>${location.city}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>State:</strong>
                    <span>${location.state.charAt(0).toUpperCase() + location.state.slice(1)}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>PIN Code:</strong>
                    <span>${location.pincode}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Language:</strong>
                    <span>${location.language ? location.language.charAt(0).toUpperCase() + location.language.slice(1) : 'Not specified'}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Skills:</strong>
                    <span>${location.skills.length > 0 ? location.skills.join(', ') : 'None specified'}</span>
                </div>
                ${location.notes ? `
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Notes:</strong>
                    <span>${location.notes}</span>
                </div>
                ` : ''}
            `;
            
            // Availability
            const availabilityReview = document.getElementById('reviewAvailability');
            availabilityReview.innerHTML = `
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Preferred Days:</strong>
                    <span>${availability.preferredDays.join(', ')}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Time Commitment:</strong>
                    <span>${availability.timeCommitment} hours per month</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px; margin-bottom: 10px;">
                    <strong>Areas of Interest:</strong>
                    <span>${availability.interests.length > 0 ? availability.interests.join(', ') : 'None specified'}</span>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px;">
                    <strong>How you heard about us:</strong>
                    <span>${availability.referralSource.charAt(0).toUpperCase() + availability.referralSource.slice(1)}</span>
                </div>
            `;
        }
        
        // Form Submission
        function submitForm() {
            // Simulate API call
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            submitBtn.disabled = true;
            
            // In a real application, you would send this data to your backend
            // For demo purposes, we'll simulate a successful submission
            setTimeout(() => {
                // Hide all forms
                forms.forEach(form => form.style.display = 'none');
                
                // Show success message
                successMessage.style.display = 'block';
                successMessage.classList.add('success-pulse');
                
                // Here you would typically:
                // 1. Send data to your backend API
                // 2. Show appropriate success/error message
                // 3. Redirect or update UI accordingly
                
                console.log('Form data submitted:', formData);
                
                // In a real application, you might want to:
                // fetch('/api/volunteers/register', {
                //     method: 'POST',
                //     headers: {
                //         'Content-Type': 'application/json',
                //     },
                //     body: JSON.stringify(formData)
                // })
                // .then(response => response.json())
                // .then(data => {
                //     // Handle response
                // })
                // .catch(error => {
                //     // Handle error
                // });
                
            }, 2000);
        }
        
        // Event Listeners
        document.getElementById('nextStep1').addEventListener('click', () => {
            if (validateStep1()) {
                showStep(2);
            }
        });
        
        document.getElementById('nextStep2').addEventListener('click', () => {
            if (validateStep2()) {
                showStep(3);
            }
        });
        
        document.getElementById('nextStep3').addEventListener('click', () => {
            if (validateStep3()) {
                showStep(4);
            }
        });
        
        document.getElementById('prevStep2').addEventListener('click', () => {
            showStep(1);
        });
        
        document.getElementById('prevStep3').addEventListener('click', () => {
            showStep(2);
        });
        
        document.getElementById('prevStep4').addEventListener('click', () => {
            showStep(3);
        });
        
        submitBtn.addEventListener('click', submitForm);
        
        // Input Formatting
        document.getElementById('phone').addEventListener('input', function(e) {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
        });
        
        document.getElementById('pincode').addEventListener('input', function(e) {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
        });
        
        // Form auto-save on input change
        const inputs = document.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('change', function() {
                // Save form data to localStorage for recovery
                localStorage.setItem('volunteerFormData', JSON.stringify(formData));
            });
        });
        
        // Load saved data if exists
        window.addEventListener('load', () => {
            const savedData = localStorage.getItem('volunteerFormData');
            if (savedData) {
                formData = JSON.parse(savedData);
                // You could populate the form with saved data here
            }
            
            // Set max date for DOB (16 years ago)
            const today = new Date();
            const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate());
            const maxDate = new Date(today.getFullYear() - 16, today.getMonth(), today.getDate());
            
            const dobInput = document.getElementById('dob');
            dobInput.min = minDate.toISOString().split('T')[0];
            dobInput.max = maxDate.toISOString().split('T')[0];
        });
    </script>
</body>
</html>