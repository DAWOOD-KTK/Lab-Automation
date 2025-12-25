jQuery(function ($) {

    // *********** Sidebar Menu Function ***********
    $.sidebarMenu = function (menu) {
        var animationSpeed = 300;

        $(menu).on("click", "li a", function (e) {
            var $this = $(this);
            var checkElement = $this.next();

            if (checkElement.is(".treeview-menu") && checkElement.is(":visible")) {
                checkElement.slideUp(animationSpeed, function () {
                    checkElement.removeClass("menu-open");
                });
                checkElement.parent("li").removeClass("active");
            } else if (checkElement.is(".treeview-menu") && !checkElement.is(":visible")) {
                var parent = $this.parents("ul").first();
                var ul = parent.find("ul:visible").slideUp(animationSpeed);
                ul.removeClass("menu-open");
                var parent_li = $this.parent("li");

                checkElement.slideDown(animationSpeed, function () {
                    checkElement.addClass("menu-open");
                    parent.find("li.active").removeClass("active");
                    parent_li.addClass("active");
                });
            }

            if (checkElement.is(".treeview-menu")) {
                e.preventDefault();
            }
        });
    };
    $.sidebarMenu($(".sidebar-menu"));

    // *********** Current Page Active Highlight ***********
    var path = window.location.pathname.split("/").pop(); // current page file name
    $('.sidebar-menu li a').each(function () {
        var href = $(this).attr('href');

        // Flexible match for index.php or other pages
        if (href === path || (path === "" && href === "index.php") || href.indexOf(path) !== -1) {
            $(this).parent('li').addClass('active'); // parent li active
            $(this).parents('ul.treeview-menu').addClass('menu-open').parent('li').addClass('active'); // open treeview parent
        }
    });

    // *********** Sidebar Toggle / Pin ***********
    $(".toggle-sidebar").on("click", function () {
        $(".page-wrapper").toggleClass("toggled");
    });

    $(".pin-sidebar").on("click", function () {
        if ($(".page-wrapper").hasClass("pinned")) {
            $(".page-wrapper").removeClass("pinned");
            $("#sidebar").unbind("hover");
        } else {
            $(".page-wrapper").addClass("pinned");
            $("#sidebar").hover(
                function () { $(".page-wrapper").addClass("sidebar-hovered"); },
                function () { $(".page-wrapper").removeClass("sidebar-hovered"); }
            );
        }
    });

    // Toggle sidebar overlay
    $("#overlay").on("click", function () {
        $(".page-wrapper").toggleClass("toggled");
    });

    // *********** Window Resize ***********
    $(window).resize(function () {
        if ($(window).width() <= 768) {
            $(".page-wrapper").removeClass("pinned");
        }
        if ($(window).width() >= 768) {
            $(".page-wrapper").removeClass("toggled");
        }
    });

    // *********** Bootstrap Tooltips / Popovers ***********
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) { return new bootstrap.Tooltip(tooltipTriggerEl); });

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) { return new bootstrap.Popover(popoverTriggerEl); });

    // *********** Card Loader ***********
    $(".card-loader").fadeOut(2000);

});
