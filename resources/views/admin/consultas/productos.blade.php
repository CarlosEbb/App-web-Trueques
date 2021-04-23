<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display table-responsive">
        <thead>
            <tr>
                <th class="border-top-0 text-title-table"><b>DESTACAR</b></th>
                <th class="border-top-0 text-title-table"><b>CORREO DEL USUARIO</b></th>
                <th class="border-top-0 text-title-table"><b>FECHA DE PUBLICACION</b></th>
                <th class="border-top-0 text-title-table"><b>CATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>SUBCATEGORIA</b></th>
                <th class="border-top-0 text-title-table"><b>NOMBRE DEL PRODUCTO</b></th>
                <th class="border-top-0 text-title-table"><b>RANGO DE PRECIO</b></th>
                <th class="border-top-0 text-title-table"><b>DEPARTAMENTO</b></th>
                <th class="border-top-0 text-title-table"><b>MUNICIPIO</b></th>
                <th class="border-top-0 text-title-table"><b>1 CAMBIO POR: (CATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>1 CAMBIO POR: (SUBCATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>1 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
                <th class="border-top-0 text-title-table"><b>2 CAMBIO POR: (CATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>2 CAMBIO POR: (SUBCATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>2 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
                <th class="border-top-0 text-title-table"><b>3 CAMBIO POR: (CATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>3 CAMBIO POR: (SUBCATEGORIA)</b></th>
                <th class="border-top-0 text-title-table"><b>3 CAMBIO POR: (PRODUCTO ESPECIFICO)</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr class="py-0">
                    <tr>
                        <td class="text-table"><a class="btn btn-default tooltips action-items" data-toggle="modal" data-target="#editar_{{$producto->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83a.996.996 0 0 0 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                                <span class="tooltiptext">Editar</span>
                            </a>
                        </td>
                        <td class="text-table">{{$producto->user->email}}</td>
                        <td class="text-table">{{$producto->created_at->format('d/m/Y')}}</td>
                        <td class="text-table">{{$producto->categoria->nombre}}</td>
                        <td class="text-table">{{$producto->subcategoria->nombre}}</td>
                        <td class="text-table">{{$producto->nombre}}</td>
                        <td class="text-table">@if($producto->rango->hasta == -1) Mas de ${{number_format($producto->rango->de, 0, ",", ".")}} @else  De ${{number_format($producto->rango->de, 0, ",", ".")}} hasta ${{number_format($producto->rango->hasta, 0, ",", ".")}} @endif</td>
                        <td class="text-table">{{$producto->departamento->nombre}}</td>
                        <td class="text-table">{{$producto->municipio->nombre}}</td>
                        <td class="text-table">@if($producto->categoria1 != null) {{\App\Models\Categoria::find($producto->categoria1)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->subCategoria1 != null) {{\App\Models\SubCategoria::find($producto->subCategoria1)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->produc_especifico1 != null) {{$producto->produc_especifico1}} @endif</td>
                        <td class="text-table">@if($producto->categoria2 != null) {{\App\Models\Categoria::find($producto->categoria2)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->subCategoria2 != null) {{\App\Models\SubCategoria::find($producto->subCategoria2)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->produc_especifico2 != null) {{$producto->produc_especifico2}} @endif</td>
                        <td class="text-table">@if($producto->categoria3 != null) {{\App\Models\Categoria::find($producto->categoria3)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->subCategoria3 != null) {{\App\Models\SubCategoria::find($producto->subCategoria3)->nombre}} @endif</td>
                        <td class="text-table">@if($producto->produc_especifico3 != null) {{$producto->produc_especifico3}} @endif</td>
                    </tr>
                </tr>


                 <!-- Modal Editar-->
                 <div class="modal fade" id="editar_{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel_editar_{{$producto->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title d-block" id="ModalLabel_editar_{{$producto->id}}">
                                        Destacar Producto 
                                        <p class="d-block mb-0 mt-2">
                                            <b>{{$producto->nombre}}</b> . {{$producto->user->name}}
                                        </p>
                                    </h5>
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                {!! Form::model($producto, ['route' => ['DestacarProducto', $producto->id], 'method' => 'POST', 'files' => true]) !!}
                                    <div class="modal-body">
                                            <div class="form-group">
                                              
                                                5 Dias <input type="radio" name="days" value="5" required><br>
                                                15 Dias<input type="radio" name="days" value="15" required><br>
                                                30 Dias<input type="radio" name="days" value="30" required><br>
                                            </div>

                                            <input class="input" type="text" name="producto_id" value="{{$producto->id}}" required hidden>
                                            <input class="input" type="text" name="user_id" value="{{$producto->user->id}}" required hidden>
                                            


              
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-rounded btn-close border-0 bg-light" data-dismiss="modal">Cancelar</button>
                                            <input class="btn-rounded btn-primary btn-primary-dark border-0" type="submit" value="Actualizar">
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
            @endforeach
        </tbody>
    </table>  	
</div>