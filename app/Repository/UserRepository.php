<?php
namespace App\Repository;

use App\Models\User;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{

    /**
     *  Repositories are classes or components that encapsulate the logic required to access data sources.
     * this will process the request and return the data only and not the view
     */
    public function index()
    {

        // dont try to  all data at a time. try to use pagination or datable
        return User::paginate(10);
//        return view("user.index",["users"=>User::all()]);
    }

    public function create()
    {
        return view("user.create");
    }

    public function store($request){

     return User::create($request->all());
//        return redirect()->route("users.index");
    }

    public function edit($id){
        return User::find($id);
//        return view('user.edit',["user"=>]);
    }

    public function update($request, $id)
    {
        return User::find($id)->update($request->except('token'));
//        return redirect()->route("users.index");
    }

    public function destroy($id){
        return User::find($id)->delete();
//        return redirect()->route("users.index");
    }
}
