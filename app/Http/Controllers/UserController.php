<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Authenticatable;
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
            'name'=>'required|min:3|max:100',
            'email'=>'required|unique:users,email|min:5|max:100',
            'password'=>'re quired|min:8|max:45'
        ],
        [
            'name.required'=>'Chưa nhập tên người dùng.',
            'name.min'=>'Tên người dùng có độ dài từ 3 đến 100 kí tự.',
            'name.max'=>'Tên người dùng có độ dài từ 3 đến 100 kí tự.',

            'email.required'=>'Chưa nhập email người dùng.',
            'email.unique'=>'Email đã tồn tại. Hãy chọn email khác.',
            'email.min'=>'Email có độ dài từ 5 đến 100 kí tự.',
            'email.max'=>'Email có độ dài từ 5 đến 100 kí tự.',

            'password.required'=>'Chưa nhập password.',
            'password.min'=>'Password có độ dài từ 8 đến 45 kí tự.',
            'password.max'=>'Password có độ dài từ 8 đến 45 kí tự.'
        ]);
        $user->name = $request->name;
        $user->level = $request->level;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->created_at =  date("Y-m-d");
        $user->updated_at =  date("Y-m-d");
        $user->save();
        return redirect('admin/user/get-all-user')->with('notification','Thêm người dùng thành công !!!');
    }
    //get user name form
    public function getUserInfo ($id){
        $user = User::find($id);
        return view('admin.user.editinfo', ['user'=>$user]);     
    }
    // update user name
    public function updateUserInfo (Request $request, $id){
        $user = User::find($id);
        $this->validate($request,
        [
            'name'=>'required|min:3|max:100',
        ],
        [   
            'name.required'=>'Chưa nhập tên chính.',
            'name.min'=>'Tên có độ dài từ 3 đến 100 kí tự.',
            'name.max'=>'Tên có độ dài từ 3 đến 100 kí tự.'
        ]);
        $user->name = $request->name;
        $user->updated_at =  date("Y-m-d");
        $user->save();
        return redirect('admin/user/update-info/'.$id)->with('notification','Đã cập nhật thành công.');
    }
    //get user name form
    public function getUserPass ($id){
        $user = User::find($id);
        return view('admin.user.editpass', ['user'=>$user]);     
    }
    // update user name
    public function updateUserPass (Request $request, $id){
        $user = User::find($id);
        $this->validate($request,
        [
            'password'=>'re quired|min:8|max:45'
        ],
        [   
            'password.required'=>'Chưa nhập password.',
            'password.min'=>'Password có độ dài từ 8 đến 45 kí tự.',
            'password.max'=>'Password có độ dài từ 8 đến 45 kí tự.'
        ]);
        $user->password = bcrypt($request->password);
        $user->updated_at =  date("Y-m-d");
        $user->save();
        return redirect('admin/user/update-pass/'.$id)->with('notification','Đã cập nhật thành công.');
    }
    // delete user
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
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
           return redirect('admin/dashboard');
           echo Auth::check();
        }
        else
        {
            return redirect('admin/login')->with('notification','Đăng nhập thất bại. Hãy kiểm tra email và mật khẩu');
        }
    }
    public function logoutAdmin(){         
        Auth::logout();
        return redirect('admin/login');
    }
}
