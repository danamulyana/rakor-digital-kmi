<div class="content-wrapper">
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome {{ Auth::user()->txtFullname }}</h3>
          <h6 class="font-weight-bold mb-0">B I S A || <span class="font-weight-normal text-primary text-uppercase">Berani - Inovatif - Sinergi - Adaptif</span></h6>
        </div>
        <div class="col-12 col-xl-4">
         <div class="justify-content-end d-flex">
          <div class="flex-md-grow-1 flex-xl-grow-0">
            <button class="btn btn-sm btn-light bg-white" id="clock">
             <i class="mdi mdi-calendar"></i> {{ now()->format('H:i d-M-Y') }}
            </button>
          </div>
         </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="{{ asset('images/bgrakor.png') }}" alt="people">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-{{ $weather[0]->icon == '04d' ? 'cloud' : 'sun' }} mr-2"></i>31<sup>C</sup></h2>
              </div>
              <div class="ml-2">
                <h4 class="location font-weight-normal">{{ $locationWeather }}</h4>
                <h6 class="font-weight-normal mt-2">{{ $weather[0]->description }}</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Total Point</p>
              <p class="fs-30 mb-2">{{ $totalPoint }}</p>
              <p>{{ $totalKM }} KM</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Point Bike</p>
              <p class="fs-30 mb-2">{{ $BikePoint }}</p>
              <p>{{ $BikeKM }} KM</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Point Run</p>
              <p class="fs-30 mb-2">{{ $RunPoint }}</p>
              <p>{{ $RunKM }} KM</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Point Walk</p>
              <p class="fs-30 mb-2">{{ $WalkPoint }}</p>
              <p>{{ $WalkKM }} KM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title my-3">Achivement Point All Group</p>
          <canvas id="AchivementAllGroup" width="400" height="180"></canvas>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title my-3">Last Record Sportivity</p>
          <div class="table-responsive">
            <table class="table table-striped table-borderless">
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
                  @forelse ($dataRakor as $data)
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
    <script>
      const ctx = document.getElementById('AchivementAllGroup').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            // labels: @json($grupLabel),
            datasets: [{
                label: 'Achiecement Actual Point',
                data: @json($dataGrafik),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function (e) {
          setInterval(function(){
              let dateToday = new Date();
              let addZeroes = (num) => {
                  return num < 10 ? `0${num}` : num;
              }
              
              let hr = addZeroes(dateToday.getHours());
              let min = addZeroes(dateToday.getMinutes());
              let sec = addZeroes(dateToday.getSeconds());
              let date = dateToday.getDate()
              let month = dateToday.getMonth()+1
              let year = dateToday.getFullYear()

              document.getElementById("clock").textContent = `${hr}:${min}:${sec}  ${date}-${month}-${year}`;
          }, 1000);
      })
    </script>
@endpush