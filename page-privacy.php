<?php get_header(); ?>

<main role="main" aria-labelledby="privacy-title">
    <section class="p-privacy">
        <div class="p-privacy__inner l-inner">
            <h1 id="privacy-title" class="p-privacy__heading">
                <?php the_title(); ?>
            </h1>

            <div class="p-privacy__content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>