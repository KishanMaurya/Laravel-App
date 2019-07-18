<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class italentController extends Controller
{
    public function login()
    {
    	return view('emplogin'); 
    }
    public function run(Request $request)
    {
    	$name=$request->input('name');
    	$pass=$request->input('pass');
    	$check = DB::table('user')->where(['name'=>$name,'pass'=>$pass])->get();
    	if (count($check) >0) {
    		$session_name=session()->put('userdata',$name);
    		return view('orderview');
    	}else{
    		?>
    		<script>
    			alert('Something thing Error ...!')
    		</script>
    		<?php
    		return view('emplogin');
    	}
    }

    public function order()
    {
    	return view('takeadd');
    }
    public function save(Request $request)
    {
    	$name=$request->input('name');
    	$order=$request->input('order');
    	$qty=$request->input('qty');
    	$amt=$request->input('amt');
    	$order=DB::insert('INSERT INTO orders(name,order_type,quantity,amount) VALUES (?,?,?,?)',[$name,$order,$qty,$amt]);
    	//return redirect('takeadd')->with('success','success');
    	if ($order>0) {
    		?>
				<script>
					alert('Order Successfull. Enjoy Order')
				</script>
    		<?php 
    		return view('orderview');
    	}else{
    		?><?php
    		return view('takeadd');
    	}
    }
    
    public function index()
    {
        return view('index');
    }

      public function chart()
      {
        $result = DB::table('orders')
                    ->where('name','=','kishan')
                    ->orderBy('order_type', 'ASC')
                    ->get();
        return response()->json($result);
      }



//table view 

   	public function viewform()
    {
    	return view('tableview');
    }
   


    public function logout() {
		//session::destroy();
		//Auth::logout ();
		session()->flush();
		return view('emplogin');
	}
}
