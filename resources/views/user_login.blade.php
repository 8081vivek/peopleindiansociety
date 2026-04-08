<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - People of Indian Society</title>
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
        
        .login-container {
            width: 100%;
            max-width: 500px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-dark);
            overflow: hidden;
        }
        
        /* Header Section */
        .header-section {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: var(--white);
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .header-section::before {
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
            justify-content: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }
        
        .logo-icon {
            font-size: 2.8rem;
            margin-right: 15px;
            color: var(--secondary);
        }
        
        .logo-text {
            font-size: 2rem;
            font-weight: 800;
        }
        
        .logo-text span {
            color: var(--secondary);
        }
        
        .header-section h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            line-height: 1.2;
            position: relative;
            z-index: 2;
        }
        
        .header-section p {
            font-size: 1rem;
            opacity: 0.9;
            line-height: 1.5;
            position: relative;
            z-index: 2;
        }
        
        /* Login Type Selection */
        .login-type-container {
            padding: 40px;
        }
        
        .login-type-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-type-header h2 {
            font-size: 1.8rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }
        
        .login-type-header p {
            color: var(--gray);
            font-size: 1rem;
        }
        
        .login-type-selection {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .login-type-option {
            text-align: center;
            padding: 25px 15px;
            border: 2px solid var(--light-gray);
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--white);
            position: relative;
        }
        
        .login-type-option:hover {
            transform: translateY(-5px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow);
        }
        
        .login-type-option.selected {
            border-color: var(--primary);
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.05), rgba(76, 175, 80, 0.1));
            box-shadow: var(--shadow);
        }
        
        .login-type-option.selected::before {
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
        
        .login-type-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            display: block;
        }
        
        .login-type-title {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
            font-size: 1.1rem;
        }
        
        .login-type-desc {
            font-size: 0.85rem;
            color: var(--gray);
            line-height: 1.4;
        }
        
        /* Login Form */
        .login-form {
            display: none;
        }
        
        .login-form.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
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
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
            font-size: 0.95rem;
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
            font-size: 1.1rem;
            z-index: 1;
        }
        
        input {
            width: 100%;
            padding: 16px 18px 16px 50px;
            border: 2px solid var(--light-gray);
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: var(--white);
            color: var(--dark);
        }
        
        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.1);
        }
        
        .error {
            border-color: var(--accent) !important;
        }
        
        .error-message {
            color: var(--accent);
            font-size: 0.8rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
            display: none;
        }
        
        .error-message.show {
            display: flex;
        }
        
        /* Password Toggle */
        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            cursor: pointer;
            z-index: 2;
        }
        
        /* Options */
        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 0.9rem;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .remember-me input {
            width: auto;
            padding: 0;
        }
        
        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        /* Buttons */
        .btn {
            padding: 16px 30px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
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
        
        .btn-secondary {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--light-gray);
            margin-top: 15px;
        }
        
        .btn-secondary:hover {
            background: var(--light-gray);
            transform: translateY(-3px);
        }
        
        /* Register Link */
        .register-link {
            text-align: center;
            margin-top: 25px;
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }
        
        .register-link a:hover {
            text-decoration: underline;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                max-width: 100%;
            }
            
            .header-section, .login-type-container {
                padding: 30px;
            }
            
            .login-type-selection {
                grid-template-columns: 1fr;
            }
            
            .logo-icon {
                font-size: 2.2rem;
            }
            
            .logo-text {
                font-size: 1.6rem;
            }
            
            .header-section h1 {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 480px) {
            .header-section, .login-type-container {
                padding: 20px;
            }
            
            .header-section h1 {
                font-size: 1.5rem;
            }
            
            .logo-text {
                font-size: 1.4rem;
            }
            
            .login-type-header h2 {
                font-size: 1.5rem;
            }
            
            input {
                padding: 14px 15px 14px 45px;
            }
            
            .btn {
                padding: 14px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Header Section -->
        <div class="header-section">
            <div class="logo">
                <i class="fas fa-seedling logo-icon"></i>
                <div class="logo-text">Green<span>India</span>Society</div>
            </div>
            
            <h1>Welcome Back!</h1>
            <p>Login to your account and continue your green journey with us</p>
        </div>
        
        <!-- Login Type Selection -->
        <div class="login-type-container">
            <div class="login-type-header">
                <h2>Choose Login Type</h2>
                <p>Select how you want to login to Green India Society</p>
            </div>
            
            <div class="login-type-selection">
                <div class="login-type-option" data-type="user" id="user-option">
                    <i class="fas fa-user login-type-icon"></i>
                    <div class="login-type-title">User Login</div>
                    <div class="login-type-desc">For general users who want to track trees and participate in activities</div>
                    <input type="radio" name="login_type" value="user" style="display: none;">
                </div>
                
                <div class="login-type-option" data-type="volunteer" id="volunteer-option">
                    <i class="fas fa-hands-helping login-type-icon"></i>
                    <div class="login-type-title">Volunteer Login</div>
                    <div class="login-type-desc">For volunteers who plant trees and organize plantation drives</div>
                    <input type="radio" name="login_type" value="volunteer" style="display: none;">
                </div>
            </div>
            
            <!-- User Login Form -->
            <form class="login-form" id="user-login-form" method="post" action="user_login">
                @csrf
                <input type="hidden" name="role" value="user">
                
                <div class="form-group">
                    <label>Email Address <span class="required">*</span></label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="user-email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="error-message" id="user-email-error">
                        <i class="fas fa-exclamation-circle"></i> Please enter a valid email address
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Password <span class="required">*</span></label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="user-password" name="password" placeholder="Enter your password" required>
                        <span class="password-toggle" id="user-password-toggle">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <div class="error-message" id="user-password-error">
                        <i class="fas fa-exclamation-circle"></i> Please enter your password
                    </div>
                </div>
                
                <div class="login-options">
                    <div class="remember-me">
                        <input type="checkbox" id="user-remember" name="remember">
                        <label for="user-remember" style="font-weight: normal; margin-bottom: 0;">Remember me</label>
                    </div>
                    <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt"></i> Login as User
                </button>
                
                <button type="button" class="btn btn-secondary" id="back-to-selection-user">
                    <i class="fas fa-arrow-left"></i> Back to Selection
                </button>
            </form>
            
            <!-- Volunteer Login Form -->
            <form class="login-form" id="volunteer-login-form" method="post" action="user_login">
                @csrf
                <input type="hidden" name="role" value="volunteer">
                
                <div class="form-group">
                    <label>Email Address <span class="required">*</span></label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="email" id="volunteer-email" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="error-message" id="volunteer-email-error">
                        <i class="fas fa-exclamation-circle"></i> Please enter a valid email address
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Password <span class="required">*</span></label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="volunteer-password" name="password" placeholder="Enter your password" required>
                        <span class="password-toggle" id="volunteer-password-toggle">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                    <div class="error-message" id="volunteer-password-error">
                        <i class="fas fa-exclamation-circle"></i> Please enter your password
                    </div>
                </div>
                
                <div class="login-options">
                    <div class="remember-me">
                        <input type="checkbox" id="volunteer-remember" name="remember">
                        <label for="volunteer-remember" style="font-weight: normal; margin-bottom: 0;">Remember me</label>
                    </div>
                    <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt"></i> Login as Volunteer
                </button>
                
                <button type="button" class="btn btn-secondary" id="back-to-selection-volunteer">
                    <i class="fas fa-arrow-left"></i> Back to Selection
                </button>
            </form>
            
            <div class="register-link">
                Don't have an account? <a href="user_register">Register here</a>
            </div>
        </div>
    </div>
    
    <script>
        // DOM Elements
        const userOption = document.getElementById('user-option');
        const volunteerOption = document.getElementById('volunteer-option');
        const userLoginForm = document.getElementById('user-login-form');
        const volunteerLoginForm = document.getElementById('volunteer-login-form');
        const loginTypeHeader = document.querySelector('.login-type-header');
        const loginTypeSelection = document.querySelector('.login-type-selection');
        
        // Password toggle functionality
        function setupPasswordToggle(passwordFieldId, toggleButtonId) {
            const passwordField = document.getElementById(passwordFieldId);
            const toggleButton = document.getElementById(toggleButtonId);
            
            if (passwordField && toggleButton) {
                toggleButton.addEventListener('click', function() {
                    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordField.setAttribute('type', type);
                    
                    // Toggle eye icon
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-eye');
                    icon.classList.toggle('fa-eye-slash');
                });
            }
        }
        
        // Setup password toggles
        setupPasswordToggle('user-password', 'user-password-toggle');
        setupPasswordToggle('volunteer-password', 'volunteer-password-toggle');
        
        // Login type selection
        userOption.addEventListener('click', function() {
            // Update UI
            userOption.classList.add('selected');
            volunteerOption.classList.remove('selected');
            
            // Show user login form
            userLoginForm.classList.add('active');
            volunteerLoginForm.classList.remove('active');
            
            // Hide selection section
            loginTypeHeader.style.display = 'none';
            loginTypeSelection.style.display = 'none';
        });
        
        volunteerOption.addEventListener('click', function() {
            // Update UI
            volunteerOption.classList.add('selected');
            userOption.classList.remove('selected');
            
            // Show volunteer login form
            volunteerLoginForm.classList.add('active');
            userLoginForm.classList.remove('active');
            
            // Hide selection section
            loginTypeHeader.style.display = 'none';
            loginTypeSelection.style.display = 'none';
        });
        
        // Back to selection buttons
        document.getElementById('back-to-selection-user').addEventListener('click', function() {
            // Hide forms
            userLoginForm.classList.remove('active');
            
            // Show selection section
            loginTypeHeader.style.display = 'block';
            loginTypeSelection.style.display = 'grid';
            
            // Reset selection
            userOption.classList.remove('selected');
            volunteerOption.classList.remove('selected');
            
            // Clear form fields
            document.getElementById('user-email').value = '';
            document.getElementById('user-password').value = '';
            
            // Hide error messages
            document.getElementById('user-email-error').classList.remove('show');
            document.getElementById('user-password-error').classList.remove('show');
        });
        
        document.getElementById('back-to-selection-volunteer').addEventListener('click', function() {
            // Hide forms
            volunteerLoginForm.classList.remove('active');
            
            // Show selection section
            loginTypeHeader.style.display = 'block';
            loginTypeSelection.style.display = 'grid';
            
            // Reset selection
            userOption.classList.remove('selected');
            volunteerOption.classList.remove('selected');
            
            // Clear form fields
            document.getElementById('volunteer-email').value = '';
            document.getElementById('volunteer-password').value = '';
            
            // Hide error messages
            document.getElementById('volunteer-email-error').classList.remove('show');
            document.getElementById('volunteer-password-error').classList.remove('show');
        });
        
        // Form validation
        function validateEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        
        // User login form validation
        userLoginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            
            // Get form values
            const email = document.getElementById('user-email').value;
            const password = document.getElementById('user-password').value;
            
            // Email validation
            if (!email || !validateEmail(email)) {
                document.getElementById('user-email-error').classList.add('show');
                document.getElementById('user-email').classList.add('error');
                isValid = false;
            } else {
                document.getElementById('user-email-error').classList.remove('show');
                document.getElementById('user-email').classList.remove('error');
            }
            
            // Password validation
            if (!password || password.length < 6) {
                document.getElementById('user-password-error').textContent = 'Password must be at least 6 characters';
                document.getElementById('user-password-error').classList.add('show');
                document.getElementById('user-password').classList.add('error');
                isValid = false;
            } else {
                document.getElementById('user-password-error').classList.remove('show');
                document.getElementById('user-password').classList.remove('error');
            }
            
            if (isValid) {
                // Submit the form
                this.submit();
            }
        });
        
        // Volunteer login form validation
        volunteerLoginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            
            // Get form values
            const email = document.getElementById('volunteer-email').value;
            const password = document.getElementById('volunteer-password').value;
            
            // Email validation
            if (!email || !validateEmail(email)) {
                document.getElementById('volunteer-email-error').classList.add('show');
                document.getElementById('volunteer-email').classList.add('error');
                isValid = false;
            } else {
                document.getElementById('volunteer-email-error').classList.remove('show');
                document.getElementById('volunteer-email').classList.remove('error');
            }
            
            // Password validation
            if (!password || password.length < 6) {
                document.getElementById('volunteer-password-error').textContent = 'Password must be at least 6 characters';
                document.getElementById('volunteer-password-error').classList.add('show');
                document.getElementById('volunteer-password').classList.add('error');
                isValid = false;
            } else {
                document.getElementById('volunteer-password-error').classList.remove('show');
                document.getElementById('volunteer-password').classList.remove('error');
            }
            
            if (isValid) {
                // Submit the form
                this.submit();
            }
        });
        
        // Real-time validation for user form
        document.getElementById('user-email').addEventListener('input', function() {
            if (validateEmail(this.value)) {
                document.getElementById('user-email-error').classList.remove('show');
                this.classList.remove('error');
            }
        });
        
        document.getElementById('user-password').addEventListener('input', function() {
            if (this.value.length >= 6) {
                document.getElementById('user-password-error').classList.remove('show');
                this.classList.remove('error');
            }
        });
        
        // Real-time validation for volunteer form
        document.getElementById('volunteer-email').addEventListener('input', function() {
            if (validateEmail(this.value)) {
                document.getElementById('volunteer-email-error').classList.remove('show');
                this.classList.remove('error');
            }
        });
        
        document.getElementById('volunteer-password').addEventListener('input', function() {
            if (this.value.length >= 6) {
                document.getElementById('volunteer-password-error').classList.remove('show');
                this.classList.remove('error');
            }
        });
        
        // Auto-select login type if returning from registration
        // You can add logic here to detect if user came from registration with a specific role
        // For example, check URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const role = urlParams.get('role');
        
        if (role === 'user') {
            userOption.click();
        } else if (role === 'volunteer') {
            volunteerOption.click();
        }
        
        // Focus on email field when form is shown
        userOption.addEventListener('click', function() {
            setTimeout(() => {
                document.getElementById('user-email').focus();
            }, 300);
        });
        
        volunteerOption.addEventListener('click', function() {
            setTimeout(() => {
                document.getElementById('volunteer-email').focus();
            }, 300);
        });
    </script>
</body>
</html>