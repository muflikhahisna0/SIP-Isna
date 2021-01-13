<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `users` (`id`, `role_id`, `name`,`username`,`email`,`password`) VALUES
        (1, 1,'muflikhah','muflikhah','muflikhah@gmail.com','111'),
        (2, 1,'isna','isna','isna@gmail.com','aaa'),
        (3, 1,'nur','nur','nur@gmail.com','bbb'),
        (4, 1,'aini','aini','aini@gmail.com','ccc'),
        (5, 1,'inas','inas','inas@gmail.com','ddd'),
        (6, 1,'azmi','azmi','azmi@gmail.com','eee'),
        (7, 2, 'aulia','aulia','aulia@gmail.com','fff'),
        (8, 2, 'nisa','nisa','nisa@gmail.com','ggg'),
        (9, 2, 'dalilah','dalilah','dalilah@gmail.com','hhh'),
        (10, 2, 'raihana','raihana','raihana@gmail.com','iii');");
    }
}
