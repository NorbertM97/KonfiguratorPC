@if(!empty($threats))

    @foreach($threats as $item)

        <input type="checkbox" name="threats[]" value={{$item->threats}} {{ (isset($_GET['threats']) && in_array($item->threats, $_GET['threats'])) ? 'checked' : '' }}>
        <label for={{$item->threats}}> {{$item->threats}} </label>
        <br>                                
    @endforeach
@endif