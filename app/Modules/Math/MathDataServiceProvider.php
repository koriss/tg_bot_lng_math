<?php

namespace App\Modules\Math;

use App\Modules\Math\Contracts\ContentCabinetData;
use App\Modules\Math\Services\TgService;
use Illuminate\Support\ServiceProvider;

class MathDataServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            ContentCabinetData::class,
            TgService::class
        );
    }
}
