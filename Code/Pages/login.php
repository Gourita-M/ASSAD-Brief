<?php
    session_start();
    include "./conn_sql.php";
    $error = "";
    
    if(isset($_POST['login'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $sql = "SELECT * FROM utilisateurs
              WHERE email = '$email'
              AND motpasse_hash = '$password'";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      if ($result && $result->num_rows > 0){
           $_SESSION["username"] = $row['nom_user'];
           $_SESSION["role"] = $row['user_role'];
           header("Location: ../index.php");
      }
      else {
         $error = "Your Email Or Password not Found";
      }
    }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <?php include "./Header.php"; ?>
  <div class="bg-gradient-to-br from-green-900 to-black min-h-screen flex items-center justify-center">
  
  <div class="bg-white w-full max-w-md p-8 rounded-3xl shadow-2xl">

    <h3 class="text-3xl font-extrabold mb-6 text-center text-green-900">
      Login
    </h3>

    <form method="POST" class="space-y-4">

      <input 
        name="email"
        type="email"
        placeholder="Email address"
        class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:ring-2 focus:ring-green-600 focus:outline-none"
        required
      >

      <input
        name="password"
        type="password"
        placeholder="Password"
        class="w-full border border-gray-300 px-4 py-3 rounded-xl focus:ring-2 focus:ring-green-600 focus:outline-none"
        required
      >

      <button
        name="login"
        type="submit"
        class="w-full bg-green-800 text-white py-3 rounded-xl hover:bg-green-900 transition font-semibold tracking-wide"
      >
        Login
      </button>

    </form>
    <?php 
           echo "<br><div class='text-center text-red-600'>{$error}</div>";
    ?>
    <div class="text-sm text-center text-gray-600 mt-6">
      Don’t have an account?
      <a href="./Register.php" class="text-green-700 font-semibold hover:underline">
        Register
      </a>
    </div>

  </div>

  </div>
</body>
</html>
