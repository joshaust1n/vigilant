<header class="shadowed">
    
</header>
<main class="shadowed card">
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <small>Posted <?php the_date('Y-m-d'); ?></small>
    <?php the_content(); ?>
</main>