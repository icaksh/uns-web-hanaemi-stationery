$(document).ready(function () {
    
    // Input on focus
    $('.placeholder').on('click', function () {
        $(this).siblings('input').focus()
    })
    $('.form-group input').on('keyup', function () {
        let value = $.trim($(this).val())
        if (value) {
            $(this).closest('.form-group').addClass('hasValue')
        } else {
            $(this).closest('.form-group').removeClass('hasValue')
        }
    })


    // Copyright
    $('.copyright .year').text(new Date().getFullYear())
})