<?php
$page_active = 'home';
$asset_path  = '';
require 'config.php';
require 'includes/header.php';

// Salutation dynamique
$h = (int) date('H');
if ($h >= 6 && $h < 12)       { $sal = 'Bonjour ☀️'; }
elseif ($h >= 12 && $h < 18)  { $sal = 'Bon après-midi 🌤️'; }
elseif ($h >= 18 && $h < 22)  { $sal = 'Bonsoir 🌙'; }
else                           { $sal = 'Bonne nuit ⭐'; }
?>

<!-- HERO -->
<div class="hero">
  <p class="hero-tag"><?php echo $sal; ?> — il est <?php echo date('H\hi'); ?></p>
  <h1 class="hero-name">Je suis <em><?php echo htmlspecialchars($nom); ?></em></h1>
  <p class="hero-form"><?php echo htmlspecialchars($formation); ?> · Lycée Paul Louis Courrier, Tours</p>
  <p class="hero-desc">Spécialisé dans l'administration systèmes, les réseaux et la gestion de parc. Rigoureux et motivé, j'aime relever des défis techniques et trouver des solutions efficaces.</p>
  <div class="hero-btns">
    <a class="btn" href="vues/contact.php">Me contacter</a>
    <a class="btn g" href="CV_vierge.pdf" download>Télécharger le CV</a>
  </div>
  <ul class="pills">
    <li>Autonomie</li><li>Curiosité</li><li>Rigueur</li><li>Permis B</li>
  </ul>
</div>

<!-- 4 CARTES CLIQUABLES -->
<div class="home-grid">

  <a class="home-card" href="vues/competences.php">
    <div class="home-card-ico">✅</div>
    <h3>Compétences</h3>
    <p>Windows Server, VirtualBox, GLPI, Cisco, Git, C#…</p>
    <div class="tags">
      <span class="tag"><?php echo count($competences); ?> compétences</span>
      <span class="tag">SISR</span>
    </div>
  </a>

  <a class="home-card" href="vues/experiences.php">
    <div class="home-card-ico">💼</div>
    <h3>Expériences</h3>
    <p>Missions professionnelles, bénévolat et formations.</p>
    <div class="tags">
      <span class="tag"><?php echo count($experiences); ?> expériences</span>
      <span class="tag"><?php echo count($formations); ?> formations</span>
    </div>
  </a>

  <a class="home-card" href="vues/projets.php">
    <div class="home-card-ico">📁</div>
    <h3>Projets</h3>
    <p>Compétences techniques mises en pratique</p>
    <div class="tags">
      <?php $nb = count(array_filter($projets, fn($p) => $p['ok'])); ?>
      <span class="tag"><?php echo $nb; ?> projets publics</span>
    </div>
  </a>

  <a class="home-card" href="vues/contact.php">
    <div class="home-card-ico">✉️</div>
    <h3>Contact</h3>
    <p>Disponible pour un stage — réponse rapide garantie.</p>
    <div class="tags">
      <span class="tag"><?php echo htmlspecialchars($email); ?></span>
    </div>
  </a>

</div>

<?php require 'includes/footer.php'; ?>
