<?php
/**
 * Template Name: Partners Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 
<!-- header -->
<?php get_template_part('template-parts/header-partners',null,
                          array(
                            'classExtend' => ''
                          )); ?>

<?php 
  get_template_part('template-parts/partner-list',null,
    array(
      'classExtend' => 'mr-t-150 mr-t-80-s1',
      'title' => 'Consultation Partners',
      'partners' => array(
        array(
          'logo' => '/images/logo-partner/gigan.png',
          'name' => 'Gigan JSC',
          'type' => 'Performance Marketing Agency',
          'desc' => 'GIGAN JSC is one of the leading agencies in Performance Marketing, with the ability to deploy and optimize marketing effectiveness on the basis of advanced technology.',
          'industry' => 1,
          'industry-desc' => 'E-commerce, Retail, Education, Real Estate, Travel, Fitness, Finance, Technology.',
          'address' => 'gigan.vn',
          'url' => 'https://gigan.vn'
        ),
        array(
          'logo' => '/images/logo-partner/omega.png',
          'name' => 'OMEGA JSC',
          'type' => 'Performance Marketing Agency',
          'desc' => 'OMEGA JSC has 10 years experience in digital marketing, providing online media services based on final KPI of the campaigns.',
          'industry' => 1,
          'industry-desc' => 'E-commerce, Retail, Education, Real Estate, Travel, Fitness, Finance, Technology.',
          'address' => 'omegamedia.vn',
          'url' => 'https://omegamedia.vn'
        ),
        array(
          'logo' => '/images/logo-partner/sage.png',
          'name' => 'SAGE JSC',
          'type' => 'Business Administration Academy',
          'desc' => 'SAGE JSC is one of the leading agencies in Performance Marketing, with the ability to deploy and optimize marketing effectiveness on the basis of advanced technology. ',
          'industry' => 1,
          'industry-desc' => 'E-commerce, Retail, Education, Real Estate, Travel, Fitness, Finance, Technology.',
          'address' => 'sage.vn',
          'url' => 'https://sage.vn'
        )
      )
    )); ?>

<?php 
  get_template_part('template-parts/partner-list',null,
    array(
      'classExtend' => 'mr-t-50',
      'title' => 'integration Partners',
      'partners' => array(
        array(
          'logo' => '/images/logo-partner/vnlife.png',
          'name' => 'VNlife',
          'type' => 'Digital Ecosystem',
          'desc' => 'VNLIFE is one of the leading agencies in Performance Marketing, with the ability to deploy and optimize marketing effectiveness on the basis of advanced technology. ',
          'address' => 'vnlife.vn',
          'url' => 'https://vnlife.vn'
        ),
        array(
          'logo' => '/images/logo-partner/microsoft-azure.png ',
          'name' => 'microsoft azure',
          'type' => 'Cloud Computing Service',
          'desc' => 'MICROSOFT AZURE has 10 years experience in digital marketing, providing online media services based on final KPI of the campaigns.',
          'address' => 'azure.microsoft.com',
          'url' => 'https://azure.microsoft.com'
        ),
        array(
          'logo' => '/images/logo-partner/zns.png',
          'name' => 'zalo zns',
          'type' => 'Customer Service Messaging',
          'desc' => 'ZALO ZNS is one of the leading agencies in Performance Marketing, with the ability to deploy and optimize marketing effectiveness on the basis of advanced technology. ',
          'address' => 'ezns.vn',
          'url' => 'https://ezns.vn'
        ),
        array(
          'logo' => '/images/logo-partner/ladipage.png',
          'name' => 'ladipage',
          'type' => 'Landing Page Builder',
          'desc' => 'LADIPAGE  is one of the leading agencies in Performance Marketing, with the ability to deploy and optimize marketing effectiveness on the basis of advanced technology. ',
          'address' => 'ladipage.vn',
          'url' => 'https:// ladipage.vn'
        ),
        array(
          'logo' => '/images/logo-partner/stringee.png',
          'name' => 'stringee',
          'type' => 'Communication APIs',
          'desc' => 'STRINGEE has 10 years experience in digital marketing, providing online media services based on final KPI of the campaigns.',
          'address' => 'stringee.com',
          'url' => 'https://stringee.com'
        ),
        array(
          'logo' => '/images/logo-partner/bepos.png ',
          'name' => 'bePOS',
          'type' => 'Sales Management Software',
          'desc' => 'BEPOS is software company in sale managment software, with the ability to deploy and optimize marketing effectiveness on the basis of advanced technology. ',
          'address' => 'bepos.io',
          'url' => 'https://bepos.io'
        ),
        array(
          'logo' => '/images/logo-partner/hpt.png',
          'name' => 'hpt',
          'type' => 'ITC Technology',
          'desc' => 'HPT  is one of the leading agencies in Performance Marketing, with the ability to deploy and optimize marketing effectiveness on the basis of advanced technology. ',
          'address' => 'hpt.vn',
          'url' => 'https://hpt.vn'
        ),
        array(
          'logo' => '/images/logo-partner/vmg.png ',
          'name' => 'vmg',
          'type' => 'Media Group',
          'desc' => 'VMG MEDIA has 10 years experience in digital marketing, providing online media services based on final KPI of the campaigns.',
          'address' => 'vmgmedia.vn',
          'url' => 'https://vmgmedia.vn'
        ),
      )
    )); ?>

  <?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-150',
      'title-sm' => 'become our partner',
      'title' => '<p>Why Partner With Us?</p>',
    )); ?>

  <?php get_template_part('template-parts/content-three',null,
    array( 
      'classExtend' => 'mr-t-50',
      'title-class' => 'f-b f-26',
      'items' => array(
        array(
          'icon-src' => get_template_directory_uri(). '/images/icon-digital.png',
          'name' => 'Grow your business',
          'desc' => 'Fuel sales with go-to-market opportunities that amplify your brand exposure and generate qualified leads.'
        ),
        array(
          'icon-src' => get_template_directory_uri(). '/images/icon-loyalty.png',
          'name' => 'Expand your market',
          'desc' => 'Grow your customer list and increase the opportunity to meet with customers at large firms, banks, and brands in the region.'
        ),
        array(
          'icon-src' => get_template_directory_uri(). '/images/icon-personal.png',
          'name' => 'Access a delicated team',
          'desc' => 'Work with Mobio’s partner team for sales support, co-marketing initiatives, and proofs of concept.'
        ),
      )
    )); ?>

    <div class="text-center mr-t-50 mr-t-20-s1">
      <button class="btn-small">BECOME OUR PARTNER</button>
    </div>
  
  <?php get_template_part('template-parts/footer-connect', null,
      array (
        'classExtend' => 'mr-t-250',
        'title' => 'Keep in touch with us!'
      )
    ); ?>


<?php get_template_part('template-parts/footer', null,
    array( 
      'home' => '0'
    )
  ); ?>