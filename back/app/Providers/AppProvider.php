<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//==============================================================
use App\Models\Movies;
use App\core\infra\laravel\resources\cls_resource_movies;
use App\core\movies\use_case\list\cls_use_case_list_movies;
use App\core\movies\use_case\find\cls_use_case_find_movie;
use App\core\movies\use_case\new\cls_use_case_new_movie;
use App\core\movies\use_case\edit\cls_use_case_edit_movie;
use App\core\movies\use_case\remove\cls_use_case_remove_movie;
//==============================================================
use App\Models\Series;
use App\core\infra\laravel\resources\cls_resource_series;
use App\core\series\use_case\list\cls_use_case_list_series;
use App\core\series\use_case\find\cls_use_case_find_serie;
use App\core\series\use_case\new\cls_use_case_new_serie;
use App\core\series\use_case\edit\cls_use_case_edit_serie;
use App\core\series\use_case\remove\cls_use_case_remove_serie;
//==============================================================
use App\Models\Season;
use App\core\infra\laravel\resources\cls_resource_season;
use App\core\season\use_case\list\cls_use_case_list_season;
use App\core\season\use_case\find\cls_use_case_find_season;
use App\core\season\use_case\new\cls_use_case_new_season;
use App\core\season\use_case\edit\cls_use_case_edit_season;
use App\core\season\use_case\remove\cls_use_case_remove_season;
//==============================================================
use App\Models\Episode;
use App\core\infra\laravel\resources\cls_resource_episode;
use App\core\episode\use_case\list\cls_use_case_list_episode;
use App\core\episode\use_case\find\cls_use_case_find_episode;
use App\core\episode\use_case\new\cls_use_case_new_episode;
use App\core\episode\use_case\edit\cls_use_case_edit_episode;
use App\core\episode\use_case\remove\cls_use_case_remove_episode;

class AppProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //Registo do Use Case Listar Filmes
        $this->app->bind(cls_use_case_list_movies::class, function ($app) {
            return new cls_use_case_list_movies(
                new cls_resource_movies(new Movies())
            );
        });
        //Registo do Use Case Buscar Filme
        $this->app->bind(cls_use_case_find_movie::class, function ($app) {
            return new cls_use_case_find_movie(
                new cls_resource_movies(new Movies())
            );
        });
        //Registo do Use Case Criar Filme
        $this->app->bind(cls_use_case_new_movie::class, function ($app) {
            return new cls_use_case_new_movie(
                new cls_resource_movies(new Movies())
            );
        });
        //Registo do Use Case Editar Filme
        $this->app->bind(cls_use_case_edit_movie::class, function ($app) {
            return new cls_use_case_edit_movie(
                new cls_resource_movies(new Movies())
            );
        });
        //Registo do Use Case Remover Filme
        $this->app->bind(cls_use_case_remove_movie::class, function ($app) {
            return new cls_use_case_remove_movie(
                new cls_resource_movies(new Movies())
            );
        });
//================================= SERIES ===========================================

        $this->app->bind(cls_use_case_list_series::class, function ($app) {
            return new cls_use_case_list_series(
                new cls_resource_series(new Series())
            );
        });

        $this->app->bind(cls_use_case_find_serie::class, function ($app) {
            return new cls_use_case_find_serie(
                new cls_resource_series(new Series())
            );
        });

        $this->app->bind(cls_use_case_new_serie::class, function ($app) {
            return new cls_use_case_new_serie(
                new cls_resource_series(new Series())
            );
        });

        $this->app->bind(cls_use_case_edit_serie::class, function ($app) {
            return new cls_use_case_edit_serie(
                new cls_resource_series(new Series())
            );
        });

        $this->app->bind(cls_use_case_remove_serie::class, function ($app) {
            return new cls_use_case_remove_serie(
                new cls_resource_series(new Series())
            );
        });
  //================================= Season ===========================================

        $this->app->bind(cls_use_case_list_season::class, function ($app) {
            return new cls_use_case_list_season(
                new cls_resource_season(new Season())
            );
        });

    }

    public function boot(): void
    {
        //
    }
}
