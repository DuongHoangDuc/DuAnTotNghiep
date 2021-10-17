<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // Post::class => PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->defineGateCategoryProduct();
        $this->defineGateBrand();
        $this->defineGateProduct();
        $this->defineGatePost();
        $this->defineGateCategoryPost();
        $this->defineGateRoles();
        $this->defineGateUser();
        $this->defineGatePermission();

    }
    public function defineGateCategoryProduct(){ // Category Product
        Gate::define('category-product-list','App\Policies\CategoryPolicy@view');
        Gate::define('category-product-add','App\Policies\CategoryPolicy@create');
        Gate::define('category-product-edit','App\Policies\CategoryPolicy@update');
        Gate::define('category-product-delete','App\Policies\CategoryPolicy@delete');
    }
    public function defineGateBrand(){ // Brand Product
        Gate::define('brand-list','App\Policies\BrandPolicy@view');
        Gate::define('brand-add','App\Policies\BrandPolicy@create');
        Gate::define('brand-edit','App\Policies\BrandPolicy@update');
        Gate::define('brand-delete','App\Policies\BrandPolicy@delete');
    }
    public function defineGateProduct(){// Product
        Gate::define('product-list','App\Policies\ProductPolicy@view');
        Gate::define('product-add','App\Policies\ProductPolicy@create');
        Gate::define('product-edit','App\Policies\ProductPolicy@update');
        Gate::define('product-delete','App\Policies\ProductPolicy@delete');
    }
    public function defineGatePost(){// Post
        Gate::define('post-list', 'App\Policies\PostPolicy@view');
        Gate::define('post-add', 'App\Policies\PostPolicy@create');
        Gate::define('post-edit', 'App\Policies\PostPolicy@update');
        Gate::define('post-delete', 'App\Policies\PostPolicy@delete');
    }
    public function defineGateCategoryPost(){// category post
        Gate::define('category-post-list','App\Policies\CategoryPostPolicy@view');
        Gate::define('category-post-add','App\Policies\CategoryPostPolicy@create');
        Gate::define('category-post-edit','App\Policies\CategoryPostPolicy@update');
        Gate::define('category-post-delete','App\Policies\CategoryPostPolicy@delete');
    }
    public function defineGateRoles(){// Role
        Gate::define('roles-list','App\Policies\RolePolicy@view');
        Gate::define('roles-add','App\Policies\RolePolicy@create');
        Gate::define('roles-edit','App\Policies\RolePolicy@update');
        Gate::define('roles-delete','App\Policies\RolePolicy@delete');
    }
    public function defineGateUser(){ // USer
        Gate::define('user-list','App\Policies\UserPolicy@view');
        Gate::define('user-add','App\Policies\UserPolicy@create');
        Gate::define('user-edit','App\Policies\UserPolicy@update');
        Gate::define('user-delete','App\Policies\UserPolicy@delete');
    }
    public function defineGatePermission(){// permission
        Gate::define('permission-list','App\Policies\PermissionPolicy@view');
        Gate::define('permission-add','App\Policies\PermissionPolicy@add');
    }
}
