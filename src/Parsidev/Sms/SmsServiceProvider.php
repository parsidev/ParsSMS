<?php namespace Parsidev\Sms;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Config;
>>>>>>> origin/master
use SoapClient;

class SmsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
        
        
        /**
        * Bootstrap the application events.
        *
        * @return void
        */
        public function boot()
        {
            $this->publishes([
                __DIR__.'/../../config/sms.php' => config_path('sms.php'),
            ]);
        }

        

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['sms'] = $this->app->share(function($app)
                {
                    $config = config('sms');
<<<<<<< HEAD
=======
                    dd($config['webserviceUrl']);
>>>>>>> origin/master
                    return new Sms($config, new SoapClient($config['webserviceUrl']));
                });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['sms'];
	}

}
