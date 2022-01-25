<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tổng 2 số</title>
    <style>
        body {
            font-size: 20px;
        }

        .container {
            display: flex;
            height: 100vh;
            width: 100%;
            margin: 0 auto;
        }

        .left {
            width: 50%;
            height: 100%;
            background-color: #ccc;
            border-right: 1px solid grey;
            text-align: center;
            padding: 20px
        }

        .left img {
            height: 80%;
        }

        .right {
            width: 50%;
            height: 100%;
            background-color: #ddd;
            padding: 20px;
        }

        input[type=text] {
            width: 100px;
            margin-right: 10px;
        }

        input[type=submit] {
            background-color: green;
            color: white;
            margin-left: 30px;
            cursor: pointer;
            padding: 5px;
            width: 100px;
        }

        .result {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="sum.png" alt="">
        </div>
        <div class="right">
            <?php 
                $result = '';
                $error = '';
                if (isset($_POST['calculate']))
                {
                    // Bước 1: Nhập a,b
                    // Validate thông tin và tính toán
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    if (!is_numeric($a)) {
                        $error = "Bạn nhập sai định dạng số a";
                    }
                    if (!is_numeric($b)) {
                        $error = "Bạn nhập sai định dạng số b";
                    }
                    if ($a == ''){
                        $error = "Bạn chua nhập số a";
                    }
                    if ($b == ''){
                        $error = "Bạn chưa nhập số b";
                    }

                    if($error == '') {
                        // Bước 2: Tính toán
                        $result = $a + $b;
                        $result = "Tổng 2 số là: $result";
                    }
                }
            ?>
            <h1>Giải phương trình cộng 2 số</h1>
            <form method="POST" action="sum.php">
                <input type="text" name="a" id="input" value="<?php if(isset($a)) echo $a ?>"/>
                +
                <input type="text" name="b" id="input" value="<?php if(isset($a)) echo $b ?>"/>

                <input type="submit" name="calculate" value="Submit"/>
            </form>

            <div class="result">
                <?php echo $error; ?>
                <?php echo $result; ?>
            </div>
            
        </div>
    </div>
</body>
</html>