<?php
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

function getAvatar($oj)
{
    $vl = 'https://bootdey.com/img/Content/avatar/avatar7.png';
    if ($oj->avatar) {
        $vl = Storage::url($oj->avatar);
    }
    return $vl;
}

function getImageCategory($oj)
{
    $vl = '/images/find1.jpg';
    if ($oj->image) {
        $vl = Storage::url($oj->image);
    }
    return $vl;
}

function getClassCategories($key)
{
    $arr =  [
        0 => 'gridGallery_item-vertical fadeInLeft',
        1 => 'gridGallery_item-topBig fadeInDown',
        2 => 'gridGallery_item-topSmall fadeInRight',
        3 => 'gridGallery_item-botBig fadeInUp',
        4 => 'gridGallery_item-botSmall fadeInUp',
    ];
    return $arr[$key];
}

function getGallery()
{
    $arr =  [
        '/images/detail1.jpg',
        '/images/detail2.jpg',
        '/images/detail1.jpg',
        '/images/detail3.jpg',
        '/images/detail2.jpg',
    ];
    return $arr;
}



