<?php 
   session_start();
   include "./Pages/conn_sql.php";
   $getanimls = "SELECT *
           FROM habitats, animaux
           WHERE habitats.id_habi = animaux.id_habitat";
   $result = $conn->query($getanimls);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>ASSAD Virtual Zoo – AFCON 2025</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <header class="bg-green-900 text-white">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
            <a href="./index.php" class="text-2xl font-bold tracking-wide">🦁 ASSAD Virtual Zoo</a>

            <nav class="space-x-6 hidden md:block">
                <a href="#animals" class="hover:text-yellow-300">Animals</a>
                <a href="#tours" class="hover:text-yellow-300">Guided Tours</a>
                <?php 
                    if(isset($_SESSION['role'])){
                    if($_SESSION['role'] === 'ADMIN' || $_SESSION['role'] === 'Guide'){
                        echo '<a href="./Pages/DASHBOARD.php" class="hover:text-yellow-300">DashBoard</a>';
                    }
                }
                ?>
                <?php 
                    if(isset($_SESSION['username'])){
                        echo '
                            <span class="font-semibold text-green-300">
                                Welcome Back
                            </span>
                            <a href="./Pages/logout.php" class="bg-red-600 text-white px-4 py-2 rounded-lg">
                                Logout
                            </a>  
                        ';
                    }
                    else {
                        echo '
                            <a href="./Pages/login.php" class="loginbtn bg-yellow-400 text-green-900 px-4 py-2 rounded font-semibold" >
                                Login / Register
                            </a>
                        ';
                    }
                ?>
                
            </nav>
        </div>
    </header>
 
    <section class="relative bg-[url('https://images.unsplash.com/photo-1546182990-dffeafbe841d')] bg-cover bg-center h-[80vh]">
        <div class="absolute inset-0 bg-black/60"></div>

        <div class="relative z-10 flex items-center justify-center h-full text-center px-4">
            <div class="text-white max-w-3xl">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Discover Africa’s Wildlife During AFCON 2025
                </h2>
                <p class="text-lg mb-6">
                    Explore animals, habitats and interactive guided tours inspired by Morocco and the Atlas Lion.
                </p>
                <a href="#tours" class="bg-yellow-400 text-green-900 px-6 py-3 rounded-lg font-bold hover:bg-yellow-300">
                    Explore Guided Tours
                </a>
            </div>
        </div>
    </section>

    <section id="asaad" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <img
                src="https://images.unsplash.com/photo-1614027164847-1b28cfe1df60"
                alt="Atlas Lion"
                class="rounded-xl shadow-lg" />

            <div>
                <h3 class="text-3xl font-bold mb-4">Asaad – Lion of the Atlas</h3>
                <p class="text-gray-600 mb-4">
                    The Atlas Lion, once roaming North Africa, symbolizes strength, heritage,
                    and conservation. ASSAD aims to educate fans and families about this iconic species.
                </p>
                <ul class="list-disc ml-6 text-gray-700">
                    <li>Native to Morocco and North Africa</li>
                    <li>Critically endangered</li>
                    <li>Symbol of African pride</li>
                </ul>
            </div>
        </div>
    </section>

    
    <section id="animals" class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-3xl font-bold">Explore Animals</h3>

                
                <div class="flex gap-4">
                    <select class="border px-4 py-2 rounded">
                        <option>All Habitats</option>
                        <option>Savannah</option>
                        <option>Rainforest</option>
                        <option>Wetlands</option>
                    </select>

                    <select class="border px-4 py-2 rounded">
                        <option>All Countries</option>
                        <option>Morocco</option>
                        <option>Kenya</option>
                        <option>Senegal</option>
                    </select>
                </div>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php
                  foreach($result as $res){
                    addanimals($res);
                  }
                ?>
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                    <img src="https://images.unsplash.com/photo-1598755257130-c2aaca1f061c" class="rounded-t-lg h-48 w-full object-cover">
                    <div class="p-4">
                        <h4 class="font-bold text-lg">African Elephant</h4>
                        <p class="text-sm text-gray-600">Habitat: Savannah</p>
                        <p class="text-sm text-gray-600">Origin: Kenya</p>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    
    <section id="tours" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold mb-8">Virtual Guided Tours</h3>

            <div class="grid md:grid-cols-2 gap-8">
                
                <div class="border rounded-xl p-6 shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-bold mb-2">African Giants Tour</h4>
                    <p class="text-gray-600 mb-2">🗓 12 Jan 2025 | ⏰ 18:00 | ⏳ 90 min</p>
                    <p class="text-gray-600 mb-2">🌍 Language: English</p>
                    <p class="text-gray-600 mb-4">💰 Price: €15 | 👥 Remaining: 8</p>

                    <div class="bg-gray-100 p-3 rounded mb-4">
                        <p class="font-semibold text-sm mb-1">Route:</p>
                        <p class="text-sm">Asian mammals → Exotic birds → Monkeys → Hippos</p>
                    </div>

                    <button class="bg-green-700 text-white px-5 py-2 rounded hover:bg-green-800">
                        Book Tour
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php include "./Pages/Footer.php"; ?>
 
</body>

</html>
<?php
  function addanimals($arr){
    echo "
    <div class='bg-white rounded-lg shadow hover:shadow-lg transition'>
    <img src='{$arr['an_image']}' class='rounded-t-lg h-48 w-full object-cover'>

    <div class='p-4'>
        <h4 class='font-bold text-lg'>{$arr['ani_nom']}</h4>
        <p class='text-sm text-gray-600'>Habitat: {$arr['nom_habi']}</p>
        <p class='text-sm text-gray-600'>Origin: {$arr['paysorigine']}</p>
      </div>
    </div>
    ";
                  
  }
?>