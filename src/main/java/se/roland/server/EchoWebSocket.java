package se.roland.server;
import org.eclipse.jetty.websocket.api.Session;
import org.eclipse.jetty.websocket.api.annotations.OnWebSocketClose;
import org.eclipse.jetty.websocket.api.annotations.OnWebSocketConnect;
import org.eclipse.jetty.websocket.api.annotations.OnWebSocketMessage;
import org.eclipse.jetty.websocket.api.annotations.WebSocket;
import se.roland.HTMLHooker;
import se.roland.readfile.Readfile;
import java.io.IOException;
import java.util.Queue;
import java.util.concurrent.ConcurrentLinkedQueue;
@WebSocket(maxIdleTime=50000000)
public class EchoWebSocket {
    // Store sessions if you want to, for example, broadcast a message to all users
    private static final Queue<Session> sessions = new ConcurrentLinkedQueue<>();
    HTMLHooker hocker = new HTMLHooker();
    public static String patchfile ;
    public static String patchTag ;
    static {
        Readfile rf = new Readfile("setts.ini");
        patchfile=rf.readField("PatchPHP");
        patchTag=rf.readField("PatchTag");
        System.out.println("patching file=>"+patchfile);
        System.out.println("patching tag=>"+patchTag);
    }
    @OnWebSocketConnect
    public void connected(Session session) {
        sessions.add(session);
        sessions.forEach(a-> {
            try {
                a.getRemote().sendString("hello!!!");
            } catch (IOException e) {
                e.printStackTrace();
            }
        });
    }
    @OnWebSocketClose
    public void closed(Session session, int statusCode, String reason) {
        sessions.remove(session);
    }
    @OnWebSocketMessage
    public void message(Session session, String message) throws IOException {
        System.out.println("message=>"+message);
        System.out.println(patchfile);
        System.out.println(patchTag);
        hocker.patchFile(patchfile, patchTag, message);
        System.out.println("end");
    }
}