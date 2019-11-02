</main>

<footer id="footer" >

</footer>
<?php if(!$page->isHomePage()): ?>
    <!-- <div class="footer_gradient absolute inset-x-0 bottom-0 h-80 z-0" style="background-image: linear-gradient(to bottom, rgba(246,139,31,0), rgba(246,139,31,1));"></div> -->
<?php endif; ?>

<?= mix('/main.js') ?>
<?php if($page->intendedTemplate() == 'projects' || $page->intendedTemplate() == 'about') {
    snippet('photoswipe');
};
?>
</body>
</html>
