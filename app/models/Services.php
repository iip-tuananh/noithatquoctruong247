<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = "services";
    public function saveServices($request)
    {
    	$id = $request->id;
        if($id != ""){
            $query = Services::where([
                'id' => $id
             ])->first();
            if ($query) {
                $query->name = $request->name;
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = json_encode($request->image);
                $query->slug = to_slug($request->name);
                $query->save();
            }else{
                $query = new Services();
                $query->name = $request->name;
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = $request->image;
                $query->slug = to_slug($request->name);
                $query->save();
            }
            
        }else{
                $query = new Services();
                $query->name = $request->name;
                $query->content = json_encode($request->content);
                $query->description = json_encode($request->description);
                $query->status = $request->status;
                $query->image = json_encode($request->image);
                $query->slug = to_slug($request->name);
                $query->save();
            
        }
        return $query;
    }
}
