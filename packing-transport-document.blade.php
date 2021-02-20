<html>
<head>
    <meta charset="UTF-8">

    <title>Товарно-транспортная накладная</title>

    <style>
        body {
            font-family: DejaVu Sans;
            color: #454545;
        }
        table {
            border-collapse: collapse;
        }

        .main-info-titles {
            display: inline-block;
            font-size: 8pt;
            width: 80px;
            text-align: right
        }

        .main-info-description {
            display: inline-block;
            width: 750px;
            font-size: 7pt;
            line-height: 10px;
            border-bottom: 1px solid;
        }

        .main-table {
            border: 1px solid black;
            padding-top: -1px;
            padding-bottom: -1px;
            font-size: 6pt;
        }

        .left-table-values {
            border: 1px solid black;
            text-align: center;
            width: 80px;
        }

        .left-table-values-without-width {
            border: 1px solid black;
            text-align: center;
        }

        .left-table-keys {
            text-align: right;
            height: 35px;
            padding-top: -1px;
            padding-bottom: -1px;
        }
        .doc-header-description {
            width: 1050px;
            font-size: 7pt;
            text-align: right;
            padding-top: -20px
        }

        .with-border {
            border: 1px solid black;
        }

        .with-top-border {
            border-top: 1px solid black;
        }

        .right-alignment {
            text-align: right;
        }

        .left-alignment {
            text-align: left;
        }

        .additional-zero-borders {
            border-bottom: 0;
            border-left: 0;
        }

        .bolder {
            font-weight: bolder;
        }

        .lower-description {
            font-size: 6pt;
            text-align: center;
            padding-top: -5px;
        }

        .central-description {
            border-bottom: 1px solid;
            width: 98%;
        }

        .numbered-table-cells {
            font-size: 6pt;
            text-align: center;
        }

        .main-description {
            font-size: 7pt;
        }

        .righter-title-2nd-page {
            width: 100px
        }

        .description-2nd-page {
            border-bottom: 1px solid;
            border-left: 1px solid;
            border-right: 1px solid
        }

        .in-one-row {
            display: inline-block;
        }

        .negative-padding {
            padding-top: -10px;
        }

        .only-right-border {
            border-top: 0;
            border-bottom: 0;
            border-right: 0;
            border-left: 1px solid;
        }

        .bottom-border {
            border-bottom: 1px solid
        }

        .compact-line {
            padding-top: -4px
        }

        .line-spacing {
            line-height: 6px;
        }
    </style>

</head>
<body>
<div class="doc-header-description">
    Типовая межотраслевая форма № 1-Т <br>Утверждена Постановлением Госкомстата России <br>от 28.11.97 № 78
</div>


<div>
    <table style="border: 0;">
        <tbody>

        <tr>
            <td style="width: 850px;">

                <div style="line-height: 10px; text-align: center">
                    <h4>ТОВАРНО-ТРАНСПОРТНАЯ НАКЛАДНАЯ</h4>
                </div>

                <div style="margin-top: 5px">
                    <div class="main-info-titles">Грузоотправитель</div>
                    <div class="main-info-description">
                        {{ $requisites->name }}, ИНН {{ $requisites->inn }}, {{ $requisites->address }}, тел.: {{ $requisites->phone }}, {{ $requisites->account }}
                    </div>
                    <div style="font-size: 6pt; text-align: center; padding-top: -8px">(полное наименование организации, адрес, номер телефона)</div>
                </div>

                <div style="margin-top: 5px">
                    <div class="main-info-titles">Грузополучатель</div>
                    <div class="main-info-description">
                        {{ $document->receiver->legal_name }}, ИНН {{ $document->receiver->inn }}, {{ $document->receiver->address  }}, тел.: {{ $document->receiver->phone }}, р/с {{ $document->receiver->account }}                    </div>
                    <div style="font-size: 6pt; text-align: center; padding-top: -8px">(полное наименование организации, адрес, номер телефона)</div>
                </div>

                <div style="margin-top: 5px">
                    <div class="main-info-titles">Плательщик</div>
                    <div class="main-info-description">
                        {{ $document->payer->legal_name }}, ИНН {{ $document->payer->inn }}, {{ $document->payer->address  }}, тел.: {{ $document->payer->phone }}, р/с {{ $document->payer->account }}                    </div>
                    <div style="font-size: 6pt; text-align: center; padding-top: -8px">(полное наименование организации, адрес, банковские реквизиты)</div>
                </div>
            </td>

            <td style="padding: 0 -130px; width: 350px; font-size: 8pt;">
                <table>
                    <tbody>
                    <tr style="width: 80px">
                        <td colspan="2"> &nbsp; </td>
                        <td colspan="3" class="left-table-values">Коды</td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2" class="left-table-keys">Форма по ОКУД &nbsp;</td>
                        <td colspan="3" class="left-table-values">0345009</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="left-table-values">{{ $document->number }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="height: 25px; padding-left: -20px" class="left-table-keys">Дата составления &nbsp;</td>
                        <td class="left-table-values-without-width">{{ $date_object->format("d") }}</td>
                        <td class="left-table-values-without-width">{{ $date_object->format("m") }}</td>
                        <td class="left-table-values-without-width">{{ $date_object->format("Y") }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="left-table-keys">по ОКПО &nbsp;</td>
                        <td colspan="3" class="left-table-values">85963510</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="left-table-keys">по ОКПО &nbsp;</td>
                        <td colspan="3" class="left-table-values">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="left-table-keys">по ОКПО &nbsp;</td>
                        <td colspan="3" class="left-table-values">&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

    <div style="width: 650px; text-align: center; margin-top: 10px; margin-left: 150px;">
        <div style="font-size: 10pt;">1. ТОВАРНЫЙ РАЗДЕЛ (заполняется грузоотправителем)</div>
    </div>

    <table class="numbered-table-cells">
        <tbody>
            <tr>
                <td class="main-table with-border">Код продукции номенклатурный номер)</td>
                <td class="main-table with-border">Номер прейскуранта и дополнения к нему</td>
                <td class="main-table with-border">Артикул или номер по прейскуранту</td>
                <td class="main-table with-border">Количество</td>
                <td class="main-table with-border">Цена, руб. коп.</td>
                <td class="main-table with-border">Наименование продукции, товара (груза), ТУ, марка, размер, сорт </td>
                <td class="main-table with-border" style="width: 35px;">Единица измерения </td>
                <td colspan="2" class="main-table with-border" style="width: 35px;">Вид <br> упаковки </td>
                <td class="main-table with-border" style="width: 35px;">Количество <br> мест</td>
                <td сlass="main-table with-border" style="border-top: 1px solid black; border-right: 1px solid black; width: 40px;">Масса, <br> т</td>
                <td сlass="main-table with-border" style="border-top: 1px solid black; border-right: 1px solid black; width: 90px">Сумма, <br> руб. коп.</td>
                <td сlass="main-table with-border" style="border-top: 1px solid black; border-right: 1px solid black;">Порядковый номер <br> записи по склад- <br> ской картотеке <br> (грузоотправителю, <br> грузополучателю)</td>
                {{-- left border display--}}
                <td rowspan="6" style="border-left: 1px solid">&nbsp;</td>
            </tr>

            <tr class="main-table">
                <td class="main-table">1</td>
                <td class="main-table">2</td>
                <td class="main-table">3</td>
                <td class="main-table">4</td>
                <td class="main-table">5</td>
                <td class="main-table">6</td>
                <td class="main-table">7</td>
                <td colspan="2" class="main-table">8</td>
                <td class="main-table">9</td>
                <td class="main-table">10</td>
                <td class="main-table">11</td>
                <td class="main-table">12</td>
            </tr>

            @foreach ($document->documentItems as $containerItem)
                <tr class="main-table">
                    <td class="main-table">{{ $containerItem->code }}</td>
                    <td class="main-table"></td>
                    <td class="main-table"></td>
                    <td class="main-table">{{ $containerItem->formattedQuantity }}</td>
                    <td class="main-table">{{ $containerItem->formattedPrice }}</td>
                    <td class="main-table">{{ $containerItem->name }}</td>
                    <td class="main-table">кг</td>
                    <td colspan="2" class="main-table"></td>
                    <td class="main-table"></td>
                    <td class="main-table"></td>
                    <td class="main-table">{{ $containerItem->totalSum }}</td>
                    <td class="main-table"></td>
                </tr>
            @endforeach

            <tr>
                <td colspan="3" class="main-table right-alignment additional-zero-borders">Итого по странице &nbsp;</td>
                <td class="main-table">{{ $document->totalQuantityFormatted }}</td>
                <td class="main-table"></td>
                <td class="main-table"></td>
                <td class="main-table"></td>
                <td colspan="2" class="main-table"></td>
                <td class="main-table">Х</td>
                <td class="main-table"></td>
                <td class="main-table">{{ $document->totalSumFormatted }}</td>
                <td class="main-table"></td>
            </tr>

            <tr>
                <td colspan="3" class="right-alignment additional-zero-borders">Всего по накладной &nbsp;</td>
                <td class="main-table">{{ $document->totalQuantityFormatted }}</td>
                <td class="main-table"></td>
                <td class="main-table"></td>
                <td class="main-table"></td>
                <td colspan="2" class="main-table"></td>
                <td class="main-table">Х</td>
                <td class="main-table"></td>
                <td class="main-table">{{ $document->totalSumFormatted }}</td>
                <td class="main-table"></td>
            </tr>

            <tr>
                <td colspan="3" class="left-alignment">
                    Товарная накладная имеет продолжение на ________
                </td>
                <td colspan="7" class="left-alignment">
                    листах, на бланках за № ____________________________
                </td>
                <td class="main-table">Наценка, %</td>
                <td class="main-table"></td>
                <td rowspan="6"></td>

            </tr>

            <tr>
                <td colspan="3" class="left-alignment">
                    и содержит ___________________________________________
                </td>
                <td colspan="3" rowspan="2" class="left-alignment">
                    порядковых номеров записей
                </td>
                <td colspan="4">
                    &nbsp;
                </td>
                <td rowspan="3" class="main-table" style="font-size: 5pt;">Складские или транспортные расходы</td>
                <td rowspan="3" class="main-table"></td>
            </tr>

            <tr>
                <td colspan="3" class="lower-description negative-padding">
                    (прописью)
                </td>
            </tr>

            <tr>
                <td colspan="3" class="left-alignment">
                    Всего наименований ______________________________________
                </td>
                <td class="left-alignment" style="width: 110px">
                    Масса груза (нетто)
                </td>
                <td colspan="3">
                    <div class="central-description">&nbsp;</div>
                </td>
                <td colspan="2" rowspan="2" style="border: 1px solid;">&nbsp;</td>
                <td style="text-align: left">&nbsp; т</td>
            </tr>

            <tr>
                <td colspan="3" class="lower-description negative-padding">
                   (прописью)
                </td>
                <td>
                   &nbsp;
                </td>
                <td colspan="3" class="lower-description negative-padding">
                    (прописью)
                </td>
                <td>&nbsp;</td>
                <td class="main-table">&nbsp;</td>
                <td class="main-table">&nbsp;</td>
            </tr>

            <tr>
                <td colspan="3" class="left-alignment">Всего мест _______________________________________________ </td>
                <td class="left-alignment">
                    Масса груза (брутто)
                </td>
                <td colspan="3">
                    <div class="central-description">{{ $document->formattedQuantityInLetters }}</div>
                </td>
                <td colspan="2" rowspan="2" style="border: 1px solid;">&nbsp;</td>
                <td style="text-align: left">&nbsp; т</td>
                <td class="main-table" style="font-size: 5pt">Всего к оплате</td>
                <td class="main-table">{{ $document->totalSumFormatted }}</td>
            </tr>

            <tr>
                <td colspan="3" class="lower-description negative-padding">
                    (прописью)
                </td>
                <td>
                    &nbsp;
                </td>
                <td colspan="2" class="lower-description negative-padding">
                    (прописью)
                </td>
                <td colspan="2">
                    &nbsp;
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>


        </tbody>
    </table>

    <table style="font-size: 7pt;">
        <tbody>
        <tr>
            <td style="width: 580px;">
                <div style="text-align:left;">
                    Приложения (паспорта, сертификаты и т.п.) на <span style="text-decoration: underline">_______</span> листах
                    <div class="lower-description" style="margin-left: 230px;">
                        прописью
                    </div>
                </div>

                <span><strong>Всего отпущено на сумму</strong> {{ $document->totalSumInLetters }}</span>
                <div class="lower-description with-top-border" style="margin-left: 230px;">
                    прописью
                </div>

                <table>
                    <tbody>
                        <tr>
                            <td class="bolder">Отпуск разрешил</td>
                            <td style="width: 50px;">
                                <div class="central-description"><span>Начальник ПЗУ №12 Пилютов  ДС </span></div>
                            </td>
                            <td style="width: 70px;">
                                <div class="central-description">&nbsp;</div>
                            </td>
                            <td>
                                <div class="bottom-border">
                                    <span>{{ $requisites->inspector }}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="lower-description">
                                (должность)
                            </td>
                            <td class="lower-description">
                                (подпись)
                            </td>
                            <td class="lower-description">
                                (расшифровка подписи)
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="bolder">Главный (старший) бухгалтер</td>
                            <td style="width: 70px;">
                                <div class="central-description">&nbsp;</div>
                            </td>
                            <td>
                                <div class="bottom-border">
                                    <span>{{ $requisites->chief_accountant }}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td class="lower-description">
                                (подпись)
                            </td>
                            <td class="lower-description">
                                (расшифровка подписи)
                            </td>
                        </tr>

                        <tr>
                            <td class="bolder">Отпуск груза произвел</td>
                            <td style="width: 150px;">
                                <div class="central-description">
                                    <span>Начальник ПЗУ №12 Пилютов  ДС </span>
                                </div>
                            </td>
                            <td style="width: 70px;">
                                <div class="central-description">&nbsp;</div>
                            </td>
                            <td>
                                <div class="bottom-border">
                                    <span>{{ $requisites->inspector }}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td class="lower-description">
                                (должность)
                            </td>
                            <td class="lower-description">
                                (подпись)
                            </td>
                            <td class="lower-description">
                                (расшифровка подписи)
                            </td>
                        </tr>

                    </tbody>
                </table>
                <br>

                <div style="text-align: center;">
                    М.П. {{ $date }}
                </div>

            </td>
            <td style="border-left: 1px solid; width: 525px">
                <table>
                    <tbody>
                    <tr>
                        <td colspan="4">
                            По доверенности № ______________ от
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            выданной _______________________________________
                        </td>
                    </tr>
                    <tr>
                        <td>Груз к перевозке принял</td>
                        <td>
                            <div class="central-description">
                                <span>&nbsp;</span>
                            </div>
                        </td>
                        <td>
                            <div class="central-description">&nbsp;</div>
                        </td>
                        <td>
                            <div class="bottom-border">
                                {{ $document->driver->surname }} {{ $document->driver->initials }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="lower-description">
                            должность
                        </td>
                        <td class="lower-description">
                            подпись
                        </td>
                        <td class="lower-description">
                            расшифровка подписи
                        </td>
                    </tr>
                    <tr><td colspan="4">&nbsp;</td></tr>
                    <tr>
                        <td colspan="4">
                            (При личном приеме товара по количеству и ассортименту)
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                             _______________________________________________________________________________
                        </td>
                    </tr>
                    <tr>
                        <td>Груз получил грузополучатель</td>
                        <td>
                            <div class="central-description">
                                <span>&nbsp;</span>
                            </div>
                        </td>
                        <td>
                            <div class="central-description">&nbsp;</div>
                        </td>
                        <td>
                            <div class="bottom-border">&nbsp;</div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td class="lower-description">
                            должность
                        </td>
                        <td class="lower-description">
                            подпись
                        </td>
                        <td class="lower-description">
                            расшифровка подписи
                        </td>
                    </tr>

                    </tbody>
                </table>
            </td>
        </tr>

        </tbody>
    </table>

    <div style="page-break-after: always;"></div>

    <div style="width: 1050px; text-align: center; margin-top: 20px; margin-left: 150px; padding-top: -50px">
        <div style="font-size: 10pt; display: inline-block; margin-left: 250px;">2. ТРАНСПОРТНЫЙ РАЗДЕЛ</div>
        <div style="font-size: 7pt; display: inline-block; margin-left: 250px;">Оборотная сторона формы № 1-Т</div>
    </div>

    <table style="padding-top: -30px;">
        <tbody>
        <tr class="main-description">
            <td colspan="5">Регистрационный ______________ Серия ______________ № ______________</td>
            <td rowspan="2" style="border-bottom: 1px solid; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid; width: 100px">111</td>
        </tr>
        <tr class="main-description">
            <td colspan="4">Срок доставки груза ____ ______________ г.</td>
            <td style="text-align: right">ТТН № &nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">Организация</td>
            <td colspan="3" class="bottom-border compact-line">{{ $document->owner->name }}, ИНН {{ $document->owner->inn }} тел.: {{ $document->owner->phone }}, {{ $document->owner->account }}</td>
            <td style="text-align: right; width: 70px;" class="compact-line">К путевому листу № &nbsp;</td>
            <td rowspan="2" class="description-2nd-page compact-line">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td colspan="6" class="lower-description">(наименование, адрес, номер телефона, банковские реквизиты)</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">Автомобиль</td>
            <td class="bottom-border compact-line">{{ $document->car_model }}</td>
            <td style="padding-right: -80px;" class="compact-line">Государственный номерной знак</td>
            <td class="bottom-border compact-line" colspan="1" style="text-align: center">{{ $document->car_number }}</td>
            <td class="compact-line">&nbsp;</td>
            <td rowspan="3" class="description-2nd-page compact-line">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">&nbsp;</td>
            <td class="lower-description compact-line">
                <span class="in-one-row">&nbsp;</span>
                <span class="in-one-row">(марка)</span>
            </td>
            <td colspan="4" class="compact-line">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="compact-line">Заказчик (плательщик)</td>
            <td colspan="3" class="bottom-border compact-line" id="customer">вот это вау организация пивоваренный завод  , ИНН 2352525252, my address coder, тел.: 338870, р/с 522365747527547234534534, Spermbank, БИК 03124214, к/с 345678903456789034567890</td>
            <td class="compact-line">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="compact-line">&nbsp;</td>
            <td colspan="3" class="lower-description compact-line">(наименование, адрес, номер телефона, банковские реквизиты)</td>
            <td class="compact-line">&nbsp;</td>
            <td rowspan="2" class="description-2nd-page compact-line">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">Водитель</td>
            <td class="bottom-border compact-line">{{ $document->driver->surname }} {{ $document->driver->name }} {{ $document->driver->patronymic }}</td>
            <td class="compact-line">Удостоверение №</td>
            <td class="bottom-border compact-line">{{ $document->driver->license }}</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">&nbsp;</td>
            <td class="lower-description compact-line">(фамилия, имя, отчество)</td>
            <td colspan="3" class="compact-line">&nbsp;</td>
            <td rowspan="2" class="description-2nd-page compact-line">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td style="width: 130px;" class="compact-line">Лицензионная карточка</td>
            <td class="bottom-border compact-line">стандартная, ограниченная</td>
            <td class="compact-line">Вид перевозки</td>
            <td class="bottom-border compact-line">Коммерческая</td>
            <td class="compact-line" style="text-align: right">Код &nbsp;</td>
        </tr>
        <tr class="main-description">
            <td colspan="5">Регистрационный ______________ Серия ______________ № ______________</td>
            <td rowspan="2" style="border-bottom: 1px solid; border-top: 1px solid; border-left: 1px solid; border-right: 1px solid; width: 100px">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page">Пункт погрузки</td>
            <td style="border-bottom: 1px solid; width: 320px">{{ $requisites->loading_address }}</td>
            <td class="righter-title-2nd-page">Пункт разгрузки</td>
            <td style="border-bottom: 1px solid; width: 320px">{{ $document->receiver->address }}</td>
            <td style="text-align: right">Маршрут &nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">&nbsp;</td>
            <td class="lower-description compact-line">(адрес, номер телефона)</td>
            <td class="righter-title-2nd-page compact-line">&nbsp;</td>
            <td class="lower-description compact-line" colspan="2">(адрес, номер телефона)</td>
            <td class="compact-line" rowspan="2" style="border-bottom: 1px solid; border-left: 1px solid; border-right: 1px solid">&nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">Переадресовка</td>
            <td class="lower-description central-description compact-line">&nbsp;</td>
            <td class="righter-title-2nd-page compact-line">
                <span class="in-one-row" style="width:50px">1. Прицеп</span>
                <span class="in-one-row bottom-border" style="width: 50px; white-space: nowrap">&nbsp;</span>
            </td>
            <td class="compact-line">
                <span class="in-one-row">Государственный номерной знак</span>
                <span class="in-one-row bottom-border" style="width: 25%; white-space: nowrap">{{ $document->trailer_number }}</span>
            </td>
            <td class="compact-line" style="padding-left: -25px; text-align: right">Гаражный номер &nbsp;</td>
        </tr>
        <tr class="main-description">
            <td class="righter-title-2nd-page compact-line">&nbsp;</td>
            <td class="lower-description compact-line">(наименование и адрес нового грузополучателя, номер распоряжения)</td>
            <td class="righter-title-2nd-page compact-line">
                <span class="in-one-row" style="width:50px">&nbsp;</span>
                <span class="lower-description in-one-row">(марка)</span>
            </td>
            <td class="lower-description compact-line">&nbsp;</td>
            <td class="lower-description compact-line">&nbsp;</td>

            <td class="compact-line" rowspan="2" style="border-bottom: 1px solid; border-left: 1px solid; border-right: 1px solid; border-top: 1px solid">&nbsp;</td>

        </tr>

        <tr class="main-description">
            <td colspan="2" class="lower-description compact-line">
                <div style="width: 50%; border-top: 1px solid; text-align: center">
                    (подпись ответственного лица)
                </div>
            </td>
            <td class="righter-title-2nd-page compact-line">
                <span class="in-one-row">2. Прицеп</span>
                <span class="in-one-row">___________</span>
            </td>
            <td class="compact-line">
                <span class="in-one-row">Государственный номерной знак</span>
                <span class="in-one-row">__________________</span>
            </td>
            <td class="compact-line" style="padding-left: -25px; text-align: right">Гаражный номер &nbsp;</td>
        </tr>
        </tbody>
    </table>

    <div style="width: 1050px; text-align: center; margin-top: 20px; margin-left: 150px; padding-top: -20px;">
        <div style="font-size: 7pt; display: inline-block; margin-left: 250px;">СВЕДЕНИЯ О ГРУЗЕ</div>
    </div>

    <table style="font-size: 7pt; text-align: center; margin-top: 5px; padding-top: -5px">
        <tbody>
            <tr class="line-spacing">
                <td class="main-table with-border">Краткое наименование груза</td>
                <td class="main-table with-border">С грузом следуют документы</td>
                <td class="main-table with-border" style="width: 10%;">Вид упаковки</td>
                <td class="main-table with-border">Количество мест</td>
                <td class="main-table with-border">Способ определения массы</td>
                <td class="main-table with-border">Код груза</td>
                <td class="main-table with-border">Номер кон- <br> тейнера</td>
                <td class="main-table with-border">Класс груза</td>
                <td class="main-table with-border">Масса брутто, <br> т</td>
            </tr>
            <tr>
                <td class="main-table with-border">1</td>
                <td class="main-table with-border">2</td>
                <td class="main-table with-border">3</td>
                <td class="main-table with-border">4</td>
                <td class="main-table with-border">5</td>
                <td class="main-table with-border">6</td>
                <td class="main-table with-border">7</td>
                <td class="main-table with-border">8</td>
                <td class="main-table with-border">9</td>
            </tr>
            <tr>
                <td class="main-table with-border">1</td>
                <td class="main-table with-border">Лом </td>
                <td class="main-table with-border">Торг-12 №{{ $document->number }} от {{ $date }}</td>
                <td class="main-table with-border">Навал</td>
                <td class="main-table with-border">&nbsp;</td>
                <td class="main-table with-border">&nbsp;</td>
                <td class="main-table with-border">&nbsp;</td>
                <td class="main-table with-border">&nbsp;</td>
                <td class="main-table with-border">
<?php
$n = $document->totalQuantityFormatted;
$format = floatval(str_replace(" ", "", $n))/1000;
echo $format;
?>
</td>
            </tr>

            <tr>
                <td colspan="4" style="width: 600px;">
                    <div style="display: inline-block; width: 25%">
                        Указанный груз с исправной
                    </div>
                    <div style="display: inline-block; width: 10%">
                        &nbsp;
                    </div>
                    <div style="display: inline-block; width: 15%">
                        Кол-во
                    </div>
                    <div style="display: inline-block; width: 15%">
                        &nbsp;
                    </div>
                    <div style="display: inline-block; width: 25%">
                        Указанный груз с исправной
                    </div>
                    <div style="display: inline-block; width: 10%">
                        &nbsp;
                    </div>
                </td>
                <td style="width: 200px;">
                    <div class="in-one-row left-alignment">Кол-во</div>
                    <div class="in-one-row" style="width: 50px">&nbsp;</div>
                    <div class="in-one-row left-alignment">Количество</div>
                </td>
                <td class="main-table with-border" rowspan="2">&nbsp;</td>
                <td class="main-table with-border" rowspan="2" colspan="2" style="vertical-align: top; border-bottom: 0">Итого: масса брутто, т</td>
                <td class="main-table with-border" style="vertical-align: bottom" rowspan="2">
<?php
echo $format;
?>
</td>
            </tr>

            <tr>
                <td class="compact-line" colspan="4" style="width: 600px;">
                    <div style="display: inline-block; width: 25%">
                        пломбой, тарой и упаковкой
                    </div>
                    <div class="central-description in-one-row" style="width: 10%">
                        &nbsp;
                    </div>
                    <div style="display: inline-block; width: 15%">
                        мест
                    </div>
                    <div class="central-description in-one-row" style="width: 15%">
                        &nbsp;
                    </div>
                    <div style="display: inline-block; width: 25%">
                        пломбой, тарой и упаковкой
                    </div>
                    <div class="central-description in-one-row" style="width: 10%">
                        &nbsp;
                    </div>
                </td>
                <td class="compact-line">
                    <div class="in-one-row left-alignment" style="width: 50px">мест</div>
                    <div class="in-one-row" style="width: 50px; border-bottom: 1px solid">&nbsp;</div>
                    <div class="in-one-row left-alignment">ездок, заездов</div>
                </td>
            </tr>


            <tr>
                <td colspan="4" style="width: 600px;" class="lower-description negative-padding compact-line">
                    <div style="display: inline-block; width: 25%">
                        &nbsp;
                    </div>
                    <div class="in-one-row" style="width: 10%;">
                        (оттиск)
                    </div>
                    <div style="display: inline-block; width: 15%">
                        &nbsp;
                    </div>
                    <div class="in-one-row" style="width: 15%">
                        (прописью)
                    </div>
                    <div style="display: inline-block; width: 25%">
                        &nbsp;
                    </div>
                    <div class="in-one-row" style="width: 10%">
                        (оттиск)
                    </div>
                </td>
                <td class="lower-description compact-line">
                    <div class="in-one-row right-alignment" style="width: 50px">&nbsp;</div>
                    <div class="in-one-row right-alignment negative-padding" style="width: 50px; font-size: 6pt">(прописью)</div>
                    <div class="in-one-row right-alignment">&nbsp;</div>
                </td>
                <td class="compact-line">&nbsp;</td>
                <td class="compact-line" colspan="2">&nbsp;</td>
                <td class="compact-line">&nbsp;</td>
            </tr>

        </tbody>
    </table>

    <table style="font-size: 7pt">
        <tbody>
            <tr>
                <td style="border-right: 1px solid; width: 350px">
                    <span>Массой брутто</span>
                    <span style="border-bottom: 1px solid;">{{ $document->formattedQuantityInLetters }}</span>
                    <span>к перевозке</span>
                </td>
                <td style="border-right: 1px solid; width: 350px">
                    <span>Массой брутто</span>
                    <span style="border-bottom: 1px solid;">{{ $document->formattedQuantityInLetters }}</span>
                </td>
                <td style="width: 350px">Отметки о составленны актах _________________</td>
            </tr>
            <tr>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>&nbsp;</span>
                    <span class="lower-description" style="margin-left: 120px;">(прописью)</span>
                    <span>&nbsp;</span>
                </td>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>&nbsp;</span>
                    <span class="lower-description" style="margin-left: 120px;">(прописью)</span>
                </td>
                <td class="compact-line">&nbsp;</td>
            </tr>
            <tr>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>Сдал</span>
                    <span style="border-bottom: 1px solid;">Начальник ПЗУ №12 Пилютов  ДС</span>
                    <span style="border-bottom: 1px solid;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                    <span>{{ $representative->short_name }}</span>
                </td>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>сдал водитель-экспедитор</span>
                    <span style="border-bottom: 1px solid;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                    <span style="border-bottom: 1px solid;">{{ $document->driver->surname }} {{ $document->driver->initials }}</span>
                </td>
                <td class="compact-line">Транспортные услуги ____________________________</td>
            </tr>
            <tr>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>&nbsp;</span>
                    <span class="lower-description" style="margin-left: 50px">(должность)</span>
                    <span class="lower-description" style="margin-left: 50px">(подпись)</span>
                    <span>&nbsp;</span>
                </td>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>&nbsp;</span>
                    <span class="lower-description" style="margin-left: 130px">(подись)</span>
                    <span class="lower-description" style="margin-left: 20px">(расшифровка подписи)</span>
                </td>
                <td class="compact-line">____________________________________________________</td>
            </tr>
            <tr>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>Принял водитель-экспедитор</span>
                    <span style="border-bottom: 1px solid;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                    <span style="border-bottom: 1px solid;">{{ $document->driver->surname }} {{ $document->driver->initials }}</span>
                    <span style="font-size: 6px">место для штампа</span>
                </td>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>Принял</span>
                    <span style="border-bottom: 1px solid;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                    <span style="border-bottom: 1px solid;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                    <span style="border-bottom: 1px solid;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                    <span style="font-size: 6px">место для штампа</span>
                </td>
                <td class="compact-line">____________________________________________________</td>
            </tr>
            <tr>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>&nbsp;</span>
                    <span class="lower-description" style="margin-left: 150px;">(подпись)</span>
                    <span class="lower-description" style="margin-left: 15px;">(расшифровка подписи)</span>
                    <span style="font-size: 6px">&nbsp;</span>
                </td>
                <td class="compact-line" style="border-right: 1px solid;">
                    <span>&nbsp;</span>
                    <span class="lower-description" style="margin-left: 40px">(должность)</span>
                    <span class="lower-description" style="margin-left: 15px">(подпись)</span>
                    <span class="lower-description" style="margin-left: 10px">(расшифровка подписи)</span>
                </td>
                <td>____________________________________________________</td>
            </tr>
        </tbody>
    </table>

    <table style="font-size: 7pt; text-align: center">
        <tbody>
            <tr>
                <td colspan="10" class="main-table with-border">ПОГРУЗОЧНО-РАЗГРУЗОЧНЫЕ ОПЕРАЦИИ</td>
            </tr>
            <tr>
                <td rowspan="2" class="main-table with-border">операция</td>
                <td rowspan="2" class="main-table with-border">исполнитель (автовладелец, <br> получатель, отправитель)</td>
                <td rowspan="2" class="main-table with-border">дополнительные операции <br> (наименование, количество)</td>
                <td rowspan="2" class="main-table with-border">механизм, грузоподъемность, <br> емкость ковша</td>
                <td colspan="2" class="main-table with-border">способ</td>
                <td colspan="2" class="main-table with-border">дата (число, месяц), время, ч, мин.</td>
                <td rowspan="2" class="main-table with-border">время допол- <br> нительных <br> операций, мин. </td>
                <td rowspan="2" class="main-table with-border">подпись ответ- <br> ственного лица </td>
            </tr>

            <tr>
                <td class="main-table with-border">ручной, механизированный, наливом, самосвалом</td>
                <td class="main-table with-border">код</td>
                <td class="main-table with-border">прибытия</td>
                <td class="main-table with-border">убытия</td>
            </tr>

            <tr>
                <td class="main-table with-border">10</td>
                <td class="main-table with-border">11</td>
                <td class="main-table with-border">12</td>
                <td class="main-table with-border">13</td>
                <td class="main-table with-border">14</td>
                <td class="main-table with-border">15</td>
                <td class="main-table with-border">16</td>
                <td class="main-table with-border">17</td>
                <td class="main-table with-border">18</td>
                <td class="main-table with-border">19</td>
            </tr>
            <tr>
                <td class="main-table with-border">погрузка</td>
                <td class="main-table with-border left-alignment">
                    <div style="line-height: 7px;">{{ $requisites->full_name }}</div>
                </td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
            </tr>
            <tr>
                <td class="main-table with-border">разгрузка</td>
                <td class="main-table with-border left-alignment">{{ $document->receiver->name }}</td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
            </tr>
        </tbody>
    </table>

    <table style="font-size: 7pt; text-align: center; margin-top: 5px; width: 100%">
        <tbody>
            <tr style="line-height: 10px">
                <td colspan="13" class="main-table with-border">ПРОЧИЕ СВЕДЕНИЯ (заполняется организацией, владельцем автотранспорта)</td>
                <td class="only-right-border" style="width: 20%;">
                    Таксировка: ______________________
                </td>
            </tr>
            <tr style="line-height: 7px;">
                <td colspan="5" class="main-table with-border">расстояние перевозки по группам дорог, км</td>
                <td rowspan="2" class="main-table with-border">код экспеди- <br> рования <br> груза</td>
                <td colspan="2" class="main-table with-border">за транспортные услуги</td>
                <td rowspan="2" class="main-table with-border" style="width: 10%;">сумма штрафа за непра вильное оформление документов, руб. коп.</td>
                <td colspan="2" class="main-table with-border">поправочный коэффициент</td>
                <td colspan="2" class="main-table with-border">время простоя, ч, мин.</td>
                <td class="only-right-border">
                    <div class="central-description" style="margin-left: 10px">&nbsp;</div>
                </td>
            </tr>
            <tr>
                <td class="main-table with-border">всего</td>
                <td class="main-table with-border">в гор.</td>
                <td class="main-table with-border">I гр.</td>
                <td class="main-table with-border">II гр.</td>
                <td class="main-table with-border">III гр.</td>
                <td class="main-table with-border">с клиента</td>
                <td class="main-table with-border">причитается <br> водителю</td>
                <td class="main-table with-border">расценка водителю</td>
                <td class="main-table with-border">основной <br> тариф</td>
                <td class="main-table with-border">под погруз- <br> кой</td>
                <td class="main-table with-border">под раз- <br> грузкой</td>
                <td class="only-right-border">
                    <div class="central-description" style="margin-left: 10px">&nbsp;</div>
                </td>
            </tr>
            <tr class="line-spacing">
                <td class="main-table with-border">20</td>
                <td class="main-table with-border">21</td>
                <td class="main-table with-border">22</td>
                <td class="main-table with-border">23</td>
                <td class="main-table with-border">24</td>
                <td class="main-table with-border">25</td>
                <td class="main-table with-border">26</td>
                <td class="main-table with-border">27</td>
                <td class="main-table with-border">28</td>
                <td class="main-table with-border">29</td>
                <td class="main-table with-border">30</td>
                <td class="main-table with-border">31</td>
                <td class="main-table with-border">32</td>
                <td class="only-right-border">
                    <div class="central-description" style="margin-left: 10px">&nbsp;</div>
                </td>
            </tr>
            <tr class="line-spacing">
                <td class="main-table with-border">&nbsp;</td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="only-right-border">
                    <div class="central-description" style="margin-left: 10px">&nbsp;</div>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="font-size: 7pt; text-align: center; margin-top: 5px; width: 100%">
        <tbody>
            <tr class="line-spacing">
                <td rowspan="2" class="main-table with-border" style="width: 100px">Расчет стоимости</td>
                <td class="main-table with-border">За тонны</td>
                <td class="main-table with-border">За тонно-км</td>
                <td class="main-table with-border">Погрузочно- <br> разгрузочные <br> работы, тонн</td>
                <td class="main-table with-border">Недогрузка <br> автомобиля и <br> прицепа</td>
                <td class="main-table with-border">Экспеди- <br> рование</td>
                <td colspan="2" class="main-table with-border">Сверхнормативный простой, ч, <br> мин. при</td>
                <td class="main-table with-border">За сроч- <br> ность заказа</td>
                <td class="main-table with-border">За специ- <br> альный <br> транспорт</td>
                <td class="main-table with-border">Прочие доплаты</td>
                <td class="main-table with-border">Всего</td>
                <td class="only-right-border" style="width: 300px">
                    <div class="central-description" style="margin-left: 10px;">&nbsp;</div>
                </td>
            </tr>
            <tr class="line-spacing">
                <td class="main-table with-border">33</td>
                <td class="main-table with-border">34</td>
                <td class="main-table with-border">35</td>
                <td class="main-table with-border">36</td>
                <td class="main-table with-border">37</td>
                <td class="main-table with-border">38</td>
                <td class="main-table with-border">39</td>
                <td class="main-table with-border">40</td>
                <td class="main-table with-border">41</td>
                <td class="main-table with-border">42</td>
                <td class="main-table with-border">43</td>
                <td class="only-right-border" style="width: 300px">
                    <div class="central-description" style="margin-left: 10px;">&nbsp;</div>
                </td>
            </tr>
            <tr class="line-spacing">
                <td class="main-table with-border">Выполнено</td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="only-right-border" style="width: 300px">
                    <div class="central-description" style="margin-left: 10px;">&nbsp;</div>
                </td>
            </tr>
            <tr class="line-spacing">
                <td class="main-table with-border">К расценке, руб. коп.</td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="only-right-border" style="width: 300px">
                    <div class="central-description" style="margin-left: 10px;">&nbsp;</div>
                </td>
            </tr>
            <tr class="line-spacing">
                <td class="main-table with-border">К оплате, руб. коп.</td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="main-table with-border"></td>
                <td class="only-right-border" style="width: 300px">
                    <div style="margin-left: 10px;">Таксировщик ______________ &nbsp; &nbsp; _________________________ <br>
                        <span style="font-size: 6pt; margin-left: 50px;">(подпись)</span> <span style="font-size: 6pt; margin-left: 30px">(расшифровка подписи)</span></div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
