<?php

namespace App\Http\Livewire;

use App\Models\mgroup;
use App\Models\trdata;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use GuzzleHttp\Client;

class Dashboard extends Component
{
    public $locationWeather, $weather;
    public $grupLabel, $dataGrafik;

    public function weather()
    {
        $client = new Client();
        $url = "https://community-open-weather-map.p.rapidapi.com/weather";

        $query = [
            'q' => 'karawang,indonesia',
        ];

        $headers = [
            'x-rapidapi-host' => 'community-open-weather-map.p.rapidapi.com',
	        'x-rapidapi-key' => '0bef73f355msh7869108f5ac86f0p1cceaejsna90a0d59f83f'
        ];

        $response = $client->request('GET', $url, [
            'query' => $query,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        if($responseBody){
            $this->locationWeather = $responseBody->name;
            $this->weather = $responseBody->weather;
        }
    }

    public function AchimentAllGroup()
    {
        // Label
        $grup = mgroup::all();
        $grupLabel = [];

        foreach ($grup as $key => $value) {
            $grupLabel[] = $value->txtGroup;
        }
        $this->grupLabel = $grupLabel;

        // data point Actual
        $pointGrup = collect();
        $point = collect();
        $data = trdata::all();
        foreach ($data as $key => $value) {
            $pointGrup[] = $value->karyawan->group->get(['txtGroup']);
            $point[] = ['value' => $value->floatPoint,'group' => $value->karyawan->group->txtGroup];
        }

        $y = $point->groupBy('group')->map(function($a){
                $v = [];
                $g = [];
                foreach ($a as $key => $val) {
                    $v[] = $val['value'];
                    $g[] = $val['group'];
                }
                return array_sum($v);
            });
        
        $y = collect($y)->sortDesc();
        
        $this->dataGrafik = $y;
        // $this->grupLabel = $grupLabel;
    }

    public function render()
    {
        // dd(bcrypt('kalbe22'));
        $this->weather();
        $this->AchimentAllGroup();
        $data = trdata::where('txtIdUser',Auth::user()->txtId)->get();
        $totalPoint = 0;
        $totalKM = 0;
        $RunKM = 0;
        $WalkKM = 0;
        $BikeKM = 0;
        $RunPoint = 0;
        $BikePoint = 0;
        $WalkPoint = 0;

        foreach ($data as $key => $value) {
            $totalPoint += $value->floatPoint;
            $totalKM += $value->floatData;
        }

        $pemisahan = collect($data)->groupBy('txtTipe');

        if(!empty($pemisahan['RUN'])){
            foreach ($pemisahan['RUN'] as $key => $value) {
                $RunPoint += $value->floatPoint;
                $RunKM += $value->floatData;
            }
        }
        if(!empty($pemisahan['WALK'])){
            foreach ($pemisahan['WALK'] as $key => $value) {
                $WalkPoint += $value->floatPoint;
                $WalkKM += $value->floatData;
            }
        }
        if(!empty($pemisahan['BIKE'])){
            foreach ($pemisahan['BIKE'] as $key => $value) {
                $BikePoint += $value->floatPoint;
                $BikeKM += $value->floatData;
            }
        }
        // dd($pemisahan, $RunPoint, $RunKM);
        return view('livewire.dashboard',[
            'dataRakor' => trdata::where('txtIdUser',Auth::user()->txtId)
            ->orderBy('created_at', 'desc')->paginate(5),
            'totalPoint' => $totalPoint,
            'totalKM' => $totalKM,
            'RunKM' => $RunKM,
            'WalkKM' => $WalkKM,
            'BikeKM' => $BikeKM,
            'RunPoint' => $RunPoint,
            'WalkPoint' => $WalkPoint,
            'BikePoint' => $BikePoint,
        ]);
    }
}
