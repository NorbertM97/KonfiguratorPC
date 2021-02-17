@if(!empty($slots))

    @foreach($slots as $item)

        <input type="checkbox" name="slots[]" value={{$item->slots}} {{ (isset($_GET['slots']) && in_array($item->name, $_GET['compability'])) ? 'checked' : '' }}>
        <label for={{$item->slots}}> {{$item->slots}} </label>
        <br>
    @endforeach
@endif
