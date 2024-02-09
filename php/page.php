<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ../dist/main.js -->
    <script type="module" src="../dist/main.js"></script>
    <!-- ../dist/style.css -->
    <link rel="stylesheet" href="../dist/style.css">
    <title>Страница Услуги</title>
</head>

<body>

    <div class="header__wrapper">
        <header class="container">
            <?php require 'partials/header.php' ?>
        </header>
    </div>

    <main class="container">
        <div class="page">
            <?php require 'partials/page-header.php' ?>
            <h1>Уборка кровли от снега и наледи в Екатеринбурге</h1>
            <div class="page__header">

            </div>
            <?php require 'partials/page-body.php' ?>
            <h2>Виды зимних работ на кровле</h2>
            <div class="page__types-service mt-3">
                <img src="./../dist/img/clean.jpg">
                <div class="page__contacts"><span>898888888</span></div>
            </div>
        </div>
    </main>

</body>

</html>