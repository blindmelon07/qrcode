<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <form action="insert.php" method="post" id="form1" class="form-horizontal">
                <label>SCAN QR</label>
                <input type="text" name="text" id="text" readonly="" placeholder="scan qr" class="form-control">
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>