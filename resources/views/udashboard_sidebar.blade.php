<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTrack Pro | Tree Management Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/user_dashboard.css">
       <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">

   <script src="js/user_dashboard.js"></script>
   <style>
    a{
        text-decoration:none;
        color:white;
    }
    

   </style>
</head>
<body>
      <div class="mobile-header">
        <button class="mobile-menu-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
        <div class="logo-text">People of Indian Society</div>
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
            <div class="logo-text">People of Indian Society</div>
        </div>

        <nav class="nav-menu">
            <a href="user" class="nav-item " onclick="changeTab('dashboard')">
                <div class="nav-icon"><i class="fas fa-home"></i></div>
                <span>Dashboard</span>
                <div class="nav-badge">3</div>
            </a>
            
            <a href="mytrees" class="nav-item" onclick="changeTab('trees')">
                <div class="nav-icon"><i class="fas fa-tree"></i></div>
                <span>My Trees</span>
                <div class="nav-badge">{{$data2}}</div>
            </a>
   @if($data->role === 'volunteer')
    <a href="userManagement" class="nav-item" onclick="changeTab('users')">
        <div class="nav-icon"><i class="fas fa-users-cog"></i></div>
        <span>Manage User</span>
                        <div class="nav-badge">{{$data4}}</div>

    </a>
@endif

            
            <a href="growth" class="nav-item" onclick="changeTab('growth')">
                <div class="nav-icon"><i class="fas fa-chart-line"></i></div>
                <span>Growth Analytics</span>
            </a>
            
        
        
            
            <a  href="achivement"  class="nav-item " onclick="changeTab('achievements')">
                <div class="nav-icon"><i class="fas fa-trophy"></i></div>
                <span>Achievements</span>
            </a>
            
            <div id="logoutBtn" class="nav-item " onclick="changeTab('settings')">
                <div class="nav-icon"><i class="fas fa-cog"></i></div>
                <span>Logout</span>
</div>
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
                    window.location.href = "{{ url('/logout') }}";
                }
            });
        });
        </script>
        </nav>

   
    </aside>
  <main class="main-content">
        <!-- Top Header -->
        <header class="top-header"style="background-color:white; padding:10px; border-radius:10px;">
            <div class="page-title">
                <h1>Welcome to {{$data->role}} Dashboard</h1>
                <p>Track, monitor your progress</p>
            </div>
            
                 <div class="user-profile-sidebar desktop-only" style="margin-top: auto; padding-top: 30px; border-top: 2px solid rgba(255,255,255,0.1);">
            <div class="user-info" style="display: flex; align-items: center; gap: 15px;">
                <div class="user-avatar" style="width: 50px; height: 50px; border-radius: 50%; background: var(--gradient-primary); display: flex; align-items: center; justify-content: center; font-size: 20px; color: white;">
                    {{ strtoupper(substr($data->name, 0, 2)) }}
                </div>
                <div>
                    <div style="font-weight: 600;">{{$data->name}}</div>
                    <div style="font-size: 12px; color: var(--gray);">{{$data->role}}</div>
                </div>
            </div>
        </div>
        </header>
</body>
</html>