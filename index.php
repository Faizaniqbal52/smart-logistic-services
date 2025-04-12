<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<div class="loading">
    <div class="loading-spinner"></div>
</div>



<div class="container">
    <div class="hero">
        <h1>Welcome to Smart Logistics Services</h1>
        <p>Manage your shipments, vehicles, warehouse, and more efficiently with our intelligent logistics platform. Real-time tracking, optimized routes, and data-driven decisions to transform your supply chain.</p>
    </div>

    <section class="services-section">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-box"></i>
                </div>
                <h3>Shipments Management</h3>
                <p>Track and manage all your shipments in real-time with our advanced tracking system.</p>
                <a href="shipments.php">Learn More</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3>Order Management</h3>
                <p>Streamline your order processing from receipt to delivery with our integrated system.</p>
                <a href="orders.php">Learn More</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h3>Vehicle Tracking</h3>
                <p>Monitor your fleet's location, performance, and maintenance needs in real-time.</p>
                <a href="vehicles.php">Learn More</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-warehouse"></i>
                </div>
                <h3>Warehouse Management</h3>
                <p>Optimize your warehouse operations with our advanced inventory management system.</p>
                <a href="warehouse.php">Learn More</a>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <h2>Our Performance</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">98</div>
                <div class="stat-title">Delivery Success Rate</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">500</div>
                <div class="stat-title">Active Clients</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">10000</div>
                <div class="stat-title">Monthly Shipments</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">25</div>
                <div class="stat-title">Countries Covered</div>
            </div>
        </div>
    </section>

    <section class="chart-section">
        <h2>Data Insights</h2>
        <div class="charts-container">
            <div class="chart-card">
                <h3>Shipment Volume</h3>
                <div class="chart" id="shipment-chart"></div>
            </div>
            <div class="chart-card">
                <h3>Delivery Performance</h3>
                <div class="chart" id="delivery-chart"></div>
            </div>
        </div>
    </section>
    
    <section class="chart-section">
        <h2>Global Network</h2>
        <div class="chart-card">
            <h3>Our Delivery Network</h3>
            <div class="delivery-map" id="delivery-map">
                <div class="map-point warehouse" style="top: 40%; left: 20%"></div>
                <div class="map-point" style="top: 30%; left: 30%"></div>
                <div class="map-point" style="top: 50%; left: 40%"></div>
                <div class="map-point warehouse" style="top: 60%; left: 60%"></div>
                <div class="map-point" style="top: 35%; left: 70%"></div>
                <div class="map-point" style="top: 45%; left: 80%"></div>
                <div class="map-connection" style="top: 40%; left: 20%; width: 11.2%; transform: rotate(26.6deg);"></div>
                <div class="map-connection" style="top: 40%; left: 20%; width: 22.4%; transform: rotate(26.6deg);"></div>
                <div class="map-connection" style="top: 60%; left: 60%; width: 22.4%; transform: rotate(-53.1deg);"></div>
                <div class="map-connection" style="top: 60%; left: 60%; width: 25%; transform: rotate(-36.9deg);"></div>
            </div>
        </div>
    </section>
    
    <section class="chart-section">
        <h2>Shipment Process</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Day 1</div>
                <div class="timeline-content">
                    <h3>Order Received</h3>
                    <p>Your order is received and entered into our system for processing.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Day 2</div>
                <div class="timeline-content">
                    <h3>Shipment Prepared</h3>
                    <p>Your items are picked, packed, and prepared for shipping.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Day 3</div>
                <div class="timeline-content">
                    <h3>In Transit</h3>
                    <p>Your shipment is on the move with real-time tracking available.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">Day 4-5</div>
                <div class="timeline-content">
                    <h3>Delivery</h3>
                    <p>Your shipment arrives at its destination on time and in perfect condition.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <h2>Ready to Optimize Your Logistics?</h2>
        <p>Join hundreds of businesses that trust our platform for their logistics needs. Get started today and see the difference.</p>
        <a href="register.php" class="cta-button">Get Started</a>
    </section>
</div>

<a href="#" class="back-to-top">
    <i class="fas fa-arrow-up"></i>
</a>

<div class="theme-switcher">
    <div class="color-option blue" data-color="blue"></div>
    <div class="color-option green" data-color="green"></div>
    <div class="color-option orange" data-color="orange"></div>
    <div class="color-option purple" data-color="purple"></div>
    <div class="color-option red" data-color="red"></div>
</div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-about">
            <span class="footer-logo">Smart Logistics</span>
            <p>Providing innovative logistics solutions to businesses worldwide. Our technology-driven approach ensures efficiency, transparency, and reliability.</p>
        </div>
        <div class="footer-links-container">
            <h3 class="footer-heading">Quick Links</h3>
            <ul class="footer-links">
                <li class="footer-link"><a href="index.php">Home</a></li>
                <li class="footer-link"><a href="services.php">Services</a></li>
                <li class="footer-link"><a href="about.php">About Us</a></li>
                <li class="footer-link"><a href="contact.php">Contact</a></li>
                <li class="footer-link"><a href="login.php">Login</a></li>
            </ul>
        </div>
        <div class="footer-services-container">
            <h3 class="footer-heading">Our Services</h3>
            <ul class="footer-links">
                <li class="footer-link"><a href="shipments.php">Shipments Management</a></li>
                <li class="footer-link"><a href="orders.php">Order Management</a></li>
                <li class="footer-link"><a href="vehicles.php">Vehicle Tracking</a></li>
                <li class="footer-link"><a href="warehouse.php">Warehouse Management</a></li>
            </ul>
        </div>
        <div class="footer-contact-container">
            <h3 class="footer-heading">Contact Us</h3>
            <ul class="footer-contact">
                <li><i class="fas fa-map-marker-alt footer-contact-icon"></i> Agi Sky Garden, Punjab, India</li>
                <li><i class="fas fa-phone footer-contact-icon"></i> +91 8492886552</li>
                <li><i class="fas fa-envelope footer-contact-icon"></i> info@smartlogistics.com</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Smart Logistics. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script src="js/main.js" defer></script>
<script>
    window.addEventListener('load', function() {
        const loader = document.querySelector('.loading');
        loader.classList.add('hidden');
        setTimeout(function() {
            loader.style.display = 'none';
        }, 500);
    });

    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    const menuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }

    const backToTopButton = document.querySelector('.back-to-top');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });

    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    const colorOptions = document.querySelectorAll('.color-option');
    const root = document.documentElement;

    colorOptions.forEach(option => {
        option.addEventListener('click', function() {
            const color = this.getAttribute('data-color');
            
            switch(color) {
                case 'blue':
                    root.style.setProperty('--primary', '#2c3e50');
                    root.style.setProperty('--secondary', '#3498db');
                    root.style.setProperty('--accent', '#e74c3c');
                    break;
                case 'green':
                    root.style.setProperty('--primary', '#27ae60');
                    root.style.setProperty('--secondary', '#2ecc71');
                    root.style.setProperty('--accent', '#f39c12');
                    break;
                case 'orange':
                    root.style.setProperty('--primary', '#d35400');
                    root.style.setProperty('--secondary', '#e67e22');
                    root.style.setProperty('--accent', '#3498db');
                    break;
                case 'purple':
                    root.style.setProperty('--primary', '#8e44ad');
                    root.style.setProperty('--secondary', '#9b59b6');
                    root.style.setProperty('--accent', '#f1c40f');
                    break;
                case 'red':
                    root.style.setProperty('--primary', '#c0392b');
                    root.style.setProperty('--secondary', '#e74c3c');
                    root.style.setProperty('--accent', '#3498db');
                    break;
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const shipmentCtx = document.getElementById('shipment-chart').getContext('2d');
        const shipmentChart = new Chart(shipmentCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Shipment Volume',
                    data: [1200, 1900, 1700, 2100, 2400, 2800],
                    backgroundColor: 'rgba(52, 152, 219, 0.7)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 1,
                    borderRadius: 5,
                    maxBarThickness: 30
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(44, 62, 80, 0.9)',
                        padding: 10,
                        cornerRadius: 5
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        const deliveryCtx = document.getElementById('delivery-chart').getContext('2d');
        const deliveryChart = new Chart(deliveryCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'On-Time Delivery Rate',
                    data: [92, 94, 93, 96, 97, 98],
                    fill: true,
                    backgroundColor: 'rgba(52, 152, 219, 0.1)',
                    borderColor: 'rgba(52, 152, 219, 1)',
                    borderWidth: 3,
                    pointBackgroundColor: 'rgba(52, 152, 219, 1)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(44, 62, 80, 0.9)',
                        padding: 10,
                        cornerRadius: 5
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 90,
                        max: 100,
                        grid: {
                            display: true,
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    });

    const progressBars = document.querySelectorAll('.progress-bar-fill');
    
    function animateProgressBars() {
        progressBars.forEach(bar => {
            const width = bar.getAttribute('data-width');
            bar.style.setProperty('--progress-width', width + '%');
        });
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
                
                if (entry.target.querySelector('.progress-bar-fill')) {
                    animateProgressBars();
                }
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.services-section, .stats-section, .chart-section, .timeline, .cta-section').forEach(section => {
        observer.observe(section);
    });
</script>
