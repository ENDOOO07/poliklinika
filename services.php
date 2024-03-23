<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee Data</title>
        <script src="Service.php" defer></script>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }

            h2 {
                color: #333;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #f5f5f5;
            }
        </style>
    </head>

    <body>
        <h2>Te dhenat per pacientet</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Emri</th>
                    <th>Mbiemri</th>
                    <th>Datatime</th>
                    <th>Reparti</th>
                    <th>Dr.</th>
                </tr>
            </thead>
            <tbody>
            <?php include 'Service.php'; ?>
            </tbody>
        </table>
    </body>

</html>