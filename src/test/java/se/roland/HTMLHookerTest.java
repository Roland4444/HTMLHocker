package se.roland;

import org.junit.Test;

import java.io.IOException;

import static org.junit.Assert.*;

public class HTMLHookerTest {
   /* String tag = "<bar22>";
    String input= """
        12
        <bar22>12655</bar22>
         
        </tr>""";
    String valuetowrite = "14";
    String etalon =  """
        12
        <bar22>14</bar22>
         
        </tr>""";


    String tag2 = "<td colspan=\"3\" class=\"bottom-border compact-line\" id=\"customer\">";
    String input2= """
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
                          <td colspan="3" class="bottom-border compact-line" id="customer">
                              {{ $requisites->full_name }}, ИНН {{ $requisites->inn }}, {{ $requisites->address }}, тел.: {{ $requisites->phone }}, {{ $requisites->account }}
                          </td>
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
                      </tr>""";
    String valuetowrite2 = "14";
    String etalon2 =  """
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
                          <td colspan="3" class="bottom-border compact-line" id="customer">14</td>
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
                      </tr>""";*/
   /* @Test
    public void patchFile() {
        HTMLHooker hocker = new HTMLHooker();
        assertEquals(etalon, hocker.patchString(input, tag, valuetowrite));

    }


    @Test
    public void patchFile2() {
        HTMLHooker hocker = new HTMLHooker();
        assertEquals(etalon2, hocker.patchString(input2, tag2, valuetowrite2));

    }

    @Test
    public void testPatchFile() throws IOException {
        String filename = "/var/www/shipmentdocs/resources/views/packing-transport-document.blade.php";
        HTMLHooker hocker = new HTMLHooker();
        hocker.patchFile(filename, tag2, valuetowrite2);
    }*/
    @Test
    public void patchFileNull() {
        HTMLHooker hocker = new HTMLHooker();
        assertEquals(null, hocker.patchString(null, null, null));

    }
}