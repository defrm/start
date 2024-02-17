<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ../dist/main.js -->
    <script defer type="module" src="../dist/main.js"></script>
    <!-- ../dist/style.css -->
    <link rel="stylesheet" href="../dist/style.css">
    <title>Промышленные альпинисты</title>
</head>

<body>
    <!-- header -->
    <div class="header__wrapper">
        <header class="container">
            <?php // require 'partials/header.php' 
            ?>
        </header>
    </div>

    <!-- first-screen-Desktop -->
    <div class="container">
        <section class="baner-section d-none d-lg-flex flex-column">
            <div class="baner container d-flex">
                <!-- baner__title -->
                <div class="baner__title">
                    <h1 class="px-3 fs-1">Промышленные альпинисты</h1>

                    <!-- <div class="baner__icons mx-3">
				        <svg class="mx-1" height="32" width="32">
				            <use xlink:href="img/sprite.svg#tg"></use>
				        </svg>
				        <svg class="mx-1" height="38" width="38">
				            <use xlink:href="img/sprite.svg#whatsapp"></use>
				        </svg>

				    </div> -->
                    <!-- <div class="baner__phone d-flex align-items-center">
				        <svg class="mx-3" height="40" width="40">
				            <use xlink:href="img/sprite.svg#phone"></use>
				        </svg>
				        <span class="baner__phone-tel">8999009889</span>
				    </div> -->

                    <span class="fs-2">г.Екатеринбург</span>
                </div>
                <!-- slider -->
                <div class="slider">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <picture>
                                    <img src="./../dist/img/slider/slide-1.jpg" srcset="./../dist/img/slider/slide-1-2x.jpg 2x" alt="Slide1">
                                </picture>
                            </div>
                            <div class="swiper-slide">
                                <picture>
                                    <img src="./../dist/img/slider/slide-2.jpg" srcset="./../dist/img/slider/slide-2-2x.jpg 2x" alt="Slide1">
                                </picture>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
            <div class="baner__under mb-5">
                <div class="header__icons mx-5">
                    <!--<svg class="mx-3" height="32" width="32"><use xlink:href="img/sprite.svg#tg"></use></svg>
			        <svg class="mx-3" height="40" width="40"><use xlink:href="img/sprite.svg#whatsapp"></use></svg>
			        <svg class="mx-3" height="40" width="40"><use xlink:href="img/sprite.svg#mail-icon"></use></svg>
			        <svg class="mx-3" height="40" width="40"><use xlink:href="img/sprite.svg#phone"></use></svg>-->
                </div>
            </div>
        </section>
    </div>

    <!-- services-Desktop -->
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
                        <?php // require "services-germet.php" 
                        ?>
                        <!-- Монтажные работы -->
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Монтажные работы</div>
                        <!-- #Снег -->
                        <?php // require "services-snow.php" 
                        ?>
                        <!-- Подъем грузов -->
                        <div class="tab-pane fade" id="raise" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">Подъем грузов</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>