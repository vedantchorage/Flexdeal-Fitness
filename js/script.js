// Main JavaScript File

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.querySelector('.mobile-menu');
    const navMenu = document.querySelector('nav ul');
    
    mobileMenuBtn.addEventListener('click', function() {
        navMenu.classList.toggle('active');
    });
    
    // Close mobile menu when clicking on a link
    const navLinks = document.querySelectorAll('nav ul li a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                navMenu.classList.remove('active');
            }
        });
    });
    
    // Hero Slider
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.querySelector('.slider-dots');
    let currentSlide = 0;
    
    // Create dots
    slides.forEach((slide, index) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });
    
    const dots = document.querySelectorAll('.dot');
    
    function goToSlide(index) {
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }
    
    // Next/Previous slide buttons
    document.querySelector('.next-slide').addEventListener('click', () => {
        goToSlide(currentSlide + 1);
    });
    
    document.querySelector('.prev-slide').addEventListener('click', () => {
        goToSlide(currentSlide - 1);
    });
    
    // Auto slide change
    let slideInterval = setInterval(() => {
        goToSlide(currentSlide + 1);
    }, 5000);
    
    // Pause on hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
        slideInterval = setInterval(() => {
            goToSlide(currentSlide + 1);
        }, 5000);
    });
    
    // Testimonial Slider
    const testimonials = document.querySelectorAll('.testimonial');
    let currentTestimonial = 0;
    
    function showTestimonial(index) {
        testimonials[currentTestimonial].classList.remove('active');
        currentTestimonial = (index + testimonials.length) % testimonials.length;
        testimonials[currentTestimonial].classList.add('active');
    }
    
    document.querySelector('.next-testimonial').addEventListener('click', () => {
        showTestimonial(currentTestimonial + 1);
    });
    
    document.querySelector('.prev-testimonial').addEventListener('click', () => {
        showTestimonial(currentTestimonial - 1);
    });
    
    // Load featured products
    if (document.querySelector('.products-grid')) {
        loadFeaturedProducts();
    }
    
    // Cart functionality
    const cartCount = document.querySelector('.cart-count');
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    updateCartCount();
    
    function updateCartCount() {
        cartCount.textContent = cartItems.length;
    }
    
    // Newsletter form
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            // In a real app, you would send this to your server
            alert(`Thank you for subscribing with ${email}!`);
            this.reset();
        });
    }
    
    // Check if admin (for demo purposes)
    // In a real app, this would be handled with proper authentication
    const isAdmin = window.location.search.includes('admin=true');
    if (isAdmin && document.getElementById('productManagement')) {
        document.getElementById('productManagement').style.display = 'block';
    }
});

// Load featured products
function loadFeaturedProducts() {
    const productsGrid = document.querySelector('.products-grid');
    
    // Sample products data - in a real app, this would come from an API
    const products = [
        {
            id: 1,
            name: 'Welcare Treadmill Pro 2000',
            brand: 'Welcare',
            price: 34999,
            image: 'images/treadmill1.jpg',
            category: 'treadmill'
        },
        {
            id: 2,
            name: 'Reebok Adjustable Dumbbell Set',
            brand: 'Reebok',
            price: 8999,
            image: 'images/dumbbell1.jpg',
            category: 'dumbbell'
        },
        {
            id: 3,
            name: 'Professional Weight Bench',
            brand: 'Other',
            price: 12999,
            image: 'images/bench1.jpg',
            category: 'bench'
        },
        {
            id: 4,
            name: 'Welcare Elliptical Trainer',
            brand: 'Welcare',
            price: 27999,
            image: 'images/elliptical1.jpg',
            category: 'cardio'
        },
        {
            id: 5,
            name: 'Reebok Yoga Mat',
            brand: 'Reebok',
            price: 1999,
            image: 'images/yogamat1.jpg',
            category: 'accessory'
        },
        {
            id: 6,
            name: 'Welcare Rowing Machine',
            brand: 'Welcare',
            price: 22999,
            image: 'images/rower1.jpg',
            category: 'cardio'
        }
    ];
    
    // Display products
    productsGrid.innerHTML = '';
    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.className = 'product-card';
        productCard.innerHTML = `
            <div class="product-image">
                <img src="${product.image}" alt="${product.name}">
            </div>
            <div class="product-info">
                <p class="product-brand">${product.brand}</p>
                <h3 class="product-name">${product.name}</h3>
                <p class="product-price">₹${product.price.toLocaleString('en-IN')}</p>
                <div class="product-actions">
                    <button class="btn add-to-cart" data-id="${product.id}">Add to Cart</button>
                    <button class="wishlist"><i class="far fa-heart"></i></button>
                </div>
            </div>
        `;
        productsGrid.appendChild(productCard);
    });
    
    // Add to cart functionality
    const addToCartBtns = document.querySelectorAll('.add-to-cart');
    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const productId = parseInt(this.getAttribute('data-id'));
            const product = products.find(p => p.id === productId);
            
            let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
            const existingItem = cartItems.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cartItems.push({
                    ...product,
                    quantity: 1
                });
            }
            
            localStorage.setItem('cart', JSON.stringify(cartItems));
            updateCartCount();
            
            // Show added to cart message
            alert(`${product.name} has been added to your cart!`);
        });
    });
    
    function updateCartCount() {
        const cartCount = document.querySelector('.cart-count');
        const cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        cartCount.textContent = cartItems.reduce((total, item) => total + item.quantity, 0);
    }
}



