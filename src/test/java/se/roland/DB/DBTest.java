package se.roland.DB;

import org.junit.Test;

import java.sql.PreparedStatement;
import java.sql.SQLException;

import static org.junit.Assert.*;

public class DBTest {

/*
    @Test
    public void testConnection() throws ClassNotFoundException, SQLException {
        Class.forName("com.mysql.jdbc.Driver");
        var db = new DB("jdbc:mysql://192.168.0.21:3306/shipment_docs", "root", "root");
        assertNotEquals(null, db.executor.getConn());

    }

    @Test
    public void getCustomer() throws ClassNotFoundException, SQLException {
        String name = "супер организация";
        Class.forName("com.mysql.jdbc.Driver");
        var db = new DB("jdbc:mysql://192.168.0.21:3306/shipment_docs", "root", "root");
        assertNotEquals(null,db.getCustomer(name));
        assertTrue(db.getCustomer(name).next());


    }

    @Test
    public void formatCustomer() throws ClassNotFoundException, SQLException, InterruptedException {
        String name = "супер организация";
        Class.forName("com.mysql.jdbc.Driver");
        var db = new DB("jdbc:mysql://192.168.0.21:3306/shipment_docs", "root", "root");
        String expected = "супер организация, ИНН 2352525252, my address coder, тел.: 338870, р/с 522365747527547234534534, Spermbank, БИК 03124214, к/с 345678903456789034567890";
        assertEquals(expected,db.formatCustomer(name));
    }

    @Test
    public void getCustomers() throws ClassNotFoundException, SQLException, InterruptedException {
        String name = "супер организаци пывоаыврпаывалывпплаовлпрваыпрвалоырплваырплдвраыплдваыврдваыд рловадлр ";
        Class.forName("com.mysql.jdbc.Driver");
        var db = new DB("jdbc:mysql://192.168.0.21:3306/shipment_docs", "root", "root");
        assertNotEquals(null,db.getCustomers());

    }*/
}