@extends('master.admin')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <h5 class="card-header">
                ثبت یادداشت برای بازدید
{{ $look->school_name }};
                <i class="ti ti-user-plus"></i>
            </h5>
            <div class="card-body">
                @include('master.error')
                <form action="{{ route("look.note",$look->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div>
                                        <label class="form-label" for="note">یادداشت </label>
                                        <textarea class="form-control" id="note" name="note" rows="3">{{ old("note") }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="mb-3">
                        <a href="{{ route("look.index") }}" class="btn btn-warning">
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
