# Laravel Uikit Form

[![Software License][ico-license]](LICENSE.md)

Small and smart package for generate html form elements as Uikit mark!

## Example

Input:
 ```php
{!! formInput('my_name') !!}
```
Result:
 ```php
 <div class="uk-margin-small-bottom">
     <label>My name</label>
     <div class="uk-form-controls">
         <input class="uk-input" name="my_name" value="">
     </div>
 </div>
 ```
 
```php
formInput($name, $value = false, $label = false, $id = false, $attributes = false)
```
```php
formTextarea($name, $value = false, $label = false, $id = false, $rows = false, $attributes = false)
```
```php
formSelect($name, $options, $value = false, $label = false, $id = false, $attributes = false)
```
```php
formCheckbox($name, $value = false, $label = false, $id = false, $attributes = false)
```

## Install

Install package:

``` bash
$ composer require wdda/laravel-uikit-form
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
