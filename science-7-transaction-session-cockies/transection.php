<?php 

$host = 'localhost';
$port = 3306;
$dbName = 'blog';
 
$user = 'root';
$password = '';
 
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";


//// ACID : Atomicity - Consistency - Isolation - Durabality
 

//transaction method                                                                             ==> ima itexecutawe kamline awe mayt executa heta wahed

try{
    
    $pdo = new PDO($dsn, $user, $password);

    // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);               //hadi nti 4ire zedtiha hadi kaydiroha li makayseda9ech lihom hade joje store o makaytla3eche lihome error wakha dayrine nafesse les valeur li kaynine fi base donne hadi nti bla matb9aye dirirha


    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);            // bache bache ngolo bli rahe khaso iji 3ela chekel objet


    // $pdo->beginTransaction();
    // $pdo->exec('INSERT INTO posts (id,titre,content) VALUES (5,"javascript","langage") , (3,"JAVASCRIPT","JAVASCRIPT langage de programation")');
    // //$pdo->exec('INSERT INTO posts (id,titre,content) VALUES (1,"PHP","langage de programation") , (1,"JAVASCRIPT"," JAVASCRIPT langage de programation")');               // ila kane error fi wehda makat executache li 9ebelha bhale hena fi hade ligne 3adna error hite hadak id dija dernahe fi insert fi base donne hite hena khasena ndiro insert dyale donne jdadine ya3eni les valeur jdade o mli deret liha comontaire 3ade executate lina ligne li 9ablo o mli 4adi tmchi lbasse donne 4adi tl9aye doke li valeure tzado  / ila b4iti t3awedi tchofi 4adi tmesshi hade 2 dyale les line o 4adi diri ligne lewele fihe valeur jadade makayninche fi base donne o ligne tani fihe les valeur kaynine fi base donne
    // $pdo->commit();

 
} catch (PDOException $e) {
    // $pdo->rollBack();
    echo "Failed :" .$e->getMessage();
}
 
 
//query method


// $posts = $pdo->query('SELECT * FROM posts');

// foreach($posts as $post){
//     echo $post['titre'];
// }



