<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Symfony\Component\Console\Command\DumpCompletionCommand;

class ContentController extends Controller
{

    private $path_stroage = " Content";

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


    public function index(){
        $Content = Content::Paginate(4);
        return view('admin.Content.index',compact('Content'));
    }

    public function contentform(){
        return view('admin.Content.create');
    }

    public function insert(Request $request, Content $content)
    {

        if( !empty($request->file('image')) )
        {
            $imageName = $this->Random().'.'.$request->image->extension();
            $request->image->storeAs('Content', $imageName);
        }else{
            $imageName = null;
        }

        $content->create([

            "name" => $request->name,
            "image" => $imageName,
            "detail" => $request->detail,

        ]);

        // $menu->id_type = $request->id_type;
        // $menu->name = $request->name;
        // $menu->price = $request->price;
        // $menu->detail = $request->detail;
        // $menu->save();

        toast('บันทึกข้อมูลสำเร็จ','success');
        return redirect()->route('Content.index');

    }

    public function edit($id)
    {
        $Content = Content::find($id);
        return view('admin.Content.editform', compact('Content'));
    }

    public function update($id, Request $request, Content $Content)
    {

        // $Content = Content::find($id);
        // $Content->name = $request->name;
        // $Content->detail = $request->detail;
        // $Content->image = $request->image;
        // $Content->update();

        if( !empty($request->file('image')) ){

            $check = $Content->where('id', $id)->first();

            if(!empty($check->image))
            {
                $path = public_path().'/'.$this->path_stroage.'/'.$check->image;
                if( file_exists($path) ):
                    unlink($path);
                endif;
            }

            $imageName = $this->Random().'.'.$request->image->extension();
            $request->image->storeAs('Content', $imageName);

            $Content->find($id)->update([

                "name" => $request->name,
                "image" => $imageName,
                "detail" => $request->detail

            ]);

        }else{

            $Content->find($id)->update([

                "name" => $request->name,
                "detail" => $request->detail

            ]);

        }

        toast('update ข้อมูลสำเร็จ', 'success');

        return redirect()->route('Content.index');

    }



    public function delete($id)
    {

        $Content = Content::find($id);
        $Content-> delete();
        toast('ลบข้อมูลสำเร็จ','success');

        return redirect()->route('Content.index');

    }
}
