<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - People of Indian Society</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* CSS Variables */
        :root {
            --primary: #2E7D32;
            --primary-dark: #1B5E20;
            --primary-light: #4CAF50;
            --secondary: #FF9800;
            --secondary-dark: #F57C00;
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

        .review-image img{
    max-width: 120px;
    border-radius: 6px;
    margin-top: 10px;
}
.review-text{
    margin-top: 8px;
    line-height: 1.6;
}

        /* delete button banao  */
        .delete-btn{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            background: #ef4444;          /* red */
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .delete-btn i{
            font-size: 14px;
        }

        .delete-btn:hover{
            background: #dc2626;          /* darker red */
            transform: scale(1.05);
        }

        .delete-btn:active{
            transform: scale(0.95);
        }

        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: #f5f7fa;
            display: flex;
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5 {
            font-family: serif;
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        p {
            margin-bottom: 1rem;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-gray);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-dark);
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
            color: var(--primary-light);
            font-size: 1.8rem;
        }

        .sidebar-logo span {
            color: var(--primary-light);
        }

        .admin-info {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .admin-avatar {
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

        .admin-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .admin-role {
            font-size: 0.9rem;
            color: rgba(255,255,255,0.7);
            background: var(--primary);
            padding: 3px 10px;
            border-radius: 20px;
            display: inline-block;
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
            border-left-color: var(--primary-light);
        }

        .menu-item.active {
            background: var(--primary);
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

        .menu-divider {
            height: 1px;
            background: rgba(255,255,255,0.1);
            margin: 15px 25px;
        }

        .sidebar-footer {
            padding: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            text-align: center;
            font-size: 0.8rem;
            color: rgba(255,255,255,0.6);
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

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-icon {
            position: relative;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--gray);
            transition: var(--transition);
        }

        .header-icon:hover {
            color: var(--primary);
        }

        .notification-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--secondary);
            color: var(--white);
            font-size: 0.7rem;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-dropdown {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 10px;
            transition: var(--transition);
        }

        .user-dropdown:hover {
            background: var(--light-gray);
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            font-size: 0.9rem;
        }

        .user-email {
            font-size: 0.8rem;
            color: var(--gray);
        }

        .dropdown-arrow {
            font-size: 0.8rem;
            color: var(--gray);
        }

        /* Content Area */
        .content-wrapper {
            padding: 30px;
        }

        /* Dashboard Overview */
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
            background: rgba(46, 125, 50, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary);
        }

        .overview-trend {
            font-size: 0.9rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 20px;
            background: rgba(76, 175, 80, 0.1);
            color: var(--primary);
        }

        .overview-trend.negative {
            background: rgba(244, 67, 54, 0.1);
            color: #f44336;
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

        .overview-footer {
            font-size: 0.85rem;
            color: var(--gray);
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Charts Container */
        .charts-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        @media (max-width: 1200px) {
            .charts-container {
                grid-template-columns: 1fr;
            }
        }

        .chart-card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .chart-title {
            font-size: 1.2rem;
            color: var(--dark);
            margin: 0;
        }

        .chart-actions {
            display: flex;
            gap: 10px;
        }

        .chart-action-btn {
            background: none;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            padding: 5px 15px;
            font-size: 0.9rem;
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
        }

        .chart-action-btn:hover {
            background: var(--light-gray);
            color: var(--primary);
        }

        .chart-action-btn.active {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        .chart-placeholder {
            height: 300px;
            background: var(--light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            font-size: 1.1rem;
            position: relative;
        }

        /* Recent Activities */
        .recent-activities {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }

        .activities-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .activities-title {
            font-size: 1.2rem;
            color: var(--dark);
            margin: 0;
        }

        .activities-list {
            max-height: 400px;
            overflow-y: auto;
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

        .activity-item:last-child {
            border-bottom: none;
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
        }

        .activity-icon.user {
            background: #2196F3;
        }

        .activity-icon.tree {
            background: var(--primary);
        }

        .activity-icon.volunteer {
            background: var(--secondary);
        }

        .activity-icon.payment {
            background: #9C27B0;
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

        /* Data Tables */
        .data-table-card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
            overflow: hidden;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .table-title {
            font-size: 1.2rem;
            color: var(--dark);
            margin: 0;
        }

        .table-actions {
            display: flex;
            gap: 15px;
        }

        .search-box {
            position: relative;
        }

        .search-input {
            padding: 10px 15px 10px 40px;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            font-family: serif;
            font-size: 0.9rem;
            width: 250px;
            transition: var(--transition);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        .table-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-family: serif;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }

        .table-btn:hover {
            background: var(--primary-dark);
        }

        .table-btn.secondary {
            background: var(--secondary);
        }

        .table-btn.secondary:hover {
            background: var(--secondary-dark);
        }

        /* Table Styles */
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th {
            background: var(--light);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: var(--dark);
            border-bottom: 2px solid var(--light-gray);
        }

        .data-table td {
            padding: 15px;
            border-bottom: 1px solid var(--light-gray);
        }

        .data-table tr:hover {
            background: var(--light);
        }

        .user-cell {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar-small {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            display: inline-block;
        }

        .status-active {
            background: rgba(76, 175, 80, 0.1);
            color: var(--primary);
        }

        .status-pending {
            background: rgba(255, 152, 0, 0.1);
            color: var(--secondary);
        }

        .status-inactive {
            background: rgba(158, 158, 158, 0.1);
            color: #9E9E9E;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: 1px solid var(--light-gray);
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
        }

        .action-btn:hover {
            background: var(--light-gray);
            color: var(--primary);
        }

        .action-btn.edit:hover {
            color: #2196F3;
        }

        .action-btn.delete:hover {
            color: #f44336;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid var(--light-gray);
        }

        .pagination-info {
            font-size: 0.9rem;
            color: var(--gray);
        }

        .pagination-controls {
            display: flex;
            gap: 10px;
        }

        .page-btn {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: 1px solid var(--light-gray);
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
            font-family: serif;
            font-size: 0.9rem;
        }

        .page-btn:hover {
            background: var(--light-gray);
            color: var(--primary);
        }

        .page-btn.active {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 2000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .modal-content {
            background: var(--white);
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: modalFade 0.3s ease;
        }

        @keyframes modalFade {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 30px;
            border-bottom: 1px solid var(--light-gray);
            position: sticky;
            top: 0;
            background: var(--white);
            z-index: 1;
            border-radius: 15px 15px 0 0;
        }

        .modal-header h2 {
            color: var(--primary);
            margin: 0;
            font-size: 1.5rem;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-close:hover {
            color: var(--primary);
            background: var(--light-gray);
        }

        .modal-body {
            padding: 30px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid var(--light-gray);
            font-family: serif;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.1);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid var(--light-gray);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            outline: none;
            font-family: serif;
        }

        .btn-primary {
            background: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--secondary);
            color: var(--white);
        }

        .btn-secondary:hover {
            background: var(--secondary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Responsive Design */
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

            .charts-container {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .search-input {
                width: 200px;
            }
        }

        @media (max-width: 768px) {
            .content-wrapper {
                padding: 20px 15px;
            }

            .overview-cards {
                grid-template-columns: 1fr;
            }

            .table-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .table-actions {
                width: 100%;
                flex-direction: column;
            }

            .search-box {
                width: 100%;
            }

            .search-input {
                width: 100%;
            }

            .data-table {
                display: block;
                overflow-x: auto;
            }

            .user-info {
                display: none;
            }

            .header-right {
                gap: 15px;
            }
        }

        @media (max-width: 576px) {
            .top-header {
                padding: 15px;
            }

            .content-wrapper {
                padding: 15px 10px;
            }

            .overview-card {
                padding: 20px;
            }

            .chart-card, .recent-activities, .data-table-card {
                padding: 20px;
            }

            .modal-body {
                padding: 20px;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
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

        /* Review Section Styles */
        .review-item {
            display: flex;
            gap: 15px;
            padding: 20px;
            border-bottom: 1px solid var(--light-gray);
            transition: var(--transition);
        }
        
        .review-item:hover {
            background: var(--light);
        }
        
        .review-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        
        .review-content {
            flex: 1;
        }
        
        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
        }
        
        .review-user-info h4 {
            margin: 0 0 5px 0;
            font-size: 1rem;
            color: var(--dark);
        }
        
        .review-user-meta {
            display: flex;
            gap: 10px;
            font-size: 0.85rem;
            color: var(--gray);
        }
        
        .review-rating {
            display: flex;
            gap: 2px;
        }
        
        .star {
            color: #ddd;
            font-size: 0.9rem;
        }
        
        .star.filled {
            color: #FF9800;
        }
        
        .review-text {
            margin: 10px 0;
            line-height: 1.6;
            color: var(--dark);
        }
        
        .review-tags {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
            margin-top: 10px;
        }
        
        .review-tag {
            padding: 3px 10px;
            background: rgba(46, 125, 50, 0.1);
            color: var(--primary);
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .review-tag.project {
            background: rgba(33, 150, 243, 0.1);
            color: #2196F3;
        }
        
        .review-tag.location {
            background: rgba(156, 39, 176, 0.1);
            color: #9C27B0;
        }
        
        .no-reviews {
            text-align: center;
            padding: 50px 20px;
            color: var(--gray);
        }
        
        .no-reviews i {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--light-gray);
        }
        
        .review-filters {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            padding: 8px 20px;
            background: var(--light);
            border: 1px solid var(--light-gray);
            border-radius: 20px;
            font-size: 0.9rem;
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .filter-btn:hover {
            background: var(--light-gray);
        }
        
        .filter-btn.active {
            background: var(--primary);
            color: var(--white);
            border-color: var(--primary);
        }
        
        .review-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: var(--white);
            border-radius: 10px;
            padding: 20px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background: rgba(46, 125, 50, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--primary);
        }
        
        .stat-content h3 {
            font-size: 1.8rem;
            margin: 0;
            color: var(--dark);
        }
        
        .stat-content p {
            margin: 5px 0 0 0;
            font-size: 0.9rem;
            color: var(--gray);
        }
        
        .admin-reply {
            margin-top: 15px;
            padding: 10px;
            background: #f5f5f5;
            border-radius: 5px;
            border-left: 3px solid var(--primary);
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <i class="fas fa-seedling sidebar-logo-icon"></i>
                <div>People<span>of Indian</span>Society</div>
            </div>
        </div>

        <div class="admin-info">
            <div class="admin-avatar">
                {{ strtoupper(substr($data->name, 0, 1)) }}
            </div>
            <div class="admin-name">{{$data->name}}</div>
            <div class="admin-role">Administrator</div>
        </div>

        <nav class="sidebar-menu">
            <div class="menu-item active" data-section="dashboard">
                <i class="fas fa-tachometer-alt menu-icon"></i>
                <span class="menu-text">Dashboard</span>
            </div>

            <div class="menu-item" data-section="users">
                <i class="fas fa-users menu-icon"></i>
                <span class="menu-text">Users Management</span>
                <span class="menu-badge">{{$user}}</span>
            </div>

            <div class="menu-item" data-section="volunteers">
                <i class="fas fa-hands-helping menu-icon"></i>
                <span class="menu-text">Volunteers</span>
                <span class="menu-badge">{{$volenteer}}</span>
            </div>

            <div class="menu-item" data-section="donations">
                <i class="fas fa-hand-holding-usd menu-icon"></i>
                <span class="menu-text">Donations</span>
                <span class="menu-badge">{{isset($donations) ? count($donations) : '0'}}</span>
            </div>

            <div class="menu-item" data-section="plantations">
                <i class="fas fa-leaf menu-icon"></i>
                <span class="menu-text">Plantation Drives</span>
                <span class="menu-badge">7</span>
            </div>

            <!-- New Review Menu Item -->
            <div class="menu-item" data-section="reviews">
                <i class="fas fa-star menu-icon"></i>
                <span class="menu-text">Reviews</span>
                <span class="menu-badge">{{isset($reviews) ? count($reviews) : '0'}}</span>
            </div>

            <div class="menu-item" data-section="reports">
                <i class="fas fa-chart-bar menu-icon"></i>
                <span class="menu-text">Reports & Analytics</span>
            </div>

            <div class="menu-divider"></div>

            <div class="menu-item" data-section="settings">
                <i class="fas fa-cog menu-icon"></i>
                <span class="menu-text">Settings</span>
            </div>

            <div class="menu-item" id="logoutBtn">
                <i class="fas fa-sign-out-alt menu-icon"></i>
                <span class="menu-text">Logout</span>
            </div>
        </nav>

        <script>
        document.getElementById('logoutBtn').addEventListener('click', function () {
            Swal.fire({
                title: 'Logout?',
                text: 'Are you sure you want to logout?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, Logout'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ url('/logoutAdmin') }}";
                }
            });
        });
        </script>

        <div class="sidebar-footer">
            <p>© 2026 People of Indian Society</p>
            <p>Version 2.1.0</p>
        </div>
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
                    <h1 id="pageTitle">Dashboard Overview</h1>
                    <p id="pageSubtitle">Welcome back, Admin! Here's what's happening today.</p>
                </div>
            </div>

            <div class="header-right">
                <div class="header-icon notification-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">5</span>
                </div>
                <div class="header-icon">
                    <i class="fas fa-envelope"></i>
                    <span class="notification-badge">3</span>
                </div>
                <div class="user-dropdown" id="userDropdown">
                    <div class="user-avatar">{{ strtoupper(substr($data->name, 0, 1)) }}</div>
                    <div class="user-info">
                        <div class="user-name">{{$data->name}}</div>
                        <div class="user-email">{{$data->email}}</div>
                    </div>
                    <i class="fas fa-chevron-down dropdown-arrow"></i>
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
                            <span class="overview-trend">+12.5%</span>
                        </div>
                        <div class="overview-title">Total Trees Planted</div>
                        <div class="overview-value">{{$tree}}</div>
                        <div class="overview-footer">
                            <i class="fas fa-calendar"></i>
                            This month: 1,245 trees
                        </div>
                    </div>

                    <div class="overview-card">
                        <div class="overview-header">
                            <div class="overview-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <span class="overview-trend">+{{$user}}%</span>
                        </div>
                        <div class="overview-title">Active Users</div>
                        <div class="overview-value">{{$user}}</div>
                        <div class="overview-footer">
                            <i class="fas fa-user-plus"></i>
                            New this week: {{$user}} users
                        </div>
                    </div>

                    <div class="overview-card">
                        <div class="overview-header">
                            <div class="overview-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <span class="overview-trend">+15.3%</span>
                        </div>
                        <div class="overview-title">Volunteers</div>
                        <div class="overview-value">{{$volenteer}}</div>
                        <div class="overview-footer">
                            <i class="fas fa-map-marker-alt"></i>
                            Active in 24 cities
                        </div>
                    </div>

                    <div class="overview-card">
                        <div class="overview-header">
                            <div class="overview-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <span class="overview-trend negative">-3.2%</span>
                        </div>
                        <div class="overview-title">Total Donations</div>
                        <div class="overview-value">₹{{ number_format(isset($totalDonations) ? $totalDonations : 842150) }}</div>
                        <div class="overview-footer">
                            <i class="fas fa-rupee-sign"></i>
                            This month: ₹1,25,000
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class="charts-container">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">Plantation Growth Trend</h3>
                            <div class="chart-actions">
                                <button type="button" class="chart-action-btn" data-range="monthly">Monthly</button>
                                <button type="button" class="chart-action-btn active" data-range="quarterly">Quarterly</button>
                                <button type="button" class="chart-action-btn" data-range="yearly">Yearly</button>
                            </div>
                        </div>
                        <div class="chart-placeholder">
                            <canvas id="growthChart"></canvas>
                        </div>
                    </div>

                    <div class="chart-card">
                        <div class="chart-header">
                            <h3 class="chart-title">User & Volunteer Distribution</h3>
                            <div class="chart-actions">
                                <button type="button" class="chart-action-btn" data-mode="region">By Region</button>
                                <button type="button" class="chart-action-btn active" data-mode="type">By Type</button>
                            </div>
                        </div>
                        <div class="chart-placeholder">
                            <canvas id="userDistChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="recent-activities">
                    <div class="activities-header">
                        <h3 class="activities-title">Recent Activities</h3>
                        <button class="btn btn-outline">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                    <div class="activities-list">
                        <div class="activity-item">
                            <div class="activity-icon user">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">New User Registration</div>
                                <div class="activity-desc">Rahul Sharma registered as a new user from Delhi</div>
                            </div>
                            <div class="activity-time">10 min ago</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon tree">
                                <i class="fas fa-tree"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Tree Plantation Completed</div>
                                <div class="activity-desc">Volunteers completed planting 250 trees in Mumbai</div>
                            </div>
                            <div class="activity-time">1 hour ago</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon volunteer">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">New Volunteer Joined</div>
                                <div class="activity-desc">Priya Patel joined as a volunteer from Bangalore</div>
                            </div>
                            <div class="activity-time">2 hours ago</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon payment">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Donation Received</div>
                                <div class="activity-desc">Received ₹5,000 donation from Arjun Mehta</div>
                            </div>
                            <div class="activity-time">5 hours ago</div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon tree">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Plantation Drive Scheduled</div>
                                <div class="activity-desc">New plantation drive scheduled for Kolkata on 15th Dec</div>
                            </div>
                            <div class="activity-time">1 day ago</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Users Management Section -->
            <section class="content-section" id="usersSection">
                <div class="data-table-card">
                    <div class="table-header">
                        <h3 class="table-title">Users Management</h3>
                        <div class="table-actions">
                            <div class="search-box">
                                <i class="fas fa-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search users...">
                            </div>
                        </div>
                    </div>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Details</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>State</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1;@endphp
                            @foreach($userData as $u)
                            <tr>
                                <td>POIS{{ $i++ }}</td>
                                <td>
                                    <div class="user-cell">
                                        <div class="user-avatar-small">
                                            {{ strtoupper(substr($u->name, 0, 1)) }}
                                        </div>
                                        <div>
                                            <div>{{ $u->name }}</div>
                                            <div style="font-size:0.8rem;color:var(--gray);">
                                                +91 {{ $u->mobile }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->city }}</td>
                                <td>{{$u->state}}</td>
                                <td>
                                    <span class="status-badge status-active">{{$u->status}}</span>
                                </td>
                                <td>
                                    <a href="javascript:void(0)"
                                       onclick="confirmDelete('{{ url('userDelete/'.$u->id) }}','users')"
                                       class="delete-btn">
                                       <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Volunteers Section -->
<section class="content-section" id="volunteersSection">
    <div class="data-table-card">
        <div class="table-header">
            <h3 class="table-title">Volunteers Management</h3>
            <div class="table-actions">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Search volunteers...">
                </div>
            </div>
        </div>

        <table class="data-table">
    <thead>
        <tr>
            <th>Volunteer ID</th>
            <th>Volunteer Details</th>
            <th>Email</th>
            <th>City</th>
            <th>State</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @php $i=1; @endphp
        @foreach($volenteerData as $v)
        <tr>
            <td>POIS{{ $i++ }}</td>

            <td>
                <div class="user-cell">
                    <div class="user-avatar-small">
                        {{ strtoupper(substr($v->name,0,1)) }}
                    </div>
                    <div>
                        <div>{{ $v->name }}</div>
                        <div style="font-size:0.8rem;color:var(--gray);">
                            +91 {{ $v->mobile }}
                        </div>
                    </div>
                </div>
            </td>

            <td>{{ $v->email }}</td>
            <td>{{ $v->city }}</td>
            <td>{{ $v->state }}</td>

            {{-- STATUS COLUMN --}}
            <td>
                @if($v->status == 'pending')
                    <span class="status-badge status-pending">Pending</span>
                @else
                    <span class="status-badge status-active">Approved</span>
                @endif
            </td>

            {{-- ACTION COLUMN --}}
            <td>
                {{-- Approve button only if pending --}}
                @if($v->status == 'pending')
                    <a href="javascript:void(0)"
                       class="approve-btn " style="background-color: #28a745; color: white; margin-right: 10px; padding: 5px 10px; border-radius: 5px;"
                       onclick="confirmApprove('{{ url('volunteer-approve/'.$v->id) }}','volunteers')">
                        <i class="fas fa-check-circle"></i>
                    </a>
                @endif

                {{-- Delete button always --}}
                <a href="javascript:void(0)"
                   onclick="confirmDelete('{{ url('userDelete/'.$v->id) }}','volunteers')"
                   class="delete-btn">
                   <i class="fas fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</section>
<script>
function confirmDelete(url, section) {
    Swal.fire({ 
        title: 'Are you sure?', 
        text: "You won't be able to revert this!", 
        icon: 'warning', 
        showCancelButton: true, 
        confirmButtonColor: '#d33', 
        cancelButtonColor: '#3085d6', 
        confirmButtonText: 'Yes, delete it!' 
    }).then((result) => { 
        if (result.isConfirmed) { 
            window.location.href = url; 
        } 
    }); }

function confirmApprove(url, section) {
    Swal.fire({ 
        title: 'Approve Volunteer?', 
        text: "This volunteer will be approved!", 
        icon: 'question', 
        showCancelButton: true, 
        confirmButtonColor: '#28a745', 
        cancelButtonColor: '#3085d6', 
        confirmButtonText: 'Yes, approve!' 
    }).then((result) => { 
        if (result.isConfirmed) { 
            window.location.href = url; 
        } 
    }); }   


 @if(session('success2'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ session('success2') }}",
        timer: 3000,
        showConfirmButton: false
    });
</script>
@endif

    </script>

            <!-- Donations Section -->
            <section class="content-section" id="donationsSection">
                <div class="data-table-card">
                    <div class="table-header">
                        <h3 class="table-title">Donations Management</h3>
                        <div class="table-actions">
                            <div class="search-box">
                                <i class="fas fa-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search donations...">
                            </div>
                        </div>
                    </div>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Donation ID</th>
                                <th>Donor Details</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Payment Method</th>
                                <th>Purpose</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($donations) && count($donations) > 0)
                                @foreach($donations as $donation)
                                <tr>
                                    <td>#DON{{ str_pad($loop->iteration, 3, '0', STR_PAD_LEFT) }}</td>
                                    <td>
                                        <div class="user-cell">
                                            <div class="user-avatar-small">{{ strtoupper(substr($donation->donor_name, 0, 1)) }}</div>
                                            <div>
                                                <div>{{ $donation->donor_name }}</div>
                                                <div style="font-size:0.8rem;color:var(--gray);">{{ $donation->donor_type }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>₹{{ number_format($donation->amount) }}</td>
                                    <td>{{ date('d M Y', strtotime($donation->created_at)) }}</td>
                                    <td>{{ ucfirst($donation->payment_method) }}</td>
                                    <td>{{ $donation->purpose }}</td>
                                    <td><span class="status-badge status-active">{{ ucfirst($donation->status) }}</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="action-btn" title="View Receipt">
                                                <i class="fas fa-receipt"></i>
                                            </button>
                                            <button class="action-btn" title="Send Thank You">
                                                <i class="fas fa-envelope"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" style="text-align:center;padding:30px;">
                                        <i class="fas fa-hand-holding-usd" style="font-size:2rem;color:var(--light-gray);margin-bottom:10px;"></i>
                                        <p>No donations found</p>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Plantation Drives Section -->
            <section class="content-section" id="plantationsSection">
                <div class="data-table-card">
                    <div class="table-header">
                        <h3 class="table-title">Plantation Drives</h3>
                        <div class="table-actions">
                            <div class="search-box">
                                <i class="fas fa-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search drives...">
                            </div>
                            <button class="table-btn" id="addDriveBtn">
                                <i class="fas fa-calendar-plus"></i> Schedule Drive
                            </button>
                        </div>
                    </div>

                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Drive ID</th>
                                <th>Drive Name</th>
                                <th>Location</th>
                                <th>Date</th>
                                <th>Target Trees</th>
                                <th>Volunteers</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#DRV001</td>
                                <td>Delhi Green Initiative</td>
                                <td>Delhi Central Park</td>
                                <td>15 Dec 2023</td>
                                <td>500</td>
                                <td>25</td>
                                <td><span class="status-badge status-active">Scheduled</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn" title="Assign Volunteers">
                                            <i class="fas fa-user-plus"></i>
                                        </button>
                                        <button class="action-btn" title="Update Status">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#DRV002</td>
                                <td>Mumbai Coastal Drive</td>
                                <td>Marine Drive, Mumbai</td>
                                <td>20 Dec 2023</td>
                                <td>300</td>
                                <td>18</td>
                                <td><span class="status-badge status-pending">Planning</span></td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="action-btn" title="View Details">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="action-btn" title="Assign Volunteers">
                                            <i class="fas fa-user-plus"></i>
                                        </button>
                                        <button class="action-btn" title="Update Status">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- New Reviews Section -->
            <section class="content-section" id="reviewsSection">
                <div class="data-table-card">
                    <div class="table-header">
                        <h3 class="table-title">User Reviews & Feedback</h3>
                        <div class="table-actions">
                            <div class="search-box">
                                <i class="fas fa-search search-icon"></i>
                                <input type="text" class="search-input" placeholder="Search reviews...">
                            </div>
                            <button class="table-btn" id="exportReviewsBtn">
                                <i class="fas fa-download"></i> Export
                            </button>
                        </div>
                    </div>

                    <!-- Review Statistics -->
                    <div class="review-stats">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ isset($avgRating) ? number_format($avgRating, 1) : '4.5' }}</h3>
                                <p>Average Rating</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="stat-content">
                                <h3>{{ isset($totalReviews) ? $totalReviews : '0' }}</h3>
                                <p>Total Reviews</p>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Review Filters -->
                    <div class="review-filters">
                        <button class="filter-btn active" data-filter="all">All Reviews</button>
                        <button class="filter-btn" data-filter="5">5 Stars</button>
                        <button class="filter-btn" data-filter="4">4 Stars</button>
                        <button class="filter-btn" data-filter="3">3 Stars</button>
                        <button class="filter-btn" data-filter="2">2 Stars</button>
                        <button class="filter-btn" data-filter="1">1 Star</button>
                        <button class="filter-btn" data-filter="recent">Recent</button>
                        <button class="filter-btn" data-filter="project">Project Reviews</button>
                    </div>

                    <!-- Reviews List -->
                    <div class="activities-list">

    @if(isset($reviews) && $reviews->count() > 0)

        @foreach($reviews as $review)

            <div class="review-item"
                 data-rating="{{ $review->rating }}"
                 data-type="{{ $review->type ?? 'general' }}">

                {{-- Avatar --}}
                <div class="review-avatar">
                    {{ strtoupper(substr($review->name ?? 'U', 0, 1)) }}
                </div>

                <div class="review-content">

                    {{-- Header --}}
                    <div class="review-header">

                        <div class="review-user-info">
                            <h4>{{ $review->name }}</h4>

                            <div class="review-user-meta">

                                {{-- Rating --}}
                                <div class="review-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star star {{ $i <= $review->rating ? 'filled' : '' }}"></i>
                                    @endfor
                                </div>

                                {{-- Status --}}
                                @if(!empty($review->status))
                                    <span class="review-tag {{ $review->status === 'approved' ? 'project' : 'location' }}">
                                        {{ ucfirst($review->status) }}
                                    </span>
                                @endif

                            </div>
                        </div>

                        {{-- Action buttons --}}
                        <div class="action-buttons">

                            {{-- Approve --}}
                            @if($review->status !== 'approved')
                                <a class="action-btn"
                                   title="Approve"
                                   href="{{ url('aprove/'.$review->id) }}">
                                    <i class="fas fa-check"></i>
                                </a>
                            @else
                                <span class="review-tag project">
                                    <i class="fas fa-check-circle"></i> Approved
                                </span>
                            @endif

                            {{-- Delete --}}
                            <a href="{{ url('reviewDelete/'.$review->id) }}"
                               class="action-btn delete-btn"
                               title="Delete"
                               onclick="event.preventDefault(); confirmReviewDelete(this);">
                                <i class="fas fa-trash"></i>
                            </a>

                        </div>

                    </div> {{-- /review-header --}}

                    {{-- Review Text --}}
                    <div class="review-text">
                        {{ $review->review }}
                    </div>

                    {{-- Review Image --}}
                    @if(!empty($review->image))
                        <div class="review-image">
                            <img src="{{ asset('image/'.$review->image) }}" alt="Review Image">
                        </div>
                    @endif

                </div> {{-- /review-content --}}

            </div> {{-- /review-item --}}

        @endforeach

    @else
        <div class="no-reviews">
            <i class="far fa-star"></i>
            <h3>No Reviews Yet</h3>
            <p>No user reviews have been submitted yet.</p>
        </div>
    @endif

</div>


@if(isset($reviews) && method_exists($reviews, 'links'))
    <div class="pagination">
        <div class="pagination-info">
            Showing {{ $reviews->firstItem() ?? 0 }}-{{ $reviews->lastItem() ?? 0 }}
            of {{ $reviews->total() ?? 0 }} reviews
        </div>

        <div class="pagination-controls">
            {{ $reviews->links() }}
        </div>
    </div>
@endif
@if(session('success'))
<script>
Swal.fire({
    icon: 'success',
    title: 'Success',
    text: "{{ session('success') }}",
    confirmButtonColor: '#2e7d32'
});
</script>
@endif

            </section>

            <!-- Reports Section -->
            <section class="content-section" id="reportsSection">
                <div class="chart-card" style="margin-top:40px;">
                    <div class="chart-header">
                        <h3 class="chart-title"> Report Generator to Excel And Pdf</h3>
                    </div>
                    <div style="padding:30px;text-align:center;">
                        <p>Generate comprehensive reports for analysis and presentation</p>
                        <div style="display:flex;gap:15px;justify-content:center;margin-top:25px;">
                            <a href="export/all-users-trees" class="btn btn-primary">
                                <i class="fas fa-file-excel"></i> Export to Excel data report
                            </a>
                            <a href="pdf/users-trees" class="btn btn-secondary">
                                <i class="fas fa-file-pdf"></i> Generate PDF Report
                            </a>

</script>

                    </div>
                </div>
            </section>

            <!-- Settings Section -->
            <section class="content-section" id="settingsSection">
                <div class="data-table-card">
                    <div class="table-header">
                        <h3 class="table-title">System Settings</h3>
                    </div>

                    <div style="padding:20px 0;">
                        <div style="display:grid;grid-template-columns:250px 1fr;gap:40px;">
                            <div style="border-right:1px solid var(--light-gray);padding-right:30px;">
                                <div style="margin-bottom:20px;">
                                    <div style="font-weight:600;color:var(--primary);margin-bottom:10px;">General Settings</div>
                                    <div style="display:flex;flex-direction:column;gap:8px;">
                                        <div style="padding:10px 15px;background:var(--light);border-radius:8px;cursor:pointer;">Site Configuration</div>
                                        <div style="padding:10px 15px;border-radius:8px;cursor:pointer;">User Management</div>
                                        <div style="padding:10px 15px;border-radius:8px;cursor:pointer;">Email Settings</div>
                                        <div style="padding:10px 15px;border-radius:8px;cursor:pointer;">Notification Settings</div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h4 style="margin-bottom:20px;">Site Configuration</h4>
                                <div class="form-group">
                                    <label>Site Name</label>
                                    <input type="text" class="form-control" value="Green India Initiative">
                                </div>
                                <div class="form-group">
                                    <label>Site Description</label>
                                    <textarea class="form-control">A nationwide initiative dedicated to greening India through community-driven tree plantation projects.</textarea>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>Contact Email</label>
                                        <input type="email" class="form-control" value="info@greenindia.org">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Phone</label>
                                        <input type="text" class="form-control" value="+91 1800-123-4567">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button class="btn btn-primary">Save Changes</button>
                                    <button class="btn btn-outline">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Add Drive Modal -->
    <div class="modal" id="addDriveModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Schedule Plantation Drive</h2>
                <button class="modal-close" id="closeDriveModal"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <form id="driveForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Drive Name *</label>
                            <input type="text" class="form-control" placeholder="Enter drive name" required>
                        </div>
                        <div class="form-group">
                            <label>Location *</label>
                            <input type="text" class="form-control" placeholder="Enter location" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Date *</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Target Trees *</label>
                            <input type="number" class="form-control" placeholder="Enter target trees" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Required Volunteers</label>
                            <input type="number" class="form-control" placeholder="Enter number of volunteers">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control">
                                <option value="scheduled">Scheduled</option>
                                <option value="planning">Planning</option>
                                <option value="ongoing">Ongoing</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Drive Description</label>
                        <textarea class="form-control" placeholder="Enter drive description" rows="3"></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Schedule Drive</button>
                        <button type="button" class="btn btn-outline" id="cancelDriveBtn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Reply to Review Modal -->
    <div class="modal" id="replyModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Reply to Review</h2>
                <button class="modal-close" id="closeReplyModal"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <div id="reviewPreview" style="padding: 15px; background: var(--light); border-radius: 10px; margin-bottom: 20px;">
                    <!-- Review preview will be inserted here -->
                </div>
                <form id="replyForm">
                    <input type="hidden" id="reviewId">
                    <div class="form-group">
                        <label>Your Reply *</label>
                        <textarea class="form-control" id="replyText" placeholder="Type your reply here..." rows="4" required></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Send Reply</button>
                        <button type="button" class="btn btn-outline" id="cancelReplyBtn">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if(session('success'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Deleted!',
        text: '{{ session('success') }}',
        timer: 2000,
        showConfirmButton: false
    });
    </script>
    @endif
    @if(session('success1'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Approved!',
        text: '{{ session('success1') }}',
        timer: 2000,
        showConfirmButton: false
    });
    </script>
    @endif

    <script>
        // Sidebar toggle
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Menu item click handler
        const menuItems = document.querySelectorAll('.menu-item');
        const contentSections = document.querySelectorAll('.content-section');
        const pageTitle = document.getElementById('pageTitle');
        const pageSubtitle = document.getElementById('pageSubtitle');

        const sectionTitles = {
            'dashboard': 'Dashboard Overview',
            'users': 'Users Management',
            'volunteers': 'Volunteers Management',
            'donations': 'Donations Management',
            'plantations': 'Plantation Drives',
            'reviews': 'User Reviews & Feedback',
            'reports': 'Reports & Analytics',
            'settings': 'System Settings'
        };

        const sectionSubtitles = {
            'dashboard': 'Welcome back, Admin! Here\'s what\'s happening today.',
            'users': 'Manage all registered users and their requests.',
            'volunteers': 'Coordinate with volunteers and assign tasks.',
            'donations': 'Track donations and generate receipts.',
            'plantations': 'Schedule and manage plantation drives.',
            'reviews': 'View and respond to user reviews and feedback.',
            'reports': 'Generate detailed reports and analytics.',
            'settings': 'Configure system settings and preferences.'
        };

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
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

        // Modal functionality
        const addDriveBtn = document.getElementById('addDriveBtn');
        const addDriveModal = document.getElementById('addDriveModal');
        const closeDriveModal = document.getElementById('closeDriveModal');
        const cancelDriveBtn = document.getElementById('cancelDriveBtn');

        // Open modals
        addDriveBtn?.addEventListener('click', () => addDriveModal.style.display = 'flex');

        // Close modals
        closeDriveModal.addEventListener('click', () => addDriveModal.style.display = 'none');
        cancelDriveBtn.addEventListener('click', () => addDriveModal.style.display = 'none');

        // Search functionality
        const searchInputs = document.querySelectorAll('.search-input');
        searchInputs.forEach(input => {
            input.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const table = this.closest('.data-table-card').querySelector('.data-table');
                const rows = table.querySelectorAll('tbody tr');

                rows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            });
        });

        // Chart action buttons
        document.querySelectorAll('.chart-action-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.chart-action-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Close modals when clicking outside
        window.addEventListener('click', function(event) {
            if (event.target === addDriveModal) {
                addDriveModal.style.display = 'none';
            }
            if (event.target === document.getElementById('replyModal')) {
                document.getElementById('replyModal').style.display = 'none';
            }
        });

        // User dropdown
        const userDropdown = document.getElementById('userDropdown');
        userDropdown.addEventListener('click', function() {
            alert('User dropdown menu would open here with options: Profile, Settings, Logout');
        });

        // Notification icon
        document.querySelector('.notification-icon').addEventListener('click', function() {
            alert('Notifications panel would open here.');
        });

        // Responsive adjustments
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992) {
                sidebar.classList.remove('active');
            }
        });

        // Initialize with dashboard
        document.querySelector('.menu-item.active').click();

        // Review filtering functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Filter buttons
            const filterButtons = document.querySelectorAll('.filter-btn');
            const reviewItems = document.querySelectorAll('.review-item');
            
            filterButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    const filter = this.dataset.filter;
                    
                    reviewItems.forEach(item => {
                        if (filter === 'all') {
                            item.style.display = 'flex';
                        } else if (filter === 'recent') {
                            // Show reviews from last 7 days
                            const reviewDate = new Date(item.querySelector('.review-user-meta span:nth-child(4)')?.textContent || '');
                            const now = new Date();
                            const daysDiff = (now - reviewDate) / (1000 * 60 * 60 * 24);
                            item.style.display = daysDiff <= 7 ? 'flex' : 'none';
                        } else if (filter === 'project') {
                            item.style.display = item.dataset.type === 'project' ? 'flex' : 'none';
                        } else {
                            // Star rating filter
                            item.style.display = item.dataset.rating === filter ? 'flex' : 'none';
                        }
                    });
                });
            });

            // Search functionality for reviews
            const reviewSearch = document.querySelector('#reviewsSection .search-input');
            if (reviewSearch) {
                reviewSearch.addEventListener('input', function() {
                    const searchTerm = this.value.toLowerCase();
                    reviewItems.forEach(item => {
                        const reviewText = item.querySelector('.review-text').textContent.toLowerCase();
                        const userName = item.querySelector('.review-user-info h4').textContent.toLowerCase();
                        
                        const matches = reviewText.includes(searchTerm) || 
                                       userName.includes(searchTerm);
                        
                        item.style.display = matches ? 'flex' : 'none';
                    });
                });
            }

            // Export reviews button
            const exportBtn = document.getElementById('exportReviewsBtn');
            if (exportBtn) {
                exportBtn.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Export Reviews',
                        text: 'Choose export format',
                        icon: 'info',
                        showCancelButton: true,
                        confirmButtonText: 'Excel',
                        cancelButtonText: 'PDF',
                        showDenyButton: true,
                        denyButtonText: 'CSV'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '{{ url("export/reviews") }}?format=excel';
                        } else if (result.isDenied) {
                            window.location.href = '{{ url("export/reviews") }}?format=csv';
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            window.location.href = '{{ url("export/reviews") }}?format=pdf';
                        }
                    });
                });
            }
        });

        // Reply to review function
        function replyToReview(reviewId) {
            const modal = document.getElementById('replyModal');
            const reviewItem = document.querySelector(`.review-item[data-id="${reviewId}"]`) || 
                             document.querySelector(`.review-item:nth-child(${reviewId})`);
            
            if (reviewItem) {
                const userName = reviewItem.querySelector('.review-user-info h4').textContent;
                const reviewText = reviewItem.querySelector('.review-text').textContent;
                const rating = reviewItem.dataset.rating;
                
                document.getElementById('reviewId').value = reviewId;
                document.getElementById('reviewPreview').innerHTML = `
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                        <div style="font-weight: 600;">${userName}</div>
                        <div class="review-rating">
                            ${'★'.repeat(rating)}${'☆'.repeat(5-rating)}
                        </div>
                    </div>
                    <div style="color: var(--gray); font-style: italic;">"${reviewText.substring(0, 150)}${reviewText.length > 150 ? '...' : ''}"</div>
                `;
                
                modal.style.display = 'flex';
            }
        }

        // Close reply modal
        document.getElementById('closeReplyModal')?.addEventListener('click', function() {
            document.getElementById('replyModal').style.display = 'none';
        });
        
        document.getElementById('cancelReplyBtn')?.addEventListener('click', function() {
            document.getElementById('replyModal').style.display = 'none';
        });

        // Handle reply form submission
        document.getElementById('replyForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const reviewId = document.getElementById('reviewId').value;
            const replyText = document.getElementById('replyText').value;
            
            if (!replyText.trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Please enter a reply message.'
                });
                return;
            }
            
            // Send AJAX request
            fetch(`{{ url('review/reply') }}/${reviewId}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    reply: replyText
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Reply has been sent successfully.',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    
                    document.getElementById('replyModal').style.display = 'none';
                    document.getElementById('replyText').value = '';
                    
                    // Reload the page or update UI
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to send reply.'
                });
            });
        });

        // Approve review function
        function approveReview(reviewId) {
            Swal.fire({
                title: 'Approve Review?',
                text: 'This review will be marked as approved and publicly visible.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#2E7D32',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request to approve review
                    fetch(`{{ url('review/approve') }}/${reviewId}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Approved!',
                                text: 'Review has been approved successfully.',
                                timer: 2000,
                                showConfirmButton: false
                            });
                            
                            // Update UI
                            const reviewItem = document.querySelector(`.review-item[data-id="${reviewId}"]`);
                            if (reviewItem) {
                                reviewItem.style.opacity = '1';
                            }
                        }
                    })
                    .catch(error => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to approve review.'
                        });
                    });
                }
            });
        }

        // Delete confirmation function
        function confirmDelete(url, section) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'This record will be permanently deleted!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url + '?section=' + section;
                }
            });
        }
    </script>

    <script>
        window.onload = function () {
            const section = new URLSearchParams(window.location.search).get('section');
            if(section) document.querySelector(`.menu-item[data-section="${section}"]`)?.click();
        }

        // Chart data passed from Laravel
        const monthlyData = @json($monthly ?? []);
        const quarterlyData = @json($quarterly ?? []);
        const yearlyData = @json($yearly ?? []);
        const byTypeData = @json($byType ?? []);
        const byRegionData = @json($byRegion ?? []);

        // Growth Chart
        let growthChart;

        function toGrowthPayload(rows) {
            return {
                labels: rows.map(r => r.label),
                data: rows.map(r => Number(r.total))
            };
        }

        function renderGrowthChart(rows) {
            const canvas = document.getElementById('growthChart');
            if (!canvas) return;

            const p = toGrowthPayload(rows);

            if (growthChart) growthChart.destroy();

            growthChart = new Chart(canvas, {
                type: 'line',
                data: {
                    labels: p.labels,
                    datasets: [{
                        label: 'Trees Planted',
                        data: p.data,
                        borderColor: '#2E7D32',
                        backgroundColor: 'rgba(46, 125, 50, 0.1)',
                        tension: 0.3,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { 
                            beginAtZero: true, 
                            ticks: { precision: 0 },
                            title: {
                                display: true,
                                text: 'Number of Trees'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Time Period'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });
        }

        // User Distribution Chart
        let userDistChart;

        function toDistPayload(rows) {
            return {
                labels: rows.map(r => (r.label ?? 'Unknown')),
                data: rows.map(r => Number(r.total))
            };
        }

        function renderUserDistChart(rows) {
            const canvas = document.getElementById('userDistChart');
            if (!canvas) return;

            const p = toDistPayload(rows);

            if (userDistChart) userDistChart.destroy();

            userDistChart = new Chart(canvas, {
                type: 'doughnut',
                data: {
                    labels: p.labels,
                    datasets: [{
                        label: 'Count',
                        data: p.data,
                        backgroundColor: [
                            '#2E7D32',
                            '#4CAF50',
                            '#8BC34A',
                            '#CDDC39',
                            '#FF9800',
                            '#FF5722'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { 
                            position: 'bottom',
                            labels: {
                                padding: 20
                            }
                        },
                        title: {
                            display: true,
                            text: 'User Distribution'
                        }
                    }
                }
            });
        }

        // Initialize charts
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Growth Chart with quarterly data
            if (quarterlyData && quarterlyData.length > 0) {
                renderGrowthChart(quarterlyData);
            }

            // Initialize User Distribution Chart with type data
            if (byTypeData && byTypeData.length > 0) {
                renderUserDistChart(byTypeData);
            }

            // Growth chart buttons
            const growthButtons = document.querySelectorAll('.chart-card:first-child .chart-action-btn');
            growthButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    growthButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const range = btn.dataset.range;
                    if (range === 'monthly' && monthlyData) renderGrowthChart(monthlyData);
                    if (range === 'quarterly' && quarterlyData) renderGrowthChart(quarterlyData);
                    if (range === 'yearly' && yearlyData) renderGrowthChart(yearlyData);
                });
            });

            // User distribution buttons
            const distButtons = document.querySelectorAll('.chart-card:last-child .chart-action-btn');
            distButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    distButtons.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    const mode = btn.dataset.mode;
                    if (mode === 'type' && byTypeData) renderUserDistChart(byTypeData);
                    if (mode === 'region' && byRegionData) renderUserDistChart(byRegionData);
                });
            });
        });
    </script>
    <script>
function confirmReviewDelete(el) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This review will be permanently deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = el.getAttribute('href');
        }
    });
}
</script>

</body>
</html>