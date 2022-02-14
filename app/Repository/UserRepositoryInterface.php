<?php
namespace App\Repository;

use Illuminate\Http\Request;

interface UserRepositoryInterface{
    public function index();
    public function create();
    // you acutally dont need Request here, but i will leave it for now
    // because here you are accepting array of data only not the request.
    public function store(Request $request);
    //public function store( $request);

    public function edit($id);
    // you acutally dont need Request here, but i will leave it for now
    // because here you are accepting array of data only not the request.
    public function update($request,$id);
//    public function update(Request $request,$id);
    public function destroy($id);
}
