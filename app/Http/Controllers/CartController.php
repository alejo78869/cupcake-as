<?php

namespace App\Http\Controllers;

use App\Models\Cupcake;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $cupcake = Cupcake::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $cupcake->name,
                'price' => $cupcake->price,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Cupcake adicionado ao carrinho!');
    }

    public function view()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Item removido do carrinho.');
    }
}
