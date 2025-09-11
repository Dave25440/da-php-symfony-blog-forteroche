<h2>Statistiques des articles</h2>

<div class="adminArticle">
    <div class="articleLine header">
        <div class="flexTitle">
            <a href="?action=showMonitoring&sort=title&order=<?= ($sort === 'title' && $order === 'asc') ? 'desc' : 'asc' ?>">
                Titre <?= Utils::renderSortArrow('title', $sort, $order) ?>
            </a>
        </div>
        <div class="counter">
            <a href="?action=showMonitoring&sort=views&order=<?= ($sort === 'views' && $order === 'asc') ? 'desc' : 'asc' ?>">
                Vues <?= Utils::renderSortArrow('views', $sort, $order) ?>
            </a>
        </div>
        <div class="counter">
            <a href="?action=showMonitoring&sort=comments&order=<?= ($sort === 'comments' && $order === 'asc') ? 'desc' : 'asc' ?>">
                Commentaires <?= Utils::renderSortArrow('comments', $sort, $order) ?>
            </a>
        </div>
        <div class="date">
            <a href="?action=showMonitoring&sort=date&order=<?= ($sort === 'date' && $order === 'asc') ? 'desc' : 'asc' ?>">
                Date de publication <?= Utils::renderSortArrow('date', $sort, $order) ?>
            </a>
        </div>
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