(function( $ ) { 
  
  jQuery(function(){ 
    // let time = 1000;
    // const duration = 2150;
    // let nextDuration = 0;
    // $('.top-tenant-wrap').find('.tenant-top-item').each(function() {
    //   const $tenant = $(this);
    //   if ($tenant.find('.top-tenant-img').length > 1) {
    //     nextDuration += duration;
    //   }
    // });

    // $('.top-tenant-wrap').find('.tenant-top-item').each(function() {
    //   const $tenant = $(this);
    //   if ($tenant.find('.top-tenant-img').length > 1) {
    //     setTimeout(() => {
    //       animateTenantItem(0,$tenant, nextDuration);
    //     }, time);
    //     time += duration;
    //   }
    // });
    $('.top-tenant-wrap').each(function() {
      $(this).data('index', 0);
      animateTenantItem($(this));
    });

  });

  function findTenantHasLoop($tenant, fromIndex) {
    const $tenantItem = $tenant.find('.tenant-top-item').eq(fromIndex);
    const length = $tenantItem.find('.top-tenant-img').length;
    if (length > 1) {
      return fromIndex;
    }

    const nextIndex = fromIndex >= $tenant.find('.tenant-top-item').length - 1 ? 0 : fromIndex + 1;
    return findTenantHasLoop($tenant, nextIndex);
  }

  function animateTenantItem($tenant) {
    const tenantItemLength = $tenant.find('.tenant-top-item').length;
    let currTenantIndex = $tenant.data('index');
    currTenantIndex = findTenantHasLoop($tenant, currTenantIndex);
    const nextTenantIndex = currTenantIndex >= tenantItemLength - 1 ? 0 : currTenantIndex + 1 ; 
    const $tenantItem = $tenant.find('.tenant-top-item').eq(currTenantIndex);

    const length = $tenantItem.find('.top-tenant-img').length;
    const index = $tenantItem.data('index') || 0;
    const nextIndex = index >= length - 1 ? 0 : index + 1;
    const $topImg = $tenantItem.find('.top-tenant-img').eq(index);
    const $bottomImg =  $tenantItem.find('.top-tenant-img').eq(nextIndex);

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

    $tenant.data('index', nextTenantIndex);
    $tenantItem.data('index', nextIndex);

    setTimeout(() => {
      animateTenantItem($tenant);
    }, 2100);

  }

})( jQuery );