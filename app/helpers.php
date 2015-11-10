<?php

function flash($title = null, $message = null)
{
    $flash = app('App\Http\Flash');

    if (func_num_args() == 0){
        return $flash;
    }

    return $flash->info($title, $message);
}

function flyer_path(App\Flyer $flyer)
{
    return $flyer->zip .'/'. str_replace(' ', '-', $flyer->street);
}

function link_to($body, $path, $type)
{
    $csrf = csrf_field();

    if (is_object($path)) {
        $action = '/'. $path->getTable();

        if (in_array($type, ['PUT', 'PATCH', 'DELETE'])) {
            $action .= '/' . $path->getKey();
        }
    } else {
        $action = $path;
    }

    return <<<EOT
        <form method="POST" action="{$action}">
            <input type="hidden" name="_method" value="{$type}">
            {$csrf}
            <button type="submit">{$body}</button>
        </form>
EOT;
}

function oss_photo_link($photoName, $style = '@!200')
{
    $prefixPath = 'http://photocenter.img-cn-beijing.aliyuncs.com/';
    return $prefixPath . $photoName . $style;
}
