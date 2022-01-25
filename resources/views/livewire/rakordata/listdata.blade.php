<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Record List</h4>
                    <div class="row">
                        <div class="col-12 col-sm-3 py-2">
                            <button type="button" class="btn btn-sm btn-block btn-success btn-icon-text" data-toggle="modal" data-target="#addModal" wire:click="activityBtn('WALK')">
                                <i class="las la-walking btn-icon-prepend"></i>                                             
                                add walking activity
                            </button>
                        </div>
                        <div class="col-12 col-sm-3 py-2">
                            <button type="button" class="btn btn-sm btn-block btn-success btn-icon-text" data-toggle="modal" data-target="#addModal" wire:click="activityBtn('RUN')">
                                <i class="las la-running btn-icon-prepend"></i>                                            
                                add running activity
                            </button>
                        </div>
                        <div class="col-12 col-sm-3 py-2">
                            <button type="button" class="btn btn-sm  btn-block btn-success btn-icon-text" data-toggle="modal" data-target="#addModal" wire:click="activityBtn('BIKE')">
                                <i class="las la-bicycle btn-icon-prepend"></i>                                         
                                add bicycle activity
                            </button>
                        </div>
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
                                    <th>Aktivitas</th>
                                    <th>KM Capaian</th>
                                    <th>Waktu Tempuh</th>
                                    <th>Point</th>
                                    <th>Capture Aplikasi</th>
                                    <th>Di buat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $data)
                                <tr>
                                    <td>{{ $data->txtTipe }}</td>
                                    <td>{{ $data->floatData }}</td>
                                    <td>{{ $data->txtWaktuTempuh }}</td>
                                    <td>{{ $data->floatPoint }}</td>
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
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">
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
    <div wire:ignore.self class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Activity Sportivity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-add">
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
                        <div class="form-group">
                            <label>Upload Capture Aplikasi Tracking Sportivity</label>
                            <label for="fileupload" class="btn btn-block btn-primary">Select a file</label>
                            <input accept="image/*" type="file" name="fileupload[]" id="fileupload" class="invisible" wire:model="fileupload">
                            @error('fileupload') <p class="card-description text-danger my-1">{{ $message }}</p> @enderror
                        </div>
                        @if ($fileupload)
                        <div class="media align-items-center">
                            <img src="{{ $fileupload->temporaryUrl() }}" class="align-self-center mr-3" height="100">
                            <div class="media-body align-middle">
                              <h5 class="mt-0 mb-1">{{ $fileupload->getClientOriginalName() }}</h5>
                              <p>{{ $fileupload->getSize() }} kb</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="add">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>