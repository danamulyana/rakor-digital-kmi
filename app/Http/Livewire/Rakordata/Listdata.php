<?php

namespace App\Http\Livewire\Rakordata;

use App\Models\trdata;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Listdata extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $searchTerms;

    public $activitytype, $kmcapai, $waktutempuh, $fileupload;

    public function resetInputFields()
    {
        $this->activitytype = "";
        $this->kmcapai = "";
        $this->waktutempuh = "";
        $this->fileupload = "";
    }

    public function activityBtn($type)
    {
        $this->activitytype = $type;
    }

    public function point($kmcapai, $type)
    {
        if($type == 'WALK' || $type == 'RUN'){
            return $kmcapai * 5;
        }
        return $kmcapai * 5 / 3;
    }

    public function add()
    {
        $this->validate([
            'kmcapai' => 'required|numeric',
            'waktutempuh' => 'required',
            'fileupload' => 'required|mimes:png,jpg,jpeg',
        ],[
            'kmcapai.required' => ':attribute Wajib di isi.',
            'waktutempuh.required' => ':attribute Wajib di isi.',
            'fileupload.required' => ':attribute Wajib di isi.',
            'fileupload.mimes' => ':attribute File yang anda upload tidak bisa.',
        ],[
            'kmcapai' => 'KM Capai',
            'waktutempuh' => 'Waktu Tempuh',
            'fileupload' => 'File Upload',
        ]);

        $data = new trdata();
        $data->txtIdUser = Auth::user()->txtId;
        $data->txtTipe = $this->activitytype;
        $data->floatData = $this->kmcapai;
        $data->txtWaktuTempuh = $this->waktutempuh;
        $data->dtnInsertedDate = Carbon::now();
        $data->floatPoint = $this->point($this->kmcapai,$this->activitytype);
        $path = $this->fileupload->storeAs('public/files',time().'-'.$this->fileupload->getClientOriginalName());
        $data->txtPhotoPath = 'storage/files/'.time().'-'.$this->fileupload->getClientOriginalName();
        $data->save();

        $this->resetInputFields();
        $this->emit('hideModal',['id' => 'addModal']);
        $this->alert('success', 'Data berhasil di Ubah', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }
    public function render()
    {
        return view('livewire.rakordata.listdata',[
            'datas' => trdata::query()->where('txtIdUser',Auth::user()->txtId)
            // ->orWhere('txtTipe', 'like', '%'.$this->searchTerms.'%')
            // ->orWhere('floatData', 'like', '%'.$this->searchTerms.'%')
            // ->orWhere('txtWaktuTempuh', 'like', '%'.$this->searchTerms.'%')
            ->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
    public function updatedSearchTerms()
    {
        $this->resetPage();
    }
}
