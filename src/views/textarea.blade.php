<div class="uk-margin-small-bottom">
    <label for="{{ $id }}">{{ $label }}</label>
    <div class="uk-form-controls">
        <textarea rows="{{ $rows }}"
                  class="uk-textarea"
                  @if($name)name="{{$name}}"@endif
                {!! $attributes !!}>{{$value}}</textarea>
    </div>
</div>
