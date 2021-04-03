<div class="panel-body mt-3">
    <table id="myTable"  class="table table-hover display table-responsive">
        <thead>
            <tr>
                <th  class="border-top-0 text-title-table"><b>FECHA INICIO DE CHAT</b></th>
                <th  class="border-top-0 text-title-table"><b>CORREO USUARIO 1</b></th>
                <th  class="border-top-0 text-title-table"><b>CORREO USUARIO 2</b></th>
            </tr>
        </thead>
        <tbody>
            @foreach($chats as $primero)
                <tr class="py-0">
                    <?php
                        $chat = current(current($primero));
                    ?>
                    <tr>
                        <td class="text-table">{{$chat->created_at->format('d/m/Y')}}</td>
                        <td class="text-table">{{$chat->user->name}}</td>
                        <td class="text-table">{{$chat->user->name}}</td>
                    </tr>
                </tr>
            @endforeach
        </tbody>
    </table>  	
</div>