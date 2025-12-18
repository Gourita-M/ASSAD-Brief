<!DOCTYPE html>
<html lang="fr" class="scroll-smooth" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard - ASSAD Virtual Zoo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">
  <?php
   include "./Header.php"
  ?>
  <main class="p-6 max-w-7xl mx-auto">
    <h2 class="text-3xl font-semibold mb-6 text-green-900">Tableau de bord Administrateur</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <section class="bg-white rounded shadow p-5">
        <h3 class="text-xl font-semibold mb-4 border-b border-green-200 pb-2 text-green-800">Gestion des animaux</h3>
        <ul class="space-y-3 text-gray-700">
          <li>
            <button class="w-full bg-yellow-500 text-white rounded px-4 py-2 hover:bg-yellow-600 transition">
              Ajouter un animal
            </button>
          </li>
          <li>
            <button class="w-full bg-yellow-500 text-white rounded px-4 py-2 hover:bg-yellow-600 transition">
              Modifier un animal
            </button>
          </li>
          <li>
            <button class="w-full bg-yellow-500 text-white rounded px-4 py-2 hover:bg-yellow-600 transition">
              Supprimer un animal
            </button>
          </li>
        </ul>
      </section>

      <section class="bg-white rounded shadow p-5">
        <h3 class="text-xl font-semibold mb-4 border-b border-green-200 pb-2 text-green-800">Gestion des habitats</h3>
        <ul class="space-y-3 text-gray-700">
          <li>
            <button class="w-full bg-indigo-600 text-white rounded px-4 py-2 hover:bg-indigo-700 transition">
              Ajouter un habitat
            </button>
          </li>
          <li>
            <button class="w-full bg-indigo-600 text-white rounded px-4 py-2 hover:bg-indigo-700 transition">
              Modifier un habitat
            </button>
          </li>
          <li>
            <button class="w-full bg-indigo-600 text-white rounded px-4 py-2 hover:bg-indigo-700 transition">
              Supprimer un habitat
            </button>
          </li>
        </ul>
      </section>

    </div>
   
<div class="bg-gray-100 font-sans p-6">

  <h1 class="text-3xl font-bold mb-8 text-green-900">Admin Dashboard - Liste Utilisateurs & Animaux</h1>

  <section class="mb-12 bg-white rounded shadow p-6">
    <h2 class="text-2xl font-semibold mb-4 text-green-800">Liste des utilisateurs</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-green-100">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Nom</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Rôle</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Statut</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-green-50">
            <td class="border border-gray-300 px-4 py-2">1</td>
            <td class="border border-gray-300 px-4 py-2">Ali Hassan</td>
            <td class="border border-gray-300 px-4 py-2">ali@example.com</td>
            <td class="border border-gray-300 px-4 py-2">Guide</td>
            <td class="border border-gray-300 px-4 py-2">
              <span class="text-green-600 font-semibold">Activé</span>
            </td>
            <td class="border border-gray-300 px-4 py-2 space-x-2">
              <button class="text-blue-600 hover:underline">Modifier</button>
              <button class="text-red-600 hover:underline">Activer/Désactiver</button>
            </td>
          </tr>
          <tr class="hover:bg-green-50">
            <td class="border border-gray-300 px-4 py-2">2</td>
            <td class="border border-gray-300 px-4 py-2">Sara Benali</td>
            <td class="border border-gray-300 px-4 py-2">sara@example.com</td>
            <td class="border border-gray-300 px-4 py-2">Visiteur</td>
            <td class="border border-gray-300 px-4 py-2">
              <span class="text-red-600 font-semibold">Désactivé</span>
            </td>
            <td class="border border-gray-300 px-4 py-2 space-x-2">
              <button class="text-blue-600 hover:underline">Modifier</button>
              <button class="text-red-600 hover:underline">Activer/Désactiver</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section class="bg-white rounded shadow p-6">
    <h2 class="text-2xl font-semibold mb-4 text-green-800">Liste des animaux</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full table-auto border-collapse border border-gray-300">
        <thead class="bg-yellow-100">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Nom</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Espèce</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Alimentation</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Pays d'origine</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-yellow-50">
            <td class="border border-gray-300 px-4 py-2">101</td>
            <td class="border border-gray-300 px-4 py-2">Lion de l'Atlas</td>
            <td class="border border-gray-300 px-4 py-2">Panthera leo</td>
            <td class="border border-gray-300 px-4 py-2">Carnivore</td>
            <td class="border border-gray-300 px-4 py-2">Maroc</td>
            <td class="border border-gray-300 px-4 py-2 space-x-2">
              <button class="text-blue-600 hover:underline">Modifier</button>
              <button class="text-red-600 hover:underline">Supprimer</button>
            </td>
          </tr>
          <tr class="hover:bg-yellow-50">
            <td class="border border-gray-300 px-4 py-2">102</td>
            <td class="border border-gray-300 px-4 py-2">Girafe</td>
            <td class="border border-gray-300 px-4 py-2">Giraffa camelopardalis</td>
            <td class="border border-gray-300 px-4 py-2">Herbivore</td>
            <td class="border border-gray-300 px-4 py-2">Afrique</td>
            <td class="border border-gray-300 px-4 py-2 space-x-2">
              <button class="text-blue-600 hover:underline">Modifier</button>
              <button class="text-red-600 hover:underline">Supprimer</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</div>

    <section class="mt-10 bg-white rounded shadow p-6">
      <h3 class="text-2xl font-semibold mb-4 text-green-900">Statistiques</h3>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-gray-800">

        <div class="bg-green-50 rounded p-4 text-center shadow">
          <h4 class="text-lg font-semibold">Utilisateurs inscrits</h4>
          <p class="text-4xl font-bold text-green-700 mt-2">1,234</p>
          <p class="text-sm mt-1">Total / par pays</p>
        </div>

        <div class="bg-yellow-50 rounded p-4 text-center shadow">
          <h4 class="text-lg font-semibold">Nombre d'animaux</h4>
          <p class="text-4xl font-bold text-yellow-700 mt-2">456</p>
          <p class="text-sm mt-1">Total en base</p>
        </div>

        <div class="bg-indigo-50 rounded p-4 text-center shadow">
          <h4 class="text-lg font-semibold">Animaux les plus consultés</h4>
          <p class="text-4xl font-bold text-indigo-700 mt-2">Lions, Girafes</p>
          <p class="text-sm mt-1">Top 5</p>
        </div>

        <div class="bg-red-50 rounded p-4 text-center shadow">
          <h4 class="text-lg font-semibold">Visites guidées réservées</h4>
          <p class="text-4xl font-bold text-red-700 mt-2">789</p>
          <p class="text-sm mt-1">Ce mois-ci</p>
        </div>

      </div>
    </section>

  </main>

  <?php
   include "./Header.php"
  ?>

</body>
</html>
