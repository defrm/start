<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ../dist/main.js -->
    <script type="module" src="../dist/main.js"></script>
    <!-- ../dist/style.css -->
    <link rel="stylesheet" href="../dist/style.css">
    <title>Промышленные альпинисты</title>
</head>

<body>

    <div class="header__wrapper">
        <header class="container">
            <?php // require 'partials/header.php' 
            ?>
        </header>
    </div>

    <div class="container services d-none d-lg-block">
        <div class="row">
            <h2 class="services__title fs-2 px-1 my-5">Услуги промышленных альпинистов</h2>
            <div class="col-md-4">
                <!-- Список услуг -->
                <?php require "partials/services-list.php" ?>
            </div>
            <div class="col-md-8">
                <!-- Описание услуг -->
                <div class="services__description description">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- #Клининг -->
                        <?php require "partials/services-clean.php" ?>
                        <!-- #Герметизация -->
                        <?php // require "services-germet.php" ?>
                        <!-- Монтажные работы -->
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Монтажные работы</div>
                        <!-- #Снег -->
                        <?php // require "services-snow.php" ?>
                        <!-- Подъем грузов -->
                        <div class="tab-pane fade" id="raise" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">Подъем грузов</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>