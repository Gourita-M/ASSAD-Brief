<?php
  SESSION_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Create Visite</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<?php include "./Header.php"; ?>
<main class="max-w-3xl mx-auto p-8 bg-white shadow rounded-xl mt-10">
  <h1 class="text-2xl font-bold mb-6">Create a guided tour</h1>

  <form class="space-y-4">
    <input type="text" placeholder="Titre de la visite" class="w-full border p-2 rounded">
    <textarea placeholder="Description" class="w-full border p-2 rounded"></textarea>

    <div class="grid md:grid-cols-2 gap-4">
      <input type="datetime-local" class="border p-2 rounded">
      <input type="number" placeholder="Durée (minutes)" class="border p-2 rounded">
    </div>

    <div class="grid md:grid-cols-3 gap-4">
      <input type="number" placeholder="Prix (€)" class="border p-2 rounded">
      <input type="number" placeholder="Capacité max" class="border p-2 rounded">
      <select class="border p-2 rounded">
        <option>Français</option>
        <option>Anglais</option>
        <option>Arabe</option>
      </select>
    </div>

    <button class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
      Create
    </button>
  </form>
</main>

<main class="max-w-3xl mx-auto bg-white p-8 mt-10 rounded-xl shadow">
  <h1 class="text-2xl font-bold mb-6">Parcours de la visite</h1>

  <div class="space-y-4">
    <div class="border p-4 rounded">
      <input type="text" placeholder="Titre de l’étape" class="w-full border p-2 rounded mb-2">
      <textarea placeholder="Description" class="w-full border p-2 rounded"></textarea>
    </div>

    <button class="bg-green-600 text-white px-4 py-2 rounded">
      Ajouter une étape
    </button>
  </div>
</main>
<?php include "./Footer.php"; ?>
</body>
</html>
