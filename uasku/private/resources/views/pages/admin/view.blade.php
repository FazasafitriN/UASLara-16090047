@extends('pages.admin.dash')
@section('main')
<div class="card wow fadeIn">

        <!--Card content-->
        <div class="card-body justify-content-between">
        <div class="d-flex justify-content-center">
        <a href="{{route('add')}}" class="btn btn-primary btn-sm waves-effect waves-light">Tambah</a></div>
       
        <section class="box">
                        <header class="panel_header">
                            <h2 class="title pull-left">Data Pemesanan</h2>
                            <div class="pull-right">
                                <div style="margin-top: 20px; margin-right: 20px">
                            	 
                                 </div>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col">

                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table vm table-small-font no-mb table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Wisata</th>
                                                    <th>Jenis Trip</th>
                                                    <th>Tanggal Pemesanan</th>
                                                    <th>Alamat</th>
                                                    <th>Tambahan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                               
                                                    <td>
                                                       1
                                                    </td>
                                                    <td>Mount Slamet</td>
                                                    <td>Open</td>
                                                    <td>07-20-2019</td>
                                                    <td>Tegal</td>
                                                    <td>-</td>
                                                    
                                                </tr>
                                               
                                                <tr>
                                               
                                               <td>
                                                  2
                                               </td>
                                               <td>Semarang Ambarawa</td>
                                               <td>Package</td>
                                               <td>07-25-2019</td>
                                               <td>Pemalang</td>
                                               <td>-</td>
                                           </tr>

                                           <tr>
                                               
                                               <td>
                                                  3
                                               </td>
                                               <td>Karimun Jawa</td>
                                               <td>Package</td>
                                               <td>07-28-2019</td>
                                               <td>Pekalongan</td>
                                               <td>-</td>
                                           </tr>
                                          
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
</div></div>
@stop

@section('footer')
@stop