<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wrong Password - Green India Society</title>
        <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            font-family: 'Poppins', sans-serif;
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
        
        .error-container {
            width: 100%;
            max-width: 500px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-dark);
            overflow: hidden;
            padding: 40px;
            text-align: center;
        }
        
        .error-icon {
            font-size: 5rem;
            color: var(--accent);
            margin-bottom: 20px;
            animation: shake 0.5s ease-in-out;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        h1 {
            color: var(--accent);
            font-size: 2.2rem;
            margin-bottom: 15px;
        }
        
        .error-message {
            color: var(--dark);
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .error-details {
            background: var(--light-gray);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: left;
        }
        
        .error-details p {
            margin-bottom: 10px;
            color: var(--gray);
            font-size: 0.95rem;
        }
        
        .error-details strong {
            color: var(--dark);
        }
        
        .suggestions {
            text-align: left;
            margin-bottom: 30px;
        }
        
        .suggestions h3 {
            color: var(--primary-dark);
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        
        .suggestion-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
        }
        
        .suggestion-item i {
            color: var(--primary);
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .suggestion-item p {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.5;
        }
        
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
        }
        
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
            text-decoration: none;
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
            background: var(--light-gray);
            color: var(--dark);
        }
        
        .btn-secondary:hover {
            background: var(--light-gray);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
        }
        
        .countdown {
            color: var(--gray);
            font-size: 0.9rem;
            margin-top: 15px;
        }
        
        .countdown span {
            color: var(--primary);
            font-weight: 600;
        }
        
        @media (max-width: 600px) {
            .error-container {
                padding: 30px 20px;
            }
            
            .error-icon {
                font-size: 4rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            .btn {
                padding: 14px 20px;
                font-size: 0.95rem;
            }
            
            .action-buttons {
                gap: 10px;
            }
        }
        
        @media (max-width: 400px) {
            .error-container {
                padding: 25px 15px;
            }
            
            .error-icon {
                font-size: 3.5rem;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">
            <i class="fas fa-lock"></i>
        </div>
        
        <h1>Incorrect Password</h1>
        
        <div class="error-message">
            The password you entered for your account is incorrect. Please check your password and try again.
        </div>
        
        <div class="error-details">
            <p><strong>Error:</strong> Wrong password entered</p>
            <p><strong>Account:</strong> user@example.com</p>
            <p><strong>Time:</strong> <span id="current-time"></span></p>
        </div>
        
        <div class="suggestions">
            <h3>What you can do:</h3>
            
            <div class="suggestion-item">
                <i class="fas fa-check-circle"></i>
                <p>Double-check your password for any typos or caps lock</p>
            </div>
            
            <div class="suggestion-item">
                <i class="fas fa-key"></i>
                <p>Try entering your password again carefully</p>
            </div>
            
            <div class="suggestion-item">
                <i class="fas fa-history"></i>
                <p>Remember that passwords are case-sensitive</p>
            </div>
            
           
        </div>
        
        <div class="action-buttons">
            <button class="btn btn-primary" onclick="tryAgain()">
                <i class="fas fa-redo"></i> Try Again
            </button>
            
           
            
            <a href="login" class="btn btn-outline">
                <i class="fas fa-arrow-left"></i> Back to Login
            </a>
        </div>
        
        <div class="countdown">
            Redirecting to login page in <span id="countdown-timer">10</span> seconds...
        </div>
    </div>
    
    <script>
        // Set current time
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            });
            document.getElementById('current-time').textContent = timeString;
        }
        
        // Update time immediately and every second
        updateTime();
        setInterval(updateTime, 1000);
        
        // Auto-redirect countdown
        let countdown = 10;
        const countdownElement = document.getElementById('countdown-timer');
        const countdownInterval = setInterval(function() {
            countdown--;
            countdownElement.textContent = countdown;
            
            if (countdown <= 0) {
                clearInterval(countdownInterval);
                window.location.href = 'login';
            }
        }, 1000);
        
        // Try again function
        function tryAgain() {
            // Clear the countdown
            clearInterval(countdownInterval);
            
            // Show loading state
            Swal.fire({
                title: 'Redirecting...',
                text: 'Taking you back to login page',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });
            
            // Redirect after a short delay
            setTimeout(() => {
                window.location.href = 'login';
            }, 1500);
        }
        
        // Show error alert when page loads
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: 'Wrong password entered. Please check your password and try again.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#FF5722',
                allowOutsideClick: false
            });
        });
    </script>
</body>
</html>