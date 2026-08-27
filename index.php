<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งานที่ 2 - คำนวณพื้นที่สามเหลี่ยม</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 2rem;
        }

        form {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 350px;
        }

        label {
            display: block;
            font-size: 0.9rem;
            color: #718096;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1.5rem;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 1rem;
            background-color: #f8f9fa;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #a0aec0;
            background-color: #fff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #2d3748;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #4a5568;
        }
    </style>
</head>
<body>
    
    <h1>งานที่2 ณัฐสัญช์ BIT2/4 เลขที่40 </h1>

    <form action="result.php" method="post">

        <label for="base">ความกว้างฐาน (cm)</label>
        <input type="number" name="base" id="base" step="any" placeholder="0.00" required>

        <label for="height">ความสูง (cm)</label>
        <input type="number" name="height" id="height" step="any" placeholder="0.00" required>

        <input type="submit" value="คำนวณพื้นที่">
    </form>

</body>
</html>