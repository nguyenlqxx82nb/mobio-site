(function( $ ) { 
  
  jQuery(function(){ 
    console.log('contact-form');
    $('.contact-form').find('.btn-submit').on('click', function(e) {
      // console.log('contact-form submit click');
      e.preventDefault();
      const $form = $('.contact-form');
      const $firstName = $form.find('.first-name');
      const $lastName = $form.find('.last-name');
      const $email = $form.find('.email');
      const $phone = $form.find('.phone-number');
      const $country = $form.find('.country');
      const $industry = $form.find('.industry');
      const $request = $form.find('.request');

      if (!$firstName.find('input').val()) {
        $firstName.find('.msg-error').removeClass('d-none');
        return;
      } else {
        $firstName.find('.msg-error').addClass('d-none');
      }

      if (!$lastName.find('input').val()) {
        $lastName.find('.msg-error').removeClass('d-none');
        return;
      } else {
        $lastName.find('.msg-error').addClass('d-none');
      }

      if (!$email.find('input').val()) {
        $email.find('.msg-error').removeClass('d-none');
        return;
      } else {
        $email.find('.msg-error').addClass('d-none');
      }
      
      if (!$country.find('select').val()) {
        $country.find('.msg-error').removeClass('d-none');
        return;
      } else {
        $country.find('.msg-error').addClass('d-none');
      }

      if (!$industry.find('select').val()) {
        $industry.find('.msg-error').removeClass('d-none');
        return;
      } else {
        $industry.find('.msg-error').addClass('d-none');
      }

      const formData = {
        '_dyn_country_1648092062550': $country.find('select').val(),
        '_dyn_industry_1648885261804': $industry.find('select').val(),
        '_dyn_request_1648091548465': $request.val(),
        'primary_phone': $phone.find('input').val(),
        'primary_email': $email.find('input').val(),
        'tags': 'hot_leads',
        'name': `${$lastName.find('input').val()} ${$firstName.find('input').val()}`
      };
      // console.log('form data=', formData);
      $.ajax({
        url: "https://api-test1.mobio.vn/landingpage/api/v2.0/ladipage/profiles/actions/submit", 
        headers: {"X-Merchant-ID": "abbb85b9-d1c0-4063-9a78-3397eefb5993"},
        type: 'POST',
        data: formData,
        success: function(result){
          // show modal;
          setTimeout(() => {
            $('.overlay-modal').removeClass('d-none');
            $('.modal-container').find('.desc').html('Thank you for your interest in MOBIO CDP solutions! Our consultant will contact you soon!');
            $('.modal-container').removeClass('d-none').addClass('d-flex');
          }, 50);  

          $('.modal-container').find('button').on('click', function(e){
            $('.overlay-modal').addClass('d-none');
            $('.modal-container').addClass('d-none').removeClass('d-flex');
            // const href =  siteUrl +'/contact?email='+email;
            window.location.href = siteUrl;
          });
        }
      });
    });

    let loading = false;
    $('.email-submit').each(function(){
      const $email = $(this);
      // $email.find('input').on('keyup', function(e){
      //   // console.log('key code = ', e.keyCode);
      //   if (!validateInputEmail($email)) {
      //     return;
      //   }
      // });

      $email.find('.btn-submit').on('click', function(e) {
        if (loading) {
          return;
        }
        if (!validateInputEmail($email)) {
          return;
        }
        loading = true;
        const formData = {
          'primary_email': $email.find('input').val(),
          'tags': 'mkt_leads'
        };
        // console.log('form data=', formData);
        $.ajax({
          url: "https://api-test1.mobio.vn/landingpage/api/v2.0/ladipage/profiles/actions/submit", 
          headers: {"X-Merchant-ID": "abbb85b9-d1c0-4063-9a78-3397eefb5993"},
          type: 'POST',
          data: formData,
          success: function(result){
            loading = false;
            $email.find('input').val('');
            // show modal;
            setTimeout(() => {
              $('.overlay-modal').removeClass('d-none');
              $('.modal-container').find('.desc').html('Thank you for your interest in our solutions for banking business. Our consultants will contact you shortly.');
              $('.modal-container').removeClass('d-none').addClass('d-flex');
            }, 50);  
  
            $('.modal-container').find('button').on('click', function(e){
              $('.overlay-modal').addClass('d-none');
              $('.modal-container').addClass('d-none').removeClass('d-flex');
            });
          }
        });
      });

      $email.find('.btn-subscript').on('click', function(e) {
        if (loading) {
          return;
        }
        if (!validateInputEmail($email)) {
          return;
        }
        loading = true;
        const formData = {
          'primary_phone': '',
          'primary_email': $email.find('input').val(),
          'tags': 'mkt_leads'
        };
        // console.log('form data=', formData);
        $.ajax({
          url: "https://api-test1.mobio.vn/landingpage/api/v2.0/ladipage/profiles/actions/submit", 
          headers: {"X-Merchant-ID": "abbb85b9-d1c0-4063-9a78-3397eefb5993"},
          type: 'POST',
          data: formData,
          success: function(result){
            loading = false;
            
            // show modal;
            setTimeout(() => {
              $('.overlay-modal').removeClass('d-none');
              $('.modal-container-2').removeClass('d-none').addClass('d-flex');
            }, 50);  
  
            $('.modal-container-2').find('.btn-close').on('click', function(e){
              $('.overlay-modal').addClass('d-none');
              $('.modal-container-2').addClass('d-none').removeClass('d-flex');
            });

            $('.modal-container-2').find('.btn-contact').on('click', function(e){
              $('.overlay-modal').addClass('d-none');
              $('.modal-container-2').addClass('d-none').removeClass('d-flex');
              const href =  siteUrl +'/contact?email='+$email.find('input').val();
              window.location.href = href;
            });
            
          }
        });
      });
      
    })

  });

  function validateInputEmail($email) {
    const $input = $email.find('input');
    const $msg = $email.find('.msg-error');
    if (!$input.val()) {
      $msg.removeClass('d-none');
      $msg.text('This field cannot be blank');
      return false;
    }
    if (!validateEmail($input.val())) {
      $msg.removeClass('d-none');
      $msg.text('This email is invalid');
      return false;
    }
    $msg.addClass('d-none');
    return true;
  }

  function validateEmail(email) 
  {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

})(jQuery );