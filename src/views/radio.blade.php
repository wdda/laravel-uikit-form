<div class="uk-margin-small-bottom">
    <label @if($id)for="{{$id}}"@endif>
        <input
            type="radio"
            @if(!$class)class="uk-radio"@endif
            @if($id)id="{{ $id }}"@endif
            @if($name)name="{{ $name }}"@endif
            value="{{ $value }}"{!! $attributes !!}@if($checked) checked @endif> {{ $label }}
    </label>
</div>