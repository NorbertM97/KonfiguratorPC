@if(!empty($powers))

    @foreach($powers as $item)
        <input type="checkbox" name="powers[]" value={{$item->power}} {{ (isset($_GET['powers']) && in_array($item->power, $_GET['powers'])) ? 'checked' : '' }}>
        <label for={{$item->power}}> {{$item->power}} W</label>
        <br>
    @endforeach
@endif
