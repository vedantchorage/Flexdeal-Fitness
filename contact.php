<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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




        /* Page Banner */
        .page-banner {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
        }

        .page-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .page-banner .container {
            position: relative;
            z-index: 1;
        }

        .page-banner h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #fff;
        }

        .page-banner p {
            font-size: 1.2rem;
            margin-bottom: 0;
            color: #ecf0f1;
        }

        /* Contact Content */
        .contact-content {
            padding: 60px 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .contact-info h2,
        .contact-form h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #2c3e50;
            position: relative;
            padding-bottom: 10px;
        }

        .contact-info h2::after,
        .contact-form h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #e74c3c;
        }

        .contact-info p {
            margin-bottom: 30px;
            color: #7f8c8d;
        }

        .info-item {
            display: flex;
            margin-bottom: 25px;
        }

        .info-item i {
            font-size: 1.5rem;
            color: #e74c3c;
            margin-right: 20px;
            margin-top: 5px;
        }

        .info-item h3 {
            margin: 0 0 5px 0;
            color: #2c3e50;
            font-size: 1.1rem;
        }

        .info-item p {
            margin: 0;
            color: #7f8c8d;
            font-size: 0.95rem;
        }

        .social-links {
            margin-top: 30px;
        }

        .social-links h3 {
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #2c3e50;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: background-color 0.3s;
        }

        .social-links a:hover {
            background-color: #e74c3c;
        }

        .social-links a.whatsapp {
            background-color: #25D366;
        }

        /* Contact Form */
        .contact-form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 0.95rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #e74c3c;
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .btn {
            display: inline-block;
            background-color: #e74c3c;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        /* Map Section */
        .map-section {
            margin-top: 60px;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #2c3e50;
            position: relative;
            padding-bottom: 10px;
            text-align: center;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #e74c3c;
        }

        .map-container {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Footer Styles (same as other pages) */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 40px 0 20px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .contact-grid {
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .contact-info {
                margin-bottom: 40px;
            }

            #main-nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: #2c3e50;
                flex-direction: column;
                padding: 15px 0;
            }

            #main-nav.active {
                display: flex;
            }

            #main-nav li {
                margin: 5px 0;
            }

            #main-nav li a {
                display: block;
                padding: 10px 20px;
                margin: 0;
            }

            .mobile-menu {
                display: block;
                margin-left: 20px;
            }

            .page-banner {
                padding: 60px 0;
            }

            .page-banner h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .container {
                width: 95%;
            }

            .logo {
                font-size: 1.2rem;
            }

            .page-banner {
                padding: 50px 0;
            }

            .page-banner h1 {
                font-size: 1.8rem;
            }

            .page-banner p {
                font-size: 1rem;
            }

            .contact-info h2,
            .contact-form h2,
            .section-title {
                font-size: 1.5rem;
            }

            .info-item i {
                font-size: 1.2rem;
                margin-right: 15px;
            }

            .contact-form {
                padding: 20px;
            }
        }
        .navbar-search {
            position: relative;
            display: inline-block;
            margin-left: 20px;
        }

        #navSearchInput {
            padding: 10px 15px;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 250px;
        }

        #navSearchResults {
            position: absolute;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 8px;              /* Rounded corners */
            list-style: none;
            padding: 8px 0;                  /* Inner vertical spacing */
            margin: 4px 0 0 0;
            z-index: 1000;
            width: 200%;                     /* Better for responsive */
            max-width: 400px;                /* Optional: limit width */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Soft shadow */
            display: none;
            overflow: hidden;               /* Prevent overflow when rounded */
        }

        #navSearchResults li {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        /* Image inside result item */
        #navSearchResults li img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 10px;
        }

        /* Hover effect */
        #navSearchResults li:hover {
            background-color: #f5f5f5;
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
                    <li><a href="contact.php"  class="active">Contact</a></li>
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
    <section class="page-banner" style="background-image: url('images/contact-banner.jpg');">
        <div class="container">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-content">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>Have questions about our products or need assistance with your order? Reach out to us through any
                        of the following channels:</p>

                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Address</h3>
                            <p>Inside 93 Avenu Mall
Shop no. 111 First floor,
 Solapur Road, Near FATIMA NAGAR JUNCTION,  Opposite CROMA, Wanowrie, <br>Pune, Maharashtra 411022</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>flexdealfitness@gmail.com</p>

                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>+91 9322582246 <br>+91 7776090461 <br>+91 70301 00740</p>

                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Working Hours</h3>
                            <p>Monday to Saturday: 11:00 AM to 8:30 PM</p>
                            <p>Sunday: Closed</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <h3>Follow Us</h3>
                       <a href="https://www.facebook.com/share/1Yt1FHYEiY/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/flexdeal_fitness/"><i class="fab fa-instagram"></i></a>
                         <a href="#"><i class="fab fa-twitter"></i></a> 
                        <a href="https://youtube.com/@flexdealfitness?si=zRc_VhNylrBo-BK7"><i class="fab fa-youtube"></i></a>
                        <a href="https://wa.me/917776090461" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <form id="enquiryForm">
                        <div class="form-group">
                            <label for="name">Your Name*</label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number*</label>
                            <input type="tel" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>


            <div class="map-section">
                <h2 class="section-title">Our Location</h2>
                <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.5124156668426!2d73.90377037501283!3d18.50573228258484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c100768c5835%3A0x6d4139cdc5c30720!2sFlexDeal!5e0!3m2!1sen!2sin!4v1753772523300!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </section>

    <style>
        .map-section {
            width: 100%;
            max-width: 1200px;
            /* Adjust as needed */
            margin: 0 auto;
            padding: 20px;
        }

        .map-container {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>




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