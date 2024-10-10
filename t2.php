<? php 
error_reporting(E_ALL);
ini_set('display_errors',1);
include = 'conn.php';
$aid = isset ($_GET(A_ID)) ? $_GET(A_ID): null;
serachResults = '';
if ($aid){
    echo ("Searching for Accession ID:" htmlspechialchars ($aid));
    $stmt = mysqli->prepare ("SELECT `COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8` FROM nucleotidesequence WHERE `COL 1` = ?");

    if (!$stmt){
        echo "Prepare failed: (" . $mysqli_errno")" . $mysqli->error;
        } else {
            $stmt -> bind_param ("s", $aid);
            $stmt -> execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $searchResults = '<table style="width:100%; border-collapse: collapse;">';
                $searchResults .= '<tr style="background-color: #f2f2f2;">';
                $searchResults .= '<th>COL 1</th>';
                $searchResults .= '<th>COL 2</th>';
                $searchResults .= '<th>COL 3</th>';
                $searchResults .= '<th>COL 4</th>';
                $searchResults .= '<th>COL 5</th>';
                $searchResults .= '<th>COL 6</th>';
                $searchResults .= '<th>COL 7</th>';
                $searchResults .= '<th>COL 8</th>'; 
                $searchResults .= '</tr>';
    
                while ($row = $result->fetch_assoc()) {
                    $searchResults .= '<tr>';
                    $searchResults .= '<td>' . htmlspecialchars($row['COL 1']) . '</td>';
                    $searchResults .= '<td>' . htmlspecialchars($row['COL 2']) . '</td>';
                    $searchResults .= '<td>' . htmlspecialchars($row['COL 3']) . '</td>';
                    $searchResults .= '<td>' . htmlspecialchars($row['COL 4']) . '</td>';
                    $searchResults .= '<td>' . htmlspecialchars($row['COL 5']) . '</td>';
                    $searchResults .= '<td>' . htmlspecialchars($row['COL 6']) . '</td>';
                    $searchResults .= '<td>' . htmlspecialchars($row['COL 7']) . '</td>';
                    $searchResults .= '<td>' . nl2br(htmlspecialchars($row['COL 8'])) . '</td>'; 
                    $searchResults .= '</tr>';
                }
                $searchResults .= '</table>';
            } else {
                $searchResults = '<p>No results found for Accession ID: ' . htmlspecialchars($aid) . '</p>';
            }
    
            $stmt->close();
        }
    }
    ?>  
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search - NCBI</title>
        <style>
            table {
            margin-top: 20px;
            border: 1px solid #ddd;
            width: 100%;
        }

        body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }

            .navbar {
                display: flex;
                justify-content: center;
                background-color: #005B94;
                padding: 10px 0;
            }
    
            .container {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
    
            h2 {
                color: #003366;
            }
    
            .input-submit {
                background-color: #005B94;
                color: white;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
                border-radius: 4px;
                font-weight: bold;
                margin-top: 10px;
            }
            
        </style>
    </head>
    <body>
    
    <header>
        <h1>NCBI Search</h1>
        <p>Find relevant biological information quickly and easily.</p>
    </header>
    <div class="navbar">
        <a href="about.php">About NCBI</a>
        <a href="contact.php">Contact Us</a>
        <a href="help.php">Help and Support</a>
        <a href="search.php">Search NCBI Databases</a>
    </div>
    <div class="container">
        <h2>Search NCBI Databases</h2>
        <form action="" method="GET">
            <input type="text" name="A_id" placeholder="Enter your Accession ID" required>
            <input type="submit" value="Submit" class="input-submit"> <!-- Corrected value here -->
        </form>
    
        <?php if ($searchResults): ?>
            <div>
                <?php echo $searchResults; ?>
            </div>
        <?php endif; ?>
    </div>
    
    </body>
    </html>
    