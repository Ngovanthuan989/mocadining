<?php

namespace App\Http\Controllers\Vi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryItemController extends Controller
{
    //
    public function soraeFeatureTouches()
    {
        return view('vi.gallery_item.sorae_feature_touches');
    }

    public function privateRooms()
    {
        return view('vi.gallery_item.private_rooms');
    }

    public function excusiveEvent()
    {
        return view('vi.gallery_item.excusive_event');
    }
}
