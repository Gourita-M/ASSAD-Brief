<?php
include "./conn_sql.php";

$id = $_GET['id'];

$sql = "SELECT * FROM animaux WHERE an_id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if (isset($_POST['update'])) {
    $Newname = $_POST["name"];
    $newfoodtype = $_POST["food"];
    $newimg = $_POST["image"];
    $newhati = $_POST["habita"];
    $update_sql = "UPDATE animaux SET 
                    ani_nom ='$Newname', 
                    alimentation ='$newfoodtype', 
                    an_image ='$newimg',
                    id_habitat ='$newhati' 
                   WHERE an_id = $id";
    
    $conn->query($update_sql);
    header("Location: ./DASHBOARD.php");
    exit();
echo $Newname, $newfoodtype, $newimg, $newhati;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoo Encyclopedia</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
          include "./Header.php"
      ?>
      <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <form method="post" class="bg-white p-8 rounded shadow-md w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6">Edit Animal</h2>
        <label class="block mb-2 font-semibold">Name:</label>
        <input type="text" name="name" value="<?php echo $row['ani_nom']; ?>" class="border p-2 w-full mb-4 rounded">

        <label class="block mb-2 font-semibold">Food Type:</label>
        <select class="p-2 border rounded w-full" name="food" class="p-2 border rounded">
        <option value="Carnivore">Carnivore</option>
        <option value="Herbivore">Herbivore</option>
        <option value="Omnivore">Omnivore</option>
      </select>
        <div>
            <label class="block mb-2 font-semibold">Image URL:</label>
            <input type="text" name="image" value="<?php echo $row['an_image']; ?>" class="border p-2 w-full mb-4 rounded">
        </div>
        <label class="block mb-2 font-semibold">Habitat ID:</label>
        <select class="p-2 border rounded" name="habita">
        <option value="1">Savannah</option>
        <option value="2">Jungle</option>
        <option value="3">Desert</option>
        <option value="4">Ocean</option>
      </select>

        <div class="flex justify-between">
            <button type="submit" name="update" class="bg-yellow-400 text-white px-6 py-2 rounded hover:bg-yellow-500">
               Update
            </button>
            <a href="../index.php" class="bg-gray-300 text-gray-800 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
        </div>
    </form>
</div>
<?php
   include "./Footer.php"
  ?>
</body>
</html>