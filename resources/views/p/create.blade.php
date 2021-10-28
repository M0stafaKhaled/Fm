@extends('layouts.admin.app')

@section('content')

    <div>
        <h2> Create Pepole  </h2>
    </div>

    <ul class="breadcrumb mt-2">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('site.home')</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.admins.index') }}">@lang('admins.admins')</a></li>
        <li class="breadcrumb-item">@lang('site.create')</li>
    </ul>

    <div class="row">

        <div class="col-md-12">

            <div class="tile shadow">

                <form method="post" action="{{ route('pepole.store') }}">
                    @csrf
                    @method('post')

                    @include('admin.partials._errors')

                    {{--name--}}
                    <div class="form-group">
                        <label>@lang('users.name') <span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control" value="{{ old('name') }}" required>
                    </div>



                 
                    <div class="form-group">
                        <label>NationalID  <span class="text-danger">*</span></label>
                        <input type="text" name="NationalID" autofocus class="form-control" value="{{ old('NationalID ') }}" required>
                    </div>



                    <div class="form-group">
                        <label>SocialStatus <span class="text-danger">*</span></label>
                        {{-- <input type="sel" name="name" autofocus class="form-control" value="{{ old('name') }}" required> --}}
                        <select name="SocialStatus" class="form-control select2" required>
                            <option value="">@lang('site.socialstatus') </option>
                                <option value="{{ 0 }}" > متزوج </option>
                                <option value="{{ 1 }}"> اعذب</option>
                                <option  value="{{ 2 }}"> مطلق </option>
                                <option value="{{ 3 }}"> ارمل</option>
                         
                        </select>
                    </div>


                    <div class="form-group">
                        <label>healthy  <span class="text-danger">*</span></label>
                        {{-- <input type="sel" name="name" autofocus class="form-control" value="{{ old('name') }}" required> --}}
                        <select name="healthy" class="form-control select2" required>
                            <option value="">@lang('site.healthy')</option>
                            
                            <option value="0"> سليم</option>  
                            <option value="1"> مش سليم</option>      
                         
                        </select>
                    </div>

                    
                     	
                    <div class="form-group">
                        <label>Address<span class="text-danger">*</span></label>
                        <input type="text" name="address" autofocus class="form-control" value="{{ old('address') }}" required>
                    </div>
                   
                    <div class="form-group">
                        <label>PhoneNumber <span class="text-danger">*</span></label>
                        <input type="text" name="PhoneNumber" autofocus class="form-control" value="{{ old('address') }}" required>
                    </div>

                   
                  
                    <div class="form-group">
                        <label>job <span class="text-danger">*</span></label>
                        {{-- <input type="sel" name="name" autofocus class="form-control" value="{{ old('name') }}" required> --}}
                        <select name="job" class="form-control select2" required>
                            <option value="">job</option>
                            
                            <option value="{{ 0 }}"> موظف</option>  
                            <option value="{{ 1 }}">بالمعاش </option>   
                            <option value="{{ 2 }}"> عامل يومي</option>   
                            <option value="{{ 3 }}">عامل بأجر </option>   
                              
                         
                        </select>
                    </div>



                    <div class="form-group">
                        <label>home <span class="text-danger">*</span></label>
                        {{-- <input type="sel" name="name" autofocus class="form-control" value="{{ old('name') }}" required> --}}
                        <select name="home" class="form-control select2" required>
                            <option value="">home</option>
                            
                            <option value="0">  منزل حكومي</option>  
                            <option value="1">منزل مجهود ذاتي </option>   
                            <option value="2"> ملك</option>   
                            <option value="3"> ايجار</option>   
                              
                         
                        </select>
                    </div>
                    <div class="form-group">
                        <label>poseessions<span class="text-danger">*</span></label>
                        {{-- <input type="sel" name="name" autofocus class="form-control" value="{{ old('name') }}" required> --}}
                        <select name="home" class="form-control select2" required>
                            <option value="">poseession</option>
                            @foreach ($ps as$p )
                            <option value="{{ $p->id }}"> {{ $p->name}} </option>  
                            @endforeach
                           
                            
                              
                         
                        </select>
                    </div>
                    
                 
                    {{--birth-date--}}
                    <div class="form-group">
                    <label class="block text-sm font-medium text-gray-700">Enter your birthday:
                        <input class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md" type="date" name="dateOfBirth" required pattern="\d{4}-\d{2}-\d{2}" placeholder="#### / ## / ##">
                        <span></span>
                      </label>
                    </div>
                      



                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="0" >
                        <label class="form-check-label" for="flexRadioDefault1" >
                                Male
                        </label>
                      </div>
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="radio"  name="gender" value="1"  checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            female
                        </label>
                      </div>

                    
                    

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>@lang('site.create')</button>
                    </div>

                </form><!-- end of form -->

            </div><!-- end of tile -->

        </div><!-- end of col -->

    </div><!-- end of row -->

@endsection

<script>
    
</script>



