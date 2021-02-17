@if(!empty($producents))
    @foreach($producents as $item)
        <input type="checkbox" name="producent[]" value={{$item->producent->name}} {{ (isset($_GET['producent']) && in_array($item->producent->name, $_GET['producent'])) ? 'checked' : '' }}>
        <label for={{$item->producent->name}}> {{$item->producent->name}} </label>
        <br>                                
    @endforeach
@endif