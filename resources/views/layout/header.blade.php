<nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-lg-none" href="/"><img class="w-200" src="/images/logo/logo-black.png" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarMobile">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-before-icon d-lg-none">
                <li class="nav-item">
                    <a href="/prices" class="nav-link">Услуги и Цены</a>
                </li>
                <li class="nav-item">
                    <a href="/news" class="nav-link">Статьи</a>
                </li>
                <li class="nav-item">
                    <a href="/reviews" class="nav-link">Отзывы</a>
                </li>
                <li class="nav-item">
                    <a href="/questions" class="nav-link">Вопросы и ответы</a>
                </li>
                <li class="nav-item">
                    <a href="#footer" class="nav-link">Контакты</a>
                </li>
            </ul>
            <div class="col nav-address d-none d-lg-block">
                <span class="nav-city">г.Санкт-Петербург,</span>
                <p class="nav-street">Софийская д.14</p>
            </div>
            <div class="col-lg-4">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-icons">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" target="_blank">
                            <i class="fa-brands fa-youtube fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"  target="_blank">
                            <i class="fa-brands fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" target="_blank">
                            <i class="fa-brands fa-vk fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav-date">
                <div class="row">
                    <div class="col-6 d-lg-none">
                        <span>
                            <b>г.Санкт-Петербург,</b>
                        </span>
                        <p>Софийская д.14</p>
                    </div>
                    <div class="col-6 col-lg-12">
                        <span>
                            <b class="b-nav-date">
                                <a href="tel:88129805866">8 (812) 980-58-66</a>
                            </b>
                        </span>
                        <p>Пн-Вс 09:00-21:00</p>
                    </div>
                </div>
            </div>
            <div class="nav-button text-center">
                @include('home.request-btn', [
                    'additionalClasses' => 'sm-btn mg-0'
                ])
            </div>
        </div>
    </div>
</nav>
