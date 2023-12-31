<?php

namespace App\Http\Resources;

use App\Helpers\ImageHelper;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
                                                   // reports/gC3XYuWiGjDr97nU0DkVg2PE7UH2F2fORUk1Z9kI.jpg
            'image' => ImageHelper::getDiskImageUrl($this->getImagePath()),
            'state' => $this->state,
            'created_by' => new UserResource($this->user),
            'created_at' => $this->created_at->toDateTimeString(),
        ];


    }
}
