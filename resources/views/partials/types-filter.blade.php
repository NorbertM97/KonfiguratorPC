@if(!empty($types))

    @foreach($types as $item)
        <input type="checkbox" name="types[]" value={{$item->type}} {{ (isset($_GET['types']) && in_array($item->type, $_GET['types'])) ? 'checked' : '' }}>
        <label for={{$item->type}}> {{$item->type}} </label>
        <br>                                
    @endforeach
@endif