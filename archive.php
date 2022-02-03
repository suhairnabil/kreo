<?php get_header() ?>


<div <?php post_class('single_top_banner') ?>>
    <div class="row">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php site_url() ?>"><?php _e('Home')?></a></li>
                <li class="breadcrumb-item active "><?php single_cat_title(); ?></li>
            </ol>
        </div>


    </div>
</div>
<section class="single_content">
    <div class="row ">
         <h1 class="cat_title"><?php single_cat_title(); ?></h1>
        <?php
    
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

         <div class='four columns'>
              <div class='the_post_thumbnail'>	<?php the_post_thumbnail() ?></div>
                  
                    <h4 class="cat-post-title"><?php the_title() ?> </h4>
                    <p class="cat-post-meta"><?php echo get_the_date() ?> by <?php the_author_link() ?></p>
                    <p class="cat-post-meta" style="border: 1px  #ccc solid;"><?php echo get_post_format() ?> </p>
                    <p><?php the_excerpt() ?> </p>
                    <p class='post_continu_reading'><a href="<?php the_permalink() ?>"><?php _e('Continu reading')?></a></p>
                </div>

        <?php
            endwhile;
        endif;

        ?>


    </div>
</section>




<main class="container">




    <div class="row g-5">
        <div class="col-md-8">

            <nav class="blog-pagination" aria-label="Pagination">
                <?php previous_posts_link('Older') ?>
                <?php next_posts_link('Newer') ?>
            </nav>
           

        </div>


    </div>

</main>

<?php get_footer(); ?>