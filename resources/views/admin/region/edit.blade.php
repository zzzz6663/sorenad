@extends('master.admin')
@section('content')


 <div class="row">
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="card-header">
                ویرایش منطقه 
                <span class="alert alert-success">{{     $region->name }}</span>
                <i class="ti ti-edit"></i>
            </h5>
            <div class="card-body">
                @include('master.error')
                <form action="{{ route("region.update",$region->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label class="form-label" for="name">نام
                        </label>
                        <input  name="name" class="form-control" id="name" placeholder="مثلا منطقه  یک" type="text" value="{{ old("name",$region->name) }}">
                    </div>
                    {{--  <div class="mb-3">
                        <label class="form-label" for="active" >وضعیت</label>
                        <select class="form-select" id="active" name="active">
                            <option value="">انتخاب کنید </option>
                            <option {{ old("active",$region->active)=="1"?"selected":"" }} value="1">فعال</option>
                            <option {{ old("active",$region->active)=="0"?"selected":"" }} value="0">غیر فعال</option>
                        </select>
                    </div>  --}}
                    <div class="mb-3">
                        <a href="{{ route("region.index") }}" class="btn btn-warning">
                            برگشت
                            <i class="ti ti-arrow-narrow-left"></i>
                        </a>
                        <button class="btn btn-success"> ذخیره
                            <i class="ti ti-plus"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </div>
@endsection
