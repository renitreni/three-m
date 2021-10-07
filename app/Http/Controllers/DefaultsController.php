<?php

namespace App\Http\Controllers;

use ZipStream\File;
use App\Models\Files;
use Silber\Bouncer\Bouncer;
use Illuminate\Http\Request;

class DefaultsController extends Controller
{
    public function sidebar(Bouncer $bouncer)
    {
        return [
            'appname' => config('app.name'),
            'home'    => route('home'),
            'roles'   => $bouncer->can('roles') ? route('roles') : null,
            'users'   => $bouncer->can('users') ? route('users') : null,
        ];
    }

    public function footer()
    {
        return [
            'appname' => config('app.name'),
        ];
    }

    public function topBar()
    {
        $profile_pic = (new Files())->getProfilePic(auth()->id());

        return [
            'profile_pic'      => $profile_pic ? $profile_pic->path : 'https://avatars.dicebear.com/api/jdenticon/.svg',
            'settings_privacy' => route('settings-privacy'),
            'name'             => auth()->user()->name,
        ];
    }
}
