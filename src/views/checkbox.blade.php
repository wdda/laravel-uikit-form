<!-- <div class="uk-margin-small-bottom">
    <label @if($id)for="{{$id}}"@endif>
        <input  type="checkbox"
                @if(!$class)class="uk-checkbox"@endif
                @if($id)id="{{ $id }}"@endif
                @if($name)name="{{ $name }}"@endif
               value="{{ $value }}"{!! $attributes !!}@if($checked) checked @endif> {{ $label }}
    </label>
</div>


<label for="{{ $id }}">
    <input type="checkbox" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}" {{ $checked ? 'checked' : '' }} class="{{ $class }}" {!! $attributes !!}>
    {{ $label }}
</label> -->


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