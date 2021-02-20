package se.roland;
import java.io.FileOutputStream;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
public class HTMLHooker {
    public void patchFile(String filename, String Tag, String patchedBody) throws IOException {
        var str = patchString(new String(Files.readAllBytes(Path.of(filename))), Tag, patchedBody);
        var fos = new FileOutputStream(filename);
        fos.write(str.getBytes());
        fos.close();
        System.out.println("patch success");
    }
    public String patchString(String input, String Tag, String patched) {
        if (input == null) return null;
        StringBuilder sb = new StringBuilder();
        var index = input.indexOf(Tag);
        var sub = input.substring(index);
        var index2 = sub.indexOf("</");
        sb.append(input.substring(0, index + Tag.length()));
        sb.append(patched);
        sb.append(sub.substring(index2));
        return sb.toString();
    }
    public String readCurrent(String filename, String tag) throws IOException {
        var str = new String(Files.readAllBytes(Path.of(filename)));
        var index = str.indexOf(tag);
        var sub = str.substring(index+tag.length());
        var index2 = sub.indexOf("</");
        var res = sub.substring(0,index2);
        return res;
    }

}