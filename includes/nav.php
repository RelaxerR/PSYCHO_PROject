<!-- Основная навигационная панель Apple Style 2026 -->
<nav class="global-nav">
    <div class="nav-content">
        <!-- Логотип сайта -->
        <a href="index.php" class="nav-logo">
            <span class="logo-brand">PSYCHO<span class="logo-accent">_</span>PRO</span><span class="logo-suffix">ject</span>
        </a>

        <!-- Список разделов -->
        <ul class="nav-list">
            <li><a href="index.php" class="nav-link">Главная</a></li>
            <li><a href="?page=about" class="nav-link">Почему УдГУ?</a></li>
            <li><a href="?page=programs" class="nav-link">Программы</a></li>
            <li><a href="?page=faculty" class="nav-link">Преподаватели</a></li>
            <li><a href="?page=tests" class="nav-link">Тест</a></li>
            <li><a href="?page=media" class="nav-link">Мы в соцсетях</a></li>
        </ul>


        <!-- Кнопка поиска -->
        <div class="nav-actions">
            <a href="#" class="nav-icon-search">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org">
                    <path d="M14.5 14.5L10.5 10.5M12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" stroke="currentColor" stroke-width="1.2"/>
                </svg>
            </a>
        </div>
    </div>
</nav>

<!-- Полноэкранный поиск (скрыт по умолчанию) -->
<div id="search-overlay" class="search-overlay">
    <div class="search-container">
        <div class="search-input-wrapper">
            <svg class="search-icon-big" width="24" height="24" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org">
                <path d="M14.5 14.5L10.5 10.5M12 6.5C12 9.53757 9.53757 12 6.5 12C3.46243 12 1 9.53757 1 6.5C1 3.46243 3.46243 1 6.5 1C9.53757 1 12 3.46243 12 6.5Z" stroke="currentColor" stroke-width="1.5"/>
            </svg>
            <input type="text" id="search-input" placeholder="Поиск по PSYCHO_PROject" autocomplete="off">
            <button id="close-search" class="close-search">Отмена</button>
        </div>
        
        <div class="search-suggestions">
            <div class="suggestion-column">
                <h4>Популярные запросы</h4>
                <ul>
                    <li><a href="?page=tests">Пройти тест на профориентацию</a></li>
                    <li><a href="?page=education">Где учиться на психолога?</a></li>
                    <li><a href="?page=interview">Отзывы студентов</a></li>
                </ul>
            </div>
        </div>
        <div id="search-results" class="search-results"></div>
    </div>
</div>
