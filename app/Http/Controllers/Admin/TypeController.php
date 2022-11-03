<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use Symfony\Component\Console\Command\DumpCompletionCommand;

class TypeController extends Controller
{

    public function index()
    {
        $Type = Type::Paginate(8);
        return view('admin.Type.index',compact('Type'));
    }

    public function Typeform()
    {
        return view('admin.Type.create');
    }

    public function insert(Request $request)
    {
        $type = new Type();
        $type->name = $request->name;
        $type->save();
        toast('บันทึกข้อมูลสำเร็จ','success');
        return redirect()->route('Type.index');
    }

    public function edit($id)
    {
        $types = new Type;
        $item = $types->find($id);

        if(!empty($item)){
            return view('admin.Type.editform', compact('item', 'id'));
        }else{
            return redirect()->route('admin');
        }

    }

    public function update($id, Request $request, Type $type)
    {

        $type->where('id', $id)
            ->update([
                'name' => $request->name
            ]);

        toast('update ข้อมูลสำเร็จ','success');

        return redirect()->route('Type.index');

    }

    public function delete($id)
    {
        $Content = Type::find($id);
        $Content-> delete();
        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('Type.index');
    }

}
