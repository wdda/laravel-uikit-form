<div class="uk-margin-small-bottom">
    <label @if($id)for="{{ $id }}"@endif>{{ $label }}</label>
    <div class="uk-form-controls">
        <input @if(!$class)class="uk-input" @endif
                type="text"
               @if($id)id="{{ $id }}" @endif
               @if($name)name="{{ $name }}" @endif
               @if($placeholder)placeholder="{{ $placeholder }}" @endif
               value="{{ $value }}"{!! $attributes !!}>
    </div>
</div>

