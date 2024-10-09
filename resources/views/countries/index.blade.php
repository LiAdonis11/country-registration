<!-- resources/views/countries/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries List</title>
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

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            text-align: center;   
            max-width: 400px;
            width: 300px; 
            margin: 0 auto; 
        }

        a {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 12px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Countries List</h1>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Country</th>
                    <th>Capital</th>
                    <th>Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->country }}</td>
                        <td>{{ $country->capital }}</td>
                        <td>{{ $country->code }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('countries.create') }}">Add New Country</a>
    </div>
</body>
</html>
