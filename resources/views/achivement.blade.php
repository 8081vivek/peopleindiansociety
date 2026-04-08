<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achivement - People of Indian Society</title> 
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/user_dashboard.css">
   <script src="js/user_dashboard.js"></script>
</head>
<body>
      @include('udashboard_sidebar')    <!-- Main Content -->

    <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow-md); margin-top: 30px;">
            <div class="section-title" style="margin-bottom: 20px;">
                <i class="fas fa-trophy"></i>
                <span>Recent Achievements</span>
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
                
                                  <div class="achievement-card">
    <div class="achievement-badge"
         style="background: var(--success);
                color: {{ ($data->role === 'volunteer' ) ? 'var(--light)' : 'var(--gray)' }};">
        <i class="fas fa-users"></i>
    </div>

    <h4 style="font-size: 14px; margin-bottom: 5px;">Volunteer Leader</h4>
    <p style="font-size: 11px; color: var(--gray);">Help 10 planters</p>

    <div style="margin-top: 10px; font-size: 11px; color: var(--gray);">
        @if($data->role === 'volunteer')
            <i class="fas fa-check-circle" style="color: var(--success);"></i>
            Unlocked
        @else
            <i class="fas fa-lock"></i>
            Locked
        @endif
    </div>
            </div>
        </div>
</body>
</html>