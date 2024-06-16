<div class="uk-margin-small-bottom">
    <label @if($id)for="{{ $id }}"@endif>{{ $label }}</label>
    <div class="uk-form-controls">
        <input @if(!$class)class="uk-input" @endif
            @if($id)id="{{ $id }}" @endif
            @if($name)name="{{ $name }}" @endif
            value="{{ $value }}"{!! $attributes !!}>
    </div>
</div>

