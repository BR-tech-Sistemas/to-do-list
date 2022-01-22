<?php

namespace App\Providers;

use Godruoyi\Snowflake\RandomSequenceResolver;
use Godruoyi\Snowflake\Snowflake;
use Illuminate\Support\ServiceProvider;

class SnowflakeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('snowflake', function() {
            return (new Snowflake(
                config('snowflake.data_center'),
                config('snowflake.worker_node'))
            )
                ->setStartTimeStamp(strtotime('2022-01-22') * 1000)
                ->setSequenceResolver(new RandomSequenceResolver());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
