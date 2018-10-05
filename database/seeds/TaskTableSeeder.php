<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task();
        $task->id = 1;
        $task->title = "Tạo project";
        $task->content = "Tạo project Laravel";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
        $task = new Task();
        $task->id = 2;
        $task->title = "Tạo migration";
        $task->content = "Tạo migration cho bảng categories";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
        $task = new Task();
        $task->id = 3;
        $task->title = "Tạo seeder";
        $task->content = "Tạo dữ liệu cho bảng categories";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
        $task = new Task();
        $task->id = 4;
        $task->title = "Câu lệnh if";
        $task->content = "Câu lệnh if trong Laravel";
        $task->due_date = "2018-09-26";
        $task->image  = "";
        $task->save();
    }
}
