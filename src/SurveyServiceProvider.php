<?php

namespace Quill\Survey;

use Vellum\Module\Quill;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Quill\Survey\Listeners\RegisterSurveyModule;
use Quill\Survey\Listeners\RegisterSurveyPermissionModule;
use Quill\Survey\Resource\SurveyResource;
use App\Resource\Survey\SurveyRootResource;
use Quill\Survey\Models\SurveyObserver;

class SurveyServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadModuleCommands();
        $this->loadRoutesFrom(__DIR__ . '/routes/survey.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'survey');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/config/survey.php', 'survey');

        SurveyResource::observe(SurveyObserver::class);

        if (class_exists('App\Resource\Survey\SurveyRootResource')) {
        	SurveyRootResource::observe(SurveyObserver::class);
        }

        // $this->publishes([
        //     __DIR__ . '/config/survey.php' => config_path('survey.php'),
        // ], 'survey.config');

        // $this->publishes([
        //    __DIR__ . '/views' => resource_path('/vendor/survey'),
        // ], 'survey.views');

        $this->publishes([
        	__DIR__ . '/database/factories/SurveyFactory.php' => database_path('factories/SurveyFactory.php'),
            __DIR__ . '/database/seeds/SurveyTableSeeder.php' => database_path('seeds/SurveyTableSeeder.php'),
        ], 'survey.migration');
    }

    public function register()
    {
        Event::listen(Quill::MODULE, RegisterSurveyModule::class);
        Event::listen(Quill::PERMISSION, RegisterSurveyPermissionModule::class);
    }

    public function loadModuleCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([

            ]);
        }
    }
}
