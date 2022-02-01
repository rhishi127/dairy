<?php

namespace Core\Views;

class ViewManager
{

    /**
     * @param string $file
     * @throws \Exception
     * @return mixed
     */
    public static function render(string $file)
    {
        if (file_exists($file)) {
            include $file;
        } else {
            throw new \Exception('NO view found');
        }
    }
}
