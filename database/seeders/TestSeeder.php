<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\ClassRoom;
use App\Models\Comments;
use App\Models\File;
use App\Models\Posts;
use App\Models\Status;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $username = [
            [
                'name'      => 'Name',
                'email'     => 'email@email.com',
                'password'  => 'password',
                'status_id' => 1,
            ]
        ];


        $Classroom = [
            [
                'class_name' => 'class_name',
                'class_code' => 'xxxx',
                'class_link' => 'xxxlll',
                'user_id' => 1,
            ]
        ];


        $Post = [
            [
                'post_detail' => 'post_detail',
            ]
        ];


        $com = [
            [
                'com_detail' => 'com_detail',
            ]
        ];

        $status = [
            [
                'status_name' => 'ครู',
            ]
        ];

        $file = [
            [
                'file_Patch' => 'file_Patch/file_Patch/file_Patch.xxx',
            ]
        ];


        // foreach($username as $userx){
        //     $user = new User();
        //     $user->name = $userx['name'];
        //     $user->email = $userx['email'];
        //     $user->password = $userx['password'];
        //     $user->status_id = $userx['status_id'];
        //     $user->save();
        // }

        // foreach($Classroom as $classx){
        //     $class = new ClassRoom();
        //     $class->class_name  = $classx['class_name'];
        //     $class->class_code  = $classx['class_code'];
        //     $class->class_link  = $classx['class_link'];
        //     $class->user_id     = 1;
        //     $class->save();
        // }

        // foreach($Post as $posts){
        //     $p = new Posts();
        //     $p->post_detail = $posts['post_detail'];
        //     $p->post_user_id = 1;
        //     $p->class_id = 1;
        //     $p->save();
        // }

        // foreach($com as $coms){
        //     $c = new Comments();
        //     $c->com_detail = $coms['com_detail'];
        //     $c->post_id = 1;
        //     $c->com_user_id = 1;
        //     $c->save();
        // }

        // foreach($status as $sta){
        //     $s = new Status();
        //     $s->status_name = $sta['status_name'];
        //     $s->save();
        // }

        foreach($file as $fi){
            $f = new File();
            $f->file_Patch = $fi['file_Patch'];
            $f->post_id = 1;
            $f->save();
        }



    }
}
