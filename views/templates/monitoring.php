<h2>Statistiques des articles</h2>

<div class="adminArticle">
    <div class="articleLine">
        <div>Titre</div>
        <div>Vues</div>
        <div>Commentaires</div>
        <div>Date de publication</div>
    </div>
    <?php foreach ($articles as $article) { ?>
        <div class="articleLine">
            <div><?= $article->getTitle() ?></div>
            <div><?= $article->getViews() ?></div>
            <div>0</div>
            <div><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></div>
        </div>
    <?php } ?>
</div>

<div class="adminMenu">
    <a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>
    <a class="submit" href="index.php?action=admin">Retour</a>
</div>