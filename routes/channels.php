<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
use App\Buggies_info;

Broadcast::channel('buggy.{sale_id}', function ($sale_id) {
    return (int) $sale_id === (int) Buggies_info::all('sale_id')->where('sale_id',1);
});
