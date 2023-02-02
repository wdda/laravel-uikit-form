<div class="uk-margin-small-bottom">
    <label @if($id)for="{{ $id }}"@endif>{{ $label }}</label>
    <div uk-form-custom="target: true">
        <input type="file"
               aria-label="Custom controls"
               @if($id)id="{{ $id }}" @endif
               @if($name)name="{{ $name }}" @endif
               value="{{ $value }}"{!! $attributes !!}>

        <input class="uk-input uk-form-width-medium"
               type="text"
               @if($placeholder)placeholder="{{ $placeholder }}" @endif
               aria-label="Custom controls" disabled>
    </div>
</div>
