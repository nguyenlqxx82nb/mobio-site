<?php
/**
 * Template Name: FSI Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio 1.0
 */

get_header();
?>

<?php get_template_part('template-parts/header-page',null,
  array( 
    'title' => 'industry | BFSI',
    'name' => 'Conquer the Era of Privacy and Digital-first in the BFSI',
    'name-class' => 'w-750 f-b f-60 mr-t-25',
  ));
?>


<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-100',
      'title-sm' => 'solutions for banks',
      'title-sm-class' => 'f-b f-18 c-1-b',
      'title' => 'Best CDP for Banking Services',
    )
  );
?>

<?php get_template_part('template-parts/row-content-three',null,
  array( 
    'classExtend' => 'mr-t-50',
    'title-class' => 'f-30',
    'class-image-wrapper' => 'pa-t-30',
    'class-image' => 'object-fit-contain',
    'next-class' => 'upper-case',
    'title-class' => 'f-30',
    'content' => array(
      array(
        'title' => 'Card Center',
        'desc' => 'Manage all Card Programs, boost customer spending and transaction, cross-sell and upsell effectively, and reduce churn rate.',
        'img-src' => get_template_directory_uri(). '/images/industry-fsi/card-center.png',
        //'next' => 'learn insights >>',
        //'next-url' => '#'
      ),
      array(
        'title' => 'Digital Banking',
        'desc' => 'Grow app installation rate, eKYC, and time spent on the app; track every customer touchpoint in the mobile app; optimize CX and digital service registration rates.',
        'img-src' => get_template_directory_uri(). '/images/industry-fsi/digital-banking.png',
        //'next' => 'learn insights >>',
        //'next-url' => '#'
      ),
      array(
        'title' => 'Retail Banking',
        'desc' => "Increase top-funnel leads quality, improve the sales process, share data across teams and channels, grow and optimize CX while upholding data privacy.",
        'img-src' => get_template_directory_uri(). '/images/industry-fsi/retail-banking.png',
        //'next' => 'learn insights >>',
        //'next-url' => '#'
      )
    )
  ));
?> 

<?php get_template_part('template-parts/top-tenant-bank',null,
  	array(
			'classExtend' => 'mr-t-120'
		)); ?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-80',
      'desc' => 'To learn deeper about our designed solutions for the banking sector and banking cases,<br>please contact us for private consulting.',
      'desc-w' => 'w-750',
      'next-button' => 'contact us',
      'next-url' => get_site_url(). '/contact'
    )
  );
?>


<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-150',
    'icon' => get_template_directory_uri(). '/images/industry-fsi/fsi-1.svg',
    'title' => 'solutions for fintech',
    'title-class' => 'c-1-b',
    'name' => 'Fintech',
    'classImageRatio' => 'rt-1-1',
    'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-fsi/fintech.png',
    'desc' => "<p>With Mobio Platform, Fintechs can serve customers at a much faster pace, speed up transactions safely and securely. Fintechs can identify spending habits, as well as help users save money. 
      Fintechs focus on bespoke services that meet every demand of the customer, and this is where data comes into play.</p>
    <p class='mr-t-10'>See how Fintechs can attune to their customers' needs completely with our platform. </p>",
  )); ?>


<?php get_template_part('template-parts/row-content-two',null,
  array(
    'imageLeft' => '1',
    'classExtend' => 'mr-t-150',
    'icon' => get_template_directory_uri(). '/images/industry-fsi/fsi-2.svg',
    'title' => 'solutions for insurance',
    'title-class' => 'c-1-b',
    'name' => 'Insurance',
    'nameClass' => 'f-b',
    'classImage' => 'b-r-10',
    'classImageRatio' => 'rt-1-1',
    // 'classExtend' => 'mr-t-250',
    'classImageContainer' => 'pa-0',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-fsi/insurance.png',
    'desc' => "<p>Achieve true 1-to-1 personalized communications with policyholders & prospects in real-time with our intelligent engagement platform for insurance providers that goes beyond your standard CDP.</p>
    <p class='mr-t-10'>Mobio Platform to maximize revenue per policyholder of your insurance customers. </p>",
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-150',
    'icon' => get_template_directory_uri(). '/images/industry-fsi/fsi-3.svg',
    'title' => 'solutions for digital wallet',
    'title-class' => 'c-1-b',
    'name' => 'Digital wallet',
    'nameClass' => 'f-b',
    'classImageRatio' => 'rt-1-1',
    'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-fsi/e-wallet.png',
    'desc' => "<p>CDP helps Digital wallet to better manage their customer financial data privacy. Digital wallet companies can also create end-to-end marketing campaigns and build frictionless customer journeys while upholding all the customer data securely.</p>
    <p class='mr-t-10'>See how one of the top E-wallet in Vietnam successfully use MOBIO CDP to conquer the customer-obsessed era.</p>",
  )); ?>


  <?php 
    get_template_part('template-parts/section-title', null, 
      array(
        'classExtend' => 'mr-t-150',
        'title-sm' => 'library',
        'title' => 'Some documents you might find helpful',
      )
    );
  ?>

  <?php get_template_part('template-parts/row-content-three',null,
    array( 
      'classExtend' => 'mr-t-50',
      // 'title-class' => 'f-30',
      // 'class-image-wrapper' => 'pa-t-30',
      // 'class-image' => 'object-fit-contain',
      // 'next-class' => 'upper-case',
      // 'title-class' => 'f-30',
      'content' => array(
        array(
          'title' => 'VNPay use CDP to increase 10% ROI',
          'desc' => 'A CDP gives a retailer the ability to grab and integrate data from all the places their customers.',
          'img-src' => get_template_directory_uri(). '/images/industry-fsi/library1.png',
          'next' => 'Download Ebook >>',
          'next-url' => get_site_url(). '/coming-soon'
        ),
        array(
          'title' => 'How Insurance benefits from Sales & Marketing Autotool?',
          'desc' => 'Insurers can reduce their burden significantly with the help of automatic sales and marketing tools.',
          'img-src' => get_template_directory_uri(). '/images/industry-fsi/library2.png',
          'next' => 'See Guideline >>',
          'next-url' => get_site_url(). '/coming-soon'
        ),
        array(
          'title' => 'Why 2022 is the year of CDP - According to Fintech Business Blog',
          'desc' => "It’s widely acknowledged that customer data is a valuable resource for businesses.",
          'img-src' => get_template_directory_uri(). '/images/industry-fsi/library3.png',
          'next' => 'Read Blog Post >>',
          'next-url' => get_site_url(). '/coming-soon'
        )
      )
    ));
  ?> 



<?php 
  get_template_part('template-parts/footer-connect', null,
  array(
    'classExtend' => 'mr-t-150'
  ));
?>

<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>