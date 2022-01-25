<?php

namespace App\Http\Livewire\Rakordata;

use App\Models\trdata;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class ApprovalData extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $searchTerms;

    public $activitytype, $kmcapai, $waktutempuh, $fileupload, $EditId;

    public function resetInputFields()
    {
        $this->activitytype = "";
        $this->kmcapai = "";
        $this->waktutempuh = "";
        $this->fileupload = "";
    }

    public function edit($uid)
    {
        $data = trdata::where('txtId',$uid)->first();
        $this->EditId = $uid;
        $this->activitytype = $data->txtTipe;
        $this->kmcapai = $data->floatData;
        $this->waktutempuh = $data->txtWaktuTempuh;
        $this->fileupload = $data->txtPhotoPath;
    }

    public function point($kmcapai, $type)
    {
        if($type == 'WALK' || $type == 'RUN'){
            return $kmcapai * 5;
        }
        return $kmcapai * 5 / 3;
    }

    public function update()
    {
        $data = trdata::where('txtId',$this->EditId)->first();
        $data->txtTipe = $this->activitytype;
        $data->floatData = $this->kmcapai;
        $data->txtWaktuTempuh = $this->waktutempuh;
        $data->floatPoint = $this->point($this->kmcapai,$this->activitytype);
        $data->save();

        $this->resetInputFields();
        $this->emit('hideModal',['id' => 'EditModal']);
        $this->alert('success', 'Data berhasil di Ubah', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    public function delete($id)
    {
        $data = trdata::find($id);
        $data->delete();
        $this->alert('success', 'Selamat Data berhasil di Hapus', [
            'position' => 'top-end',
            'timer' => '5000',
            'toast' => true,
            'timerProgressBar' => true,
        ]);
    }

    public function mount()
    {
        if (Auth::user()->txtRole !== 'ADMIN') {
            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.rakordata.approval-data',[
            'datas' => trdata::query()
            ->where('txtTipe', 'like', '%'.$this->searchTerms.'%')
            ->orWhereRelation('karyawan','txtFullname', 'like', '%'.$this->searchTerms.'%')
            ->orWhere('floatData', 'like', '%'.$this->searchTerms.'%')
            ->orWhere('txtWaktuTempuh', 'like', '%'.$this->searchTerms.'%')
            ->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
}
