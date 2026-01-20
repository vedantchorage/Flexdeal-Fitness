<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="treadmill, walker, running machine, magnetic crosstrainer, home elliptical, spin bike, fitness equipment shop, gym equipment for home, welcare treadmill, gym near me, home gym setup, commercial gym setup, BCA machine">
    <title>FlexDeal Fitness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>

        /* ----- Mobile Navbar Responsive Toggle ----- */
@media (max-width: 991px) {
  .header-container {
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 1rem;
  }

  .mobile-menu {
    display: block;
    font-size: 1.5rem;
    color: #333;
    cursor: pointer;
  }

  nav #main-nav {
    position: fixed;
    top: 70px;
    left: 0;
    width: 100%;
    max-height: 0;
    background: #fff;
    overflow: hidden;
    flex-direction: column;
    align-items: flex-start;
    transition: max-height 0.4s ease;
    z-index: 999;
    padding: 0 1rem;
  }

  nav #main-nav.active {
    max-height: 100vh;
    overflow-y: auto;
    padding: 1rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  nav #main-nav > li {
    width: 100%;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
  }
.dropdown-menu,
    .mega-menu {
        position: static;
        display: none;
        box-shadow: none;
        background: #f7f7f7;
        width: 100%;
        padding: 10px;
    }


 #main-nav > li.active .dropdown-menu,
#main-nav > li.active .mega-menu {
    display: block;
    padding: 10px 0;
}


  .search-box {
    width: 100%;
    margin-top: 1rem;
  }
}

/* ----- Hero and About Section Adjustments ----- */
@media (max-width: 768px) {
  .hero h1 {
    font-size: 2.5rem;
  }

  .hero p {
    font-size: 1.1rem;
  }

  .about-section {
    flex-direction: column !important;
    text-align: center;
  }

  .about-image {
    margin-top: 20px;
  }

  .about-text h2 {
    font-size: 2rem;
  }
}

/* ----- Further Optimization for Small Devices ----- */
@media (max-width: 576px) {
  .feature-card {
    width: 100%;
  }

  .consultation-title {
    font-size: 1.8rem;
  }

  .consultation-subtitle {
    font-size: 1rem;
  }

  .platform-link {
    width: 80px;
  }

  .platform-logo {
    width: 40px;
    height: 40px;
  }

  .consultation-cta {
    font-size: 1rem;
    padding: 10px 20px;
  }
}

 /* Hero Slider */
        .hero-slider {
            position: relative;
            width: 100%;
            height: calc(100vh - 80px);
            max-height: 900px;
            overflow: hidden;
            margin-top: 0;.mobile-menu-toggle {
    display: none;
    font-size: 1.5rem;
    cursor: pointer;
    padding: 10px;
    z-index: 1002;
    position: fixed;
    top: 15px;
    left: 15px;
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

.mobile-sidebar {
    position: fixed;
    top: 0;
    left: -260px;
    width: 260px;
    height: 100%;
    background: #fff;
    box-shadow: 2px 0 8px rgba(0,0,0,0.2);
    padding: 20px;
    transition: left 0.3s ease;
    z-index: 1001;
    display: flex;
    flex-direction: column;
}

.mobile-sidebar.active {
    left: 0;
}

.mobile-sidebar ul {
    list-style: none;
    padding: 0;
    margin: 20px 0 0 0;
}

.mobile-sidebar ul li {
    border-bottom: 1px solid #eee;
    padding: 12px 0;
}

.mobile-sidebar ul li a {
    text-decoration: none;
    color: #333;
    font-size: 1.1rem;
    transition: color 0.2s;
}

.mobile-sidebar ul li a:hover {
    color: #007bff;
}

.close-sidebar {
    background: none;
    border: none;
    font-size: 1.8rem;
    cursor: pointer;
}

.sidebar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

@media (max-width: 992px) {
    .mobile-menu-toggle {
        display: block;
    }
}

        }

        .slider-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slide.active {
            opacity: 1;
            z-index: 1;
        }

        .slide-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .bg-image, .bg-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%);
        }

        .slide-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            width: 90%;
            padding: 2rem;
            color: white;
            text-align: center;
        }

        .slide-content h2 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s ease;
        }

        .slide-content p {
            font-size: clamp(1.2rem, 2.5vw, 1.8rem);
            margin-bottom: 2.5rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s ease 0.2s;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            font-size: clamp(1rem, 1.5vw, 1.2rem);
            border: 2px solid transparent;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s ease 0.4s;
        }

        .btn-primary {
            background-color: #ff6b6b;
            color: white;
        }

        .btn-primary:hover {
            background-color: #ff5252;
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0,0,0,0.3);
        }

        .btn-accent {
            background-color: #4ecdc4;
            color: white;
        }

        .btn-accent:hover {
            background-color: #3dbeb4;
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0,0,0,0.3);
        }

        .slide.active .slide-content h2,
        .slide.active .slide-content p,
        .slide.active .slide-content .btn {
            transform: translateY(0);
            opacity: 1;
        }

        .pulse-animation .btn {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .slider-controls {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: space-between;
            padding: 0 2rem;
            z-index: 10;
            transform: translateY(-50%);
        }

        .slider-nav {
            background: rgba(255,255,255,0.3);
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: white;
            backdrop-filter: blur(5px);
        }

        .slider-nav:hover {
            background: rgba(255,255,255,0.5);
            transform: scale(1.1);
        }

        .slider-dots {
            position: absolute;
            bottom: 3rem;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 12px;
            z-index: 10;
        }

        .slider-dots .dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-dots .dot.active {
            background: white;
            transform: scale(1.3);
        }
 


     .about-section {
    padding: 60px 20px;
}

.about-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
}

.about-image {
    position: relative;
    flex: 1;
    max-width: 500px;
}

.about-image img {
    width: 100%;
    height: auto;
    border-radius: 12px;
}

.about-badge {
    position: absolute;
    bottom: 20px;
    left: 20px;
     background: #1a2a6c;
    color: #fff;
    padding: 10px 16px;
    border-radius: 8px;
    text-align: center;
}

.about-badge span {
    display: block;
    font-size: 1.2rem;
    font-weight: bold;
}

.about-badge small {
    font-size: 0.9rem;
}

.about-content {
    flex: 1;
    max-width: 600px;
}

.section-title {
    font-size: 2.2rem;
            color: #1a2a6c;
    margin-bottom: 10px;
}

.about-subtitle {
    font-size: 1.2rem;
    margin-bottom: 20px;
     color: #fdbb2d;
}

.about-text p {
    margin-bottom: 16px;
    line-height: 1.6;
}

/* ======== Media Queries ======== */

/* Tablet (≤ 991px) */
@media (max-width: 991px) {
    .about-container {
        flex-direction: column;
        text-align: center;
    }

    .about-badge {
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .about-content {
        max-width: 90%;
    }
}

/* Mobile (≤ 576px) */
@media (max-width: 576px) {
    .section-title {
        font-size: 1.6rem;
    }

    .about-subtitle {
        font-size: 1rem;
    }

    .about-text p {
        font-size: 0.95rem;
    }

    .about-badge {
        padding: 8px 12px;
    }

    .about-badge span {
        font-size: 1rem;
    }

    .about-badge small {
        font-size: 0.8rem;
    }
}


.why-choose-us {
    padding: 60px 20px;
    background: #f9f9f9;
    text-align: center;
}

.section-header h2 {
    font-size: 2.5rem;
    margin-bottom: 10px;
     color: #1a2a6c;
}

.section-header .subtitle {
    font-size: 1.1rem;
    color: #777;
    margin-bottom: 40px;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.feature-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.feature-icon {
      width: 70px;
            height: 70px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #1a2a6c, #3a4a8c);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            transition: all 0.3s ease;
}

 .feature-card:hover .feature-icon {
            background: linear-gradient(135deg, #fdbb2d, #ffcc52);
            transform: scale(1.1);
        }

.feature-card h3 {
     font-size: 1.3rem;
            color: #1a2a6c;
            margin-bottom: 15px;
}

.feature-card p {
      color: #666;
            line-height: 1.7;
            font-size: 0.95rem;
}

/* ======== Media Queries ======== */

/* Tablet (≤ 991px) */
@media (max-width: 991px) {
    .features-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .section-header h2 {
        font-size: 1.8rem;
    }

    .section-header .subtitle {
        font-size: 1rem;
    }
}

/* Mobile (≤ 576px) */
@media (max-width: 576px) {
    .features-grid {
        grid-template-columns: 1fr;
    }

    .section-header h2 {
        font-size: 1.5rem;
    }

    .section-header .subtitle {
        font-size: 0.95rem;
    }

    .feature-card {
        padding: 16px;
    }

    .feature-icon {
        font-size: 2rem;
    }

    .feature-card h3 {
        font-size: 1.1rem;
    }

    .feature-card p {
        font-size: 0.95rem;
    }
}

.stats-section {
    padding: 60px 20px;
    background: #fff;
    text-align: center;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.stat-item {
    background: #f9f9f9;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.stat-icon-wrapper {
    width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #3a7bd5, #00d2ff);
            border-radius: 50%;
            color: white;
            font-size: 30px;
        }

.stat-content h3 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 5px;
    font-weight: bold;
}

.stat-content p {
    font-size: 1rem;
    color: #555;
    margin: 0;
}

/* ======== Media Queries ======== */

/* Large Tablets (≤ 1199px) */
@media (max-width: 1199px) {
    .stats-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

/* Tablets (≤ 991px) */
@media (max-width: 991px) {
    .stats-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Small Tablets & Large Mobiles (≤ 767px) */
@media (max-width: 767px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .stat-content h3 {
        font-size: 1.5rem;
    }
}

/* Mobiles (≤ 480px) */
@media (max-width: 480px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }

    .stat-content h3 {
        font-size: 1.4rem;
    }

    .stat-content p {
        font-size: 0.95rem;
    }

    .stat-icon-wrapper {
        font-size: 2rem;
    }
}




 /* Featured Categories Base Styles */
.featured-categories {
  padding: 80px 0;
  background: #f8f9fa;
  text-align: center;
}

.featured-categories .section-title {
  font-size: 2.5rem;
  margin-bottom: 40px;
  color: linear-gradient(135deg, #1a2a6c, #3a4a8c);
}

.categories-grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(250px, 1fr));
  gap: 30px;
}

.category-card {
  position: relative;
  height: 350px;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  transition: all 0.4s ease;
}

.category-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.category-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

.category-card:hover img {
  transform: scale(1.1);
}

.category-info {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 25px;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
  color: white;
  text-align: center;
}

.category-info h3 {
  font-size: 1.8rem;
  margin-bottom: 20px;
  font-weight: 600;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

.category-info .btn {
  background-color: transparent;
  border: 2px solid white;
  color: white;
  padding: 10px 25px;
  border-radius: 30px;
  font-weight: 600;
  display: inline-block;
  opacity: 0; /* hidden by default */
  pointer-events: none;
  transform: translateY(20px);
  transition: all 0.4s ease;
}

.category-card:hover .btn {
  opacity: 1;
  pointer-events: auto;
  transform: translateY(0);
}

.category-info .btn:hover {
  background-color: #fdbb2d;
  border-color: #fdbb2d;
  color: #1a2a6c;
}

/* ======= Media Queries ======= */

/* Large Tablets (≤ 1199px): 3 cards */
@media (max-width: 1199px) {
  .categories-grid {
    grid-template-columns: repeat(3, minmax(250px, 1fr));
  }

  .category-card {
    height: 320px;
  }
}

/* Tablets (≤ 991px): 2 cards */
@media (max-width: 991px) {
  .categories-grid {
    grid-template-columns: repeat(2, minmax(250px, 1fr));
  }

  .category-card {
    height: 300px;
  }

  .category-info h3 {
    font-size: 1.5rem;
  }

  .category-info .btn {
    padding: 8px 20px;
    font-size: 0.95rem;
  }
}

/* Mobiles (≤ 576px): 1 card */
@media (max-width: 576px) {
  .categories-grid {
    grid-template-columns: 1fr;
  }

  .category-card {
    height: 280px;
  }

  .category-info h3 {
    font-size: 1.3rem;
  }

  .category-info .btn {
    padding: 7px 18px;
    font-size: 0.9rem;
  }
}


/* Base styles */
.testimonials {
    padding: 60px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

.section-title {
    font-size: 2.5rem;
    margin-bottom: 40px;
    color: linear-gradient(135deg, #1a2a6c, #3a4a8c);
}

.testimonial-slider {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.testimonial {
    display: none;
    background: #fff;
    border-radius: 12px;
    padding: 30px 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.testimonial.active {
    display: block;
}

.testimonial p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555;
}

.customer h4 {
    margin: 15px 0 5px;
    font-size: 1.2rem;
    color: #222;
}

.customer span {
    color: #777;
    font-size: 0.95rem;
}

.testimonial-nav {
    margin-top: 20px;
}

.testimonial-nav button {
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin: 0 10px;
    cursor: pointer;
    font-size: 1rem;
    transition: background 0.3s ease;
}

.testimonial-nav button:hover {
    background: #0056b3;
}

/* Responsive adjustments */

/* Tablets (up to 991px) */
@media (max-width: 991px) {
    .section-title {
        font-size: 1.75rem;
    }

    .testimonial {
        padding: 25px 18px;
    }

    .testimonial p {
        font-size: 1rem;
    }

    .customer h4 {
        font-size: 1.1rem;
    }

    .testimonial-nav button {
        width: 36px;
        height: 36px;
        font-size: 0.9rem;
    }
}

/* Mobile (up to 767px) */
@media (max-width: 767px) {
    .testimonials {
        padding: 40px 15px;
    }

    .section-title {
        font-size: 1.5rem;
    }

    .testimonial {
        padding: 20px 15px;
    }

    .testimonial p {
        font-size: 0.95rem;
    }

    .customer h4 {
        font-size: 1rem;
    }

    .testimonial-nav button {
        width: 32px;
        height: 32px;
        font-size: 0.85rem;
        margin: 0 8px;
    }
}

       
    </style>


</head>

<body>
    <!-- Header Section -->
      <header id="main-header">
        <div class="container header-container">
            <div class="logo">
                <a href="index.php"><i class="fas fa-dumbbell"></i> <span>FlexDeal</span></a>
            </div>
            <nav>
                <ul id="main-nav">
                    <li><a href="index.php" class="Active" >HomeFitness </i></a>
                        <ul class="dropdown-menu mega-menu">
                            <li>
                                <h4>Home Fitness Categories</h4>
                                <ul>
                                    <li><a href="hometreadmills.php"><i class="fas fa-running"></i> Treadmills</a></li>
                                    <li><a href="homeEllipticals.php"><i class="fas fa-walking"></i> Ellipticals</a>
                                    </li>
                                    <li><a href="homeExercise.php"><i class="fas fa-bicycle"></i> Exercise Bikes</a>
                                    </li>
                                    <li><a href="strength.php"><i class="fas fa-dumbbell"></i> Strength and Benches</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-image-box">
                                <img src="https://files.idyllic.app/files/static/3084905" alt="Home Fitness Equipment">
                                <div class="dropdown-image-content">
                                    <h4>Home Gym Solutions</h4>
                                    <a href="index.php" class="btn">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="gymfitness.php">GymFitness </i></a>
                        <ul class="dropdown-menu mega-menu">
                            <li>
                                <h4>Commercial Equipment</h4>
                                <ul>
                                    <li><a href="gymtreadmills.php"><i class="fas fa-running"></i> Treadmills</a></li>
                                    <li><a href="gymEllipticals.php"><i class="fas fa-walking"></i> Ellipticals</a>
                                    </li>
                                    <li><a href="gymExercise.php"><i class="fas fa-bicycle"></i> Exercise Bikes</a>
                                    </li>
                                    <li><a href="rowers.php"><i class="fas fa-water"></i> Rowers</a></li>
                                     <li><a href="stairclimber.php"><i class="fas fa-water"></i> Stair Climbers</a></li>
                                    <li><a href="pinloaded.php"><i class="fas fa-weight"></i> Pin Loaded</a></li>
                                    <li><a href="plateloaded.php"><i class="fas fa-weight"></i> Plate Loaded</a></li>
                                    <li><a href="benches.php"><i class="fas fa-weight"></i> Benches and Rack</a></li>
                                    <!-- <li><a href="dumbells.html"><i class="fas fa-weight"></i> Dumbells</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown-image-box">
                                <img src="https://img.freepik.com/free-photo/gym-with-indoor-cycling-equipment_23-2149270210.jpg?uid=R202996531&ga=GA1.1.1448600281.1749010097&semt=ais_hybrid&w=740" alt="Commercial Gym Equipment">
                                <div class="dropdown-image-content">
                                    <h4>Professional Grade</h4>
                                    <a href="gymfitness.php" class="btn">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                      <li><a href="brands.php">Brands </i></a>
                    
                    <li><a href="accessories.php" >Accessories </i></a></li>
                    <li><a href="wellness.php">Wellness </i></a></li>
                   <li><a href="about.php" >About</a></li>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="brands.html#reebok"><i class="fas fa-tag"></i> Reebok</a></li>
                            <li><a href="brands.html#welcare"><i class="fas fa-tag"></i> Welcare</a></li>
                            <li><a href="brands.html#firm"><i class="fas fa-tag"></i> Firm</a></li>
                            <li><a href="brands.html#accunique"><i class="fas fa-tag"></i> Accunique</a></li>
                            <li><a href="brands.html#accunique"><i class="fas fa-tag"></i> Proiorn</a></li>
                            <li><a href="brands.html#accunique"><i class="fas fa-tag"></i> Flexdeal</a></li>
                        </ul> -->
                    </li>
                    <li><a href="contact.php"  >Contact</a></li>
                    <div class="navbar-search">
                        <input type="text" id="navSearchInput" placeholder="Search Products..." oninput="searchProducts(this.value)">
                        <ul id="navSearchResults"></ul>
                    </div>
                </ul>
            </nav>
            <div class="nav-actions">
                <!-- <div class="search-box">
                    <input type="text" placeholder="Search products...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="cart-icon" id="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </div> -->
                <div class="mobile-menu" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div> 
        </div>
    </header>

    <!-- Page Banner -->
  <section class="hero-slider">
        <div class="slider-container">
            <!-- Slide 1 - Video Background -->
            <div class="slide active">
                <div class="slide-bg">
                    <video autoplay muted loop playsinline class="bg-video">
                        <source src="https://static.vecteezy.com/system/resources/previews/007/432/609/mp4/athletic-sports-man-and-woman-wearing-running-on-a-treadmill-energetic-female-athlete-training-in-the-gym-free-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="bg-overlay"></div>
                </div>
                <div class="slide-content">
                    <h2 class="animate-title">Home Fitness</h2>
                    <p class="animate-text">Limited time offer on premium treadmills & gym equipment. Don't miss this opportunity!</p>
                    <!-- <div class="pulse-animation animate-button">
                        <a href="equipment.html" class="btn btn-accent">Shop Now</a>
                    </div> -->
                </div>
            </div>

            <!-- Slide 2 - Premium Gym Equipment -->
            <div class="slide">
                <div class="slide-bg">
                    <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Premium Gym Equipment" class="bg-image" loading="lazy">
                    <div class="bg-overlay"></div>
                </div>
                <div class="slide-content">
                    <h2 class="animate-title">Premium Gym Equipment</h2>
                    <p class="animate-text">Upgrade your fitness journey with our high-quality equipment designed for professional results</p>
                    <!-- <a href="equipment.html" class="btn btn-primary animate-button">Shop Now</a> -->
                </div>
            </div>

            <!-- Slide 3 - New Arrivals -->
            <div class="slide">
                <div class="slide-bg">
                    <img src="https://t4.ftcdn.net/jpg/08/09/48/25/360_F_809482598_iFY3RUsAXrpaJAuFh2UijLuLhGMQYJDb.jpg" alt="New Gym Equipment Arrivals" class="bg-image" loading="lazy">
                    <div class="bg-overlay"></div>
                </div>
                <div class="slide-content">
                    <h2 class="animate-title">New Arrivals</h2>
                    <p class="animate-text">Check out our latest collection of cutting-edge fitness equipment</p>
                    <a href="accessories.php" class="btn btn-primary animate-button">Explore</a>
                </div>
            </div>

            <!-- Slider Navigation -->
            <div class="slider-controls">
                <button class="slider-nav prev-slide" aria-label="Previous slide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>
                <button class="slider-nav next-slide" aria-label="Next slide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </button>
            </div>

            <!-- Slider Indicators -->
            <div class="slider-dots"></div>
        </div>

    </section>


     <!-- About Us Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-container">
                <div class="about-image">
                     <img src="https://runnerslab.com/wp-content/uploads/2022/08/how_to_run_on_a_treadmill.jpg" 
                          alt="MaxPro Fitness Team" 
                         loading="lazy" width='100%' >
                    <div class="about-badge">
                        <span>10+ Years</span>
                        <small>In Business</small>
                    </div>
                </div>
                <div class="about-content">
                    <h2 class="section-title">About FlexDeal Fitness</h2>
                    <p class="about-subtitle">Challenge yourself today</p>
                    <div class="about-text">
                        <p>FlexDeal was designed in world class standards. We deliver the best in class strength and cardio equipment, Our Equipments are very uniquely designed that suits for every user type. And we stand behind our highest quality construction with the very best warranty coverage in the industry. You know how want to exercise better than anyone.</p>
                        <p>Making sure that you have the right number of high quality cardio, selectorized, and free weight equipment to handle all your needs with no waiting can make a big difference in how happy you are.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose FlexDeal Fitness?</h2>
                <p class="subtitle">With countless options in the market, here's what sets us apart</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Quality Assurance</h3>
                    <p>All products undergo 7-stage quality checks for maximum durability and performance.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck-fast"></i>
                    </div>
                    <h3>Fast Delivery</h3>
                    <p>Pan-India delivery within 3-5 business days via our premium logistics network.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Expert Support</h3>
                    <p>Dedicated fitness experts available 6 days/week for personalized guidance.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-indian-rupee-sign"></i>
                    </div>
                    <h3>Value Pricing</h3>
                    <p>Premium quality at competitive prices with exclusive member discounts.</p>
                </div>
            </div>
        </div>
    </section>

      <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-icon-wrapper">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="count" data-target="10000">20000</h3>
                        <p>Satisfied Customers</p>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon-wrapper">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="count" data-target="12">15</h3>
                        <p>Showrooms Nationwide</p>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon-wrapper">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="count" data-target="200">300000</h3>
                        <p>Quality Products</p>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon-wrapper">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="count" data-target="8">12</h3>
                        <p>Industry Awards</p>
                    </div>
                </div>

                 <div class="stat-item">
                    <div class="stat-icon-wrapper">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="count" data-target="50000">60000</h3>
                        <p>Gym Installation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Featured Categories -->
    <section class="featured-categories">
        <div class="container">
            <h2 class="section-title"> Categories</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <img src="https://welcarefitness.com/image/cache/catalog/WC2199-1000x1000.jpg" alt="Treadmills">
                    <div class="category-info">
                        <h3>Treadmills</h3>
                        <a href="hometreadmills.php" class="btn">View All</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://5.imimg.com/data5/YM/UI/MY-17243374/selection_014-500x500.png" alt="Ellipticals">
                    <div class="category-info">
                        <h3>Ellipticals</h3>
                        <a href="homeEllipticals.php" class="btn">View All</a>
                    </div>
                </div>
                <div class="category-card">
                    <img src="https://welcarefitness.com/image/cache/catalog/WC4409%20%20%20HOME%20GYM-1000x1000.jpg" alt="Dumbbells">
                    <div class="category-info">
                        <h3>Strength and Benches</h3>
                        <a href="strength.php" class="btn">View All</a>
                    </div>
                </div>

                 <div class="category-card">
                    <img src="https://welcarefitness.com/image/cache/catalog/SD01%20SMART%20AI%20BIKE-1000x1000.jpg" alt="Dumbbells">
                    <div class="category-info">
                        <h3>Bikes</h3>
                        <a href="homeExercise.php" class="btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial active">
                    <p>"The quality of MaxPro equipment is outstanding. My home gym is now complete with their treadmill and dumbbell set. The delivery was prompt and setup was easy."</p>
                    <div class="customer">
                        <h4>Rahul Sharma</h4>
                        <span>Mumbai</span>
                    </div>
                </div>
                <div class="testimonial">
                    <p>"Excellent customer service and fast delivery. I had an issue with my order and their support team resolved it within hours. Highly recommended!"</p>
                    <div class="customer">
                        <h4>Priya Patel</h4>
                        <span>Delhi</span>
                    </div>
                </div>
                <div class="testimonial">
                    <p>"Best prices for premium quality gym equipment in India. I compared many stores before purchasing and MaxPro offered the best value for money."</p>
                    <div class="customer">
                        <h4>Vikram Singh</h4>
                        <span>Bangalore</span>
                    </div>
                </div>
                <div class="testimonial-nav">
                    <button class="prev-testimonial"><i class="fas fa-chevron-left"></i></button>
                    <button class="next-testimonial"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
 
 <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <a href="index.php" class="footer-logo"><i class="fas fa-dumbbell"></i> FlexDeal</a>
                    <p>We're dedicated to providing premium fitness equipment and accessories to help you
                        achieve your health and wellness goals.</p>
                    <div class="social-links">
                       <a href="https://www.facebook.com/share/1Yt1FHYEiY/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/flexdeal_fitness/"><i class="fab fa-instagram"></i></a>
                         <a href="#"><i class="fab fa-twitter"></i></a> 
                        <a href="https://youtube.com/@flexdealfitness?si=zRc_VhNylrBo-BK7"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">HomeFitness</a></li>
                        <li><a href="gymfitness.php">GymFitness</a></li>
                        <li><a href="accessories.php">Accessories</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>Inside 93 Avenu Mall
Shop no. 111 First floor,
 Solapur Road, Near FATIMA NAGAR JUNCTION, Opposite CROMA, Wanowrie, Pune, Maharashtra 411022</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>+919322582246 <br>+917776090461 <br>+917030100740</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>flexdealfitness@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 FlexDeal Fitness. All Rights Reserved. Design by AB Software Solution
            </div>
        </div>
    </footer>


<script>
const mobileMenu = document.getElementById('mobile-menu');
const mainNav = document.getElementById('main-nav');
const navItems = document.querySelectorAll('#main-nav > li');

mobileMenu.addEventListener('click', () => {
    mainNav.classList.toggle('active');
});

// For dropdowns on mobile
navItems.forEach(item => {
    const link = item.querySelector('a');
    const dropdown = item.querySelector('.dropdown-menu');
    if (dropdown) {
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault(); // prevent navigation

                // Toggle active state on current item
                const isActive = item.classList.contains('active');

                // Close all other dropdowns
                navItems.forEach(otherItem => otherItem.classList.remove('active'));

                // If it wasn't active, open it
                if (!isActive) {
                    item.classList.add('active');
                }
            }
        });
    }
});

// Allow inner links inside dropdowns to be clickable
document.querySelectorAll('#main-nav .dropdown-menu a').forEach(link => {
    link.addEventListener('click', (e) => {
        if (window.innerWidth <= 992) {
            e.stopPropagation(); // prevent closing dropdown
            // Optional: close menu after click
            mainNav.classList.remove('active');
            navItems.forEach(item => item.classList.remove('active'));
        }
    });
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (window.innerWidth <= 992) {
        if (!mainNav.contains(e.target) && !mobileMenu.contains(e.target)) {
            mainNav.classList.remove('active');
            navItems.forEach(item => item.classList.remove('active'));
        }
    }
});
</script>

<script>
function searchProducts(query) {
    const resultsBox = document.getElementById("navSearchResults");

    if (query.trim().length < 1) {
        resultsBox.innerHTML = '';
        resultsBox.style.display = "none";
        return;
    }

    fetch(`search_backend.php?q=${encodeURIComponent(query)}`)
        .then(response => {
            if (!response.ok) throw new Error("Network response was not ok");
            return response.json();
        })
        .then(data => {
            resultsBox.innerHTML = '';
            if (data.length > 0) {
                data.forEach(item => {
                    const li = document.createElement('li');
                    li.style.display = 'flex';
                    li.style.alignItems = 'center';
                    li.style.cursor = 'pointer';
                    li.style.padding = '5px';

                    li.onclick = () => window.location.href = `viewProduct.php?id=${item.id}`;

                    const img = document.createElement('img');
                    img.src = item.image;
                    img.alt = item.name;
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';
                    img.style.marginRight = '10px';

                    const nameSpan = document.createElement('span');
                    nameSpan.textContent = item.name;

                    li.appendChild(img);
                    li.appendChild(nameSpan);
                    resultsBox.appendChild(li);
                });
                resultsBox.style.display = 'block';
            } else {
                resultsBox.innerHTML = '<li>No products found</li>';
                resultsBox.style.display = 'block';
            }
        })
        .catch(error => {
            console.error("Fetch error:", error);
            resultsBox.innerHTML = '<li>Error loading results</li>';
            resultsBox.style.display = 'block';
        });
}

document.addEventListener('click', function (event) {
    const input = document.getElementById("navSearchInput");
    const resultsBox = document.getElementById("navSearchResults");

    if (!input.contains(event.target) && !resultsBox.contains(event.target)) {
        resultsBox.innerHTML = '';
        resultsBox.style.display = 'none';
    }
});

</script>


    <script>
       

        // Hero Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dotsContainer = document.querySelector('.slider-dots');

        // Create dots
        slides.forEach((_, index) => {
            const dot = document.createElement('span');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });

        function goToSlide(n) {
            slides[currentSlide].classList.remove('active');
            document.querySelectorAll('.dot')[currentSlide].classList.remove('active');

            currentSlide = (n + slides.length) % slides.length;

            slides[currentSlide].classList.add('active');
            document.querySelectorAll('.dot')[currentSlide].classList.add('active');
        }

        document.querySelector('.next-slide').addEventListener('click', () => goToSlide(currentSlide + 1));
        document.querySelector('.prev-slide').addEventListener('click', () => goToSlide(currentSlide - 1));

        // Auto slide change
        let slideInterval = setInterval(() => goToSlide(currentSlide + 1), 5000);

        // Pause on hover
        const sliderContainer = document.querySelector('.slider-container');
        sliderContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
        sliderContainer.addEventListener('mouseleave', () => {
            slideInterval = setInterval(() => goToSlide(currentSlide + 1), 5000);
        });

        // Sticky header on scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.15)';
            } else {
                header.style.boxShadow = '0 2px 15px rgba(0,0,0,0.1)';
            }
        });
    </script>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.stat-content h3');

    counters.forEach(counter => {
        const target = +counter.getAttribute('data-target');
        const duration = 2000; // 2 seconds
        const frameRate = 60;
        const totalFrames = Math.round((duration / 1000) * frameRate);
        const increment = target / totalFrames;
        let current = 0;
        let frame = 0;

        const countUp = () => {
            frame++;
            current += increment;
            if (current >= target) {
                counter.textContent = target.toLocaleString();
            } else {
                counter.textContent = Math.floor(current).toLocaleString();
                requestAnimationFrame(countUp);
            }
        };

        countUp();
    });
});
</script>

<script>
  const testimonials = document.querySelectorAll('.testimonial');
  const prevBtn = document.querySelector('.prev-testimonial');
  const nextBtn = document.querySelector('.next-testimonial');

  let testimonialIndex = 0;
  let testimonialInterval;

  function showTestimonial(index) {
    testimonials.forEach((t, i) => {
      t.classList.remove('active');
      if (i === index) t.classList.add('active');
    });
  }

  function nextTestimonial() {
    testimonialIndex = (testimonialIndex + 1) % testimonials.length;
    showTestimonial(testimonialIndex);
  }

  function prevTestimonialFunc() {
    testimonialIndex = (testimonialIndex - 1 + testimonials.length) % testimonials.length;
    showTestimonial(testimonialIndex);
  }

  function startAutoSlide() {
    testimonialInterval = setInterval(nextTestimonial, 5000);
  }

  function stopAutoSlide() {
    clearInterval(testimonialInterval);
  }

  nextBtn.addEventListener('click', () => {
    nextTestimonial();
    stopAutoSlide();
    startAutoSlide();
  });

  prevBtn.addEventListener('click', () => {
    prevTestimonialFunc();
    stopAutoSlide();
    startAutoSlide();
  });

  // Start slider
  showTestimonial(testimonialIndex);
  startAutoSlide();
</script>


</body>

</html>