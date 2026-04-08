<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            min-height: 100vh;
        }

        h1, h2, h3, h4, h5 {
            font-family:serif;
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

        /* Data Tables */
        .data-table-card {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
            overflow: hidden;
            margin-top: 20px;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .table-title {
            font-size: 1.5rem;
            color: var(--primary);
            margin: 0;
        }

        .table-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .search-box {
            position: relative;
            min-width: 200px;
        }

        .search-input {
            padding: 12px 15px 12px 45px;
            border: 1px solid var(--light-gray);
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            width: 100%;
            transition: var(--transition);
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.1);
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
            padding: 12px 20px;
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            white-space: nowrap;
        }

        .table-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        /* Table Styles */
        .data-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        .data-table th {
            background: var(--light);
            padding: 18px 15px;
            text-align: left;
            font-weight: 600;
            color: var(--dark);
            border-bottom: 2px solid var(--light-gray);
            white-space: nowrap;
        }

        .data-table td {
            padding: 16px 15px;
            border-bottom: 1px solid var(--light-gray);
            vertical-align: middle;
        }

        .data-table tr:hover {
            background: rgba(76, 175, 80, 0.03);
        }

        .user-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar-small {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
            font-size: 1rem;
            flex-shrink: 0;
        }

        .status-badge {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
            text-align: center;
            min-width: 80px;
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

        /* Table Responsive Container */
        .table-responsive {
            overflow-x: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid var(--light-gray);
            flex-wrap: wrap;
            gap: 15px;
        }

        .pagination-info {
            font-size: 0.9rem;
            color: var(--gray);
        }

        .pagination-controls {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .page-btn {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
            border: 1px solid var(--light-gray);
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
            font-family: inherit;
            font-size: 0.95rem;
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

        /* Mobile-first responsive design */
        @media (max-width: 1200px) {
            .table-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .search-box {
                flex-grow: 1;
                max-width: 400px;
            }
        }

        @media (max-width: 992px) {
            .data-table-card {
                padding: 20px;
            }
            
            .table-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .table-actions {
                width: 100%;
                flex-direction: column;
                gap: 12px;
            }
            
            .search-box {
                width: 100%;
                max-width: 100%;
            }
            
            .table-btn {
                width: 100%;
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .data-table-card {
                padding: 15px;
                border-radius: 12px;
                margin: 10px;
                margin-top: 15px;
            }
            
            .table-title {
                font-size: 1.3rem;
            }
            
            .data-table th,
            .data-table td {
                padding: 14px 12px;
                font-size: 0.9rem;
            }
            
            .user-avatar-small {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }
            
            .status-badge {
                padding: 5px 10px;
                font-size: 0.8rem;
                min-width: 70px;
            }
        }

        @media (max-width: 576px) {
            .data-table-card {
                padding: 12px;
                margin: 8px;
                margin-top: 10px;
            }
            
            .table-title {
                font-size: 1.2rem;
            }
            
            .search-input {
                padding: 10px 15px 10px 40px;
                font-size: 0.9rem;
            }
            
            .table-btn {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
            
            .data-table th,
            .data-table td {
                padding: 12px 10px;
                font-size: 0.85rem;
            }
            
            .user-cell div:last-child {
                max-width: 150px;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .pagination {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .pagination-info {
                margin-bottom: 10px;
            }
        }

        /* Extra small devices */
        @media (max-width: 400px) {
            .data-table th:nth-child(4),
            .data-table td:nth-child(4) {
                display: none;
            }
            
            .user-cell {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
            
            .user-avatar-small {
                width: 32px;
                height: 32px;
                font-size: 0.85rem;
            }
        }

        /* Animation for content */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .content-section {
            animation: fadeIn 0.5s ease;
        }
    </style>
</head>
<body>
@include('udashboard_sidebar')

    <section class="content-section" id="usersSection">
        <div class="data-table-card">
            <div class="table-header">
                <h3 class="table-title">Users Management</h3>
                <div class="table-actions">
                    <div class="search-box">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Search users..." id="userSearch">
                    </div>
                    <a href="user_register" class="table-btn" id="addUserBtn">
                        <i class="fas fa-user-plus"></i> Add New User
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>User Details</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>State</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                           @php $i=1;@endphp
    @foreach($userData as $u)
        <tr>
            <td>PIOS{{ $i++; }}</td>
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
        </tr>
    @endforeach
</tbody>
                </table>
            </div>

        
        </div>
    </section>

    <script>
        // Make table responsive with search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('userSearch');
            const userRows = document.querySelectorAll('#userTableBody tr');
            
            // Search functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                
                userRows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            });
            
            // Add new user button functionality
            document.getElementById('addUserBtn').addEventListener('click', function() {
                alert('Add new user functionality would open a form  here.');
                // In a real application, this would open a modal form
            });
            
            // Responsive table adjustments
            function adjustTableForMobile() {
                const screenWidth = window.innerWidth;
                const tableCells = document.querySelectorAll('.data-table td, .data-table th');
                
                // Hide location column on very small screens
                if (screenWidth < 400) {
                    // Location is 4th column (index 3)
                    tableCells.forEach((cell, index) => {
                        if ((index % 6) === 3) { // Every 6th cell starting from index 3
                            cell.style.display = 'none';
                        }
                    });
                } else {
                    // Show all columns
                    tableCells.forEach(cell => {
                        cell.style.display = '';
                    });
                }
            }
            
            // Initial adjustment
            adjustTableForMobile();
            
            // Adjust on window resize
            window.addEventListener('resize', adjustTableForMobile);
            
            // Add hover effects for table rows
            const tableRows = document.querySelectorAll('.data-table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.backgroundColor = 'rgba(76, 175, 80, 0.05)';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.backgroundColor = '';
                });
            });
        });
    </script>
</body>
</html>