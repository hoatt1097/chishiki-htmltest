<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP + Mysql</title>
    <style>
        body {
            margin: 0;
            font-size: 18px;
        }

        .container {
            width: 70%;
            margin: 0 auto;
            padding: 10px;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        table th {
            background-color: #6b9988;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding-top: 5px;
            padding-bottom: 5px;
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
        <div style="margin: 20px 10px 0 0"><b>Tải file database: </b> 
            <button style="padding:6px; border: none; border-radius: 4px; cursor: pointer;">
                <a href="../sql/database_user.sql">Tải file</a>
            </button>
        </div>
        <div style="margin: 10px 0"><b>Lý thuyết:</b></div>
        <textarea disabled style="width: 100%; height: 100%; font-size: 14px" rows="30">

1. Lệnh dùng tạo kết nối php với mysql:

$db_host        = 'localhost';  // Địa chỉ host
$db_user        = 'user';       // Tên user của mysql
$db_pass        = 'password';   // password của mysql
$db_database    = 'csk-k7';     // Tên database
$db_port        = '3306';       // Port mysql mặc định là 3306

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_database, $db_port);

// Ví dụ

&lt;?php 
    $connection = mysqli_connect( "localhost" ,"root", "root" , "csk-k7", 3306);
    $sql = "SELECT * FROM user ORDER BY username ASC";
    $result = mysqli_query($connection, $sql);       
?>

2. Lệnh SQL

    $sql = "SELECT * FROM user ORDER BY username ASC";.

3. Lệnh thực thi gọi SQL từ PHP -> danh sách các record

    $result = mysqli_query($connection, $sql);    

4. Lệnh lấy tổng số record của $result

    mysqli_num_rows($result);    

5. Lệnh lấy từng phần tử trong danh sách $result trả về

    $user = mysqli_fetch_array($result)

            </textarea>


        <?php 
            $connection = mysqli_connect( "localhost" ,"root", "root" , "csk-k7", 3306);
            $sql = "SELECT * FROM user ORDER BY username ASC";
            $result = mysqli_query($connection, $sql);       
        ?>
        <h3>Danh sách</h3>
        <table>
            <tr>
                <th>Username</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Program</th>
                <th>Country</th>
            </tr>
            <?php 
                while($user = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$user["username"]."</td>";
                    echo "<td>".$user["fullname"]."</td>";
                    echo "<td>".$user["email"]."</td>";
                    echo "<td>".$user["gender"]."</td>";
                    echo "<td>".$user["language"]."</td>";
                    echo "<td>".$user["country"]."</td>";
                    echo "</tr>";
                }             
            ?>
        </table>

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

<table>
    <tr>
        <th>Username</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Program</th>
        <th>Country</th>
    </tr>
    &lt;?php 
        while($user = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$user["username"]."</td>";
            echo "<td>".$user["fullname"]."</td>";
            echo "<td>".$user["email"]."</td>";
            echo "<td>".$user["gender"]."</td>";
            echo "<td>".$user["language"]."</td>";
            echo "<td>".$user["country"]."</td>";
            echo "</tr>";
        }             
    ?>
</table>

            </textarea>
        </div>
        <div class="css" style="width: 50%; margin: 10px; margin-right: 0;">
            <b>PHP code</b>
            <textarea disabled style="width: 100%; height: 100%;">
&lt;?php 
    $connection = mysqli_connect( "localhost" ,"root", "root" , "csk-k7", 3306);
    $sql = "SELECT * FROM user ORDER BY username ASC";
    $result = mysqli_query($connection, $sql);       
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