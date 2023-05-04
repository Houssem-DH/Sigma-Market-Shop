<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PaginateOption;


class MemberController extends Controller
{
    public function index()
    {
        $paginate_options=PaginateOption::first();
        $users=User::paginate($paginate_options->n_member_admin);
        return view('admin.members.index', compact('users'));
    }

    public function edit($id)
    {
        $users=User::find($id);
        return view('admin.members.edit', compact('users'));
    }

    public function update(Request $request,$id)
    {
        $users=User::find($id);


        $users->role_as=$request->input('role_as') == TRUE?'2':'0';


        $users->update();
        return redirect()->route('members')->with('status','Member Updated Successfully');

    }

    public function destroy($id)
    {
        $users=User::find($id);


        $users->delete();
        return redirect()->route('members')->with('status1','Member Deleted Successfully');
    }

}
