<x-layout-app title="Bukti Pembayaran">

    <div class="app-card alert alert-dismissible shadow-sm mb-4 "
        style="margin-top: 50px; width:500px; margin-left:50px">
     <p style="margin-left: 20px; font-weight:bold">Bukti Pembayaran {{$detailUser->nama_lengkap}}</p>
        <div>
            <div class="app-card-body center p-3 p-lg-4" style="align-items:center;">
                <div class="row gx-5 gy-3">
                 <img src="{{asset('buktipembayaran/'.$pem->bukti_pembayaran)}}" width="500px" alt="">
                </div>
                <br>
            </div>
        </div>
        <a href="{{route('admin.pembayaran')}}"> <button class="btn btn-primary"
                style="color:white">Kembali</button></a>
    </div>

</x-layout-app>