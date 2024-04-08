
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" href="slettbrukerstyle.css">
</head>
<body>
    <div>
        <h1>Delete Account</h1>
        <!-- knapp for å slette konto og en "popup" dobbelsjekking for bekrefte -->
            <form action="slettbruker.php" method="post" onsubmit="return confirm('Er du sikker du vil slette kontoen din? sletting av konto kan reverseres')">
                <button type="submit">Delete Account</button>
            </form>
        </div>
</body>
</html>
