<?php

namespace App\Http\Controllers\User;

use App\Models\Vmm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserVmmController extends Controller
{
    public function index()
    {
        $vmms = Vmm::where('status', '<>', 'draft')
            ->where('start_time', '>', now())
            ->get();
        return view('user.user-vmm', ['vmms' => $vmms]);
    }
}
