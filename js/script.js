$(document).ready(function() {
    $('.make-order').click(function() {
        var target = $('#footer-contact');
        $('html,body').animate({
            scrollTop: target.offset().top
        }, 1000);
        $('.make-order-bottom').css('opacity', 0);
        $('form').animate({
            opacity: 0.3
        }, 1000, 'swing', function() {
            $('form').animate({
                opacity: 1
            }, 500);
            $('.make-order-bottom').animate({
                opacity: 1
            }, 1000);
        });
        return false;
    });
    $('.send-contact-mail').click(function(event) {
        event.preventDefault();
        $.post('submit.php', $('form').serialize(), function(data) {
            console.log(data);
            if (data.message) {
                $('#form-message').html(data.message);
            }
            if (data.success) {
                $('#form-message').removeClass('alert-danger');
                $('#form-message').addClass('alert-success');
                $('form input').prop('disabled', true);
                $('form textarea').prop('disabled', true);
            } else {
                $('#form-message').removeClass('alert-success');
                $('#form-message').addClass('alert-danger');
            }
        });
        return false;
    });
    
    $('.carousel').carousel({
      interval: 5000
    });
    setTimeout(function(){
        $('.carousel-control.right').trigger('click');
    }, 3000);
    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
    var topOrderColor = $('.item-block .make-order').attr('data-change-top');
    if (topOrderColor) {
        $('.menu-bottom-part .make-order').css('background-color', topOrderColor);
    }
});