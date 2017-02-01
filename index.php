<?php get_header(); ?>
    <div id="galeria">
        <div id="content">
            <div id="centraliza" class="container">
                <div class="row">
                    <h3>GALERIA DE FOTOS</h3>
                    <?php 
                        query_posts(array('type_post' => 'post', 'category_name'=>'galeria' , 'showposts' => 8,  'paged'=>$paged));

                        if(have_posts()):
                        while ($wp_query -> have_posts()) : $wp_query -> the_post();            
                    ?>
                    <div class="col-md-3">  
                        <div id="bg-noticias">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?>
                            <h3><?php the_title(); ?></h3>
                            <!-- <p><?php custom_length_excerpt(15); ?></p> -->
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div id="paginacao">
                        <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
                    </div>
                    <!-- PAGINAÇÃO -->
                    <?php else: ?>
                    <!-- no posts found -->
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>