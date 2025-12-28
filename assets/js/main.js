document.addEventListener('DOMContentLoaded', function () {

    // Handle fragment scrolling on page load (for cross-page navigation)
    if (window.location.hash) {
        setTimeout(() => {
            const targetElement = document.getElementById(window.location.hash.substring(1));
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }, 100);
    }

    const productsPage = document.querySelector('.products-page');

    if (productsPage) {
        // Desktop Products Swiper
        const desktopSwiperEl = document.querySelector('.products-slider-desktop');
        const mobileSwiperEl = document.querySelector('.products-slider-mobile');

        let desktopSwiper = null;
        let mobileSwiper = null;

        if (desktopSwiperEl) {
            desktopSwiper = new Swiper('.products-slider-desktop', {
                slidesPerView: 1,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination-desktop',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-desktop',
                    prevEl: '.swiper-button-prev-desktop',
                },
                on: {
                    init: function () {
                        console.log('Desktop swiper initialized');
                    }
                }
            });
        }

        if (mobileSwiperEl) {
            mobileSwiper = new Swiper('.products-slider-mobile', {
                slidesPerView: 1,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination-mobile',
                    clickable: true,
                    renderBullet: function (index, className) {
                        return '<span class="' + className + '">' + (index + 1) + '</span>';
                    },
                },
                navigation: {
                    nextEl: '.swiper-button-next-mobile',
                    prevEl: '.swiper-button-prev-mobile',
                },
                on: {
                    init: function () {
                        console.log('Mobile swiper initialized');
                    }
                }
            });
        }
    }

    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function () {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', function () {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    }

    // Smooth scrolling for anchor links with fragments
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // Check if the link has a fragment
            if (href.includes('#')) {
                const hashIndex = href.indexOf('#');
                const path = href.substring(0, hashIndex);
                const hash = href.substring(hashIndex + 1);

                // Check if it's same page navigation
                const currentPath = window.location.pathname;
                const isSamePage = path === '' || path === currentPath || path === '/' && currentPath === '/';

                if (isSamePage) {
                    // Same page - smooth scroll
                    e.preventDefault();

                    const targetElement = document.getElementById(hash);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });

                        // Update URL hash
                        history.pushState(null, null, '#' + hash);
                    }
                } else {
                    // Different page - let the browser navigate normally
                    // The hash will be handled by the DOMContentLoaded listener above
                }
            }
        });
    });


    const form = document.querySelector('form');

    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.textContent;

            // Disable button and show loading state
            submitBtn.disabled = true;
            submitBtn.textContent = 'Odosiela sa...';

            // Remove any existing messages
            removeMessages();

            // Send AJAX request
            fetch('includes/email.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showMessage('success', data.message);
                        form.reset();
                    } else {
                        showMessage('error', data.message);
                    }
                })
                .catch(error => {
                    showMessage('error', 'Nastala chyba pri odosielaní správy. Skúste to prosím neskôr.');
                    console.error('Error:', error);
                })
                .finally(() => {
                    // Re-enable button
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalBtnText;
                });
        });
    }

    function showMessage(type, message) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `form-message form-message--${type}`;
        messageDiv.textContent = message;

        const form = document.querySelector('form');
        form.insertBefore(messageDiv, form.firstChild);

        // Auto-remove after 5 seconds
        setTimeout(() => {
            messageDiv.remove();
        }, 5000);
    }

    function removeMessages() {
        const messages = document.querySelectorAll('.form-message');
        messages.forEach(msg => msg.remove());
    }
});