@php
    if(empty($id)){
        $id = uniqid("input-");
    }
@endphp

<div class="{{ $parentClass ?? '' }}">
    @if (isset($isLabelAfter) && !$isLabelAfter)
        @isset($label)
            <label for="{{ $name }}" class="mb-2 {{ $labelClasses ?? '' }}">
                {{ $label }}
            </label>
        @endisset
    @endif
    <input
        type="{{ $type ?? 'text' }}"
        name="{{ $name ?? '' }}"
        id="{{ $id }}"
        class="{{ $type != 'submit' && $type != 'button' && $type != 'checkbox' ? 'form-control' : '' }} {{ $inputClass ?? '' }}"
        placeholder="{{ isset($placeholder) ? $placeholder : (isset($label) ? $label : '') }}"
        {{ isset($isDisabled) && $isDisabled ? 'disabled' : '' }}
        value="{{ $defaultValue ?? '' }}">

        @if (isset($isLabelAfter) && $isLabelAfter)
            @isset($label)
                <label for="{{ $name }}" class="mb-2 {{ $labelClasses ?? '' }}">
                    {{ $label }}
                </label>
            @endisset
        @endif
</div>
