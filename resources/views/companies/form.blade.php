<div class="box-body">
    <div class="form-group">
        <label for="name">Nume</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $company->name }}">
    </div>
    <div class="form-group">
        <label for="unique_registration_code">CUI</label>
        <input type="text" name="unique_registration_code" id="unique_registration_code" class="form-control" value="{{ old('unique_registration_code') ?? $company->unique_registration_code }}">
    </div>
    <div class="form-group">
        <label for="trade_register_number">J</label>
        <input type="text" name="trade_register_number" id="trade_register_number" class="form-control" value="{{ old('trade_register_number') ?? $company->trade_register_number }}">
    </div>
    <div class="form-group">
        <label for="city">Localitate</label>
        <input type="text" name="city" id="city" class="form-control" value="{{ old('city') ?? $company->city }}">
    </div>
    <div class="form-group">
        <label for="address">Adresa</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') ?? $company->address }}">
    </div>
    <div class="form-group">
        <label for="hourly_rate">Tarif / ora</label>
        <input type="text" name="hourly_rate" id="hourly_rate" class="form-control" value="{{ old('hourly_rate') ?? $company->hourly_rate }}">
    </div>
</div>