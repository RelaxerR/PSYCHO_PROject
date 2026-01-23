<?php
/**
 * PSYCHO_PROject - Точка входа
 * Реализует динамическую загрузку контента без дублирования header/footer
 */

// 1. Подключаем базовую структуру (Шапка и Навигация)
include 'includes/header.php';

// 2. Определяем, какую страницу загрузить (Роутинг)
// По умолчанию открываем 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Безопасный список доступных страниц
$allowed_pages = [
    'home'      => 'pages/home.php',
    'tests'     => 'pages/tests.php',
    'interview' => 'pages/interview.php',
    'library'   => 'pages/library.php',
    'education' => 'pages/education.php',
    'stories'   => 'pages/stories.php'
];

// Проверяем существование файла и подключаем его
if (array_key_exists($page, $allowed_pages) && file_exists($allowed_pages[$page])) {
    include $allowed_pages[$page];
} else {
    // Если страница не найдена, можно подключить 404.php или вернуть на главную
    include 'pages/home.php';
}

// 3. Подключаем подвал
include 'includes/footer.php';
?>
