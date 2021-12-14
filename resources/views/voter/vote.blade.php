@extends('voter.layout')

@section('judul')
  <div>
      <br>
      @if($pengaturan)
      <h1 class="judul-vote">{{ $pengaturan->nama_kegiatan }}</h1>
      @else
      <h1 class="judul-vote"></h1>
      @endif
      <br>
  </div>
@endsection

@section('content')
@if($pengaturan)
      @if(Carbon\Carbon::now()->between(Carbon\Carbon::parse($pengaturan->dt_mulai), Carbon\Carbon::parse($pengaturan->pg_akhir)))
            @if(Carbon\Carbon::now()->between(Carbon\Carbon::parse($pengaturan->pg_mulai), Carbon\Carbon::parse($pengaturan->pg_akhir)))
                  <div class="container-fluid">
                      <div class="container-voter">
                        <h2 class="text-vote">Hasil Pemilihan</h2>
                        <br>
                        @if($hasil != NULL)
                          @foreach ($hasil as $hs)
                            <table cellpadding="4">
                                <tr>
                                    <td>Kandidat {{ $hs['name'] }}</td>
                                    <td> : </td>
                                    <td>{{ $hs['y'] }}</td>
                                    <td>suara</td>
                                </tr>
                            </table>
                          @endforeach
                        @else
                          <ul type="none">
                                  <li> </li>    
                          </ul>
                        @endif
                      </div>
                  </div>
            @else
                <div class="container-vote">
                    <div class="row">
                        @foreach ($kandidat as $kandidats)
                            <div class="col-xl-3 order-xl-2 mg-vote">
                                <div class="card-vote card-profile">
                                    <h2 class="no-urut lingkaran">{{ $kandidats->no_urut }}</h2>
                                    <img src="{{asset('thumb/'.$kandidats->foto) }}" alt="Image placeholder" class="card-img-top">
                                    <div class="card-header-vote text-center">
                                        <div class="text-center">
                                            <h5 class="h3">
                                            {{ $kandidats->nama }}
                                            </h5>
                                            <div class="h5 font-weight-300">
                                            <i class="ni location_pin mr-2"></i>{{ $kandidats->jurusan }}'{{ $kandidats->angkatan }}
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pd-top-btn-vt">
                                            <button id="visi_misi" class="btn btn-sm btn-bdr-u mr-4 size-btn-vt btn-visi" data-toggle="modal" data-target="#modal-visimisi" data-visi="{!! $kandidats->visi !!}" data-misi="{!! $kandidats->misi !!}">Info</button>
                                            <a href="/voter/voting/{{ $kandidats->id }}"><button data-target="#modal-vote" type="button" class="btn-vote btn btn-sm btn-ungu float-right size-btn-vt">Vote</button></a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        @endforeach
                    </div>        
                </div>
                @endif  
                @else
                      <div class="container-fluid">
                      <div class="container-voter">
                        <h2 class="text-vote">Tidak ada pemilihan yang sedang berlangsung2</h2>
                      </div>
                      </div>
                @endif             
@else
    <div class="container-fluid">
    <div class="container-voter">
      <h2 class="text-vote">Tidak ada pemilihan yang sedang berlangsung</h2>
    </div>
    </div>
@endif


    <!-- Modal Visi Misi-->
    <div class="modal fade" id="modal-visimisi" tabindex="-1" role="dialog" aria-labelledby="modal-visimisi" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <h1 class="modal-title" id="modal-visimisi">Visi</h1>
          <span id="visi"></span>
          <h1 class="modal-title" id="modal-visimisi">Misi</h1>
          <span id="misi"></span>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>



<!-- Modal Vote-->
<div class="modal fade" id="modal-vote" tabindex="-1" aria-labelledby="modal-vote" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
      </div>
      <div class="modal-body">
      <h5 class="modal-title font-mdl" id="modal-vote">Terima kasih atas suara Anda!</h5>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>



@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
  $(document).on('click', '#visi_misi', function() {
    var visi = $(this).data('visi');
    var misi = $(this).data('misi');

    $('#visi').text(visi).html(visi);
    $('#misi').text(misi).html(misi);
  })
})

</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.btn-vote').click(function(){
      $('#modal-vote').modal({backdrop: 'static', keyboard: false});
    })

}) 
  </script>
@endsection