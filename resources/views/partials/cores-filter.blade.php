@if(!empty($cores))

    @foreach($cores as $item)

        <input type="checkbox" name="cores[]" value={{$item->cores}} {{ (isset($_GET['cores']) && in_array($item->cores, $_GET['cores'])) ? 'checked' : '' }}>
        <label for={{$item->cores}}> {{$item->cores}} </label>
        <br>                                
    @endforeach
@endif