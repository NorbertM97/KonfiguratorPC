@if(!empty($timings))

    @foreach($timings as $item)
        <input type="checkbox" name="timings[]" value={{$item->timing}} {{ (isset($_GET['timings']) && in_array($item->timing, $_GET['timings'])) ? 'checked' : '' }}>
        <label for={{$item->timing}}> {{$item->timing}} Mhz </label>
        <br>
    @endforeach
@endif
