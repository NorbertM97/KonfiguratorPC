@if(!empty($memories))

    @foreach($memories as $item)
        <input type="checkbox" name="memories[]" value={{$item->memory}} {{ (isset($_GET['memories']) && in_array($item->memory, $_GET['memories'])) ? 'checked' : '' }}>
        <label for={{$item->memory}}> {{$item->memory}} GB</label>
        <br>
    @endforeach
@endif
