<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People of Indian Society - My Trees</title>
    <link rel="shortcut icon" href="image/logo1.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="css/user_dashboard.css">
    <style>
        .btn-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    margin: 20px auto;
}

.plant-btn {
    background: linear-gradient(135deg, #2d5a27, #4caf50);
    color: white;
    border: none;
    padding: 14px 30px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

.plant-btn:hover {
    background: linear-gradient(135deg, #1e3f1a, #43a047);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

.plant-btn:active {
    transform: scale(0.96);
} .tree-card {
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: 0.3s ease;
    max-width: 280px;
    font-family: serif;
}

.tree-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.tree-image {
    position: relative;
    background: #f2f6f2;
    text-align: center;
    padding: 15px;
}

.tree-image img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 12px;
    border: 3px solid #e5f3e5;
}

.status-badge {
    position: absolute;
    top: 12px;
    right: 12px;
    background: #e8f5e9;
    color: #2e7d32;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
}

.tree-content {
    padding: 16px;
    text-align: center;
}

.tree-content h3 {
    font-size: 16px;
    font-weight: 600;
    color: #1b5e20;
    margin-bottom: 6px;
}

.tree-content p {
    font-size: 13px;
    color: #666;
    margin-bottom: 14px;
}

.action-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    padding: 8px 14px;
    font-size: 13px;
    font-weight: 600;
    color: #ffffff;
    background: linear-gradient(135deg, #4caf50, #2e7d32);
    border-radius: 20px;
    text-decoration: none;
    transition: 0.3s;
}

.action-btn:hover {
    background: linear-gradient(135deg, #43a047, #1b5e20);
}


    </style>
</head>
<body>

    @include('udashboard_sidebar')


     <div class="quick-actions-grid">

@foreach($data1 as $d)
         <div class="tree-card">
    <div class="tree-image">
        <img src="{{ asset('image/'.$d->pic) }}" alt="Tree Image">
        <span class="status-badge">
            <i class="fas fa-clock"></i> Due Today
        </span>
    </div>

    <div class="tree-content">
        <h3>{{$d->treeName }}</h3>
        <p>Day 15 progress update required</p>

        <a href="{{ url('progress/'.$d->id) }}" class="action-btn">
            <i class="fas fa-upload"></i> Update Progress
        </a>
    </div>
     </div>
     @endforeach

        </div>

          <div class="btn-wrapper">
   <a href="tree"class="plant-btn">🌱 Plant a Tree</a>
</div>
 
</body>
</html>