<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Models\Role;
use App\Models\Module;
use App\Models\Module_operation;
use App\Models\Role_to_access;

class RolePermissionController extends Controller
{
    public function roleList()
    {
        $roles = Role::orderBy('id','desc')->get();
        return view('backend.pages.userManagement.role',compact('roles'));
    }

    public function roleStore(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'name' => 'required|string|max:150',

        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->save();

        $notification = array(
            'message' => 'User Role Successfully Inserted',
            'alert-type' => 'success'
        );

        return Redirect::route('role.index')->with($notification);

    }
    public function roleEdit($id){
        $role = Role::find($id);

	    return response()->json([
	      'data' => $role
	    ]);

    }

    public function roleUpdate(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'name' => 'required|string|max:150',

        ]);

        $role = Role::find($request->id);
        $role->name = $request->name;
        $role->update();

        $notification = array(
            'message' => 'User Role Successfully Updated',
            'alert-type' => 'success'
        );

        return Redirect::route('role.index')->with($notification);

    }


    public function roleDestroy($id){
        $role = Role::find($id);
        $role->delete();

        $notification = array(
            'message' => 'User Role Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect::route('role.index')->with($notification);

    }

    // Only for Developer module Permission code Start
    public function moduleList()
    {
        $modules = Module::orderBy('id','desc')->get();
        return view('backend.pages.userManagement.module',compact('modules'));
    }

    public function moduleStore(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'name' => 'required|string|max:150',

        ]);

        $module = new Module();
        $module->name = $request->name;
        $module->save();

        $notification = array(
            'message' => 'Module Successfully Inserted',
            'alert-type' => 'success'
        );

        return Redirect::route('module.index')->with($notification);

    }

    public function moduleEdit($id){
        $role = Module::find($id);

	    return response()->json([
	      'data' => $role
	    ]);

    }

    public function moduleUpdate(Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'name' => 'required|string|max:150',

        ]);

        $module = Module::find($request->id);
        $module->name = $request->name;
        $module->update();

        $notification = array(
            'message' => 'Module Successfully Updated',
            'alert-type' => 'success'
        );

        return Redirect::route('module.index')->with($notification);

    }


    public function moduleDestroy($id){
        $module = Module::find($id);
        $module->delete();

        $notification = array(
            'message' => 'Module Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect::route('module.index')->with($notification);

    }

    public function moduleOperationList($module_id)
    {
        $module_info = Module::find($module_id);
        $module_operations = Module_operation::orderBy('id','desc')->where('module_id',$module_id)->get();
        return view('backend.pages.userManagement.module_operation',compact('module_operations','module_id','module_info'));
    }

    public function moduleOperationAdd($module_id,Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'operation' => 'required|string|max:150',
            'route' => 'required|string|max:150',
        ]);

        $module_operation = new Module_operation();
        $module_operation->module_id = $module_id;
        $module_operation->operation = $request->operation;
        $module_operation->route = $request->route;
        $module_operation->save();

        $notification = array(
            'message' => 'Module Oparation Successfully Inserted',
            'alert-type' => 'success'
        );

        return Redirect::route('module.operationList',$module_id)->with($notification);

    }

    public function moduleOperationEdit($id){
        $module_operation = Module_operation::find($id);

	    return response()->json([
	      'data' => $module_operation
	    ]);

    }

    public function moduleOperationUpdate($module_id,Request $request){
        //dd($request->all());
        //Validation
        $this->validate($request,[
            'operation' => 'required|string|max:150',
            'route' => 'required|string|max:150',

        ]);

        $module_operation = Module_operation::find($request->id);
        $module_operation->module_id = $module_id;
        $module_operation->operation = $request->operation;
        $module_operation->route = $request->route;
        $module_operation->update();

        $notification = array(
            'message' => 'Module Oparation Successfully Updated',
            'alert-type' => 'success'
        );

        return Redirect::route('module.operationList',$module_id)->with($notification);

    }

    public function moduleOperationDelete($module_id, $id){
        $module_operation = Module_operation::find($id);
        $module_operation->delete();

        $notification = array(
            'message' => 'Module Oparation Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect::route('module.operationList',$module_id)->with($notification);

    }



    // Only for Developer module Permission code End

    public function permissionIndex()
    {
        $roles = Role::orderBy('id','desc')->get();
        return view('backend.pages.userPermission.permissionIndex',compact('roles'));
    }

    public function permissionCreate($role_id){
        $operationList = Module_operation::orderBy('id','desc')->get();

        $operationArr = [];

        if($operationList->isNotEmpty()){
            foreach($operationList as $operation){
                $operationArr[$operation->module->name][$operation->id]['id'] = $operation->id;
                $operationArr[$operation->module->name][$operation->id]['name'] = $operation->module->name;
                $operationArr[$operation->module->name][$operation->id]['module_id'] = $operation->module_id;
                $operationArr[$operation->module->name][$operation->id]['operation'] = $operation->operation;
                $operationArr[$operation->module->name][$operation->id]['route'] = $operation->route;
            }
        }

        //dd($operationArr);

        $roleWisePermission = Role_to_access::where('role_id', $role_id)->pluck('module_operation_id')->toarray();

        //dd($roleWisePermission);

        $role = Role::find($role_id);

        return view('backend.pages.userPermission.permissionCreate',compact('operationArr', 'roleWisePermission', 'role'));


    }

    public function permissionStore(Request $request) {

        $data = [];
        $i = 0;
        if (!empty($request->accessArr)) {
            foreach ($request->accessArr as $moduleId => $targets) {
                foreach ($targets as $operationId => $target) {
                    $data[$i]['role_id'] =  $request->role_id;
                    $data[$i]['module_id'] = $moduleId;
                    $data[$i]['module_operation_id'] = $operationId;
                    $i++;
                }
            }
        }

        Role_to_access::where('role_id', $request->role_id)->delete();

        if (Role_to_access::insert($data)) {

            $notification = array(
                'message' => 'Module Oparation Successfully Deleted',
                'alert-type' => 'success'
            );
            //return Redirect::route('permission.index')->with($notification);
            return redirect()->back()->with($notification);
        }
    }


}
