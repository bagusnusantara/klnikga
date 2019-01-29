<?php

namespace App\Providers;
use Laravel\Passport\Passport;
//use Illuminate\Support\Facades\Gate as GateContract;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];
/**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();
        Passport::routes();

        $gate->define('isDokter', function($user){
          return $user->roles == 'dokter';
        });
        $gate->define('isPasien', function($user){
          return $user->roles == 'pasien';
        });
    }
}