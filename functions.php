<?php

if (! function_exists('theme_path')) {
    /**
     * Get the path to the current theme.
     *
     * @param $path
     * @return string
     */
    function theme_path($path = ''): string
    {
        if (!is_null ($theme = config('theme.current'))) {
            return base_path("themes/$theme/$path");
        }

        throw new RuntimeException("Theme path not found");
    }
}
