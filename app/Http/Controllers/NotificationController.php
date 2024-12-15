<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\notifikasi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NotificationController extends Controller
{
    public function index() : View
    {
        $no = 0;
        $no++;

        $notification = notifikasi::all();
        return view('Notification.Index', ["title" => "Control Panel", "active" => "Home"], compact('notification','no'));
    }




    public function destroy(string $id)
    {
        // get notification by id
        $notification = notifikasi::findOrFail($id);

        // delete notification
        $notification->delete();

        //redirect to notification index
        return redirect()->route('notification.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
