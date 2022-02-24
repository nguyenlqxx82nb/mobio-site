
<?php 
  if (!$args["no-title"]) {
?>

  <?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-175',
      'title-sm' => 'library',
      'title' => 'Some Documents You Might Find Helpful',
    )); ?>

<?php } ?>

  
<?php get_template_part('template-parts/row-content-three',null,
  array( 
    'classExtend' => 'mr-t-50',
    'content' => array(
      array(
        'class-image' => 'object-fit-contain',
        'img-src' => get_template_directory_uri(). '/images/home/ebook.png',
        'title' => 'Ebook: Marketing trends in 2022',
        'desc' => 'A CDP gives a retailer the ability to grab and integrate data from all the places their customers.',
        'next' => 'Download Ebook >>',
        'next-url' => '#',
      ),
      array(
        'img-src' => get_template_directory_uri(). '/images/home/library2.jpg',
        'title' => 'How to build a customer journey that engage?',
        'desc' => 'The new consumer behaviors span all areas of life, from how we work to how we shop to how we entertain ourself.',
        'next' => 'See Guideline >>',
        'next-url' => '#',
      ),
      array(
        'img-src' => get_template_directory_uri(). '/images/home/library3.jpg',
        'title' => 'How Banking Industry Adapts to the Digital Era?',
        'desc' => "During the crisis, banks' clients changed their behaviour overnight.",
        'next' => 'Read Blog Post >>',
        'next-url' => '#',
      )
    )
  )); ?>