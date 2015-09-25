# Slack API package

Package for integrating with Slack API.

## Requirements

* PHP 5.3 or higher
* Curl

# Installation
You can install the package using the ```Composer``` package manager. You can install it by running this command in your project root.


```php
composer require rkarkut/slack-package:master-dev
```
Then create an Application in your Slack account for the package to use. You will need the ```Client ID``` and ```Client Secret``` to prepare authorization script.

## Basic USage

### Create client instance and test API connection

```php
// create instance
$client = new \Rkarkut\Slack\Client();

if ($client->api()->test()) {
    // Api is working...
}
```

To test Your token You can call your client instance like in the example below.

```php
$client->setToken('your.token');

if ($client->auth()->test()) {
    // Auth is OK...
}
```

### Managing channels

To manage channels You can call methods like in the examples below.

#### Creating a channel

```php
$client->channels()->create("channel.name");
```

#### Archiving a channel

```php
$client->channels()->archive('#channel.name');
```

#### Getting list of channels

```php
$client->channels()->getList();
```

### Posting messages

To post a message to any channels You can call methods like in the examples below.

```php
$client->chat()->postMessage('post.message', 'name.of.bot');
```

## Integrating the package to authorize Your application

To authorize any user with the Application you can use the package like in the example below.

```php
// creating client instance
$client = new \Rkarkut\Slack\Client();

// put application client ID and secret
$clientId = 'your.client.id';
$clientSecret = 'client.secret';

// get authorization code from the Slack
$code = $_GET['code'];

// optional parameter
$redirectUrl = null;

// authorize
$result = $client->oauth($clientId, $clientSecret)->access($code, $redirectUrl);
```

## Conclusion

I will work on this plugin to add new functionality. If you have any suggestions please log an issue on GitHub.