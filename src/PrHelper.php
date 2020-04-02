<?php

if (! function_exists('pr')) {
    function pr(...$params)
    {
        $env = env('APP_ENV', 'production');
        if (!preg_match('/local/', strtolower($env))) {
            return;
        }

        echo '<pre>';
        print_r($params);
        echo '</pre>';
    }
}

if (! function_exists('prs')) {
    function prs(...$params)
    {
        $env = env('APP_ENV', 'production');
        if (!preg_match('/local/', strtolower($env))) {
            return;
        }

        echo '<pre>';
        print_r($params);
        echo '</pre>';

        exit;
    }
}


