<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard | Green India Society</title>
    <link rel="stylesheet" href="css/user_dashboard.css">
    <link rel="shortcut icon" href="logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Chart.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: serif;
        }
        
        body {
            background-color: #f5f9f5;
            color: #333;
            min-height: 100vh;
            display: flex;
        }
        
        /* Sidebar Styles */
        .dashboard-sidebar {
            width: 250px;
            background: linear-gradient(180deg, #2d5a27 0%, #1e3f1a 100%);
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px 0;
            box-shadow: 3px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }
        
        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .logo-icon {
            font-size: 2rem;
            color: #8bc34a;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        
        .logo-text span {
            color: #8bc34a;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #4caf50;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        .user-info h3 {
            font-size: 1.1rem;
            margin-bottom: 3px;
        }
        
        .user-info p {
            font-size: 0.85rem;
            opacity: 0.8;
        }
        
        .sidebar-menu {
            list-style: none;
            padding: 0 15px;
        }
        
        .sidebar-menu li {
            margin-bottom: 5px;
        }
        
        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .sidebar-menu a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .sidebar-menu a.active {
            background-color: rgba(139, 195, 74, 0.2);
            color: #8bc34a;
            border-left: 4px solid #8bc34a;
        }
        
        .sidebar-menu i {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }
        
        /* Main Content Area */
        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 20px;
        }
        
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            margin-bottom: 25px;
            border-bottom: 1px solid #e0e6e0;
        }
        
        .page-title {
            font-size: 1.8rem;
            color: #2d5a27;
            font-weight: 600;
        }
        
        .header-actions {
            display: flex;
            gap: 15px;
        }
        
        .notification-btn, .search-btn {
            background-color: white;
            border: 1px solid #ddd;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #555;
            transition: all 0.3s ease;
        }
        
        .notification-btn:hover, .search-btn:hover {
            background-color: #f0f0f0;
            color: #2d5a27;
        }
        
        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 5px solid #4caf50;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .stat-card:nth-child(2) {
            border-left-color: #3498db;
        }
        
        .stat-card:nth-child(3) {
            border-left-color: #9b59b6;
        }
        
        .stat-card:nth-child(4) {
            border-left-color: #e74c3c;
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            background-color: #e8f5e9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            color: #2d5a27;
            font-size: 1.5rem;
        }
        
        .stat-card:nth-child(2) .stat-icon {
            background-color: #ebf5fb;
            color: #3498db;
        }
        
        .stat-card:nth-child(3) .stat-icon {
            background-color: #f4ecf7;
            color: #9b59b6;
        }
        
        .stat-card:nth-child(4) .stat-icon {
            background-color: #fdedec;
            color: #e74c3c;
        }
        
        .stat-content h3 {
            font-size: 2rem;
            font-weight: 700;
            color: #2d5a27;
            margin-bottom: 5px;
        }
        
        .stat-content p {
            color: #666;
            font-size: 0.95rem;
        }
        
        /* Growth Chart Container */
        .growth-chart-container {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .section-title {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .section-title i {
            color: #4caf50;
            font-size: 1.3rem;
            margin-right: 10px;
        }
        
        .section-title span {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2d5a27;
        }
        
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
        
        /* Recent Activities */
        .activities-container {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .activity-list {
            list-style: none;
        }
        
        .activity-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #e8f5e9;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #2d5a27;
        }
        
        .activity-details h4 {
            font-size: 1rem;
            margin-bottom: 5px;
            color: #333;
        }
        
        .activity-details p {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 3px;
        }
        
        .activity-time {
            color: #999;
            font-size: 0.85rem;
        }
        
        /* Footer */
        .dashboard-footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 0.9rem;
            margin-top: 30px;
            border-top: 1px solid #eee;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .dashboard-sidebar {
                width: 70px;
                padding: 20px 0;
            }
            
            .sidebar-header .logo-text,
            .user-info,
            .sidebar-menu span {
                display: none;
            }
            
            .logo {
                justify-content: center;
            }
            
            .user-profile {
                justify-content: center;
                padding: 10px 5px;
            }
            
            .user-avatar {
                margin-right: 0;
            }
            
            .sidebar-menu a {
                justify-content: center;
                padding: 15px;
            }
            
            .sidebar-menu i {
                margin-right: 0;
                font-size: 1.2rem;
            }
            
            .main-content {
                margin-left: 70px;
            }
        }
        
        @media (max-width: 768px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 1.5rem;
            }
        }
        
        /* Custom Chart Styles */
        .chart-controls {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
            gap: 10px;
        }
        
        .chart-btn {
            padding: 8px 16px;
            background-color: #f0f0f0;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
            color: #555;
            transition: all 0.3s ease;
        }
        
        .chart-btn.active {
            background-color: #4caf50;
            color: white;
        }
        
        .chart-btn:hover:not(.active) {
            background-color: #e0e0e0;
        }
        
        .chart-summary {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .chart-stat {
            text-align: center;
        }
        
        .chart-stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d5a27;
            margin-bottom: 5px;
        }
        
        .chart-stat-label {
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    @include('udashboard_sidebar')
    
   
        <!-- Growth Chart Section -->
        <div class="growth-chart-container">
            <div class="section-title">
                <i class="fas fa-chart-line"></i>
                <span>Growth Analytics</span>
            </div>
            <div class="right-column">
                <!-- Volunteer Progress -->
                <div class="progress-section">
                   
                    <div class="progress-ring-container">
                        <svg class="progress-ring" width="100%" height="100%" viewBox="0 0 200 200">
                            <circle class="progress-ring-bg" cx="100" cy="100" r="90"></circle>
                            <circle class="progress-ring-fill" id="progressFill" cx="100" cy="100" r="90"></circle>
                        </svg>
                        <div class="progress-text">
                            <div class="progress-value" id="progressValue">{{$data2*100/10}}%</div>
                            <div style="font-size: 13px; color: var(--gray);">Complete</div>
                        </div>
                    </div>
                    
                    <div style="margin-top: 20px;">
                        <h3 style="font-size: 15px; margin-bottom: 15px;">Next Level Requirements</h3>
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span style="font-size: 13px;">{{$data2}} Trees Planted</span>
                                <span style="font-size: 13px; color: var(--success); font-weight: 600;">✓ remain</span>
                            </div>
                            <div style="height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                                <div style="width: {{$data2*100/10}}%; height: 100%; background: var(--success); border-radius: var(--radius-full);"></div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span style="font-size: 13px;">{{$data2*100/10}}% Trees at 60%+ Growth</span>
                                <span style="font-size: 13px; color: var(--success); font-weight: 600;">{{$data2}}/10 ✓</span>
                            </div>
                            <div style="height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                                <div style="width: {{$data2*100/10}}%; height: 100%; background: var(--success); border-radius: var(--radius-full);"></div>
                            </div>
                        </div>
                        
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                                <span style="font-size: 13px;">Regular Photo Updates</span>
                                <span style="font-size: 13px; color: var(--warning); font-weight: 600;">8/10 ⏳</span>
                            </div>
                            <div style="height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                                <div style="width: {{$data2*100/10}}%; height: 100%; background: var(--warning); border-radius: var(--radius-full);"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
</dkiv>
            <!-- Chart Controls -->
            
        
   
</body>
</html>