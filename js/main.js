
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