<?php
$page_active = 'proj';
$asset_path  = '../';
require '../config.php';
require '../includes/header.php';

$mode = isset($_GET['mode']) && $_GET['mode'] === 'pro' ? 'pro' : 'public';
$is_pro = ($mode === 'pro');
?>

<div class="page-header">
  <p class="breadcrumb"><a href="../index.php">Accueil</a> <span class="sep">/</span> Projets</p>
  <h1 class="page-title">Projets</h1>
</div>

<div class="mode-t">
  <span>Mode :</span>
  <a href="projets.php?mode=public" class="bmode <?php echo !$is_pro ? 'on' : ''; ?>">Public</a>
  <a href="projets.php?mode=pro"    class="bmode <?php echo  $is_pro ? 'on' : ''; ?>">Pro / Recruteur</a>
</div>

<?php if ($is_pro) : ?>
  <p class="notice pro">✅ Mode recruteur activé — tous les projets sont visibles.</p>
<?php else : ?>
  <p class="notice">Affichage des projets publics uniquement.</p>
<?php endif; ?>

<div class="proj-g">
  <?php foreach ($projets as $p) :
    if (!$is_pro && !$p['ok']) continue;
  ?>
    <div class="pc <?php echo !$p['ok'] ? 'locked' : ''; ?>">
      <?php if (!$p['ok']) : ?>
        <span class="badge">🔒 Confidentiel</span>
      <?php endif; ?>
      <h3><?php echo htmlspecialchars($p['t']); ?></h3>
      <p class="desc"><?php echo htmlspecialchars($p['d']); ?></p>
      <div class="tags">
        <?php foreach ($p['tags'] as $tag) : ?>
          <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
        <?php endforeach; ?>
      </div>
      <?php if ($p['ok']) : ?>
        <a class="pl" href="<?php echo htmlspecialchars($p['lien']); ?>">Voir le projet →</a>
      <?php else : ?>
        <span class="pl-off">Accès restreint</span>
      <?php endif; ?>
    </div>
  <?php endforeach; ?>
</div>

<?php require '../includes/footer.php'; ?>
