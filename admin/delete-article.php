<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = Database::getConn();

if (isset($_GET['id'])) {

    //$article = getArticle($conn, $_GET['id']);
    $article = Article::getByID($conn, $_GET['id']);

    if (! $article) {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}

//if (empty($errors)) {
if ($_SERVER['REQUEST_METHOD'] == "POST") {

     if ($article->delete($conn)) {
        Url::redirect("/admin/index.php");

      }
}

?>

<?php require '../includes/header.php'; ?>

<h2>Are you sure to delete article?</h2>
<form method="post">
  <button>Delete</button>
  <a href="article.php?id=<?=$article->id ?>">Cancel</a>
</form>

<?php require '../includes/footer.php'; ?>
