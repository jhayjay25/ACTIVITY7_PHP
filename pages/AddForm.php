<!-- form.php -->
<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
    header('location:../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Form Page</title>
    <?php include('../layout/style.php'); ?>
    <style>
      
        body {
            background: linear-gradient(135deg, black, blue, violet);
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.7); 
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #f0f0f0;
            border-bottom: 2px solid violet;
            padding-bottom: 10px;
        }

        .form-container label {
            display: block;
            font-size: 18px;
            margin-top: 15px;
            color: #a9a9ff; 
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #e6e6fa;
            color: #333;
        }

      
        .form-container button[type="submit"],
        .form-container button[type="reset"] {
            width: 48%;
            padding: 10px;
            margin-top: 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s;
        }

        .form-container button[type="submit"] {
            background-color: #4c6ef5; 
        }

        .form-container button[type="reset"] {
            background-color: #ff6b6b;
        }

       
        .form-container button[type="submit"]:hover {
            background-color: #3742fa;
        }

        .form-container button[type="reset"]:hover {
            background-color: #ff4d4d;
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
                    <div class="form-container">
                        <h2>Add Form</h2>
                        <form action="showDetails.php" method="POST">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Enter name" required>
                            
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" placeholder="Enter age" required>
                            
                            <label for="gender">Gender:</label>
                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            
                            <button type="submit" name="submit">Submit</button>
                            <button type="reset">Clear</button>
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
