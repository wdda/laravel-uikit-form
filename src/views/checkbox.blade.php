<div class="uk-margin-small-bottom">
    <label @if($id) for="{{ $id }}" @endif>
        <input type="checkbox"
            @if($name) name="{{ $name }}" @endif
            @if($id) id="{{ $id }}" @endif
            value="{{ $value }}"
            class="{{ $class ?? 'default-class' }}"
            {!! $attributes !!}
            @if($checked) checked @endif>
        {{ $label }}
    </label>
</div>
