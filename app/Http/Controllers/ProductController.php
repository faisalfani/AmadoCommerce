<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedDate = $this->validate($request,[
            'nama_produk'=>'required',
            'category_id'=>'required',
            'stok'=>'required',
            'harga'=>'required',
            'status'=>'required',
            'foto_produk'=> ['mimes:jpg,jpeg,png,gif,bmp']
        ]);

        $data = $this->getRequest($request);
        Product::create($data);

        return redirect(route('products.index'))
            ->with('success_message','Berhasil menambah Produk baru');
    }

    private function getRequest(Request $request)
    {
        $data =$request->all();
        if ($request->hasFile('foto_produk')) {
            
        $file = $request->file('foto_produk');
        $filename = $file->getClientOriginalName();
        $destination= base_path().'/public/uploads';
        $file->move($destination,$filename);
        $data['foto_produk']=$filename;

        }


        return $data;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',['product'=>$product]);
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
              $product = product::find($id);
        if (!$product) return redirect()->back();
         $validatedDate = $this->validate($request,[
            'nama_produk'=>'required',
            'category_id'=>'required',
            'stok'=>'required',
            'harga'=>'required',
            'status'=>'required',]
        );

         $data = $this->getRequest($request);
        
          $product -> update($data);

          return redirect(route('products.index'))
            ->with('success_message','Berhasil mengupdate product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) return redirect()->back();

        $product ->delete();

        return redirect(route('products.index'))
            ->with('success_message','Berhasil menghapus Product');
    }
}
