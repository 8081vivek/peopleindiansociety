<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Not Found - Green India Society</title>
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
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
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
        
        .countdown {
            color: var(--gray);
            font-size: 0.9rem;
            margin-top: 15px;
        }
        
        .countdown span {
            color: var(--primary);
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon">
            <i class="fas fa-user-slash"></i>
        </div>
        
        <h1>User Not Found</h1>
        
        <div class="error-message">
            The email address you entered is not registered with Green India Society. 
            Please check your email or register for a new account.
        </div>
        
        <div class="action-buttons">
            <a href="login" class="btn btn-primary">
                <i class="fas fa-redo"></i> Try Different Email
            </a>
            
            <a href="user_register" class="btn btn-secondary">
                <i class="fas fa-user-plus"></i> Create New Account
            </a>
        </div>
        
        <div class="countdown">
            Redirecting to registration page in <span id="countdown-timer">10</span> seconds...
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Show SweetAlert
            Swal.fire({
                icon: 'error',
                title: 'User Not Found',
                text: 'The email address is not registered. Please check your email or create a new account.',
                confirmButtonText: 'OK',
                confirmButtonColor: '#FF5722'
            });
            
            // Auto-redirect countdown
            let countdown = 10;
            const countdownElement = document.getElementById('countdown-timer');
            const countdownInterval = setInterval(function() {
                countdown--;
                countdownElement.textContent = countdown;
                
                if (countdown <= 0) {
                    clearInterval(countdownInterval);
                    window.location.href = 'register.php';
                }
            }, 1000);
        });
    </script>
</body>
</html>