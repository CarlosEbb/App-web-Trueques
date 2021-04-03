<html>

    <table>
        <thead>
        <tr>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>FECHA INICIO DE CHAT</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CORREO USUARIO 1</b></th>
            <th align="center" style="border: 20px solid black; padding-left: 500px;"><b>CORREO USUARIO 2</b></th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($chats as $primero)
            <?php
                $chat = current(current($primero));
            ?>
            <tr>
                <td align="center" style="border: 20px solid black;">{{$chat->created_at->format('d/m/Y')}}</td>
                <td align="center" style="border: 20px solid black;">{{$chat->user->name}}</td>
                <td align="center" style="border: 20px solid black;">{{$chat->user->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</html>