<?php

namespace App\Controller;

use Library\Core\Controller;

final class DashboardController extends Controller
{
    public static function index()
    {
        parent::isProtected();

        parent::render('dashboard/home');
    }

}