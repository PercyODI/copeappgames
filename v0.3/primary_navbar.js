var totalWidth = 0;
$(".pn-icon").each(function() {
    totalWidth += $(this).width();
    $(this).click(function() {
        console.dir($(this));
        $("#ix-secondary-navbar").load("secondary_navbar.php", {'primaryMenu': $(this).attr("menu")});
    });
});

$("#pn-menu").css("min-width", totalWidth);
