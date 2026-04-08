<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - People of Indian Society</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            box-sizing: border-box;
            font-family:serif;
        }
        
        body {
            background-color: var(--light);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        .register-container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-dark);
            overflow: hidden;
            min-height: 750px;
        }
        
        /* Left Panel */
        .left-panel {
            flex: 1;
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: var(--white);
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
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
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.08' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.4;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            position: relative;
            z-index: 2;
        }
        
        .logo-icon {
            font-size: 3.5rem;
            margin-right: 15px;
            color: var(--secondary);
        }
        
        .logo-text {
            font-size: 2.2rem;
            font-weight: 800;
        }
        
        .logo-text span {
            color: var(--secondary);
        }
        
        .left-panel h1 {
            font-size: 2.8rem;
            margin-bottom: 25px;
            line-height: 1.2;
            position: relative;
            z-index: 2;
        }
        
        .left-panel p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 40px;
            line-height: 1.6;
            position: relative;
            z-index: 2;
        }
        
        .benefits {
            position: relative;
            z-index: 2;
        }
        
        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .benefit-icon {
            font-size: 1.8rem;
            color: var(--secondary);
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .benefit-content h3 {
            font-size: 1.3rem;
            margin-bottom: 8px;
        }
        
        .benefit-content p {
            font-size: 0.95rem;
            opacity: 0.8;
            margin-bottom: 0;
        }
        
        /* Right Panel */
        .right-panel {
            flex: 1.2;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            overflow-y: auto;
        }
        
        .form-header {
            margin-bottom: 40px;
        }
        
        .form-header h2 {
            font-size: 2.2rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }
        
        .form-header p {
            color: var(--gray);
            font-size: 1.1rem;
        }
        
        .register-form {
            width: 100%;
        }
        
        .form-row {
            display: flex;
            gap: 25px;
            margin-bottom: 25px;
        }
        
        .form-group {
            flex: 1;
            margin-bottom: 25px;
        }
        
        .form-group.full-width {
            width: 100%;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--dark);
            font-size: 1rem;
        }
        
        label .required {
            color: var(--accent);
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
            font-size: 1.2rem;
            z-index: 1;
        }
        
        input, select, textarea {
            width: 100%;
            padding: 18px 20px 18px 55px;
            border: 2px solid var(--light-gray);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
            color: var(--dark);
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.1);
        }
        
        textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        .error {
            border-color: var(--accent) !important;
        }
        
        .error-message {
            color: var(--accent);
            font-size: 0.85rem;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .success-message {
            color: var(--primary);
            font-size: 0.85rem;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        /* Role Selection */
        .role-selection {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .role-option {
            text-align: center;
            padding: 25px 15px;
            border: 2px solid var(--light-gray);
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--white);
            position: relative;
        }
        
        .role-option:hover {
            transform: translateY(-5px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow);
        }
        
        .role-option.selected {
            border-color: var(--primary);
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.05), rgba(76, 175, 80, 0.1));
            box-shadow: var(--shadow);
        }
        
        .role-option.selected::before {
            content: '✓';
            position: absolute;
            top: 10px;
            right: 10px;
            width: 25px;
            height: 25px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .role-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            display: block;
        }
        
        .role-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
        }
        
        .role-desc {
            font-size: 0.85rem;
            color: var(--gray);
            line-height: 1.4;
        }
        
        /* Password Strength */
        .password-strength {
            margin-top: 10px;
        }
        
        .strength-meter {
            height: 6px;
            background: var(--light-gray);
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 5px;
        }
        
        .strength-fill {
            height: 100%;
            width: 0%;
            transition: all 0.3s ease;
            border-radius: 3px;
        }
        
        .strength-text {
            font-size: 0.85rem;
            text-align: right;
        }
        
        /* Terms & Conditions */
        .terms {
            margin: 30px 0;
            padding: 20px;
            background: var(--light);
            border-radius: 12px;
        }
        
        .terms-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .terms-checkbox input {
            width: 20px;
            height: 20px;
            margin-top: 3px;
            flex-shrink: 0;
        }
        
        .terms-text {
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        .terms-text a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .terms-text a:hover {
            text-decoration: underline;
        }
        
        /* Buttons */
        .form-buttons {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 18px 35px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            flex: 1;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(46, 125, 50, 0.4);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-3px);
        }
        
        .login-link {
            text-align: center;
            margin-top: 30px;
            color: var(--gray);
        }
        
        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-bottom: 50px;
        }
        
        .progress-steps::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--light-gray);
            transform: translateY(-50%);
            z-index: 1;
        }
        
        .step {
            position: relative;
            z-index: 2;
            text-align: center;
        }
        
        .step-circle {
            width: 50px;
            height: 50px;
            background: var(--white);
            border: 3px solid var(--light-gray);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 600;
            color: var(--gray);
            transition: all 0.3s ease;
        }
        
        .step.active .step-circle {
            background: var(--primary);
            border-color: var(--primary);
            color: var(--white);
        }
        
        .step.completed .step-circle {
            background: var(--secondary);
            border-color: var(--secondary);
            color: var(--white);
        }
        
        .step-label {
            font-size: 0.9rem;
            color: var(--gray);
            font-weight: 500;
        }
        
        .step.active .step-label {
            color: var(--primary);
            font-weight: 600;
        }
        
        /* Form Steps */
        .form-step {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        .form-step.active {
            display: block;
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
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
        
        .shake {
            animation: shake 0.5s ease;
        }
        
        /* Responsive Design */
        @media (max-width: 1100px) {
            .register-container {
                flex-direction: column;
                max-width: 800px;
            }
            
            .left-panel, .right-panel {
                padding: 40px 30px;
            }
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .role-selection {
                grid-template-columns: 1fr;
            }
            
            .form-buttons {
                flex-direction: column;
            }
            
            .progress-steps {
                flex-wrap: wrap;
                gap: 20px;
            }
            
            .step {
                flex: 1;
                min-width: 100px;
            }
            
            .step-circle {
                width: 40px;
                height: 40px;
            }
        }
        
        @media (max-width: 480px) {
            .left-panel h1 {
                font-size: 2.2rem;
            }
            
            .logo-text {
                font-size: 1.8rem;
            }
            
            .form-header h2 {
                font-size: 1.8rem;
            }
            
            input, select, textarea {
                padding: 15px 15px 15px 45px;
            }
        }
    </style>
</head>
<body onload="getLocation()">
    <div class="register-container">
        <!-- Left Panel - Information -->
        <div class="left-panel">
            <div class="logo">
                <i class="fas fa-seedling logo-icon"></i>
                <div class="logo-text">Green<span>India</span>Society</div>
            </div>
            
            <h1>Join Our Green Revolution</h1>
            <p>Register now to become part of India's largest tree plantation initiative. Together, we can create a greener, healthier future for generations to come.</p>
            
            <div class="benefits">
                <div class="benefit-item">
                    <i class="fas fa-tree benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Plant & Track Trees</h3>
                        <p>Request trees for your area and monitor their growth through our platform.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-hands-helping benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Volunteer Network</h3>
                        <p>Join thousands of volunteers working to make India greener.</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-chart-line benefit-icon"></i>
                    <div class="benefit-content">
                        <h3>Track Your Impact</h3>
                        <p>See real-time statistics of your environmental contribution.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - Registration Form -->
        <div class="right-panel">
            <!-- Progress Steps -->
            <div class="progress-steps">
                <div class="step active" data-step="1">
                    <div class="step-circle">1</div>
                    <div class="step-label">Account Details</div>
                </div>
                <div class="step" data-step="2">
                    <div class="step-circle">2</div>
                    <div class="step-label">Personal Info</div>
                </div>
                <div class="step" data-step="3">
                    <div class="step-circle">3</div>
                    <div class="step-label">Role Selection</div>
                </div>
                <div class="step" data-step="4">
                    <div class="step-circle">4</div>
                    <div class="step-label">Complete</div>
                </div>
            </div>
            
            <!-- Form Header -->
            <div class="form-header">
                <h2>Create Your Account</h2>
                <p>Fill in your details to join our green community</p>
            </div>
            
            <!-- Laravel Error Messages -->
            @if ($errors->any())
            <div style="background: #FF5722; color: white; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                <strong>Please fix the following errors:</strong>
                <ul style="margin-top: 10px; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            @if(session('success'))
            <div style="background: #4CAF50; color: white; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
            @endif
            
            <!-- Registration Form -->
            <form class="register-form" id="registrationForm" method="POST" action="/user_register">
                @csrf
                <!-- Step 1: Account Details -->
                <div class="form-step active" id="step1">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Email Address <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required>
                            </div>
                            <div class="error-message" id="email-error">
                                @error('email') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Password <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="password" name="password" placeholder="Create a strong password" required>
                            </div>
                            <div class="error-message" id="password-error">
                                @error('password') {{ $message }} @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Confirm Password <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="confirm-password" name="password_confirmation" placeholder="Re-enter your password" required>
                            </div>
                            <div class="error-message" id="confirm-password-error"></div>
                        </div>
                    </div>
                    
                    <div class="form-buttons">
                        <button type="button" class="btn btn-primary next-step" data-next="2">
                            Next <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Step 2: Personal Information -->
                <div class="form-step" id="step2">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" id="full-name" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your full name" required>
                            </div>
                            <div class="error-message" id="full-name-error">
                                @error('name') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Phone Number<span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-phone"></i>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number" required>
                            </div>
                            <div class="error-message" id="phone-error">
                                @error('phone') {{ $message }} @enderror
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <div class="input-with-icon">
                                <i class="fas fa-calendar"></i>
                                <input type="date" id="dob" name="dob" value="{{ old('dob') }}">
                            </div>
                            <div class="error-message" id="dob-error">
                                @error('dob') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-with-icon">
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" id="address" name="address" value="{{ old('address') }}" placeholder="Enter your address" readonly>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>City</label>
                            <div class="input-with-icon">
                                <i class="fas fa-city"></i>
                                <input type="text" id="city" name="city" value="{{ old('city') }}" placeholder="Enter your city" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>State</label>
                            <div class="input-with-icon">
                                <i class="fas fa-map"></i>
                                <select id="state" name="state" readonly>
                                    <option value="">Select State</option>
                                    <option value="Delhi" {{ old('state') == 'Delhi' ? 'selected' : '' }}>Delhi</option>
                                    <option value="Maharashtra" {{ old('state') == 'Maharashtra' ? 'selected' : '' }}>Maharashtra</option>
                                    <option value="Karnataka" {{ old('state') == 'Karnataka' ? 'selected' : '' }}>Karnataka</option>
                                    <option value="Tamil Nadu" {{ old('state') == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                                    <option value="Uttar Pradesh" {{ old('state') == 'Uttar Pradesh' ? 'selected' : '' }}>Uttar Pradesh</option>
                                    <option value="West Bengal" {{ old('state') == 'West Bengal' ? 'selected' : '' }}>West Bengal</option>
                                    <option value="Gujarat" {{ old('state') == 'Gujarat' ? 'selected' : '' }}>Gujarat</option>
                                    <option value="Rajasthan" {{ old('state') == 'Rajasthan' ? 'selected' : '' }}>Rajasthan</option>
                                    <option value="Punjab" {{ old('state') == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                                    <option value="Haryana" {{ old('state') == 'Haryana' ? 'selected' : '' }}>Haryana</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                   
                    
                    <input type="hidden" id="lat" name="latitude" value="{{ old('latitude') }}">
                    <input type="hidden" id="lng" name="longitude" value="{{ old('longitude') }}">

                    <div class="form-buttons">
                        <button type="button" class="btn btn-outline prev-step" data-prev="1">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn btn-primary next-step" data-next="3">
                            Next <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Step 3: Role Selection -->
                <div class="form-step" id="step3">
                    <div class="form-group full-width">
                        <label>Select Your Role <span class="required">*</span></label>
                        <p style="color: var(--gray); margin-bottom: 20px; font-size: 0.95rem;">Choose how you want to contribute to our green mission</p>
                        
                        <div class="role-selection">
                            <div class="role-option {{ old('role') == 'user' ? 'selected' : '' }}" data-role="user">
                                <i class="fas fa-user role-icon"></i>
                                <div class="role-title">General User</div>
                                <div class="role-desc">Request trees, track growth, participate in community activities</div>
                                <input type="radio" name="role" value="user" style="display: none;" {{ old('role') == 'user' ? 'checked' : '' }}>
                            </div>
                            
                            <div class="role-option {{ old('role') == 'volunteer' ? 'selected' : '' }}" data-role="volunteer">
                                <i class="fas fa-hands-helping role-icon"></i>
                                <div class="role-title">Volunteer</div>
                                <div class="role-desc">Plant trees, help with maintenance, organize drives</div>
                                <input type="radio" name="role" value="volunteer" style="display: none;" {{ old('role') == 'volunteer' ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="error-message" id="role-error">
                            @error('role') {{ $message }} @enderror
                        </div>
                    </div>
                    
                    <div class="terms">
                        <div class="terms-checkbox">
                            <input type="checkbox" id="terms" name="terms" value="1" {{ old('terms') ? 'checked' : '' }} required>
                            <div class="terms-text">
                                <label for="terms">I agree to the <a href="#" target="_blank">Terms and Conditions</a> and <a href="#" target="_blank">Privacy Policy</a> of Green India Society. I understand that my personal information will be processed in accordance with these policies.</label>
                            </div>
                        </div>
                        <div class="error-message" id="terms-error">
                            @error('terms') {{ $message }} @enderror
                        </div>
                    </div>
                    
                    <div class="form-buttons">
                        <button type="button" class="btn btn-outline prev-step" data-prev="2">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn btn-primary next-step" data-next="4">
                            Next <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Step 4: Review & Submit -->
                <div class="form-step" id="step4">
                    <div class="form-group full-width">
                        <h3 style="color: var(--primary); margin-bottom: 20px;">Review Your Information</h3>
                        
                        <div style="background: var(--light); padding: 25px; border-radius: 12px; margin-bottom: 30px;">
                            <div id="review-details">
                                Review details will be populated here
                            </div>
                        </div>
                        
                        <div class="terms-checkbox" style="margin-bottom: 20px;">
                            <input type="checkbox" id="newsletter" name="newsletter" value="1" {{ old('newsletter', 1) ? 'checked' : '' }}>
                            <label for="newsletter" style="font-weight: normal; color: var(--gray);">
                                Yes, I would like to receive updates about tree plantation drives, environmental tips, and community activities via email.
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-buttons">
                        <button type="button" class="btn btn-outline prev-step" data-prev="3">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check-circle"></i> Complete Registration
                        </button>
                    </div>
                </div>
            </form>
            
            <div class="login-link">
                Already have an account? <a href="login">Login here</a>
            </div>
        </div>
    </div>
    
    <script>
        let currentStep = 1;
        
        // Initialize form with old values on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Set role selection based on old value
            const oldRole = "{{ old('role') }}";
            if (oldRole) {
                document.querySelectorAll('.role-option').forEach(option => {
                    if (option.getAttribute('data-role') === oldRole) {
                        option.classList.add('selected');
                        option.querySelector('input').checked = true;
                    }
                });
            }
            
            // Show step with first error if any
            const firstErrorField = document.querySelector('.error-message:not(:empty)');
            if (firstErrorField) {
                const errorStep = firstErrorField.closest('.form-step');
                if (errorStep) {
                    const stepId = errorStep.id;
                    const stepNum = stepId.replace('step', '');
                    showStep(parseInt(stepNum));
                }
            }
        });
        
        // Show step
        function showStep(step) {
            document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
            document.getElementById('step' + step).classList.add('active');
            
            document.querySelectorAll('.step').forEach(s => {
                s.classList.remove('active');
                if (parseInt(s.getAttribute('data-step')) < step) {
                    s.classList.add('completed');
                } else {
                    s.classList.remove('completed');
                }
            });
            document.querySelector('.step[data-step="' + step + '"]').classList.add('active');
            
            currentStep = step;
            
            if (step === 4) {
                fillReview();
            }
        }
        
        // Next buttons
        document.querySelectorAll('.next-step').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const next = btn.getAttribute('data-next');
                if (validateStep(currentStep)) {
                    showStep(next);
                }
            });
        });
        
        // Back buttons
        document.querySelectorAll('.prev-step').forEach(btn => {
            btn.addEventListener('click', () => {
                const prev = btn.getAttribute('data-prev');
                showStep(prev);
            });
        });
        
        // Role select
        document.querySelectorAll('.role-option').forEach(option => {
            option.addEventListener('click', () => {
                document.querySelectorAll('.role-option').forEach(o => o.classList.remove('selected'));
                option.classList.add('selected');
                option.querySelector('input').checked = true;
                clearError('role-error');
            });
        });
        
        // Validation for each step
        function validateStep(step) {
            let isValid = true;
            
            if (step === 1) {
                const email = document.getElementById('email');
                const password = document.getElementById('password');
                const confirmPassword = document.getElementById('confirm-password');
                
                // Email validation
                if (!email.value) {
                    showError('email-error', 'Email is required');
                    email.classList.add('error');
                    isValid = false;
                } else if (!isValidEmail(email.value)) {
                    showError('email-error', 'Please enter a valid email address');
                    email.classList.add('error');
                    isValid = false;
                } else {
                    clearError('email-error');
                    email.classList.remove('error');
                }
                
                // Password validation
                if (!password.value) {
                    showError('password-error', 'Password is required');
                    password.classList.add('error');
                    isValid = false;
                } else if (password.value.length < 8) {
                    showError('password-error', 'Password must be at least 8 characters long');
                    password.classList.add('error');
                    isValid = false;
                } else {
                    clearError('password-error');
                    password.classList.remove('error');
                }
                
                // Confirm password validation
                if (!confirmPassword.value) {
                    showError('confirm-password-error', 'Please confirm your password');
                    confirmPassword.classList.add('error');
                    isValid = false;
                } else if (password.value !== confirmPassword.value) {
                    showError('confirm-password-error', 'Passwords do not match');
                    confirmPassword.classList.add('error');
                    isValid = false;
                } else {
                    clearError('confirm-password-error');
                    confirmPassword.classList.remove('error');
                }
            }
            
            if (step === 2) {
                const fullName = document.getElementById('full-name');
                const phone = document.getElementById('phone');
                
                if (!fullName.value) {
                    showError('full-name-error', 'Full name is required');
                    fullName.classList.add('error');
                    isValid = false;
                } else {
                    clearError('full-name-error');
                    fullName.classList.remove('error');
                }
                
                if (!phone.value) {
                    showError('phone-error', 'Phone number is required');
                    phone.classList.add('error');
                    isValid = false;
                } else if (!isValidPhone(phone.value)) {
                    showError('phone-error', 'Please enter a valid phone number');
                    phone.classList.add('error');
                    isValid = false;
                } else {
                    clearError('phone-error');
                    phone.classList.remove('error');
                }
            }
            
            if (step === 3) {
                const roleSelected = document.querySelector('input[name="role"]:checked');
                const terms = document.getElementById('terms');
                
                if (!roleSelected) {
                    showError('role-error', 'Please select a role');
                    isValid = false;
                } else {
                    clearError('role-error');
                }
                
                if (!terms.checked) {
                    showError('terms-error', 'You must agree to the terms and conditions');
                    isValid = false;
                } else {
                    clearError('terms-error');
                }

            }
                    fillReview();

            return isValid;
        }
        
        // Fill review data
        function fillReview() {
            const reviewDetails = document.getElementById('review-details');
            const formData = new FormData(document.getElementById('registrationForm'));
            
            let html = `
                <p><strong>Email:</strong> ${document.getElementById('email').value}</p>
                <p><strong>Full Name:</strong> ${document.getElementById('full-name').value}</p>
                <p><strong>Phone:</strong> ${document.getElementById('phone').value}</p>
                <p><strong>Address:</strong> ${document.getElementById('address').value || 'Not provided'}</p>
                <p><strong>City:</strong> ${document.getElementById('city').value || 'Not provided'}</p>
                <p><strong>State:</strong> ${document.getElementById('state').value || 'Not provided'}</p>
                <p><strong>Role:</strong> ${document.querySelector('input[name="role"]:checked')?.value || ''}</p>
            `;
            
            reviewDetails.innerHTML = html;
        }
        
        // Helper functions
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
        
        function isValidPhone(phone) {
            const re = /^[0-9]{10}$/;
            return re.test(phone.replace(/\D/g, ''));
        }
        
        function showError(elementId, message) {
            const element = document.getElementById(elementId);
            if (element) {
                element.textContent = message;
                element.style.display = 'flex';
            }
        }
        
        function clearError(elementId) {
            const element = document.getElementById(elementId);
            if (element) {
                element.textContent = '';
                element.style.display = 'none';
            }
        }
        
        // Location detection
        function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(async function(position) {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;

            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;

            try {
                const response = await fetch(
                    `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}`
                );
                const data = await response.json();

                if (data.address) {
                    document.getElementById('address').value = data.display_name || '';
                    document.getElementById('city').value =
                        data.address.city ||
                        data.address.town ||
                        data.address.village ||
                        '';
                    document.getElementById('state').value = data.address.state || '';

                    // State dropdown select
                    if (data.address.state) {
                        const stateSelect = document.getElementById('state');
                        for (let option of stateSelect.options) {
                            if (option.value === data.address.state) {
                                option.selected = true;
                                break;
                            }
                        }
                    }

                    showSuccess('Location detected successfully!');
                }
            } catch (error) {
                console.error('Error fetching location data:', error);
                showError('address-error', 'Location detected but address details could not be fetched');
            }
        }, function(error) {
            console.error('Geolocation error:', error);
            showError('address-error', 'Error detecting location: ' + error.message);
        });
    } else {
        alert("Geolocation not supported by your browser");
    }
}

        function showSuccess(message) {
            // Create a temporary success message
            const successDiv = document.createElement('div');
            successDiv.style.cssText = `
                background: #4CAF50;
                color: white;
                padding: 10px 15px;
                border-radius: 8px;
                margin: 10px 0;
                text-align: center;
            `;
            successDiv.textContent = message;
            
            const locationBtn = document.querySelector('button[onclick="getLocation()"]');
            locationBtn.parentNode.insertBefore(successDiv, locationBtn.nextSibling);
            
            setTimeout(() => successDiv.remove(), 3000);
        }
        
        // Real-time validation
        document.getElementById('email').addEventListener('blur', function() {
            if (this.value && !isValidEmail(this.value)) {
                showError('email-error', 'Please enter a valid email address');
                this.classList.add('error');
            } else {
                clearError('email-error');
                this.classList.remove('error');
            }
        });
        
        document.getElementById('phone').addEventListener('blur', function() {
            if (this.value && !isValidPhone(this.value)) {
                showError('phone-error', 'Please enter a valid 10-digit phone number');
                this.classList.add('error');
            } else {
                clearError('phone-error');
                this.classList.remove('error');
            }
        });
        
        document.getElementById('password').addEventListener('input', function() {
            if (this.value.length > 0 && this.value.length < 8) {
                showError('password-error', 'Password must be at least 8 characters');
                this.classList.add('error');
            } else {
                clearError('password-error');
                this.classList.remove('error');
            }
        });
        
        document.getElementById('confirm-password').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            if (this.value && password !== this.value) {
                showError('confirm-password-error', 'Passwords do not match');
                this.classList.add('error');
            } else {
                clearError('confirm-password-error');
                this.classList.remove('error');
            }
        });
    </script>
</body>
</html>