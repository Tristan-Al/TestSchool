$(document).ready(function () {

    $('#collapse').click(function () {
        $('.bar:nth-child(1)').toggleClass('open1');
        $('.bar:nth-child(2)').toggleClass('open2');
        $('.bar:nth-child(3)').toggleClass('open3');
    });

    var isSidebarOpen = false;
    var sidebar = $('#principal-collapsable');

    $('#collapse').click(function (event) {
        event.stopPropagation(); // Prevent the event from spreading to the rest

        if (!isSidebarOpen) {
            // Right to left slide animation
            sidebar.stop().css({
                'right': '-250px',
                'display': 'block'
            }).animate({
                'right': '0px'
            }, 'slow');
        } else {
            // Left to right slide animation
            sidebar.stop().animate({
                'right': '-250px'
            }, 'slow', function () {
                sidebar.css('display',
                    'none'); // Hide sidebar when animation ends
            });
        }

        isSidebarOpen = !isSidebarOpen; // Toggle sidebar
    });

    // Hide sidebar when click outside
    $(document).click(function (event) {
        if (isSidebarOpen && !$(event.target).closest('#principal-collapsable').length && !$(event
            .target).is('#collapse')) {
            sidebar.stop().animate({
                'right': '-250px'
            }, 'slow', function () {
                sidebar.css('display', 'none');
            });
            isSidebarOpen = false;
        }
    });
});