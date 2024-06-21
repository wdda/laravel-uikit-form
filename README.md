# Laravel Uikit Form

[![Software License][ico-license]](LICENSE.md)

Small and smart package for generate html form elements as Uikit mark!

## Example

Input:
 ```php
{!! formInput('my_name')->value('value 123')->class('uk-input') !!}
```
Result:
 ```php
<div class="uk-margin-small-bottom">
    <label @if($id)for="{{ $id }}"@endif>{{ $label }}</label>
    <div class="uk-form-controls">
        <input @if(!$class)class="uk-input" @endif
            @if($id)id="{{ $id }}" @endif
            @if($name)name="{{ $name }}" @endif
            value="{{ $value }}"{!! $attributes !!}>
    </div>
</div>
 ```
 
```php
formInput('Input')
    ->label('Input')
    ->id('id')
    ->class('uk-input')
    ->attributes(['attribute1', 'attribute2' => 'value'])
    ->value('value')
```
```php
formTextarea('Textarea')
    ->label('Textarea')
    ->id('id')
    ->class('uk-input')
    ->attributes(['attribute1', 'attribute2' => 'value'])
    ->value('value')
    ->rows(8)
```
```php
formSelect('Select')
    ->label('Select')
    ->id('id')
    ->class('uk-input')
    ->attributes(['attribute1', 'attribute2' => 'value'])
    ->value('value')
```
```php
formCheckbox('Checkbox')
    ->label('Checkbox')
    ->id('id')
    ->class('uk-input')
    ->attributes(['attribute1', 'attribute2' => 'value'])
    ->value('value')
```
```php
formRadio('Radio')
    ->label('Radio')
    ->id('id')
    ->class('uk-input')
    ->attributes(['attribute1', 'attribute2' => 'value'])
    ->value('value')
```


## Install

Install package:

``` bash
$ composer require wdda/laravel-uikit-form
```

Update package
```bash
$ composer update wdda/laravel-uikit-form
```

Open your config/app.php and add the following to the providers array:
``` php
WDDA\LaravelUikitForm\LaravelUikitFormProvider::class,
```

## Security

If you discover any security related issues, please email dima@wdda.pro instead of using the issue tracker.

## Credits

- [Dmitriy Alferov][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/wdda/laravel-finder-tests.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-author]: https://github.com/wdda
