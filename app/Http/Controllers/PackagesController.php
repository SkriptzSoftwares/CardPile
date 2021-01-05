<?php

namespace App\Http\Controllers;

use App\Package;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/market/packages/packages')->with('packages', Package::paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.market.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30|unique:packages',
            'price' => 'required|integer|max:1000000|min:0',
            'stock' => 'required|integer|max:1000000|min:-1',
            'type' => 'required',
            'desc' => 'required|max:950',
            'category' => 'required',
            'image' => 'image|max:1999|nullable',
            'file' => 'file|max:1999|nullable'
        ]);

        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $imageNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $imageNameToStore);

        } else {
            $imageNameToStore = 'noimage.jpg';
        }

        $package = new Package();
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        if($request->input('stock') != -1) {
            $package->stock = $request->input('stock');
        }
        $package->type = $request->input('type');
        $package->desc = $request->input('desc');
        $package->category_id = $request->input('category');
        $filedownloadname = '';
        if($request->hasFile('file')) {
            $filenameWithExt = $request->file('file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('file')->getClientOriginalExtension();

            $filedownloadname = $filename.'_'.time().'.'.$extension;

            $path = $request->file('file')->storeAs('public/files', $filedownloadname);
        }
        $package->image = $imageNameToStore;
        $package->file = $filedownloadname;
        $package->save();

        return redirect('/admin/packages')->with('success', 'Successfully created package!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/market/packages/edit')->with("pack", Package::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:30|unique:packages',
            'price' => 'required|integer|max:1000000|min:0',
            'stock' => 'required|integer|max:1000000|min:-1',
            'type' => 'required',
            'desc' => 'required|max:950',
            'category' => 'required',
            'image' => 'image|max:1999|nullable',
            'file' => 'file|max:1999|nullable'
        ]);

        $package = new Package();
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        if($request->input('stock') != -1) {
            $package->stock = $request->input('stock');
        }
        $package->type = $request->input('type');
        $package->desc = $request->input('desc');
        $package->category_id = $request->input('category');
        $imagefile = '';
        if($request->hasFile('image')) {

            Storage::delete('public/images/' . $package->image);

            $filenameWithExt = $request->file('image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $imagefile = $filename.'_'.time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/images', $imagefile);
            $package->image = $imagefile;
        }
        $filedownloadname = '';
        if($request->hasFile('file')) {

            Storage::delete('public/files/' . $package->file);

            $filenameWithExt = $request->file('file')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('file')->getClientOriginalExtension();

            $filedownloadname = $filename.'_'.time().'.'.$extension;

            $path = $request->file('file')->storeAs('public/files', $filedownloadname);
            $package->file = $filedownloadname;
        }
        $package->save();

        return redirect('/admin/packages')->with('success', 'Successfully updated package!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        if($package->image != 'no-image.png') {
            Storage::delete("public/images/" . $package->image);
        }
        if($package->file) {
            Storage::delete("public/files/" . $package->file);
        }
        $package->delete();
        return redirect('/admin/packages')->with('success', 'Successfully deleted package!');
    }
}
