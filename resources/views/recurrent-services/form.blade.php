<div class="form-group">
    <label for="name">Nume</label>
    <input type="text" name="name" id="name" value="{{ old('name') ?? $recurrentService->name }}" class="form-control">
</div>
<div>{{ $errors->first('name') }}</div>

<div class="form-group">
    <label for="price">Pret</label>
    <input type="text" name="price" id="price" value="{{ old('price') ?? $recurrentService->price }}" class="form-control">
</div>
<div>{{ $errors->first('price') }}</div>