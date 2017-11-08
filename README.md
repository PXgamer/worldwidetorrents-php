# worldwidetorrents-php

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

An easy to use wrapper for the WorldWideTorrents API written in PHP.

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/:package_name
```

## Usage

```php

$client = new Client();

// Use the specific classes as their short names
use \pxgamer\WorldWideTorrents;

// Create a new Client instance
$client = new WorldWideTorrents\Client();
$client->setAuthKey('API_KEY');

// Initialise a new instance of each class
$group  = new WorldWideTorrents\Group($client);
$mail  = new WorldWideTorrents\Mail($client);
$torrent = new WorldWideTorrents\Torrent($client);
$user = new WorldWideTorrents\User($client);
$account = new WorldWideTorrents\Account($client);
```

### Methods

#### Client Class

```php
/**
 * This is required to be initialised first.
 * It must be passed into all other classes.
 */
use \pxgamer\WorldWideTorrents\Client;
$client = new Client;
$client->setAuthKey('API_KEY');
```

### Group Class

```php
use \pxgamer\WorldWideTorrents\Group;
$group = new Group($client);
```

_Getting a Group's information_

```php
$group->getInfo(3);
```

_Getting a Group's torrents_

```php
$group->getTorrents(3);
```

### Mail Class

_Initialise the Mail class_
```php
use \pxgamer\WorldWideTorrents\Mail;
$mail = new Mail($client);
```

_Getting a user's mail stats_

```php
$mail->getStats(656);
```

### Torrent Class

_Initialise the Torrent class_

```php
use \pxgamer\WorldWideTorrents\Torrent;
$torrent = new Torrent($client);
```

_Getting a torrent's information_

```php
$torrent->getInfo(656);
```

### User Class

_Initialise the User class_

```php
use \pxgamer\WorldWideTorrents\User;
$user = new User($client);
```

_Getting a user's information_

```php
$user->getInfo(656);
```

_Getting a user's torrents_

```php
$user->getTorrents(656);
```

### Account Class

_Initialise the Account class_

```php
// Requires the API key to be set in the Client class
use \pxgamer\WorldWideTorrents\Account;
$account = new Account($client);
```

_Upload a torrent_

```php
$account->upload('torrent_title', '@C:\torrents\t.torrent', 39);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/:package_name/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/:styleci/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/:package_name
[link-travis]: https://travis-ci.org/pxgamer/:package_name
[link-styleci]: https://styleci.io/repos/:styleci
[link-code-quality]: https://codecov.io/gh/pxgamer/:package_name
[link-downloads]: https://packagist.org/packages/pxgamer/:package_name
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
