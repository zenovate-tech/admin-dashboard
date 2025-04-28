<?php

if (! function_exists('static_asset')) {
    function static_asset(string $path, $secure = null)
    {
        if (PHP_SAPI == 'cli-server') {
            return app('url')->asset('assets/' . $path, $secure);
        }

        return app('url')->asset('public/assets/' . $path, $secure);
    }
}

// Return file uploaded via uploader
if (! function_exists('my_asset')) {
    function my_asset(string $path, $secure = null)
    {
        if (PHP_SAPI == 'cli-server') {
            return app('url')->asset('uploads/' . $path, $secure);
        }

        return app('url')->asset('public/uploads/' . $path, $secure);
    }
}
