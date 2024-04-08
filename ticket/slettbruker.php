<?php
// Inkluderer filen for databaseforbindelse
include 'db_connect.php';

session_start();

// Sjekker om brukeren ikke har en gyldig sesjon (er ikke pålogget)
if (!isset($_SESSION['userID'])) {
    // Omdirigerer til login.html hvis ikke pålogget
    header("Location: login.html");
    exit();
}

// Sjekker om skjemaet er sendt med POST-metoden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Henter brukerens ID fra sesjonen
    $id = $_SESSION['id'];

    // forberder en kommando for å slette id og all sammenhegnende data
    $delete_sql = "DELETE FROM brukere WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);

    // Binder brukerens id til kommando
    $stmt->bind_param("i", $id);

    // Utfører kommando for å slette bruker
    if ($stmt->execute()) {
        // fjerner sesjonen og sender burkeren til index.php etter vellykket sletting
        session_destroy();
        header("Location: index.php");
        exit();
    } else {
        // Viser feilmelding
        echo "Error";
    }
    // lukker kommadno
    $stmt->close();
}

// Lukker databaseforbindelsen
$conn->close();
?>

