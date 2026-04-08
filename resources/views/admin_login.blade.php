<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People of Indian Society - Admin Login</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: serif;
        }
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f9f0;
            padding: 20px;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.09' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        
        .container {
            display: flex;
            width: 100%;
            max-width: 1000px;
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            border: 1px solid #e0f0e0;
        }
        
        .container:hover {
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }
        
        /* Left Section */
        .left-section {
            flex: 1;
            background: linear-gradient(145deg, #2e7d32, #1b5e20);
            padding: 50px 40px;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        .left-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: 0;
        }
        
        .logo-container {
            position: relative;
            z-index: 1;
            margin-bottom: 40px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .logo-icon {
            font-size: 3rem;
            margin-right: 20px;
            color: #a5d6a7;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.2));
        }
        
        .logo-text h1 {
            font-size: 2.2rem;
            line-height: 1.2;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .logo-text span {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 300;
        }
        
        .tagline {
            font-size: 1.1rem;
            font-style: italic;
            margin-top: 10px;
            opacity: 0.9;
            text-align: center;
            padding: 10px 0;
            border-top: 1px solid rgba(255,255,255,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .features {
            margin-top: 40px;
            position: relative;
            z-index: 1;
        }
        
        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 12px 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
            background-color: rgba(255,255,255,0.05);
        }
        
        .feature:hover {
            background-color: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }
        
        .feature i {
            font-size: 1.4rem;
            margin-right: 20px;
            color: #a5d6a7;
            width: 30px;
            text-align: center;
        }
        
        .feature span {
            font-size: 1rem;
            line-height: 1.4;
        }
        
        .stats {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
            position: relative;
            z-index: 1;
        }
        
        .stat-item {
            text-align: center;
            padding: 15px;
            background-color: rgba(255,255,255,0.08);
            border-radius: 10px;
            flex: 1;
            margin: 0 5px;
        }
        
        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #a5d6a7;
            display: block;
        }
        
        .stat-label {
            font-size: 0.85rem;
            opacity: 0.9;
            margin-top: 5px;
        }
        
        .copyright {
            text-align: center;
            margin-top: 40px;
            font-size: 0.8rem;
            color: rgba(255,255,255,0.7);
            position: relative;
            z-index: 1;
        }
        
        /* Right Section */
        .right-section {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #ffffff;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .login-header h2 {
            color: #2e7d32;
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }
        
        .login-header h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: #4caf50;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .login-header p {
            color: #666;
            font-size: 1.1rem;
            margin-top: 20px;
            line-height: 1.6;
        }
        
        .welcome-text {
            color: #4caf50;
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .form-group {
            margin-bottom: 30px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #444;
            font-size: 1rem;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #2e7d32;
            font-size: 1.2rem;
            z-index: 2;
        }
        
        .input-with-icon input {
            width: 100%;
            padding: 18px 20px 18px 55px;
            border: 2px solid #e0e6e0;
            border-radius: 12px;
            font-size: 1.05rem;
            transition: all 0.3s;
            background-color: #f9fffa;
            color: #333;
            font-weight: 500;
        }
        
        .input-with-icon input:focus {
            border-color: #2e7d32;
            outline: none;
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.15);
            background-color: white;
        }
        
        .input-with-icon input::placeholder {
            color: #aaa;
            font-weight: normal;
        }
        
        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            font-size: 1.2rem;
            padding: 5px;
            z-index: 2;
        }
        
        .password-toggle:hover {
            color: #2e7d32;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .remember-me input {
            margin-right: 10px;
            width: 18px;
            height: 18px;
            accent-color: #2e7d32;
        }
        
        .forgot-password {
            color: #2e7d32;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .forgot-password:hover {
            color: #1b5e20;
            text-decoration: underline;
        }
        
        .login-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(to right, #2e7d32, #1b5e20);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            box-shadow: 0 6px 15px rgba(46, 125, 50, 0.3);
            margin-bottom: 25px;
        }
        
        .login-btn:hover {
            background: linear-gradient(to right, #1b5e20, #0d3c10);
            box-shadow: 0 8px 20px rgba(46, 125, 50, 0.4);
            transform: translateY(-2px);
        }
        
        .login-btn:active {
            transform: translateY(1px);
            box-shadow: 0 3px 10px rgba(46, 125, 50, 0.3);
        }
        
        .login-btn i {
            font-size: 1.2rem;
        }
        
        .error-message {
            color: #d32f2f;
            font-size: 0.9rem;
            margin-top: 8px;
            display: none;
            font-weight: 500;
        }
        
        .success-message {
            color: #2e7d32;
            font-size: 1rem;
            margin-top: 15px;
            text-align: center;
            display: none;
            font-weight: 600;
        }
        
        .security-note {
            text-align: center;
            font-size: 0.9rem;
            color: #777;
            margin-top: 20px;
            padding: 15px;
            background-color: #f5f9f5;
            border-radius: 10px;
            border-left: 4px solid #4caf50;
        }
        
        .security-note i {
            color: #4caf50;
            margin-right: 8px;
        }
        
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                max-width: 600px;
            }
            
            .left-section {
                padding: 40px 30px;
            }
            
            .right-section {
                padding: 50px 40px;
            }
            
            .stats {
                flex-wrap: wrap;
            }
            
            .stat-item {
                flex: 1 0 45%;
                margin-bottom: 10px;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                border-radius: 15px;
            }
            
            .left-section {
                padding: 30px 25px;
            }
            
            .right-section {
                padding: 40px 30px;
            }
            
            .login-header h2 {
                font-size: 2rem;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .forgot-password {
                margin-top: 15px;
            }
            
            .stat-item {
                flex: 1 0 100%;
                margin-bottom: 10px;
            }
            
            .logo-icon {
                font-size: 2.5rem;
            }
            
            .logo-text h1 {
                font-size: 1.8rem;
            }
        }
        
        /* Animation for form focus */
        .form-group:focus-within label {
            color: #2e7d32;
        }
        
        .form-group:focus-within .input-with-icon i {
            color: #1b5e20;
            transform: translateY(-50%) scale(1.1);
        }
        
        /* Pulse animation for login button */
        @keyframes pulse {
            0% { box-shadow: 0 6px 15px rgba(46, 125, 50, 0.3); }
            50% { box-shadow: 0 6px 20px rgba(46, 125, 50, 0.5); }
            100% { box-shadow: 0 6px 15px rgba(46, 125, 50, 0.3); }
        }
        
        .login-btn {
            animation: pulse 2s infinite;
        }
        
        /* Feature icons animation */
        .feature i {
            transition: all 0.3s ease;
        }
        
        .feature:hover i {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section with App Info -->
        <div class="left-section">
            <div class="logo-container">
                <div class="logo">
                    <i class="fas fa-tree logo-icon"></i>
                    <div class="logo-text">
                        <h1>Green Earth<br>Admin Portal</h1>
                        <span>Comprehensive Plantation Management</span>
                    </div>
                </div>
                <div class="tagline">
                    <i class="fas fa-quote-left"></i> Nurturing Nature for Future Generations <i class="fas fa-quote-right"></i>
                </div>
            </div>
            
            <div class="features">
                <div class="feature">
                    <i class="fas fa-seedling"></i>
                    <span>Track plantation progress across regions with real-time analytics</span>
                </div>
                <div class="feature">
                    <i class="fas fa-users-cog"></i>
                    <span>Manage volunteer groups and plantation schedules efficiently</span>
                </div>
                <div class="feature">
                    <i class="fas fa-chart-line"></i>
                    <span>Monitor tree growth metrics and survival rates with precision</span>
                </div>
                <div class="feature">
                    <i class="fas fa-map-marked-alt"></i>
                    <span>Coordinate plantation sites and allocate resources effectively</span>
                </div>
            </div>
        </div>
        
        <!-- Right Section with Login Form -->
        <div class="right-section">
            <div class="login-header">
                <div class="welcome-text">
                    <i class="fas fa-lock"></i> SECURE ADMIN ACCESS
                </div>
                <h2>Administrator Login</h2>
                <p>Access the comprehensive tree plantation management dashboard with full administrative privileges</p>
            </div>
            
            <form id="loginForm" action="login_form" method="post">
                @csrf
                <div class="form-group">
                    <label for="username">
                        <i class="fas fa-user-tie"></i> Admin Credentials
                    </label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input type="text" id="username" name="email" placeholder="Enter your registered email address" required>
                    </div>
                    <div class="error-message" id="username-error">
                        <i class="fas fa-exclamation-circle"></i> Please enter a valid email address
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">
                        <i class="fas fa-key"></i> Security Password
                    </label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Enter your secure password" required>
                        <button type="button" class="password-toggle" id="togglePassword">
                        </button>
                    </div>
                    <div class="error-message" id="password-error">
                        <i class="fas fa-exclamation-circle"></i> Password must be at least 8 characters with uppercase, lowercase and numbers
                    </div>
                </div>
                
                <div class="remember-forgot">
                    <!-- <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Keep me logged in on this device</label>
                    </div>
                    <a href="#" class="forgot-password">
                        <i class="fas fa-question-circle"></i> Forgot Password?
                    </a> -->
                </div>
                
                <button class="login-btn">
                    <i class="fas fa-sign-in-alt"></i> Access Dashboard
                </button>
                
              
            </form>
            
            <!-- <div class="security-note">
                <i class="fas fa-shield-alt"></i> 
                <span>This is a secure system. All login activities are monitored and recorded for security purposes.</span>
            </div> -->
        </div>
    </div>
    @if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Done',
    text: '{{ session('success') }}',
    timer: 2000,
    showConfirmButton: false
});
</script>
@endif


    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
      
        
        // Add focus effects to inputs
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.parentElement.classList.remove('focused');
            });
        });
        
        // Animate features on page load
        document.addEventListener('DOMContentLoaded', function() {
            const features = document.querySelectorAll('.feature');
            features.forEach((feature, index) => {
                feature.style.opacity = '0';
                feature.style.transform = 'translateX(-20px)';
                
                setTimeout(() => {
                    feature.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    feature.style.opacity = '1';
                    feature.style.transform = 'translateX(0)';
                }, index * 200 + 500);
            });
            
            // Animate stats
            const stats = document.querySelectorAll('.stat-number');
            stats.forEach((stat, index) => {
                const originalValue = stat.textContent;
                stat.textContent = '0';
                
                setTimeout(() => {
                    let current = 0;
                    const increment = parseInt(originalValue.replace(/,/g, '')) / 50;
                    const timer = setInterval(() => {
                        current += increment;
                        if (current >= parseInt(originalValue.replace(/,/g, ''))) {
                            stat.textContent = originalValue;
                            clearInterval(timer);
                        } else {
                            stat.textContent = Math.floor(current).toLocaleString();
                        }
                    }, 30);
                }, index * 300 + 1000);
            });
        });
    </script>
</body>
</html>