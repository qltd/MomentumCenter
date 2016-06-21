<div class="accordions bucket">
    <?php while(have_rows('accordion_content')): the_row(); ?>
        <div class="accordion">
            <div class="accordion-toggle"><i class="fa fa-plus"></i><i class="fa fa-minus"></i><?php the_sub_field('title'); ?></div>
            <div class="accordion-text">
                <?php the_sub_field('content'); ?>
            </div>
        </div>
    <?php endwhile; ?>
</div>