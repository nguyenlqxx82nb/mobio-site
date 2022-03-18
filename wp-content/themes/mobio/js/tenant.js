(function( $ ) { 
  
  jQuery(function(){ 
    let time = 1000;
    const duration = 2300;
    let nextDuration = 0;
    $('.top-tenant-wrap').find('.tenant-top-item').each(function() {
      const $tenant = $(this);
      if ($tenant.find('.top-tenant-img').length > 1) {
        nextDuration += duration;
      }
    });

    $('.top-tenant-wrap').find('.tenant-top-item').each(function() {
      const $tenant = $(this);
      if ($tenant.find('.top-tenant-img').length > 1) {
        setTimeout(() => {
          animateTenantItem(0,$tenant, nextDuration);
        }, time);
        time += duration;
      }
    });

  });

  function animateTenantItem(index, $tenant, nextDuration) {
    const length = $tenant.find('.top-tenant-img').length;
    const _index = index >= length ? 0 : index;
    const $topImg = $tenant.find('.top-tenant-img').eq(_index);
    const $bottomImg =  $tenant.find('.top-tenant-img').eq(_index >= length - 1 ? 0 : _index + 1);

    $topImg.addClass('top-tenant-img-trans');
    $topImg.css({
      'transform': 'translateY(-40px)',
      'opacity': 0
    });
    
    
    $bottomImg.removeClass('top-tenant-img-trans');
    $bottomImg.css({
      'transform': 'translateY(40px)',
      'opacity': 0,
    });

    $bottomImg.removeClass('d-none');

    setTimeout(() => {
      $bottomImg.addClass('top-tenant-img-trans');
      $bottomImg.css({
        'transform': 'translateY(0px)',
        'opacity': 1,
      });
    }, 500);

    setTimeout(() => {
      $topImg.removeClass('d-block').addClass('d-none');
    }, 1500);


    setTimeout(() => {
      animateTenantItem(_index + 1, $tenant, nextDuration);
    }, nextDuration);

  }

})( jQuery );