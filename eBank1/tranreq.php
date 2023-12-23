<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Req</title>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

form {
    text-align: center;
    margin-top: 50px;
}

label {
    font-size: 18px;
    color: #333;
}

input[type="number"],
select {
    padding: 12px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    width: 100%;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

#abc {
    display: block;
    margin-top: 20px;
    text-align: center;
    font-size: 18px;
    color: #333;
}

a {
    display: block;
    text-align: center;
    margin-top: 20px;
    text-decoration: none;
    color: #3498db;
    font-size: 18px;
}

a:hover {
    color: #217dbb;
}

    </style>
</head>

<body>
    <form onsubmit="send(); return false;">
        <center>
            <label for="number">Enter amount you want to Transfer:</label><br>
            <input type="number" name="number" id="number"><br>
            <select id="sel">
                <?php
                $server = "localhost";
                $username = "root";
                $password = "";
                $db = "formfillup";

                $conn = mysqli_connect($server, $username, $password, $db);

                if ($conn) {
                    // Connection successfully established
                } else
                    die("connection to this database failed due to " . mysqli_connect_error());

                $sql = "SELECT * FROM pms where id!=1";
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id']; ?>">

                        <?php echo $rows['Name']; ?>
                        (Balance: <?php echo $rows['Balance']; ?> )

                    </option>
                <?php
                }
                ?>
            </select><br><br>
            <input type="submit" value="Submit">
        </center>
    </form>
    <span id="abc"></span>
    <a href="LoginProcess.php">Dashboard</a>

    <script>
        function send() {
            var num = document.getElementById('number').value;
            var str = document.getElementById('sel').value;

            // Do something with num and str
            var result = "Amount: " + num + ", Selected: " + str;
            document.getElementById('abc').innerHTML = result;
        }
    </script>
</body>

</html>
