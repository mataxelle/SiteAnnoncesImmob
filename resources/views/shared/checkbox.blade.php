@php
    $class ??= null;
@endphp

<div @class(['form-check form-switch', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="hidden" value="0" name="{{ $name }}">
    <input class="form-check-input @error($name) is-invalid @enderror" type="checkbox" value="1"
        name="{{ $name }}" id="{{ $name }}" role="switch" @checked(old($name, $value ?? false))>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
