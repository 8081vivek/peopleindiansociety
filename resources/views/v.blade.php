<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People of Indian Society | Tree Management Dashboard</title>
        <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #10B981;
            --primary-dark: #059669;
            --primary-light: #D1FAE5;
            --secondary: #3B82F6;
            --accent: #F59E0B;
            --danger: #EF4444;
            --success: #10B981;
            --warning: #F59E0B;
            --dark: #1F2937;
            --darker: #111827;
            --light: #F9FAFB;
            --gray: #6B7280;
            --gray-light: #E5E7EB;
            
            --gradient-primary: linear-gradient(135deg, #10B981 0%, #059669 100%);
            --gradient-secondary: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
            --gradient-accent: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
            --gradient-dark: linear-gradient(135deg, #1F2937 0%, #111827 100%);
            
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 8px 32px rgba(16, 185, 129, 0.12);
            --shadow-xl: 0 16px 48px rgba(16, 185, 129, 0.15);
            
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
            --radius-full: 9999px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: serif;
            background: linear-gradient(135deg, #F0FDF4 0%, #ECFDF5 50%, #F0F9FF 100%);
            color: var(--dark);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Mobile First Design */
        .container {
            width: 100%;
            padding: 0 15px;
            margin: 0 auto;
        }

        /* Header */
        .mobile-header {
            display: none;
            background: white;
            padding: 15px;
            box-shadow: var(--shadow-md);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .mobile-menu-btn {
            background: none;
            border: none;
            font-size: 24px;
            color: var(--primary);
            cursor: pointer;
        }

        /* Sidebar - Mobile Hidden by Default */
        .sidebar {
            background: var(--darker);
            color: white;
            padding: 30px 20px;
            position: fixed;
            width: 280px;
            height: 100vh;
            overflow-y: auto;
            z-index: 1000;
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .logo-text {
            font-family: serif;
            font-weight: 900;
            font-size: 24px;
            background: linear-gradient(135deg, #10B981 0%, #3B82F6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Navigation */
        .nav-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 16px 20px;
            margin: 8px 0;
            border-radius: var(--radius-md);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .nav-item.active {
            background: rgba(16, 185, 129, 0.1);
            color: var(--primary);
        }

        .nav-icon {
            font-size: 20px;
            width: 24px;
            text-align: center;
        }

        .nav-badge {
            margin-left: auto;
            background: var(--primary);
            color: white;
            padding: 4px 10px;
            border-radius: var(--radius-full);
            font-size: 12px;
            font-weight: 600;
        }

        /* Main Content */
        .main-content {
            padding: 20px;
            margin-left: 280px;
            transition: margin-left 0.3s ease;
        }

        /* Top Header */
        .top-header {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 30px;
        }

        @media (min-width: 768px) {
            .top-header {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
        }

        .page-title h1 {
            font-family: serif;
            font-size: 28px;
            font-weight: 900;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 5px;
        }

        .page-title p {
            color: var(--gray);
            font-size: 14px;
        }

        .search-box {
            position: relative;
            width: 100%;
        }

        @media (min-width: 768px) {
            .search-box {
                width: 300px;
            }
        }

        .search-box input {
            width: 100%;
            padding: 12px 20px 12px 45px;
            border: 2px solid var(--gray-light);
            border-radius: var(--radius-full);
            font-size: 14px;
            transition: all 0.3s ease;
            background: white;
        }

        .search-box input:focus {
            border-color: var(--primary);
            outline: none;
        }

        .search-box i {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        /* Stats Grid - Mobile First */
        .stats-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        @media (min-width: 640px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .stat-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 20px;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .stat-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            background: var(--primary-light);
            color: var(--primary);
        }

        .stat-trend {
            padding: 4px 10px;
            border-radius: var(--radius-full);
            font-size: 12px;
            font-weight: 600;
            background: var(--success);
            color: white;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 5px;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @media (min-width: 768px) {
            .stat-value {
                font-size: 42px;
            }
        }

        .stat-label {
            color: var(--gray);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Quick Actions */
        .quick-actions-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
            margin-bottom: 30px;
        }

        @media (min-width: 640px) {
            .quick-actions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .quick-actions-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .action-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 25px;
            text-align: center;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .action-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary);
        }

        .action-icon {
            width: 60px;
            height: 60px;
            border-radius: var(--radius-full);
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin: 0 auto 15px;
        }

        .action-card h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .action-card p {
            color: var(--gray);
            font-size: 12px;
            margin-bottom: 10px;
        }

        /* Main Grid */
        .main-grid {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-bottom: 30px;
        }

        @media (min-width: 1024px) {
            .main-grid {
                flex-direction: row;
            }
            
            .left-column {
                flex: 2;
            }
            
            .right-column {
                flex: 1;
            }
        }

        /* Tree Map */
        .tree-map-container, .growth-chart-container, .recent-trees, .progress-section {
            background: white;
            border-radius: var(--radius-lg);
            padding: 20px;
            box-shadow: var(--shadow-md);
            margin-bottom: 20px;
        }

        .tree-map {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #F0FDF4 0%, #D1FAE5 100%);
            border-radius: var(--radius-md);
            position: relative;
            overflow: hidden;
        }

        @media (min-width: 768px) {
            .tree-map {
                height: 400px;
            }
        }

        .tree-point {
            position: absolute;
            width: 20px;
            height: 20px;
            background: var(--primary);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .tree-point:hover {
            transform: translate(-50%, -50%) scale(1.3);
        }

        /* Growth Chart */
        #growthChart {
            width: 100% !important;
            height: 300px !important;
        }

        @media (min-width: 768px) {
            #growthChart {
                height: 350px !important;
            }
        }

        /* Recent Trees */
        .tree-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: var(--radius-md);
            margin-bottom: 10px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .tree-item:hover {
            border-color: var(--primary-light);
            background: var(--primary-light);
            transform: translateX(5px);
        }

        .tree-avatar {
            width: 50px;
            height: 50px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-right: 15px;
            background: var(--gradient-primary);
            color: white;
            flex-shrink: 0;
        }

        .tree-info {
            flex: 1;
            min-width: 0; /* Important for text truncation */
        }

        .tree-info span {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Progress Ring */
        .progress-ring-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto 20px;
        }

        @media (min-width: 768px) {
            .progress-ring-container {
                width: 200px;
                height: 200px;
            }
        }

        .progress-ring-bg {
            fill: none;
            stroke: var(--gray-light);
            stroke-width: 8;
        }

        .progress-ring-fill {
            fill: none;
            stroke: var(--primary);
            stroke-width: 8;
            stroke-linecap: round;
            stroke-dasharray: 440;
            stroke-dashoffset: 440;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }

        .progress-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .progress-value {
            font-size: 32px;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @media (min-width: 768px) {
            .progress-value {
                font-size: 48px;
            }
        }

        /* Achievements */
        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }

        @media (min-width: 640px) {
            .achievements-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .achievements-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .achievement-card {
            background: white;
            border-radius: var(--radius-lg);
            padding: 20px;
            text-align: center;
            box-shadow: var(--shadow-md);
            transition: all 0.3s ease;
        }

        .achievement-badge {
            width: 50px;
            height: 50px;
            border-radius: var(--radius-full);
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            margin: 0 auto 10px;
        }

        /* Buttons */
        .btn {
            padding: 10px 20px;
            border-radius: var(--radius-md);
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .btn-primary {
            background: var(--gradient-primary);
            color: white;
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
        }

        /* Mobile Menu Toggle */
        .mobile-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Responsive Sidebar */
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .mobile-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            
            .mobile-overlay.active {
                display: block;
            }
        }

        /* Tablet Adjustments */
        @media (max-width: 768px) {
            .main-content {
                padding: 70px 15px 20px;
            }
            
            .stat-card {
                padding: 15px;
            }
            
            .stat-icon {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }
            
            .action-card {
                padding: 20px;
            }
            
            .tree-item {
                padding: 12px;
            }
            
            .tree-avatar {
                width: 40px;
                height: 40px;
                font-size: 20px;
                margin-right: 10px;
            }
        }

        /* Small Mobile */
        @media (max-width: 480px) {
            .page-title h1 {
                font-size: 24px;
            }
            
            .stat-value {
                font-size: 28px;
            }
            
            .achievements-grid {
                grid-template-columns: 1fr;
            }
            
            .quick-actions-grid {
                gap: 10px;
            }
            
            .action-card {
                padding: 15px;
            }
        }

        /* Loading Animation */
        .loader {
            width: 40px;
            height: 40px;
            border: 4px solid var(--gray-light);
            border-top: 4px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 20px auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Notifications */
        .notification-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2000;
            max-width: 300px;
            width: calc(100% - 40px);
        }

        .notification {
            background: white;
            border-radius: var(--radius-md);
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: var(--shadow-xl);
            display: flex;
            align-items: center;
            gap: 12px;
            animation: slideInRight 0.3s ease-out forwards;
            border-left: 4px solid var(--primary);
        }

        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .notification-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        /* Modal */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 3000;
            padding: 20px;
        }

        .modal-content {
            background: white;
            border-radius: var(--radius-lg);
            padding: 25px;
            max-width: 500px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
        }

        /* Mobile Bottom Navigation */
        .mobile-bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            padding: 10px;
            box-shadow: 0 -4px 16px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .mobile-bottom-nav .nav-item {
            flex-direction: column;
            padding: 10px;
            text-align: center;
            font-size: 12px;
        }

        .mobile-bottom-nav .nav-icon {
            font-size: 18px;
            margin-bottom: 5px;
        }

        @media (max-width: 768px) {
            .mobile-bottom-nav {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Hide desktop elements on mobile */
        @media (max-width: 768px) {
            .desktop-only {
                display: none !important;
            }
        }

        /* Show mobile elements only on mobile */
        .mobile-only {
            display: none !important;
        }

        @media (max-width: 768px) {
            .mobile-only {
                display: block !important;
            }
        }

        /* Utility Classes */
        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .text-center {
            text-align: center;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .p-20 {
            padding: 20px;
        }

        /* Section Titles */
        .section-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: var(--primary);
        }

        /* Empty States */
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: var(--gray);
        }

        .empty-state i {
            font-size: 48px;
            margin-bottom: 15px;
            color: var(--gray-light);
        }

        /* Tree Health Indicators */
        .tree-health {
            display: inline-block;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin-right: 6px;
        }

        .tree-health.excellent { background: var(--success); }
        .tree-health.good { background: var(--warning); }
        .tree-health.poor { background: var(--danger); }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--gray-light);
            border-radius: var(--radius-full);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: var(--radius-full);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
        }

        /* Responsive Table */
        .responsive-table {
            width: 100%;
            overflow-x: auto;
        }

        .responsive-table table {
            min-width: 600px;
            width: 100%;
        }

        /* Card Actions */
        .card-actions {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        /* Loading Skeleton */
        .skeleton {
            background: linear-gradient(90deg, var(--gray-light) 25%, var(--light) 50%, var(--gray-light) 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: var(--radius-md);
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
    </style>
</head>
<body>
    <!-- Mobile Header -->
    <div class="mobile-header">
        <button class="mobile-menu-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <div class="logo-text">GreenTrack</div>
        <div class="user-avatar-mobile" style="width: 40px; height: 40px; border-radius: 50%; background: var(--gradient-primary); display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">
            AS
        </div>
    </div>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="fas fa-leaf"></i>
            </div>
            <div class="logo-text">GreenTrack</div>
        </div>

        <nav class="nav-menu">
            <div class="nav-item active" onclick="changeTab('dashboard')">
                <div class="nav-icon"><i class="fas fa-home"></i></div>
                <span>Dashboard</span>
                <div class="nav-badge">3</div>
            </div>
            
            <div class="nav-item" onclick="changeTab('trees')">
                <div class="nav-icon"><i class="fas fa-tree"></i></div>
                <span>My Trees</span>
                <div class="nav-badge">47</div>
            </div>
            
            <div class="nav-item" onclick="changeTab('growth')">
                <div class="nav-icon"><i class="fas fa-chart-line"></i></div>
                <span>Growth Analytics</span>
            </div>
            
            <div class="nav-item" onclick="changeTab('volunteer')">
                <div class="nav-icon"><i class="fas fa-hands-helping"></i></div>
                <span>Volunteer Hub</span>
                <div class="nav-badge">New</div>
            </div>
            
            <div class="nav-item desktop-only" onclick="changeTab('community')">
                <div class="nav-icon"><i class="fas fa-users"></i></div>
                <span>Community</span>
            </div>
            
            <div class="nav-item desktop-only" onclick="changeTab('achievements')">
                <div class="nav-icon"><i class="fas fa-trophy"></i></div>
                <span>Achievements</span>
            </div>
            
            <div class="nav-item desktop-only" onclick="changeTab('settings')">
                <div class="nav-icon"><i class="fas fa-cog"></i></div>
                <span>Settings</span>
            </div>
        </nav>

        <div class="user-profile-sidebar desktop-only" style="margin-top: auto; padding-top: 30px; border-top: 2px solid rgba(255,255,255,0.1);">
            <div class="user-info" style="display: flex; align-items: center; gap: 15px;">
                <div class="user-avatar" style="width: 50px; height: 50px; border-radius: 50%; background: var(--gradient-primary); display: flex; align-items: center; justify-content: center; font-size: 20px; color: white;">
                    AS
                </div>
                <div>
                    <div style="font-weight: 600;">Aarav Sharma</div>
                    <div style="font-size: 12px; color: var(--gray);">Level 8 Volunteer</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="page-title">
                <h1>Tree Dashboard</h1>
                <p>Track, monitor, and celebrate your green journey</p>
            </div>
            
            <div class="search-box desktop-only">
                <input type="text" placeholder="Search trees, locations..." onfocus="this.style.borderColor='var(--primary)'">
                <i class="fas fa-search"></i>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <div class="stat-trend">+12%</div>
                </div>
                <div class="stat-value">47</div>
                <div class="stat-label">Trees Planted</div>
                <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: 85%; height: 100%; background: var(--gradient-primary); border-radius: var(--radius-full);"></div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #DBEAFE; color: var(--secondary);">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-trend">+8%</div>
                </div>
                <div class="stat-value">78%</div>
                <div class="stat-label">Growth Rate</div>
                <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: 78%; height: 100%; background: var(--gradient-secondary); border-radius: var(--radius-full);"></div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #FEF3C7; color: var(--accent);">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-trend">↑ 2</div>
                </div>
                <div class="stat-value">#3</div>
                <div class="stat-label">City Rank</div>
                <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: 90%; height: 100%; background: var(--gradient-accent); border-radius: var(--radius-full);"></div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #FCE7F3; color: #DB2777;">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="stat-trend">17%</div>
                </div>
                <div class="stat-value">83%</div>
                <div class="stat-label">Volunteer Progress</div>
                <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: 83%; height: 100%; background: linear-gradient(135deg, #EC4899 0%, #DB2777 100%); border-radius: var(--radius-full);"></div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions-grid">
            <div class="action-card" onclick="openPhotoUpload()">
                <div class="action-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>Upload Tree Photo</h3>
                <p>Day 15 progress update required</p>
                <div class="action-badge" style="padding: 4px 10px; background: var(--primary-light); color: var(--primary); border-radius: var(--radius-full); font-size: 11px; font-weight: 600; display: inline-block;">
                    <i class="fas fa-clock" style="margin-right: 5px;"></i> Due Today
                </div>
            </div>
            
            <div class="action-card" onclick="plantNewTree()">
                <div class="action-icon">
                    <i class="fas fa-seedling"></i>
                </div>
                <h3>Plant New Tree</h3>
                <p>Add to your green collection</p>
                <div class="action-badge" style="padding: 4px 10px; background: var(--primary-light); color: var(--primary); border-radius: var(--radius-full); font-size: 11px; font-weight: 600; display: inline-block;">
                    <i class="fas fa-plus" style="margin-right: 5px;"></i> Quick Add
                </div>
            </div>
            
            <div class="action-card" onclick="viewCommunity()">
                <div class="action-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Community Help</h3>
                <p>Connect with fellow planters</p>
                <div class="action-badge" style="padding: 4px 10px; background: var(--primary-light); color: var(--primary); border-radius: var(--radius-full); font-size: 11px; font-weight: 600; display: inline-block;">
                    <i class="fas fa-comments" style="margin-right: 5px;"></i> 24 Online
                </div>
            </div>
        </div>

        <!-- Mobile Search (Hidden on Desktop) -->
        <div class="search-box mobile-only mb-20">
            <input type="text" placeholder="Search trees, locations..." onfocus="this.style.borderColor='var(--primary)'">
            <i class="fas fa-search"></i>
        </div>

        <!-- Main Grid -->
        <div class="main-grid">
            <!-- Left Column -->
            <div class="left-column">
                <!-- Tree Map -->
                <div class="tree-map-container">
                    <div class="section-title">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Tree Location Map</span>
                    </div>
                    
                    <div class="tree-map" id="treeMap">
                        <!-- Tree points will be added by JavaScript -->
                    </div>
                    
                    <div style="margin-top: 20px; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div style="width: 12px; height: 12px; background: var(--primary); border-radius: 50%;"></div>
                            <span style="font-size: 13px;">Your Trees (12)</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <div style="width: 12px; height: 12px; background: var(--secondary); border-radius: 50%;"></div>
                            <span style="font-size: 13px;">Community Trees (35)</span>
                        </div>
                    </div>
                </div>
                
                <!-- Growth Chart -->
                <div class="growth-chart-container" style="margin-top: 20px;">
                    <div class="section-title">
                        <i class="fas fa-chart-line"></i>
                        <span>Growth Analytics</span>
                    </div>
                    
                    <canvas id="growthChart"></canvas>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="right-column">
                <!-- Volunteer Progress -->
                <div class="progress-section">
                    <div class="section-title">
                        <i class="fas fa-award"></i>
                        <span>Volunteer Progress</span>
                    </div>
                    
                    <div class="progress-ring-container">
                        <svg class="progress-ring" width="100%" height="100%" viewBox="0 0 200 200">
                            <circle class="progress-ring-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="progress-ring-fill" id="progressFill" cx="100" cy="100" r="90"></circle>
                        </svg>
                        <div class="progress-text">
                            <div class="progress-value" id="progressValue">83%</div>
                            <div style="font-size: 13px; color: var(--gray);">Complete</div>
                        </div>
                    </div>
                    
                    <div style="margin-top: 20px;">
                        <h3 style="font-size: 15px; margin-bottom: 15px;">Next Level Requirements</h3>
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span style="font-size: 13px;">10 Trees Planted</span>
                                <span style="font-size: 13px; color: var(--success); font-weight: 600;">✓ Completed</span>
                            </div>
                            <div style="height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                                <div style="width: 100%; height: 100%; background: var(--success); border-radius: var(--radius-full);"></div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span style="font-size: 13px;">50% Trees at 30%+ Growth</span>
                                <span style="font-size: 13px; color: var(--success); font-weight: 600;">7/10 ✓</span>
                            </div>
                            <div style="height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                                <div style="width: 70%; height: 100%; background: var(--success); border-radius: var(--radius-full);"></div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span style="font-size: 13px;">Regular Photo Updates</span>
                                <span style="font-size: 13px; color: var(--warning); font-weight: 600;">8/10 ⏳</span>
                            </div>
                            <div style="height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                                <div style="width: 80%; height: 100%; background: var(--warning); border-radius: var(--radius-full);"></div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary" onclick="celebrateVolunteer()" style="width: 100%; padding: 12px; margin-top: 20px;">
                        <i class="fas fa-award" style="margin-right: 10px;"></i> Become Volunteer
                    </button>
                </div>
                
                <!-- Recent Trees -->
                <div class="recent-trees" style="margin-top: 20px;">
                    <div class="section-title">
                        <i class="fas fa-tree"></i>
                        <span>Recent Trees</span>
                    </div>
                    
                    <div class="tree-item">
                        <div class="tree-avatar">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <div class="tree-info">
                            <span style="font-weight: 600; font-size: 14px;" class="text-truncate">Apple Tree #T012</span>
                            <span style="font-size: 12px; color: var(--gray);">45 days</span>
                            <div style="display: flex; align-items: center; margin-top: 5px;">
                                <span class="tree-health excellent"></span>
                                <span style="font-size: 12px; color: var(--success);">Excellent</span>
                                <span style="margin-left: auto; font-weight: 600; color: var(--primary); font-size: 14px;">85%</span>
                            </div>
                            <div style="font-size: 11px; color: var(--gray); margin-top: 3px;" class="text-truncate">
                                <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> Central Park, Delhi
                            </div>
                        </div>
                    </div>
                    
                    <div class="tree-item">
                        <div class="tree-avatar" style="background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);">
                            <i class="fas fa-tree"></i>
                        </div>
                        <div class="tree-info">
                            <span style="font-weight: 600; font-size: 14px;" class="text-truncate">Neem Tree #T011</span>
                            <span style="font-size: 12px; color: var(--gray);">38 days</span>
                            <div style="display: flex; align-items: center; margin-top: 5px;">
                                <span class="tree-health good"></span>
                                <span style="font-size: 12px; color: var(--warning);">Good</span>
                                <span style="margin-left: auto; font-weight: 600; color: var(--warning); font-size: 14px;">65%</span>
                            </div>
                            <div style="font-size: 11px; color: var(--gray); margin-top: 3px;" class="text-truncate">
                                <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> Residential Area
                            </div>
                        </div>
                    </div>
                    
                    <div class="tree-item">
                        <div class="tree-avatar" style="background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="tree-info">
                            <span style="font-weight: 600; font-size: 14px;" class="text-truncate">Mango Tree #T010</span>
                            <span style="font-size: 12px; color: var(--gray);">30 days</span>
                            <div style="display: flex; align-items: center; margin-top: 5px;">
                                <span class="tree-health poor"></span>
                                <span style="font-size: 12px; color: var(--danger);">Needs Care</span>
                                <span style="margin-left: auto; font-weight: 600; color: var(--danger); font-size: 14px;">30%</span>
                            </div>
                            <div style="font-size: 11px; color: var(--gray); margin-top: 3px;" class="text-truncate">
                                <i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> School Ground
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-outline" onclick="viewAllTrees()" style="width: 100%; margin-top: 15px;">
                        <i class="fas fa-eye" style="margin-right: 8px;"></i> View All Trees
                    </button>
                </div>
            </div>
        </div>

        <!-- Achievements -->
        <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow-md); margin-top: 30px;">
            <div class="section-title" style="margin-bottom: 20px;">
                <i class="fas fa-trophy"></i>
                <span>Recent Achievements</span>
                <span style="margin-left: auto; font-size: 13px; color: var(--primary); font-weight: 600;">12/25 Unlocked</span>
            </div>
            
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="achievement-badge">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h4 style="font-size: 14px; margin-bottom: 5px;">First Plant</h4>
                    <p style="font-size: 11px; color: var(--gray);">Your journey begins</p>
                    <div style="margin-top: 10px; font-size: 11px; color: var(--success);">
                        <i class="fas fa-check-circle"></i> Unlocked
                    </div>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-badge">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h4 style="font-size: 14px; margin-bottom: 5px;">Green Warrior</h4>
                    <p style="font-size: 11px; color: var(--gray);">10 trees planted</p>
                    <div style="margin-top: 10px; font-size: 11px; color: var(--success);">
                        <i class="fas fa-check-circle"></i> Unlocked
                    </div>
                </div>
                
                <div class="achievement-card">
                    <div class="achievement-badge">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h4 style="font-size: 14px; margin-bottom: 5px;">Consistent Care</h4>
                    <p style="font-size: 11px; color: var(--gray);">30 days of updates</p>
                    <div style="margin-top: 10px; font-size: 11px; color: var(--success);">
                        <i class="fas fa-check-circle"></i> Unlocked
                    </div>
                </div>
                
                <div class="achievement-card locked">
                    <div class="achievement-badge" style="background: var(--gray-light); color: var(--gray);">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4 style="font-size: 14px; margin-bottom: 5px;">Community Leader</h4>
                    <p style="font-size: 11px; color: var(--gray);">Help 10 planters</p>
                    <div style="margin-top: 10px; font-size: 11px; color: var(--gray);">
                        <i class="fas fa-lock"></i> Locked
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Bottom Navigation -->
        <div class="mobile-bottom-nav">
            <div class="nav-item active" onclick="changeTab('dashboard')">
                <div class="nav-icon"><i class="fas fa-home"></i></div>
                <span>Home</span>
            </div>
            <div class="nav-item" onclick="changeTab('trees')">
                <div class="nav-icon"><i class="fas fa-tree"></i></div>
                <span>Trees</span>
            </div>
            <div class="nav-item" onclick="openPhotoUpload()">
                <div class="nav-icon"><i class="fas fa-camera"></i></div>
                <span>Upload</span>
            </div>
            <div class="nav-item" onclick="changeTab('volunteer')">
                <div class="nav-icon"><i class="fas fa-user"></i></div>
                <span>Profile</span>
            </div>
        </div>
    </main>

    <!-- Notifications Container -->
    <div class="notification-container" id="notificationContainer"></div>

    <!-- Photo Upload Modal -->
    <div class="modal-overlay" id="photoModal">
        <div class="modal-content">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h2 style="font-size: 20px; font-weight: 700;">Upload Tree Photo</h2>
                <button onclick="closeModal()" style="background: none; border: none; font-size: 24px; color: var(--gray); cursor: pointer;">×</button>
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px;">Select Tree</label>
                <select style="width: 100%; padding: 12px; border: 2px solid var(--gray-light); border-radius: var(--radius-md); font-size: 14px;">
                    <option>Apple Tree #T012 - Central Park</option>
                    <option>Neem Tree #T011 - Residential Area</option>
                    <option>Mango Tree #T010 - School Ground</option>
                </select>
            </div>
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px;">Upload Photo</label>
                <div class="upload-area" onclick="triggerFileUpload()" style="border: 2px dashed var(--primary); border-radius: var(--radius-md); padding: 40px; text-align: center; cursor: pointer;">
                    <i class="fas fa-cloud-upload-alt" style="font-size: 36px; color: var(--primary); margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 8px; font-size: 16px;">Click to Upload</h3>
                    <p style="color: var(--gray); font-size: 13px;">or drag and drop</p>
                    <p style="font-size: 11px; color: var(--gray); margin-top: 8px;">PNG, JPG up to 10MB</p>
                </div>
                <input type="file" id="treePhoto" accept="image/*" style="display: none;" onchange="previewPhoto(event)">
                <img id="photoPreview" style="width: 100%; border-radius: var(--radius-md); margin-top: 15px; display: none;">
            </div>
            
            <div style="background: var(--primary-light); padding: 15px; border-radius: var(--radius-md); margin-bottom: 20px;">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div style="width: 36px; height: 36px; background: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                        <i class="fas fa-info"></i>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 3px; font-size: 14px;">Auto Tagging Enabled</h4>
                        <p style="font-size: 12px; color: var(--gray);">Location and time will be automatically tagged</p>
                    </div>
                </div>
            </div>
            
            <button class="btn btn-primary" onclick="uploadPhoto()" style="width: 100%; padding: 14px; font-size: 15px;">
                <i class="fas fa-upload" style="margin-right: 8px;"></i> Upload Photo
            </button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Initialize the dashboard
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize tree map
            initializeTreeMap();
            
            // Initialize growth chart
            initializeGrowthChart();
            
            // Initialize progress ring
            initializeProgressRing();
            
            // Show welcome notification
            setTimeout(() => {
                showNotification('Welcome Back!', 'Your trees have grown 5% since yesterday!', 'success');
            }, 1000);
            
            // Simulate tree growth
            simulateTreeGrowth();
            
            // Handle responsive behavior
            handleResponsive();
        });

        // Handle responsive behavior
        function handleResponsive() {
            // Check screen size on load
            checkScreenSize();
            
            // Check screen size on resize
            window.addEventListener('resize', checkScreenSize);
        }

        // Check screen size and adjust UI
        function checkScreenSize() {
            const width = window.innerWidth;
            
            if (width < 1024) {
                // Mobile/Tablet behavior
                document.querySelector('.sidebar').classList.remove('active');
                document.querySelector('.mobile-overlay').classList.remove('active');
            } else {
                // Desktop behavior
                document.querySelector('.sidebar').classList.add('active');
            }
        }

        // Toggle sidebar on mobile
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const overlay = document.querySelector('.mobile-overlay');
            
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        // Initialize Tree Map
        function initializeTreeMap() {
            const treeMap = document.getElementById('treeMap');
            treeMap.innerHTML = '';
            
            const treePoints = [
                { top: '30%', left: '40%', type: 'user' },
                { top: '60%', left: '25%', type: 'user' },
                { top: '45%', left: '65%', type: 'user' },
                { top: '20%', left: '70%', type: 'community' },
                { top: '75%', left: '55%', type: 'community' },
                { top: '35%', left: '20%', type: 'community' },
                { top: '65%', left: '75%', type: 'user' },
                { top: '25%', left: '50%', type: 'community' }
            ];

            treePoints.forEach((point, index) => {
                const treePoint = document.createElement('div');
                treePoint.className = 'tree-point';
                treePoint.style.top = point.top;
                treePoint.style.left = point.left;
                treePoint.style.background = point.type === 'user' ? 'var(--primary)' : 'var(--secondary)';
                treePoint.style.opacity = '0';
                
                // Animate each point with delay
                setTimeout(() => {
                    treePoint.style.opacity = '1';
                    treePoint.style.transform = 'translate(-50%, -50%) scale(1)';
                }, index * 100);
                
                treePoint.onclick = function() {
                    showNotification(
                        'Tree Details',
                        point.type === 'user' ? 'Your tree planted 45 days ago' : 'Community tree - Planted by Rajesh',
                        'info'
                    );
                };
                
                treeMap.appendChild(treePoint);
            });
        }

        // Initialize Growth Chart
        function initializeGrowthChart() {
            const ctx = document.getElementById('growthChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Tree Growth %',
                        data: [30, 45, 60, 75, 85, 95],
                        borderColor: '#10B981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 2,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#10B981',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(31, 41, 55, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#10B981',
                            borderWidth: 1,
                            cornerRadius: 6,
                            padding: 10,
                            titleFont: {
                                size: 12
                            },
                            bodyFont: {
                                size: 12
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                font: {
                                    size: 11
                                },
                                callback: function(value) {
                                    return value + '%';
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            },
                            ticks: {
                                font: {
                                    size: 11
                                }
                            }
                        }
                    }
                }
            });
        }

        // Initialize Progress Ring
        function initializeProgressRing() {
            const progressValue = 83;
            const progressFill = document.getElementById('progressFill');
            const radius = 90;
            const circumference = 2 * Math.PI * radius;
            
            // Set the stroke dash array and offset
            progressFill.style.strokeDasharray = `${circumference} ${circumference}`;
            progressFill.style.strokeDashoffset = circumference;
            
            // Animate the progress
            setTimeout(() => {
                const offset = circumference - (progressValue / 100) * circumference;
                progressFill.style.strokeDashoffset = offset;
                progressFill.style.transition = 'stroke-dashoffset 1s ease-out';
            }, 300);
        }

        // Show Notification
        function showNotification(title, message, type = 'info') {
            const container = document.getElementById('notificationContainer');
            const notification = document.createElement('div');
            notification.className = 'notification';
            
            const icon = {
                'success': 'check-circle',
                'warning': 'exclamation-triangle',
                'error': 'times-circle',
                'info': 'info-circle'
            }[type] || 'info-circle';
            
            notification.innerHTML = `
                <div class="notification-icon">
                    <i class="fas fa-${icon}"></i>
                </div>
                <div style="flex: 1;">
                    <div style="font-weight: 600; margin-bottom: 5px; font-size: 14px;">${title}</div>
                    <div style="font-size: 12px; color: var(--gray);">${message}</div>
                </div>
                <button onclick="this.parentElement.remove()" style="background: none; border: none; color: var(--gray); cursor: pointer; font-size: 20px; line-height: 1;">×</button>
            `;
            
            container.appendChild(notification);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 5000);
        }

        // Open Photo Upload Modal
        function openPhotoUpload() {
            document.getElementById('photoModal').style.display = 'flex';
            // Close sidebar on mobile when opening modal
            if (window.innerWidth < 1024) {
                toggleSidebar();
            }
        }

        // Close Modal
        function closeModal() {
            document.getElementById('photoModal').style.display = 'none';
            document.getElementById('photoPreview').src = '';
            document.getElementById('photoPreview').style.display = 'none';
            document.getElementById('treePhoto').value = '';
        }

        // Trigger File Upload
        function triggerFileUpload() {
            document.getElementById('treePhoto').click();
        }

        // Preview Photo
        function previewPhoto(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('photoPreview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }

        // Upload Photo
        function uploadPhoto() {
            showNotification('Success!', 'Tree photo uploaded successfully with location tag!', 'success');
            
            // Simulate upload process
            setTimeout(() => {
                closeModal();
                
                // Update stats
                updateUserStats();
                
                // Show celebration
                celebrateAchievement();
            }, 1500);
        }

        // Plant New Tree
        function plantNewTree() {
            showNotification('Planting Wizard', 'Opening tree planting wizard...', 'info');
        }

        // View Community
        function viewCommunity() {
            showNotification('Community Hub', 'Connecting you with fellow planters...', 'info');
        }

        // View All Trees
        function viewAllTrees() {
            showNotification('All Trees', 'Loading all your planted trees...', 'info');
        }

        // Change Tab
        function changeTab(tabName) {
            const navItems = document.querySelectorAll('.nav-item');
            navItems.forEach(item => item.classList.remove('active'));
            event.currentTarget.classList.add('active');
            
            showNotification('Navigation', `Switched to ${tabName} tab`, 'info');
            
            // Close sidebar on mobile after clicking
            if (window.innerWidth < 1024) {
                toggleSidebar();
            }
        }

        // Update User Stats
        function updateUserStats() {
            const treeCount = document.querySelector('.stat-card:nth-child(1) .stat-value');
            const currentCount = parseInt(treeCount.textContent);
            treeCount.textContent = currentCount + 1;
            
            // Add animation
            treeCount.style.transform = 'scale(1.3)';
            setTimeout(() => {
                treeCount.style.transform = 'scale(1)';
            }, 300);
        }

        // Simulate Tree Growth
        function simulateTreeGrowth() {
            setInterval(() => {
                const trees = document.querySelectorAll('.tree-item');
                trees.forEach(tree => {
                    const growthSpan = tree.querySelector('span[style*="font-weight: 600;"]:last-child');
                    if (growthSpan) {
                        let currentGrowth = parseInt(growthSpan.textContent);
                        if (currentGrowth < 100 && Math.random() > 0.5) {
                            const increment = Math.floor(Math.random() * 2) + 1;
                            const newGrowth = Math.min(100, currentGrowth + increment);
                            
                            // Update growth percentage
                            growthSpan.textContent = newGrowth + '%';
                            
                            // Update health indicator
                            const healthIndicator = tree.querySelector('.tree-health');
                            const healthText = tree.querySelector('span[style*="color: var(--"]');
                            
                            if (newGrowth >= 70) {
                                growthSpan.style.color = 'var(--success)';
                                if (healthIndicator) healthIndicator.className = 'tree-health excellent';
                                if (healthText) {
                                    healthText.style.color = 'var(--success)';
                                    healthText.textContent = 'Excellent';
                                }
                            } else if (newGrowth >= 40) {
                                growthSpan.style.color = 'var(--warning)';
                                if (healthIndicator) healthIndicator.className = 'tree-health good';
                                if (healthText) {
                                    healthText.style.color = 'var(--warning)';
                                    healthText.textContent = 'Good';
                                }
                            }
                            
                            // Add growth animation
                            growthSpan.style.transform = 'scale(1.3)';
                            setTimeout(() => {
                                growthSpan.style.transform = 'scale(1)';
                            }, 300);
                        }
                    }
                });
            }, 8000); // Update every 8 seconds
        }

        // Celebrate Volunteer Status
        function celebrateVolunteer() {
            showNotification('Congratulations! 🎉', 'You are now a Certified Volunteer!', 'success');
            
            // Update volunteer progress
            const progressValue = document.getElementById('progressValue');
            const progressFill = document.getElementById('progressFill');
            
            progressValue.textContent = '100%';
            
            // Animate progress ring to 100%
            const radius = 90;
            const circumference = 2 * Math.PI * radius;
            progressFill.style.strokeDashoffset = circumference - (100 / 100) * circumference;
            
            // Add confetti effect
            createConfetti();
        }

        // Celebrate Achievement
        function celebrateAchievement() {
            // Add floating particles
            for(let i = 0; i < 30; i++) {
                createParticle();
            }
        }

        // Create Confetti
        function createConfetti() {
            const colors = ['#10B981', '#3B82F6', '#F59E0B', '#EC4899'];
            
            for(let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.innerHTML = '🎉';
                confetti.style.position = 'fixed';
                confetti.style.fontSize = `${Math.random() * 15 + 10}px`;
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.top = '-50px';
                confetti.style.zIndex = '9999';
                confetti.style.opacity = '0.8';
                confetti.style.pointerEvents = 'none';
                confetti.style.animation = `fall ${Math.random() * 2 + 1}s linear forwards`;
                confetti.style.animationDelay = Math.random() * 0.5 + 's';
                confetti.style.color = colors[Math.floor(Math.random() * colors.length)];
                document.body.appendChild(confetti);
                
                // Remove after animation
                setTimeout(() => confetti.remove(), 3000);
            }
        }

        // Create Particle
        function createParticle() {
            const particle = document.createElement('div');
            particle.innerHTML = '✨';
            particle.style.position = 'fixed';
            particle.style.fontSize = '16px';
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.top = Math.random() * 100 + 'vh';
            particle.style.zIndex = '9999';
            particle.style.opacity = '0.7';
            particle.style.pointerEvents = 'none';
            particle.style.animation = `float ${Math.random() * 1.5 + 0.5}s ease-in-out infinite`;
            document.body.appendChild(particle);
            
            // Remove after some time
            setTimeout(() => particle.remove(), 2000);
        }

        // Handle clicks outside modal
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal-overlay')) {
                closeModal();
            }
        });

        // Handle keyboard shortcuts
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeModal();
            }
            if (event.key === 'p' && event.ctrlKey) {
                event.preventDefault();
                openPhotoUpload();
            }
        });

        // Handle window resize
        let resizeTimeout;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(function() {
                // Reinitialize tree map on resize
                initializeTreeMap();
                
                // Handle chart resizing
                const chartCanvas = document.getElementById('growthChart');
                if (chartCanvas) {
                    chartCanvas.style.width = '100%';
                }
            }, 250);
        });

        // Handle touch gestures for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        document.addEventListener('touchstart', function(event) {
            touchStartX = event.changedTouches[0].screenX;
        }, false);

        document.addEventListener('touchend', function(event) {
            touchEndX = event.changedTouches[0].screenX;
            handleSwipe();
        }, false);

        function handleSwipe() {
            const swipeThreshold = 50;
            
            if (touchEndX < touchStartX - swipeThreshold) {
                // Swipe left - close sidebar if open
                if (window.innerWidth < 1024) {
                    document.querySelector('.sidebar').classList.remove('active');
                    document.querySelector('.mobile-overlay').classList.remove('active');
                }
            }
            
            if (touchEndX > touchStartX + swipeThreshold) {
                // Swipe right - open sidebar if on mobile
                if (window.innerWidth < 1024) {
                    document.querySelector('.sidebar').classList.add('active');
                    document.querySelector('.mobile-overlay').classList.add('active');
                }
            }
        }

        // Add animation to stats cards on scroll
        function animateOnScroll() {
            const statsCards = document.querySelectorAll('.stat-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 100);
                    }
                });
            }, { threshold: 0.1 });

            statsCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        }

        // Initialize animations on scroll
        setTimeout(() => {
            animateOnScroll();
        }, 500);
    </script>
</body>
</html>