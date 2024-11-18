<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EuroController extends Controller
{
    public function index(){
        $builder = DB::table("euro2024");
        $data = [
            "title" => "Főoldal",
            "items" => $builder->paginate(6)
        ];

        $builder->orderByDesc("played");
        $builder->limit(2);
        $data["final"] = $builder->get();

        return view("euro2024.index", $data);
    }

    public function hungary(){
        $builder = DB::table("euro2024");
        $builder->where("nation", "Magyarország");
        $data = [
            "title" => "Magyarország",
            "hungary" => $builder->get()
        ];

        return view("euro2024.hungary", $data);
    }

    public function nations(){
        $builder = DB::table("euro2024");
        $builder->where("nation", "like", "%ország")->orderBy("nation");
        
        $builder2 = DB::table("euro2024");
        $builder2->where("nation", "not like", "%ország")->orderBy("nation");
        $data = [
            "title" => "Országok",
            "contains" => $builder->get(),
            "notContains" => $builder2->get()
        ];

        return view("euro2024.nations", $data);
    }

    public function groups(string $group){
        $builder = DB::table("euro2024");
        $builder->select("nation", "won", "lost", "drawn")->where("group", $group);
        $data = [
            "title" => "Csoport ".$group,
            "teams" => $builder->get()
        ];

        return view("euro2024.groups", $data);
    }

    public function statistics(){
        $data = [
            "title" => "Statisztikák",
        ];
        $builder = DB::table("euro2024");
        $data["avgGoals"] = $builder->avg("goals");

        $builder2 = DB::table("euro2024");
        $data["minGoals"] = $builder2->orderBy("goals")->limit(1)->get();
        
        $builder3 = DB::table("euro2024");
        $data["mostGoalsF"] = $builder3->where("group", "F")->orderByDesc("goals")->limit(1)->get();
        
        $builder4 = DB::table("euro2024");
        $data["wonThree"] = $builder4->where("won", ">=", 3)->count();
        
        $builder5 = DB::table("euro2024");
        $data["drawnCount"] = $builder5->where("drawn", ">", 0)->count();
        
        return view("euro2024.statistics", $data);
    }
}
