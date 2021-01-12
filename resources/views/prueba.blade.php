@extends('layouts.app')


@section('scriptCSS')

<style>
#payu-payment-form button[type=submit] {
    border: 0px;
    height: 35px;
    width: 140px;
    background: url('http://static.payu.com/pl/standard/partners/buttons/payu_account_button_long_03.png');
    background-repeat: no-repeat;
    cursor: pointer;
}
</style>

@endsection

@section('content')

<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
  <input name="merchantId"    type="hidden"  value="508029"   >
  <input name="accountId"     type="hidden"  value="512321" >
  <input name="description"   type="hidden"  value="Test PAYU"  >
  <input name="referenceCode" type="hidden"  value="TestPayU" >
  <input name="amount"        type="hidden"  value="20000"   >
  <input name="tax"           type="hidden"  value="3193"  >
  <input name="taxReturnBase" type="hidden"  value="16806" >
  <input name="currency"      type="hidden"  value="COP" >
  <input name="signature"     type="hidden"  value="7ee7cf808ce6a39b17481c54f2c57acc"  >
  <input name="test"          type="hidden"  value="1" >
  <input name="buyerEmail"    type="hidden"  value="test@test.com" >
  <input name="responseUrl"    type="hidden"  value="http://localhost:8000/payment/1?&user_id=1&producto_id=1&days=3" >
  <input name="confirmationUrl"    type="hidden"  value="http://www.test.com/confirmation" >
  <input name="productonro"    type="hidden"  value="2" >
  <input name="Submit"        type="submit"  value="Enviar" >
</form>
@endsection


@section('scriptJS')


@endsection