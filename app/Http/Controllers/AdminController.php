<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;


class AdminController extends Controller
{
    public function addview()
    {

        return view('admin.add_doctor');

    } 
    public function upload(request $request)
    {
        $doctor = new doctor;

        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name=$request->name;

        $doctor->email=$request->email;

        $doctor->phone=$request->number;

        $doctor->speciality=$request->speciality;

        $doctor->save();

        return redirect()->back()->with('message', 'doctor added successfully');
        

    }
  

    public function showappointment()
{
     $data = appointment::all();

    return view('admin.showappointment',compact('data'));
}

public function showdoctor()

{
    $data =doctor::all();
    return view('admin.showdoctor', compact('data'));

}

public function approved($id)
{
    $data = appointment::find($id);
    $data->status='approved';
    $data->save();

    return redirect()->back();
}
  
public function cancelled($id)
{
    $data = appointment::find($id);
    $data->status='cancelled';
    $data->save();

    return redirect()->back();
}
 public function deletedoctor($id)
{
    $data = doctor::find($id);
    $data ->delete();

    return redirect()->back();

}
public function updatedoctor($id)
{
    $data = doctor::find($id);
    return view('admin.update_doctor',compact('data'));

} public function editdoctor(Request $request , $id)
{ 
    $doctor = doctor::find($id);

    $doctor->name = $request->name;
    $doctor->email = $request->email;
    $doctor->phone = $request->phone;
    $doctor->speciality = $request->speciality;
    
    $image= $request->file;

    if($image)
    {

    
    $imagename=time().'.'.$image->getClientOriginalExtension();
   

    
    $request->file->move('doctorimage',$imagename);

    $doctor->image=$imagename;

    }

    $doctor->save();

    return redirect()->back()->with('message', 'doctor updated successfully');;




}
public function emailview($id)
{
    $data=appointment::find($id);
    return view('admin.email_view',compact('data'));

}

}
