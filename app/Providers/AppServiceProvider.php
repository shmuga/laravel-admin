<?php namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        View::composer('elements.temp','App\Http\Composers\AdminComposer');
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
	}

}
