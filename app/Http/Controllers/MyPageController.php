<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\DB;

class MyPageController extends Controller
{
    public function top(){
        return view('myPage.top');
    }
    public function selfIntroduce(){
        return view('myPage.selfIntroduce');
    }
    public function contactUs(){
        return view('myPage.contactUs');
    }
    
    public function store(Request $request)
    {
        //dd($request);
        
        //DBクラスを使ったinsert文
        /*$param = [
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'sex' => $request->inlineRadioOptions,
            'detail' => $request->details,
            ];
            
        DB::insert('insert into people (name,email,age,sex,detail) values
            (:name,:email,:age,:sex,:detail)',$param);*/
            
        //Personモデルを使ったinsert文
        $person = new Person;
        $person->name = $request->name;
        $person->email = $request->email;
        $person->age = $request->age;
        $person->sex = $request->sex;
        $person->detail = $request->detail;
        $person->save();
        
        return redirect('contactUs');
    }
}
