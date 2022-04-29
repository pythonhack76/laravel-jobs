<?php

namespace App\Models;


class Listing {
    public static function all() {
        return [

            [
                'id' => 1,
                'title' => 'listing one',
                'description' => 'lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Ratione iusto voluptates sequi, dignissimos praesentium velit quae repellat ab tenetur,
                 illum saepe suscipit minus distinctio? Itaque sit sequi consequuntur cum possimus! '
            ],
            [
                'id' => 2,
                'title' => 'listing Two',
                'description' => 'lorem Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Ratione iusto voluptates sequi, dignissimos praesentium velit quae repellat ab tenetur,
                 illum saepe suscipit minus distinctio? Itaque sit sequi consequuntur cum possimus! '
            ]

            ];
    }
}
