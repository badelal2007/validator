# Validator
**Validator** is a framework agnostic and fluent server side form validation package for PHP


# [Documentation]

# Installation
Validator can be installed via `composer` just execute the following command
in your project root

```composer require badelal2007/validator```

Or add the following in your composer.json file and run `composer install`

```
"require": {
    "badelal2007/validator": "dev-master"
}
```

# Usage
Using validator in your project is super simple, here is an example
```php
require_once __DIR__ . '/vendor/autoload.php';

$validator = new validator\Validator();
$validator->validate($_POST, [
    'username'         => 'required',
    'password'         => 'required|password:strong',
    'confirm_password' => 'required|same:password'
]);

#Return true if validation pass
var_dump($validator->passed());

#Return true if validation failed
var_dump($validator->failed());

#Return all erroes if any
var_dump($validator->getErrors());

#Print first error if any for 'password' field
if($errors->get('password')) { echo '<span class="pressroom-error">'.$errors->get('password')->first().'</span>'; }

#Print last error if any for 'password' field
if($errors->get('password')) { echo '<span class="pressroom-error">'.$errors->get('password')->last().'</span>'; }

#Change 'message' for validation rule
$validator->validate($_POST, [
    'email'     => 'required--message=Please enter email|email--Please enter valid email ID.',
    'password'  => 'required'
]);

```
If you've files to validate you will need to merge `$_POST|$_GET` and with `$_FILES` just like the following
```php
$validator = new validator\Validator();
$validator->validate(array_merge($_POST, $_FILES), [
    'profile_picture' => 'file:image'
]);
```

# Available Rules
- required
- email 
- password `Accepts password strength like password:strong|medium|normal (default noraml)` 
- number
- file `Accepts file type currently supported formats: image,video,doc`
- min
- max
- length
- array
- boolean
- ip
- same
- alpha
- alnum
