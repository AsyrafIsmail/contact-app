class Database {
    private function getConnection() {
        $host = "localhost";
        $dbname = "db_perpus";
        $username = "root";
        $password = "";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        }
    }
}