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

/* Base styles */
#hero {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1571902943202-507ec2618e8f?q=80&w=1075&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover no-repeat;
     height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            padding-top: 70px;
}

.hero-content h1 {
    font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.hero-content p {
    font-size: 1.2rem;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Tablets (up to 991px) */
@media (max-width: 991px) {
    #hero {
        padding: 80px 15px;
    }

    .hero-content h1 {
        font-size: 2rem;
    }

    .hero-content p {
        font-size: 1.1rem;
    }
}

/* Mobile (up to 767px) */
@media (max-width: 767px) {
    #hero {
        padding: 60px 15px;
    }

    .hero-content h1 {
        font-size: 1.6rem;
    }

    .hero-content p {
        font-size: 1rem;
    }
}


 /* Base styles */
.featured-categories {
    padding: 60px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

.featured-categories .section-title {
    font-size: 2rem;
    margin-bottom: 40px;
    color: #333;
}

.category-card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.category-card:hover {
    transform: translateY(-5px);
}

.category-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.category-info {
    padding: 20px;
}

.category-info h3 {
    font-size: 1.2rem;
    color: #222;
    margin-bottom: 10px;
}

.category-info .btn {
    display: inline-block;
    padding: 8px 16px;
    background: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-size: 0.95rem;
    transition: background 0.3s ease;
}

.category-info .btn:hover {
    background: #0056b3;
}

/* Swiper pagination customization */
.swiper-pagination-bullet {
    background: #007bff;
    opacity: 0.5;
}

.swiper-pagination-bullet-active {
    opacity: 1;
}

/* Tablets (up to 991px) */
@media (max-width: 991px) {
    .featured-categories {
        padding: 50px 15px;
    }

    .featured-categories .section-title {
        font-size: 1.75rem;
    }

    .category-card img {
        height: 220px;
    }

    .category-info h3 {
        font-size: 1.1rem;
    }

    .category-info .btn {
        padding: 7px 14px;
        font-size: 0.9rem;
    }
}

/* Mobile (up to 767px) */
@media (max-width: 767px) {
    .featured-categories {
        padding: 40px 10px;
    }

    .featured-categories .section-title {
        font-size: 1.5rem;
        margin-bottom: 30px;
    }

    .category-card img {
        height: 200px;
    }

    .category-info {
        padding: 15px;
    }

    .category-info h3 {
        font-size: 1rem;
    }

    .category-info .btn {
        padding: 6px 12px;
        font-size: 0.85rem;
    }
}
 /* Featured Categories Section */
        .featured-categories {
            padding: 3rem 1rem;
            background: #f8f9fa;
            text-align: center;
        }

        .featured-categories .section-title {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #2c3e50;
            font-weight: 700;
        }

        .category-card {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
            padding: 1rem;
        }

        .category-card:hover {
            transform: translateY(-5px);
        }

        .category-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        .category-info {
            margin-top: 1rem;
        }

        .category-info h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #34495e;
        }

        .category-info .btn {
            display: inline-block;
            background: #0943a1;
            color: #fff;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
        }

        .category-info .btn:hover {
            background: #000;
        }

        /* Swiper Specific */
        .category-swiper {
            padding: 10px;
        }

        .swiper-slide {
            width: 280px;
        }

        @media (max-width: 768px) {
            .swiper-slide {
                width: 100%;
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
                    <li><a href="gymfitness.php"  class="active">GymFitness </i></a>
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
                    <li><a href="contact.php" >Contact</a></li>
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
   
    
    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Transform Your Fitness Journey</h1>
                <p>Premium gym equipment and accessories designed to help you achieve your fitness goals. Professional
                    quality for home and commercial use.</p>
               
            </div>
        </div>
    </section>

    <!-- Featured Categories with Slider -->
    <section class="featured-categories">
        <div class="container">
            <h2 class="section-title">Categories</h2>

            <!-- Swiper Container -->
            <div class="swiper category-swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide category-card">
                        <img src="https://www.maxprofitness.in/cdn/shop/products/MP9002_2048x2048.jpg?v=1680949424"
                            alt="Treadmills" />
                        <div class="category-info">
                            <h3>Treadmills</h3>
                            <a href="gymtreadmills.php" class="btn">View All</a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide category-card">
                        <img src="https://welcarefitness.com/image/cache/catalog/WCE31%20elliptical%20trainer-1000x1000.jpg"
                            alt="Ellipticals" />
                        <div class="category-info">
                            <h3>Ellipticals</h3>
                            <a href="gymEllipticals.php" class="btn">View All</a>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide category-card">
                        <img src="https://www.maxprofitness.in/cdn/shop/products/61VvpDyah_L._SL1500_2048x2048.jpg?v=1681792456"
                            alt="Bikes" />
                        <div class="category-info">
                            <h3>Bikes</h3>
                            <a href="gymExercise.php" class="btn">View All</a>
                        </div>
                    </div>


                      <div class="swiper-slide category-card">
                        <img src="https://welcarefitness.com/image/cache/catalog/FM6800-1000x1000.jpg"
                            alt="Bikes" />
                        <div class="category-info">
                            <h3>Rowers</h3>
                            <a href="rowers.php" class="btn">View All</a>
                        </div>
                    </div>

                     <div class="swiper-slide category-card">
                        <img src="https://www.maxprofitness.in/cdn/shop/products/LT02-1_2048x2048.jpg?v=1681370547"
                            alt="Bikes" />
                        <div class="category-info">
                            <h3>Stair Climbers</h3>
                            <a href="stairclimber.php" class="btn">View All</a>
                        </div>
                    </div>

                    <div class="swiper-slide category-card">
                        <img src="https://welcarefitness.com/image/cache/catalog/WR018%20STRETCH%20TRAINER-1000x1000.jpg"
                            alt="Bikes" />
                        <div class="category-info">
                            <h3>Benches And Rack</h3>
                            <a href="benches.php" class="btn">View All</a>
                        </div>
                    </div>
                </div>
                <!-- Pagination & Nav -->
                <div class="swiper-pagination"></div>
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

 <!-- Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('.category-swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 2500,      // 2.5 seconds between slides
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    breakpoints: {
      640: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      1024: {
        slidesPerView: 3
      }
    }
  });
</script>


</body>

</html>