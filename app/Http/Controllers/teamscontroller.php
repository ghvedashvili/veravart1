<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\YourModelNameStudendts;
use App\Models\TeamsModel;
use Illuminate\Support\Facades\Auth;

class teamscontroller extends Controller
{
    //
    public function alldata(Request $request)
    {
        $mall=new YourModelNameStudendts;
      // dd($mall->all());
       return view('myteam', ['data' =>$mall->whereIn('id', [8+1, 5, 3])->get()]);
    } 


    public function myteam(Request $request)
    {
        $myteam=new YourModelNameStudendts;
        $id=$request->myuid;
         return view('myteam', ['data' =>$myteam->where('useruid',$id)->get()]);
    } 

    public function myteam2()
    {
        $myteam=new TeamsModel;
        $useruid=Auth::user()->useruid;
        return view('myteam2', ['data' =>$myteam->where('useruid',$useruid)->get()]);
    } 

    public function mydata(Request $request)
    {
        $mall=new YourModelNameStudendts;
      $id=$request->lname;
     return view('myteam', ['data' =>$mall->where('id',$id)->get()]);


    } 

    public function adddata(Request $request)
    {
//for ($x=0; $x<120; $x++){
      $data = [
        [
            'name' => $request->name,//.$x,
            'teamuid'=>uniqid(),//.$x,
            'useruid'=> Auth::user()->useruid,//.$x,
            'fanclub'=>$request->fanclub,//.$x,
            'stadium'=>$request->stadium,//.$x,
           
        ],
       // [
         //   'name' => 'Python',
         //   'mobile' => \Str::slug('Python'),
         //   'address'=>'gori',
            
       // ],
      ];


      TeamsModel::insert($data);

   // }



      return redirect('/myteam2');


    } 

    public function allteam()
    {
        $allteam=new TeamsModel;
        $collection=$allteam->all();
        $sorted = $collection->sortDesc();
 
        $sorted->values()->all();



        return view('myteam2', ['data' =>$sorted]);
    } 

    public function edit($id)
    {
        $student = TeamsModel::find($id);
        return view('students.edit')->with('students', $student);
    }



}
