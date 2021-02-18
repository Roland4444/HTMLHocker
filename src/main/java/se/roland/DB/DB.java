package se.roland.DB;

import fr.roland.DB.Executor;

import java.sql.SQLException;
import java.util.ArrayList;

public class DB {
    public Executor executor;
    public DB(String url, String login, String pass) throws SQLException {
        executor  = new Executor(url, login, pass) ;
    }

    public ArrayList getCustomers() throws SQLException {
        var arr = new ArrayList();
        var select = executor.submit("select * from customer");
        while (select.next())
            arr.add(select.getString("name"));
        return arr;
    };

}
