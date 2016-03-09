# Silex Sphinx Provider

Silex service provider for Sphinx search engine (PHP)

## Installation

### Library

    $ git clone https://github.com/onlinesid/silex-sphinx-provider.git

### Dependencies

#### [`Composer`](https://github.com/composer/composer) (*will use the Composer ClassLoader*)

    $ wget http://getcomposer.org/composer.phar
    $ php composer.phar require onlinesid/silex-sphinx-provider:dev-master

## Usage

#### Registering the Service Provider
```php
$app->register(new OnlineSid\Silex\Provider\Search\SphinxServiceProvider(), array(
    'sphinx_options' => array('host' => '127.0.0.1', 'port' => '9312'),
));
```

#### Usage in controller

```php
/** @var $sphinxSearch \NilPortugues\Sphinx\SphinxClient */
$sphinxSearch = $this->app['sphinx_client'];
```
