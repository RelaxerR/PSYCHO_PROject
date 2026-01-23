<?php
// 1. Подключаем шапку и мета-теги
include 'includes/header.php';

// 2. Включаем контент главной страницы
// В будущем здесь можно сделать роутинг через $_GET['page']
include 'pages/home.php';

// 3. Подключаем подвал и закрывающие теги
include 'includes/footer.php';
?>
