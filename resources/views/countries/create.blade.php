<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Country</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        h1 {
            font-size: 2rem;
            color: #333333;
            margin-bottom: 30px;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 1rem;
            background-color: #f7f7f7;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            background-color: #ffffff;
            border-color: #007bff;
            outline: none;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 14px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .unique-border {
            border-left: 6px solid #007bff;
            padding-left: 15px;
            margin-bottom: 20px;
            transition: border-color 0.3s ease;
        }

        .unique-border:hover {
            border-color: #0056b3;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Create Country</h1>
        <form action="{{ route('countries.store') }}" method="post">
            @csrf
            @method('post')

            <div class="unique-border">
                <input type="text" name="country" placeholder="Country Name" required>
                <input type="text" name="capital" placeholder="Capital City" required>
                <input type="number" name="code" placeholder="Country Code" required>
            </div>

            <input type="submit" value="Create Country">
        </form>
    </div>

</body>
</html>
