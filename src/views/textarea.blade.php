<div class="uk-margin-small-bottom">
    <label @if($id)for="{{$id}}"@endif>{{ $label }}</label>
    <div class="uk-form-controls">
        <textarea rows="{{ $rows }}"
                  @if(!$class)class="uk-textarea" @endif
                  @if($name)name="{{$name}}" @endif
                  @if($id)id="{{$id}}"@endif
            {!! $attributes !!}
        >
            {{$value}}
        </textarea>
    </div>
</div>
