<div class="menu-top <?php echo $args['classExtend'] ? $args['classExtend'] : '' ?>">
  <div class="auto-container">
    <div class="menu-top-container d-flex align-items-center <?php echo ($args['fixed'] === '1' ? '  ' :  ''); ?>">

      <a href="<?php  echo get_site_url() ?>">
        <img class="menu-logo menu-logo-normal mr-l-25-s1" src="<?php  echo get_template_directory_uri() . "/images/mobio-logo-white.png"  ?>">
      </a>

      <a href="<?php  echo get_site_url() ?>">
        <img class="menu-logo menu-logo-fixed d-n mr-l-25-s1" src="<?php  echo get_template_directory_uri() . "/images/mobio-logo-blue.png" ?>">
      </a>

      <div class="d-flex d-none-s1 flex-grow-1 justify-content-center">
        <div class="menu-item customer-menu d-flex align-items-center">
          <div class="d-flex align-items-center menu-top-item">	
            <h6 class="c-fff">Customer</h6>
            <i class="arrow mr-l-5"></i>
          </div>
          
          <div class="menu-divider"></div>

          <div class="menu-list-container customer-menu-list">
            <div>
              <p class="f-b f-14 c-1 upper-case">use cases</p>
              <a href="<?php  echo get_site_url() ?>/customer-cases"><p class="f-n f-13 c-000 opa-5 mr-t-5">See how our customers benefit from Mobio Platform</p></a>
            </div>

            <div>
              <p class="f-b f-14 c-1 upper-case mr-t-25">industries</p>
              <div class="w-100 mr-t-15 auto">

                <div class="mo-col-8">
                  <a href="<?php  echo get_site_url() ?>/real-estate" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/customer-Enterprise.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Real Estate</p>
                    </div>
                  </a>
                  <a href="<?php echo get_site_url() ?>/industry-fsi" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/customer-bank.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Financial Services</p>
                    </div>
                  </a>
                </div>

                <div class="mo-col-4">
                  <a href="<?php  echo get_site_url() ?>/industry-retail" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/customer-retail.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Retail</p>
                    </div>
                  </a>
                  <a href="<?php  echo get_site_url() ?>/healthcare" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/customer-healthcare.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Healthcare</p>
                    </div>
                  </a>
                </div>

              </div>
            </div>
            
            <div class="w-100 cursor-pointer upper-case menu-see-overview ">
              <a href="<?php  echo get_site_url() ?>/industry"><p class="f-b f-12 c-000 opa-5">SEE OVERVIEW >></p></a>
            </div>
          </div>

        </div>
        <div class="menu-item product-menu d-flex align-items-center">
          <div class="d-flex align-items-center menu-top-item">
            <h6 class="c-fff">Product</h6>
            <i class="arrow mr-l-5"></i>
          </div>
          <div class="menu-divider"></div>

          <div class="menu-list-container product-menu-list">
            <div>
              <p class="f-b f-14 c-1 upper-case">mobio CDP</p>
              <a class="c-1" href="<?php  echo get_site_url() ?>/products-cdp" class="c-b-1"><p class="f-n f-13 c-000 opa-5 mr-t-5">The heart of our product</p></a>
            </div>

            <div class="w-100 auto mr-t-25">

              <div class="mo-col-4"> 
                <a class="c-1" href="<?php  echo get_site_url() ?>/products-marketing" class="c-b-1"><p class="f-b f-14 c-1 upper-case">marketing management</p></a>
                <div class="w-100 mr-t-15 auto">
                  <a href="<?php  echo get_site_url() ?>/mkt-journey-builder" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-MKT-JB.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Journey Builder</p>
                    </div>
                  </a>
                  <a href="<?php  echo get_site_url() ?>/mkt-email-builder" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-MKT-email-builder.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Email Builder</p>
                    </div>
                  </a>
                  <a href="<?php echo get_site_url() ?>/mkt-trigger-campaign" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-MKT-Trigger.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Trigger Campaign</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mo-col-4"> 
                <!-- <p class="f-b f-14 c-1 upper-case">sales management</p> -->
                <a class="c-1" href="<?php  echo get_site_url() ?>/products-sale" class="c-b-1"><p class="f-b f-14 c-1 upper-case">sales management</p></a>
                <div class="w-100 mr-t-15 auto">
                  <a href="<?php  echo get_site_url() ?>/sales-lead-distribution" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-sales-lead-distribution.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Lead Distribution</p>
                    </div>
                  </a>
                  <a href="<?php echo get_site_url() ?>/sales-pipeline" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-MKT-email-builder.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Sales Pipeline</p>
                    </div>
                  </a>
                  <a  href="<?php echo get_site_url() ?>/sales-task-manger" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-sales-task-manager.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Task Management</p>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mo-col-4"> 
                <a class="c-1" href="<?php echo get_site_url() ?>/products-services-management"><p class="f-b f-14 c-1 upper-case">service management</p></a>
                <div class="w-100 mr-t-15 auto">
                  <a href="<?php echo get_site_url() ?>/service-customer-response" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-service-chat.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Social & Chat</p>
                    </div>
                  </a>
                  <a href="<?php echo get_site_url() ?>/service-ticketing" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-service-ticket.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Ticketing</p>
                    </div>
                  </a>
                  <a href="<?php echo get_site_url() ?>/service-loyalty-management" class="d-b mr-b-20">
                    <div class="d-flex align-items-center">
                      <img src="<?php  echo get_template_directory_uri() ?>/images/menu/product-service-loyalty.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Loyalty Management</p>
                    </div>
                  </a>
                </div>
              </div>
              
            </div>
            <a class="c-1" href="<?php  echo get_site_url() ?>/products">
              <div class="w-100 cursor-pointer upper-case f-b f-12 c-000 opa-5 menu-see-overview ">
                <p>SEE OVERVIEW >></p>
              </div>
            </a>
          </div>

        </div>
        <div class="menu-item library-menu  d-flex align-items-center">
          <div class="d-flex align-items-center menu-top-item">
            <h6 class=" c-fff">Library</h6>
            <i class="arrow mr-l-5"></i>
          </div>
          <div class="menu-divider"></div>

          <div class="menu-list-container library-menu-list">
            <div class="w-100 auto mr-t-5">

              <div class="mo-col-6 auto pa-l-10"> 
                <a href="<?php  echo get_site_url() ?>/coming-soon" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/library-blog.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Blog</p>
                  </div>
                </a>
                <a href="<?php  echo get_site_url() ?>/coming-soon" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/library-ebook-guideline.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Ebook & Guideline</p>
                  </div>
                </a>
                <a href="<?php  echo get_site_url() ?>/coming-soon" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/library-Usecase.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Use Cases</p>
                  </div>
                  
                </a>
              </div>

              <div class="mo-col-6 auto pa-l-20"> 
                <a href="<?php  echo get_site_url() ?>/coming-soon" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/library-news -events.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">News & Events</p>
                  </div>
                </a>
                <a href="<?php  echo get_site_url() ?>/coming-soon" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/library-faqs.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">FAQs</p>
                  </div>
                </a>
                <a href="<?php echo get_site_url() ?>/why-mobio" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/library-why-mobio.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5"> Why Mobio?</p>
                  </div>
                </a>
              </div>
              
            </div>

            <a class="c-1"  href="<?php  echo get_site_url() ?>/coming-soon">
              <div class="w-100 cursor-pointer upper-case f-b f-12 c-000 opa-5 menu-see-overview ">
                <p>SEE OVERVIEW >></p>
              </div>
            </a>
          
          </div>

        </div>
        <div class="menu-item company-menu  d-flex align-items-center">
          <div class="d-flex align-items-center menu-top-item">
            <h6 class="c-fff">Company</h6>
            <i class="arrow mr-l-5"></i>
          </div>
          <div class="menu-divider"></div>

          <div class="menu-list-container company-menu-list">
            <div class="w-100 auto mr-t-10 mr-b-10">
              <div class="mo-col-7 auto pa-l-10"> 
                <a href="<?php echo get_site_url() ?>/about-us" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/company-about-us.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">About us</p>
                  </div>
                </a>
                <a href="<?php  echo get_site_url() ?>/coming-soon" class="d-b">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/company-career.png" class="menu-list-item-img mr-r-5" /> <p class="f-n f-13 c-000 opa-5">Career</p>
                    <div class="mr-l-5 mark"><p class="f-n f-13 c-fff">We're hiring</p></div>
                  </div>
                </a>
              </div>

              <div class="mo-col-5 auto pa-l-10">
                <a href="<?php echo get_site_url() ?>/partners" class="d-b mr-b-20">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/company-our-partner.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Our Partners</p>
                  </div>
                </a>
                <a href="<?php  echo get_site_url() ?>/coming-soon" class="d-b">
                  <div class="d-flex align-items-center">
                    <img src="<?php  echo get_template_directory_uri() ?>/images/menu/company-support.png" class="menu-list-item-img mr-r-5" /><p class="f-n f-13 c-000 opa-5">Support</p>
                  </div>
                </a>
              </div>
              
            </div>
          </div>

        </div>
      </div>

      <a class="t-d-n" href="<?php  echo get_site_url() ?>/contact">
        <div class="menu-button d-none-s1">
            <h6 class="c-0 t-d-n" >REQUEST A DEMO</h6>
        </div>
      </a>
      <div class="d-n d-block-s1 flex-grow-1"></div>

      <button class="mobile-menu-open-btn menu-btn mr-r-20 d-n d-block-s1">
        <span class="burger"></span>
      </button>

      </div>
  </div>  
</div>


