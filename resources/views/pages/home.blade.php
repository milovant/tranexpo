@extends('layouts.transport')
@section('content')
<div class="headerhome" style="background-image:url({{$page->image}})">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <h1 class="text-center">Compare, and <br>ship your parcels <strong>cheaper</strong>!</h1>

          <div id="rating-form-container">
            <div class="upela-form mt-4">
              <form action="">
                <div class="row row-destination-envoi">
                  <div class="col-lg-6 col-12 col-destination">
                    <div class="destinationbox">
                      <div class="upela-form-title">Your destination</div>
                      <div class="row form-group row-desti">
                        <div class="col-3 text-left">
                          <label class="input-label">Ship from</label>
                        </div>
                        <div class="col-9 text-left">
                          <div class="text-right">
                            <label class="radio-inline"><input type="radio" value="1" name="depart_adresse"
                                checked><span>Residential</span><span class="checkmark"></span></label>
                            <label class="radio-inline"><input type="radio" value="0"
                                name="depart_adresse"><span>Business</span><span class="checkmark"></span></label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Country</label>
                          <div class="custom-select">
                            <select class="form-control" name="depart">
                              <option value=""></option>
                              <option selected>FR</option>
                              <option>IT</option>
                              <option>ES</option>
                              <option>DE</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-9 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Ship from</label>
                          <input type="text" class="form-control" name="depart_ville" placeholder="Zipcode, city">
                        </div>
                      </div>
                      <div class="text-center text-lg-right"><i id="exchange" class="fas fa-exchange-alt"></i></div>
                      <div class="row form-group row-desti">
                        <div class="col-3 text-left">
                          <label class="input-label">Ship to</label>
                        </div>
                        <div class="col-9 text-left">
                          <div class="text-right">
                            <label class="radio-inline"><input type="radio" value="1" name="destination_adresse"
                                checked><span>Residential</span><span class="checkmark"></span></label>
                            <label class="radio-inline"><input type="radio" value="0"
                                name="destination_adresse"><span>Business</span><span
                                class="checkmark"></span></label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Country</label>
                          <div class="custom-select">
                            <select class="form-control" name="depart">
                              <option value=""></option>
                              <option selected>FR</option>
                              <option>IT</option>
                              <option>ES</option>
                              <option>DE</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-9 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Ship from</label>
                          <input type="text" class="form-control" name="destination_ville"
                            placeholder="Zipcode, city">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-6 col-12">
                          <label>Shipping date</label>
                          <div class="input-group date-input-group">
                            <input type="text" class="form-control datepicker" id="date_envoi" name="">
                            <div class="input-group-append">
                              <label class="input-group-text" for="date_envoi"><i
                                  class="far fa-calendar-alt"></i></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 col-envoi">
                    <div class="envoibox">
                      <div class="upela-form-title">Your shipment</div>
                      <div class="row form-group">
                        <div class="col-sm-12 text-left mb-3">
                          <div class="envoi_type_cont">
                            <label class="radio-inline envoi_type type_colis"><input type="radio" name="type"
                                checked><span class="colis">Parcel</span>
                              <div class="check"></div>
                            </label>
                            <label class="radio-inline envoi_type type_pli"><input type="radio" name="type"><span
                                class="pli">Envelope</span>
                              <div class="check"></div>
                            </label>
                            <label class="radio-inline envoi_type type_palette"><input type="radio" name="type"><span
                                class="palette">Pallet</span>
                              <div class="check"></div>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row d-lg-none colis_details_actions mb-3">
                        <div class="col-6 text-left"><label class="input-label">Weight & dimensions</label></div>
                        <div class="col-6 text-right"><a href="javascript:void(0)" class="add_colis"><i
                              class="fas fa-plus-circle"></i>Add a parcel</a></div>
                      </div>
                      <div class="row form-group">
                        <div class="col-sm-12">
                          <div class="row colis_details">
                            <div class="col-sm-2 col-2 colis-detail-info">
                              <label>Qty <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                                  title="Lorem ipsum"></i></label>
                              <input type="number" class="form-control colis_nb">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Weight (<span class="u_poid">kg</span>) / lbs</label>
                              <input type="number" class="form-control colis_pd">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Length (<span class="u_mesure">cm</span>)</label>
                              <input type="number" class="form-control colis_long">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Width (<span class="u_mesure">cm</span>)</label>
                              <input type="number" class="form-control colis_lar">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Hight (<span class="u_mesure">cm</span>)</label>
                              <input type="number" class="form-control colis_haut">
                            </div>
                            <div class="col-sm-2 col-2 col-xs-12 colis-detail-info">
                              <a href="javascript:void(0)" class="remove_colis"><i class="fas fa-trash"></i></a>
                            </div>
                          </div>
                          <div class="row colis_details_actions bottom">
                            <div class="col-lg-6 col-12 text-left"><a href="javascript:void(0)"
                                id="switch_unit">Change units</a></div>
                            <div class="col-lg-5 d-lg-block d-none text-right"><a href="javascript:void(0)"
                                class="add_colis"><i class="fas fa-plus-circle"></i> Add a parcel</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                    <button type="submit" class="btn btn-lg btn-block btn-primary sendcolis">Send my parcel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {!! $page->body !!}
@endsection