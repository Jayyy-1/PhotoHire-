<?php
@include 'config.php';
// Jay Vanguardia
session_start();

if (!isset($_SESSION['user_name'])) {
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Dashboard</title>

   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css"> 
   
   <style>

body {
   background-color: #f7f6f2; 
}


.bg-dark {
   background-color: #3f0071 !important; 
}

.sidebar a {
   color: #fff; 
}

.sidebar a:hover {
   color: #f8f9fa; 
   background-color: #6f42c1; 
}


.text-black {
   color: #000 !important; 
}


.card {
   margin-bottom: 20px;
   border-radius: 8px; 
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
}

.card-body {
   padding: 20px;
}

.card-title {
   font-size: 1.25rem; 
   font-weight: bold; 
   margin-bottom: 15px; 
}


.card-text {
   font-size: 1rem; 
   margin-bottom: 15px; 
}


.btn {
   width: 100%; 
}


.col-md-6 {
   display: flex;
   justify-content: center;
}

.card {
   width: 100%; 
   display: flex;
   flex-direction: column;
   height: 100%;
   justify-content: space-between; 
}


.logo {
   width: 100px; 
   margin: 20px auto; 
   display: block; 
}


@media (max-width: 768px) {
   .card-body {
      padding: 15px; 
   }

   .card-title {
      font-size: 1.15rem; 

   .btn {
      font-size: 1rem; 
   }
}


   </style>
</head>
<body>

<div class="container-fluid">
   <div class="row">
      <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar text-white">
         <div class="position-sticky pt-3">
            <!-- Logo Section -->
            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/462640560_1935490000267008_2725820518226130777_n.png?_nc_cat=110&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGxmKRA0Bxs-K345Z_HAxfgw42wfqAwNwPDjbB-oDA3A0weSBz2MFMS8LiogNdTPMu7HNtAVCYFQfW9k-MrvocG&_nc_ohc=sS4-RyjxJ94Q7kNvgFjEfPb&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.xx&oh=03_Q7cD1QFyjvGC0n9Yox6nrCHffUiL9uAGv1FolCU75qXIrOpAZQ&oe=67772E17" alt="Logo" class="logo"> <!-- Add your logo path here -->
        
            <ul class="nav flex-column mt-4">
               <li class="nav-item">
                  <a class="nav-link text-white" href="browse_services.php">
                     <i class="bi bi-briefcase-fill"></i> Browse Services
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="photobooking.php">
                     <i class="bi bi-calendar-check-fill"></i> Photo Booking
                  </a>
                  <li class="nav-item">
   <a class="nav-link text-white" href="my_bookings.php">
      <i class="bi bi-calendar-check-fill"></i> My Bookings
   </a>
</li>

               </li>
               <li class="nav-item">
                <a class="nav-link text-white" href="reviews.php">
                     <i class="bi bi-star-fill"></i> Reviews
             </a>
             
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="payment_page.php">
                 <i class="bi bi-currency-exchange"></i> Payment
           </a>
            </li>

               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="logout.php">
                     <i class="bi bi-box-arrow-right"></i> Logout
                  </a>
               </li>
            </li>
            </ul>
         </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-md-6 mb-4">
                  <div class="card shadow-sm">
                     <div class="card-body">
                        <h5 class="card-title text-black">Browse Services</h5>
                        <p class="card-text text-black">Explore a wide range of photography services offered by our platform.</p>
                        <a href="browse_services.php" class="btn btn-outline-primary">Explore</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 mb-4">
                  <div class="card shadow-sm">
                     <div class="card-body">
                        <h5 class="card-title text-black">Photo Booking</h5>
                        <p class="card-text text-black">Easily book photo sessions for your mini or big events and special occasions.</p>
                        <a href="photobooking.php" class="btn btn-outline-success">Book Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
   </div>
</div>

<!-- Bootstrap JS file link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optionally include Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
