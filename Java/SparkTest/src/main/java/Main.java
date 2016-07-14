import spark.Request;
import spark.Response;
import spark.Route;

import static spark.Spark.*;
/**
 * Created by iman on 7/14/16.
 */

public class Main {
    public static void main(String[] args) {
        port(4500);
        get("hello", ((request, response) -> "Hello World"));

    }

}
