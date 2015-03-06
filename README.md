laravelSms
==========

package for send sms with laravel5 (published for [parssms24.ir](http://parssms24.ir)) this package only work for iranian mobile operator

installation
------------
For install this package Edit your project's ```composer.json``` file to require parsidev/sms

```php
"require": {
    "laravel/framework": "5.*",
    "parsidev/sms": "dev-master"
},
"minimum-stability": "dev"
```
Now, update Composer:
```
composer update
```
Once composer is finished, you need to add the service provider. Open ```config/app.php```, and add a new item to the providers array.
```
'Parsidev\Sms\SmsServiceProvider',
```
Next, add a Facade for more convenient usage. In ```config/app.php``` add the following line to the aliases array:
```
'Sms' => 'Parsidev\Sms\Facades\Sms',
```
Publish config files:
```
php artisan vendor:publish
```
for change username, password and other configuration change ```config/sms.php```

Usage
-----
for use this package, please register on [parssms24.ir](http://parssms24.ir)


### Send Message
```php
Sms::send('9123456789', 'text message', isFlash=True); // send flash message for a person

Sms::send(['9123456789', '91234567890'], 'text mesage', isFlash=True); // send flash message for persons


Sms::send('9123456789', 'text message'); // send normal message for a person

Sms::send(['9123456789', '91234567890'], 'text mesage'); // send normal message for persons
```
### Get Credit
```php
Sms::getCredit();
```
