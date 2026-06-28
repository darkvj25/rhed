<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageNotification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function notify()
    {
        $data = MessageNotification::where('user_id', Auth::user()->id)->first();
        if($data != null)
        {
            return response()->json($data);
            
        }
            return response()->json(["content" => null]);
    }
    
    public function notifyDel()
    {
        return MessageNotification::where('user_id', Auth::user()->id)->first()->delete();
            
        
    }
}
