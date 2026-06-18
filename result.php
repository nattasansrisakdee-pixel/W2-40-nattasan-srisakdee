<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่สามเหลี่ยม</title>
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

        .result-container {
            background: #ffffff;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 350px;
            text-align: center;
        }

        h2 {
            font-size: 1.4rem;
            font-weight: 500;
            color: #2d3748;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }

        .output-text {
            font-size: 1rem;
            color: #4a5568;
            margin: 0.75rem 0;
            text-align: left;
        }

        .highlight {
            font-weight: 600;
            color: #2d3748;
        }

        hr {
            border: 0;
            border-top: 1px solid #e2e8f0;
            margin: 1.5rem 0;
        }

        .total-area {
            font-size: 1.25rem;
            color: #2c5282;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 1.5rem;
            color: #718096;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s;
        }

        a:hover {
            color: #2d3748;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="result-container">
        <h2>ผลการคำนวณ</h2>

        <?php
            // รับค่าจากฟอร์ม (เปลี่ยนชื่อตัวแปรให้ตรงกับความหมายใหม่แต่คงโครงสร้างเดิม)
            $triangle_name = $_POST["triangle_name"];
            $base = $_POST["base"];
            $height = $_POST["height"];

            echo "<div class='output-text'>ความกว้างฐาน : <span class='highlight'>" . $base . " cm</span></div>";
            echo "<div class='output-text'>ความสูง : <span class='highlight'>" . $height . " cm</span></div>";
            
            echo "<hr>";

            // สูตรคำนวณพื้นที่สามเหลี่ยม = 0.5 * ฐาน * สูง
            $area = 0.5 * $base * $height;
            
            echo "<div class='total-area'>พื้นที่สามเหลี่ยม : " . $area . " ตร.ซม.</div>";
        ?>

        <a href="index.php">← กลับหน้าแรก</a>
    </div>

</body>
</html>