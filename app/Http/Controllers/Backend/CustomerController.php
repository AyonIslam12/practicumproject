<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Customer;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $customers = Customer::all();
       return view('backend.layouts.customers.manage', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        return view('backend.layouts.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
            'name' => 'required|string|min:6',
            'email' => 'required|email|unique:customers',
            'photo' => 'required|image',
            'password' => 'required|min:8|max:16',
            'age' => 'required',
            'nid_num' => 'required|min:6',
            'gender' => 'required',
            'contact' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
         ]);
         try{
            $photo = $request->file('photo');
            $file_name = rand(11111,99999).date('ymdhis.'). $photo->getClientOriginalExtension();
           Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'photo' => $file_name,
                'password' => $request->password,
                'age' => $request->age,
                'nid_num' => $request->nid_num,
                'gender' => $request->gender,
                'contact' => $request->contact,
                'address' => $request->address,
                'status' => $request->status
             ]);
             if ($photo->isValid()){
                $photo->storeAs('customer',$file_name);
            }
             /* session()->flash('type','success');
            session()->flash('message','Customer save success!');
 */
         }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());

         }
         return redirect()->route('admin.customer.manage')->with('success','Customer data successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('backend.layouts.customers.view', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        if($customer)
        return view('backend.layouts.customers.edit', compact('customer'));
        else
        return redirect()->back();
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
        $request->validate([
            'name' => 'required|string|min:6',
            'email' => 'required|email|unique:customers,id,'.$id,
           /*  'photo' => 'required|image', */
            'age' => 'required',
            'nid_num' => 'required|min:6',
            'gender' => 'required',
            'contact' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|string',
         ]);

         try{
           /*  Customer::update([
                'id' => $request->id,
                'name' => $request->name,
                'email' => $request->email,

                'password' => $request->password,
                'age' => $request->age,
                'nid_num' => $request->nid_num,
                'gender' => $request->gender,
                'contact' => $request->contact,
                'address' => $request->address,
                'status' => $request->status

             ]); */
             $customer = Customer::find($id);
             $customer->id  = $request->id;
             $customer->name  = $request->name;
             $customer->email  = $request->email;
             $customer->age  = $request->age;
             $customer->nid_num  = $request->nid_num;
             $customer->gender  = $request->gender;
             $customer->contact  = $request->contact;
             $customer->address  = $request->address;
             $customer->status  = $request->status;
             $customer->update();

             /* session()->flash('type','success');
             session()->flash('message','Customer info update succesfully');
 */
         }catch(Exception $e){
            session()->flash('type','danger');
            session()->flash('message',$e->getMessage());

         }
         return redirect()->route('admin.customer.manage')->with('success','Customer data successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try{
           $customer = Customer::find($id);
           if(file_exists(public_path('uploads/customer/'.$customer->photo))) unlink(public_path('uploads/customer/'.$customer->photo));

           $customer->delete();
           session()->flash('type','success');
           session()->flash('message','Customer info delete success...');

       }catch(Exception $e){
        session()->flash('type','danger');
        session()->flash('message',$e->getMessage());
       }
       return redirect()->back();
    }
}
