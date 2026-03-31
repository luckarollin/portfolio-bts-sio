<?php
$page_active = 'comp';
$asset_path  = '../';
require '../config.php';
require '../includes/header.php';
?>

<div class="page-header">
  <p class="breadcrumb"><a href="../index.php">Accueil</a> <span class="sep">/</span> Compétences</p>
  <h1 class="page-title">Compétences</h1>
</div>

<h2 class="st">Compétences techniques</h2>
<div class="skills-g">
  <?php foreach ($competences as $i => $c) : ?>
    <div class="sk" style="animation-delay:<?php echo $i * 0.06; ?>s">
      <h3><?php echo htmlspecialchars($c['n']); ?></h3>
      <p><?php echo htmlspecialchars($c['d']); ?></p>
    </div>
  <?php endforeach; ?>
</div>

<div class="soft-wrap">
  <p class="soft-t">Qualités &amp; langues</p>
  <ul class="pills">
    <?php foreach ($soft as $s) : ?>
      <li><?php echo htmlspecialchars($s); ?></li>
    <?php endforeach; ?>
  </ul>
</div>

<?php require '../includes/footer.php'; ?>
