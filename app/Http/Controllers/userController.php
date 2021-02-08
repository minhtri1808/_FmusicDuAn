<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.register');
    }
    // public function register(Request $request)
    // {
    //     printf($request);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' =>'required|min:6|max:30',
                'email' =>'required|email',
                'password' =>'required|confirmed|min:6|max:16',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            // if ($request->hasFile('avatar')) {
            //     $file = $request->file('avatar');
            //     $destination_path= public_path('uploads/avatar');
            //     $file_Name =$file->getClientOriginalName();
            //     $file->move($destination_path, $file_Name);
            // } else {
            //     $file_Name ='noname.jpg';
            // }
            $date = date("Y-m-d");
            $register = DB::table('users')->where('email', $request->email)->first();
            if (!$register) {
              $newUser = new User();
              $newUser->name = $request->name;
              $newUser->email = $request->email;
              $newUser->password = $request->password;
              $newUser->role = $request->role;
              $newUser->ngayDangKi =$date;
              $newUser->save();
              return redirect()->route('signup.index')->with('message','Bạn đã tạo tài khoản thành công, mời đăng nhập!',);
            }else{
                return redirect()->route('auth.login')->with('message','Tài khoản của bạn đã tồn tại mời đăng nhập!!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
