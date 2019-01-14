<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\Resource;

class ProjectResource extends Resource
{
    public function toArray($request)
    {
        return $this->resource->map(function ($item){
            return [
                'project' =>$item->name
            ];
        });
    }
}
