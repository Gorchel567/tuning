@extends('layout')

@section("content")
    <div class="container" id="prices-table">
        <div class="row">
            <table class="table table-condensed table-bordered">
                <tr>
                    <td colspan="3" class="text-center text-bold">Прайс</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center text-bold">Lada</td>
                </tr>
                <tr>
                    <td rowspan="3" class="text-bold">Чип-Тюнинг</td>
                    <td>Vesta/Xray/Largus</td>
                    <td>2490р</td>
                </tr>
                <tr>
                    <td>Granta/Priora/Kalina</td>
                    <td>2490р</td>
                </tr>
                <tr>
                    <td>Niva/Chevrolet Niva/Niva Travel</td>
                    <td>3490р</td>
                </tr>
                <tr>
                    <td rowspan="4" class="text-bold">Дополннительные услуги</td>
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
                    <td>от 1990р</td>
                </tr>
            </table>
        </div>
    </div>
@overwrite
