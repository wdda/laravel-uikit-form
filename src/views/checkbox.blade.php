<div class="uk-margin-small-bottom">
    <label>
        <input class="uk-checkbox" type="checkbox"
               @if($id)id="{{ $id }}"@endif
               @if($name)name="{{ $name }}"@endif
               value="{{ $value }}"{!! $attributes !!}> {{ $label }}
    </label>
</div>