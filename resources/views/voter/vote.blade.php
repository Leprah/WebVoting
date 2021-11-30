@extends('voter.layout')

@section('content')
<div>
<br>
    <h1 class="judul-vote">Voting Kandidat</h1>
<br>
</div>

<div class="container-fluid mg-vote">
    <div class="row">
        @foreach ($data_kandidat as $kandidat)
            <div class="col-xl-3 order-xl-2 mg-vote">
                <div class="card-vote card-profile">
                    <h2 class="no-urut lingkaran">{{ ++$no}}</h2>
                    <img src="{{asset('thumb/'.$kandidat->foto) }}" height="230" width="70" alt="Image placeholder" class="card-img-top">
                    <div class="card-header-vote text-center">
                        <div class="text-center">
                            <h5 class="h3">
                            {{ $kandidat->nama }}
                            </h5>
                            <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>TRPL'20
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-between pd-top-btn-vt">
                            <button id="visi_misi" class="btn btn-sm btn-bdr-u mr-4 size-btn-vt btn-visi" data-toggle="modal" data-target="#modal-visimisi" data-visi="{!! $kandidat->visi !!}" data-misi="{!! $kandidat->misi !!}">Info</button>
                            <button class="btn btn-sm btn-ungu float-right size-btn-vt">Vote</button>
                        </div>
                    </div>
                </div>    
            </div>
        @endforeach
    </div>        
</div>



<!-- Modal -->

<div class="modal fade" id="modal-visimisi" tabindex="-1" role="dialog" aria-labelledby="modal-visimisi" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title" id="modal-visimisi">Visi</h5>
      <span id="visi"></span>
      <h5 class="modal-title" id="modal-visimisi">Misi</h5>
      <span id="misi"></span>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>
$(document).ready(function() {
  $(document).on('click', '#visi_misi', function() {
    var visi = $(this).data('visi');
    var misi = $(this).data('misi');

    $('#visi').text(visi).html(visi);
    $('#misi').text(misi).html(misi);
  })
})

</script>

  @endsection