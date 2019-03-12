<div class="uk-margin-small-bottom">
    <label @if($id)for="{{$id}}"@endif>{{$label}}</label>
    <div class="uk-form-controls">
        <select
                @if(!$class)class="uk-select"@endif
                @if($id)id="{{$id}}"@endif
                @if($name)name="{{$name}}"@endif{!! $attributes !!}>
            <option {!! (is_array($attributesArray) && key_exists('v-model', $attributesArray)) ? ':value="null"' : 'value=""' !!}>- choice -</option>
            @foreach($options as $valueOption => $name)
                <option value="{{$valueOption}}"{!! ($valueOption == $value || (is_array($value) && !empty($value[$valueOption]))) ? ' selected' : '' !!}>
                    {{$name}}
                </option>
            @endforeach
        </select>
    </div>
</div>
