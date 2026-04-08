<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate - People of Indian Society</title>
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
        
        .donation-container {
            width: 100%;
            max-width: 1100px;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-dark);
            overflow: hidden;
            display: flex;
            min-height: 650px;
            max-height: 90vh;
        }
        
        /* Header Section */
        .header-section {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: var(--white);
            padding: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
            width: 45%;
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
            font-size: 2.2rem;
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
        
        .impact-stats {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            position: relative;
            z-index: 2;
            text-align: left;
        }
        
        .impact-stat {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .impact-stat:last-child {
            margin-bottom: 0;
        }
        
        .impact-stat i {
            color: var(--secondary);
            margin-right: 15px;
            font-size: 1.5rem;
            width: 24px;
            text-align: center;
        }
        
        .stat-value {
            font-weight: 700;
            font-size: 1.2rem;
            display: block;
        }
        
        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Donation Form Section - SCROLLABLE */
        .donation-section {
            width: 55%;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        
        .donation-header {
            text-align: center;
            padding: 25px 40px 15px;
            background: var(--white);
            border-bottom: 1px solid var(--light-gray);
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .donation-header h2 {
            font-size: 1.8rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }
        
        .donation-header p {
            color: var(--gray);
            font-size: 1rem;
        }
        
        /* Scrollable Form Container */
        .form-scroll-container {
            flex: 1;
            overflow-y: auto;
            padding: 0 40px 30px;
        }
        
        /* Custom Scrollbar */
        .form-scroll-container::-webkit-scrollbar {
            width: 8px;
        }
        
        .form-scroll-container::-webkit-scrollbar-track {
            background: var(--light-gray);
            border-radius: 10px;
        }
        
        .form-scroll-container::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }
        
        .form-scroll-container::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }
        
        /* Donation Form */
        .donation-form {
            display: flex;
            flex-direction: column;
            gap: 25px;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        
        /* Amount Selection */
        .amount-selection {
            margin-bottom: 10px;
        }
        
        .section-title {
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 15px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .amount-options {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin-bottom: 15px;
        }
        
        @media (max-width: 768px) {
            .amount-options {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        .amount-option {
            text-align: center;
            padding: 18px 10px;
            border: 2px solid var(--light-gray);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--white);
            position: relative;
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .amount-option:hover {
            transform: translateY(-3px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow);
        }
        
        .amount-option.selected {
            border-color: var(--primary);
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.05), rgba(76, 175, 80, 0.1));
            box-shadow: var(--shadow);
            color: var(--primary);
        }
        
        .amount-option.selected::before {
            content: '✓';
            position: absolute;
            top: 8px;
            right: 8px;
            width: 20px;
            height: 20px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.7rem;
        }
        
        .custom-amount {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .currency-symbol {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary);
        }
        
        .custom-amount-input {
            flex: 1;
            padding: 16px 18px;
            border: 2px solid var(--light-gray);
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: var(--white);
            color: var(--dark);
        }
        
        .custom-amount-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.1);
        }
        
        /* Donor Info */
        .donor-info {
            margin-top: 10px;
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
        
        input, select, textarea {
            width: 100%;
            padding: 16px 18px 16px 50px;
            border: 2px solid var(--light-gray);
            border-radius: 10px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: var(--white);
            color: var(--dark);
            font-family: serif;
        }
        
        select {
            appearance: none;
            cursor: pointer;
        }
        
        .select-arrow {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            pointer-events: none;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(46, 125, 50, 0.1);
        }
        
        textarea {
            min-height: 100px;
            resize: vertical;
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
        
        /* Payment Options */
        .payment-options {
            margin-bottom: 10px;
        }
        
        .payment-methods {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 15px;
        }
        
        @media (max-width: 768px) {
            .payment-methods {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 480px) {
            .payment-methods {
                grid-template-columns: 1fr;
            }
        }
        
        .payment-method {
            text-align: center;
            padding: 20px 10px;
            border: 2px solid var(--light-gray);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: var(--white);
            position: relative;
        }
        
        .payment-method:hover {
            transform: translateY(-3px);
            border-color: var(--primary-light);
            box-shadow: var(--shadow);
        }
        
        .payment-method.selected {
            border-color: var(--primary);
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.05), rgba(76, 175, 80, 0.1));
            box-shadow: var(--shadow);
        }
        
        .payment-method.selected::before {
            content: '✓';
            position: absolute;
            top: 8px;
            right: 8px;
            width: 20px;
            height: 20px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.7rem;
        }
        
        .payment-icon {
            font-size: 2rem;
            margin-bottom: 10px;
            display: block;
            color: var(--primary);
        }
        
        .payment-name {
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        /* Additional Options */
        .additional-options {
            margin: 15px 0;
        }
        
        .checkbox-option {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            cursor: pointer;
        }
        
        .checkbox-option input {
            width: auto;
            margin-right: 12px;
            margin-top: 3px;
            cursor: pointer;
        }
        
        .checkbox-label {
            font-size: 0.9rem;
            color: var(--dark);
            line-height: 1.4;
            margin: 0;
            cursor: pointer;
            font-weight: normal;
        }
        
        /* Donation Summary */
        .donation-summary {
            background: rgba(46, 125, 50, 0.05);
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            border: 1px solid rgba(46, 125, 50, 0.1);
        }
        
        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
        }
        
        .summary-row.total {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--primary);
            border-top: 1px solid rgba(46, 125, 50, 0.2);
            padding-top: 12px;
            margin-top: 10px;
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
            background: var(--light-gray);
            color: var(--dark);
        }
        
        .btn-secondary:hover {
            background: #e0e0e0;
        }
        
        .buttons-row {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        
        /* Responsive Design */
        @media (max-width: 900px) {
            .donation-container {
                flex-direction: column;
                max-width: 600px;
                max-height: 95vh;
            }
            
            .header-section, .donation-section {
                width: 100%;
            }
            
            .header-section {
                padding: 30px;
                max-height: 40vh;
            }
            
            .donation-section {
                max-height: 60vh;
            }
            
            .form-scroll-container {
                padding: 0 30px 20px;
            }
            
            .donation-header {
                padding: 20px 30px 15px;
            }
        }
        
        @media (max-width: 768px) {
            .logo-icon {
                font-size: 2.2rem;
            }
            
            .logo-text {
                font-size: 1.6rem;
            }
            
            .header-section h1 {
                font-size: 1.8rem;
            }
            
            .donation-header h2 {
                font-size: 1.5rem;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .donation-container {
                max-height: 95vh;
            }
            
            .header-section {
                padding: 25px;
                max-height: 45vh;
            }
            
            .header-section h1 {
                font-size: 1.5rem;
            }
            
            .logo-text {
                font-size: 1.4rem;
            }
            
            .donation-header {
                padding: 15px 20px 10px;
            }
            
            .form-scroll-container {
                padding: 0 20px 15px;
            }
            
            input, select, textarea {
                padding: 14px 15px 14px 45px;
            }
            
            .btn {
                padding: 14px 20px;
                font-size: 0.9rem;
            }
            
            .buttons-row {
                flex-direction: column;
            }
        }
        
        /* Success Message */
        .success-message {
            display: none;
            text-align: center;
            padding: 40px 20px;
        }
        
        .success-icon {
            font-size: 4rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .success-message h2 {
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .success-message p {
            color: var(--gray);
            margin-bottom: 25px;
        }
        
        /* Form Row for responsive layout */
        .form-row {
            display: flex;
            gap: 20px;
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="donation-container">
        <!-- Header Section -->
        <div class="header-section">
            <div class="logo">
                <i class="fas fa-tree logo-icon"></i>
                <div class="logo-text">Green <span>India</span></div>
            </div>
            
            <h1>Plant a Tree,<br>Nurture the Future</h1>
            <p>Your donation helps us plant trees, restore ecosystems, and create a sustainable environment for future generations. Every contribution makes a difference.</p>
            
            <div class="impact-stats">
                <div class="impact-stat">
                    <i class="fas fa-leaf"></i>
                    <div>
                        <span class="stat-value">250,000+</span>
                        <span class="stat-label">Trees Planted</span>
                    </div>
                </div>
                <div class="impact-stat">
                    <i class="fas fa-users"></i>
                    <div>
                        <span class="stat-value">50,000+</span>
                        <span class="stat-label">Active Volunteers</span>
                    </div>
                </div>
                <div class="impact-stat">
                    <i class="fas fa-globe-asia"></i>
                    <div>
                        <span class="stat-value">25+</span>
                        <span class="stat-label">Cities Covered</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Donation Form Section -->
        <div class="donation-section">
            <div class="donation-header">
                <h2>Make a Donation</h2>
                <p>Support our mission to create a greener and healthier planet</p>
            </div>
            
            <!-- Scrollable Form Container -->
            <div class="form-scroll-container">
                <form class="donation-form" id="donationForm" method="post" action="#">
                    <!-- Amount Selection -->
                    <div class="amount-selection">
                        <div class="section-title">
                            <i class="fas fa-rupee-sign"></i>
                            <span>Select Donation Amount</span>
                        </div>
                        <div class="amount-options">
                            <div class="amount-option" data-amount="100">₹100</div>
                            <div class="amount-option" data-amount="250">₹250</div>
                            <div class="amount-option selected" data-amount="500">₹500</div>
                            <div class="amount-option" data-amount="1000">₹1000</div>
                        </div>
                        <div class="custom-amount">
                            <div class="currency-symbol">₹</div>
                            <input type="number" class="custom-amount-input" id="customAmount" placeholder="Enter custom amount" min="10" step="10">
                        </div>
                        <input type="hidden" id="selectedAmount" name="amount" value="500">
                    </div>
                    
                    <!-- Donor Information -->
                    <div class="donor-info">
                        <div class="section-title">
                            <i class="fas fa-user"></i>
                            <span>Your Information</span>
                        </div>
                        
                        <div class="form-group">
                            <label>Full Name <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-user-circle"></i>
                                <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                            </div>
                            <div class="error-message" id="name-error">
                                <i class="fas fa-exclamation-circle"></i> Please enter your full name
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Email Address <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                            </div>
                            <div class="error-message" id="email-error">
                                <i class="fas fa-exclamation-circle"></i> Please enter a valid email address
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Mobile Number <span class="required">*</span></label>
                            <div class="input-with-icon">
                                <i class="fas fa-phone"></i>
                                <input type="tel" id="mobile" name="mobile" placeholder="Enter your 10-digit mobile number" pattern="[0-9]{10}" required>
                            </div>
                            <div class="error-message" id="mobile-error">
                                <i class="fas fa-exclamation-circle"></i> Please enter a valid 10-digit mobile number
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group" style="flex: 1;">
                                <label>City</label>
                                <div class="input-with-icon">
                                    <i class="fas fa-city"></i>
                                    <input type="text" id="city" name="city" placeholder="Enter your city">
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    
                    
                   
                    <!-- Donation Summary -->
                    <div class="donation-summary">
                        <div class="summary-row">
                            <span>Donation Amount</span>
                            <span id="summary-amount">₹500</span>
                        </div>
                        <div class="summary-row">
                            <span>Payment Gateway Charges</span>
                            <span id="summary-charges">₹10</span>
                        </div>
                        <div class="summary-row total">
                            <span>Total Amount</span>
                            <span id="summary-total">₹510</span>
                        </div>
                    </div>
                    
                    <!-- Buttons -->
                    <div class="buttons-row">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-heart"></i> Donate Now
                        </button>
                        <button type="button" class="btn btn-secondary" id="clearForm">
                            <i class="fas fa-redo"></i> Clear Form
                        </button>
                    </div>
                    
                    <div style="text-align: center; margin-top: 15px; font-size: 0.8rem; color: var(--gray);">
                        <i class="fas fa-lock"></i> Your payment information is secure and encrypted
                    </div>
                </form>
            </div>
        </div>
    </div>
                     </div>

    
    <!-- Success Message (Hidden by default) -->
    <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle success-icon"></i>
        <h2>Thank You for Your Donation!</h2>
        <p>Your contribution of ₹<span id="successAmount">500</span> will help us plant more trees and create a greener environment. You will receive a confirmation email shortly.</p>
        <button class="btn btn-primary" id="backToDonate">
            <i class="fas fa-tree"></i> Make Another Donation
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const amountOptions = document.querySelectorAll('.amount-option');
            const customAmountInput = document.getElementById('customAmount');
            const selectedAmountInput = document.getElementById('selectedAmount');
            const donationForm = document.getElementById('donationForm');
            const successMessage = document.getElementById('successMessage');
            const clearFormBtn = document.getElementById('clearForm');
            const backToDonateBtn = document.getElementById('backToDonate');
            const summaryAmount = document.getElementById('summary-amount');
            const summaryCharges = document.getElementById('summary-charges');
            const summaryTotal = document.getElementById('summary-total');
            const successAmount = document.getElementById('successAmount');
            
            // Amount Selection
            amountOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Remove selected class from all options
                    amountOptions.forEach(opt => opt.classList.remove('selected'));
                    
                    // Add selected class to clicked option
                    this.classList.add('selected');
                    
                    // Update selected amount
                    const amount = this.getAttribute('data-amount');
                    selectedAmountInput.value = amount;
                    customAmountInput.value = '';
                    
                    // Update summary
                    updateDonationSummary(amount);
                });
            });
            
            // Custom Amount Input
            customAmountInput.addEventListener('input', function() {
                const amount = this.value;
                
                if (amount) {
                    // Remove selected class from all preset options
                    amountOptions.forEach(opt => opt.classList.remove('selected'));
                    
                    // Update selected amount
                    selectedAmountInput.value = amount;
                    
                    // Update summary
                    updateDonationSummary(amount);
                }
            });
            
            
            
            // Update Donation Summary
            function updateDonationSummary(amount) {
                if (!amount) amount = 0;
                
                // Calculate gateway charges (2% of amount, minimum ₹10)
                let charges = 0;
                charges = Math.round(charges);
                
                // Calculate total
                const total = parseInt(amount) + charges;
                
                // Update display
                summaryAmount.textContent = `₹${amount}`;
                summaryCharges.textContent = `₹${charges}`;
                summaryTotal.textContent = `₹${total}`;
            }
            
            // Form Validation
            function validateForm() {
                let isValid = true;
                
                // Name validation
                const name = document.getElementById('fullName').value;
                const nameError = document.getElementById('name-error');
                if (!name.trim()) {
                    nameError.classList.add('show');
                    document.getElementById('fullName').classList.add('error');
                    isValid = false;
                } else {
                    nameError.classList.remove('show');
                    document.getElementById('fullName').classList.remove('error');
                }
                
                // Email validation
                const email = document.getElementById('email').value;
                const emailError = document.getElementById('email-error');
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    emailError.classList.add('show');
                    document.getElementById('email').classList.add('error');
                    isValid = false;
                } else {
                    emailError.classList.remove('show');
                    document.getElementById('email').classList.remove('error');
                }
                
                // Mobile validation
                const mobile = document.getElementById('mobile').value;
                const mobileError = document.getElementById('mobile-error');
                const mobilePattern = /^[0-9]{10}$/;
                if (!mobilePattern.test(mobile)) {
                    mobileError.classList.add('show');
                    document.getElementById('mobile').classList.add('error');
                    isValid = false;
                } else {
                    mobileError.classList.remove('show');
                    document.getElementById('mobile').classList.remove('error');
                }
                
                // Amount validation
                const amount = selectedAmountInput.value;
                if (!amount || amount < 10) {
                    alert('Please select a donation amount of at least ₹10');
                    isValid = false;
                }
                
                return isValid;
            }
            
            // Form Submission
            donationForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (validateForm()) {
                    // Show success message
                    document.querySelector('.donation-container').style.display = 'none';
                    successMessage.style.display = 'block';
                    successAmount.textContent = selectedAmountInput.value;
                    
                    // In a real application, you would submit the form data to your server here
                    console.log('Form submitted with data:', {
                        amount: selectedAmountInput.value,
                        fullName: document.getElementById('fullName').value,
                        email: document.getElementById('email').value,
                        mobile: document.getElementById('mobile').value,
                        city: document.getElementById('city').value,
                        state: document.getElementById('state').value,
                        paymentMethod: paymentMethodInput.value,
                        anonymous: document.getElementById('anonymous').checked,
                        monthly: document.getElementById('monthly').checked,
                        newsletter: document.getElementById('newsletter').checked
                    });
                }
            });
            
            // Clear Form
            clearFormBtn.addEventListener('click', function() {
                // Reset form
                donationForm.reset();
                
                // Reset amount selection
                amountOptions.forEach(opt => opt.classList.remove('selected'));
                document.querySelector('[data-amount="500"]').classList.add('selected');
                selectedAmountInput.value = '500';
                customAmountInput.value = '';
                
                // Reset payment method
                paymentMethods.forEach(m => m.classList.remove('selected'));
                document.querySelector('[data-method="upi"]').classList.add('selected');
                paymentMethodInput.value = 'upi';
                
                // Reset error states
                document.querySelectorAll('.error-message').forEach(el => el.classList.remove('show'));
                document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
                
                // Update summary
                updateDonationSummary(500);
            });
            
            // Back to Donate Button
            backToDonateBtn.addEventListener('click', function() {
                // Show form and hide success message
                document.querySelector('.donation-container').style.display = 'flex';
                successMessage.style.display = 'none';
            });
            
            // Initialize summary
            updateDonationSummary(500);
        });
    </script>
    
</body>
</html>