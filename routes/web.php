<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

route::get('',[FrontendController::class,'home_view'])->name('home');
route::get('commitee',[FrontendController::class,'commitee'])->name('commitee');
route::get('notice',[FrontendController::class,'notice'])->name('notice');
route::get('contact',[FrontendController::class,'contact'])->name('contact');
route::get('about',[FrontendController::class,'about'])->name('about');
route::get('techteam',[FrontendController::class,'techteam'])->name('techteam');