<nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-navbar">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="col nav-address">
                <span class="nav-city">г.Санкт-Петербург,</span>
                <p class="nav-street"> Софийская д.14</p>
            </div>
            <div class="col-sm-4">
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
               <span>
                    <b class="b-nav-date">
                        <a href="tel:88129805866">8 (812) 980-58-66</a>
                    </b>
                </span>
                <p>Пн-Вс 09:00-21:00</p>
            </div>
            <div class="nav-button">
                @include('home.request-btn', [
                    'additionalClasses' => 'sm-btn mg-0'
                ])
            </div>
        </div>
    </div>
</nav>
