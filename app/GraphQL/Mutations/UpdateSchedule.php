<?php

namespace App\GraphQL\Mutations;

use App\Models\Schedule;

final class UpdateSchedule
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Schedule::upsert($args);
        return $post;
    }
}
