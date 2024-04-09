<?php
// Get the current URL
$current_url = $_SERVER['REQUEST_URI'];

// Check if the URL contains 'eng' (assuming this indicates English)
if (strpos($current_url, 'eng') !== false) {
    $button_text = 'Visit the website';
    $technos = 'Tools used: ';
} else {
    $button_text = 'Visitez le site';
    $technos = 'Outils Utilisés: ';
}
?>

<div class="project">
    <div class="project__main">
        <?php
            // Get the image field value
            $image = get_field('preview');

            // Check if the image field has a value
            if ($image) {
                // Output the image tag with src and alt attributes
                echo '<img class="reveal" src="' . esc_attr($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
            }
        ?>
        <h3>
            <?php echo get_the_title(); ?>
        </h3>
    </div>
    <div class="project__infos">
    <p class="technos">
        <?php
        $terms = get_the_terms(get_the_ID(), 'technology');

        if ($terms && !is_wp_error($terms) && !empty($terms)) {
            // Initialize an empty array to store term names
            $term_names = array();

            // Loop through each term and collect term names
            foreach ($terms as $term) {
                $term_names[] = esc_html($term->name); // Store each term name in the array
            }

            // Join the term names array into a comma-separated string
            $term_list = implode(', ', $term_names);

            // Output the list of terms within the <p> element
            echo $technos . $term_list;
        }
        ?>
    </p>
        <div class="btns">
            <a class="github" href="<?php echo esc_url(get_field('github_url')); ?>">
                <img class="github__logo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/github-dark.png'); ?>" alt="Github logo">
            </a>
            <a class="site" href="<?php echo esc_url(get_field('site_url')); ?>">
                <button class="site__btn"><?php echo esc_html($button_text); ?></button>
            </a>
        </div>
    </div>
</div>