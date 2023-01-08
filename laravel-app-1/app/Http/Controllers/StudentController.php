<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){

        //eloquent class
        // $data = Students::where('age', '<=', 19)->orderBy('firstName', 'asc')->limit(5)->get();
        
        //using raw sql command
        // $data = DB::table('students')
        //     ->select(DB::raw('count(*) as gender_count, gender'))->groupBy('gender')->get();

        // $data = Students::where('id', 100)->firstOrFail()->get();

        // $data = Students::all();

        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->simplePaginate(10));

        // $data = ["data" => DB::table('students')->orderBy('created_at', 'desc')->paginate(10)];
        
        return view('students.index', $data);
    }

    public function create(){
        return view('students.create')->with('title', 'Add New');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "firstName" => ['required', 'min:4'],
            "lastName" => ['required', 'min:4'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email', Rule::unique('students', 'email')],
        ]);

        Students::create($validated);

        return redirect('/')->with('message', 'New student was added successfully!');
    }

    public function show($id){
        $data = Students::findOrFail($id);
        
        return view('students.edit', ['student' => $data]);
    }

    public function update(Request $request, Students $student){

        $validated = $request->validate([
            "firstName" => ['required', 'min:4'],
            "lastName" => ['required', 'min:4'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email', Rule::unique('students', 'email')], 
        ]);

        $student->where('id', $request->id)->update([   
                 "firstName" => $request->firstName,
                 "lastName" => $request->lastName,
                 "gender" => $request->gender,
                 "age" => $request->age,
                "email" => $request->email
        ]);


        return back()->with('message', 'Data was successfully updated!');

    }


    public function destroy(Request $request, Students $student){
        $student->where('id', $request->id)->delete();

        return redirect('/')->with('message', 'Data was deleted successfully!');
 
    }
}
