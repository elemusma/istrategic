<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php }
wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(get_field('body','options')) { the_field('body','options'); } ?>
<div class="blank-space"></div>
<header class="position-relative pt-3 pb-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">

<div class="nav">
<div class="container">
<div class="row align-items-center justify-content-center">
<!-- <div class="col-lg-2 col-md-6 mobile-hidden">

</div> -->
<div class="col-lg-4 col-md-6 mobile-hidden">
<?php wp_nav_menu(array(
'menu' => 'Left',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); ?>
</div>

<div class="col-lg-4 col-9 text-center">
    <?php 
    echo '<a href="' . home_url() . '" class="d-inline-block w-100" style="">';
    $logo = get_field('logo','options'); 
    if($logo){
    echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'h-auto','style'=>'width:445px;max-width:100%;']); 
    }
    echo '</a>';
?>
</div>

<div class="col-lg-4 col-md-6 mobile-hidden">
<?php wp_nav_menu(array(
'menu' => 'Right',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); ?>
</div>
<!-- <div class="col-1">

</div> -->
<!-- <div class="col-lg-2 col-md-6 mobile-hidden">
<?php wp_nav_menu(array(
'menu' => 'Contact',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-end mb-0'
)); ?>
</div> -->
<div class="col-lg-4 col-3 desktop-hidden">
<a id="navToggle" class="nav-toggle">
<div>
<div class="line-1 bg-accent"></div>
<div class="line-2 bg-accent"></div>
<div class="line-3 bg-accent"></div>
</div>
</a>
</div>
<div id="navMenuOverlay" class="position-fixed z-2"></div>
<div class="col-md-6 col-10 nav-items bg-white desktop-hidden" id="navItems">

<div class="pt-5 pb-5">
<div class="close-menu">
<div>
<span id="navMenuClose" class="close h1">X</span>
</div>
</div>
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}
?>
</a>
</div>
<?php 
wp_nav_menu(array(
'menu' => 'Left',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
));
wp_nav_menu(array(
'menu' => 'Right',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
));
// wp_nav_menu(array(
// 'menu' => 'Contact',
// 'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-end mb-0'
// ));

echo '<div class="pt-5"></div>';

$galleryFooter = get_field('footer_gallery','options');

if( $galleryFooter ): 
echo '<div class="d-flex pb-5">';
foreach( $galleryFooter as $image ):
// echo '<div class="col-12 text-center">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-auto img-portfolio ml-2 mr-2','style'=>'height:45px;object-fit:contain;'] );
echo '<div class="pb-3"></div>';
echo '<br>';
// echo '</div>';
endforeach; 
echo '</div>';
endif;

?>
</div>
</div>
</div>
</div>

</header>
<?php
echo '<section class="hero position-relative">';
$globalPlaceholderImg = get_field('global_placeholder_image','options');

if(!is_front_page()):
if(is_page()){
if(has_post_thumbnail()){
the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
endif;


if(is_front_page()) {
    
    if(have_rows('header_carousel')):
        // echo '<div class="" style="padding:100px 0 300px;">';
        echo '<div class="header-carousel owl-carousel owl-theme">';

while(have_rows('header_carousel')): the_row();
$image = get_sub_field('image');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');

echo '<div class="hero-content position-relative text-center d-flex justify-content-center align-items-center" style="min-height:550px;height:55vh;">';

echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);

echo '<div>';
echo '<h2 class="pt-3 pb-3 mb-0 position-relative text-center text-accent-secondary h1" style="letter-spacing:0.2em;text-shadow:1px 1px rgba(255,255,255,.5);">' . get_the_title() . '</h2>';


echo '<div class="pr-3 pl-3 pb-2 d-inline-block text-white position-relative" style="">';
echo '<h3 class="h2 text-shadow text-uppercase">' . $subtitle . '</h3>';
echo '</div>';
echo '</div>';


echo '</div>';


endwhile;

echo '</div>';
// echo '</div>';
endif;

}



// if(!is_front_page()) {
// echo '<div class="container pt-5 pb-5 text-white text-center">';
// echo '<div class="row">';
// echo '<div class="col-md-12">';
// if(is_page() || !is_front_page()){
// echo '<h1 class="">' . get_the_title() . '</h1>';
// } elseif(is_single()){
// echo '<h1 class="">' . get_single_post_title() . '</h1>';
// } elseif(is_author()){
// echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// } elseif(is_tag()){
// echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// } elseif(is_category()){
// echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// } elseif(is_archive()){
// echo '<h1 class="">' . get_archive_title() . '</h1>';
// }
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }

echo '</section>';
?>