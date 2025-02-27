@php
    if (empty($id)) {
        $id = uniqid("input-");
    }
@endphp

<div class="{{ $parentClass ?? '' }}">
    @isset($label)
        <label for="{{ $name }}" class="mb-2 {{ $labelClasses ?? '' }}">
            {{ $label }}
        </label>
    @endisset

    <select name="{{ $name ?? '' }}" id="{{ $id }}" class="form-control {{ $inputClass ?? '' }}" {{ isset($isDisabled) && $isDisabled ? 'disabled' : '' }}>
        @foreach ($options as $key => $value)
            <option {{ isset($defaultValue) && $defaultValue == $key ? 'selected' : '' }} value="{{ $key }}">{{ $value }}
            </option>
        @endforeach
    </select>

    @if (isset($isLabelAfter) && $isLabelAfter)
        @isset($label)
            <label for="{{ $name }}" class="mb-2 {{ $labelClasses ?? '' }}">
                {{ $label }}
            </label>
        @endisset
    @endif
</div>
