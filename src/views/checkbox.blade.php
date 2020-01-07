<div class="uk-margin-small-bottom">
    <label @if($id)for="{{$id}}"@endif>
        <input  type="checkbox"
                @if(!$class)class="uk-checkbox"@endif
                @if($id)id="{{ $id }}"@endif
                @if($name)name="{{ $name }}"@endif
               value="{{ $value }}"{!! $attributes !!}@if($checked) checked @endif> {{ $label }}
    </label>
</div>
