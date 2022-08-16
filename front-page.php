<?php 

get_header();

// start of intro
if(have_rows('intro_content')): while(have_rows('intro_content')): the_row();
$link = get_sub_field('link');
$popup = get_sub_field('popup');

echo '<section class="position-relative" style="padding:100px 0;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-8 text-center">';

echo get_sub_field('content');

if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

if($link_url == '#'){
    echo '<span class="bg-accent-outline btn btn-lg btn-learn-more open-modal" id="btn-learn-more">' . esc_html( $link_title ) . '</span>';

echo '<div class="modal-content btn-learn-more position-fixed w-100 h-100 z-3" style="opacity:0;">';
echo '<div class="bg-overlay"></div>';
echo '<div class="bg-content">';
echo '<div class="bg-content-inner">';
echo '<div class="close" id="">X</div>';
echo '<div>';
echo get_sub_field('popup');
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';

} else {
    echo '<a class="bg-accent-outline btn btn-lg" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '">' . esc_html( $link_title ) . '</a>';
}
endif;

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of intro

// start of vision
if(have_rows('vision_content')): while(have_rows('vision_content')): the_row();
$bgImg = get_sub_field('background_image');
$pretitle = get_sub_field('pretitle');
$ID = sanitize_title_with_dashes($pretitle);
$content = get_sub_field('content');


echo '<section class="position-relative bg-attachment d-flex align-items-center bg-img testing-class" style="background:url(' . wp_get_attachment_image_url($bgImg['id'], 'full') . ');background-size:contain;background-position:right;background-repeat:no-repeat;min-height:550px;height:55vh;" id="' . $ID . '">';
echo '<div class="container">';
echo '<div class="row">';

if($bgImg){
    echo '<div class="col-12 d-md-none d-block pb-4 pt-5">';
    echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'w-100 h-100']);
    echo '</div>';
}

echo '<div class="col-md-5">';

echo '<h2 class="">' . $pretitle . '</h2>';
echo '<div class="divider"></div>';
echo $content;

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of vision

echo '<div class="pt-5 pb-5"></div>';

// start of values
$valuesBgImg = get_field('values_background_image');

if($valuesBgImg):

echo wp_get_attachment_image($valuesBgImg['id'],'full','',['class'=>'w-100 h-auto']);

echo '<section class="pt-5 pb-5 position-relative" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-9 text-center">';
echo '<h2>' . $valuesBgImg['title'] . '</h2>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endif;
// end of values



// echo '<div class="pt-5"></div>';

// start of integrity
if(have_rows('integrity_content')): while(have_rows('integrity_content')): the_row();
$bgImg = get_sub_field('background_image');
$pretitle = get_sub_field('pretitle');
$content = get_sub_field('content');


echo '<section class="position-relative bg-attachment" style="padding:200px 0;background:url(' . wp_get_attachment_image_url($bgImg['id'], 'full') . ');background-size:cover;background-attachment:fixed;background-position:center;border-top:25px solid #ebebeb;border-bottom:25px solid #ebebeb;">';
echo '<div class="container">';
echo '<div class="row justify-content-end">';
echo '<div class="col-md-5">';

echo '<h2>' . $pretitle . '</h2>';
echo '<div class="divider"></div>';
echo $content;

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of integrity

// echo '<div class="pt-5"></div>';

// start of bottom content
if(have_rows('bottom_content')): while(have_rows('bottom_content')): the_row();
$content = get_sub_field('content');

echo '<section class="pt-5 pb-5 position-relative" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-9 text-center">';

echo $content;

echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of bottom content



// how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

get_footer(); ?>