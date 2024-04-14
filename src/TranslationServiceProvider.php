<?php

namespace Fzot\Translation;

use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->publishes([
            __DIR__ . '/../config/fzot_translation.php' => 'config/fzot_translation.php'
        ]);
    }
}
