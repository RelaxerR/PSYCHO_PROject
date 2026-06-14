<?php
/**
* PSYCHO_PROject - Точка входа
* Реализует динамическую загрузку контента без дублирования header/footer
*/

// Включаем отображение ошибок для отладки (УДАЛИТЬ или закомментировать на продакшене!)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. Подключаем базовую структуру (Шапка и Навигация)
// Проверим, существует ли файл header.php, чтобы избежать фатальной ошибки
if (!file_exists('includes/header.php')) {
    die("Ошибка: Файл includes/header.php не найден.");
}
include 'includes/header.php';

// 2. Определяем, какую страницу загрузить (Роутинг)
// По умолчанию открываем 'home'
$page = isset($_GET['page']) ? trim($_GET['page']) : 'home';

// Безопасный список доступных страниц
$allowed_pages = [
    'home' => 'pages/home.php',
    'tests' => 'pages/tests.php',
    'about' => 'pages/about.php',       // Вместо interview
    'programs' => 'pages/programs.php', // Вместо education
    'faculty' => 'pages/faculty.php',   // Новая страница
    'media' => 'pages/media.php'        // Вместо stories
];

// Проверяем существование ключа в массиве и наличие файла на диске
if (array_key_exists($page, $allowed_pages)) {
    $file_path = $allowed_pages[$page];
    
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        // Файл указан в конфиге, но отсутствует на диске
        echo "<div style='text-align:center; padding: 50px; color: red;'>";
        echo "<h2>Ошибка сервера</h2>";
        echo "<p>Файл страницы <strong>{$file_path}</strong> не найден на сервере.</p>";
        echo "</div>";
    }
} else {
    // Страница не найдена (404 логика)
    // Можно подключить отдельный файл 404, если он есть
    if (file_exists('pages/404.php')) {
        include 'pages/404.php';
    } else {
        // Или перенаправляем на главную
        include 'pages/home.php';
    }
}

// 3. Подключаем подвал
if (file_exists('includes/footer.php')) {
    include 'includes/footer.php';
} else {
    echo "<!-- Ошибка: footer.php не найден -->";
}
?>