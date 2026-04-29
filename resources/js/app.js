// Amanuba Hotel & Resort - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Navbar background on scroll
    const navbar = document.querySelector('nav');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-blur', 'shadow-lg');
            } else {
                navbar.classList.remove('navbar-blur', 'shadow-lg');
            }
        });
    }

    // Form validation enhancements
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitButton = form.querySelector('button[type="submit"]');
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerHTML = '<span class="loading-spinner inline-block w-4 h-4 mr-2"></span> Processing...';
                
                // Re-enable after 3 seconds (for demo purposes)
                setTimeout(() => {
                    submitButton.disabled = false;
                    submitButton.innerHTML = submitButton.getAttribute('data-original-text') || 'Submit';
                }, 3000);
            }
        });
    });

    // Date picker constraints
    const checkInInput = document.getElementById('check_in');
    const checkOutInput = document.getElementById('check_out');
    
    if (checkInInput && checkOutInput) {
        // Set minimum date to today
        const today = new Date().toISOString().split('T')[0];
        checkInInput.min = today;
        checkOutInput.min = today;
        
        // Update checkout minimum when check-in changes
        checkInInput.addEventListener('change', function() {
            const checkInDate = new Date(this.value);
            const minCheckOut = new Date(checkInDate);
            minCheckOut.setDate(minCheckOut.getDate() + 1);
            checkOutInput.min = minCheckOut.toISOString().split('T')[0];
            
            // Clear checkout if it's before the new minimum
            if (checkOutInput.value && new Date(checkOutInput.value) <= checkInDate) {
                checkOutInput.value = '';
            }
        });
    }

    // Room type price display
    const roomTypeSelect = document.getElementById('room_type');
    if (roomTypeSelect) {
        roomTypeSelect.addEventListener('change', function() {
            // You could update price display here
            console.log('Selected room type:', this.value);
        });
    }

    // Guest count validation
    const guestsSelect = document.getElementById('guests');
    const roomTypeSelectForGuests = document.getElementById('room_type');
    
    if (guestsSelect && roomTypeSelectForGuests) {
        roomTypeSelectForGuests.addEventListener('change', function() {
            updateGuestLimits(this.value);
        });
        
        function updateGuestLimits(roomType) {
            const guestLimits = {
                'standard': 2,
                'deluxe': 3,
                'executive': 4,
                'family': 5,
                'honeymoon': 2,
                'presidential': 6
            };
            
            const maxGuests = guestLimits[roomType] || 2;
            guestsSelect.max = maxGuests;
            
            // Update options
            for (let i = 1; i <= 6; i++) {
                const option = guestsSelect.querySelector(`option[value="${i}"]`);
                if (option) {
                    option.disabled = i > maxGuests;
                }
            }
            
            // Adjust current selection if it exceeds the limit
            if (parseInt(guestsSelect.value) > maxGuests) {
                guestsSelect.value = maxGuests;
            }
        }
    }

    // Newsletter form
    const newsletterForm = document.querySelector('form[action="#"]');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            if (email) {
                // Show success message
                const successDiv = document.createElement('div');
                successDiv.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mt-2';
                successDiv.textContent = 'Thank you for subscribing!';
                this.parentNode.appendChild(successDiv);
                
                // Clear form
                this.reset();
                
                // Remove message after 3 seconds
                setTimeout(() => {
                    successDiv.remove();
                }, 3000);
            }
        });
    }

    // Image lazy loading
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.loading = 'lazy';
    });

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.card-hover, .btn-hover-lift').forEach(el => {
        observer.observe(el);
    });
});

// Utility functions
function formatCurrency(amount) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD'
    }).format(amount);
}

function calculateNights(checkIn, checkOut) {
    const start = new Date(checkIn);
    const end = new Date(checkOut);
    const diffTime = Math.abs(end - start);
    return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
}

function calculateTotalPrice(roomType, nights) {
    const prices = {
        'standard': 120,
        'deluxe': 180,
        'executive': 350,
        'family': 280,
        'honeymoon': 420,
        'presidential': 650
    };
    
    return (prices[roomType] || 0) * nights;
}

// Export functions for global use
window.amanubaHotel = {
    formatCurrency,
    calculateNights,
    calculateTotalPrice
};
