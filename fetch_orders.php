<?php
header("Content-Type: application/json");

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// MySQL-gegevens
$hostname = "ID300149_preorders.db.webhosting.be";
$database = "ID300149_preorders";
$username = "ID300149_preorders";
$password = $_ENV["DB_PASSWORD"];

try {
    // Maak een verbinding met de MySQL-database
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Haal alle pre-orders op uit de database
    $statement = $conn->prepare("SELECT * FROM preorders");
    $statement->execute();
    $orders = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Stuur de pre-orders als JSON naar de client
    echo json_encode($orders);
} catch (PDOException $e) {
    // Stuur een foutbericht als JSON naar de client
    echo json_encode(["error" => "Er is een fout opgetreden: " . $e->getMessage()]);
}
?>
