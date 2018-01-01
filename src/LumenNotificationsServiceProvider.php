<?php
namespace ciptohadi\LumenNotifications;

use Illuminate\Support\ServiceProvider;
use Illuminate\Notifications\Console\NotificationTableCommand;

class LumenNotificationsServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        // parent::boot();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfigs();
        
        $this->registerCommands();
        
        $this->registerBind();
        
        $this->registerPublish();
        
        $this->registerProviders();
    }

    /**
     * Publish configs.
     *
     * @return void
     */
    protected function registerPublish()
    {
        $this->publishes([
            __DIR__ . '/Config/mail.php' => $this->config_path('mail.php'),
            __DIR__ . '/Config/services.php' => $this->config_path('services.php')
        ]);
    }

    /**
     * Register for Lumen Application.
     *
     * @return void
     */
    protected function registerCommands()
    {
        $this->commands(\Illuminate\Notifications\Console\NotificationTableCommand::class);
        $this->commands(\ciptohadi\LumenNotifications\Commands\LumenNotificationsPublishCommand::class);
        $this->commands(\ciptohadi\LumenNotifications\Commands\LumenNotificationsMakeCommand::class);
    }

    /**
     * Register configs.
     *
     * @return void
     */
    protected function registerConfigs()
    {
        app()->configure('mail');
        app()->configure('services');
    }

    /**
     * Register configs.
     *
     * @return void
     */
    protected function registerProviders()
    {
        app()->register(\Illuminate\Notifications\NotificationServiceProvider::class);
        app()->register(\Illuminate\Mail\MailServiceProvider::class);
    }

    /**
     * Register component FileSystem.
     *
     * @return void
     */
    protected function registerBind()
    {
        app()->bind(\Illuminate\Contracts\Mail\Mailer::class, function ($app) {
            return $app['mailer'];
        });
    }

    /**
     * Return Config Path
     *
     * @return $path
     */
    public function config_path($path)
    {
        return app()->basePath('config/') . $path;
    }
}
