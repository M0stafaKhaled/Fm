@extends('layouts.admin.app')

@section('content')

    <div>
        <h2>Create </h2>
    </div>

    <ul class="breadcrumb mt-2">
       
      <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">@lang('site.home')</a></li>
      <li class="breadcrumb-item">@lang('admins.admins')</li>
  </ul>

  <div class="row">

      <div class="col-md-12">

          <div class="tile shadow">

              <div class="row mb-2">

                  <div class="col-md-12">

                      @if (auth()->user()->hasPermission('read_admins'))
                          <a href="{{ route('plcreate') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.create')</a>
                      @endif

                      @if (auth()->user()->hasPermission('delete_admins'))
                          <form method="post" action="{{ route('admin.admins.bulk_delete') }}" style="display: inline-block;">
                              @csrf
                              @method('delete')
                              <input type="hidden" name="record_ids" id="record-ids">
                              <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true"><i class="fa fa-trash"></i> @lang('site.bulk_delete')</button>
                          </form><!-- end of form -->
                      @endif

                  </div>

              </div><!-- end of row -->

              <div class="row">

                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" id="data-table-search" class="form-control" autofocus placeholder="@lang('site.search')">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <div class="form-group">
                              <select id="role" class="form-control select2">
                                  <option value="">@lang('site.all') @lang('roles.roles')</option>
                                  {{-- @foreach ($pes as $pe)
                                      <option value="{{ $pe->id }}">{{ $pe->name }}</option>
                                  @endforeach --}}
                              </select>
                          </div>
                      </div>
                  </div>

              </div><!-- end of row -->

              <div class="row">

                  <div class="col-md-12">

                      <div class="table-responsive">

                          <table class="table datatable" id="admins-table" style="width: 100%;">
                              <thead>
                              <tr>
                                  <th>
                                      <div class="animated-checkbox">
                                          <label class="m-0">
                                              <input type="checkbox" id="record__select-all">
                                              <span class="label-text"></span>
                                          </label>
                                      </div>
                                  </th>
                                  <th>Gener</th>
                                  <th></th>
                                  <th>@lang('roles.roles')</th>
                                  <th>@lang('site.created_at')</th>
                                  <th>@lang('site.action')</th>
                              </tr>
                              </thead>

                                    @foreach ($pes as $pe)
                                    <tr>

                                <th>{{ $pe->name }}</th>
                                  <th> {{ $pe->gender->key  }}</th>
                                  <th></th>
                                  <th></th>
                                  <th></th>
                                  <th> 
                                        <button class="btn btn-primary"> 
                                                    <a  style="text-decoration:none ; color: white" href="/pe/edit/{{$pe->id}}">
                                                                Edite
                                                    </a>    
                                        </button>  
                                        <button class=" btn btn-success"> 
                                            <a  style="text-decoration:none ;color:azure ; " href="/pe/{{$pe->id  }}"> Show</a>    
                                        </button>   
                                </th>
                                    </tr>
                                      
                                  @endforeach         
                              
                          </table>

                      </div><!-- end of table responsive -->

                  </div><!-- end of col -->

              </div><!-- end of row -->

          </div><!-- end of tile -->

      </div><!-- end of col -->

  </div><!-- end of row -->


    </ul>

@endsection
