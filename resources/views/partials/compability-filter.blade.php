@if(!empty($compabilities))

    @foreach($compabilities as $item)

        <input type="checkbox" name="compability[]" value={{$item->name}} {{ (isset($_GET['compability']) && in_array($item->name, $_GET['compability'])) ? 'checked' : '' }}>
        <label for={{$item->name}}> {{$item->name}} </label>
        <br>                                
    @endforeach
@endif