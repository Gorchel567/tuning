<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 offset-md-2 col-md-5">
                <h2 class="text-center">Контакты</h2>
                <p><b>Адрес:</b> Софийская д.14</p>
                <p><b>телефон:</b> <a href="tel:88129805866">8 (812) 980-58-66</a></p>
                <p><b>время работы:</b> с 9:00 до 21:00 Пн-Вс</p>
                <div class="d-none d-md-block">
                    @include('home.request')
                </div>
            </div>
            <div class="col-12 col-md-5 text-center" id="map_container-one"></div>
        </div>
        <div class="row mg-t-25">
            <div class="col text-center">
                © ИП "Тюнинг", 2011-2022 г. Все права защищены.
            </div>
        </div>
    </div>
</footer>

<script>
    setTimeout(function () {
        var elem = document.createElement('script');
        elem.type = 'text/javascript';
        elem.src = 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7d99c761db467781e52bbabc55d9a12d1f5c98148346d78aff0f935ae04408d8&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true';
        var div = document.getElementById('map_container-one');
        div.append(elem);
    }, 3000);
</script>
