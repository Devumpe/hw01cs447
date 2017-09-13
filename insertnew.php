<?php
  session_start();
  include("connect.php");

  $sql = "SELECT   * 
      FROM lpstore
      WHERE 1; " ;

  $rs = $conn->query($sql) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lampang Souvenir - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.error-message {
  padding: 7px 10px;
  background: #fff1f2;
  border: #ffd5da 1px solid;
  color: #d6001c;
  border-radius: 4px;
}
.success-message {
  padding: 7px 10px;
  background: #cae0c4;
  border: #c3d0b5 1px solid;
  color: #027506;
  border-radius: 4px;
}
.demo-table {
  background: black;
  width: 100%;
  border-spacing: initial;
  margin: 2px 0px;
  word-break: break-word;
  table-layout: auto;
  line-height: 1.8em;
  color: #333;
  border-radius: 4px;
  padding: 20px 40px;
}
.demo-table td {
  padding: 15px 0px;
}
.demoInputBox {
  padding: 10px 30px;
  border: #a9a9a9 1px solid;
  border-radius: 4px;
}
.btnRegister {
  padding: 10px 30px;
  background-color: red;
  border: 0;
  color: #FFF;
  cursor: pointer;
  border-radius: 4px;
  margin-left: 10px;
}
</style>
</head>
<body>




  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" align="left">   </a>

                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="main.php">กลับหน้าหลัก</a>
            </li>
           
           
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="overlay">
        <div class="container">
          <h1 class="display-1 text-white">Welcome to</h1>
          <h2 class="display-4 text-white"> " <?php echo $_SESSION['userfname'];   ?>" </h2>
        </div>
      </div>
    </header>



<div align ="center" name="frmRegistration" color = "text-white" method="post" action="insertproduct.php">
 <table border="0" width="500" align="center" class="demo-table"> 
    <?php if(!empty($success_message)) { ?> 
    <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
    <?php } ?>
    <?php if(!empty($error_message)) { ?> 
    <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
    <?php } ?>

      <form align ="center" color = "text-white" action="insertproduct.php" method="post">

    <tr>
      <td>ชื่อสินค้า</td>
      <td><input type="text center" class="demoInputBox" name="nameproduct" value="<?php if(isset($_POST['nameproduct'])) echo $_POST['nameproduct']; ?>"></td>
    </tr>
    <tr>
      <td>รายละเอียด</td>
      <td><textarea type="text" class="demoInputBox" name="description" value="<?php if(isset($_POST['description'])) echo $_POST['description']; ?>"></textarea></td>
    </tr>
   
    <!--<tr>
      <td>รูปภาพ</td>
      <td><input type="password" class="demoInputBox" name="password" value=""></td>
    </tr> -->
   <tr>
      <td>ราคา</td>
      <td><input type="text" class="demoInputBox" name="price" value="<?php if(isset($_POST['price'])) echo $_POST['price']; ?>"></td>
    </tr>
 <tr>
      <td>จำนวนของในสต็อก</td>
      <td><input type="text" class="demoInputBox" name=" countproduct" value="<?php if(isset($_POST[' countproduct'])) echo $_POST[' countproduct']; ?>"></td>
    </tr> 
    <tr>
      <td colspan=2>
      <input align ="center" type="submit" name="register-user" value="เพิ่มสินค้า" class="btnRegister"></td>
    </tr>
   </table> 
  </form>
</div>

<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
      </div>
      <!-- /.container -->
    </footer>



  
  
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>

    <!-- Bootstrap core JavaScript -->


