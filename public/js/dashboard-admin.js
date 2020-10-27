$(document).ready(function () {
    $(".show").siblings("div").css("color", "#F7AA44");
    $(".hidden").siblings("div").css("color", "#676767");

    $(".collapse").on("show.bs.collapse", function () {
        $(this).prev().css("color", "#F7AA44");
    });

    $(".collapse").on("hidden.bs.collapse", function () {
        $(this).prev().css("color", "#676767");
    });

    $("#sidebarCollapse").on("click", function () {
        $("#sidebar, #content").toggleClass("active");
        $(".collapse.in").toggleClass("in");
        $("a[aria-expanded=true]").attr("aria-expanded", "false");
    });

    $("#form-direccion-toggle").hide();
    $("#form-direccion-show").click(function () {
        $("#form-direccion-toggle").toggle("slow");
    });
});
