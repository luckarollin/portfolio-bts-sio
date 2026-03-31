<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Portfolio de <?php echo htmlspecialchars($nom); ?> — <?php echo htmlspecialchars($formation); ?>" />
  <title><?php echo htmlspecialchars($nom); ?> — Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo $asset_path; ?>assets/css/style.css" />
</head>
<body>

<header class="hd">
  <div class="hd-i">
    <a href="<?php echo $asset_path; ?>index.php" class="logo">
      <span class="logo-n"><?php echo htmlspecialchars($nom); ?></span>
      <span class="logo-s"><?php echo htmlspecialchars($formation); ?></span>
    </a>

    <button class="nav-toggle" aria-label="Menu" onclick="this.nextElementSibling.classList.toggle('open')">
      <span></span><span></span><span></span>
    </button>

    <nav class="hnav">
      <?php
      $b = $asset_path;
      $links = [
        'home'    => [$b.'index.php',             'Accueil'],
        'comp'    => [$b.'vues/competences.php',   'Compétences'],
        'exp'     => [$b.'vues/experiences.php',   'Expériences'],
        'proj'    => [$b.'vues/projets.php',        'Projets'],
        'contact' => [$b.'vues/contact.php',        'Contact'],
      ];
      foreach ($links as $key => [$href, $label]):
        $cls = ($page_active === $key) ? ' class="on"' : '';
      ?>
        <a href="<?php echo $href; ?>"<?php echo $cls; ?>><?php echo $label; ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</header>

<div id="app">
