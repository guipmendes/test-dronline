<?php

namespace App\GraphQL\Mutations;

use App\Models\Suggestion;

final class CreateSuggestion
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Suggestion::create($args);
        return $post;
    }
}
