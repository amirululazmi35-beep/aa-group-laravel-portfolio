document.addEventListener('DOMContentLoaded', () => {
    // 0. Trigger Page Loaded State for Intro Sequence
    setTimeout(() => {
        document.body.classList.add('page-loaded');
    }, 100);

    // 1. Upgraded IntersectionObserver for Scroll Reveals & Dividers
    const revealCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                
                // Read and apply data-delay attribute if present
                if (target.hasAttribute('data-delay')) {
                    const delay = target.getAttribute('data-delay');
                    target.style.transitionDelay = `${delay}ms`;
                }
                
                target.classList.add('active');
                observer.unobserve(target);
            }
        });
    };

    const revealObserver = new IntersectionObserver(revealCallback, {
        root: null,
        threshold: 0.05,
        rootMargin: '0px 0px -50px 0px'
    });

    // Auto-discover and observe elements with reveal classes
    const findAndObserve = () => {
        const selectors = '.reveal-up, .reveal-fade, .reveal-left, .reveal-right, .reveal-scale, .reveal-blur, .animated-divider';
        const revealElements = document.querySelectorAll(selectors);
        revealElements.forEach(el => revealObserver.observe(el));
    };

    // Stagger delay class applier for grids (adds default delays if not already manually configured)
    const grids = document.querySelectorAll('.grid');
    grids.forEach(grid => {
        const children = grid.children;
        Array.from(children).forEach((child, index) => {
            // Check if element has any reveal type
            const hasReveal = Array.from(child.classList).some(cls => cls.startsWith('reveal-'));
            if (!hasReveal) {
                child.classList.add('reveal-up');
            }
            
            // Add staggering classes only if no data-delay is set
            if (!child.hasAttribute('data-delay') && !child.hasAttribute('style')) {
                const delayClass = `delay-${(index % 6) * 100 || 75}`;
                child.classList.add(delayClass);
            }
        });
    });

    // Apply reveal-up automatically to specific content containers to guarantee visual motion if neglected
    const autoRevealSelectors = [
        'section > div',
        '.luxury-card',
        '.terminal-card'
    ];
    autoRevealSelectors.forEach(selector => {
        document.querySelectorAll(selector).forEach(el => {
            const hasReveal = Array.from(el.classList).some(cls => cls.startsWith('reveal-'));
            if (!hasReveal && !el.classList.contains('char-reveal') && !el.closest('#home')) {
                el.classList.add('reveal-up');
            }
        });
    });

    // Initialize observer
    findAndObserve();

    // 2. Navbar Backdrop & Dimension Transitions on Scroll
    const header = document.querySelector('header');
    if (header) {
        const checkScroll = () => {
            if (window.scrollY > 20) {
                header.classList.add('bg-luxury-bg/75', 'backdrop-blur-md', 'py-4', 'border-surface-soft/80', 'shadow-[0_4px_30px_rgba(0,0,0,0.8)]');
                header.classList.remove('bg-transparent', 'py-6', 'border-transparent');
            } else {
                header.classList.remove('bg-luxury-bg/75', 'backdrop-blur-md', 'py-4', 'border-surface-soft/80', 'shadow-[0_4px_30px_rgba(0,0,0,0.8)]');
                header.classList.add('bg-transparent', 'py-6', 'border-transparent');
            }
        };
        window.addEventListener('scroll', checkScroll);
        checkScroll(); // init on load
    }

    // 3. Desktop Ambient Mouse follow Glow
    const mouseGlow = document.getElementById('mouse-glow');
    const isDesktop = window.matchMedia('(pointer: fine)').matches;
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (mouseGlow) {
        if (!isDesktop || prefersReducedMotion) {
            mouseGlow.style.display = 'none';
        } else {
            let xp = 0, yp = 0;
            let mouseX = -300, mouseY = -300; // Position off-screen initially
            
            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });

            const updateGlow = () => {
                xp += (mouseX - xp) * 0.1;
                yp += (mouseY - yp) * 0.1;
                mouseGlow.style.transform = `translate3d(${xp - 150}px, ${yp - 150}px, 0)`;
                requestAnimationFrame(updateGlow);
            };
            requestAnimationFrame(updateGlow);
        }
    }

    // 4. Desktop Tactile 3D Hover Tilt & Light Reflection for Premium Cards
    const tiltCards = document.querySelectorAll('.luxury-card, .terminal-card');
    
    tiltCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            // Set mouse coordinate CSS properties for radial light reflections
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
            
            if (isDesktop && !prefersReducedMotion) {
                const xc = rect.width / 2;
                const yc = rect.height / 2;
                
                // Maximum tilt limits set to a very subtle 3.5 degrees
                const angleX = ((yc - y) / yc) * 3.5;
                const angleY = ((x - xc) / xc) * 3.5;
                
                card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) translateY(-5px)`;
            }
        });
        
        card.addEventListener('mouseleave', () => {
            if (isDesktop && !prefersReducedMotion) {
                card.style.transform = '';
            }
        });
    });

    // 5. Scroll Progress Bar logic
    const scrollProgress = document.getElementById('scroll-progress');
    if (scrollProgress) {
        const updateScrollProgress = () => {
            const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
            if (totalHeight > 0) {
                const progress = (window.scrollY / totalHeight) * 100;
                scrollProgress.style.width = `${progress}%`;
            }
        };
        window.addEventListener('scroll', updateScrollProgress, { passive: true });
        updateScrollProgress();
    }

    // 6. Scroll-Triggered Animated Metrics (Count-Up)
    if (!prefersReducedMotion) {
        const countUpCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const targetValueStr = el.getAttribute('data-count-target');
                    const targetValue = parseInt(targetValueStr.replace(/[^0-9]/g, ''), 10);
                    const suffix = targetValueStr.replace(/[0-9]/g, '');
                    let startValue = 0;
                    const duration = 1800; // 1.8 seconds
                    const startTime = performance.now();
                    
                    const animateCount = (currentTime) => {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const easeProgress = progress * (2 - progress); // Ease out quad
                        const currentValue = Math.floor(easeProgress * targetValue);
                        el.textContent = `${currentValue}${suffix}`;
                        
                        if (progress < 1) {
                            requestAnimationFrame(animateCount);
                        } else {
                            el.textContent = targetValueStr;
                        }
                    };
                    requestAnimationFrame(animateCount);
                    observer.unobserve(el);
                }
            });
        };

        const countUpObserver = new IntersectionObserver(countUpCallback, {
            threshold: 0.1,
            rootMargin: '0px 0px -20px 0px'
        });

        document.querySelectorAll('[data-count-target]').forEach(el => {
            countUpObserver.observe(el);
        });
    }
});


