<?php

function ActiveRoutes($url)
{
    if($url == request()->path()){
        return "active";
    }
}
