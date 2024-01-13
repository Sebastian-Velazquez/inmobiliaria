<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\FlareClient\View;
use App\Models\Message;

class ViweNotificacionMensaje extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        {
            view()->composer('*', function ($view) {
                  // Obtén la cantidad de notificaciones
                    $notificationsCount = Message::where('status', '=', 0)->count();
                //Mensaje no leído
                    $unreadMessage = Message::where('status', '=', 0)
                    ->OrderBy('created_at', 'DESC')
                    ->get();

                  // Comparte la variable con la vista
                $view->with([
                    'notificationsCount' =>  $notificationsCount,
                    'unreadMessage' => $unreadMessage
                ]);
            });
        }
    
    }
}
