<div class="uk-margin-small-bottom">
    <label @if($id)for="{{$id}}"@endif>
        <input class="uk-radio" type="radio"
            @if($id)id="{{ $id }}"@endif
            @if($name)name="{{ $name }}"@endif
            value="{{ $value }}"{!! $attributes !!}@if($checked) checked @endif> {{ $label }}
    </label>
</div>