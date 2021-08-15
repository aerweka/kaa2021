@extends('layouts.layout')

@section('extendsTitle', 'Verifikasi Pembayaran')

@section('pageTitle', 'Verifikasi Pembayaran')

@section('extendsBreadcrump')
<li class="breadcrumb-item active" aria-current="page">Verifikasi Pembayaran</li>
@endsection

@section('headerContent')

@endsection
@section('bodyContent')
<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white">
      <div class="card-body container-fluid mt--3 mb--3 ">
        <div class="row">
          <div class="col-lg-12">
            <div class="nav-wrapper mb-1">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">
                    <span class="d-none d-md-block"><i class="ni ni-align-left-2 mr-2"></i>Semua</span>
                    <span class="d-md-none">Semua</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">
                    <span class="d-none d-md-block"> <i class="ni ni-button-pause mr-2"></i>Belum Verifikasi</span>
                    <span class="d-md-none">Belum Verifikasi</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">
                    <span class="d-none d-md-block"><i class="ni ni-check-bold   mr-2"></i>Sudah Verifikasi</span>
                    <span class="d-md-none">Sudah Verifikasi</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- <div class="col d-flex justify-content-end align-items-center">
                        <a type="button" class="btn btn-icon btn-primary " type="button" data-toggle="tooltip" data-placement="left" title="Unduh Data Moodle User">
                            <span class="btn-inner--icon"><i class="ni ni-cloud-download-95 text-white"></i></span>
                        </a>
                    </div> -->

        <div class="tab-content " id="myTabContent">
          <div class="tab-pane fade show active " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
            <div class="row my-2 mb-3">
              <div class="col-lg-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" name="search-all" id="searchall" aria-describedby="basic-addon1" placeholder="Cari Data">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive ">
                  <div>
                    <table class="table align-items-center">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="id">ID Pendaftaran</th>
                          <th scope="col" class="sort" data-sort="nama">Nama </th>
                          <th scope="col" class="sort" data-sort="instansi">Nama Instansi</th>
                          <th scope="col" class="sort" data-sort="total">Total</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row">
                          </th>
                          <td class="budget">
                            $2500 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i>
                              <span class="status">pending</span>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
            <div class="row my-2 mb-3">
              <div class="col-lg-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" name="search-all" id="searchall" aria-describedby="basic-addon1" placeholder="Cari Data">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive ">
                  <div>
                    <table class="table align-items-center">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="id">ID Pendaftaran</th>
                          <th scope="col" class="sort" data-sort="nama">Nama </th>
                          <th scope="col" class="sort" data-sort="instansi">Nama Instansi</th>
                          <th scope="col" class="sort" data-sort="total">Total</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row">
                          </th>
                          <td class="budget">
                            $2500 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i>
                              <span class="status">pending</span>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
            <div class="row my-2 mb-3">
              <div class="col-lg-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" name="search-all" id="searchall" aria-describedby="basic-addon1" placeholder="Cari Data">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="table-responsive ">
                  <div>
                    <table class="table align-items-center">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="sort" data-sort="id">ID Pendaftaran</th>
                          <th scope="col" class="sort" data-sort="nama">Nama </th>
                          <th scope="col" class="sort" data-sort="instansi">Nama Instansi</th>
                          <th scope="col" class="sort" data-sort="total">Total</th>
                          <th scope="col" class="sort" data-sort="status">Status</th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <tr>
                          <th scope="row">
                          </th>
                          <td class="budget">
                            $2500 USD
                          </td>
                          <td>
                            <span class="badge badge-dot mr-4">
                              <i class="bg-warning"></i>
                              <span class="status">pending</span>
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                                </div> -->

      </div>
    </div>
  </div>
</div>

@endsection