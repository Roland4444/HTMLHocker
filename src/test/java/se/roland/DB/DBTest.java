package se.roland.DB;

import org.junit.Test;

import java.sql.SQLException;

import static org.junit.Assert.*;

public class DBTest {


    @Test
    public void testConnection() throws ClassNotFoundException, SQLException {
        Class.forName("com.mysql.jdbc.Driver");
        var db = new DB("jdbc:mysql://192.168.0.21:3306/shipment_docs", "root", "root");
        assertNotEquals(null, db.executor.getConn());

    }
}