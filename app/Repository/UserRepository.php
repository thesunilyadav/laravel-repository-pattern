<?php
namespace App\Repository;

use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    public function index()
    {
        return view("user.index",["users"=>User::all()]);
    }

    public function create()
    {
        return view("user.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"    => "required|regex:/^[\pL\s\-]+$/u",
            "email"   => "required|email",
            "country" => "required|regex:/^[\pL\s\-]+$/u"
        ]);
        User::create($request->all());
        return redirect()->route("users.index");
    }

    public function edit($id){
        return view('user.edit',["user"=>User::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name"    => "required|regex:/^[\pL\s\-]+$/u",
            "email"   => "required|email",
            "country" => "required|regex:/^[\pL\s\-]+$/u"
        ]);
        User::find($id)->update($request->all());
        return redirect()->route("users.index");
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route("users.index");
    }
}
