<div class="uk-margin-small-bottom">
    <label for="{{$id}}">{{$label}}</label>
    <div class="uk-form-controls">
        <select class="uk-select" id="{{$id}}" @if($name)name="{{$name}}"@endif{!! $attributes !!}>
            <option {!! (key_exists('v-model', $attributesArray)) ? ':value="null"' : 'value=""' !!}>- choice -</option>
            @foreach($options as $valueOption => $name)
                <option value="{{$valueOption}}"{!! ($valueOption == $value) ? ' selected' : '' !!}>{{$name}}</option>
            @endforeach
        </select>
    </div>
</div>
