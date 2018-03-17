<!DOCTYPE html>
<html lang="en">

<?php
        include 'js/terbilang.php';
?>

<head>
    <meta charset="utf-8">
      <title> Cetak Kwitansi </title>
        <style>
          table{
          border-collapse: collapse;
          width: 100%;
          margin: 0 auto;
          }
          table th{
              border:0px solid #000;
              padding: 3px;
              font-weight: bold;
          }
          table td{
              border:0px solid #000;
              padding: 3px;
              vertical-align: top;
          }
        </style>
</head>
<body>
<a href="#" onclick="window.print()" class="btn btn-secondary"><img src="{{ asset('images/logo.png')}}" weight="50px" height="50px" alt="" > </a> <br><br><br><br><br>
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <div class="container">
  <div>
    <div class="row">
      <div class="col-md-8">
      <div class="pull-left">
      <table>
         <tr>
            <h4> CV HSV KREASI PUTRA </h4>
            <h4> JL. CIBADUYUT NO. 124 </h4>
            <h4> KAB BANDUNG, 40239 </h4>
            <h4> NPWP: 70.699.644.4-445.000 </h4>
          </td>
          </tr>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pull-right">
        <table>
        <img src="{{asset('img/g.png')}}" class="pull-right" weight="100px" height="100px">
        </div>
      </table>
      </div>
    </div>
  </div>
  <br><br><br><br><br>

  <div>
    <div class="row"> 
      <div class="col-md-12">
        <table>
          <h4><p class="text-center"> TOKO ELEKTRONIK - BANDUNG/00 08886001332 </p></h4>
          <h4><p class="text-center"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p></h4> 
        </table>
      </div>
    </div>
  </div>

  <!--  -->
      <div class="col-md-4">
      <div class="pull-right">
        <table>
          <tr>
            <td>
              <h4> 2.1.17 14136/@if(Auth::check())
                                  {{ Auth::user()->name}}
                                  @endif/01 </h4>
            </td>
          </tr>
        </table>
        </div>
      </div>
    </div>
  </div>

  <div>
    <div class="row"> 
      <div class="col-md-12">
        <table>
          <h4><p class="text-center"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p></h4>
        </table>
      </div>
    </div>
  </div>


  <div>
    <div class="row">
      <div class="col-md-12">
         <table>
         <p>
            <thead>
          <tr class="table-info">
          </tr>
        </thead>
        <tbody>
        @php $no=1; @endphp
        @foreach($detailpenjualan as $data)
        <tr class="table-secondary">
        <td><td><td><td><h4>{{$data->nama}}</h4></td></td></td></td>
        <td><h4>{{$data->alamat}}</h4></td>
        <td><h4>{{$data->buku}}</h4></td>
        <td><h4>{{$data->total_harga}}</h4></td>
        <td><h4>{{$data->metode_bayar}}</h4></td>
        </tr>
        @endforeach
            </tbody>
          </p>
        </table>
      </div>
    </div>
  </div>

  <div>
    <div class="row"> 
      <div class="pull-right">
      <div class="col-md-12">
        <table>
          <h4><p class="text-center"> - - - - - - - - - - - - - - - - - - - - - - - - - - </p></h4>
        </table>
        </div>
      </div>
    </div>
  </div>

  

  {{-- <div>
    <div class="row"> 
      <div class="pull-right">
      <div class="col-md-12">
        <table>
          <h4><p class="text-center"> - - - - - - - - - - - - - - - - - - - - - - - - - - </p></h4>
        </table>
        </div>
      </div>
    </div>
  </div> --}}

  <div>
    <div class="row"> 
      <div class="pull-right">
      <div class="col-md-12">
        <table>
          <tr>
            <td>
             <h4> TOTAL <td><h4>:</h4></td> </h4> <td><h4>Rp.{{number_format($sum_harga,'2',',','.')}}</h4></td>
            </td>
          </tr>
        </table>
        </div>
      </div>
    </div>
  </div>

 
  <div>
    <div class="row"> 
      <div class="col-md-12">
        <table>
          <h4><p class="text-center"> TERIMA KASIH. SELAMAT BELANJA KEMBALI </p>
          <p class="text-center"> ======== LAYANAN KONSUMEN ELEKTRONIK ======== </p>
          <p class="text-center"> SMS 0811 1450 340 CALL 1450 340 </p>
          <p class="text-center"> EMAIL : KONTAK@ELEKTRONIK.CO.ID </p></h4>
        </table>
        </div>
      </div>
    </div>
  </div>

   <!-- <div class="row">
      <div class="col-md-8">
      <div class="pull-left">
        <table>
          <tr></tr><br>
          <tr> Pembayaran DP 50%, Pelunasan sebelum barang dikirim. </tr><br>
          <tr> Transfer ke rekening: </tr> <br>
          <tr> Bank BRI KC. Soekarno-Hatta, </tr> <br>
          <tr> No. Rekening : 0407 - 01000 - 465303 </tr>
        </table>
        </div>
      </div>  
      <div class="col-md-4">
      <div class="pull-right">
        <table>
          <tr></tr><br>
          <tr>Bandung, {{date('d F Y')}} </tr><br>
          <tr> Hormat Kami </tr><br>
          <tr> PT. Solusi Teknis Bandung </tr>
          <tr></tr><br>
          <tr></tr><br>
          <tr></tr><br>
          <tr></tr><br>
          <tr></tr><br>
          <tr></tr><br>
          <tr>
            <b><u>Dede Suhendi, S.Si.</u></b>
          </tr>
        </table>
        </div>
      </div>
    </div> -->
  </div>
</div>

</div>
<script type="text/javascript" src="{{asset('/js/jquery-1.10.1.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.PrintArea.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#print_button").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printableArea").printArea( options );
    });
});
</script>
</body>
</html>
