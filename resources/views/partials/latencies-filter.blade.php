@if(!empty($latencies))

    @foreach($latencies as $item)
        <input type="checkbox" name="latencies[]" value={{$item->latency}} {{ (isset($_GET['latencies']) && in_array($item->latency, $_GET['latencies'])) ? 'checked' : '' }}>
        <label for={{$item->latency}}> {{$item->latency}} CL</label>
        <br>
    @endforeach
@endif
