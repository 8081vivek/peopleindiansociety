<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Dashboard - People of Indian Society</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <style>
        /* CSS Variables */
        :root {
            --primary: #10B981;
            --primary-dark: #059669;
            --primary-light: #D1FAE5;
            --secondary: #F59E0B;
            --secondary-dark: #D97706;
            --dark: #333;
            --light: #f9f9f9;
            --gray: #666;
            --light-gray: #eee;
            --white: #fff;
            --sidebar-bg: #1a1a2e;
            --sidebar-light: #2d3047;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
            --shadow-hover: 0 15px 30px rgba(0,0,0,0.15);
            --transition: all 0.3s ease;
        }

        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #f5f7fa;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: var(--sidebar-bg);
            color: var(--white);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            transition: var(--transition);
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            text-align: center;
        }

        .sidebar-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--white);
        }

        .sidebar-logo-icon {
            color: var(--primary);
            font-size: 1.8rem;
        }

        .volunteer-info {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .volunteer-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 2rem;
            border: 3px solid var(--primary-light);
        }

        .volunteer-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .volunteer-level {
            font-size: 0.9rem;
            color: rgba(255,255,255,0.7);
            background: var(--primary);
            padding: 3px 10px;
            border-radius: 20px;
            display: inline-block;
        }

        .points-display {
            margin-top: 10px;
            font-size: 0.9rem;
            color: var(--secondary);
            font-weight: 600;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-item {
            padding: 15px 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            cursor: pointer;
            transition: var(--transition);
            border-left: 3px solid transparent;
        }

        .menu-item:hover {
            background: rgba(255,255,255,0.05);
            border-left-color: var(--primary);
        }

        .menu-item.active {
            background: rgba(16, 185, 129, 0.1);
            border-left-color: var(--secondary);
        }

        .menu-icon {
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        .menu-text {
            font-size: 0.95rem;
            font-weight: 500;
        }

        .menu-badge {
            margin-left: auto;
            background: var(--secondary);
            color: var(--white);
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 10px;
            font-weight: 600;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 250px;
            transition: var(--transition);
        }

        /* Top Header */
        .top-header {
            background: var(--white);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
        }

        .page-title h1 {
            font-size: 1.8rem;
            color: var(--primary);
            margin: 0;
        }

        .page-title p {
            font-size: 0.9rem;
            color: var(--gray);
            margin: 0;
        }

        /* Content Wrapper */
        .content-wrapper {
            padding: 30px;
        }

        /* Volunteer Overview Cards */
        .overview-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .overview-card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .overview-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .overview-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--primary);
        }

        .overview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .overview-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: rgba(16, 185, 129, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary);
        }

        .overview-title {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 10px;
        }

        .overview-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
        }

        /* Progress Bars */
        .progress-bar {
            height: 8px;
            background: var(--light-gray);
            border-radius: 4px;
            overflow: hidden;
            margin: 15px 0;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            border-radius: 4px;
            transition: width 1s ease;
        }

        /* Activity Feed */
        .activity-feed {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            border-bottom: 1px solid var(--light-gray);
            transition: var(--transition);
        }

        .activity-item:hover {
            background: var(--light);
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--white);
            background: var(--primary);
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .activity-desc {
            font-size: 0.9rem;
            color: var(--gray);
        }

        .activity-time {
            font-size: 0.8rem;
            color: var(--gray);
            white-space: nowrap;
        }

        /* Tree Map */
        .tree-map-container {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        .tree-map {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #F0FDF4 0%, #D1FAE5 100%);
            border-radius: 10px;
            position: relative;
            overflow: hidden;
        }

        .tree-point {
            position: absolute;
            width: 20px;
            height: 20px;
            background: var(--primary);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
        }

        .tree-point:hover {
            transform: translate(-50%, -50%) scale(1.3);
        }

        /* Badges Section */
        .badges-section {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        .badges-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .badge-item {
            text-align: center;
            padding: 15px;
            border-radius: 10px;
            background: var(--light);
            transition: var(--transition);
        }

        .badge-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .badge-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            margin: 0 auto 10px;
        }

        /* Upcoming Drives */
        .drives-section {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
        }

        .drive-card {
            background: var(--light);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary);
            transition: var(--transition);
        }

        .drive-card:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow);
        }

        .drive-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .drive-title {
            font-weight: 600;
            color: var(--dark);
        }

        .drive-date {
            font-size: 0.9rem;
            color: var(--primary);
            font-weight: 600;
        }

        .drive-info {
            display: flex;
            gap: 20px;
            margin-top: 10px;
            font-size: 0.9rem;
            color: var(--gray);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .menu-toggle {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: 20px;
            }

            .overview-cards {
                grid-template-columns: 1fr;
            }

            .badges-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* Content Sections */
        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <i class="fas fa-seedling sidebar-logo-icon"></i>
                <div>People of <span>Indian </span>Society</div>
            </div>
        </div>

        <div class="volunteer-info">
            <div class="volunteer-avatar">{{substr($data->name,0,1)}}</div>
            <div class="volunteer-name">{{$data->name}}</div>
            
        </div>

        <nav class="sidebar-menu">
            <div class="menu-item active" data-section="dashboard">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-text">Dashboard</span>
            </div>

            <div class="menu-item" data-section="trees">
                <i class="fas fa-tree menu-icon"></i>
                <span class="menu-text">My Trees</span>
                <span class="menu-badge">{{$data2}}</span>
            </div>

            <!-- <div class="menu-item" data-section="drives">
                <i class="fas fa-calendar-alt menu-icon"></i>
                <span class="menu-text">Plantation Drives</span>
                <span class="menu-badge">3</span>
            </div> -->

            <div class="menu-item" data-section="achievements">
                <i class="fas fa-trophy menu-icon"></i>
                <span class="menu-text">Achievements</span>
            </div>

            <div class="menu-item" data-section="community">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-text">Community</span>
                <span class="menu-badge">12</span>
            </div>

            <div class="menu-item" data-section="progress">
                <i class="fas fa-chart-line menu-icon"></i>
                <span class="menu-text">Progress Tracker</span>
            </div>

            <div class="menu-item" id="logoutBtn">
                <i class="fas fa-sign-out-alt menu-icon"></i>
                <span class="menu-text">Logout</span>
            </div>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content" id="mainContent">
        <!-- Top Header -->
        <header class="top-header">
            <div class="header-left">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="page-title">
                    <h1 id="pageTitle">Volunteer Dashboard</h1>
                    <p id="pageSubtitle">Welcome back, {{$data->name}}! Keep up the great work!</p>
                </div>
            </div>

            <div class="header-right">
                <div class="notification-icon" style="position: relative; cursor: pointer;">
                    <i class="fas fa-bell" style="font-size: 1.2rem; color: var(--gray);"></i>
                    <span style="position: absolute; top: -8px; right: -8px; background: var(--secondary); color: white; font-size: 0.7rem; width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">3</span>
                </div>
            </div>
        </header>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Dashboard Section -->
            <section class="content-section active" id="dashboardSection">
                <!-- Overview Cards -->
                <div class="overview-cards">
                    <div class="overview-card">
                        <div class="overview-header">
                            <div class="overview-icon">
                                <i class="fas fa-tree"></i>
                            </div>
                        </div>
                        <div class="overview-title">Total Trees Planted</div>
                        <div class="overview-value">{{$data2}}</div>
                        <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: {{$data2*10}}%; height: 100%; background: var(--gradient-primary); border-radius: var(--radius-full);"></div>
                </div>
                       
                    </div>

                

                    <div class="overview-card">
                        <div class="overview-header">
                            <div class="overview-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                        </div>
                        <div class="overview-title">Volunteer Points</div>
                        <div class="overview-value">{{$data2*20}}</div>
                        <div style="font-size: 0.85rem; color: var(--secondary); margin-top: 10px;">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>

                        </div>
                    </div>

                    <div class="overview-card">
                        <div class="overview-header">
                            <div class="overview-icon">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="overview-title">Community Rank</div>
                        <div class="overview-value">{{$rank}}</div>
                       
                    </div>
                </div>

                <!-- Tree Map -->
                <div class="tree-map-container">
                    <h3 style="margin-bottom: 20px; color: var(--dark); font-size: 1.2rem;">
                        <i class="fas fa-map-marker-alt" style="color: var(--primary); margin-right: 10px;"></i>
                        My Tree Locations
                    </h3>
                    <div class="tree-map" id="treeMap">
                        <!-- Tree points will be added here -->
                    </div>
                </div>

                <!-- Activity Feed -->
                <div class="activity-feed">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                        <h3 style="color: var(--dark); font-size: 1.2rem;">
                            <i class="fas fa-history" style="color: var(--primary); margin-right: 10px;"></i>
                            Recent Activity
                        </h3>
                        <button style="background: none; border: none; color: var(--primary); cursor: pointer; font-size: 0.9rem;">
                            <i class="fas fa-sync-alt" style="margin-right: 5px;"></i> Refresh
                        </button>
                    </div>
                    <div class="activities-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-tree"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">New Tree Planted</div>
                                <div class="activity-desc">You planted a Mango tree in Sector 15 park</div>
                            </div>
                            <div class="activity-time">2 hours ago</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon" style="background: var(--secondary);">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Achievement Unlocked</div>
                                <div class="activity-desc">"Green Guardian" - 40+ trees planted</div>
                            </div>
                            <div class="activity-time">1 day ago</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon" style="background: #3B82F6;">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Drive Registration</div>
                                <div class="activity-desc">Registered for "Delhi Green Marathon" drive</div>
                            </div>
                            <div class="activity-time">3 days ago</div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Drives -->
                <div class="drives-section">
                    <!-- <h3 style="margin-bottom: 20px; color: var(--dark); font-size: 1.2rem;">
                        <i class="fas fa-calendar-alt" style="color: var(--primary); margin-right: 10px;"></i>
                        Upcoming Plantation Drives
                    </h3>
                     -->
                    <div class="drive-card">
                        <div class="drive-header">
                            <div class="drive-title">Delhi Green Marathon</div>
                            <div class="drive-date">Dec 20, 2023</div>
                        </div>
                        <div class="activity-desc">Central Park, Delhi - Target: 1000 trees</div>
                        <div class="drive-info">
                            <span><i class="fas fa-users" style="margin-right: 5px;"></i> 45 Volunteers</span>
                            <span><i class="fas fa-clock" style="margin-right: 5px;"></i> 9:00 AM</span>
                        </div>
                        <button style="margin-top: 15px; background: var(--primary); color: white; border: none; padding: 8px 20px; border-radius: 6px; cursor: pointer;">
                            <i class="fas fa-check-circle" style="margin-right: 8px;"></i> Registered
                        </button>
                    </div>

                    <div class="drive-card">
                        <div class="drive-header">
                            <div class="drive-title">School Tree Plantation</div>
                            <div class="drive-date">Dec 25, 2023</div>
                        </div>
                        <div class="activity-desc">DPS School Ground - Target: 500 trees</div>
                        <div class="drive-info">
                            <span><i class="fas fa-users" style="margin-right: 5px;"></i> 28 Volunteers</span>
                            <span><i class="fas fa-clock" style="margin-right: 5px;"></i> 10:00 AM</span>
                        </div>
                        <button style="margin-top: 15px; background: var(--secondary); color: white; border: none; padding: 8px 20px; border-radius: 6px; cursor: pointer;">
                            <i class="fas fa-user-plus" style="margin-right: 8px;"></i> Join Drive
                        </button>
                    </div>
                </div>
            </section>

            <!-- My Trees Section -->
            <section class="content-section" id="treesSection">
                <div class="overview-cards">
                    <div class="overview-card">
                        <div class="overview-title">Total Trees</div>
                        <div class="overview-value">{{$data2}}</div>
                        <!-- <div style="margin-top: 10px;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 5px;">
                                <span>Healthy</span>
                                <span>42</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 5px;">
                                <span>Growing</span>
                                <span>5</span>
                            </div>
                        </div> -->
                    </div>

                    <div class="overview-card">
                        <div class="overview-title">Tree Types</div>
                        <div style="margin-top: 15px;">
                            <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 8px;">
                                <span><i class="fas fa-tree" style="color: #10B981; margin-right: 8px;"></i> Neem</span>
                                <span>12</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 8px;">
                                <span><i class="fas fa-tree" style="color: #F59E0B; margin-right: 8px;"></i> Mango</span>
                                <span>8</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; font-size: 0.85rem; margin-bottom: 8px;">
                                <span><i class="fas fa-tree" style="color: #3B82F6; margin-right: 8px;"></i> Banyan</span>
                                <span>5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tree-map-container">
                    <h3>My Tree Inventory</h3>
                    <div style="margin-top: 20px;">
                        @foreach($data1 as $d)
                        <div style="background: var(--light); padding: 15px; border-radius: 10px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 600;">{{$d->treeName}}</div>
                                <div style="font-size: 0.9rem; color: var(--gray);">Planted: {{$d->plantingDate}}</div>
                            </div>
                            <span style="background: #10B981; color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.85rem;">{{$d->health}}</span>
                        </div>
                        @endforeach
                       
                    </div>
                </div>

                
            </section>

            <!-- Plantation Drives Section -->
            <section class="content-section" id="drivesSection">
                <div class="drives-section">
                    <h3>Available Plantation Drives</h3>
                    
                    <div style="margin: 20px 0; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="background: var(--light); padding: 20px; border-radius: 10px;">
                            <h4 style="margin-bottom: 10px;">Weekly Community Drive</h4>
                            <div style="color: var(--gray); font-size: 0.9rem; margin-bottom: 15px;">
                                Every Saturday at Central Park
                            </div>
                            <button style="background: var(--primary); color: white; border: none; padding: 8px 20px; border-radius: 6px; cursor: pointer; width: 100%;">
                                Join This Week
                            </button>
                        </div>

                        <div style="background: var(--light); padding: 20px; border-radius: 10px;">
                            <h4 style="margin-bottom: 10px;">Month End Marathon</h4>
                            <div style="color: var(--gray); font-size: 0.9rem; margin-bottom: 15px;">
                                December 30th, 2023
                            </div>
                            <button style="background: var(--primary); color: white; border: none; padding: 8px 20px; border-radius: 6px; cursor: pointer; width: 100%;">
                                Register Now
                            </button>
                        </div>
                    </div>

                    <h3 style="margin-top: 30px;">My Drive History</h3>
                    <div style="margin-top: 15px;">
                        <div style="display: flex; justify-content: space-between; padding: 15px; border-bottom: 1px solid var(--light-gray);">
                            <div>Delhi Green Initiative</div>
                            <div>Nov 28, 2023</div>
                            <div style="color: var(--primary);">15 trees</div>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px; border-bottom: 1px solid var(--light-gray);">
                            <div>School Plantation Drive</div>
                            <div>Nov 15, 2023</div>
                            <div style="color: var(--primary);">8 trees</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Achievements Section -->
            <section class="content-section" id="achievementsSection">
                <div class="badges-section">
                    <h3>My Achievements</h3>
                    
                    <div class="badges-grid">
                        <div class="badge-item">
                            <div class="badge-icon" style="background: #10B981;">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div style="font-size: 0.85rem; font-weight: 600;">Green Starter</div>
                            <div style="font-size: 0.75rem; color: var(--gray);">First tree planted</div>
                        </div>

                        <div class="badge-item">
                            <div class="badge-icon" style="background: #F59E0B;">
                                <i class="fas fa-tree"></i>
                            </div>
                            <div style="font-size: 0.85rem; font-weight: 600;">Tree Lover</div>
                            <div style="font-size: 0.75rem; color: var(--gray);">10+ trees planted</div>
                        </div>

                        <div class="badge-item">
                            <div class="badge-icon" style="background: #3B82F6;">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div style="font-size: 0.85rem; font-weight: 600;">Green Guardian</div>
                            <div style="font-size: 0.75rem; color: var(--gray);">40+ trees planted</div>
                        </div>
                    </div>

                    <h3 style="margin-top: 30px;">Next Milestones</h3>
                    <div style="margin-top: 15px;">
                        <div style="margin-bottom: 15px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>Tree Champion (100 trees)</span>
                                <span>47/100</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 47%;"></div>
                            </div>
                        </div>

                        <div style="margin-bottom: 15px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span>Drive Master (20 drives)</span>
                                <span>12/20</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        // Sidebar toggle
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Menu item click handler
        const menuItems = document.querySelectorAll('.menu-item');
        const contentSections = document.querySelectorAll('.content-section');
        const pageTitle = document.getElementById('pageTitle');
        const pageSubtitle = document.getElementById('pageSubtitle');

        const sectionTitles = {
            'dashboard': 'Volunteer Dashboard',
            'trees': 'My Trees',
            'drives': 'Plantation Drives',
            'achievements': 'Achievements',
            'community': 'Community',
            'progress': 'Progress Tracker'
        };

        const sectionSubtitles = {
            'dashboard': 'Welcome back, ' + '{{$data->name}}' + '! Keep up the great work!',
            'trees': 'Track and manage your planted trees',
            'drives': 'Join upcoming plantation drives',
            'achievements': 'Your badges and milestones',
            'community': 'Connect with fellow volunteers',
            'progress': 'Track your volunteer journey'
        };

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                if (this.id === 'logoutBtn') {
                    if (confirm('Are you sure you want to logout?')) {
                        alert('Logging out...');
                        window.location.href = '/logout';
                    }
                    return;
                }

                // Remove active class from all menu items
                menuItems.forEach(i => i.classList.remove('active'));
                // Add active class to clicked item
                this.classList.add('active');

                const sectionId = this.getAttribute('data-section');
                
                // Hide all content sections
                contentSections.forEach(section => section.classList.remove('active'));
                // Show selected section
                document.getElementById(`${sectionId}Section`).classList.add('active');

                // Update page title and subtitle
                pageTitle.textContent = sectionTitles[sectionId];
                pageSubtitle.textContent = sectionSubtitles[sectionId];

                // Close sidebar on mobile
                if (window.innerWidth <= 992) {
                    sidebar.classList.remove('active');
                }
            });
        });

        // Tree Map Visualization
        function createTreeMap() {
            const treeMap = document.getElementById('treeMap');
            treeMap.innerHTML = '';
            
            // Create tree points
            const trees = [
                {x: 20, y: 30, type: 'neem'},
                {x: 40, y: 50, type: 'mango'},
                {x: 60, y: 40, type: 'banyan'},
                {x: 80, y: 70, type: 'neem'},
                {x: 30, y: 80, type: 'mango'},
                {x: 70, y: 20, type: 'banyan'}
            ];
            
            trees.forEach(tree => {
                const point = document.createElement('div');
                point.className = 'tree-point';
                point.style.left = `${tree.x}%`;
                point.style.top = `${tree.y}%`;
                
                // Different colors for different tree types
                if (tree.type === 'mango') {
                    point.style.background = '#F59E0B';
                } else if (tree.type === 'banyan') {
                    point.style.background = '#3B82F6';
                }
                
                point.title = `${tree.type.charAt(0).toUpperCase() + tree.type.slice(1)} Tree`;
                treeMap.appendChild(point);
            });
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createTreeMap();
            
            // Animate progress bars
            document.querySelectorAll('.progress-fill').forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
        });

        // Responsive adjustments
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992) {
                sidebar.classList.remove('active');
            }
        });

        // Notification click
        document.querySelector('.notification-icon').addEventListener('click', function() {
            alert('You have 3 notifications:\n1. New drive registration\n2. Achievement unlocked\n3. Community message');
        });
    </script>
</body>
</html>