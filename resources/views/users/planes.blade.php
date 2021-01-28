@extends('layouts.app')
@section('content')
    <div class="container" style="min-height: 63.4vh;">
      <div class="row mt-3">
        <div class="col-12 text-center my-5">
          <h2 class="title">Realizar pago</h2>
          <h4 class="my-4 lead">Publica y destaca tu anuncio con la mejor plataforma de intercambio.</h4>
          <p>medio de pago <img src="{{asset('img/PayU.png')}}" width="100" alt=""></p>
        </div>
        <div class="col-12 col-md-4">
          <div class="card card-border-radius p-3">
            <div class="card-body text-center">
              <h5 class="card-text">Destacar producto por 5 dias</h5>
              <p class="name-product" style="font-size: 35px;">10.000 $</p>
              <p class="card-title">Pago por producto destacado</p>
              
                <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                  <input name="merchantId"    type="hidden"  value="910226"   >
                  <input name="accountId"     type="hidden"  value="917001" >
                  <input name="description"   type="hidden"  value="Destacar Producto, 5 dias"  >
                  <input name="referenceCode" type="hidden"  value="{{$orden = \App\Order::all()->count()+1}}_DP5DAYS" >
                  <input name="amount"        type="hidden"  value="10000"   >
                  <input name="currency"      type="hidden"  value="COP" >
                  <input name="signature"     type="hidden"  value="{{md5('EO9yDb7f82SFuDuRra1QdMHRW6~910226~'.$orden.'_DP5DAYS~10000~COP')}}">
                  <input name="test"          type="hidden"  value="1" >
                  <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
                  <input name="responseUrl"    type="hidden"  value="http://cambiemoslo.com/payment/1?&user_id={{Auth::user()->id}}&producto_id={{$_GET['p']}}&days=5" >
                  <input name="Submit"        type="submit"  value="Destacar" class="btn-rounded btn-primary btn-primary-dark w-75 mx-auto">
                </form>

                
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 my-3 my-md-0">
          <div class="card card-border-radius card-border-active p-3">
            <div class="card-body text-center">
              <h5 class="card-text">Destacar producto por 15 dias</h5>
              <p class="name-product" style="font-size: 35px;">20.000 $</p>
              <p class="card-title">Pago por producto destacado</p>
              <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                  <input name="merchantId"    type="hidden"  value="910226"   >
                  <input name="accountId"     type="hidden"  value="917001" >
                  <input name="description"   type="hidden"  value="Destacar Producto, 15 dias"  >
                  <input name="referenceCode" type="hidden"  value="{{$orden = \App\Order::all()->count()+1}}_DP15DAYS" >
                  <input name="amount"        type="hidden"  value="20000"   >
                  <input name="currency"      type="hidden"  value="COP" >
                  <input name="signature"     type="hidden"  value="{{md5('EO9yDb7f82SFuDuRra1QdMHRW6~910226~'.$orden.'_DP15DAYS~20000~COP')}}">
                  <input name="test"          type="hidden"  value="1" >
                  <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
                  <input name="responseUrl"    type="hidden"  value="http://cambiemoslo.com/payment/1?&user_id={{Auth::user()->id}}&producto_id={{$_GET['p']}}&days=15" >
                  <input name="Submit"        type="submit"  value="Destacar" class="btn-rounded btn-primary btn-primary-dark w-75 mx-auto">
                </form>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card card-border-radius p-3">
            <div class="card-body text-center">
              <h5 class="card-text">Destacar producto por 30 dias</h5>
              <p class="name-product" style="font-size: 35px;">30.000 $</p>
              <p class="card-title">Pago por producto destacado</p>
              <form method="post" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                  <input name="merchantId"    type="hidden"  value="910226"   >
                  <input name="accountId"     type="hidden"  value="917001" >
                  <input name="description"   type="hidden"  value="Destacar Producto, 30 dias"  >
                  <input name="referenceCode" type="hidden"  value="{{$orden = \App\Order::all()->count()+1}}_DP30DAYS" >
                  <input name="amount"        type="hidden"  value="30000"   >
                  <input name="currency"      type="hidden"  value="COP" >
                  <input name="signature"     type="hidden"  value="{{md5('EO9yDb7f82SFuDuRra1QdMHRW6~910226~'.$orden.'_DP30DAYS~30000~COP')}}">
                  <input name="test"          type="hidden"  value="1" >
                  <input name="buyerEmail"    type="hidden"  value="{{Auth::user()->email}}" >
                  <input name="responseUrl"    type="hidden"  value="http://cambiemoslo.com/payment/1?&user_id={{Auth::user()->id}}&producto_id={{$_GET['p']}}&days=5" >
                  <input name="Submit"        type="submit"  value="Destacar" class="btn-rounded btn-primary btn-primary-dark w-75 mx-auto">
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
{{--
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Realizar pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
          <label>Tipo Tarjeta</label>
          <div class="col-12">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="master-card" id="master-card" value="masterCard">
              <label class="form-check-label" for="master-card">MasterCard</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="maestro" id="maestro" value="maestro">
              <label class="form-check-label" for="maestro">Maestro</label>
            </div>
          </div>
          <div class="col-12 my-3">
            <label for="numero-tarjeta" class="">Nro de la Tarjeta</label>
            <input type="number" class="input" id="numero-tarjeta" placeholder="0000-0000-0000-0000">
          </div>
          <div class="col-8">
            <label for="mes" class="w-100">Fecha de vencimiento</label>
            <input type="number" class="input" id="mes" placeholder="mes" style="width: 45%;">
            <input type="number" class="input" id="año" placeholder="año" style="width: 45%;">
          </div>
          <div class="col-4">
            <label for="cvv" class="w-100">Codigo de seguridad</label>
            <input type="number" class="input w-100"  id="cvv" placeholder="cvv">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-rounded btn-close border-0 bg-light" data-dismiss="modal">Cancelar</button>
        <input class="btn-rounded btn-primary btn-primary-dark border-0" type="submit" value="Realizar Pago">
      </div>
    </form>
  </div>
</div>
--}}

@endsection

@section('scriptJS')



@endsection