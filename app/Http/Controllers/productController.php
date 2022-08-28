<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Zoom;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubProduct;
use Carbon\Carbon;
use Excel;
use App\Imports\UsersImport;
class productController extends Controller
{
    public function carausel()
    {
        return view('carausel');
    }

    public function zoom()
    {
        // $zoom = new \MacsiDigital\Zoom\Support\Entry();
        // $meeting = new \MacsiDigital\Zoom\meeting($zoom);
        // $meetings = $meeting->create(['a' => 'b']);

        // dd($meetings);

        // $user = Zoom::user()->find('tanzimahmed74@gmail.com');

        // dd($user);

        $user = Zoom::user()->first();

        $meetingData = [
            'topic' => 'hello kitty',
            'type' => 2,
            'start_time' => date('d-m-Y'),
        
        ];

        $meeting = Zoom::meeting()->make($meetingData);

        $meeting->settings()->make([
            'join_before_host' => true,
            'approval_type' => 1,
            'registration_type' => 2,
            'enforce_login' => false,
            'waiting_room' => false,
            // 'auto_recording' => true,
        ]);

        dd($user->meetings()->save($meeting));

        // $id = 4534464253;
        // $users = Zoom::user()->all();
        // dd($users)
        // ;
        // $meetings = Zoom::user()->find($id);
        // dd($meetings);
    }

    public function testCase(){
        // $parent_traverse=Category::whereHas('products')->with(['products.subproducts'])->get();
        // $parent_traverse[0]->products[0]->subproducts[0]->name;

        $data=[];
        for($i=0;$i<50000;$i++)
        
        {

            $data[]=[

            'name' => 'A',
            'category_id' => 121,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ];

            
        }
        


        foreach(array_chunk($data,500) as $chunk)
        {
        Product::insert($chunk);

        }
       
           

        
        

        // $child_traverse = SubProduct::with('product.category')->get();
        //optimation
    }

    public function csv(){

        return view('functionalities');
    }
    public function upload_csv(Request $request)


    {
     $file = $request->file('file');
    
     ini_set('max_execution_time', 600);
        

     (new UsersImport)->import($file);
    // Excel::import(new UsersImport, $file);   

    }
    public function map(){
$sequence = new \Ds\Vector([1, 2, 3]);

print_r($sequence->map(function($value) { return $value * 2; }));
print_r($sequence);
    }
}
