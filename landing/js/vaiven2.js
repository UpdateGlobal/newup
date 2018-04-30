 const tilt = $('.js-tilt').tilt({glare: true,
    maxGlare: .5});

    $('.js-destroy').on('click', function () {
        const element = $(this).closest('.js-parent').find('.js-tilt');
        element.tilt.destroy.call(element);
    });

    $('.js-getvalue').on('click', function () {
        const element = $(this).closest('.js-parent').find('.js-tilt');
        const test = element.tilt.getValues.call(element);
        console.log(test[0]);
    });

    $('.js-reset').on('click', function () {
        const element = $(this).closest('.js-parent').find('.js-tilt');
        element.tilt.reset.call(element);
    });

    /*tilt.on('change', function (e, transforms) {
     console.log(transforms);
     });

     tilt.on('tilt.mouseLeave', function (e) {
     console.log(e);
     });

     tilt.on('tilt.mouseEnter', function (e) {
     console.log(e);
     });*/