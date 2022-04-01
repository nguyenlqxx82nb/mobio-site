
    // prev = document.getElementById('prev'),
    // next = document.getElementById('next');

function slide1(wrapper, items, prev, next) {
  var posX1 = 0,
      posX2 = 0,
      posInitial,
      posFinal,
      threshold = 100,
      slides = items.find('slide'),
      slidesLength = slides.length,
      slideSize = 230,// items.getElementsByClassName('slide')[0].offsetWidth,
      // firstSlide = slides[0],
      // lastSlide = slides[slidesLength - 1],
      // cloneFirst = firstSlide.cloneNode(true),
      // cloneLast = lastSlide.cloneNode(true),
      index = 0,
      allowShift = true;
  
  // Clone first and last slide
  // items.appendChild(cloneFirst);
  // items.insertBefore(cloneLast, firstSlide);
  // wrapper.classList.add('loaded');
  
  // Mouse events
  // items.onmousedown = dragStart;
  items.on('onmousedown',dragStart);
  items.on('touchstart', dragStart);
  items.on('touchend', dragEnd);
  items.on('touchmove', dragAction);

  // Transition events
  items.on('transitionend', checkIndex);

  // Touch events
  // items.addEventListener('touchstart', dragStart);
  // items.addEventListener('touchend', dragEnd);
  // items.addEventListener('touchmove', dragAction);
  
  // Click events
  // prev.addEventListener('click', function () { shiftSlide(-1) });
  // next.addEventListener('click', function () { shiftSlide(1) });
  
  
  
  function dragStart (e) {
    e = e || window.event;
    e.preventDefault();

    posInitial = parseInt(items.css('left'));
    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } 
  }

  function dragAction (e) {
    e = e || window.event;
    // console.log('dragAction type=', e.type);
    if (e.type == 'touchmove') {
      posX2 = posX1 - e.touches[0].clientX;
      //posX1 = e.touches[0].clientX;
      const left = posInitial + e.touches[0].clientX - posX1;
      items.css('left', left + 'px');
    
    } 
    // else {
    //   posX2 = posX1 - e.clientX;
    //   posX1 = e.clientX;
    // }
    // const left = items.offsetLeft - posX2;
    // items.style.left = (items.offsetLeft - posX2) + "px";
    // console.log('dragAction left=', items.style.left, left);
  }
  
  function dragEnd (e) {
    items.addClass('shifting');
    posFinal = parseInt(items.css('left')); //items.offsetLeft;
    if (posFinal - posInitial < -threshold) {
      shiftSlide(1, 'drag');
    } else if (posFinal - posInitial > threshold) {
      shiftSlide(-1, 'drag');
    } else {
      items.css('left', posInitial + 'px');
    }
    // document.onmouseup = null;
    // document.onmousemove = null;
  }
  
  function shiftSlide(dir, action) {
    if (allowShift) {
      if (!action) { 
        posInitial = parseInt(items.css('left')); //items.offsetLeft; 
      }
      let left;
      if (dir == 1) {
        left = (posInitial - slideSize) + "px";
        index++;      
      } else if (dir == -1) {
        left = (posInitial + slideSize) + "px";
        index--;      
      }
      
      items.css('left', left);
    };
    
    allowShift = false;
  }
    
  function checkIndex (){
    items.removeClass('shifting');
    allowShift = true;
  }

  // function shiftSlideToIndex(index, action) {
  //   const currIndex = 
  // }
}

(function( $ ) { 
  
  jQuery(function(){ 
    // slide1(slider, sliderItems); 

    $('.slides-wrapper').each(function() {

      const $slider = $(this);
      const index = $slider.attr('index') ? parseInt($slider.attr('index')) : 0;
      let slideWidth = $slider.attr('slideWidth') ? parseInt($slider.attr('slideWidth')) : 0 ;
      const $slides = $slider.find('.slides');
      const itemLength = $slider.find('.slide-item').length;
      const next = $slider.find('.next-slide');
      const prev =  $slider.find('.prev-slide');
      // const slideRect = $slides.parent().get(0).getBoundingClientRect();

      if (!slideWidth) {
        const slideNumber = $slider.attr('slideNumber') ?  parseInt($slider.attr('slideNumber')) : 1 ;
        const $slideItem = $slides.find('.slide-item').eq(0);
        if (slideNumber) {
          slideWidth = parseInt($slideItem.get(0).getBoundingClientRect().width * slideNumber);
        }

        console.log('slideWidth = ',slideWidth);
        
      }
      $slider.data('slideW', slideWidth);
      $slider.data('index', index);
      $slider.data('threshold', 50);

      //$slides.on('onmousedown',dragStart);
      $slides.on('touchstart', function(e) {
        dragStart(e, $slider, $slides);
      });
      $slides.on('touchend', function(e) {
        dragEnd(e, $slider, $slides);
      });
      $slides.on('touchmove', function(e) {
        dragAction(e, $slider, $slides);
      });
      $slides.on('transitionend', function(e){
        // $slides.removeClass('shifting');
        $slider.data('allowShift', true);
      });
      $slider.data('changeDot', function(index) {
        if (!$slider.find('.slide-dot').length) {
          return;
        }
        $slider.find('.slide-dot').removeClass('selected');
        $slider.find('.slide-dot').eq(index).addClass('selected');
      });


      $slider.data('changeDot')(index);

      $slider.data('allowShift', true);

      $slider.data('shiftSlideToIndex', function(index, action) {
        const allowShift = $slider.data('allowShift');
        const currIndex = $slider.data('index');
        const slideW = $slider.data('slideW');
        // if (currIndex === index) {
        //   return;
        // }
        if (!allowShift) {
          return;
        }
        $slider.data('allowShift', false);
        
        let posInitial = !action ? parseInt($slides.css('left')) : $slider.data('posInitial');
        // console.log('shiftSlideToIndex posInitial=',posInitial, ' currIndex=',currIndex, ' index=',index, ' itemLength=',itemLength);
        if (index < 0 || index >= itemLength) {
          if (!action) {
            $slider.data('allowShift', true);
            return;
          }
          index = currIndex;
        }
        let left = (currIndex - index) * slideW + posInitial;
        $slides.addClass('shifting');
        $slides.css('left', left+'px');
        $slider.data('index', index);
        $slider.data('changeDot')(index);
        // fire trigger
        $slider.trigger('onChangeSlide', [index, currIndex]);        
        
      });

      // prev next slide
      next.length && next.on('click', function(e) {
        const currIndex = $slider.data('index');
        $slider.data('shiftSlideToIndex')(currIndex + 1);
      });
  
      prev.length && prev.on('click', function(e) {
        const currIndex = $slider.data('index');
        $slider.data('shiftSlideToIndex')(currIndex - 1);
      });

    });

  });

  function dragStart(e, $slider, $slides) {
    e = e || window.event;
    // e.preventDefault(); 
    const allowShift = $slider.data('allowShift');
    // console.log('dragStart allowShift=',allowShift);
    $slides.removeClass('shifting');
    const posInitial = parseInt($slides.css('left'));
    $slider.data('posInitial', posInitial);
    // console.log('dragStart ', e.touches[0].clientX);
    if (e.type == 'touchstart') {
      const posX1 = e.touches[0].clientX;
      $slider.data('posX1', posX1);
    } 
  }

  function dragAction(e, $slider, $slides) {
    e = e || window.event;
    const allowShift = $slider.data('allowShift');
    const posInitial =  $slider.data('posInitial');
    const posX1 = $slider.data('posX1');
    if (!allowShift) {
      setTimeout(() => {
        $slider.data('allowShift', true);
      }, 250);
      return;
    }
    
    if (e.type == 'touchmove') {
      const left = posInitial + e.touches[0].clientX - posX1;
      $slides.css('left', left + 'px');
    }
  }

  function dragEnd(e, $slider, $slides) {
    const allowShift = $slider.data('allowShift');
    const currIndex = $slider.data('index');
    const threshold = $slider.data('threshold');
    const posInitial = $slider.data('posInitial');
    const posFinal = parseInt($slides.css('left')); 
   
    $slides.addClass('shifting');

    if (posFinal - posInitial < -threshold) {
      $slider.data('shiftSlideToIndex')(currIndex + 1, 'drag');
      // shiftSlide(1, 'drag');
    } else if (posFinal - posInitial > threshold) {
      // shiftSlide(-1, 'drag');
      $slider.data('shiftSlideToIndex')(currIndex - 1, 'drag');
    } else {
      $slides.css('left', posInitial + 'px');
    }
  }

})( jQuery );