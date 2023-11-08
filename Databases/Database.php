<?php
class Database {
    protected $conn = null;
    public function __construct() {
        try {
            $env = parse_ini_file(__DIR__ . '/../.env');
            echo "init started";
            $server = $env['server'];
            $username = $env['username'];
            $password = $env['password'];
            $database = $env['database'];
            $this->conn = new mysqli($server, $username, $password, $database);

            if (mysqli_connect_errno()) {
                throw new Exception("Could not connect to database.");
            }       
            echo "db connected";    
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    function insert_table() {
        echo "table view begin";
        $sql="INSERT INTO Tasks (Task_code, Task_time) VALUES ('Task_003', 9);";
        echo "table view cont";
        if ($this->conn->query($sql)) {
            echo "values inserted1";
        } else {
            echo "insertion failed1";
        }
    }

    function view_table() {
        $sql="SELECT Task_ID, Task_code, Task_time FROM Tasks;";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["Task_ID"]. " - Name: " . $row["Task_code"]. " " . $row["Task_time"]. "<br>";
            }
          }
    }
}
?>
