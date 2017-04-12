<?php

namespace App\Controllers;


class HomeController extends Controller
{
    public function index($req, $res, $args)
    {
        /* + ------------------------------------------------------------------
         *
         * + ------------------------------------------------------------------
         *
         *
         */
        return $this->view->render($res, 'home.twig');
    }
}