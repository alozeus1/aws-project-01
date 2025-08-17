<!DOCTYPE html>
<html>
<head>
    <title>Amazon Web Services Project Work</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
            text-align: center;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        input[type=text], input[type=email] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type=submit] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #218838;
        }
        .container {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Amazon Web Services Project Work</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>" method="POST">
            <table>
                <tr><td>NAME</td><td><input type="text" name="NAME" maxlength="45" /></td></tr>
                <tr><td>ADDRESS</td><td><input type="text" name="ADDRESS" maxlength="90" /></td></tr>
                <tr><td>QUALIFICATION</td><td><input type="text" name="QUALIFICATION" maxlength="45" /></td></tr>
                <tr><td>COUNTRY</td><td><input type="text" name="COUNTRY" maxlength="45" /></td></tr>
                <tr><td>EMAIL</td><td><input type="email" name="EMAIL" maxlength="255" /></td></tr>
                <tr><td colspan="2"><input type="submit" value="Submit" /></td></tr>
            </table>
        </form>
    </div>
</body>
</html>
