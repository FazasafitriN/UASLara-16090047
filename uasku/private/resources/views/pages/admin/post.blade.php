@extends('pages.admin.dash')
@section('main')
   <!-- Heading -->
      <div class="card wow fadeIn">

        <!--Card content-->
        <div class="card-body justify-content-between">
        
        {!! Form::open(array('action' => 'BlogController@store', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')) !!}
                                       
                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Tujuan Wisata</label>
                                        <div class="controls">
                                        {!! Form::text('tujuan_wisata', null, ['class' => 'form-control', 'placeholder' => 'isi tujuan']) !!}
                                            
                                        </div>
                                    </div>

                
                                    <div class="form-group">
                                    {{Form::select("jenis_trip",['open' => 'open',  'package' => 'package'], null,
                                ["class" => "form-control", "placeholder" => "--- Pilih Kategori ---"])}}

                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Tanggal Pemesanan</label>
                                        <div class="controls">
                                            <input type="date" class="form-control" name="tanggal">
                                        </div>
                                        <div class="form-group">
                                        <label class="form-label" for="field-3">Alamat</label>
                                        {!! Form::textarea('alamat', '', ['class' => 'form-control' . ( $errors->has('alamat') ? ' is-invalid' : '' ),
                   'placeholder' => 'Isi', 'required']) !!}
                   
                                        <div class="controls">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                        <div class="controls">
                                        {!! Form::submit('TAMBAH', ['class' => 'btn btn-primary']) !!}
                                        </div>
                                        {!! Form::close() !!}

         

        </div>

      </div>
      <!-- Heading -->
@stop
@section('footer')

            </section>
            <!--Section: Modals-->
    </div>
  </main>
  <!--Main layout-->
  
  
  

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

 

    <hr class="my-4">



    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
@stop