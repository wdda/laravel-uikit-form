<div class="uk-margin-small-bottom">
    <label @if($id) for="{{ $id }}" @endif>
        <input
            type="radio"
            class="{{ $class ?: 'uk-radio' }}"
            @if($id) id="{{ $id }}" @endif
            @if($name) name="{{ $name }}" @endif
            @if($value) value="{{ $value }}" @endif
            {{ $attributes }}
            @if($checked) checked @endif
        >
        {{ $label ?: $name }}
    </label>
</div>
