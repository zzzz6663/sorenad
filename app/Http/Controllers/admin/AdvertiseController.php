<?php

namespace App\Http\Controllers\admin;
use Carbon\Carbon;
use App\Models\User;
// use App\Notifications\SendKaveCode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertise;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=auth()->user();
        $advertise = Advertise::query();
        if ($request->search) {
            $search = $request->search;
            $advertise->where('name', 'LIKE', "%{$search}%")
                ->orWhere('family', 'LIKE', "%{$search}%")
                ->orWhere('mobile', 'LIKE', "%{$search}%");
        }
        if ($request->status) {
            $advertise->where('status', $request->status);
        }
        if ($request->type) {
            $advertise->where('type', $request->type);
        }
        if ($request->user_id) {
            $advertise->where('user_id', $request->user_id);
        }
        if ($request->from) {
            $request->from = $user->convert_date($request->from);
            $advertise->where('created_at', '>', $request->from);
        }
        if ($request->to) {
            $request->to = $user->convert_date($request->to);
            $advertise->where('created_at', '<', $request->to);
        }
        $advertise =$advertise
        // ->whereRole("customer")
        ->latest()->paginate(10);
        $customers=User::whereRole("customer")->get();
        return view('admin.advertise.all', compact(['advertise',"customers"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required|max:256',
            'family' => 'required|max:256',
            'mobile' => 'required|max:11|unique:users,mobile',
            'personal_code' => 'required|max:11|unique:users,personal_code',
            'melli_code' => 'required|max:11|unique:users,melli_code',
            'role' => 'required',
            // 'region_id' => 'required',
            'avatar' => 'nullable',
        ]);

        $user = User::create($data);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $name_img = 'avatar_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/avatar/'), $name_img);
            $user->update(['avatar'=>$name_img]);
        }

        // اختصاص دادن سطح کاربری
        $user->assignRole($data['role']);
        alert()->success('کاربر با موفقیت ساخته شد ');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Advertise $advertise)
    {
        return view('admin.advertise.show', compact(['advertise']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        return view('admin.user.edit', compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|max:256',
            'family' => 'required|max:256',
            'mobile' => 'required|max:11|unique:users,mobile,'.$user->id,
            'password' => 'nullable|min:6|max:20',
            // 'region_id' => 'required',
            'avatar' => 'nullable|max:2024',
            'vip' => 'nullable|max:2024',
            'active' => 'nullable|max:2024',
        ]);
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $name_img = 'avatar_' . $user->id . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('/media/users/avatar/'), $name_img);
            $data['avatar']=$name_img;
        }
        $data['password']=bcrypt($data['password']);

        $user->update($data);
        alert()->success('کاربر با موفقیت به روز  شد ');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        alert()->success('کاربر با موفقیت حذف شد ');
        return redirect()->route('user.index');
    }
    public function advertise_confirm(Advertise $advertise,Request $request)
    {
        if($advertise->status=="ready_to_confirm"){
            $advertise->update(['status'=>"ready_to_show"]);
            alert()->success("تبیغ با موفقیت تایید شد ");
        }else{
            alert()->warning("این تبلیغ قابل تایید نیست  ");

        }
            return redirect()->route("advertise.index");
    }

}
