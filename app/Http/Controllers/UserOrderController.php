<?php

namespace App\Http\Controllers;
use App\Events\OrderStatusChangedEvent;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
		$user = auth()->user();
		$orders = Order::with('status')->where('user_id', $user->id)->get();
		


		// $orders = Order::has('status')->where('user_id', $user->id)->get();
		return view('order.index', compact('user', 'orders'));
	}

	public function create(Request $request) {
		
       

		$user = User::where('email', $request->input('email'))->count();

        if($user > 0)
        {
            return view('order.create');
        }
        else{
        echo "<script type='text/javascript'>alert('EL E-mail NO es correcto');
        
        </script>";

        return view('template.compra');
		}
		
	}

	public function store(Request $request, Order $order) {
		$request->validate([
			'telefono' => 'required',
			
		]);

		$order = Order::create([
			'user_id' => auth()->user()->id,
			'address' => $request->address,
			'filtro' => $request->filtro,
			'instructions' => $request->instructions,
			'direccion' => $request->direccion,
			'telefono' => $request->telefono,
			'email' => $request->email,
		]);
		event(new OrderStatusChangedEvent($order));
		return redirect()->route('user.order.show', $order)->with('message', 'Orden recibida');
	}
	/**
	 * Display the specific resource
	 * @param  Order  $order [description]
	 * @return [type]        [description]
	 */
	public function show(Order $order) {
		return view('order.show', compact('order'));
	}
}
