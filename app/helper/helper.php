<?php


function getVideoLink($url)
{
    preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
    return isset($match[1]) ? $match[1] : null;
}

function msgTime($notification_created_at)
{
    $to_time = strtotime(Carbon\Carbon::now());
    $from_time = strtotime($notification_created_at);
    $date = round(abs($to_time - $from_time) / 60, 0);
    if ($date >= 60) {
        $date = $date / 60;

        if ($date >= 24) {
            $time = round($date / 24) . ' day ago';
        } else {
            $time = round($date) . ' hour ago';
        }
    } else {
        $time = round($date) . ' mintue ago';
    }

    return $time;
}

function humanTiming($notification_created_at)
{
    $now = NOW();

    $time = $now->diffInMinutes($notification_created_at); // to get the time since that moment

    $time = ($time < 1) ? 1 : $time;
    $tokens = array(
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
    }
}


// log

function makeLog($item, $_causer, $name, $detail)
{
    if ($_causer = 1) {
        $causer = auth()->guard('admin')->user();
    } else {
        $causer = auth()->user();
    }
    activity($name)
        ->performedOn($item)
        ->causedBy($causer->id)
        ->withProperties(['details' => $detail])
        ->log(ucfirst($name) . " has been created");
}


function createLog($item, $_causer, $name, $url, $url_name)
{
    if ($_causer = 1) {
        $causer = auth()->guard('admin')->user();
        $details = "(Admin) {$causer->name} create {$name} : <a href='{$url}' >{$url_name}</a>";
    }

    activity($name)
        ->performedOn($item)
        // ->causedBy($causer->id)
        ->withProperties(['details' => $details, 'type' => 'created', 'user' => $causer->name])
        ->log(ucfirst($name) . " has been created");
}

function editLog($item, $_causer, $name, $url, $url_name)
{
    if ($_causer = 1) {
        $causer = auth()->guard('admin')->user();
        $details = "(Admin) {$causer->name} update {$name} : <a href='{$url}' >{$url_name}</a>";
    }

    activity($name)
        ->performedOn($item)
        // ->causedBy($causer->id)
        ->withProperties(['details' => $details, 'type' => 'updated', 'user' => $causer->name])
        ->log(ucfirst($name) . " has been updated");
}

function delLog($item, $_causer, $name, $deleted_item)
{
    if ($_causer = 1) {
        $causer = auth()->guard('admin')->user();
        $details = "(Admin) {$causer->name} delete {$name} : {$deleted_item} ";
    }

    activity($name)
        ->performedOn($item)
        // ->causedBy($causer->id)
        ->withProperties(['details' => $details, 'type' => 'deleted', 'user' => $causer->name])
        ->log(ucfirst($name) . " has been deleted");
}


function humanFileSize($size, string $unit = ""): string
{
    if ((!$unit && $size >= 1 << 30) || $unit === "GB")
        return number_format($size / (1 << 30), 2) . "GB";
    if ((!$unit && $size >= 1 << 20) || $unit === "MB")
        return number_format($size / (1 << 20), 2) . "MB";
    if ((!$unit && $size >= 1 << 10) || $unit === "KB")
        return number_format($size / (1 << 10), 2) . "KB";
    return number_format($size) . " bytes";
}
