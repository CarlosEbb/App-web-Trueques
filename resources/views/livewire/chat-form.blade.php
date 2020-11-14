<div class="">
    <!-- Mensaje de Chat a Enviar -->
    <div wire:offline class="alert alert-danger text-center">
        <strong>Se ha perdido la conexión a Internet</strong>
    </div>
    <div class="row">   
        <div class="col-12">
            <div class="row form-inline">
                <div class="col-10 col-md-11">
                    <div class="form-group mb-0">
                        <label for="mensaje" class="mb-2"><strong>Escribe tu mensaje</strong> <span></span></label>
                        <input type="text" wire:model="mensaje" wire:keydown.enter="enviarMensaje" class="input" id="mensaje">

                        <!-- Validación -->
                        @error("mensaje") 
                            <small class="text-danger ml-2">{{ $message }}</small> 
                        @else 
                            <small class="text-muted ml-2">teclea <code>ENTER</code> para enviarlo</small> 
                        @enderror
                        
                    </div>
                </div>
                <div class="col-2 col-md-1 pl-md-0 pl-1">
                    <button 
                        class="btn-rounded btn-primary btn-primary-dark" 
                        wire:click="enviarMensaje"
                        wire:loading.attr="disabled"
                        wire:offline.attr="disabled"            
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M2.01 21L23 12L2.01 3L2 10l15 2l-15 2l.01 7z" fill="#fff"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
                 
        // Esto lo recibimos en JS cuando lo emite el componente
        // El evento "enviadoOK"
        $( document ).ready(function() {
            window.livewire.on('enviadoOK', function () {
                $("#avisoSuccess").fadeIn("slow");                
                setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);                                
            });
        });
        
    </script>

</div>