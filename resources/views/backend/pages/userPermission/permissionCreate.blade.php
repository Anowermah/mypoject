@extends('backend.layouts.master',['elementActive' => 'permission'])

@section('title','Add Permission | myStarterLaravel')

@section('main_content')
<form role="form" method="post" action="{{route('permission.store')}}">
  @csrf
  <input type="hidden" name="role_id" value="{{$role->id}}">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Permission for {{$role->name}}</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @if(!empty($operationArr))
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @foreach ($operationArr as $moduleName => $operationsByModule)
        <?php $module_name = !empty($moduleName) ? ucwords(str_replace('_', ' ', $moduleName)) : ''; ?>
          <div class="row">
              <div class="col-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">{{$module_name}}</h3>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    @if(!empty($operationArr[$moduleName]))
                                    @foreach($operationArr[$moduleName] as $operations)

                                    <th class="text-center">{{$operations['operation']}}</th>
                                    @endforeach
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">{{$module_name}}</td>
                                    @if(!empty($operationArr[$moduleName]))
                                    @foreach($operationArr[$moduleName] as $operations)
                                    <td class="text-center">
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox" name="accessArr[{{$operations['module_id']}}][{{$operations['id']}}]" id="checkboxPrimary{{$operations['id']}}" <?php if (in_array($operations['id'], $roleWisePermission)) echo "checked" ?>>
                                            <label for="checkboxPrimary{{$operations['id']}}">
                                            </label>
                                        </div>
                                    </td>
                                    @endforeach
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                  </div>
                  <!-- /.card-body -->
                  
                </div>
                <!-- /.card -->
              </div>
          </div>
    
          
        @endforeach
        <div class="card-footer">
          <a href="#" class="btn btn-default">Cancel</a>
          <button type="submit" class="btn btn-info float-right">Save</button>
        </div>

        

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endif

</form>
@endsection

@push('css')

@endpush

@push('scripts')

@endpush
