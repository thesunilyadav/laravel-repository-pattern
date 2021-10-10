<?php
namespace App\Repository;

use Illuminate\Http\Request;

interface UserRepositoryInterface{
    public function index();
    public function create();
    public function store(Request $request);
    public function edit($id);
    public function update(Request $request, $id);
    public function destroy($id);
}
