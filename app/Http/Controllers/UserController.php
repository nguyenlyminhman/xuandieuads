<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getAllUser (){
       $user = User::all();
       return view('admin.user.alluser', ['user'=>$user]);
    }
    //add more menu name
    public function postUser(Request $request){
        $user = new User;
        $this->validate($request,
        [
            'fname'=>'required|min:3|max:100',
            'lname'=>'required|min:3|max:100',
            'email'=>'required|unique:users,email|min:5|max:100',
            'password'=>'re quired|min:8|max:45'
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
        $user = User::find($id);
        return view('admin.user.edit', ['user'=>$user]);     
    }
    //not yet
    public function updateUserInfo (Request $request, $id){
    }
    //not yet
    public function updateUserPass (Request $request, $id){
    }
    //not yet
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/get-all-user')->with('notification','Đã xóa người dùng thành công !!!');
    }
    //get login form
    public function getLoginForm(){
        return view('admin.login');
    }
    //check login user
    public function loginAdmin(Request $request) {
        // $this->validate($request);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect('admin/dashboard');
        }else{
            return redirect('admin/login')->with('notification','Dang nhap that bai. Kiem tra email va password');
        }
    }
    

}
