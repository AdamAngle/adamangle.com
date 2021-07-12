<?php
if (!function_exists("check_nav")) {
    function check_nav(string $class, string $method, string $if_true, string $if_false="")
    {
        $router = service('router');
        return $class == $router->controllerName() && $method == $router->methodName() ? $if_true : $if_false;
    }
}

if (!function_exists("print_nav")) {
    function print_nav()
    {
        $router = service('router');
        return $router->controllerName()." ".$router->methodName();
    }
}