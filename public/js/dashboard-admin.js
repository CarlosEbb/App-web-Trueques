$(document).ready(function () {
    $(".show").siblings("div").css("color", "#F7AA44");
    $(".hidden").siblings("div").css("color", "#202124");

    $(".collapse").on("show.bs.collapse", function () {
        $(this).prev().css("color", "#01a0b8");
        $("#path").css("fill", "#01a0b8");
    });

    $(".collapse").on("hidden.bs.collapse", function () {
        $(this).prev().css("color", "#202124");
        $("#path").css("fill", "#626262");
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
