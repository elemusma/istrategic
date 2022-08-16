<?php

/**
 * Template Name: Mena
 */

 get_header();

 // start of bars
 
 if(have_rows('bars_section')): while(have_rows('bars_section')): the_row();

    if(get_sub_field('content')){
        echo '<section class="pt-5 pb-5 position-relative" style="">';
        echo '<div class="container">';
        echo '<div class="row justify-content-center">';
        echo '<div class="col-md-9 text-center">';
        echo get_sub_field('content');
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }

if(have_rows('individual_bars')):
$barsCounter = 0;
echo '<section class="position-relative overflow-h" style="">';

echo '<div class="row" style="">';



while(have_rows('individual_bars')): the_row();

$barsCounter++;

$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);
$image = get_sub_field('image');
$imageMobile = get_sub_field('image_mobile');
$icon = get_sub_field('icon');
$innerContent = get_sub_field('inner_content');
$link = get_sub_field('link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';


echo '<div class="col-lg-3 col-md-6 text-center w-100 overflow-h position-relative z-2 col-full-background d-flex align-items-end justify-content-center" style="padding-top:100px;padding-bottom:0px;min-height:83vh;" id="col-' . $ID . '">';

if($barsCounter == 1){

    // start of image mobile for first column
    if($imageMobile){
        echo wp_get_attachment_image($imageMobile['id'],'full','',['class'=>'position-absolute d-lg-none d-block w-100 h-100 img-full-background','style'=>'top:0;left:0;object-fit:cover;']);
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute d-lg-block d-none h-100 img-full-background','style'=>'top:0;left:0;object-fit:cover;']);
    } else {
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute h-100 img-full-background','style'=>'top:0;left:0;object-fit:cover;']);
    }
    // end of image mobile for first column

} else {

    if($imageMobile){
        echo wp_get_attachment_image($imageMobile['id'],'full','',['class'=>'position-absolute d-lg-none d-block w-100 h-100 img-full-background','style'=>'top:0;left:0;object-fit:cover;']);
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute d-lg-block d-none h-100 img-full-background','style'=>'top:0;left:-' . ($barsCounter-1) . '00%;object-fit:cover;']);
    } else {
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute h-100 img-full-background','style'=>'top:0;left:-' . ($barsCounter-1) . '00%;object-fit:cover;']);
    }

}
echo '<div class="position-absolute h-100 bg-black col-full-background-overlay" style="opacity:0;pointer-events:none;top:0;width:110vw;left:-' . ($barsCounter-1) . '00%;"></div>';

echo '<div class="position-absolute w-100 h-100 col-full-background-borders" style="top:0;left:0;border-left:1px solid white;pointer-events:none;"></div>';


echo '<div class="position-relative inner-content-outer" style="transition:all .25s ease-in-out;">';

echo '<a class="" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" style="text-decoration:none;">';

echo '<div class="image-title">';
echo '<div class="d-inline-block" style="border:1px solid var(--accent-primary);border-radius:50%;padding:5px;">';
echo wp_get_attachment_image($icon['id'],'full','',['class'=>'','style'=>'width:35px;height:35px;object-fit:contain;']);
echo '</div>';

echo '<div class="pt-3 pb-3"><span class="h4 text-white">' . $title . '</span></div>';
echo '</div>';

echo '<div class="pl-1 pr-1 text-white inner-content">';
echo $innerContent;
echo '</div>';

echo '</a>';

echo '</div>';
echo '</div>';

endwhile;

echo '</div>';
echo '</section>';
endif;
// end of bars repeaters

endwhile; endif;

// end of bars

//  start of intro
if(have_rows('intro_section')): while(have_rows('intro_section')): the_row();


if(have_rows('intro_repeater')): while(have_rows('intro_repeater')): the_row();
$bgImage = get_sub_field('background_image');
$content = get_sub_field('content');
$image = get_sub_field('image');

if($bgImage){
    echo '<section class="pt-5 pb-5 position-relative text-white section-intro-sections" style="">';
    echo wp_get_attachment_image($bgImage['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);
    echo '<div class="position-absolute w-100 h-100 bg-black" style="top:0;left:0;opacity:.4;"></div>';
} else {
    echo '<section class="pt-5 pb-5 position-relative section-intro-sections" style="">';

}
echo '<div class="container">';
echo '<div class="row row-intro-sections justify-content-start">';

echo '<div class="col-md-5 pt-5 pb-5">';
echo $content;
echo '</div>';

if($image):
echo '<div class="col-md-6">';
echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
echo '</div>';
endif;

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;

endwhile; endif;
//  end of intro


 get_footer();

?>