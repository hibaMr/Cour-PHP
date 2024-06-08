<?php 
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $nationalite = $_POST["nationalite"];
    $adresse = $_POST["adresse"];
    $ville = $_POST["ville"];
    $matiere = $_POST["matiere"];

    
    $statement = $pdo->prepare("SELECT * FROM clients WHERE nom = :nom OR email = :email");
    $statement->execute([
        ':username' => $username,
        ':email' => $email
    ]);

    if ($statement->rowCount() > 0) {
        echo "<script>alert('Ce nom d'utilisateur ou cet email est déjà utilisé');</script>";
    } else {
        if ($password == $confirmpassword) {

            $statement = $pdo->prepare("INSERT INTO logine (name, username, email, password) VALUES (:name, :username, :email, :password)");
            if ($statement->execute([
                ':name' => $name,
                ':username' => $username,
                ':email' => $email,
                ':password' => $password,
            ])) {
                echo "<script>alert('Inscription réussie')</script>";
            } else {
                echo "<script>alert(Échec de l inscription')</script>";
            }
        } else {
            echo "<script>alert('Le mot de passe ne correspond pas')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="heading text-center font-bold text-3xl m-5 text-yellow-500">New Post</div>
    <style>
        body {background:white !important;}
    </style>

    <form action="modifier.php" method="POST">
        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Nom" type="text" name="nom" value="<?php echo $post['nom']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Prenom" type="text" name="prenom" value="<?php echo $post['prenom']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Age" type="text" name="age" value="<?php echo $post['age']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Nationalite" type="text" name="nationalite" value="<?php echo $post['nationalite']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Ville" type="text" name="ville" value="<?php echo $post['ville']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Adresse" type="text" name="adresse" value="<?php echo $post['adresse']; ?>">
            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" placeholder="Matiere" type="text" name="matiere" value="<?php echo $post['matiere']; ?>">


            <!-- icons -->
            <div class="icons flex text-gray-500 m-2">
                <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
                <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
            </div>
            <!-- buttons -->
            <div class="buttons flex">
                <input type="submit" class="btn border bg-blue-500 hover:bg-blue-600 border-blue-300 p-1 px-4 font-semibold cursor-pointer ml-auto" value="Save" name="save">
                <input class="btn border border-yellow-500 hover:bg-yellow-700 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-yellow-500" type="submit" value="Post">
            </div>
        </div>
    </form>
</body>
</html>