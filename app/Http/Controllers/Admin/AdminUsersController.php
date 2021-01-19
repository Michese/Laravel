<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function index(User $user)
    {
        $users = $user->all();
        return view('admin.users.users', ['users' => $users]);
    }

    public function update(User $model, Request $request)
    {
        $userId = $request->post('id');
        $user = $model->find($userId);
        $operation = $request->post('operation');
        if($operation == 'Удалить') {
            $user->delete();
        } else if ($operation == 'Сделать админом') {
            $user->is_admin = 1;
            $user->save();
        }
        return redirect()->route('admin::users::index');
    }
}
