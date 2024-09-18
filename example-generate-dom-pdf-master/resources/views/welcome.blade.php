<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slip Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            transition: box-shadow 0.3s;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        .card a:hover {
            color: #0056b3;
        }

        p {
            margin: 0;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Slip Gaji</h1>

        <div class="card">
            <p><a href="{{ route('download.default.gaji') }}" target="blank">Download Default Gaji</a></p>
        </div>

        <div class="card">
            <p><a href="{{ route('download.gaji.potongan0') }}" target="blank">Download Gaji Potongan 0</a></p>
        </div>

        <div class="card">
            <p><a href="{{ route('download.gaji.potongan0.tambahan0') }}" target="blank">Download Gaji Potongan 0 Tambahan 0</a></p>
        </div>
    </div>
</body>

</html>
