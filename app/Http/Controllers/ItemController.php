<?php 

 

namespace App\Http\Controllers; 

 

use Illuminate\Http\Request; 

use Yajra\Datatables\Datatables; 

use App\Item; 

 

class ItemController extends Controller 

{ 

     /** 

     * Display a listing of the resource. 

     * 

     * @return \Illuminate\Http\Response 

     */ 

    public function index() 

    { 

        $items = Item::latest()->paginate(5); 

   

        return view('items.index',compact('items')) 

            ->with('i', (request()->input('page', 1) - 1) * 5); 

    } 

    

    /** 

     * Show the form for creating a new resource. 

     * 

     * @return \Illuminate\Http\Response 

     */ 

    public function create() 

    { 

        return view('items.create'); 

    } 

   

    /** 

     * Store a newly created resource in storage. 

     * 

     * @param  \Illuminate\Http\Request  $request 

     * @return \Illuminate\Http\Response 

     */ 

    public function store(Request $request) 

    { 

        $request->validate([ 

            'title' => 'required', 
            'email' => 'required',

            'description' => 'required', 

        ]); 

   

        Item::create($request->all()); 

    

        return redirect('/')->with('status', 'Profile updated!');

    } 

    

    /** 

     * Display the specified resource. 

     * 

     * @param  \App\Item  $Item 

     * @return \Illuminate\Http\Response 

     */ 

    public function show(Item $item) 

    { 

        return view('items.show',compact('item')); 

    } 

    

    /** 

     * Show the form for editing the specified resource. 

     * 

     * @param  \App\Item  $Item 

     * @return \Illuminate\Http\Response 

     */ 

    public function edit(Item $item) 

    { 

        return view('items.edit',compact('item')); 

    } 

   

    /** 

     * Update the specified resource in storage. 

     * 

     * @param  \Illuminate\Http\Request  $request 

     * @param  \App\Item  $Item 

     * @return \Illuminate\Http\Response 

     */ 

    public function update(Request $request, Item $item) 

    { 

        $request->validate([ 

            'title' => 'required', 

            'description' => 'required', 
            'email' => 'required',

        ]); 

   

        $item->update($request->all()); 

   

        return redirect()->route('items.index') 

                        ->with('success','Item updated successfully'); 

    } 

   

    /** 

     * Remove the specified resource from storage. 

     * 

     * @param  \App\Item  $Item 

     * @return \Illuminate\Http\Response 

     */ 

    public function destroy(Item $item) 

    { 

        $item->delete(); 

   

        return redirect()->route('items.index') 

                        ->with('success','Item deleted successfully'); 

    } 

} 