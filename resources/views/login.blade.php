<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Green India Society</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">nk

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
            font-family: serif;
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
            max-width: 1000px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-dark);
            overflow: hidden;
            display: flex;
            min-height: 600px;
        }
        
        /* Header Section */
        .header-section {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: var(--white);
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
            width: 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
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
            margin-bottom: 30px;
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
            margin-bottom: 30px;
        }
        
        .header-features {
            text-align: left;
            margin-top: 30px;
            position: relative;
            z-index: 2;
        }
        
        .header-feature {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .header-feature i {
            color: var(--secondary);
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        /* Login Section */
        .login-section {
            width: 60%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
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
        
        /* Combined Login Area */
        .combined-login-area {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        
        .role-selection-area {
            margin-bottom: 20px;
        }
        
        .role-selection-title {
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .login-type-selection {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .login-type-option {
            text-align: center;
            padding: 20px 15px;
            border: 2px solid var(--light-gray);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--white);
            position: relative;
        }
        
        .login-type-option:hover {
            transform: translateY(-3px);
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
            width: 22px;
            height: 22px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.8rem;
        }
        
        .login-type-icon {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 12px;
            display: block;
        }
        
        .login-type-title {
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--dark);
            font-size: 1rem;
        }
        
        .login-type-desc {
            font-size: 0.8rem;
            color: var(--gray);
            line-height: 1.4;
        }
        
        /* Login Form */
        .login-form {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        .login-form.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .form-group {
            margin-bottom: 20px;
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
        @media (max-width: 900px) {
            .login-container {
                flex-direction: column;
                max-width: 500px;
            }
            
            .header-section, .login-section {
                width: 100%;
            }
            
            .header-section {
                padding: 30px;
            }
            
            .login-section {
                padding: 30px;
            }
        }
        
        @media (max-width: 768px) {
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
            .header-section, .login-section {
                padding: 25px;
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
            
            .login-type-option {
                padding: 15px 10px;
            }
            
            .login-type-icon {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
       
        
        <!-- Login Section -->
        <div class="login-section">
            <div class="login-type-header">
                <h2>Login to Green India Society</h2>
                <p>Select your role and enter your credentials</p>
            </div>
            
            <div class="combined-login-area">
                <!-- Role Selection -->
                <div class="role-selection-area">
                    <div class="role-selection-title">Select Your Role</div>
                    
                    <div class="login-type-selection">
                        <div class="login-type-option selected" data-type="user" id="user-option">
                            <i class="fas fa-user login-type-icon"></i>
                            <div class="login-type-title">User Login</div>
                            <div class="login-type-desc">Track trees & participate</div>
                            <input type="radio" name="login_type" value="user" checked style="display: none;">
                        </div>
                        
                        <div class="login-type-option" data-type="volunteer" id="volunteer-option">
                            <i class="fas fa-hands-helping login-type-icon"></i>
                            <div class="login-type-title">Volunteer Login</div>
                            <div class="login-type-desc">Plant trees & organize drives</div>
                            <input type="radio" name="login_type" value="volunteer" style="display: none;">
                        </div>



                    </div>
                </div>
                
                <!-- User Login Form -->
                <form class="login-form active" id="user-login-form" method="post" action="login/user">
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
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i> Login as User
                    </button>
                </form>
                
                <!-- Volunteer Login Form -->
                <form class="login-form" id="volunteer-login-form" method="post" action="login/volunteer">
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
                </form>
                
                <div class="register-link">
                    Don't have an account? <a href="register.php">Register here</a>
                </div>
            </div>
        </div>
    </div>


</body>
</html>