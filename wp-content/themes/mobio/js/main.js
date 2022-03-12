(function( $ ) {
  console.log('script main 0');
	var ww = jQuery(window).width();
	
  $(window).on('scroll', function(e){
    const top  = window.pageYOffset || document.documentElement.scrollTop;
    if (top > 10) {
      $('.menu-fixed').addClass('menu-top-fixed');
    } else {
      $('.menu-fixed').removeClass('menu-top-fixed');
    }
  });

  jQuery(function(){
    console.log('document ready 1231');
    const $openBtnMenu = $('.mobile-menu-open-btn');
    const $closeBtnMenu =  $('.mobile-menu-close-btn');
    const $menuMobile = $('.menu-mobile');
    // $('.menu-mobile-btn').off('click');
    $openBtnMenu.on('click', function(e) {
      // $('.menu-mobile').addClass('d-block-s1');
      const isOpen = $openBtnMenu.data('isOpen');
      if (!isOpen) {
        $openBtnMenu.addClass('menu-close-btn');
      } else {
        $openBtnMenu.removeClass('menu-close-btn');
      }
      $openBtnMenu.data('isOpen', isOpen ? false : true );
      setTimeout(() => {
        if (!isOpen) {
          $menuMobile.addClass('d-block-s1');
          setTimeout(() => {
            $menuMobile.addClass('opa').removeClass('opa-0');
          }, 50);
        }
      }, 250);
    });


    $closeBtnMenu.on('click', function(e) {
      $menuMobile.addClass('opa-0').removeClass('opa');
      setTimeout(() =>  {
        $menuMobile.removeClass('d-block-s1');
        $openBtnMenu.removeClass('menu-close-btn');
        $openBtnMenu.data('isOpen', false);
      }, 50);
    });

    $('.menu-mobile-item').off('click');
    $('.menu-mobile-item').on('click', function(e) {
      const subMenu = $(this).next();
      const isHidden = subMenu.hasClass('d-n');
      // console.log('isHidden =',isHidden, ' class=',subMenu.attr('class'));
      if (!isHidden) {
        subMenu.addClass('d-n');
        $(this).find('.menu-mobile-item-arrow').removeClass('menu-mobile-item-arrow-down');
      } else {
        subMenu.removeClass('d-n');
        $(this).find('.menu-mobile-item-arrow').addClass('menu-mobile-item-arrow-down');
      }
    });
   

    // scroll tabs
    $('.tab-wrapper').each(function() { 
      const $tabWrapper = $(this);
      $tabWrapper.data('currIndex', 0);
      const $slider = $tabWrapper.find('.slides-wrapper');
      // init scroll tab
      $tabWrapper.find('.scroll-tab').each(function() {
        const scrollTab = $(this);  

        scrollTab.find('.scroll-tab-item').each(function(index, el) {
          $(this).on('click', function(){
            setScrollTabItem(scrollTab, index);
            showTabContent($tabWrapper, index, scrollTab.hasClass('is-scroll'));
            $tabWrapper.data('currIndex', index);
            $slider.length && $slider.data('shiftSlideToIndex')(index);
          });
        });

        setScrollTabItem(scrollTab, 0);

        if (!scrollTab.hasClass('is-scroll') && $tabWrapper.find('.col-img-container').length) {
          const rect = $tabWrapper.find('.col-img-container').eq(0).get(0).getBoundingClientRect();
          scrollTab.css({'width': rect.width +'px', 'top' : rect.height + 40 +'px'});
          scrollTab.removeClass('d-n');
          // $tabWrapper.css('height', rect.height + 40 + scrollTab.get(0).getBoundingClientRect().height + 'px');
        }
      });

      $tabWrapper.find('.tab-button-item').each(function(index) { 
        const $tabItem = $(this);
        const tabIndex = index;
        $tabItem.on('click', function(e) {
          switchTabButton($tabWrapper, tabIndex);
          $slider.length && $slider.data('shiftSlideToIndex')(index);
        });
      });

      $slider.length && $slider.on('onChangeSlide',function(e, currIndex, prevIndex) {
        setScrollTabItem($tabWrapper.find('.scroll-tab'), currIndex);
        $tabWrapper.data('currIndex', currIndex);
        switchTabButton($tabWrapper, currIndex);
      });
    });
    

    // accordion menu
    $('.accord-menu').each(function(index) {
      const menu = $(this);
      
      menu.find('.accord-item').each(function(itemIndex){
        const menuItem = $(this);
        const _index = itemIndex;
        const contentEl = menuItem.find('.accord-item-content');
        const contentRec = contentEl.get(0).getBoundingClientRect();
        contentEl.data('h', contentRec.height);
        menuItem.find('.accord-item-header').on('click', function(e) {
          showMenuAccord(menu, _index, menuItem.hasClass('opened')? false : true);
        });
      });

      const menuLength =  menu.find('.accord-item').length;
      for (let i=0; i < menuLength; i++) {
        showMenuAccord(menu, i, i === 0 ? true : false);
      }
    });

    // tab button menus
    $('.tab-images').each(function(index) {
      const $tab = $(this);
      const buttonContainerEl = $(this).find('.tab-image-btn-container');
      const contentRect = buttonContainerEl.get(0).getBoundingClientRect();
      const imageContainerEl = $(this).find('.tab-images-container');
      imageContainerEl.css({'width': 'calc(100% - '+contentRect.width+'px)', 'height' : contentRect.height+'px'});

      buttonContainerEl.find('button').each(function(buttonIndex) {
        const buttonEl = $(this);
        $(this).on('click', function(e) {
          buttonContainerEl.find('button').removeClass('selected');
          buttonEl.addClass('selected');

          $tab.find('.tab-image-item').removeClass('opa').addClass('opa-0');
          setTimeout(() => {
            $tab.find('.tab-image-item').eq(buttonIndex).removeClass('opa-0').addClass('opa');
          }, 150);
        });
      })
      $tab.find('.tab-image-item').eq(0).removeClass('opa-0').addClass('opa');
      $tab.find('.tab-images-container').removeClass('d-n');

    });

    // use cases tab
    $('.use-case-wrapper').each(function() {
      const $wrapper = $(this);
      const $slider = $wrapper.find('.slides-wrapper');

      $wrapper.find('.use-case-tab').each(function(index) {
        const $tab = $(this);
        $tab.data('currIndex', 0);

        $tab.find('.use-case-tab-item').each(function(tabIndex) {
          $(this).on('click', function(e){
            switchSelectedTab($tab, '.use-case-tab-item', tabIndex);

            $slider.data('shiftSlideToIndex')(tabIndex);
          });
        });
      });

      $wrapper.find('.text-tab').each(function(index) {
        const $tab = $(this);
        $tab.data('currIndex', 0);

        $tab.find('.text-tab-item').each(function(tabIndex) {
          $(this).on('click', function(e){
            switchSelectedTab($tab, '.text-tab-item', tabIndex);
            $slider.data('shiftSlideToIndex')(tabIndex);
          });
        });
      });

      $slider.on('onChangeSlide',function(e, currIndex, prevIndex) {
        switchSelectedTab($wrapper.find('.text-tab'), '.text-tab-item', currIndex);
      });

    });

    // scroll to anchor
    $('.btn-header-control').on('click', function(e) {
      const anchor = $(this).attr('tab');
      
      // $(document.body).scrollTop($(anchor).offset().top);
      // document.body.scrollTop = $(anchor).offset().top;
      // console.log('scroll top anchor=',anchor, $(anchor).offset(), ' body top =',document.body.scrollTop, $(anchor).offset().top);

      const top = $(anchor).offset().top - 200;

      $('html, body').animate({ scrollTop: top}, 500);
    });


    // journey about
    $('.journey-year-item-info').each(function(index) {
      if (index === 0) {
        return;
      }
      console.log('journey-year-item-info');
      const $prevEl = $('.journey-year-item-info').eq(index - 1);
      const $el = $(this);
      let prevHeight = $prevEl.get(0).getBoundingClientRect().height;
      let currHeight = $el.get(0).getBoundingClientRect().height;
      if (currHeight < prevHeight + 50) {
        currHeight = prevHeight + 50;
        $el.css('height', currHeight+'px');
      }
      
    }); 
  });


  $(window).resize(function () {
    // update scroll tab size
    $('.tab-wrapper').each(function() { 
      const $tabWrapper = $(this);
      
      $tabWrapper.find('.scroll-tab').each(function() {
        const scrollTab = $(this);  

        if (!scrollTab.hasClass('is-scroll') && $tabWrapper.find('.col-img-container').length) {
          const rect = $tabWrapper.find('.col-img-container').eq(0).get(0).getBoundingClientRect();
          scrollTab.css({'width': rect.width +'px', 'top' : rect.height + 40 +'px'});
        }
      });      
    });
  });

  /**
   * scroll 
   * @param {*} scroll 
   * @param {*} index 
   */
  function setScrollTabItem(scroll, index) {
    const parentTab = scroll.parent();

    scroll.find('.scroll-tab-item').removeClass('c-0-b');
    scroll.find('.scroll-tab-item').eq(index).addClass('c-0-b');

    const tabItem = scroll.find('.scroll-tab-item').eq(index).find('p');
    const rect = tabItem.get(0).getBoundingClientRect();
    const scrollRect = scroll.get(0).getBoundingClientRect();
    const left = rect.left - scrollRect.left + scroll.scrollLeft() ;
    scroll.find('.divider-selected').css({'width': `${rect.width}px`, 'left' : `${left}px`});
  }

  /**
   * show tab content
   */
  function showTabContent($tabWrapper, index, isMobile) {
    const currIndex = $tabWrapper.data('currIndex');
    const currTab = $tabWrapper.find('.tab-content-item').eq(currIndex);
    const tab = $tabWrapper.find('.tab-content-item').eq(index);

    switchTab(currTab, tab);

    if (isMobile) {
      const currTab1 = $tabWrapper.find('.tab-item-image').eq(currIndex);
      const tab1 = $tabWrapper.find('.tab-item-image').eq(index);

      switchTab(currTab1, tab1, isMobile);

      const currTab2 = $tabWrapper.find('.tab-item-info').eq(currIndex);
      const tab2 = $tabWrapper.find('.tab-item-info').eq(index);

      switchTab(currTab2, tab2, isMobile);
    }
  }



  /**
   * switch display tab
   * @param {*} currTab 
   * @param {*} tab 
   */
  function switchTab(currTab, tab, isMobile) {
    currTab.addClass('opa-0').removeClass('opa');
    
    setTimeout(() => {
      currTab.removeClass('d-block-s1').addClass(isMobile ? 'd-none-s1' : 'd-n');
      tab.removeClass(isMobile ? 'd-none-s1' : 'd-n').addClass('d-block-s1');
      tab.removeClass('opa-0').addClass('opa');
    }, 250);
  }

  /**
   * show menu accord
   * @param {*} menu 
   * @param {*} index 
   * @param {*} isShow 
   * @returns 
   */
  function showMenuAccord(menu, index, isShow) {
    const accordItem = menu.find('.accord-item').eq(index);
    const arrow = accordItem.find('.arrow');
    const accordContent = accordItem.find('.accord-item-content');
    const accordHeader = accordItem.find('.accord-item-header');
    const height = accordContent.data('h');
    if (isShow) {
      accordContent.css({'display': 'block'});
      accordItem.addClass('b-4-b').addClass('opened').removeClass('b-fff');
      arrow.removeClass('arrow-right').removeClass('bd-c-000').addClass('bd-c-fff');
      accordHeader.find('div').addClass('c-fff');
      setTimeout(() => {
        accordContent.css({'opacity': '1', 'height' : `${height}px`});
      }, 50);
      return;
    }
    accordItem.removeClass('opened');
    arrow.addClass('arrow-right');
    accordContent.css({'opacity': '0', 'height' : '0px'});
    // accordHeader.find('div').removeClass('c-fff');

    setTimeout(() => {
      accordItem.removeClass('b-4-b').addClass('b-fff');
      arrow.addClass('bd-c-000').removeClass('bd-c-fff');
      accordContent.css({'display': 'none'});
      accordHeader.find('div').removeClass('c-fff');
    }, 300);
  }

  /**
   * switch selected tab
   */
  function switchSelectedTab($tab, tabClass, tabIndex) {
    const currIndex = $tab.data('currIndex');
    if (currIndex === tabIndex) {
      return;
    }
    $tab.find(tabClass).eq(currIndex).removeClass('selected');
    $tab.find(tabClass).eq(tabIndex).addClass('selected');
    $tab.data('currIndex', tabIndex);
  }


  function switchTabButton($tabWrapper, tabIndex) {
    const currIndex = $tabWrapper.data('currIndex');

    if (tabIndex === currIndex) {
      return;
    }
    const $tabItem = $tabWrapper.find('.tab-button-item').eq(tabIndex);
    $tabItem.addClass('b-fff b-sd').removeClass('b-g-3');
    $tabWrapper.find('.tab-button-item').eq(currIndex).addClass('b-g-3').removeClass('b-fff b-sd');
    $tabWrapper.data('currIndex', tabIndex);
  }


})( jQuery );