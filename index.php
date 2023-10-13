<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script  type="text/javascript" src="javascript/vue.min.js"></script>
    <script  type="text/javascript" src="javascript/adapter.min.js"></script>
    <script type="text/javascript" src="javascript/instascan.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
                <?php 
                if(isset($_SESSION['error'])){
                    echo "<div class='alert alert-danger'>
                    <h4>ERROR!</h4>
                    ".$_SESSION['error']."
                    ";
                }
                if(isset($_SESSION['success'])){
                    echo "<div class='alert alert-primary'>
                    <h4>SUCCESS!</h4>
                    ".$_SESSION['success']."
                    ";
                }
                ?>
            </div>
            <div class="col-md-6">
                <form action="insert.php" method="post" id="form1" class="form-horizontal">
                <label>SCAN QR</label>
                <input type="hidden" name="text" id="text" readonly="" placeholder="scan qr" class="form-control">
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>NAME</td>
                            <td>TIMEIN</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "qrcode";
                        
                        
                        $conn = new mysqli($server,$username,$password,$dbname);
                        if ($conn->connect_error) {
                           die("connection failed" . $conn->connect_error);
                        }
                        $sql = "SELECT id,name,timein FROM attendance WHERE DATE(timein)=CURDATE()";
                        $query = $conn->query($sql);
                        while ($row =  $query->fetch_assoc()) {
                            ?>
                            <tr>
                              <td><?php echo $row['id'];?></td>
                              <td><?php echo $row['name'];?></td>
                              <td><?php echo $row['timein'];?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="javascript/script.js"></script>
</body>
</html>