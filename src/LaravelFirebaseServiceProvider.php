<?php

namespace LaravelFirebase;

use Illuminate\Support\ServiceProvider;
use Firebase\Firebase;

class LaravelFirebaseServiceProvider extends ServiceProvider {

  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([__DIR__ . '/config/firebase.php' => config_path('firebase.php')]);
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->bind('Firebase\Firebase', function()
    {
      return Firebase::initialize(config('firebase.url'), config('firebase.secret'));
    });
  }

}
