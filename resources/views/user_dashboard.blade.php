<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People of Indian Society - Tree Management Dashboard</title>
    <link rel="shortcut icon" href="logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/user_dashboard.css">
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script src="js/user_dashboard.js"></script>
 <style>
.tree-map{
  position: relative;
  width: 100%;
  height: 320px;
  border-radius: 14px;
  background: linear-gradient(180deg, #f7f9ff 0%, #eef3ff 100%);
  overflow: visible; /* ✅ MUST: hover card cut nahi hoga */
  border: 1px solid rgba(17,24,39,0.06);
}

/* point */
.tree-point{
  position: absolute;
  width: 30px;
  height: 30px;
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius: 50%;
  background: #16a34a; /* green dot */
  box-shadow: 0 10px 22px rgba(0,0,0,0.14);
  transform: translate(-50%, -50%) scale(0.92);
  cursor: pointer;
  opacity: 1;               /* ✅ visible */
  z-index: 1000;
  transition: transform .18s ease, box-shadow .18s ease;
}

.tree-point:hover{
  transform: translate(-50%, -50%) scale(1);
  box-shadow: 0 14px 30px rgba(0,0,0,0.18);
}

/* icon */
.tree-point i{
  font-size: 14px;
  color: #ffffff;
}

/* hover card */
.tree-hover-card{
  position: absolute;
  left: 50%;
  bottom: 42px;
  transform: translateX(-50%) translateY(8px);
  width: 230px;
  background: #ffffff;
  border-radius: 14px;
  box-shadow: 0 18px 44px rgba(0,0,0,0.20);
  overflow: hidden;
  opacity: 0;
  pointer-events: none;
  transition: 0.18s ease;
  z-index: 999999;
  border: 1px solid rgba(17,24,39,0.08);
}

/* show on hover */
.tree-point:hover .tree-hover-card{
  opacity: 1;
    z-index: 999999;

  transform: translateX(-50%) translateY(0);
}

/* image */
.tree-hover-card .thumb{
  width: 100%;
    z-index: 999999;

  height: 120px;
  background: #e5e7eb;
}
.tree-hover-card .thumb img{
  width: 100%;
  height: 100%;
  object-fit: cover;
  display:block;
}

/* content */
.tree-hover-card .info{
  padding: 10px 12px;
}
.tree-hover-card .title{
  font-size: 14px;
  font-weight: 800;
  margin: 0 0 6px 0;
  color: #111827;
}
.tree-hover-card .meta{
  font-size: 12px;
  margin: 0;
  color: #6b7280;
  line-height: 1.4;
}

/* little arrow */
.tree-hover-card::after{
  content:'';
  position:absolute;
  top:100%;
  left:50%;
  transform: translateX(-50%);
  border: 9px solid transparent;
  border-top-color: #ffffff;
  filter: drop-shadow(0 6px 8px rgba(0,0,0,0.12));
}

</style>




</head>
<body>
    <!-- Mobile Header -->
  @include('udashboard_sidebar')    <!-- Main Content -->
  

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <div class="stat-trend">+{{($data2*100/10)}}%</div>
                </div>
                <div class="stat-value">{{$data2}}</div>
                <div class="stat-label">Trees Planted</div>
                <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: {{$data2*10}}%; height: 100%; background: var(--gradient-primary); border-radius: var(--radius-full);"></div>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #DBEAFE; color: var(--secondary);">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-trend">+{{($data2*100/10)}}%</div>
                </div>
                <div class="stat-value">{{($data2*100/10)}}</div>
                <div class="stat-label">Growth Rate</div>
                <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: {{$data2*10}}%; height: 100%; background: var(--gradient-secondary); border-radius: var(--radius-full);"></div>
                </div>
            </div>
<!--             
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
                    <div style="width: {{$data2*10}}%; height: 100%; background: var(--gradient-accent); border-radius: var(--radius-full);"></div>
                </div>
            </div> -->
            
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-icon" style="background: #FCE7F3; color: #DB2777;">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="stat-trend">{{$data2*10}}%</div>
                </div>
                <div class="stat-value">{{$data2*10}}%</div>
                <div class="stat-label">{{$data->role}} Progress</div>
                <div class="progress-bar" style="margin-top: 15px; height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                    <div style="width: {{$data2*10}}%; height: 100%; background: linear-gradient(135deg, #EC4899 0%, #DB2777 100%); border-radius: var(--radius-full);"></div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
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
              <div class="tree-map-container">
<div class="section-title">
    <i class="fas fa-map-marker-alt"></i>
    <span>My Tree Location Map</span>
</div>

<div class="tree-map" id="treeMap"></div>

<script>
    const treesFromDB = @json($trees ?? []);
</script>


    <div style="margin-top: 20px; display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <div style="display: flex; align-items: center; gap: 8px;">
            <div style="width: 12px; height: 12px; background: var(--primary); border-radius: 50%;"></div>
            <span style="font-size: 13px;">Your Trees ({{ $data2 }})</span>
        </div>

        {{-- agar tum community trees bhi dikhana chahte ho tabhi --}}
        {{-- <div style="display: flex; align-items: center; gap: 8px;">
            <div style="width: 12px; height: 12px; background: var(--secondary); border-radius: 50%;"></div>
            <span style="font-size: 13px;">Community Trees ({{ $communityCount ?? 0 }})</span>
        </div> --}}
    </div>
</div>

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
                <!-- Growth Chart -->
                
            </div>
            
            <!-- Right Column -->
                @if($data->role === 'user')

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
                                <span style="font-size: 13px; color: var(--warning); font-weight: 600;">{{$data2}}/10 ⏳</span>
                            </div>
                            <div style="height: 6px; background: var(--gray-light); border-radius: var(--radius-full); overflow: hidden;">
                                <div style="width: {{$data2*100/10}}%; height: 100%; background: var(--warning); border-radius: var(--radius-full);"></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <button class="btn btn-primary" onclick="celebrateVolunteer()" style="width: 100%; padding: 12px; margin-top: 20px;">
                        <i class="fas fa-award" style="margin-right: 10px;"></i> Become Volunteer
                    </button>
                </div>
                @endif
                
                <!-- Recent Trees -->
                <div class="recent-trees" style="margin-top: 20px;">
                    <div class="section-title">
                        <i class="fas fa-tree"></i>
                        <span>Recent Trees</span>
                    </div>
                    
                    @foreach($data1 as $tree)
                    <div class="tree-item">
                        <div class="tree-avatar">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <div class="tree-info">
                            <span style="font-weight: 600; font-size: 14px;" class="text-truncate">{{$tree->tree_name}}</span>
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
                    @endforeach
                    
                    
                    
                    <a href="mytrees" class="btn btn-outline" onclick="viewAllTrees()" style="width: 100%; margin-top: 15px;">
                        <i class="fas fa-eye" style="margin-right: 8px;"></i> View All Trees
                    </a>
                </div>
            </div>
        </div>


                   
                </div>
</section>


        <!-- Achievements -->
       

        <!-- Mobile Bottom Navigation -->
        
    </main>

    <!-- Notifications Container -->
    <div class="notification-container" id="notificationContainer"></div>

    <!-- Photo Upload Modal -->
    


<script>
function initializeTreeMap() {
  const treeMap = document.getElementById('treeMap');
  if (!treeMap) return;

  treeMap.innerHTML = '';
  if (!Array.isArray(treesFromDB) || treesFromDB.length === 0) return;

  const rows = treesFromDB
    .map(t => ({
      ...t,
      lat: Number(t.latitude),
      lng: Number(t.longitude),
      img: t.pic ? `/image/${t.pic}` : '/image/default.png'
    }))
    .filter(t => !Number.isNaN(t.lat) && !Number.isNaN(t.lng));

  if (rows.length === 0) return;

  const lats = rows.map(t => t.lat);
  const lngs = rows.map(t => t.lng);

  const minLat = Math.min(...lats), maxLat = Math.max(...lats);
  const minLng = Math.min(...lngs), maxLng = Math.max(...lngs);

  const latRange = (maxLat - minLat) || 1;
  const lngRange = (maxLng - minLng) || 1;

  rows.forEach((t, index) => {
    let leftPct = ((t.lng - minLng) / lngRange) * 90 + 5;
    let topPct  = 100 - (((t.lat - minLat) / latRange) * 90 + 5);

    // overlap avoid
    leftPct += (Math.random() - 0.5) * 2;
    topPct  += (Math.random() - 0.5) * 2;

    const point = document.createElement('div');
    point.className = 'tree-point';
    point.style.left = leftPct + '%';
    point.style.top  = topPct + '%';

    // ✅ normal view me ICON only
    point.innerHTML = `
      <i class="fas fa-tree"></i>

      <div class="tree-hover-card">
        <div class="thumb">
          <img src="${t.img}" alt="tree"
               onerror="this.src='/image/default.png'">
        </div>
        <div class="info">
          <p class="title">${t.treeName ?? 'Tree'}</p>
          <p class="meta">
            Planted: ${t.plantingDate ?? '-'}<br>
            Lat: ${t.latitude ?? '-'} | Lng: ${t.longitude ?? '-'}
          </p>
        </div>
      </div>
    `;

    setTimeout(() => {
      point.style.opacity = '1';
      point.style.transform = 'translate(-50%, -50%) scale(1)';
    }, index * 40);

    treeMap.appendChild(point);
  });
}

document.addEventListener('DOMContentLoaded', initializeTreeMap);
</script>

</body>
</html>