document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('.nav-item.has-dropdown');
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    // Dropdown toggle for mobile and desktop
    navItems.forEach(item => {
        const link = item.querySelector('a');

        // Mobile: click to toggle dropdown
        link.addEventListener('click', function (event) {
            if (window.innerWidth < 1000) {
                if (item.classList.contains('has-dropdown')) {
                    event.preventDefault();
                    event.stopPropagation(); // Prevent event from bubbling to document click handler

                    if (item.classList.contains('active')) {
                        item.classList.remove('active');
                    } else {
                        // Close all other dropdowns
                        navItems.forEach(otherItem => {
                            otherItem.classList.remove('active');
                        });
                        // Open this one
                        item.classList.add('active');
                    }
                }
            }
        });

        // Prevent closing parent nav-item when clicking inside dropdown links
        const dropdownLinks = item.querySelectorAll('.dropdown a');
        dropdownLinks.forEach(dl => {
            dl.addEventListener('click', function (e) {
                if (window.innerWidth < 1000) {
                    e.stopPropagation(); // Keep dropdown open until link action completes
                }
            });
        });

        // Desktop: hover to show dropdown
        item.addEventListener('mouseenter', function () {
            if (window.innerWidth >= 1000) {
                item.classList.add('active');
            }
        });

        item.addEventListener('mouseleave', function () {
            if (window.innerWidth >= 1000) {
                item.classList.remove('active');
            }
        });
    });

    // Mobile menu toggle (hamburger)
    if (menuToggle) {
        menuToggle.addEventListener('click', function (event) {
            event.stopPropagation(); // Prevent triggering document click
            this.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    }

    // Close menu when clicking outside .main-nav
    document.addEventListener('click', function (event) {
        if (!event.target.closest('.main-nav')) {
            navItems.forEach(item => {
                item.classList.remove('active');
            });
            if (navLinks) {
                navLinks.classList.remove('active');
            }
            if (menuToggle) {
                menuToggle.classList.remove('active');
            }
        }
    });

    // ✅ FIXED: Only close mobile menu when clicking a link INSIDE a dropdown (actual destination page)
    const dropdownLinks = document.querySelectorAll('.dropdown a');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', function () {
            if (window.innerWidth < 1000) {
                // Close all dropdowns
                navItems.forEach(item => {
                    item.classList.remove('active');
                });
                // Close mobile menu
                if (navLinks) {
                    navLinks.classList.remove('active');
                }
                if (menuToggle) {
                    menuToggle.classList.remove('active');
                }
            }
        });
    });

    // Handle window resize — reset states for desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 1000) {
            if (navLinks) {
                navLinks.classList.remove('active');
            }
            if (menuToggle) {
                menuToggle.classList.remove('active');
            }
            navItems.forEach(item => {
                item.classList.remove('active');
            });
        }
    });
});

const currentPath = window.location.pathname;

const allLinks = document.querySelectorAll('.nav-links a');

allLinks.forEach(link => {
    
    if (link.getAttribute('href') !== "#" && currentPath.includes(link.getAttribute('href').replace('../', ''))) {
        link.classList.add('active-link');
        
       
        const parentDropdown = link.closest('.has-dropdown');
        if (parentDropdown) {
            parentDropdown.querySelector('a').classList.add('active-link');
        }
    }
});