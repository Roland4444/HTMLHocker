package se.roland.DB;
import fr.roland.DB.Executor;
import java.sql.PreparedStatement;
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
        while (select.next())
            arr.add(formatCustomer(select.getString("name")));
        return arr;
    }

    public ArrayList getCustomers(String current) throws SQLException, InterruptedException {
        var arr = new ArrayList();
        System.out.println("Current>>"+current);
        arr.add(current);
        var select = executor.submit("select * from customer");
        while (select.next()) {
            var cur = formatCustomer(select.getString("name"));
            if (!current.equals(cur))
                arr.add(formatCustomer(select.getString("name")));
        }
        System.out.println("ARR>>"+arr);
        return arr;
    }
    public String formatCustomer(String name) throws SQLException, InterruptedException {
        var rs = getCustomer(name);
        var sb = new StringBuilder();
        if (rs.next())
        for (int i= 0; i<dict().length; i++)
            sb.append(dict()[i]+rs.getString(fields()[i]));
        return sb.toString();
    };

    public ResultSet getCustomer(String name) throws SQLException {
        var arr = new ArrayList();
        arr.add(name);
        System.out.println(arr);
        return executor.executePreparedSelect("SELECT * FROM customer WHERE TRIM(name) = TRIM(?)", arr);
    };

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

    public void update(ArrayList<String> data) throws SQLException {
        PreparedStatement stmt = executor.getConn().prepareStatement("update customer set name = ?, inn=?, address =?, tel =?, acc=?, bank = ?, bik=?, koracc = ?  where TRIM(name)=TRIM(?)");
        for (int i=0; i<9; i++)
            stmt.setString(i+1, data.get(i));
        System.out.println(stmt);
        stmt.executeUpdate();
    }
    public void create(ArrayList<String> data) throws SQLException {
        PreparedStatement stmt = executor.getConn().prepareStatement("insert into customer values (null,?,?,?,?,?,?,?,?)");
        for (int i=0; i< fields().length; i++)
            stmt.setString(i+1, data.get(i));
        stmt.executeUpdate();
    }

    public void delete(String name) throws SQLException {
        PreparedStatement stmt = executor.getConn().prepareStatement("delete from customer where TRIM(name)=TRIM(?)");
        stmt.setString(1, name);
        stmt.executeUpdate();
        System.out.println("delete");
    }
}
