<?php

namespace App\GraphQL\Mutations;

use App\Models\Schedule;

final class CreateSchedule
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Schedule::create($args);
        return $post;
    }
}
