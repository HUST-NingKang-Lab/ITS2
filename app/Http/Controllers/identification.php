<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;
use SSH;
use Symfony\Component\HttpFoundation\JsonResponse;

class identification extends Controller
{
    public function submit(Request $request)
    {
        $seq = $request->input('seq');
        $species = $request->input('species');
        $database = $request->input('database');
        $searchMethod = $request->input('searchMethod');
        $data = json_encode(array(
            'seq' => $seq,
            'species' => $species,
            'database' => $database,
            'searchMethod' => $searchMethod,
        ));
        $task_hash = md5($data);
        Redis::lpush('ITS2_task_list', $data);
        Redis::publish('ITS2_task', 'new task');
        return $task_hash;
    }

    public function getResult($task_hash)
    {
        $path = "/home/its/web_processing/" . $task_hash . "/";

        if (file_exists($path .  "identification_result.txt")){
            $identification_result = file_get_contents($path . "identification_result.txt");
            $genus_abd = file_get_contents($path . "genus_abundance_table.txt");
            $genus_pie = file_get_contents($path . "genus_abd_top_table.txt");
            $species_abd = file_get_contents($path . "species_abundance_table.txt");
            $species_pie = file_get_contents($path . "species_abd_top_table.txt");
            $res = [
                'identification_result' => $identification_result,
                'genus_abd' => $genus_abd,
                'genus_pie' => $genus_pie,
                'species_abd' => $species_abd,
                'species_pie' => $species_pie,
            ];
            return JsonResponse::create($res);

        }else{
            return '';
        }
//        if (Redis::hget($task_hash,'identification_result')) {
//            $res = [
//                   'identification_result' => Redis::hget($task_hash,'identification_result'),
//                   'genus_abd' => Redis::hget($task_hash,'genus_abd'),
//                   'genus_pie' => Redis::hget($task_hash,'genus_pie'),
//                   'species_abd' => Redis::hget($task_hash,'species_abd'),
//                   'species_pie' => Redis::hget($task_hash,'species_pie'),
//               ];
//            return JsonResponse::create($res);
//        }
////        return Redis::hget($task_hash,'identification_result');
//        $path = "/home/its/web_processing/" . $task_hash . "/";
//        $command = "[ -d /home/its/web_processing/" . $task_hash . " ] && echo true || echo false";
//        SSH::run($command, function ($line) use ($path, $task_hash) {
//            $res = $line . PHP_EOL;
//            if (strpos($res, 'true') == 0) {
//                $identification_result = SSH::into('production')->getString($path . "identification_result.txt",'identification_result.txt');
//                $genus_abd = SSH::into('production')->getString($path . "genus_abundance_table.txt",'genus_abundance_table.txt');
//                $genus_pie = SSH::into('production')->getString($path . "genus_abd_top_table.txt",'genus_abd_top_table.txt');
//                $species_abd = SSH::into('production')->getString($path . "species_abundance_table.txt",'species_abundance_table.txt');
//                $species_pie = SSH::into('production')->getString($path . "species_abd_top_table.txt",'species_abd_top_table.txt');
//                Redis::hset($task_hash,'identification_result',$identification_result);
//                Redis::hset($task_hash,'genus_abd',trim($genus_abd));
//                Redis::hset($task_hash,'genus_pie',trim($genus_pie));
//                Redis::hset($task_hash,'species_abd',trim($species_abd));
//                Redis::hset($task_hash,'species_pie',trim($species_abd));
////                var_dump($identification_result);
//            }
//        });
//        return JsonResponse::create([]);
    }
}
