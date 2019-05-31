<div class="form-group">
    <label for="name">Ime</label>
    <input type="text" name="name" value="{{ old('name') ?? $player->name }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>
<div class="form-group">
    <label for="dob">Datum rodjenja</label>
    <input name="dob" id="dob" value="{{ old('dob') ?? $player->dob->format('m/d/Y') }}" class="date form-control" type="text" autocomplete="off">
    <div>{{ $errors->first('dob') }}</div>
</div>
<div class="form-group">
    <label for="nationality">Nacionalnost</label>
    <input type="text" name="nationality" value="{{ old('nationality') ?? $player->nationality }}" class="form-control">
    <div>{{ $errors->first('nationality') }}</div>
</div>
<div class="form-group">
    <label for="height">Visina(cm)</label>
    <input type="text" name="height" value="{{ old('height') ?? $player->height }}" class="form-control">
    <div>{{ $errors->first('height') }}</div>
</div>
<div class="form-group">
    <label for="preferred_foot">Jaca noga</label>
    <select name="preferred_foot" id="preferred_foot" class="form-control">
        <option value="" disabled>Izaberi</option>
        @foreach($player->preferredFoot() as $option)
            <option value="{{ $option }}" {{ $player->preferred_foot == $option ? 'selected' : '' }}>{{ $option }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="preferred_foot">Pocetak ugovora</label>
    <input id="joined" name="joined" value="{{ old('joined') ?? $player->joined->format('m/d/Y') }}" class="form-control" type="text" autocomplete="off">
    <div>{{ $errors->first('joined') }}</div>
</div>
<div class="form-group">
    <label for="signed_from">Dosao iz</label>
    <input type="text" name="signed_from" value="{{ old('signed_from') ?? $player->signed_from }}" class="form-control">
    <div>{{ $errors->first('signed_from') }}</div>
</div>
<div class="form-group">
    <label for="contract_until">Istek ugovora</label>
    <input id="contract_until" value="{{ old('contract_until') ?? $player->contract_until->format('m/d/Y') }}" name="contract_until" class="form-control" type="text" autocomplete="off">
    <div>{{ $errors->first('contract_until') }}</div>
</div>
<div class="form-group">
    <label for="full_contract_wage">Ukupna plata(€)</label>
    <input type="text" name="full_contract_wage" value="{{ old('full_contract_wage') ?? $player->full_contract_wage }}" class="form-control">
    <div>{{ $errors->first('full_contract_wage') }}</div>
</div>
<div class="form-group d-flex flex-column">
    <label for="image">Dodaj sliku</label>
    <input type="file" name="image" class="py-1">
    <div>{{ $errors->first('image') }}</div>
    @if($player->image)
        <img src="{{ asset('storage/' . $player->image) }}" class="img-thumbnail" style="border-radius: 50%; width: 300px;">
    @endif
</div>

@csrf