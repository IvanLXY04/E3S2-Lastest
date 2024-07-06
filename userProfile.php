<?php
include('session.php')

$userId=$_SESSION['userId'];
$sql="select * from user where userId='".$userId."'";
$result=mysqli_query($session,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - IKUN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
            color: #6f42c1 !important;
            display: flex;
            align-items: center;
        }
        .navbar-logo {
            height: 40px;
            margin-right: 10px;
        }
        .profile-header {
            background-color: #f8f9fa;
            padding: 2rem 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/IKUN logo.png" alt="IKUN Logo" class="navbar-logo">
                IKUN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">User Profile</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="profile-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-8">
                    <?php
                    if($user=mysqli_fetch_array($result)){
                        echo'
                        <h1 class="display-4">'.$user["firstName"].'  '.$user["lastName"].'</h1>
                        <p class="lead">'.$user["highestEducation"].'</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h2>About Me</h2>
                <p>Peter is a data engineer with a passion for developing innovative programs. He's experienced in Python and HTML and has worked on various projects, including a library management system and a stock management system.</p>
                
                <h2 class="mt-4">Skills</h2>
                <ul class="list-group">
                    <li class="list-group-item">Python</li>
                    <li class="list-group-item">HTML</li>
                    <li class="list-group-item">Data Engineering</li>
                </ul>
                
                <h2 class="mt-4">Projects</h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Library Management System</h5>
                        <p class="card-text">A system to manage library resources and user borrowing.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Stock Management System</h5>
                        <p class="card-text">An application to track and manage inventory for businesses.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2>Interests</h2>
                <ul class="list-group">
                    <li class="list-group-item">Reading tech blogs</li>
                    <li class="list-group-item">Exploring new programming languages</li>
                </ul>
                
                <h2 class="mt-4">Contact</h2>
                <ul class="list-group">
                    <li class="list-group-item">Email: peter@example.com</li>
                    <li class="list-group-item">LinkedIn: linkedin.com/in/peter</li>
                    <li class="list-group-item">GitHub: github.com/peter</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

