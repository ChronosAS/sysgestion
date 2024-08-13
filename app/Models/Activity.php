<?php

namespace App\Models;

use Spatie\Activitylog\Models\Activity as OriginalActivity;

class Activity extends OriginalActivity
{
    public function getDescriptionAttribute(string $eventName): string
    {
        $subject = ($this->subject->name) ? $this->subject->name : $this->subject_id;
        $model = strtolower(basename($this->subject_type));
        $route = route($model.'.show',$this->subject_id);
        $subjectLink = "<a href=$route wire:navigate class='font-medium text-blue-600 hover:underline'>".$subject."</a>";

        return "Se ha ".trans('logs.'.$eventName).' '.trans('logs.models.'.$this->subject_type).' '.$subjectLink;
    }
}
