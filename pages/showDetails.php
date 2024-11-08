
<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
    header('location:../index.php');
    exit();
}

$name = $age = $gender = "---";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Capture and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
}

if (isset($_POST['clear_data'])) {
    $name = $age = $gender = "---";
}

if (isset($_POST['exit'])) {
    header('Location: ../index.php'); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Details Page</title>
    <?php include('../layout/style.php'); ?>
    <style>
        
        body {
            background: linear-gradient(135deg, black, blue, violet);
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        
        .details-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.6); 
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .details-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #f0f0f0;
            border-bottom: 2px solid violet;
            padding-bottom: 10px;
        }

        .details-container p {
            font-size: 18px;
            line-height: 1.6;
        }

        .details-container p strong {
            color: #a9a9ff; 
        }

       
        .details-container button {
            margin: 15px 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s;
        }

        .details-container .clear-button {
            background-color: #ff6b6b; 
        }

        .details-container .clear-button:hover {
            background-color: #ff4d4d;
        }

        .details-container .exit-button {
            background-color: #4c6ef5;
        }

        .details-container .exit-button:hover {
            background-color: #3742fa;
        }
    </style>
</head>
<body class="sb-nav-fixed">
    <?php include('../layout/header.php'); ?>
    <div id="layoutSidenav">
        <?php include('../layout/navigation.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="details-container">
                        <h2>Details</h2>
                        <p><strong>Name:</strong> <?php echo $name; ?></p>
                        <p><strong>Age:</strong> <?php echo $age; ?></p>
                        <p><strong>Gender:</strong> <?php echo $gender; ?></p>

                        <!-- Clear and Exit Buttons -->
                        <form method="POST">
                            <button type="submit" name="clear_data" class="clear-button">Clear Data</button>
                            <button type="submit" name="exit" class="exit-button">Exit</button>
                        </form>
                    </div>
                </div>
            </main>
            <?php include('../layout/footer.php'); ?>
        </div>
    </div>
    <?php include('../layout/script.php'); ?>
</body>
</html>
