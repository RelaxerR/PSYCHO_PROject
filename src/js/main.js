/**
 * 🍏 Основные скрипты для сайта в стиле Apple
 * Проект: PSYCHO_PROject
 */

// ========================================
// 🧠 ГЛОБАЛЬНЫЕ ПЕРЕМЕННЫЕ
// ========================================

let lastScrollTop = 0;
const navbar = document.querySelector('.global-nav');

// ========================================
// 📦 ИНИЦИАЛИЗАЦИЯ ПРИ ЗАГРУЗКЕ DOM
// ========================================

document.addEventListener('DOMContentLoaded', () => {
    console.log("Apple Style Psychology Site Initialized");

    // 1. Активация текущей навигационной ссылки
    activateCurrentNavLink();

    // 2. Инициализация поиска (overlay)
    initSearchOverlay();

    // 3. Инициализация аккордеона в футере (на мобильных)
    initFooterAccordion();
});

// ========================================
// 👁️‍🗨️ SCROLL REVEAL: Анимация появления элементов
// ========================================

const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.1 });

// Применяем к элементам с классом .reveal
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// Отдельный observer для анимации иконок образования
const eduIcons = document.querySelectorAll('.edu-icon');
if (eduIcons.length > 0) {
    const eduObserver = new IntersectionObserver((entries) => {
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
        eduObserver.observe(icon);
    });
}

// ========================================
// 🧭 НАВИГАЦИЯ: Эффекты при скролле
// ========================================

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // Изменение границы навбара при скролле
    if (navbar) {
        navbar.style.borderBottom = scrollTop > 50
            ? "0.5px solid rgba(0, 0, 0, 0.15)"
            : "0.5px solid rgba(0, 0, 0, 0.05)";
    }

    // Параллакс-эффект для изображений историй
    const stories = document.querySelectorAll('.story-image');
    stories.forEach(img => {
        const parent = img.parentElement;
        const rect = parent.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) {
            const speed = 0.2;
            const offset = (window.innerHeight - rect.top) * speed;
            img.style.backgroundPositionY = `${offset / 2}px`;
        }
    });

    lastScrollTop = scrollTop;
});

// ========================================
// 🔗 НАВИГАЦИЯ: Подсветка активной ссылки
// ========================================

function activateCurrentNavLink() {
    const currentUrl = window.location.search;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        const isActive = 
            (currentUrl === '' && href === 'index.php') ||
            (href === currentUrl);

        if (isActive) {
            link.style.opacity = "1";
            link.style.fontWeight = "500";
        }
    });
}

// ========================================
// 📱 ФУТЕР: Аккордеон на мобильных
// ========================================

function initFooterAccordion() {
    if (window.innerWidth <= 768) {
        document.querySelectorAll('.footer-title').forEach(title => {
            title.addEventListener('click', () => {
                const list = title.nextElementSibling;
                if (list) {
                    list.style.display = list.style.display === 'block' ? 'none' : 'block';
                    title.classList.toggle('active');
                }
            });
        });
    }
}

// Обновление аккордеона при изменении размера окна
window.addEventListener('resize', () => {
    // Сбросить стиль display, чтобы адаптироваться к desktop/mobile
    document.querySelectorAll('.footer-column ul').forEach(ul => {
        if (window.innerWidth > 768) {
            ul.style.display = '';
            ul.previousElementSibling?.classList.remove('active');
        }
    });
});

// ========================================
// 🔍 ПОИСК: Overlay-интерфейс
// ========================================

function initSearchOverlay() {
    const searchBtn = document.querySelector('.nav-icon-search');
    const searchOverlay = document.getElementById('search-overlay');
    const closeSearch = document.getElementById('close-search');
    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-results');

    if (!searchOverlay || !searchBtn || !closeSearch || !searchInput) return;

    const hideSearch = () => {
        searchOverlay.classList.remove('active');
        document.body.style.overflow = 'auto';
    };

    const showSearch = (e) => {
        e.preventDefault();
        searchOverlay.classList.add('active');
        setTimeout(() => searchInput.focus(), 300);
        document.body.style.overflow = 'hidden';
    };

    // Открытие
    searchBtn.addEventListener('click', showSearch);

    // Закрытие
    closeSearch.addEventListener('click', hideSearch);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') hideSearch();
    });

    // Имитация поиска (заменить на AJAX в продакшене)
    searchInput.addEventListener('input', (e) => {
        const query = e.target.value.trim().toLowerCase();
        if (query.length > 2 && searchResults) {
            searchResults.innerHTML = `
                <p style="margin-top:20px; color:#86868b;">
                    Поиск результатов для: <strong>${query}</strong>...
                </p>
            `;
        } else if (searchResults) {
            searchResults.innerHTML = '';
        }
    });
}