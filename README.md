# worldwidetorrents-php

An easy to use wrapper for the WorldWideTorrents API written in PHP.

## Usage

__Include the class:__
- Using Composer  

`composer require pxgamer/worldwidetorrents-php`  
```php
<?php
require 'vendor/autoload.php';
```
- Including the file manually  
```php
<?php
include 'src/Client.php';
```

Once included, you can initialise the class using either of the following:

```php
$client = new \pxgamer\WorldWideTorrents\Client;
```
```php
use \pxgamer\WorldWideTorrents\Client;
$client = new Client;
```

## Getting started with Composer
```php
<?php
// Include Composer
require 'vendor/autoload.php';

// Use the specific classes as their short names
use \pxgamer\WorldWideTorrents;

// Create a new Client instance
$client = new WorldWideTorrents\Client();
// $client->setAuthKey('API_KEY'); // This currently isn't applicable

// Initialise a new instance of each class
$group  = new WorldWideTorrents\Group($client);
$mail  = new WorldWideTorrents\Mail($client);
$torrent = new WorldWideTorrents\Torrent($client);
$user = new WorldWideTorrents\User($client);
```

## Methods

### Client Class
##### Initialise the Client class
```php
/**
 * This is required to be initialised first.
 * It must be passed into all other classes.
 */
use \pxgamer\WorldWideTorrents\Client;
$client = new Client;
// $client->setAuthKey('API_KEY');
```

### Group Class
##### Initialise the Group class
```php
use \pxgamer\WorldWideTorrents\Group;
$group = new Group($client);
```
##### Getting a Group's information
```php
$group->getInfo(3);
```
##### Getting a Group's torrents
```php
$group->getTorrents(3);
```

### Mail Class
##### Initialise the Mail class
```php
use \pxgamer\WorldWideTorrents\Mail;
$mail = new Mail($client);
```
##### Getting a user's mail stats
```php
$mail->getStats(656);
```

### Torrent Class
##### Initialise the Torrent class
```php
use \pxgamer\WorldWideTorrents\Torrent;
$torrent = new Torrent($client);
```
##### Getting a torrent's information
```php
$torrent->getInfo(656);
```

### User Class
##### Initialise the User class
```php
use \pxgamer\WorldWideTorrents\User;
$user = new User($client);
```
##### Getting a user's information
```php
$user->getInfo(656);
```
##### Getting a user's torrents
```php
$user->getTorrents(656);
```