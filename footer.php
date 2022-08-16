<footer>
<section class="pt-5">
<div class="container">
<?php
$galleryFooter = get_field('footer_gallery','options');

// if( $galleryFooter ): 
// echo '<div class="row justify-content-center pb-5">';
// foreach( $galleryFooter as $image ):
// echo '<div class="col-lg-3 col-md-4 text-center">';

// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-portfolio','style'=>'height:75px;object-fit:contain;'] );

// echo '</div>';
// endforeach; 
// echo '</div>';
// endif;

?>
<div class="row justify-content-center">
<div class="col-md-5 text-center pb-5">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); $logoFooter = get_field('logo_footer','options'); 
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}
?>
</a>
</div>

</div>
</section>

<section class="bg-accent-secondary pt-5 pb-5">
<div class="container">
<div class="row">
<div class="col-12 text-center text-white">
<div class="text-gray-1">
<?php the_field('website_message','options'); ?>
</div>
<?php echo get_template_part('partials/si'); ?>
</div>
</div>
</div>
</div>
</section>

<div class="text-center pt-3 pb-3 pl-5 pr-5" style="background:#f2f2f2;">
<div class="d-flex justify-content-center align-items-center">
<a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">
<?php echo wp_get_attachment_image(95,'large','',['class'=>'h-auto ml-2','style'=>'width:215px;']); ?>
</a>
</div>
</div>
</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>