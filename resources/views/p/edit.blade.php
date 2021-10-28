@extends('layouts.admin.app')

@section('content')

    <div>
        <h2>@lang('admins.admins')</h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('site.home')</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.admins.index') }}">@lang('admins.admins')</a></li>
        <li class="breadcrumb-item">@lang('site.edit')</li>
    </ul>

    <div class="row">

        <div class="col-md-12">

            <div class="tile shadow">

                <form method="post" action="">
                    @csrf
                    @method('put')

                    @include('admin.partials._errors')

                    {{--name--}}
                    <div class="form-group">
                        <label>@lang('users.name') <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $pe->name) }}" required>
                    </div>

                    

                    {{--role_id--}}
                    

                  
                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->

@endsection