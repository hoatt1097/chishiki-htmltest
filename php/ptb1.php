<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giải phương trình bậc nhất</title>
    <style>
        body {
            font-size: 20px;
            margin-bottom: 60px;
        }

        .container {
            display: flex;
            height: 400px;
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

        /* Toogle */
        #description {
            display: none !important;
        }

        #description.show {
            display: flex !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="../images/ptb1.png" alt="">
        </div>
        <div class="right">
        <?php 
                $result = '';
                $error = '';
                if (isset($_POST['calculate']))
                {
                    // Bước 1: Nhập a,b
                    // Validate thông tin và tính toán
                    $a = isset($_POST['a']) ? $_POST['a'] : '';
                    $b = isset($_POST['b']) ? $_POST['b'] : '';
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
                        if ($a == 0){
                            if ($b == 0){
                                $result = "Phương trình vô số nghiệm";
                            } else {
                                $result = "Phương trình vô nghiệm";
                            }
                        } else {
                            $result = -($b) / $a;
                            $result = "Nghiệm của phương trình là: $result";
                        }
                    }
                }
            ?>
            <h1>Giải phương trình bậc nhất</h1>
            <form method="POST" action="ptb1.php">
                <input type="text" name="a" id="input" value="<?php if(isset($a)) echo $a ?>"/>x 
                +
                <input type="text" name="b" id="input" value="<?php if(isset($a)) echo $b ?>"/> = 0

                <input type="submit" name="calculate" value="Submit"/>
            </form>

            <div class="result">
                <?php echo $error; ?>
                <?php echo $result; ?>
            </div>
            
        </div>
    </div>

    </br>
    </br>
    
    <!-- Huong dan -->
    <div style="margin: 20px 10px 0 0"><b>Check answer</b> <button id="clickme"
            style="padding:8px; background-color: #0074CC; color: white; border: none; border-radius: 4px; cursor: pointer;">Click
            Me</button></div>
    <div class="description" id="description" style="display: flex;  height: 300px;">
        <div class="html" style="width: 50%; margin: 10px; margin-left: 0;">
            <b>HTML</b>
            <textarea disabled style="width: 100%; height: 100%;">

<h1>Giải phương trình bậc nhất</h1>
<form method="POST" action="ptb1.php">
    <input type="text" name="a" id="input" value="<?php if(isset($a)) echo $a ?>"/>x 
    +
    <input type="text" name="b" id="input" value="<?php if(isset($a)) echo $b ?>"/> = 0

    <input type="submit" name="calculate" value="Submit"/>
</form>

<div class="result">
    &lt;?php echo $error; ?>
    &lt;?php echo $result; ?>
</div>


            </textarea>
        </div>
        <div class="css" style="width: 50%; margin: 10px; margin-right: 0;">
            <b>PHP code</b>
            <textarea disabled style="width: 100%; height: 100%;">

&lt;?php 
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
            if ($a == 0){
                if ($b == 0){
                    $result = "Phương trình vô số nghiệm";
                } else {
                    $result = "Phương trình vô nghiệm";
                }
            } else {
                $result = -($b) / $a;
                $result = "Nghiệm của phương trình là: $result";
            }
        }
    }
?>
        </textarea>
        </div>
    </div>
    </div>

    <script>
        document.getElementById("clickme").addEventListener("click", function () {
            document.getElementById("description").classList.toggle("show");
        });
    </script>
</body>
</html>