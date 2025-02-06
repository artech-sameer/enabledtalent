<script>
  function getCountry(selector){
    $('#'+selector).select2({
        placeholder: 'Choose Country',
        allowClear: true,
        ajax: {
            url: '<?php echo e(route('web.common.country.list')); ?>',
            dataType: 'json',
            cache: true,
            delay: 200,
            data: function(params) {
                return {
                    term: params.term || '',
                    page: params.page || 1
                }
            },
        }
    });
  }

  function getState(selector, country){
    $('#'+selector).select2({
        placeholder: 'Choose State',
        allowClear: true,
        ajax: {
            url: '<?php echo e(route('web.common.state.list', '')); ?>/'+country,
            dataType: 'json',
            cache: true,
            delay: 200,
            data: function(params) {
                return {
                    term: params.term || '',
                    page: params.page || 1
                }
            },
        }
    });
  }

  function getDistrict(selector, state){
    $('#'+selector).select2({
        placeholder: 'Choose District',
        allowClear: true,
        ajax: {
            url: '<?php echo e(route('web.common.district.list', '')); ?>/'+state,
            dataType: 'json',
            cache: true,
            delay: 200,
            data: function(params) {
                return {
                    term: params.term || '',
                    page: params.page || 1
                }
            },
        }
    });
  }

  function getCity(selector, district){
    $('#'+selector).select2({
        placeholder: 'Choose City',
        allowClear: true,
        ajax: {
            url: '<?php echo e(route('web.common.city.list', '')); ?>/'+district,
            dataType: 'json',
            cache: true,
            delay: 200,
            data: function(params) {
                return {
                    term: params.term || '',
                    page: params.page || 1
                }
            },
        }
    });
  }
</script><?php /**PATH C:\Users\asifj\Documents\enabledtalent\resources\views/common/layouts/script.blade.php ENDPATH**/ ?>