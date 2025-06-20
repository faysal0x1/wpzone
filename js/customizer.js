// (function($) {
//     // Wait until customize object is available
//     $(function() {
//         // Double-check wp.customize exists

//         // Footer Background Color
//         wp.customize('footer_background_color', function(value) {
//             value.bind(function(newval) {
//                 $('.site-footer').css('background-color', newval);
//             });
//         });

//         // Footer Text Color
//         wp.customize('footer_text_color', function(value) {
//             value.bind(function(newval) {
//                 $('.site-footer').css('color', newval);
//             });
//         });

//         // Copyright Text
//         wp.customize('footer_copyright_text', function(value) {
//             value.bind(function(newval) {
//                 $('.site-info').html(newval);
//             });
//         });
//     });
// })(jQuery);