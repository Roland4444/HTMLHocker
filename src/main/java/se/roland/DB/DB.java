package se.roland.DB;

import fr.roland.DB.Executor;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

public class DB {
    public Executor executor;

    public DB(String url, String login, String pass) throws SQLException {
        executor = new Executor(url, login, pass);
    }

    public ArrayList getCustomers() throws SQLException, InterruptedException {
        var arr = new ArrayList();
        var select = executor.submit("select * from customer");
        while (select.next()) {
            arr.add(formatCustomer(select.getString("name")));
        }
        return arr;
    }

    public String formatCustomer(String name) throws SQLException, InterruptedException {
        var rs = getCustomer(name);

        var sb = new StringBuilder();
        if (rs.next())
        for (int i= 0; i<dict().length; i++)
            sb.append(dict()[i]+rs.getString(fields()[i]));

    return sb.toString();
    }

    ;

    public ResultSet getCustomer(String name) throws SQLException {
        var arr = new ArrayList();
        arr.add(name);
        return executor.executePreparedSelect("select * from customer where name=?", arr);
    }

    ;

    public String[] fields() {
        String[] arr = new String[8];
        arr[0] = "name";
        arr[1] = "inn";
        arr[2] = "address";
        arr[3] = "tel";
        arr[4] = "acc";
        arr[5] = "bank";
        arr[6] = "bik";
        arr[7] = "koracc";
        return arr;
    }

    public String[] dict() {
        String[] arr = new String[8];
        arr[0] = "";
        arr[1] = ", ИНН ";
        arr[2] = ", ";
        arr[3] = ", тел.: ";
        arr[4] = ", р/с ";
        arr[5] = ", ";
        arr[6] = ", БИК ";
        arr[7] = ", к/с ";
        return arr;
    }

}
