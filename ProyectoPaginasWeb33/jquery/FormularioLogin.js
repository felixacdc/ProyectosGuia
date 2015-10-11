
(function($) {

    $.fn.extend({

        leanModal: function(options) {

            var defaults = {
                top: 100,
                overlay: 0.5
            }

            options = $.extend(defaults, options);

            return this.each(function() {

                var o = options;

                $(this).click(function(e) {


                    var modal_id = $(this).attr("href");

                    var modal_height = $(modal_id).outerHeight();
                    var modal_width = $(modal_id).outerWidth();

                    $('#lean_overlay').css({
                        'display': 'block'
                    });

                    $('#lean_overlay').fadeIn();

                    $(modal_id).css({

                        'display': 'block',
                        'position': 'fixed',
                        'opacity': 0,
                        'z-index': 11000,
                        'left': 50 + '%',
                        'margin-left': -(modal_width / 2) + "px",
                        'top': o.top + "px"

                    });

                    $("<img id='close'/>").css({
                        'position': 'fixed',
                        'top': o.top + 'px',
                        'left': '50%'
                    }).click(function() {
                        close_modal(modal_id);
                    }).attr('src', 'Imagenes/cerrar4.ico').appendTo($(modal_id));

                    $(modal_id).fadeTo(200, 1);

                    e.preventDefault();

                });

            });

            function close_modal(modal_id) {

                $("#lean_overlay").fadeOut(200);
                $("#datos").val(null);
                $("#datos2").val(null);
                $("#RecuperarCon").fadeOut();
                $("#Error1").fadeOut();
                $("#tri1").fadeOut();
                $('#datos').css('background','white');
                $("#Error2").fadeOut();
                $("#tri2").fadeOut();
                $('#datos2').css('background','white');


                $(modal_id).css({
                    'display': 'none'
                });

            }

        }
    });

})(jQuery);

$("#go").leanModal();
