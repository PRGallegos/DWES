<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #87CEEB; 
            color: #fff; 
            display: flex;
            flex-direction: column;
            justify-content: top;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        a {
            color: red; 
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 18px;
            margin: 2rem;
        }
        a:hover {
            color: #ffc107;
        }
        .nav-links {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 20px;
        }
        table {
            width: 90%; 
            border-collapse: collapse;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #007bff;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        td {
            background-color: #0047ab; 
        }
        .gap {
            height: 10vh; 
        }
        button {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button[type="submit"] {
            background-color: red;
            color: white;
        }
        button[type="submit"]:hover {
            background-color: darkred;
        }
        a button {
            background-color: #39FF14; 
            color: white;
        }
        a button:hover {
            background-color: #32CD32;
        }
       

        .form-container {
            background-color: #007bff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin: auto;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container select {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container button {
            background-color: red; /* Change to red */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: darkred; /* Change to dark red */
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>