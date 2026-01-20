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
    display: none;
    position: static;
    background: #f8f8f8;
    box-shadow: none;
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

/* Base Hero Section Styles */
.hero {
            position: relative;
            height: 100vh;
            min-height: 600px;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.5) 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-top: 70px;
            margin-top: -70px;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            z-index: -1;
        }

.hero-content {
   max-width: 1200px;
            padding: 0 20px;
            position: relative;
            z-index: 2;
}

.hero-content h1 {
  font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInDown 1s ease-out;
}

.hero-content p {
     font-size: 1.5rem;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
}

.hero-content .btn {
    background: #ffffff;
    color: #3498db;
    padding: 12px 24px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.hero-content .btn:hover {
    background: #f1f1f1;
    transform: translateY(-2px);
}

/* ---------- Responsive Media Queries ---------- */

/* Laptop / Large Tablet */
@media (max-width: 1200px) {
    .hero-content h1 {
        font-size: 2.5rem;
    }
    .hero-content p {
        font-size: 1.1rem;
    }
}

/* Tablet */
@media (max-width: 992px) {
    .hero {
        padding: 80px 15px;
    }
    .hero-content h1 {
        font-size: 2.2rem;
    }
    .hero-content p {
        font-size: 1rem;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .hero {
        padding: 60px 15px;
    }
    .hero-content h1 {
        font-size: 1.8rem;
    }
    .hero-content p {
        font-size: 0.95rem;
    }
    .hero-content .btn {
        padding: 10px 20px;
        font-size: 0.95rem;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .hero {
        padding: 50px 10px;
    }
    .hero-content h1 {
        font-size: 1.5rem;
    }
    .hero-content p {
        font-size: 0.9rem;
    }
    .hero-content .btn {
        width: 100%;
        padding: 12px;
    }
}

/* Base About Section Styles */
.about-content {
    padding: 80px 20px;
    background: #f9f9f9;
}

.about-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto 60px;
    flex-wrap: nowrap;
}

.about-section.reverse {
    flex-direction: row-reverse;
}

.about-text {
    flex: 1;
}

.about-text h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color:  #1a2a6c;
    font-weight: 700;
}

.about-text p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555;
    margin-bottom: 15px;
}

.about-image {
    flex: 1;
    text-align: center;
}

.about-image img {
    max-width: 100%;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.about-image img:hover {
    transform: scale(1.02);
}

/* ---------- Responsive Media Queries ---------- */

/* Laptop / Large Tablet */
@media (max-width: 1200px) {
    .about-text h2 {
        font-size: 1.8rem;
    }
    .about-text p {
        font-size: 1rem;
    }
    .about-content {
        padding: 60px 15px;
    }
}

/* Tablet */
@media (max-width: 992px) {
    .about-section {
        flex-direction: column;
        gap: 30px;
        text-align: center;
    }
    .about-section.reverse {
        flex-direction: column;
    }
    .about-text h2 {
        font-size: 1.6rem;
    }
    .about-text p {
        font-size: 0.98rem;
    }
    .about-content {
        padding: 50px 15px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .about-section {
        gap: 20px;
        margin-bottom: 40px;
    }
    .about-text h2 {
        font-size: 1.4rem;
    }
    .about-text p {
        font-size: 0.95rem;
    }
    .about-content {
        padding: 40px 10px;
    }
}

/* Small Mobile */
@media (max-width: 480px) {
    .about-text h2 {
        font-size: 1.25rem;
    }
    .about-text p {
        font-size: 0.9rem;
    }
    .about-section {
        gap: 15px;
    }
    .about-content {
        padding: 30px 8px;
    }
}

   /* Ecommerce Base Styles */
        .marketplace-banner {
            text-align: center;
            padding: 25px;
            background: linear-gradient(135deg, #f8f8f8 0%, #ffffff 100%);
            border-radius: 12px;
            margin: 25px auto;
            max-width: 600px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #e0e0e0;
        }

        .banner-title {
            font-size: 24px;
            margin: 0 0 5px 0;
            color: #333;
            font-weight: 600;
        }

        .banner-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .platform-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .platform-link {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            transition: transform 0.3s;
            width: 120px;
        }

        .platform-link:hover {
            transform: translateY(-5px);
        }

        .platform-logo {
            width: 60px;
            height: 60px;
            object-fit: contain;
            margin-bottom: 8px;
        }

        .platform-name {
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }

        /* Consultation Section */
        .consultation-section {
            position: relative;
            width: 100%;
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            overflow: hidden;
            border-radius: 16px;
            margin: 3rem 0;
        }

        .consultation-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://www.shutterstock.com/image-photo/asian-gym-consultant-showing-tablet-260nw-2593161879.jpg');
            background-size: cover;
            background-position: center;
            z-index: 0;
        }

        .overlay-gradient {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 100%);
            z-index: 1;
        }

        .consultation-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            width: 100%;
            color: white;
            text-align: center;
            padding: 2rem;
        }

        .consultation-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .consultation-subtitle {
            font-size: 1.25rem;
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        .consultation-features {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 2rem 1.5rem;
            width: 280px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .feature-card p {
            opacity: 0.9;
            font-size: 0.95rem;
        }

        .consultation-cta {
            background: #FF6B6B;
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
        }

        .consultation-cta:hover {
            background: #FF5252;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.6);
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
                    <li><a href="index.php" >HomeFitness </i></a>
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
                   <li><a href="about.php" class="active">About</a></li>
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
    <main>
     <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>About Us</h1>
                <p>Discover high-quality gym equipment and home fitness solutions to transform your workout experience</p>
                <a href="brands.php" class="btn">Explore Products</a>
            </div>
        </section>

         <!-- About Content -->
        <section class="about-content" id="our-story">
            <div class="container">
                <div class="about-section">
                    <div class="about-text">
                        <h2>Our Promise</h2>
                        <p>Sustainability is at the forefront of everything we do. We create durable, longlasting products
                            made with high quality fabrics and materials that'll hold up for any activity.</p>
                    </div>
                    <div class="about-image">
                        <img src="https://www.maxprofitness.in/cdn/shop/files/mission_large.png?v=1680948983"
                            alt="Our Story" loading="lazy">
                    </div>
                </div>

                <div class="about-section reverse">
                    <div class="about-text">
                        <h2>Challenge yourself today</h2>
                        <p>FLEXDEAL was designed in world class standards. We deliver the best in class strength and cardio
                            equipment, Our Equipments are very uniquely designed that suits for every user type. And we
                            stand behind our highest quality construction with the very best warranty coverage in the
                            industry. You know how want to exercise better than anyone.</p>
                        <p>Making sure that you have the right number of high quality cardio, selectorized, and free
                            weight equipment to handle all your needs with no waiting can make a big difference in how happy you
                            are.</p>
                    </div>
                    <div class="about-image">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                            alt="Our Mission" loading="lazy">
                    </div>
                </div>
                <div class="about-section FRONT">
                    <div class="about-text">
                        <h2>Life Changing Workouts</h2>
                        <p>We combine technology, content and best-in-class instructors to empower our Maxpro community
                            through fitness. Our library of immersive on-demand classes is designed to get you addicted to
                            fitness.</p>
                    </div>
                    <div class="about-image">
                        <img src="https://www.maxprofitness.in/cdn/shop/files/vision_large.png?v=1681117273" alt="Our Story"
                            loading="lazy">
                    </div>
                </div>
            
             
               <!-- Marketplace Banner -->
<div class="marketplace-banner">
    <h3 class="banner-title">Find Us On</h3>
    <p class="banner-subtitle">Connect with us on social media!</p>
    <div class="platform-icons">
        <a href="https://www.instagram.com/flexdeal_fitness/" target="_blank" class="platform-link">
            <img src="https://img.icons8.com/fluency/96/instagram-new.png" alt="Instagram" class="platform-logo">
            <span class="platform-name">Instagram</span>
        </a>
        <a href="https://www.facebook.com/profile.php?id=61578329596038&sk=about" target="_blank" class="platform-link">
            <img src="https://img.icons8.com/fluency/96/facebook.png" alt="Facebook" class="platform-logo">
            <span class="platform-name">Facebook</span>
        </a>
        <a href="https://www.twitter.com/yourhandle" target="_blank" class="platform-link">
            <img src="https://img.icons8.com/fluency/96/twitter.png" alt="Twitter" class="platform-logo">
            <span class="platform-name">Twitter</span>
        </a>
        <a href="https://youtube.com/@flexdealfitness?si=zRc_VhNylrBo-BK7" target="_blank" class="platform-link">
            <img src="https://img.icons8.com/fluency/96/youtube-play.png" alt="YouTube" class="platform-logo">
            <span class="platform-name">YouTube</span>
        </a>
    </div>
</div>


                <!-- Consultation Section -->
                <section class="consultation-section">
                    <div class="consultation-background">
                        <div class="overlay-gradient"></div>
                    </div>
                    <div class="consultation-content">
                        <h2 class="consultation-title">Schedule Your Virtual Consultation Today</h2>
                        <p class="consultation-subtitle">Step into our virtual showroom and enjoy a personalized
                            consultation with one of our FlexDeal specialists,a fully-loaded demonstration of our
                            top-selling machines, experience interactive personal training in action, and get all your
                            questions answer.</p>

                        <div class="consultation-features">
                            <button class="consultation-cta">
                                Book Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </button>
                        </div>
                </section>
            </div>
        </section>
    </main>

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
</body>

</html>