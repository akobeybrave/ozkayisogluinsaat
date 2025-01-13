<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserPasswordUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\Middleware;

class UserController extends Controller
{



    public function index()
    {
        $users= User::orderBy("id", "desc")->get();

        return view('admin.users.index', compact("users"));
    }


    public function create()
    {
        return view('admin.users.create');
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3', 'max:30'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6', 'same:password'],
            "confirm_password" => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->panel = $request->panel;
        $user->password = Hash::make($request->password);
        $user->save();


        $notification = array(
            'message' => 'Kullanıcı Kaydedildi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.users.index')->with($notification);
    }



    public function show(User $user)
    {
        return view('admin.users.show', compact("user"));
    }


    public function edit(User $user)
    {
        return view('admin.users.edit', compact("user"));
    }


    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3', 'max:30'],
            'email' => ['required', 'email', 'unique:users,email,' .$user->id. ',id'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:500'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $image_path = "uploads/logos/";

        if($request->hasFile("image")) {
            $image = $request->image;
            $ext = ".webp";
            $imageName = uniqid() . $ext;
            $image->move(public_path($image_path), $imageName);
            $image = $imageName;

        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $image;
        $user->save();


        $notification = array(
            'message' => 'Kullanıcı Güncellendi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.users.index')->with($notification);
    }




    public function destroy(User $user)
    {
        $data = User::find($user->id);

        $data->delete();

        $notification = array(
            'message' => 'Kullanıcı silindi',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);

    }

    public function toggleStatus(Request $request, $id)
    {
        $user = User::find($id);
        $user->status = !$user->status;
        $user->save();

        return response()->json(['success' => true, 'status' => $user->status]);
    }

    public function changePassword($id)
    {
        $user = User::find($id);
        return view('admin.users.change-password', compact("user"));

    }

    public function updatePassword(UserPasswordUpdateRequest $request)
    {
        $user = auth()->user();
        $user->password = Hash::make($request->new_password);
        $user->save();


        $notification = array(
            'message' => 'Parola Güncellendi',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.users.index')->with($notification);
    }

    public function changeStatus(Request $request)

    {

        $user = User::find($request->user_id);

        $user->status = $request->status;

        $user->save();



        return response()->json(['success'=>'Status change successfully.']);

    }

}
