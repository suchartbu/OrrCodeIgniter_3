
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;

/**
 * คลาสเพื่อให้ php เรียกใช้คำสั่ง executeQuery
 *
 * @author suchart bunhachirat
 */
public class execQuery {

    static String DB_SQL = "SELECT * FROM jdbc_test WHERE id = 0";
    static String DB_USER = "orrconn";
    static String DB_PASSWD = "xoylfk";
    static String DB_URL
            = "jdbc:as400://10.1.99.2/ttrpf";

    /**
     * @param args the command line arguments - SQL command. - user password for
     * connect DB.
     */
    public static void main(String[] args) {
        //DB_SQL = "SELECT * FROM jdbc_test WHERE id = 0";
        if (args.length == 4) {
            DB_SQL = args[0];
            DB_USER = args[1];
            DB_PASSWD = args[2];
            DB_URL = args[3];
        } else {
            System.out.println("");
            System.out.println("Usage:");
            System.out.println("");
            System.out.println("   java -cp libraries jdb.jar execQuery SQL USER PASS URL");
            return;
        }
        Connection connection = null;
        Statement statement = null;
        ResultSet resultSet = null;

        try {
            connection = DriverManager.getConnection(DB_URL, DB_USER, DB_PASSWD);
            statement = connection.createStatement();
            resultSet = statement.executeQuery(DB_SQL);
            ResultSetMetaData rsmd = resultSet.getMetaData();
            int columnCount = rsmd.getColumnCount();
            String[] columnLabels = new String[columnCount];
            int[] columnWidths = new int[columnCount];
            for (int i = 1; i <= columnCount; ++i) {
                columnLabels[i - 1] = rsmd.getColumnLabel(i);
                columnWidths[i - 1] = Math.max(columnLabels[i - 1].length(),
                        rsmd.getColumnDisplaySize(i));
            }
            System.out.println(columnLabels[0]);

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
