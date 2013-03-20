<?php namespace Nickstr\Talktalk;

use Illuminate\Support\ServiceProvider;

class TalktalkServiceProvider extends ServiceProvider {

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
		$this->package('nickstr/talktalk');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->loadRoutes();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

    public function loadRoutes()
    {
        $path = $this->guessPackagePath();
        require_once $path .'/routes.php';
    }

}