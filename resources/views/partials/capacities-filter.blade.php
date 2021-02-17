@if(!empty($capacities))

    @foreach($capacities as $item)
        <input type="checkbox" name="capacities[]" value={{$item->capacity}} {{ (isset($_GET['capacities']) && in_array($item->capacity, $_GET['capacities'])) ? 'checked' : '' }}>
        <label for={{$item->capacity}}> {{$item->capacity}} GB</label>
        <br>
    @endforeach
@endif
