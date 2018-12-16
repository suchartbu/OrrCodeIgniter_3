
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

/**
 * คลาสเพื่อให้ php เรียกใช้คำสั่ง executeQuery เพื่อ SELECT ข้อมูล 
 * "SELECT * FROM jdbc_test"
 * @author suchart bunhachirat
 */
public class execQuery {

    static final String DB_URL
            = "jdbc:as400://10.1.99.2/ttrpf";
    static final String DB_USER = "orrconn";
    static final String DB_PASSWD = "xoylfk";

    /**
     * @param args the command line arguments - SQL command. - user password for
     * connect DB.
     */
    public static void main(String[] args) {
        String sql = "SELECT * FROM jdbc_test WHERE id = 0";
        if (args.length > 0) {
            sql = args[0];
        }
        Connection connection = null;
        Statement statement = null;
        ResultSet resultSet = null;

        try {
            connection = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWD);
            statement = connection.createStatement();
            resultSet = statement.executeQuery(sql);
            System.out.println("[{\"Status\":\"Success\"}]");
            while (resultSet.next()) {
                System.out.printf("%s\t%s\t%s\n",
                        resultSet.getString(1),
                        resultSet.getString(2),
                        resultSet.getString(3));
            }

        } catch (SQLException ex) {
            System.out.println("[{\"Status\":\"Fail\"}]");
            System.out.println(ex);
        } finally {
            try {
                resultSet.close();
                statement.close();
                connection.close();
            } catch (SQLException ex) {
                System.out.println("[{\"Status\":\"Fail\"}]");
                System.out.println(ex);
            }
        }
    }
}
