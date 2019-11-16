<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use Session;
use App\Cart;

class ShopController extends Controller
{
    /** 
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $shops = Shop::orderBy('Id_product','desc')->get();

        return view('shop.main')->with('shops', $shops);
    }
    /** 
     * 
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('shop.create');
    }
    /** 
     * @param \Illuminate\Http\Request $request 
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Product_name' => 'required',
            'Product_description' => 'required',
            'Product_price' => 'required',
            'Product_stock' => 'required',
            'Id_category' => 'required',
            'Product_image'=> 'image|nullable|max:1999'
        ]);
        //
        if($request->hasFile('Product_image')){
            //Filename with extension
            $filenameYExt = $request->file('Product_image')->getClientOriginalName();
            //Filename without extension
            $filenameNExt = pathinfo($filenameYExt, PATHINFO_FILENAME);
            //Extension
            $extension = $request->file('Product_image')->getClientOriginalExtension();
            //Filename store
            $filenameStore = $filenameNExt.'_'.time().'.'.$extension;
            //Upload
            $path = $request->file('Product_image')->storeAs('public/Product_image', $filenameStore);
        } else {
            $filenameStore = "noimage.jpg";
        }
        //Create an event
        $shop = new Shop;
        $shop->Product_name = $request->input('Product_name');
        $shop->Product_description = $request->input('Product_description');
        $shop->Product_image = $filenameStore;
        $shop->Product_price=$request->input('Product_price');
        $shop->Product_stock=$request->input('Product_stock');
        $shop->Id_category=$request->input('Id_category');
        $shop->save();

        return redirect('/shop')->with('success', 'Post envoyé');
    }

    /** 
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $shop=Shop::find($id);
        return view('shop.show')->with('shops', $shop);
    }

    /** 
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shop.edit')->with('shop', $shop);
    }

    /**
     * Remove the specified resource from storage.
     *  
     * @param \Illuminate\Http\Request $request
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'Product_name' => 'required',
            'Product_description' => 'required',
            'Product_price' => 'required',
            'Product_stock' => 'required',
            'Id_category' => 'required',
            'Product_image'=> 'image|nullable|max:1999'

        ]);
        if($request->hasFile('Product_image')){
            //Filename with extension
            $filenameYExt = $request->file('Product_image')->getClientOriginalName();
            //Filename without extension
            $filenameNExt = pathinfo($filenameYExt, PATHINFO_FILENAME);
            //Extension
            $extension = $request->file('Product_image')->getClientOriginalExtension();
            //Filename store
            $filenameStore = $filenameNExt.'_'.time().'.'.$extension;
            //Upload
            $path = $request->file('Product_image')->storeAs('public/Product_image', $filenameStore);
        } else {
            $filenameStore = "noimage.jpg";
        }
        //Create an event
        $shop = Shop::find($id);
        $shop->Product_name = $request->input('Product_name');
        $shop->Product_description = $request->input('Product_description');
        $shop->Product_image = $filenameStore;
        $shop->Product_price = $request->input('Product_price');
        $shop->Product_stock = $request->input('Product_stock');
        $shop->Id_category = $request->input('Id_category');
        $shop->save();
        
        return redirect('/shop')->with('success', 'Post changé');
    }

    /**
     * Remove the specified resource from storage.
     *  
     * @param int $id 
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('/shop')->with('success', 'produit supprimé');
    }

    public function getAddToCart(Request $request, $id) {

        $product = Shop::find($id);
        $cart = Session::has('cart') ? Session::get('cart') : null;
        if(!$cart){
            $cart = new Cart($cart);
        }
        $cart->add($product, $product->Id_product);
        $request->session()->put('cart', $cart);
        return redirect()->route('shop.main')->with('product',$product);
    }
    public function getCart(){
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $cart = Session::get('cart');
        return view('shop.shopping-cart', ['shops'=> $cart->items, 'totalPrice' =>$cart->totalPrice]);
    }
}