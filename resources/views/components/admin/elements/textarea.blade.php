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

    <textarea name="{{ $name ?? '' }}" id="{{ $id }}" class="form-control {{ $inputClass ?? '' }}" placeholder="{{ isset($placeholder) ? $placeholder : (isset($label) ? $label : '') }}" cols="{{ $cols ?? '20' }}" rows="{{ $rows ?? '10' }}" style="{{ $style ?? '' }}"></textarea>

    @if (isset($isLabelAfter) && $isLabelAfter)
        @isset($label)
            <label for="{{ $name }}" class="mb-2 {{ $labelClasses ?? '' }}">
                {{ $label }}
            </label>
        @endisset
    @endif
</div>
