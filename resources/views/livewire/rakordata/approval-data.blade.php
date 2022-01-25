<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Record List</h4>
                    <div class="row justify-content-end">
                        {{-- <div class="col-12 col-md-9 py-3">
                        </div> --}}
                        <div class="col-12 col-sm-3">
                            <input type="text" class="form-control form-control-sm" id="search" placeholder="Search" wire:model="searchTerms">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Karyawan</th>
                                    <th>Aktivitas</th>
                                    <th>KM Capaian</th>
                                    <th>Waktu Tempuh</th>
                                    <th>Capture Aplikasi</th>
                                    <th>Di buat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $data->karyawan->txtFullname }}</td>
                                    <td>{{ $data->txtTipe }}</td>
                                    <td>{{ $data->floatData }}</td>
                                    <td>{{ $data->txtWaktuTempuh }}</td>
                                    <td>
                                        @if ($data->txtPhotoPath)
                                        <img src="{{ asset($data->txtPhotoPath) }}" style="height: 60px; width:60px; border-radius:0;">
                                        @else
                                        <img src="{{ asset('images/no-image.png') }}" style="height: 60px; width:60px; border-radius:0;">
                                        @endif
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($data->dtnInsertedDate)->diffforhumans() }}
                                    </td>
                                    <td>
                                        <button wire:click.prevent="edit('{{$data->txtId}}')" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#EditModal">
                                            Edit                        
                                        </button>
                                        <button  wire:click="$emit('triggerDelete','{{$data->txtId}}')" class="btn btn-sm btn-outline-danger">
                                            Take Out                        
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <img class="img-fluid" src="{{ asset('images/add.png') }}" alt="No Data Found" style="width: 200px; height:200px;">
                                        <span class="d-block">Data Not Found!</span>
                                    </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="my-4">
                            {{ $datas->links('livewire::bootstrap') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div wire:ignore.self class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="EditModalLabel">Edit Activity Sportivity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-add">
                        <div class="form-group">
                            <label for="activitytype">Aktivitas</label>
                            <select class="form-control" id="activitytype" wire:model="activitytype">
                                <option value="WALK">WALK</option>
                                <option value="RUN">RUN</option>
                                <option value="BIKE">BIKE</option>
                            </select>
                            @error('activitytype') <p class="card-description text-danger my-1">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="kmcapai">KM Capaian Aktivitas</label>
                            <input class="form-control" id="kmcapai" wire:model="kmcapai" />
                            <small id="kmcapaiHelp" class="form-text text-muted">dalam KM, menggunakan "." (Titik).</small>
                            @error('kmcapai') <p class="card-description text-danger my-1">{{ $message }}</p> @enderror
                        </div>
                        <div class="form-group">
                            <label for="waktutempuh">Waktu Tempuh</label>
                            <input class="form-control" id="waktutempuh" wire:model="waktutempuh" />
                            <small id="waktutempuhHelp" class="form-text text-muted">dalam menit dan detik, contoh: 30m25s.</small>
                            @error('waktutempuh') <p class="card-description text-danger my-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <img src="{{ asset($fileupload) }}" alt="{{ asset($fileupload) }}" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="update">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript" defer>
        Livewire.on('hideModal', id => {
            $('#' + id.id).modal('hide');
        });

        document.addEventListener('DOMContentLoaded', function () {
            @this.on('triggerDelete', Id => {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'Conatct record will be deleted!',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Delete!'
                }).then((result) => {
                //if user clicks on delete
                    if (result.value) {
                // calling destroy method to delete
                        @this.call('delete',Id)
                // success response
                        Swal.fire({title: 'Contact deleted successfully!', icon: 'success'});
                    } else {
                        Swal.fire({
                            title: 'Cancelled!',
                            icon: 'success'
                        });
                    }
                });
            });
        });
    </script>
@endpush