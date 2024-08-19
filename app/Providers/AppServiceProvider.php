<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

use App\Models\Role_to_access;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function ($view) {

            if (Auth::check()) {
                $roleToAccess = Role_to_access::join('modules', 'modules.id', '=', 'role_to_accesses.module_id')
                        ->join('module_operations', 'module_operations.id', '=', 'role_to_accesses.module_operation_id')
                        ->where('role_id', Auth::user()->role_id)
                        ->select('role_to_accesses.*', 'modules.name', 'module_operations.operation', 'module_operations.route')
                        ->get();

                $accessArr = [];
                $accessRouteArr = [];
                if ($roleToAccess->isNotEmpty()) {
                    foreach ($roleToAccess as $key => $access) {
                        $accessArr[$access->name][$access->module_operation_id] = $access->operation;
                        $accessRouteArr[$key] = $access->route;
                    }
                }
            }
           // echo "<pre>";
           // print_r($accessArr);
           // exit;

            $settings = Setting::get();
            $settingArr = [];
            if ($settings->isNotEmpty()) {
                foreach ($settings as $setting) {
                    if (!empty($setting->image)) {
                        $settingArr[$setting->key] = $setting->image;
                    } else {
                        $settingArr[$setting->key] = $setting->value;
                    }
                }
            }

            $view->with([
                'settingArr' => $settingArr,
                'accessArr' => isset($accessArr) ? $accessArr : [],
                'accessRouteArr' => isset($accessRouteArr) ? $accessRouteArr : [],
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* For Main Menu Start */
        $category_menu = Category::all();
        View::share('category_menu', $category_menu);
        /* For Main Menu Start */
    }
}
