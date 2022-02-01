<?php

namespace Domain\Common;

class ViewManager
{
    /**
     *
     * @param string $file
     *
     * @return mixed
     */
    public static function render(string $file)
    {
        $workingDir = 'test';
        $filePath = dirname($workingDir) . '/app/views/'.$file.'.php';
        if (file_exists($filePath)) {
            include $filePath;
        }
    }
}
