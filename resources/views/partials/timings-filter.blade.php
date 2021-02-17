@if(!empty($timings))

    @foreach($timings as $item)
        <input type="checkbox" name="timings[]" value={{$item->max_timing}} {{ (isset($_GET['timings']) && in_array($item->max_timing, $_GET['timings'])) ? 'checked' : '' }}>
        <label for={{$item->max_timing}}> {{$item->max_timing}} Mhz </label>
        <br>
    @endforeach
@endif
