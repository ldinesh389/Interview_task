<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php
    $layout_page=get_field('layouts',get_the_ID());
 
    if(!empty($layout_page)){
    $row_cnt=0;
        foreach($layout_page as $layout){
            $row_cnt++;             
            global $layout, $layout_id;             
            $layout_id=$row_cnt."-".get_the_ID();
            if(!empty($layout)){
                get_template_part( 'template-parts/layouts/content', $layout['layout_type'] );
            }else{
                $layout="";
            }
        }
    }
    else {
       the_content(); 
    }
?>

<?php endwhile; ?>


<?php get_footer(); ?>