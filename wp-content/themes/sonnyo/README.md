# Sonnyo

> A Vue.js and Wordpress project

## Steps

1. Install WP
2. Create a new theme with style.css, index.php and functions.php
3. Add vue cli webpack
4. Do code
5. Build
6. Copy `dist/index.html` content to `index.php` and replace `/static` with `<?php echo get_template_directory_uri() ?>/dist/static`
7. Voila

Notes: The "welcome to Vue" text is displayed, with a quick flash, then disappears. In dev mode is all fine ...
