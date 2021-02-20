package se.roland.server;
import spark.ModelAndView;
import spark.template.velocity.VelocityTemplateEngine;
import java.sql.SQLException;
import java.util.HashMap;
import java.util.Map;
import static spark.Spark.*;
public class Server {
    public static Map<String, Object> model = new HashMap<>();
    private static String keyStorePath="keystore.jks";
    private static String keyStorePassword="123abc";
    private static String trustStorePath="keystore.jks";
    private static String trustStorePassword="123abc";
    public static void main(String[] args) {
        port(4568);
        secure(keyStorePath, keyStorePassword, trustStorePath, trustStorePassword);
        staticFiles.location("/public");
        webSocket("/echo", EchoWebSocket.class);
        get("/", (req, res) -> {
            model.clear();
            return new VelocityTemplateEngine().render(
                    new ModelAndView(model, "index.html"));
        });
    }
}
