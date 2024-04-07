        <footer>
            <div class="modal-overlay">
            <?php 
                $current_url = $_SERVER['REQUEST_URI'];
                if (strpos($current_url, 'eng') !== false) : ?>
                <?php get_template_part('assets/template-parts/contact-form-eng'); ?>
            <?php else: ?>
                <?php get_template_part('assets/template-parts/contact-form-fr'); ?>
            <?php endif; ?>
            </div>
            <p lang="en">© All Rights Reserved</p>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>
</html>