<?php
$page_active = 'contact';
$asset_path  = '../';
require '../config.php';

$sent   = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fn = trim($_POST['fn'] ?? '');
    $fe = trim($_POST['fe'] ?? '');
    $fs = trim($_POST['fs'] ?? '');
    $fm = trim($_POST['fm'] ?? '');

    if (empty($fn))                              $errors[] = 'Le nom est obligatoire.';
    if (!filter_var($fe, FILTER_VALIDATE_EMAIL)) $errors[] = 'L\'adresse e-mail est invalide.';
    if (empty($fm))                              $errors[] = 'Le message est obligatoire.';

    if (empty($errors)) $sent = true;
}

require '../includes/header.php';

$h = (int) date('H');
$avail = ($h >= 8 && $h < 20)
    ? 'Il est <strong>'.date('H\hi').'</strong> — je suis probablement disponible. 🟢'
    : 'Je répondrai dès demain. 🔵';
?>

<div class="page-header">
  <p class="breadcrumb"><a href="../index.php">Accueil</a> <span class="sep">/</span> Contact</p>
  <h1 class="page-title">Contact</h1>
</div>

<div class="contact-wrap">

  <!-- Coordonnées -->
  <aside class="ccard">
    <h3>Coordonnées</h3>
    <ul class="ci-l">
      <li><span class="ico">📞</span><a href="tel:<?php echo preg_replace('/\s/', '', $tel); ?>"><?php echo htmlspecialchars($tel); ?></a></li>
      <li><span class="ico">✉️</span><a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></li>
      <li><span class="ico">📍</span><span><?php echo htmlspecialchars($ville); ?></span></li>
      <li><span class="ico">🌐</span><a href="https://www.linkedin.com/" target="_blank" rel="noreferrer">LinkedIn</a></li>
    </ul>
    <hr class="dv" />
    <p class="avail"><?php echo $avail; ?></p>
    <p class="avail" style="margin-top:6px">Langues : Français (natif), Anglais (B1)</p>
  </aside>

  <!-- Formulaire -->
  <div>
    <?php if ($sent) : ?>
      <div class="fcard confirm">
        <div class="ck">✅</div>
        <h2>Merci <?php echo htmlspecialchars($fn); ?> !</h2>
        <p>Votre message a bien été envoyé.<br>Je vous répondrai à <strong><?php echo htmlspecialchars($fe); ?></strong> très prochainement.</p>
        <a class="btn g" href="contact.php">Envoyer un autre message</a>
      </div>

    <?php else : ?>

      <?php if (!empty($errors)) : ?>
        <ul class="erreurs">
          <?php foreach ($errors as $err) : ?>
            <li><?php echo htmlspecialchars($err); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <form class="fcard" method="POST" action="contact.php">
        <label class="fl">Nom complet *
          <input class="fi" type="text" name="fn" required placeholder="Ex : Antoine Dupont"
            value="<?php echo isset($fn) ? htmlspecialchars($fn) : ''; ?>" />
        </label>
        <label class="fl">Adresse e-mail *
          <input class="fi" type="email" name="fe" required placeholder="votre@email.fr"
            value="<?php echo isset($fe) ? htmlspecialchars($fe) : ''; ?>" />
        </label>
        <label class="fl">Sujet
          <input class="fi" type="text" name="fs" placeholder="Stage, alternance, question…"
            value="<?php echo isset($fs) ? htmlspecialchars($fs) : ''; ?>" />
        </label>
        <label class="fl">Message *
          <textarea class="fi" name="fm" rows="5" required
            placeholder="Votre message…"><?php echo isset($fm) ? htmlspecialchars($fm) : ''; ?></textarea>
        </label>
        <button class="btn" type="submit">Envoyer le message</button>
      </form>

    <?php endif; ?>
  </div>

</div>

<?php require '../includes/footer.php'; ?>
