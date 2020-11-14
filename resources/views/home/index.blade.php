@extends("layout.app")
@section("contenido")

<div class="mx-3 my-3" style="min-height: 75vh;">
    <div class="row d-flex justify-content-center ">
        <div class="col-8">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h2 class="title">Chat</h2>
                </div>
                <div class="col-md-12">
                    <div class="card card-border-radius">
                        <div class="card-body px-0 pt-0">
                            @livewire("chat-list")
                        </div>
                        <div class="card-footer">
                            @livewire("chat-form")
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection("contenido")