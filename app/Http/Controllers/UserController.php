<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserPersonal;
use App\Models\UserEvent;
use Carbon\Carbon;
use Session;

class UserController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        // $this->middleware('auth');

    }



    public function index()

    {

        $events = Event::with('eventImage')->limit(6)->get();

        return view('site/home',compact('events'));

    }



    public function weddingDetails($id)

    {

        $event = Event::with('eventImages')->find($id);

        // dd($event);

        return view('site/wedding_details',compact('event'));

    }



    public function saveChecklist(Request $request)

    {

        if($request->except('_token','event')){

            $input = $request->except('_token','event');

            $data = new UserPersonal;

            $data->event = $request->post('event');

            $data->save();

    

            if(!$data){

                return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);

            }

    

            foreach($input as $value){

                $event = new UserEvent;

                $event->event_id = $data->id;

                $event->item = $value;

                $event->save();

            }

            Session::put('application', $data->id);

            return response()->json(['status' => true, 'message' => 'Application added successfully']);

        } else {

            return response()->Json(['status' => false, 'message' => 'Please select atleast one']);

        }

    }



    public function savePersonal(Request $request)

    {

        // dd($request->post());

        $validator =Validator::make($request->all(), [

            'first_name'                 =>  'required',

            'last_name'                  =>  'required',

            'mobile'                     =>  'required|numeric',

            'email'                      =>  'required|email',

            'address'                    =>  'required',

            'location'                    =>  'required',

            'date'                    =>  'required',



        ]);

        

        if ($validator->fails())

        {

            return response()->json(['status' => false, 'message' => $validator->messages(), 'error' => 0]);

        }

        

        $data = [

            'first_name' => $request->post('first_name'),

            'last_name'  => $request->post('last_name'),

            'mobile'  => $request->post('mobile'),

            'email'  => $request->post('email'),

            'address'  => $request->post('address'),

            'description'  => $request->post('description'),

            'location'  => $request->post('location'),

            'date'  => $request->post('date'),

        ];

        

        $id = Session::get('application');

        $result = UserPersonal::where('id',$id)->update($data);



        if(!$result){

            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);

        }

        return response()->json(['status' => true, 'message' => 'Personal data successfully']);



    }





    public function saveAll()

    {

        // dd('mnv');

        $id = Session::get('application');

        $term = UserPersonal::where('id',$id)->update(['terms' =>"1"]);

        if(!$term){

            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);

        }

        return response()->json(['status' => true, 'message' => 'submit data successfully']);

    }



}

