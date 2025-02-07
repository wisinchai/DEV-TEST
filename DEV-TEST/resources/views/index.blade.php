@extends('layout.layout')

@section('header')
<title>index</title>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <span class="breadcrumb">หน้าแรก > อุปกรณ์ไอที  </span>
        </div>
    </div>
    <div class="row justify-content-center" >
        <div class="col-lg-9 col-md-9">
            <div class="card" style="background-color: #F4F8FF;border:none;">
                <div class="card-body text-center">
                    <h6><b>ค้นหาผลิตภัณท์</b></h6>
                    <div class="row">
                        <div class="col-12">
                           <div class="row">
                                 <div class="col-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">เลือกแบรน</option>
                                    </select>
                                 </div>
                                 <div class="col-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">เลือกแบรน</option>
                                    </select>
                                 </div>
                           </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-2">
                            <button class="btn btn-primary btn-block">ค้นหา</button>

                        </div>
                        <div class="col-3 d-flex align-items-center justify-content-start">
                            <span>รีเซ็ต</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>

</script>
@endsection
@section('footer')
@endsection
