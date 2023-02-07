<?php
  include_once "../backend/connection.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../CSS/Style.css">
  <link rel="stylesheet" href="../CSS/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <header class="header">
    <nav class="nav">
          <div class="logo">
            <a href="../index.php"><img  src="../img/logo.png" alt="logo" style="padding:10px;></a>
          </div>
          <div class="showNavBarBtn" id="showNavBarBtn">
            <button onclick="showNavBar();" name="button">=</button>
          </div>
          <div class="navBar" id="navBar">
            <div id="hideNavBarBtn">
              <button onclick="hideNavBar();" name="button">X</button>
            </div>
              <div>
                <a href="../index.php">Home</a>
              </div>
            <div>
              <a target="_blank" href="">Location</a>
            </div>
            <div>
              <a href="../contact.php">Contact Us</a>
            </div>
            <div>
              <a id="active" href="../about.php">About Us</a>
            </div>
        <?php
          if (isset($_SESSION['Useradmin'])) {
            $getAdmins = $conn->prepare("SELECT * FROM admin WHERE Username='".$_SESSION["Useradmin"]."'");
            $getAdmins->execute();
            $admins = $getAdmins->fetchAll();
            foreach ($admins as $admin) {
                $_SESSION['id'] = $admin['id'];
                $_SESSION['Name'] = $admin['Name'];
                $_SESSION['Surname'] = $admin['Surname'];
            }
            ?>
              <h4><?php echo $_SESSION['Name'] . " " . $_SESSION['Surname']; ?></h4>
              <a href="dashboard.php" class="button"><button>Dashboard</button></a>
              <a href="../backend/logout.php" class="button"><button>Log out</button></a>
            <?php
          }
        ?>
      </div>
    </nav>
  </header>
  <script src="../JS/navBar.js" charset="utf-8"></script>
