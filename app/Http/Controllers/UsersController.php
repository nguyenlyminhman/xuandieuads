<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    //
    public function getAllUser (){
       $user = Users::all();
       return view('admin.user.alluser', ['user'=>$user]);
    }
    //add more menu name
    public function postUser(Request $request){
        $user = new Users;
        $this->validate($request,
        [
            'fname'=>'required|min:3|max:100',
            'lname'=>'required|min:3|max:100',
            'email'=>'required|unique:manager,email|min:5|max:100',
            'password'=>'required|min:8|max:45'
        ],
        [
            'fname.required'=>'Chưa nhập tên người dùng.',
            'fname.min'=>'Tên người dùng có độ dài từ 3 đến 100 kí tự.',
            'fname.max'=>'Tên người dùng có độ dài từ 3 đến 100 kí tự.',

            'lname.required'=>'Chưa nhập họ người dùng.',
            'lname.min'=>'Họ người dùng có độ dài từ 3 đến 100 kí tự.',
            'lname.max'=>'Họ người dùng có độ dài từ 3 đến 100 kí tự.',

            'email.required'=>'Chưa nhập email người dùng.',
            'email.unique'=>'Email đã tồn tại. Hãy chọn email khác.',
            'email.min'=>'Email có độ dài từ 5 đến 100 kí tự.',
            'email.max'=>'Email có độ dài từ 5 đến 100 kí tự.',

            'password.required'=>'Chưa nhập password.',
            'password.min'=>'Password có độ dài từ 8 đến 45 kí tự.',
            'password.max'=>'Password có độ dài từ 8 đến 45 kí tự.'
        ]);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->created_at =  date("Y-m-d");
        $user->updated_at =  date("Y-m-d");
        $user->save();
        return redirect('admin/user/get-all-user')->with('notification','Thêm người dùng thành công !!!');
    }
    //
    public function editUser ($id){
        $user = Users::find($id);
        return view('admin.user.edit', ['user'=>$user]);     
    }
    //
    public function updateUser (Request $request, $id){
        
    }
   
    //
    public function deleteUser($id){
        $user = Users::find($id);
        $user->delete();
        return redirect('admin/user/get-all-user')->with('notification','Đã xóa người dùng thành công !!!');
    }
}
