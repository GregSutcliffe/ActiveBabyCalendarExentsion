<?php

namespace org\emeraldreverie\calendar\abcstyling\controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController {
    function addingEvents(Application $app, Request $request) {
        return $app['twig']->render('extension/abcstyling/index/addingevents.html.twig', array());
    }
}
