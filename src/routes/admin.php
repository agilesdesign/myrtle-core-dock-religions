<?php

Route::resource('religions', \Myrtle\Core\Religions\Http\Controllers\Administrator\ReligionController::class,
    ['except' => ['show']]);