<?php
$page_active = 'exp';
$asset_path  = '../';
require '../config.php';
require '../includes/header.php';
?>

<div class="page-header">
  <p class="breadcrumb"><a href="../index.php">Accueil</a> <span class="sep">/</span> Expériences</p>
  <h1 class="page-title">Expériences &amp; Formations</h1>
</div>

<h2 class="st">Expériences</h2>
<div class="tl">
  <?php foreach ($experiences as $e) : ?>
    <div class="ti">
      <div class="ti-dot"></div>
      <div class="ti-c">
        <div class="ti-row">
          <h3><?php echo htmlspecialchars($e['p']); ?></h3>
          <span class="time"><?php echo htmlspecialchars($e['t']); ?></span>
        </div>
        <p class="place"><?php echo htmlspecialchars($e['l']); ?></p>
        <p><?php echo htmlspecialchars($e['d']); ?></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<div class="sec-gap">
  <h2 class="st">Formations</h2>
  <ul class="edu-l">
    <?php foreach ($formations as $f) : ?>
      <li class="ei">
        <div>
          <strong><?php echo htmlspecialchars($f['dip']); ?></strong>
          <span class="mu"><?php echo htmlspecialchars($f['men']); ?></span>
        </div>
        <span class="time"><?php echo htmlspecialchars($f['a']); ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

<?php require '../includes/footer.php'; ?>
