@extends('layout.main')
@section('title', 'home')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">PAYMENT</h1>
            <p class="lead fw-normal text-white-50 mb-0">input book data</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Untuk Pembayaran Ikuti Langkah berikut</span>
                        </h2>
                        <ul>
                            <li>Transfer Ke rekening berikut:
                                <ul>
                                    <li>
                                        Bank BRI a/n Fulan bin Fulan
                                        <br>No.Rek : 0788289788
                                    </li>
                                    <li>
                                        Bank BSI a/n Fulan bin Fulan
                                        <br>No.Rek : 0712389987
                                    </li>
                                    <li>
                                        Bank Mandiri a/n Fulan bin Fulan
                                        <br>No.Rek : 0767254234
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Lalu pilih bank yang akan ditransfer
                            </li>
                            <li>
                                Terakhir upload bukti pembayaran
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form action="/bayar" method="post"  enctype="multipart/form-data">
            @csrf            
            <div class="mb-3">
                <label class="form-label">Bank Transfer</label>
                <select class="form-select" name="bank" aria-label="Default select example">
                    <option selected>-- pilih bank --</option>
                    @foreach ($dataMetode as $data )
                    <option value="{{$data->id}}">{{ $data['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Bukti Transfer</label>
                <input class="form-control" type="file" name="bukti" id="formFile" value="">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/" class="btn btn-danger me-md-2" type="button">Cancel</a>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection
