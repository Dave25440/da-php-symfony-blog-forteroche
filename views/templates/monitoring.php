<h2>Statistiques des articles</h2>

<div class="adminArticle">
    <div class="articleLine header">
        <div class="flexTitle">Titre</div>
        <div class="counter">Vues</div>
        <div class="counter">Commentaires</div>
        <div class="date">Date de publication</div>
    </div>
    <?php foreach ($articles as $index => $article) {
        $class = ($index % 2 === 1) ? 'alternate' : '';
    ?>
        <div class="articleLine <?= $class ?>">
            <div class="flexTitle"><?= $article->getTitle() ?></div>
            <div class="counter number"><?= $article->getViews() ?></div>
            <div class="counter number"><?= $commentCounts[$article->getId()] ?? 0 ?></div>
            <div class="date"><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></div>
        </div>
    <?php } ?>
</div>

<div class="adminMenu">
    <a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>
    <a class="submit" href="index.php?action=admin">Retour</a>
</div>