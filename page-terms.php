<?php get_header(); ?>

<main role="main" aria-labelledby="privacy-title">
    <section class="p-terms">
        <div class="p-terms__inner l-inner">
            <h1 id="privacy-title" class="p-terms__heading">
                <?php the_title(); ?>
            </h1>

            <div class="p-terms__content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>