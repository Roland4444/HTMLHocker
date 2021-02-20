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