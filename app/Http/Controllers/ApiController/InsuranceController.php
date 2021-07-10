<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InsuranceController extends Controller
{
    public function get_insurance(){
       try{
        $insurance = Insurance::all();
        return $this->success($insurance,'Insurance List');

       }catch(Exception $e){
        return $this->failed($e->getMessage());
       }
    }

    public function single_insurance($id){
        $insurance = Insurance::find($id);
        if($insurance){
            return $this->success($insurance,'Insurance Single Info');
        }else{
            return $this->notFound('Insurance Data Not Found!');
        }
    }
    public function create_insurance(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|min:4|unique:insurances',
            'company_name' => 'required',
            'insurance_fee' => 'required',
            'coverage' => 'required',
        ]);
        if($validator->fails()) {
            return response()->json([
                "success" => false,
                "errors"  => $validator->errors()
            ], 401);
        };

        try{

            $insurance =  Insurance::create([
                'name' => $request->name,
                'company_name' => $request->company_name,
                'insurance_fee' => $request->insurance_fee,
                'coverage' => $request->coverage,
                'status' => $request->status,
            ]);
            return $this->success($insurance,'Insurance Createed Successfuly');
        }catch(Exception $e){

            return $this->failed($e->getMessage());
        }

    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|min:4',
            'company_name' => 'required',
            'insurance_fee' => 'required',
            'coverage' => 'required',
        ]);

        $data = Insurance::find($id);
        if($data){
            $data->name = $request->name;
            $data->company_name = $request->company_name;
            $data->insurance_fee = $request->insurance_fee;
            $data->coverage = $request->coverage;
            $data->status = 'active';
            $data->save();
            return $this->success($data,'Insurance Updated Successfuly');
        }else{
            return $this->failed('Problem!!');
        }
    }

    public function delete($id){
        $data = Insurance::find($id);
        if($data){
            $data->delete();
            return $this->success($data,'Insurance delete Successfuly');
        }else{
            return $this->notFound('Data no found');
        }
    }
}
