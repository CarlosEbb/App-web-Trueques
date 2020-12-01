<div hidden>
    @isset($_GET['precio_desde'])
        <input type="text" value="{{$_GET['precio_desde']}}" name="precio_desde">
    @endisset

    @isset($_GET['precio_hasta'])
        <input type="text" value="{{$_GET['precio_hasta']}}" name="precio_hasta">
    @endisset

    @isset($_GET['precio_hasta'])
        <input type="text" value="{{$_GET['precio_hasta']}}" name="precio_hasta">
    @endisset

    @isset($_GET['estado'])
        <input type="text" value="{{$_GET['estado']}}" name="estado">
    @endisset

    @isset($_GET['publicado'])
        <input type="text" value="{{$_GET['publicado']}}" name="publicado">
    @endisset

    @isset($_GET['busqueda'])
        <input type="text" value="{{$_GET['busqueda']}}" name="busqueda">
    @endisset
</div>
