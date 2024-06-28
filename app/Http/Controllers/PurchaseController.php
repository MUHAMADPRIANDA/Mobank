<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::where('user_id', Auth::id())->get();
        return view('purchases.index', compact('purchases'));
    }

    public function store(Request $request, Car $car)
    {
        Purchase::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id
        ]);

        Session::flash('success', 'Pembelian berhasil.');

        return redirect()->route('purchases.index');
    }

    public function destroy(Purchase $purchase)
    {
        if ($purchase->user_id == Auth::id()) {
            $purchase->delete();
            Session::flash('success', 'Pembelian berhasil dihapus.');
        } else {
            Session::flash('error', 'Anda tidak memiliki izin untuk menghapus pembelian ini.');
        }

        return redirect()->route('purchases.index');
    }
}
