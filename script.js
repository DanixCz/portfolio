// Toggle Mobile Menu
function toggleMenu() {
    const navMenu = document.querySelector('nav ul');
    navMenu.classList.toggle('show');
}

// Close menu when clicking on a link
document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('click', () => {
        document.querySelector('nav ul').classList.remove('show');
    });
});

// Intersection Observer for animations
const animateElements = document.querySelectorAll('[data-animate]');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
});

animateElements.forEach(el => observer.observe(el));

// Header scroll effect
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Gallery lightbox
const gallery = document.querySelectorAll('.gallery img');
const lightbox = document.querySelector('.lightbox');
const lightboxImg = document.querySelector('.lightbox img');

if (gallery.length > 0 && lightbox) {
    gallery.forEach(img => {
        img.addEventListener('click', () => {
            lightboxImg.src = img.src;
            lightbox.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    });
}

function closeLightbox() {
    if (lightbox) {
        lightbox.classList.remove('show');
        document.body.style.overflow = 'auto';
    }
}

// Close lightbox on ESC key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightbox && lightbox.classList.contains('show')) {
        closeLightbox();
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && document.querySelector(href)) {
            e.preventDefault();
            const target = document.querySelector(href);
            const headerOffset = 80;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// EmailJS Configuration
emailjs.init('R5fKp8MZr3X1rDU-V');

// Form submission
const contactForm = document.getElementById('contactForm');
const formResponse = document.getElementById('form-response');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        
        // Zobrazení loading stavu
        submitBtn.textContent = 'Odesílám...';
        submitBtn.disabled = true;
        formResponse.style.display = 'none';
        
        // Příprava dat pro email
        const templateParams = {
            to_email: 'dan866663@gmail.com',
            from_name: document.getElementById('name').value,
            from_email: document.getElementById('email').value,
            message: document.getElementById('message').value,
            reply_to: document.getElementById('email').value
        };
        
        // Odesílání emailu přes EmailJS
        emailjs.send('service_portfolio', 'template_portfolio', templateParams)
            .then(() => {
                // Úspěch
                formResponse.textContent = '✓ Zpráva byla úspěšně odeslána! Děkuji za váš kontakt.';
                formResponse.className = 'form-response success';
                formResponse.style.display = 'block';
                
                // Reset formuláře
                contactForm.reset();
                
                // Vrácení tlačítka do normálního stavu
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    formResponse.style.display = 'none';
                }, 4000);
            })
            .catch((error) => {
                // Chyba
                console.error('Chyba při odesílání:', error);
                formResponse.textContent = '✗ Chyba při odesílání zprávy. Prosím kontaktujte mě přímo na dan866663@gmail.com';
                formResponse.className = 'form-response error';
                formResponse.style.display = 'block';
                
                // Vrácení tlačítka do normálního stavu
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
    });
}