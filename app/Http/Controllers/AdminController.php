<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\Employee;
use App\Model\Salary;
use App\Models\UserEvent;
use App\Model\Event;
use App\Model\EventImage;
use App\Models\UserPersonal;
use App\Models\Advance;
use App\Models\Expence;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $enquiry = UserPersonal::where('status','0')->where('terms','1')->count();
        $employee = Employee::count();
        // dd($enquiry);
        return view('admin.dashboard',compact('enquiry','employee'));
    }

    public function listEnquiry()
    {
        $result = UserPersonal::where('status','!=','2')->where('terms','1')->get();
        return view('admin.enquiry-list',compact('result'));
    }

    public function getEnquiry($id)
    {
        $result = UserPersonal::with('events')->where('user_personals.id',$id)->first();
        // dd($result['event']);
        if($result['event'] ==1){
            return view('application.list-wedding',compact('result'));
        } elseif($result['event'] ==2) {
            return view('application.list-maternity',compact('result'));
        } elseif($result['event'] ==3) {
            return view('application.list-newborn',compact('result'));
        } elseif($result['event'] ==4) {
            return view('application.list-birthday',compact('result'));
        }
      
    }

    public function getSummary($id)
    {
        $result = UserPersonal::with('advances')->where('id',$id)->first();
        if($result){
            $advance = 0;
            foreach($result['advances'] as $value) {
                $advance = $advance + $value['advance'];
            }
            $result['total_advance'] = $advance;
            $result['balance'] = $result['amount'] - $result['total_advance'];

            return view('application.list-summary',compact('result'));
        } 
      
    }

    public function submitAdvance(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'amount'                    =>  'required|numeric',
        ]);

        if ($validator->fails())
        {
            return response()->json(['status' => false, 'message' => $validator->messages(), 'error' => 0]);
        }
        
        $id = $request->post('id');
        $advance = new Advance;
            $advance->event_id = $id;
            $advance->advance = $request->post('amount');
            $advance->date = today();
            $advance->save();

        if(!$advance){
            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);
        }
        return response()->json(['status' => true, 'message' => 'successfully']);
    }

    public function getPersonalData($id)
    {
        $result = UserPersonal::where('id',$id)->first();
        if($result){
            return view('application.list-personal',compact('result'));
        } 
      
    }

    public function submitProceed(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'amount'                    =>  'required|numeric',
            'advance'                     =>  'required|numeric',
            'work_details'                         =>  'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['status' => false, 'message' => $validator->messages(), 'error' => 0]);
        }
        
        $data = [
            'amount' => $request->post('amount'),
            'work_details'  => $request->post('work_details'),
            'status'     => "1",
        ];
        
        $id = $request->post('id');
        $result = UserPersonal::where('id',$id)->update($data);
        
        $advance = new Advance;
            $advance->event_id = $id;
            $advance->advance = $request->post('advance');
            $advance->save();

        if(!$result){
            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);
        }
        return response()->json(['status' => true, 'message' => 'successfully']);
    }

    public function getEmployeeAdd()
    {
        return view('admin.employee-add');
    }

    public function postEmployeeAdd(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'first_name'                    =>  'required|max:150',
            'last_name'                     =>  'required|max:150',
            'email'                         =>  'required|max:200|unique:employees',
            'mobile'                        =>  'required|unique:employees',
            'designation'                   =>  'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status' => false, 'message' => $validator->messages(), 'error' => 0]);
        }
        
        $data = new Employee;
        $data->first_name        = $request->post('first_name');
        $data->last_name         = $request->post('last_name');
        $data->email         = $request->post('email');
        $data->mobile         = $request->post('mobile');
        $data->designation         = $request->post('designation');
        $data->emp_id         = $request->post('emp_id');
        $data->save();

        if(!$data){
            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);
        }
        return response()->json(['status' => true, 'message' => 'Employee added successfully']);

    }

    public function listEmployee()
    {
        $result = Employee::get();
        return view('admin.employee-list',compact('result'));
    }


    public function getSalaryAdd()
    {
        $result = Employee::select('id','first_name','last_name')->get();
        return view('admin.salary-add',compact('result'));
    }

    public function postSalaryAdd(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'employee'                   =>  'required',
            'amount'                     =>  'required|numeric',
            'status'                     =>  'required',
            'salary_date'                =>  'required',
            'description'                =>  'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['status' => false, 'message' => $validator->messages(), 'error' => 0]);
        }
        
        $data = new Salary;
        $data->emp_id        = $request->post('employee');
        $data->amount         = $request->post('amount');
        $data->status         = $request->post('status');
        $data->date         = $request->post('salary_date');
        $data->description         = $request->post('description');
        $data->save();

        if(!$data){
            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);
        }
        return response()->json(['status' => true, 'message' => 'Salary added successfully']);

    }


    public function listSalary()
    {
       
            $end = Carbon::now();
            $start = (new Carbon($end))->day(1);
            $result = Salary::with('employee')->whereDate('date','<=',$end)
            ->whereDate('date','>=',$start)->get();
            
        $team = Employee::select('id','first_name','last_name')->get();
        return view('admin.salary-list',compact('result','team'));
    }

    public function filterSalary(Request $request)
    {

        $split = explode('to', $request->get('a'));
        $start = (new Carbon($split[0]));
        $end = (new Carbon($split[1]));
        if($request->id){
            $result = Salary::with('employee')->where('emp_id',$request->id)->whereDate('date','<=',$end)
            ->whereDate('date','>=',$start)->get();
        } else {
            $result = Salary::with('employee')->whereDate('date','<=',$end)
            ->whereDate('date','>=',$start)->get();
        }
        // dd($result);
        foreach($result as $value){
            if($value['status'] == 1){
                $value['status'] ="Paid";
            } else {
                $value['status'] ="Pending";
            }
        }
        // dd($result);
        if(!$result){
            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);
        }
        return response()->json(['status' => true,'data' => $result, 'message' => 'Salary filter successfully']);
    }




    public function getExpence()
    {
        $end = Carbon::now();
        $start = (new Carbon($end))->day(1);
        $result = Expence::whereDate('date','<=',$end)
        ->whereDate('date','>=',$start)->get();
        $total = 0;
        foreach($result as $value){
            $total = $total + $result['amount'];
        }
        $result['total'] = $total;
        // dd($result);
        return view('application.expence-list',compact('result'));
    }

    public function submitExpence(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'amount'                    =>  'required|numeric',
            'date'                      =>'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['status' => false, 'message' => $validator->messages(), 'error' => 0]);
        }
        
        $expence = new Expence;
            $expence->amount = $request->post('amount');
            $expence->date = $request->post('date');
            $expence->description = $request->post('description');
            $expence->deleted = "0";
            $expence->save();

        if(!$expence){
            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);
        }
        return response()->json(['status' => true, 'message' => 'successfully']);
    }

    public function getEvent()
    {
        return view('admin.work-add');
    }

    public function submitEvent(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'groom'                     =>  'required',
            'bride'                     =>  'required',
            'description'               =>  'required',
            'date'                      =>'required',
            'image.*'                   =>'required',
        ]);

        if ($validator->fails())
        {
            return response()->json(['status' => false, 'message' => $validator->messages(), 'error' => 0]);
        }
        
        $event = new Event;
            $event->groom = $request->post('groom');
            $event->bride = $request->post('bride');
            $event->date = $request->post('date');
            $event->description = $request->post('description');
            $event->save();
            if($request->has('image')){
                $imageData = [];
                foreach($request->file('image') as $key => $file){
                    // $image = Storage::put('event_image', $file);
                    $image = $file->store('event_image',['disk' => 'public']);
                    // if($image)
                    //     array_push($eventImages, $image);
                    //     $fileNameToStore = serialize($eventImages);

                        $imageData[$key]['event_id'] =  $event->id;
                        $imageData[$key]['image'] =  $image;
                }

                $response = EventImage::insert($imageData);
            }

        if(!$event){
            return response()->Json(['status' => false, 'message' => 'Sorry! Technical error']);
        }
        return response()->json(['status' => true, 'message' => 'successfully']);
    }


    public function logout()
    {
        Auth::logout();
        return redirect (('admin/login'));
    }

}
