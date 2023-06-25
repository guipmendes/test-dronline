<?php

namespace App\GraphQL\Mutations;

use App\Models\Beneficiarie;

final class CreateBeneficiarie
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = Beneficiarie::create($args);
        return $post;
    }
}
