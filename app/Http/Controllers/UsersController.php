<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
  //user List
  public function listUser(){
    return view('pages.app-users-list');
  }
    //user view
    public function viewUser(){
    return view('pages.app-users-view');
  }
   //user edit
   public function editUser(){
    return view('pages.app-users-edit');
  }

    public function getUsers()
    {
        $users = User::all(['name','email','company_name','id']);
        return response()->json([
            'success' => true,
            'message' => 'Kullanıcı Listeleme Başarılı',
            'data' => $users
        ], Response::HTTP_OK);
    }

    public function sendPushD(Request $request) {
        $title = $request->title;
        $content = $request->cont;

        if($request->user_id ) {
            foreach ($request->user_id as $user) {
                $test =     $this->sendPush($title,$content,$user);
            }
        } else {
            $test =    $this->sendPush($title,$content);
        }


        return response()->json([
            'success' => true,
            'message' => 'Bildirim Başarıyla İletildi',
            'data' => $test,
        ], Response::HTTP_OK);
    }
}
