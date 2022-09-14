@extends('layout')

@section("content")
    <div class="container" id="prices-table">
        <div class="row">
            <div class="col">
                <table class="table table-condensed table-bordered d-none d-md-table">
                    <tr>
                        <td colspan="3" class="text-center text-bold">Прайс</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center text-bold grey">Lada</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-bold">Чип-Тюнинг</td>
                        <td>Vesta/Xray/Largus</td>
                        <td>2990р</td>
                    </tr>
                    <tr>
                        <td>Granta/Priora/Kalina</td>
                        <td>2990р</td>
                    </tr>
                    <tr>
                        <td>Niva/Chevrolet Niva/Niva Travel</td>
                        <td>3990р</td>
                    </tr>
                    <tr>
                        <td rowspan="4" class="text-bold">Дополнительные услуги</td>
                        <td>Активация функций</td>
                        <td>от 500р</td>
                    </tr>
                    <tr>
                        <td>Замена/Ремонт/Адаптация блоков управления</td>
                        <td>от 2500р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 2500р</td>
                    </tr>
                    <tr>
                        <td>Установка прошивки ABS от Vesta Sport</td>
                        <td>1990р</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center text-bold grey">Renault</td>
                    </tr>
                    <tr>
                        <td rowspan="4" class="text-bold">Чип-Тюнинг</td>
                        <td>Logan/Sandero</td>
                        <td>2990р</td>
                    </tr>
                    <tr>
                        <td>Megane 2/3 Fluence</td>
                        <td>от 2990р до 4490р</td>
                    </tr>
                    <tr>
                        <td>Duster/Kaptur</td>
                        <td>3990р</td>
                    </tr>
                    <tr>
                        <td>Lattitude/Koleos</td>
                        <td>от 3990р до 8000р</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-bold">Дополннительные услуги</td>
                        <td>Активация функций</td>
                        <td>от 500р</td>
                    </tr>
                    <tr>
                        <td>Замена/Ремонт/Адаптация блоков управления</td>
                        <td>от 2500р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 5000р</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center text-bold grey">Hyundai/Kia</td>
                    </tr>
                    <tr>
                        <td rowspan="6" class="text-bold">Чип-Тюнинг</td>
                        <td>Rio/Solaris/Accent</td>
                        <td>от 2990р до 3990р</td>
                    </tr>
                    <tr>
                        <td>Creta 1.6/2.0</td>
                        <td>3990р/8990р</td>
                    </tr>
                    <tr>
                        <td>Ceed/Cerato/Elantra 1.6</td>
                        <td>от 3490р до 4490р</td>
                    </tr>
                    <tr>
                        <td>Ceed/Cerato/Elantra 2.0</td>
                        <td>от 3490р до 8990р</td>
                    </tr>
                    <tr>
                        <td>Sonata/Optima до 2017</td>
                        <td>3990р</td>
                    </tr>
                    <tr>
                        <td>Sonata/Optima/K5 с 2017</td>
                        <td>9990р</td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="text-bold">Дополннительные услуги</td>
                        <td>Замена/ремонт/адаптация блоков управления</td>
                        <td>от 3000р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 3000р</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center text-bold grey">VAG</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="text-bold">Чип-Тюнинг</td>
                        <td>Rapid/Polo/Fabia</td>
                        <td>от 3490р до 4490р</td>
                    </tr>
                    <tr>
                        <td>Octavia/Jetta/Golf</td>
                        <td>от 3490р</td>
                    </tr>
                    <tr>
                        <td>Tiguan/Kodiaq</td>
                        <td>от 4990р до 8990р</td>
                    </tr>

                    <tr>
                        <td rowspan="4" class="text-bold">Дополннительные услуги</td>
                        <td>Активация функций</td>
                        <td>1000р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 5000р</td>
                    </tr>
                </table>
                <table class="table table-condensed table-bordered d-md-none" id="mobile-table">
                    <tr>
                        <td colspan="2" class="text-center text-bold">Прайс</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center text-bold grey">Lada</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Чип-Тюнинг</td>
                    </tr>
                    <tr>
                        <td>Vesta/Xray/Largus</td>
                        <td>2990р</td>
                    </tr>
                    <tr>
                        <td>Granta/Priora/Kalina</td>
                        <td>2990р</td>
                    </tr>
                    <tr>
                        <td>Niva/Chevrolet Niva/Niva Travel</td>
                        <td>3990р</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Дополнительные услуги</td>
                    </tr>
                    <tr>
                        <td>Активация функций</td>
                        <td>от 500р</td>
                    </tr>
                    <tr>
                        <td>Замена/Ремонт/Адаптация блоков управления</td>
                        <td>от 2500р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 2500р</td>
                    </tr>
                    <tr>
                        <td>Установка прошивки ABS от Vesta Sport</td>
                        <td>1990р</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center text-bold grey">Renault</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Чип-Тюнинг</td>
                    </tr>
                    <tr>
                        <td>Logan/Sandero</td>
                        <td>2990р</td>
                    </tr>
                    <tr>
                        <td>Megane 2/3 Fluence</td>
                        <td>от 2990р до 4490р</td>
                    </tr>
                    <tr>
                        <td>Duster/Kaptur</td>
                        <td>3990р</td>
                    </tr>
                    <tr>
                        <td>Lattitude/Koleos</td>
                        <td>от 3990р до 8000р</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Дополнительные услуги</td>
                    </tr>
                    <tr>
                        <td>Активация функций</td>
                        <td>от 500р</td>
                    </tr>
                    <tr>
                        <td>Замена/Ремонт/Адаптация блоков управления</td>
                        <td>от 2500р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 5000р</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center text-bold grey">Hyundai/Kia</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Чип-Тюнинг</td>
                    </tr>
                    <tr>
                        <td>Rio/Solaris/Accent</td>
                        <td>от 2990р до 3990р</td>
                    </tr>
                    <tr>
                        <td>Creta 1.6/2.0</td>
                        <td>3990р/8990р</td>
                    </tr>
                    <tr>
                        <td>Ceed/Cerato/Elantra 1.6</td>
                        <td>от 3490р до 4490р</td>
                    </tr>
                    <tr>
                        <td>Ceed/Cerato/Elantra 2.0</td>
                        <td>от 3490р до 8990р</td>
                    </tr>
                    <tr>
                        <td>Sonata/Optima до 2017</td>
                        <td>3990р</td>
                    </tr>
                    <tr>
                        <td>Sonata/Optima/K5 с 2017</td>
                        <td>9990р</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Дополнительные услуги</td>
                    </tr>
                    <tr>
                        <td>Замена/ремонт/адаптация блоков управления</td>
                        <td>от 3000р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 3000р</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center text-bold grey">VAG</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Чип-Тюнинг</td>
                    </tr>
                    <tr>
                        <td>Rapid/Polo/Fabia</td>
                        <td>от 3490р до 4490р</td>
                    </tr>
                    <tr>
                        <td>Octavia/Jetta/Golf</td>
                        <td>от 3490р</td>
                    </tr>
                    <tr>
                        <td>Tiguan/Kodiaq</td>
                        <td>от 4990р до 8990р</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-bold text-center">Дополнительные услуги</td>
                    </tr>
                    <tr>
                        <td>Активация функций</td>
                        <td>1000р</td>
                    </tr>
                    <tr>
                        <td>Отключение иммобилайзера</td>
                        <td>от 5000р</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <hr>
    <div class="container">
        <p id="prices-id" class="prices-info text-center">Другие модели и марки уточняйте по телефону: <a href="tel:88129805866">8 (812) 980-58-66</a></p>
    </div>
@overwrite
