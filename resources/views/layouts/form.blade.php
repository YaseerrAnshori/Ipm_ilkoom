@csrf
{{-- input email --}}
<div class="mb-3 row">
    <label for="email" class="col-md-3 col-form-label text-md-end">Email *</label>
    <div class="col-md-6">
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email ?? ''}}" autocomplete="email" autofocus >

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- input password --}}

 @if ($tombol == 'Daftar')

<div class="mb-3 row">
    <label for="password" class="col-md-3 col-form-label text-md-end">Password *</label>
    <div class="col-md-6">
        <input type="password" id="password" class="form-control  @error('password') is-invalid @enderror" name="password" autocomplete="new-password" autofocus>

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
</div>



{{-- input confirm password  --}}

<div class="mb-3 row">
    <label for="password-confirm" class="col-md-3 col-form-label text-md-end">Ulang password *</label>
    <div class="col-md-6">
        <input type="password" id="password-confirm" class="form-control  @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password" autofocus>

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
</div>

@endif
{{-- input name --}}

<div class="mb-3 row">
    <label for="name" class="col-md-3 col-form-label text-md-end">Name *</label>
    <div class="col-md-6">
        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name ?? ''}}" autocomplete="name" autofocus >

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
</div>

{{-- input tanggal --}}

<div class="mb-3 row">
    <label for="tgl" class="col-md-3 col-form-label text-md-end">Tanggal Lahir *</label>
    <div class="col-md-6">
        <div class="row g-2">
            <div class="col-3">
                <input type="number" id="tgl" class="form-control  @error('tgl') is-invalid @enderror" name="tgl" value="{{ old('tgl') ?? $user->tgl ?? ''}}"  autocomplete="tanggal_lahir" autofocus placeholder="dd">

                @error('tgl')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-5">
                @php
                    $namaBulan = [
                        'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'July',
                        'Agustus',
                        'september',
                        'Oktober',
                        'November',
                        'Desember',
                ];
                @endphp
                <select name="bln" id="blm" class="form-select col-md-4 d-inline
                @error('bln') is-invalid @enderror"
                style="vertical-align: baseline;">
                @for ($i = 0; $i <12; $i++)
                    @if($i+1 == (old('bln') ?? $user->bln ?? ''))
                    <option value="{{ $i+1 }}" selected>{{ $namaBulan[$i] }}</option>
                    @else
                    <option value="{{ $i+1 }}">{{ $namaBulan[$i] }}</option>
                    @endif
                @endfor

                </select>
            </div>
            <div class="col-4">
                <input type="number" id="thn" class="form-control col-md-3 d-inline @error('thn') is-invalid @enderror" name="thn" value="{{ old('thn') ?? $user->thn ?? ''}}" autocomplete="thn" autofocus placeholder="YY" >

                @error('tgl')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

    </div>
</div>

{{-- input pekerjaaan --}}

<div class="mb-3 row">
    <label for="pekerjaan" class="col-md-3 col-form-label text-md-end">pekerjaan *</label>
    <div class="col-md-6">
        <input type="text" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan') ?? $user->pekerjaan ?? ''}}" autocomplete="name" autofocus >

        @error('pekerjaan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
</div>

{{-- input kota --}}

<div class="mb-3 row">
    <label for="kota" class="col-md-3 col-form-label text-md-end">kota *</label>
    <div class="col-md-6">
        <input type="text" id="kota" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ old('kota') ?? $user->kota ?? ''}}" autocomplete="name" autofocus >

        @error('kota')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
</div>

{{-- input bio profile --}}

<div class="mb-3 row">
    <label for="bio_profile" class="col-md-3 col-form-label text-md-end">Bio_profile *</label>
    <div class="col-md-6">
        <textarea  id="bio_profile" class="form-control @error('bio_profile') is-invalid @enderror" name="bio_profile"  placeholder="Bio singkat Anda"  autocomplete="bio_profile" autofocus> {{ old('bio_profile') ?? $user->bio_profile ?? ''}}</textarea>

        @error('bio_profile')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

    </div>
</div>

{{-- input gambar profile --}}

<div class="mb-3 row">
    <label for="gambar_profile" class="col-md-3 col-form-label text-md-end">
    Gambar Profil</label>
    <div class="col-md-6">
        <img id="display_gambar_profil" class="img-thumbnail w-25 mb-2"
        @if ($tombol == 'Daftar')
        src="{{ asset('img/default_profile.jpg') }}"
        @elseif ($tombol == 'Update')
        src="{{ asset('storage/uploads/'.$user->gambar_profile) }}"
        @endif
        >
        <input type="file" id="gambar_profil" name="gambar_profile" accept="image/*"
        class="form-control @error('gambar_profile') is-invalid @enderror">

        @error('gambar_profile')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


{{-- input background profile --}}

<div class="mb-3 row">
    <label for="background_profil" class="col-md-3 col-form-label text-md-end">
    Background Profil</label>
    <div class="col-md-6">
        <select name="background_profile" class="form-select col-md-5
            @error('background_profil') is-invalid @enderror" id="background_profil" >
            @for ($i = 1; $i <= 12; $i++)
            @if($i == (old('background_profil') ?? $user->background_profil ?? ''))
            <option value="{{ $i }}" selected >{{ 'Gambar '.$i }}</option>
            @else
            <option value="{{ $i }}">{{ 'Gambar '.$i }}</option>
            @endif
            @endfor
        </select>

        @error('background_profil')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="my-2 row row-cols-3 g-1">
            @for ($i = 1; $i <= 12; $i++)
            <div class="pilihan-background-profil">
                <div class='overlay'>{{ $i }}</div>
                <img class="col img-thumbnail" src="{{asset('img/gambar'.$i.'.jpg')}}"
                >
            </div>
            @endfor
        </div>

    </div>
</div>

{{-- submit --}}
<div class="mb-3 row mb-0">
    <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn btn-primary">{{ $tombol }}</button>
    </div>
</div>
