<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('Dashboard.CreateProduct');
    }
    public function store(request $request){
        $request->validate([
            'Title'=>'required|string',
            'Price'=>'required|integer',
            'Image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            'Category'=>'required|string',
            'Description'=>'required|string',
           
            
        ]);
        
        $imageName = time().'.'.$request->Image->extension();  
        $request->Image->move(public_path('images'), $imageName);
        
         $Product=new Product;
         $Product->Title = $request->Title;
         $Product->Image= $imageName;
         $Product->Price= $request->Price;
         $Product->Category= $request->Category;
         $Product->Description= $request->Description;

        $Product->save();
        return redirect()->route('showproductt');
    }
    public function index(){
           $Product = Product::all();
           return view('Dashboard.Products', compact('Product'));
       }
       public function edit($id){
        $Product= Product::where('id',$id)->first();

        return view('Dashboard.EditProduct', compact('Product'));
       }
       public function update( Request $request ,$id){
        $request->validate([
            'Title'=>'required|string',
            'Price'=>'required|integer',
            'Category'=>'required|string',
            'Description'=>'required|string',
            
        ]);
    
        $Product = Product::findOrFail($id); 
        $Product->Title = $request->Title;
        $Product->Price = $request->Price;
        $Product->Category = $request->Category;
        $Product->Description = $request->Description;
        
    
        if ($request->hasFile('Image')) {
            $imageName = time().'.'.$request->Image->extension();
            $request->Image->move(public_path('images'), $imageName);
            $Product->Image = $imageName;
        } 
    
        $Product->save(); // Save the changes
        return redirect()->route('showproductt');
    }
    public function destroy($id){ 
        $Product= Product::where('id',$id)->first();
        $Product->delete(); 
        return redirect('/showproduct');
    }
    ////Product Details Fetch page///////
    public function productdetail($id)
    {
      $product = Product::find($id);
       return view('ProductDetail', compact('product'));
    }

   
}
