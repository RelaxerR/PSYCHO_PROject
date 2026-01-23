/**
 * Основные скрипты для сайта в стиле Apple
 */
document.addEventListener('DOMContentLoaded', () => {
    
    // Эффект появления элементов при скролле (Scroll Reveal)
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Можно добавить класс .reveal всем секциям в будущем
    document.querySelectorAll('.reveal').forEach(section => {
        observer.observe(section);
    });

    console.log("Apple Style Psychology Site Initialized");
});

// Функция для изменения прозрачности или скрытия навигации при скролле
let lastScrollTop = 0;
const navbar = document.querySelector('.global-nav');

window.addEventListener('scroll', () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Если скроллим вниз — делаем навигацию чуть более прозрачной или меняем границу
    if (scrollTop > 50) {
        navbar.style.borderBottom = "0.5px solid rgba(0, 0, 0, 0.15)";
    } else {
        navbar.style.borderBottom = "0.5px solid rgba(0, 0, 0, 0.05)";
    }
    
    lastScrollTop = scrollTop;
});

// Функция для аккордеона в футере на мобильных устройствах
function initFooterAccordion() {
    if (window.innerWidth <= 768) {
        document.querySelectorAll('.footer-title').forEach(title => {
            title.onclick = () => {
                const list = title.nextElementSibling;
                list.style.display = list.style.display === 'block' ? 'none' : 'block';
                title.classList.toggle('active');
            };
        });
    }
}

// Запуск при загрузке
window.addEventListener('load', initFooterAccordion);

document.addEventListener('DOMContentLoaded', () => {
    const currentUrl = window.location.search;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        // Если href ссылки совпадает с текущим URL параметром
        if (link.getAttribute('href') === currentUrl || (currentUrl === '' && link.getAttribute('href') === 'index.php')) {
            link.style.opacity = "1";
            link.style.fontWeight = "500";
        }
    });
});
