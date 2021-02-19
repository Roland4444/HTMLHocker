package se.roland.server;
import se.roland.DB.DB;
import spark.ModelAndView;
import spark.template.velocity.VelocityTemplateEngine;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
import static spark.Spark.*;
public class Server {
    public static Map<String, Object> model = new HashMap<>();
    public static void main(String[] args) throws SQLException {
        staticFiles.location("/public");
        webSocket("/echo", EchoWebSocket.class);
        var db = new DB("jdbc:mysql://192.168.0.21:3306/shipment_docs", "root", "root");
        get("/", (req, res) -> {
            model.clear();
            model.put("customers", db.getCustomers());
            return new VelocityTemplateEngine().render(
                    new ModelAndView(model, "index.html"));
        });
        get("/customers", (req, res) -> {
            model.clear();
            String name = req.queryParams("name");
            System.out.println(name);
            var rs = db.getCustomer(name);
            if (rs.next())
                for (var a : db.fields())
                    model.put(a, rs.getString(a));
            return new VelocityTemplateEngine().render(
                    new ModelAndView(model, "customers.html"));
        });
        /////  redirect.post("/avs", "https://db.avs.com.ru/shipment-docs/document/clear/yes");
        post("/avs", (req, res) -> {
            ArrayList <String> data = new ArrayList<>();
            for (var i:db.fields())
                data.add(req.queryParams(i));
            data.add(req.queryParams("oldname"));
            System.out.println("DATA=>"+data);
            db.update(data);
            res.redirect("https://db.avs.com.ru/shipment-docs/document/clear/yes");
            return "OK;";
        });
    }
}
