<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mst_prefecture;
use App\Http\Requests\MstPrefectureStoreFromRequest;
use App\Http\Resources\Mst_prefecture as Mst_prefectureResource;

class MstPrefectureController extends Controller
{
    public function index(){
        $prefectures=Mst_prefecture::paginate(10);
        return Mst_prefectureResource::collection($prefectures);
    }

    public function store(MstPrefectureStoreFromRequest $request){

        return ;
    }

}
