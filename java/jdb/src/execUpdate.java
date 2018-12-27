
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

/**
 * คลาสเพื่อทำงานกับ JDBC SQL USER PASSWORD URL
 *
 * @author suchart bunhachirat
 */
public class execUpdate {

    static String DB_SQL = "";
    static String DB_USER = "orrconn";
    static String DB_PASSWD = "xoylfk";
    static String DB_URL
            = "jdbc:as400://10.1.99.2/ttrpf";

    /**
     *
     * @param args
     */
    public static void main(String[] args) {
        if (args.length > 0) {
            DB_SQL = args[0];
            DB_USER = args[1];
            DB_PASSWD = args[2];
            DB_URL = args[3];

        }
        Connection connection = null;
        Statement statement = null;
        /**
         * Testing String DB_SQL = "INSERT INTO jdbc_test (id,name)
         * VALUES('5','ทดสอบจาก Java6')";
         */
        try {
            connection = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWD);
            statement = connection.createStatement();
            statement.executeUpdate(DB_SQL);
            System.out.println("{\"status\":\"success\"},{\"data\":\"\"}");
        } catch (SQLException ex) {
            System.out.println("{\"status\":\"fail\"},{\"data\":\"\"},{\"info\":\"" + ex + "test info36\"}");
            //System.out.println(ex);
        } finally {
            try {
                statement.close();
                connection.close();
            } catch (SQLException ex) {
                System.out.println("{\"status\":\"fail\"},{\"data\":\"\"},{\"info\":\"test info43\"}");
                //System.out.println(ex);
            }
        }
    }
}
