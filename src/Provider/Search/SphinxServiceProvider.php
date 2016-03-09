<?php

namespace OnlineSid\Silex\Provider\Search;

use NilPortugues\Sphinx\SphinxClient;
use Silex\ServiceProviderInterface;
use Silex\Application;

/**
 * Class SphinxServiceProvider
 *
 * @package OnlineSid\Silex\Provider\Search
 */
class SphinxServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['sphinx.options'] = array();
        $app['search'] = $app->share(function ($app) {
            $options = $app['sphinx.options'];

            $options['host'] = isset($options['host']) ? $options['host'] : '127.0.0.1';
            $options['port'] = isset($options['port']) ? $options['port'] : '9312';

            $sphinxSearch = new SphinxClient();
            $sphinxSearch->setServer($options['host'], $options['port']);

            return $sphinxSearch;
        });
    }

    public function boot(Application $app)
    {
    }
}