<?php

namespace App\Http\Controllers;

use App\Models\student;
use Facade\FlareClient\Glows\Recorder;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show(){
//$students=[];
// $students=student::firstOrCreate(
//     ['name'=>'dell'],
//     ['email'=>'dell@gmail.com','city'=>'Ranchi','marks'=>65],
    
// );
// $students=student::firstOrnew(
//     ['name'=>'php'],
//     ['email'=>'php@gmail.com','city'=>'Ranchi','marks'=>65],
    
// );
//Insert New Recorde
// $name='yousaf';
// $email='yousaf@gmail.com';
// $city='Mesar';
// $marks=100;

// $students =new student;
// $students->name=$name;
// $students->email=$email;
// $students->city=$city;
// $students->marks=$marks;
// $students->save();

//insert new record using Create Method
// $students=student::create([
//     'name'=>'Tom',
//     'email'=>'Tom@gmail.com',
//     'city'=>'patokee',
//     'marks'=>50
// ]);

//update


$students =new student;
$students=student::find(5);
// $students->name='rema';
// $students->email='rema@gmail.com';
// $students->city='wasepure';
// $students->marks=90;
// $students->save();

//mass Update

// $students=student::updateOrCreate(
// ['name'=>'Hassan'],
// ['email'=>'','city'=>'lahore','marks'=>85],

// );
// $students=student::find(9);
// $students->delete();

 $students=student::destroy(10);

       // $students=student::all();

    //    $students=student::where('city','lahore')->orderBy('name')->get();
    // $students=student::find(1);
        return view('welcome',['students'=>$students]);
    }
}
