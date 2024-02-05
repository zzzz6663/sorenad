<?php

namespace App\Http\Controllers\admin;
use Carbon\Carbon;
use App\Models\Region;
// use App\Notifications\SendKaveCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $regions = Region::query();
        // if ($request->search) {
        //     $search = $request->search;
        //     $regions->where('name', 'LIKE', "%{$search}%")
        //         ->orWhere('family', 'LIKE', "%{$search}%")
        //         ->orWhere('mobile', 'LIKE', "%{$search}%");
        // }

        $regions = $regions->withTrashed()
        ->latest()->paginate(10);
        return view('admin.region.all', compact(['regions']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.region.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:256',
        ]);
        $user=auth()->user();
        $data['user_id']=$user->id;
       Region::create($data);
        alert()->success('منطقه با موفقیت ساخته شد ');
        return redirect()->route('region.index');
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
    public function edit(Request $request, Region $region)
    {
        return view('admin.region.edit', compact(['region']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $data = $request->validate([
            'name' => 'required|max:256',
        ]);
        $region->update($data);
        alert()->success('منطقه با موفقیت به روز  شد ');
        return redirect()->route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        alert()->success('منطقه با موفقیت حذف شد ');
        return redirect()->route('region.index');
    }
  public function active_region(Region $region)
    {

        // dd($region);
        // $region->update(['deleted_at'=>null]);
        $region->restore();
        // Region::onlyTrashed()->where('id', $region->id)->restore();

        alert()->success('منطقه با موفقیت فعال شد ');
        return redirect()->route('region.index');
    }

}
