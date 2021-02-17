@if(!empty($sockets))
    @foreach($sockets as $item)
        <input type="checkbox" name="sockets[]" value={{$item->socket->name}} {{ (isset($_GET['sockets']) && in_array($item->socket->name, $_GET['sockets'])) ? 'checked' : '' }}>
        <label for={{$item->socket->name}}> {{$item->socket->name}} </label>
        <br>                                
    @endforeach
@endif