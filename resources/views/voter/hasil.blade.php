@if($pengaturan)
          @if(count($voting) > 0)
          <div class="container-fluid">
          <div class="container-voter">
            <h2 class="text-vote">Pengumuman kandidat terpilih dapat dilihat pada</h2>
            <br>
            <h2 class="text-vote">{{ $pengaturan->pg_mulai }}</h2>
          </div>
          </div>

          @else
          @endif


@else
<div class="container-fluid">
<div class="container-voter">
  <h2 class="text-vote">Tidak ada pemilihan yang sedang berlangsung</h2>
</div>
</div>

@endif