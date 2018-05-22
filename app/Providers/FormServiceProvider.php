<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('text', 'components.form.text', ['name', 'value' => NULL, 'attributes' =>[]]);
        Form::component('textarea', 'components.form.textarea', ['name', 'value' => NULL, 'attributes' =>[]]);
        Form::component('submit', 'components.form.submit', ['value' => 'submit', 'attributes' =>[]]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => NULL, 'attributes' =>[]]);
        Form::component('file', 'components.form.file', ['name', 'value' => NULL, 'attributes' =>[]]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
