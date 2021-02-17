@if(!empty($series))

    @foreach($series as $item)
        <input type="checkbox" name="series[]" value={{$item->series}} {{ (isset($_GET['series']) && in_array($item->series, $_GET['series'])) ? 'checked' : '' }}>
        <label for={{$item->series}}> {{$item->series}} </label>
        <br>                                
    @endforeach
@endif