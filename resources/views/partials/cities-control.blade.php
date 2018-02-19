<form class="form-inline my-2 my-lg-0">
    <select name="city" id="cboCities" class="form-control mr-sm-2">
        <option value="">- Seleccione ciudad -</option>
        @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
</form>