</div><!-- #app -->

<footer class="ft">
  <p>© <?php echo date('Y'); ?> <?php echo htmlspecialchars($nom); ?> — <?php echo htmlspecialchars($formation); ?> &nbsp;·&nbsp; <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></p>
</footer>

<script>
  document.querySelectorAll('.hnav a').forEach(a => {
    a.addEventListener('click', () => {
      document.querySelector('.hnav').classList.remove('open');
    });
  });
</script>
</body>
</html>
