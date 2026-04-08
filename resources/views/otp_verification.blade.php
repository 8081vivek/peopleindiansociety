<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP - Green India Society</title>
    <link rel="shortcut icon" href="logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            --success: #4CAF50;
            --error: #FF5722;
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
        
        .otp-container {
            width: 100%;
            max-width: 1000px;
            display: flex;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-dark);
            overflow: hidden;
            min-height: 700px;
            animation: slideUp 0.5s ease-out;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
        
        .security-tips {
            position: relative;
            z-index: 2;
            margin-top: 30px;
        }
        
        .security-tips h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .security-tips h3 i {
            color: var(--secondary);
        }
        
        .tip-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .tip-icon {
            font-size: 1.2rem;
            color: var(--secondary);
            margin-right: 15px;
            flex-shrink: 0;
            margin-top: 3px;
        }
        
        .tip-content {
            font-size: 0.95rem;
            opacity: 0.9;
            line-height: 1.5;
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
        
        .otp-form {
            width: 100%;
        }
        
        .email-display {
            background: linear-gradient(135deg, rgba(248, 253, 248, 0.9), rgba(240, 248, 240, 0.9));
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 30px;
            border: 2px solid rgba(76, 175, 80, 0.2);
            text-align: center;
            box-shadow: var(--shadow);
        }
        
        .email-display i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            display: block;
        }
        
        .email-display h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .email-display p {
            color: var(--gray);
            font-size: 1rem;
            margin-bottom: 5px;
        }
        
        .email-display .email {
            font-weight: 700;
            color: var(--primary-dark);
            font-size: 1.2rem;
            padding: 10px 15px;
            background: rgba(76, 175, 80, 0.1);
            border-radius: 8px;
            display: inline-block;
            margin-top: 10px;
            border: 1px dashed rgba(76, 175, 80, 0.3);
        }
        
        .timer-display {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(248, 253, 248, 0.9), rgba(240, 248, 240, 0.9));
            border-radius: 16px;
            border: 2px solid rgba(255, 152, 0, 0.2);
            box-shadow: var(--shadow);
        }
        
        .timer-display p {
            color: var(--gray);
            font-size: 1.1rem;
            margin-bottom: 8px;
        }
        
        .timer {
            font-size: 2rem;
            font-weight: 700;
            color: var(--secondary);
            margin-top: 5px;
            font-family: 'Courier New', monospace;
        }
        
        .timer.expiring {
            color: var(--accent);
            animation: pulse 1s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        /* OTP Input Boxes */
        .otp-input-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .otp-input {
            width: 70px;
            height: 70px;
            border: 3px solid var(--light-gray);
            border-radius: 16px;
            font-size: 2.2rem;
            text-align: center;
            font-weight: 700;
            color: var(--dark);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: var(--white);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .otp-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.15), 0 8px 15px rgba(46, 125, 50, 0.1);
            transform: translateY(-5px);
        }
        
        .otp-input.filled {
            border-color: var(--primary);
            background: rgba(76, 175, 80, 0.05);
            box-shadow: 0 8px 15px rgba(46, 125, 50, 0.1);
        }
        
        .otp-input.error {
            border-color: var(--error);
            animation: shake 0.5s ease;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
        
        /* Verification Status */
        .verification-status {
            text-align: center;
            margin-bottom: 30px;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .success-message {
            color: var(--success);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 18px 25px;
            background: linear-gradient(135deg, rgba(76, 175, 80, 0.1), rgba(56, 142, 60, 0.1));
            border-radius: 14px;
            border-left: 5px solid var(--success);
            animation: slideIn 0.5s ease-out;
        }
        
        .error-message {
            color: var(--error);
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 18px 25px;
            background: linear-gradient(135deg, rgba(255, 87, 34, 0.1), rgba(216, 67, 21, 0.1));
            border-radius: 14px;
            border-left: 5px solid var(--error);
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Buttons */
        .form-buttons {
            display: flex;
            gap: 20px;
            margin-top: 30px;
            margin-bottom: 20px;
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
            text-decoration: none;
            text-align: center;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s;
        }
        
        .btn-primary:hover::before {
            left: 100%;
        }
        
        .btn-primary:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(46, 125, 50, 0.4);
        }
        
        .btn-primary:active:not(:disabled) {
            transform: translateY(-1px);
        }
        
        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.1);
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
        
        .resend-option {
            text-align: center;
            margin-top: 25px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(248, 253, 248, 0.9), rgba(240, 248, 240, 0.9));
            border-radius: 16px;
            border: 2px solid rgba(46, 125, 50, 0.1);
            box-shadow: var(--shadow);
        }
        
        .resend-option p {
            color: var(--gray);
            margin-bottom: 10px;
        }
        
        .resend-btn {
            background: linear-gradient(135deg, var(--white), var(--light-gray));
            color: var(--primary);
            border: 2px solid var(--primary);
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .resend-btn:hover:not(:disabled) {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--white);
            transform: translateY(-2px);
        }
        
        .resend-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            border-color: var(--gray);
            color: var(--gray);
            background: var(--light-gray);
        }
        
        .resend-timer {
            margin-top: 10px;
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        .resend-timer span {
            font-weight: 700;
            color: var(--primary);
        }
        
        /* Success Screen */
        .success-screen {
            text-align: center;
            padding: 40px;
            display: none;
        }
        
        .success-screen.active {
            display: block;
            animation: fadeIn 0.8s ease-out;
        }
        
        .success-icon {
            font-size: 5rem;
            color: var(--success);
            margin-bottom: 25px;
            animation: bounce 1s ease infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }
        
        .success-screen h2 {
            font-size: 2.5rem;
            color: var(--primary-dark);
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .success-screen p {
            color: var(--gray);
            font-size: 1.2rem;
            margin-bottom: 40px;
            line-height: 1.6;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .redirect-timer {
            margin-top: 30px;
            padding: 20px;
            background: var(--light);
            border-radius: 12px;
            display: inline-block;
        }
        
        .redirect-timer span {
            font-weight: 700;
            color: var(--primary);
        }
        
        /* Loading Spinner */
        .spinner {
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: var(--white);
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        /* Responsive Design */
        @media (max-width: 900px) {
            .otp-container {
                flex-direction: column;
                max-width: 600px;
            }
            
            .left-panel, .right-panel {
                padding: 40px 30px;
            }
            
            .left-panel h1 {
                font-size: 2.2rem;
            }
            
            .logo-text {
                font-size: 1.8rem;
            }
            
            .form-header h2 {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 600px) {
            .otp-input-container {
                gap: 10px;
            }
            
            .otp-input {
                width: 55px;
                height: 55px;
                font-size: 1.8rem;
            }
            
            .form-buttons {
                flex-direction: column;
            }
            
            .email-display .email {
                font-size: 1rem;
                word-break: break-all;
            }
            
            .success-icon {
                font-size: 4rem;
            }
            
            .success-screen h2 {
                font-size: 2rem;
            }
            
            .timer {
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 480px) {
            .otp-input {
                width: 50px;
                height: 50px;
                font-size: 1.6rem;
            }
            
            body {
                padding: 10px;
            }
            
            .timer {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <div class="otp-container">
        <!-- Left Panel - Information -->
        <div class="left-panel">
            <div class="logo">
                <i class="fas fa-seedling logo-icon"></i>
                <div class="logo-text">Green<span>India</span>Society</div>
            </div>
            
            <h1>Secure Your Account</h1>
            <p>We've sent a One-Time Password (OTP) to your registered email address. Enter the code below to verify your identity and complete your registration.</p>
            
            <div class="security-tips">
                <h3><i class="fas fa-shield-alt"></i> Security Tips</h3>
                
                <div class="tip-item">
                    <i class="fas fa-check-circle tip-icon"></i>
                    <div class="tip-content">Never share your OTP with anyone, including Green India Society representatives.</div>
                </div>
                
                <div class="tip-item">
                    <i class="fas fa-check-circle tip-icon"></i>
                    <div class="tip-content">The OTP is valid for 5 minutes only. Request a new one if it expires.</div>
                </div>
                
                <div class="tip-item">
                    <i class="fas fa-check-circle tip-icon"></i>
                    <div class="tip-content">Check your spam folder if you haven't received the email.</div>
                </div>
            </div>
        </div>
        
        <!-- Right Panel - OTP Verification -->
        <div class="right-panel">
            <div class="form-header">
                <h2>Verify Your Email</h2>
                <p>Enter the 6-digit code sent to your email address</p>
            </div>
            
            <!-- Email Display -->
            <div class="email-display">
                <i class="fas fa-envelope-circle-check"></i>
                <h3>Verification Code Sent</h3>
                <p>We've sent a 6-digit OTP to:</p>
                <div class="email" id="emailDisplay">{{session('otp_email')}}</div>
 @if($errors->has('otpe'))
    <div style="color:red;">
        {{ $errors->first('otpe') }}
    </div>
@endif


            </div>
            
            <!-- Timer Display -->
            <div class="timer-display">
                <p id="otp-timer" >Code expires in:</p>
                <div class="timer" id="time">00:00</div>  
            </div>
            
            <!-- OTP Input Form -->
            <form class="otp-form" id="otpForm" method="POST" action="verify_otp">
                @csrf
                
                <!-- OTP Input Boxes -->
                <div class="otp-input-container">
                    <input type="text" class="otp-input" maxlength="1" name="otp0" id="otp0" required autofocus>
                    <input type="text" class="otp-input" maxlength="1" name="otp1" id="otp1" required>
                    <input type="text" class="otp-input" maxlength="1" name="otp2" id="otp2" required>
                    <input type="text" class="otp-input" maxlength="1" name="otp3" id="otp3" required>
                    <input type="text" class="otp-input" maxlength="1" name="otp4" id="otp4" required>
                    <input type="text" class="otp-input" maxlength="1" name="otp5" id="otp5" required>
                </div>
                
                <!-- Verify Button -->
                <div class="form-buttons">
                    <button type="submit" class="btn btn-primary" id="verifyBtn">
                        <i class="fas fa-check-circle"></i> Verify OTP
                    </button>
                </div>
            </form>
            
            <!-- Resend Option -->
            <div class="resend-option" id="resentSection">
                <form action="resend" method="post">
                    @csrf
                    <input type="hidden" value="{{session('otp_email')}}" name="email">
                <p>Didn't receive the code?</p>
                <button type="button"  class="resend-btn" id="resendBtn" >
                    <i class="fas fa-redo"></i> <span id="resendText">Resend OTP</span>
                </button>
                <!-- <button>su</button> -->
         </form>
            </div>
            
         
        </div>
    </div>

    <script>
// ===============================
// 1️⃣ OTP INPUT AUTO MOVE
// ===============================
const inputs = document.querySelectorAll(".otp-input");

inputs.forEach((input, index) => {
    input.addEventListener("input", () => {
        input.value = input.value.replace(/[^0-9]/g, "");
        if (input.value && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    });

    input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && !input.value && index > 0) {
            inputs[index - 1].focus();
        }
    });
});


</script>
<script>
/* ===============================
   CONFIG
================================ */
const OTP_DURATION = 300; // 5 minutes

/* ===============================
   ELEMENTS
================================ */
const timeDisplay  = document.getElementById("time");
const otpLabel     = document.getElementById("otp-timer");
const otpInputs    = document.querySelectorAll(".otp-input");
const resendSection= document.getElementById("resentSection");
const resendBtn    = document.getElementById("resendBtn");
const otpForm      = document.getElementById("otpForm");

/* ===============================
   TIMER (RELOAD SAFE)
================================ */
let otpExpiry = sessionStorage.getItem("otpExpiry");

// first load OR after resend
if (!otpExpiry) {
    otpExpiry = Date.now() + OTP_DURATION * 1000;
    sessionStorage.setItem("otpExpiry", otpExpiry);
}

const timer = setInterval(() => {
    const remaining = Math.floor((otpExpiry - Date.now()) / 1000);

    if (remaining <= 0) {
        clearInterval(timer);

        // show 00:00
        timeDisplay.textContent = "00:00";

        otpLabel.innerHTML =
            "<span style='color:red;'>OTP Expired. Please resend OTP.</span>";

        otpInputs.forEach(i => i.disabled = true);

        // show resend button
        resendSection.style.display = "block";
        resendBtn.disabled = false;
        return;
    }

    const min = String(Math.floor(remaining / 60)).padStart(2, "0");
    const sec = String(remaining % 60).padStart(2, "0");
    timeDisplay.textContent = `${min}:${sec}`;
}, 1000);

/* ===============================
   RESEND OTP
   (FORM SUBMIT)
================================ */
resendBtn.addEventListener("click", () => {

    // 🔁 clear old expiry so new OTP gets fresh 5 min
    sessionStorage.removeItem("otpExpiry");

    // allow page reload for submit
    isSubmitting = true;
    window.removeEventListener("beforeunload", beforeUnloadHandler);

    // submit resend form (backend OTP resend)
    resendBtn.closest("form")?.submit();
});

/* ===============================
   RELOAD / BACK CONTROL
================================ */
let isSubmitting = false;

function beforeUnloadHandler(e) {
    if (!isSubmitting) {
        e.preventDefault();
        e.returnValue = "";
    }
}

window.addEventListener("beforeunload", beforeUnloadHandler);

// OTP verify submit par reload allow
otpForm.addEventListener("submit", () => {
    isSubmitting = true;
    window.removeEventListener("beforeunload", beforeUnloadHandler);
});

// F5 / Ctrl+R block
document.addEventListener("keydown", (e) => {
    if (e.key === "F5" || ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === "r")) {
        e.preventDefault();
    }
});

// Back button block
history.pushState(null, null, location.href);
window.onpopstate = () => history.go(1);
</script>




</body>
</html>