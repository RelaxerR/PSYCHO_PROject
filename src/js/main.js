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

// Мы уже создавали IntersectionObserver в начале, 
// убедитесь, что класс .reveal обрабатывается:
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

window.addEventListener('scroll', () => {
    const stories = document.querySelectorAll('.story-image');
    stories.forEach(img => {
        const speed = 0.2;
        const rect = img.parentElement.getBoundingClientRect();
        const offset = (window.innerHeight - rect.top) * speed;
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            img.style.backgroundPositionY = `${offset / 2}px`;
        }
    });
});

// Анимация цифр 01, 02, 03
const eduIcons = document.querySelectorAll('.edu-icon');
const observerEdu = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
        }
    });
}, { threshold: 0.5 });

eduIcons.forEach(icon => {
    icon.style.opacity = "0";
    icon.style.transform = "translateY(20px)";
    icon.style.transition = "all 0.8s ease-out";
    observerEdu.observe(icon);
});

document.addEventListener('DOMContentLoaded', () => {
    const searchBtn = document.querySelector('.nav-icon-search');
    const searchOverlay = document.getElementById('search-overlay');
    const closeSearch = document.getElementById('close-search');
    const searchInput = document.getElementById('search-input');

    // Открыть поиск
    if (searchBtn) {
        searchBtn.addEventListener('click', (e) => {
            e.preventDefault();
            searchOverlay.classList.add('active');
            setTimeout(() => searchInput.focus(), 300);
            document.body.style.overflow = 'hidden'; // Блокируем скролл фона
        });
    }

    // Закрыть поиск
    const hideSearch = () => {
        searchOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
    };

    closeSearch.addEventListener('click', hideSearch);

    // Закрытие по клавише Esc
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') hideSearch();
    });

    // Имитация поиска (для демонстрации)
    searchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase();
        const resultsArea = document.getElementById('search-results');
        
        if (query.length > 2) {
            // В реальном проекте здесь будет AJAX запрос к серверу
            resultsArea.innerHTML = `<p style="margin-top:20px; color:#86868b;">Поиск результатов для: <strong>${query}</strong>...</p>`;
        } else {
            resultsArea.innerHTML = '';
        }
    });
});
