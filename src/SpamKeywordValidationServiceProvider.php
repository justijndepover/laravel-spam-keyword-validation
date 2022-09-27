<?php

namespace Justijndepover\LaravelSpamKeywordValidation;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Justijndepover\LaravelSpamKeywordValidation\Validators\SpamKeywordValidator;

class SpamKeywordValidationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/spam-keywords.php', 'spam-keywords');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/spam-keywords.php' => config_path('spam-keywords.php'),
            ], 'laravel-spam-keyword-validation-config');
        }

        Validator::extend('blockSpamKeywords', SpamKeywordValidator::class);
    }
}
