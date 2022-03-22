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
      'classExtend' => 'mr-t-10 mr-t-80-s0',
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
          'industry-desc' => 'Marketing, Communication, Coaching & Consulting, Leadership, Business',
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
          'desc' => 'VNLIFE has developed a diversified ecosystem operating in four core areas: banking enablement, digital payment, online travel and new retail, using advanced and modern technology.',
          'address' => 'vnlife.vn',
          'url' => 'https://vnlife.vn'
        ),
        array(
          'logo' => '/images/logo-partner/microsoft-azure.png ',
          'name' => 'microsoft azure',
          'type' => 'Cloud Computing Service',
          'desc' => 'MICROSOFT AZURE is Microsoft’s public cloud computing platform. It provides a range of cloud services, including compute, analytics, storage and networking.',
          'address' => 'azure.microsoft.com',
          'url' => 'https://azure.microsoft.com'
        ),
        array(
          'logo' => '/images/logo-partner/zns.png',
          'name' => 'zalo zns',
          'type' => 'Customer Service Messaging',
          'desc' => 'ZNS (Zalo Notification Service) is a part of Zalo’s Official Account (Zalo OA) solution, this is a convenient messaging service in Zalo OA solution to help businesses enhance their ability to provide information to customers.',
          'address' => 'ezns.vn',
          'url' => 'https://ezns.vn'
        ),
        array(
          'logo' => '/images/logo-partner/ladipage.png',
          'name' => 'ladipage',
          'type' => 'Landing Page Builder',
          'desc' => 'LADIPAGE is the landing page platform builder for business. It helps acquire more customers with a set of features dedicated to conversion optimization and a simple, powerful drag-and-drop design platform.',
          'address' => 'ladipage.vn',
          'url' => 'https://ladipage.vn'
        ),
        array(
          'logo' => '/images/logo-partner/stringee.png',
          'name' => 'stringee',
          'type' => 'Communication APIs',
          'desc' => 'STRINGEE is a platform (SDK/API) providing Listen - Call - Chat - SMS features, which can be quickly integrated into web applications.',
          'address' => 'stringee.com',
          'url' => 'https://stringee.com'
        ),
        array(
          'logo' => '/images/logo-partner/bepos.png ',
          'name' => 'bePOS',
          'type' => 'Sales Management Software',
          'desc' => 'BEPOS is a point-of-sales platform that integrates payment utilities, involving the following areas: Service, Retail, Online Sales, Restaurant, and Cafe.',
          'address' => 'bepos.io',
          'url' => 'https://bepos.io'
        ),
        array(
          'logo' => '/images/logo-partner/hpt.png',
          'name' => 'hpt',
          'type' => 'ITC Technology',
          'desc' => 'HPT has more than 26 years of experience in developing advanced technology applications in the IT and Communication fields for customers in Vietnam and internationally.',
          'address' => 'hpt.vn',
          'url' => 'https://hpt.vn'
        ),
        array(
          'logo' => '/images/logo-partner/vmg.png ',
          'name' => 'vmg',
          'type' => 'Media Group',
          'desc' => 'VMG is a media corporation in digital content technology and data technology in Vietnam. Their specialization includes
          Mobile Marketing, Data Analytics, and Financial Intermediary Services.',
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
          'icon-src' => get_template_directory_uri(). '/images/partner-1.svg',
          'name' => 'Grow your business',
          'desc' => 'Fuel sales with go-to-market opportunities that amplify your brand exposure and generate qualified leads.'
        ),
        array(
          'icon-src' => get_template_directory_uri(). '/images/partner-2.svg',
          'name' => 'Expand your market',
          'desc' => 'Grow your customer list and increase the opportunity to meet with customers at large firms, banks, and brands in the region.'
        ),
        array(
          'icon-src' => get_template_directory_uri(). '/images/partner-3.svg',
          'name' => 'Access a delicated team',
          'desc' => 'We know how we candevelop deep, trust-based relationships with our clients, and work together more collaboratively'
        ),
      )
    )); ?>

    <div class="text-center mr-t-50 mr-t-20-s0">
      <button class="btn-small">BECOME OUR PARTNER</button>
    </div>
  
  <?php get_template_part('template-parts/footer-connect', null,
      array (
        'classExtend' => 'mr-t-250 mr-t-150-s4',
        'title' => 'Keep in touch with us!'
      )
    ); ?>


<?php get_template_part('template-parts/footer', null,
    array( 
      'home' => '0'
    )
  ); ?>