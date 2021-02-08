Converts a PHP array to a specified PHP class object.
## Example

```php
$data = [
            'uid'  => 1000,
            'name' => 'aaa',
            'age'  => 21,
        ];
        
$obj = \Convert\Helper::toObject($data, User::class);
$obj->getName();
$obj->getAge();
```