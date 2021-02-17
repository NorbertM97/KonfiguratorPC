@if(!empty($slots))

    @foreach($slots as $item)
    
        <input type="checkbox" name="slots[]" value={{$item->slots}} {{ (isset($_GET['slots']) && in_array($item->slots, $_GET['slots'])) ? 'checked' : '' }}>
        <label for={{$item->slots}}> {{$item->slots}} </label>
        <br>                                
    @endforeach
@endif