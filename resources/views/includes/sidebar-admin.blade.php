<nav id="sidebar">
  <ul class="list-unstyled components">
    <li class="">
      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home 1</a>
    </li>
    <li>
      <a href="#">Home 2</a>
    </li>
    <li>
      <a href="#">Home 3</a>
    </li>
    <li>
      <a href="#">Home 4</a>
    </li>
  </ul>
</nav>

@section('scriptJS')
  <script>
    $(document).ready(function () {
      $(".btn-active-sidebar").on("click", function () {
        $("#sidebar").toggleClass('sidebar-hidden');
        $("#content").toggleClass('content-full');
        
      });
      // $("#sidebar").mCustomScrollbar({
      //     theme: "minimal",
      // });

      // $("#dismiss, .overlay").on("click", function () {
      //     $("#sidebar").removeClass("active");
      //     $(".overlay").removeClass("active");
      // });

      // $("#sidebarCollapse").on("click", function () {
      //     $("#sidebar").addClass("active");
      //     $(".overlay").addClass("active");
      //     $(".collapse.in").toggleClass("in");
      //     $("a[aria-expanded=true]").attr("aria-expanded", "false");
      // });
    });
  </script>
@endsection