<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People of Indian Society - Reviews</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: serif;
        }

        :root {
            --primary-green: #1b5e20;
            --light-green: #4caf50;
            --medium-green: #2e7d32;
            --dark-green: #0d3b0f;
            --light-bg: #f8fff8;
            --card-bg: #ffffff;
            --text-dark: #1a3c1e;
            --text-light: #4a6850;
            --star-color: #ffb300;
            --border-color: #d4e8d4;
            --accent-green: #43a047;
            --shadow-light: 0 4px 15px rgba(27, 94, 32, 0.08);
            --shadow-medium: 0 8px 25px rgba(27, 94, 32, 0.12);
            --shadow-heavy: 0 12px 35px rgba(27, 94, 32, 0.15);
        }

        body {
            color: var(--text-dark);
            line-height: 1.6;
            min-height: 100vh;
     background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%234caf50' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");

        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Main Content */
        .main-content {
            padding: 40px 0;
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 50px;
            padding: 40px 30px;
            background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-green) 100%);
            border-radius: 20px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-medium);
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            opacity: 0.3;
        }

        .page-header h2 {
            font-size: 42px;
            margin-bottom: 15px;
            font-weight: 800;
            position: relative;
            z-index: 1;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .page-header p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            opacity: 0.9;
            line-height: 1.8;
        }

        /* Review Summary */
        .review-summary {
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 40px;
            box-shadow: var(--shadow-medium);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
            border: 2px solid rgba(76, 175, 80, 0.1);
            transition: all 0.3s ease;
        }

        .review-summary:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-heavy);
        }

        .overall-rating {
            text-align: center;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8fff8 0%, #e8f5e9 100%);
            border-radius: 15px;
            border: 2px solid rgba(76, 175, 80, 0.2);
        }

        .rating-number {
            font-size: 72px;
            font-weight: 900;
            color: var(--primary-green);
            line-height: 1;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(27, 94, 32, 0.2);
            background: linear-gradient(135deg, var(--dark-green), var(--medium-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stars {
            color: var(--star-color);
            font-size: 32px;
            margin: 20px 0;
            letter-spacing: 4px;
            filter: drop-shadow(0 2px 4px rgba(255, 179, 0, 0.3));
        }

        .rating-count {
            color: var(--text-light);
            font-size: 18px;
            margin-top: 10px;
            background: rgba(255, 255, 255, 0.9);
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            border: 1px solid rgba(76, 175, 80, 0.2);
        }

        .rating-distribution {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 15px 0;
        }

        .rating-bar {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .star-label {
            width: 90px;
            font-weight: 700;
            font-size: 16px;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .bar-container {
            flex-grow: 1;
            height: 16px;
            background-color: #e8f5e9;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
        }

        .bar {
            height: 100%;
            background: linear-gradient(90deg, #ffb300, #ff9800);
            border-radius: 8px;
            transition: width 1s ease-out;
            position: relative;
            overflow: hidden;
        }

        .bar::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .bar-count {
            width: 50px;
            text-align: right;
            font-weight: 800;
            color: var(--primary-green);
            font-size: 16px;
        }

        /* Review Filters */
        .review-filters {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            margin: 40px 0;
            gap: 20px;
            background: var(--card-bg);
            padding: 25px 30px;
            border-radius: 15px;
            box-shadow: var(--shadow-light);
            border: 2px solid var(--border-color);
        }

        .filter-group {
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }

        .filter-group span {
            font-weight: 700;
            color: var(--primary-green);
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .filter-group span i {
            color: var(--light-green);
        }

        .filter-btn {
            padding: 12px 24px;
            background-color: white;
            border: 2px solid #e8f5e9;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            font-size: 15px;
            color: var(--text-dark);
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .filter-btn:hover {
            background: linear-gradient(135deg, var(--light-green), var(--accent-green));
            color: white;
            border-color: var(--light-green);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(76, 175, 80, 0.25);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, var(--primary-green), var(--medium-green));
            color: white;
            border-color: var(--primary-green);
            box-shadow: 0 6px 15px rgba(27, 94, 32, 0.3);
            transform: translateY(-2px);
        }

        .sort-select {
            padding: 12px 24px;
            border-radius: 30px;
            border: 2px solid #e8f5e9;
            background-color: white;
            font-weight: 600;
            font-size: 15px;
            color: var(--text-dark);
            cursor: pointer;
            transition: all 0.3s;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%231b5e20' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
            padding-right: 50px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .sort-select:focus {
            outline: none;
            border-color: var(--light-green);
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.15);
        }

        /* Reviews List */
        .reviews-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(550px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        @media (max-width: 1200px) {
            .reviews-container {
                grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .reviews-container {
                grid-template-columns: 1fr;
            }
        }

        .review-card {
            background-color: var(--card-bg);
            border-radius: 20px;
            padding: 35px;
            box-shadow: var(--shadow-light);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid rgba(76, 175, 80, 0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .review-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(180deg, var(--light-green), var(--medium-green));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .review-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-heavy);
            border-color: rgba(76, 175, 80, 0.3);
        }

        .review-card:hover::before {
            opacity: 1;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .reviewer-info {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .reviewer-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 800;
            font-size: 24px;
            box-shadow: 0 6px 15px rgba(27, 94, 32, 0.4);
            transition: transform 0.3s ease;
        }

        .review-card:hover .reviewer-avatar {
            transform: scale(1.1) rotate(5deg);
        }

        .reviewer-details h4 {
            font-size: 22px;
            margin-bottom: 8px;
            color: var(--text-dark);
            font-weight: 800;
        }

        .review-date {
            color: var(--text-light);
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .review-date i {
            color: var(--light-green);
        }

        .review-rating .stars {
            font-size: 22px;
            margin: 0;
        }

        .review-title {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--primary-green);
            line-height: 1.4;
            padding-bottom: 15px;
            border-bottom: 2px dashed #e8f5e9;
        }

        .review-text {
            color: var(--text-dark);
            margin-bottom: 25px;
            line-height: 1.8;
            flex-grow: 1;
            font-size: 17px;
            position: relative;
            padding-left: 20px;
        }

        .review-text::before {
            content: '"';
            position: absolute;
            left: 0;
            top: -10px;
            font-size: 60px;
            color: var(--light-green);
            opacity: 0.2;
            font-family:  serif;
        }

        .product-type-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--light-green), var(--accent-green));
            color: white;
            padding: 8px 18px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 700;
            margin-top: 10px;
            border: 2px solid white;
            box-shadow: 0 3px 10px rgba(67, 160, 71, 0.2);
            transition: transform 0.3s ease;
        }

        .review-card:hover .product-type-badge {
            transform: translateY(-2px);
        }

        /* Review Form */
        .review-form-container {
            background-color: var(--card-bg);
            border-radius: 25px;
            padding: 50px;
            box-shadow: var(--shadow-heavy);
            margin-top: 60px;
            border: 2px solid rgba(76, 175, 80, 0.2);
            position: relative;
            overflow: hidden;
        }

        .review-form-container::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(76, 175, 80, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .form-title {
            font-size: 36px;
            color: var(--primary-green);
            margin-bottom: 40px;
            text-align: center;
            font-weight: 800;
            position: relative;
            padding-bottom: 20px;
        }

        .form-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--light-green), var(--medium-green));
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 12px;
            font-weight: 700;
            color: var(--text-dark);
            font-size: 17px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-group label i {
            color: var(--light-green);
        }

        .rating-input {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .rating-star {
            font-size: 42px;
            color: #e0e0e0;
            cursor: pointer;
            transition: all 0.3s ease;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .rating-star:hover {
            transform: scale(1.2) rotate(10deg);
        }

        .rating-star.active {
            color: var(--star-color);
            transform: scale(1.1);
            filter: drop-shadow(0 4px 8px rgba(255, 179, 0, 0.4));
        }

        .form-input {
            width: 100%;
            padding: 18px 25px;
            border: 2px solid #e8f5e9;
            border-radius: 15px;
            font-size: 17px;
            transition: all 0.3s;
            background-color: #f8fff8;
            color: var(--text-dark);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--light-green);
            background-color: white;
            box-shadow: 0 0 0 4px rgba(76, 175, 80, 0.15);
            transform: translateY(-2px);
        }

        .form-input::placeholder {
            color: #9eb3a2;
            opacity: 0.7;
        }

        textarea.form-input {
            min-height: 160px;
            resize: vertical;
            font-family: inherit;
            line-height: 1.8;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .form-actions {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .submit-btn {
            padding: 20px 60px;
            background: linear-gradient(135deg, var(--primary-green), var(--medium-green));
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 20px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 8px 25px rgba(27, 94, 32, 0.3);
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.5s ease;
        }

        .submit-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 35px rgba(27, 94, 32, 0.4);
            background: linear-gradient(135deg, var(--dark-green), var(--primary-green));
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:active {
            transform: translateY(-2px) scale(1.02);
        }

        /* Image upload */
        .image-upload-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
        }

        .upload-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 140px;
            height: 140px;
            border: 3px dashed #c8e6c9;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #f1f8e9, #e8f5e9);
        }

        .upload-label:hover {
            border-color: var(--light-green);
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 10px 25px rgba(76, 175, 80, 0.2);
        }

        .upload-label i {
            font-size: 48px;
            color: var(--light-green);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .upload-label:hover i {
            transform: rotate(15deg) scale(1.2);
        }

        .upload-label span {
            font-size: 16px;
            color: var(--primary-green);
            font-weight: 700;
            text-align: center;
        }

        .image-preview {
            position: relative;
            width: 140px;
            height: 140px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
        }

        .image-preview:hover {
            transform: scale(1.05) rotate(2deg);
        }

        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* No reviews message */
        .no-reviews {
            text-align: center;
            padding: 80px 40px;
            background: linear-gradient(135deg, #ffffff, #f8fff8);
            border-radius: 20px;
            color: var(--text-light);
            grid-column: 1 / -1;
            box-shadow: var(--shadow-light);
            border: 2px dashed #c8e6c9;
        }

        .no-reviews i {
            font-size: 80px;
            margin-bottom: 30px;
            color: #d4e8d4;
            opacity: 0.7;
        }

        .no-reviews h3 {
            font-size: 32px;
            margin-bottom: 20px;
            color: var(--text-light);
            font-weight: 700;
        }

        .no-reviews p {
            font-size: 20px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Back to top */
        .back-to-top {
            position: fixed;
            bottom: 40px;
            right: 40px;
            background: linear-gradient(135deg, var(--primary-green), var(--light-green));
            color: white;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            text-decoration: none;
            box-shadow: 0 8px 25px rgba(27, 94, 32, 0.4);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
            border: none;
            cursor: pointer;
            border: 3px solid white;
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-8px) scale(1.1) rotate(5deg);
            box-shadow: 0 15px 35px rgba(27, 94, 32, 0.5);
            background: linear-gradient(135deg, var(--dark-green), var(--primary-green));
        }

        /* Responsive */
        @media (max-width: 992px) {
            .review-summary {
                grid-template-columns: 1fr;
                padding: 30px;
            }
            
            .page-header h2 {
                font-size: 36px;
            }
            
            .page-header p {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }
            
            .page-header {
                padding: 30px 20px;
            }
            
            .page-header h2 {
                font-size: 32px;
            }
            
            .review-filters {
                flex-direction: column;
                align-items: stretch;
                gap: 20px;
                padding: 20px;
            }
            
            .filter-group {
                justify-content: center;
                width: 100%;
            }
            
            .filter-group:first-child {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .review-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .review-form-container {
                padding: 30px;
            }
            
            .form-title {
                font-size: 30px;
            }
            
            .back-to-top {
                width: 60px;
                height: 60px;
                font-size: 24px;
                bottom: 30px;
                right: 30px;
            }
        }

        @media (max-width: 576px) {
            .reviews-container {
                gap: 20px;
            }
            
            .review-card {
                padding: 25px;
            }
            
            .reviewer-avatar {
                width: 60px;
                height: 60px;
                font-size: 20px;
            }
            
            .review-title {
                font-size: 22px;
            }
            
            .review-text {
                font-size: 16px;
            }
            
            .rating-input {
                justify-content: center;
            }
            
            .rating-star {
                font-size: 36px;
            }
            
            .form-input {
                padding: 15px 20px;
                font-size: 16px;
            }
            
            .submit-btn {
                padding: 18px 40px;
                font-size: 18px;
            }
        }

        /* Animation for review cards */
        .review-card {
            animation: slideUp 0.6s ease forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Stagger animation */
        .reviews-container .review-card:nth-child(1) { animation-delay: 0.1s; }
        .reviews-container .review-card:nth-child(2) { animation-delay: 0.2s; }
        .reviews-container .review-card:nth-child(3) { animation-delay: 0.3s; }
        .reviews-container .review-card:nth-child(4) { animation-delay: 0.4s; }
        .reviews-container .review-card:nth-child(5) { animation-delay: 0.5s; }
        .reviews-container .review-card:nth-child(6) { animation-delay: 0.6s; }
        .reviews-container .review-card:nth-child(7) { animation-delay: 0.7s; }
        .reviews-container .review-card:nth-child(8) { animation-delay: 0.8s; }
        .reviews-container .review-card:nth-child(9) { animation-delay: 0.9s; }
        .reviews-container .review-card:nth-child(10) { animation-delay: 1s; }
    </style>
</head>
<body>
    @include('header')
    
    <!-- Main Content -->
    <div class="container">
        <div>
            <!-- Page Header -->
            <div class="page-header" style="margin-top:20px;">
                <h2><i class="fas fa-star"></i> Our Reviews</h2>
                <p>Real experiences from our community. See what people are saying about Green Earth Plantations.</p>
            </div>

            <!-- Review Summary -->
            
            <!-- Review Filters -->
            <div class="review-filters">
                <div class="filter-group">
                    <span><i class="fas fa-filter"></i> Filter by:</span>
                    <button class="filter-btn active" data-filter="all"><i class="fas fa-star"></i> All Reviews</button>
                    <button class="filter-btn" data-filter="5"><i class="fas fa-star"></i> 5 Stars</button>
                    <button class="filter-btn" data-filter="4"><i class="fas fa-star"></i> 4 Stars</button>
                    <button class="filter-btn" data-filter="3"><i class="fas fa-star"></i> 3 Stars</button>
                    <button class="filter-btn" data-filter="2"><i class="fas fa-star"></i> 2 Stars</button>
                    <button class="filter-btn" data-filter="1"><i class="fas fa-star"></i> 1 Star</button>
                </div>
                <div class="filter-group">
                    <span><i class="fas fa-sort"></i> Sort by:</span>
                    <select class="sort-select" id="sort-select">
                        <option value="recent">Most Recent</option>
                        <option value="highest">Highest Rated</option>
                        <option value="lowest">Lowest Rated</option>
                        <option value="oldest">Oldest First</option>
                    </select>
                </div>
            </div>

            <!-- Reviews List -->
            <div class="reviews-container" id="reviews-container">
                @forelse($reviews as $review)
                    <div class="review-card" data-rating="{{ $review->rating }}" data-date="{{ $review->created_at }}">
                        <div class="review-header">
                            <div class="reviewer-info">
                                <div class="reviewer-avatar">
                                    {{ strtoupper(substr($review->name,0,1)) }}{{ strtoupper(substr(strstr($review->name,' ') ?? '',1,1)) }}
                                </div>
                                <div class="reviewer-details">
                                    <h4>{{ $review->name }}</h4>
                                    <div class="review-date">
                                        <i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($review->created_at)->format('M d, Y') }}
                                    </div>
                                    <div class="product-type-badge">
                                        <i class="fas fa-leaf"></i> {{ $review->product_type ?? 'General' }}
                                    </div>
                                </div>
                            </div>
                            <div class="review-rating">
                                <div class="stars">
                                    @for($i=1; $i<=5; $i++)
                                        <i class="{{ $i <= $review->rating ? 'fas fa-star' : 'far fa-star' }}"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <h3 class="review-title">{{ $review->title }}</h3>
                        <p class="review-text">{{ $review->review }}</p>
                    </div>
                @empty
                    <div class="no-reviews">
                        <i class="far fa-star"></i>
                        <h3>No Reviews Yet</h3>
                        <p>Be the first to share your experience with Green Earth Plantations!</p>
                    </div>
                @endforelse
            </div>

            <!-- Review Form -->
            <div class="review-form-container">
                <h3 class="form-title">Share Your Experience</h3>
                <form id="review-form" action="review" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="reviewer-name"><i class="fas fa-user"></i> Your Name *</label>
                        <input type="text" id="reviewer-name" name="name" class="form-input" placeholder="Enter your full name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="review-title"><i class="fas fa-heading"></i> Review Title *</label>
                        <input type="text" id="review-title" name="title" class="form-input" placeholder="Summarize your experience in a few words" required>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fas fa-star"></i> Your Rating *</label>
                        <div class="rating-input" id="rating-stars">
                            <i class="far fa-star rating-star" data-value="1"></i>
                            <i class="far fa-star rating-star" data-value="2"></i>
                            <i class="far fa-star rating-star" data-value="3"></i>
                            <i class="far fa-star rating-star" data-value="4"></i>
                            <i class="far fa-star rating-star" data-value="5"></i>
                        </div>
                        <input type="hidden" id="rating-value" name="rating" value="0" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="review-text"><i class="fas fa-comment"></i> Your Review *</label>
                        <textarea id="review-text" class="form-input" name="review" placeholder="Tell us about your experience with our plantation products..." required rows="5"></textarea>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="reviewer-email"><i class="fas fa-envelope"></i> Email Address</label>
                            <input type="email" id="reviewer-email" class="form-input" name="email" placeholder="Optional, for verification only">
                        </div>
                        
                        <div class="form-group">
                            <label for="product-type"><i class="fas fa-leaf"></i> Product Type</label>
                            <select id="product-type" name="product_type" class="form-input">
                                <option value="">Select a product type</option>
                                <option value="organic-vegetables">Organic Vegetables</option>
                                <option value="fruit-trees">Fruit Trees</option>
                                <option value="herbs">Herbs</option>
                                <option value="coffee-plants">Coffee Plants</option>
                                <option value="plantation-tours">Plantation Tours</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label><i class="fas fa-camera"></i> Upload Photos (Optional)</label>
                        <div class="image-upload-container">
                            <div class="upload-label" id="upload-label">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span>Add Photos</span>
                            </div>
                            <div id="image-preview-container"></div>
                        </div>
                        <input type="file" id="image-upload" name="image" accept="image/*" multiple>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Submit Review
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if(session('success'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: "{{ session('success') }}",
        confirmButtonColor: '#1b5e20',
        background: '#f8fff8',
        iconColor: '#4caf50'
    });
    </script>
    @endif

    @include('footer')
    
    <button class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Back to top button
        const backToTopBtn = document.querySelector('.back-to-top');
        if (backToTopBtn) {
            window.addEventListener('scroll', function () {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            });

            backToTopBtn.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        // Rating stars
        const ratingStars = document.querySelectorAll('.rating-star');
        const ratingValue = document.getElementById('rating-value');

        function setRating(value) {
            if (ratingValue) ratingValue.value = value;
            ratingStars.forEach((star, index) => {
                if (index < value) {
                    star.classList.remove('far');
                    star.classList.add('fas', 'active');
                } else {
                    star.classList.remove('fas', 'active');
                    star.classList.add('far');
                }
            });
        }

        ratingStars.forEach(star => {
            star.addEventListener('click', function () {
                const value = parseInt(this.getAttribute('data-value'));
                setRating(value);
            });
            
            // Hover effect
            star.addEventListener('mouseenter', function () {
                const hoverValue = parseInt(this.getAttribute('data-value'));
                ratingStars.forEach((s, index) => {
                    if (index < hoverValue) {
                        s.classList.add('fas');
                        s.classList.remove('far');
                    }
                });
            });
            
            star.addEventListener('mouseleave', function () {
                const currentValue = parseInt(ratingValue.value);
                ratingStars.forEach((s, index) => {
                    if (index >= currentValue) {
                        s.classList.remove('fas');
                        s.classList.add('far');
                    }
                });
            });
        });

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const reviewCards = document.querySelectorAll('.review-card');
        const sortSelect = document.getElementById('sort-select');

        function filterReviews(rating) {
            reviewCards.forEach(card => {
                if (rating === 'all' || card.dataset.rating === rating) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function sortReviews(sortBy) {
            const cardsArray = Array.from(reviewCards).filter(card => card.style.display !== 'none');
            
            cardsArray.sort((a, b) => {
                switch(sortBy) {
                    case 'recent':
                        return new Date(b.dataset.date) - new Date(a.dataset.date);
                    case 'oldest':
                        return new Date(a.dataset.date) - new Date(b.dataset.date);
                    case 'highest':
                        return parseInt(b.dataset.rating) - parseInt(a.dataset.rating);
                    case 'lowest':
                        return parseInt(a.dataset.rating) - parseInt(b.dataset.rating);
                    default:
                        return 0;
                }
            });
            
            const container = document.getElementById('reviews-container');
            cardsArray.forEach(card => container.appendChild(card));
        }

        // Filter buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                const rating = this.dataset.filter;
                filterReviews(rating);
                
                // Re-sort after filtering
                if (sortSelect) {
                    sortReviews(sortSelect.value);
                }
                
                // Animation effect
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Sort functionality
        if (sortSelect) {
            sortSelect.addEventListener('change', function () {
                sortReviews(this.value);
            });
        }

        // Form validation
        const reviewForm = document.getElementById('review-form');
        if (reviewForm) {
            reviewForm.addEventListener('submit', function (e) {
                const name = document.getElementById('reviewer-name')?.value?.trim();
                const title = document.getElementById('review-title')?.value?.trim();
                const rating = ratingValue?.value || 0;
                const reviewText = document.getElementById('review-text')?.value?.trim();

                if (!name || !title || Number(rating) === 0 || !reviewText) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'warning',
                        title: 'Required Fields',
                        text: 'Please fill all required fields and select a rating',
                        confirmButtonColor: '#1b5e20',
                        background: '#f8fff8',
                        iconColor: '#ffb300'
                    });
                    return;
                }
            });
        }

        // Animate bars on scroll
        const animateBars = () => {
            const bars = document.querySelectorAll('.bar');
            bars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 300);
            });
        };

        // Trigger animation when summary is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateBars();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const reviewSummary = document.querySelector('.review-summary');
        if (reviewSummary) {
            observer.observe(reviewSummary);
        }

        // Add hover effects to all review cards
        reviewCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });

        // Initialize tooltips for rating stars
        ratingStars.forEach((star, index) => {
            star.title = `${index + 1} Star${index > 0 ? 's' : ''}`;
        });

        // Image upload preview (optional)
        const uploadLabel = document.getElementById('upload-label');
        const imageUpload = document.getElementById('image-upload');
        const imagePreviewContainer = document.getElementById('image-preview-container');

        if (uploadLabel && imageUpload) {
            uploadLabel.addEventListener('click', function () {
                imageUpload.click();
            });

            imageUpload.addEventListener('change', function () {
                if (!imagePreviewContainer) return;

                imagePreviewContainer.innerHTML = '';
                for (let file of this.files) {
                    if (!file.type.startsWith('image/')) continue;

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const preview = document.createElement('div');
                        preview.className = 'image-preview';
                        preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
                        imagePreviewContainer.appendChild(preview);
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    });
    </script>
</body>
</html>