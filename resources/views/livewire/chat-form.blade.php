<div class="">
    <!-- Mensaje de Chat a Enviar -->
    <div wire:offline class="alert alert-danger text-center">
        <strong>Se ha perdido la conexión a Internet</strong>
    </div>
    <div class="row">   
        <div class="col-12">
            <div class="row form-inline">
                <div class="col-8 col-md-10">
                    <div class="form-group mb-0">
                        <label for="mensaje" class="mb-2"><strong>Escribe tu mensaje</strong> <span></span></label>
                        @if(Auth::user()->rol_id == 1)
                        <input type="text" class="input" disabled > 
                        @else
                        <input type="text" wire:model="mensaje" wire:keydown.enter="enviarMensaje" class="input" id="mensaje"> 
                        @endif

                        <!-- Validación -->
                        @error("mensaje") 
                            <small class="text-danger ml-2">{{ $message }}</small> 
                        @else 
                            <small class="text-muted ml-2">teclea <code>ENTER</code> para enviarlo</small> 
                        @enderror
                        
                    </div>
                </div>
                <div class="col-4 col-md-2 d-flex align-items-center justify-content-center">
                    <button 
                        class="btn-rounded btn-primary btn-primary-dark mr-2" 
                        wire:click="enviarMensaje"
                        wire:loading.attr="disabled"
                        wire:offline.attr="disabled"            
                        id="btnChat">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M2.01 21L23 12L2.01 3L2 10l15 2l-15 2l.01 7z" fill="#fff"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    </button>
    
                    <a href="#" class="btn btn-rounded btn-primary" onclick="clickFileInput()">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M779.3 196.6c-94.2-94.2-247.6-94.2-341.7 0l-261 260.8c-1.7 1.7-2.6 4-2.6 6.4s.9 4.7 2.6 6.4l36.9 36.9a9 9 0 0 0 12.7 0l261-260.8c32.4-32.4 75.5-50.2 121.3-50.2s88.9 17.8 121.2 50.2c32.4 32.4 50.2 75.5 50.2 121.2c0 45.8-17.8 88.8-50.2 121.2l-266 265.9l-43.1 43.1c-40.3 40.3-105.8 40.3-146.1 0c-19.5-19.5-30.2-45.4-30.2-73s10.7-53.5 30.2-73l263.9-263.8c6.7-6.6 15.5-10.3 24.9-10.3h.1c9.4 0 18.1 3.7 24.7 10.3c6.7 6.7 10.3 15.5 10.3 24.9c0 9.3-3.7 18.1-10.3 24.7L372.4 653c-1.7 1.7-2.6 4-2.6 6.4s.9 4.7 2.6 6.4l36.9 36.9a9 9 0 0 0 12.7 0l215.6-215.6c19.9-19.9 30.8-46.3 30.8-74.4s-11-54.6-30.8-74.4c-41.1-41.1-107.9-41-149 0L463 364L224.8 602.1A172.22 172.22 0 0 0 174 724.8c0 46.3 18.1 89.8 50.8 122.5c33.9 33.8 78.3 50.7 122.7 50.7c44.4 0 88.8-16.9 122.6-50.7l309.2-309C824.8 492.7 850 432 850 367.5c.1-64.6-25.1-125.3-70.7-170.9z" fill="#fff"/></svg>
                    </a>
                </div>

                <p class="statusMsg"></p>
                <form method="POST" action="/adjuntar" enctype="multipart/form-data" id="formAdjuntar" name="formAdjuntar" >@csrf
                    <div class="form-group">
                        <input type="file" class="form-control" id="file" name="file" required hidden/>
                        <input type="text" class="form-control" required name="vendedor" id="vendedor" hidden/>
                        <input type="text" class="form-control" required name="comprador" id="comprador" hidden/>
                        <input type="text" class="form-control" required name="producto" id="producto" hidden/>
                    </div>
                    <input id="buttonAdjuntar" type="submit" name="submit" value="SAVE" hidden/>
                </form>
                
                
            </div>
        </div>
    </div>


</div>

