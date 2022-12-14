<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Controllers\Admin\Content;
use App\Models\Type;
use Symfony\Component\Console\Command\DumpCompletionCommand;

class MenuController extends Controller
{

    private $path_stroage = "Menu";

    public function Random()
    {

        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for($i = 0; $i < $length; $i++):
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        endfor;

        return $randomString."_".time();

    }

    public function index()
    {
        $Menu = Menu::Paginate(4);
        return view('admin.Menu.index',compact('Menu'));
    }

    public function Menuform()
    {
        $type = Type::Paginate(4);
        return view('admin.Menu.create', compact('type'));
    }


    public function insert(Request $request, Menu $menu)
    {

        if( !empty($request->file('image')) )
        {
            $imageName = $this->Random().'.'.$request->image->extension();
            $request->image->storeAs('Menu', $imageName);
        }else{
            $imageName = null;
        }

        $menu->create([

            "id_type" => $request->id_type,
            "name" => $request->name,
            "image" => $imageName,
            "price" => $request->price,
            "detail" => $request->detail,

        ]);

        // $menu->id_type = $request->id_type;
        // $menu->name = $request->name;
        // $menu->price = $request->price;
        // $menu->detail = $request->detail;
        // $menu->save();

        toast('บันทึกข้อมูลสำเร็จ','success');
        return redirect()->route('Menu.index');

    }

    public function edit($id)
    {

        $manu = Menu::find($id);
        $type =  Type::all();

        return view('admin.Menu.editform',compact('manu', 'id', 'type'));

    }

    public function update($id, Request $request, Menu $menu)
    {

        if( !empty($request->file('image')) ){

            $check = $menu->where('id', $id)->first();

            if(!empty($check->image))
            {
                $path = public_path().'/'.$this->path_stroage.'/'.$check->image;
                if( file_exists($path) ):
                    unlink($path);
                endif;
            }

            $imageName = $this->Random().'.'.$request->image->extension();
            $request->image->storeAs('Menu', $imageName);

            $menu->find($id)->update([

                "id_type" => $request->id_type,
                "name" => $request->name,
                "image" => $imageName,
                "price" => $request->price,
                "detail" => $request->detail

            ]);

        }else{

            $menu->find($id)->update([

                "id_type" => $request->id_type,
                "name" => $request->name,
                "price" => $request->price,
                "detail" => $request->detail

            ]);

        }

        toast('update ข้อมูลสำเร็จ', 'success');

        return redirect()->route('Menu.index');

    }

    public function delete($id, Menu $menu)
    {

        $check = $menu->where('id', $id)->first();

        if(!empty($check->image)){
            $path = public_path().'/'.$this->path_stroage.'/'.$check->image;
            if( file_exists($path) ):
                unlink($path);
            endif;
        }

        $menu->find($id)->delete();

        toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('Menu.index');

    }

}
