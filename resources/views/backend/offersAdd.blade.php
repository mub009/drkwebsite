@extends('backend.layouts.backendLayout')
@section('title', 'AddOffer')
@section('content')
<link rel="stylesheet" href="../../assets/vendor/libs/spinkit/spinkit.css" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/patient.css') }}">
<style>
    #loader-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.29);
        z-index: 9990;
    }

    #loader-center {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
</style>
<div id="loader-overlay">
    <div id="loader-center">
        <div class="sk-chase sk-primary">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>
    </div>
</div>
<div class="content-wrapper">
    <div class="">

        <div class="row">
            <div class="col-12">
                <div class="card mb-6">
                    <h5 class="card-header">Add Offer</h5>
                    <div class="card-body">
                        <form id="addOfferForm" class="is-invalid" novalidate action="{{ route('offers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="offer_en" class="form-label labez">Offer Name(English)</label>
                                    <input type="text" class="form-control" id="offer_en" name="offer_en">
                                </div>
                                <div class="col mb-3">
                                    <label for="offer_ar" class="form-label labez">Offer Name(Arabic)</label>
                                    <input type="text" class="form-control" id="offer_ar" name="offer_ar">
                                </div>
                            </div>

                            <div class="mb-3" id="offerImg">
                                <label for="image" class="form-label labez">Offer Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="actual_price" class="form-label">Actual Price</label>
                                <input type="number" class="form-control" id="actual_price" name="actual_price" aria-label="actual_price" fdprocessedid="2ibxem">
                            </div>
                            <div class="mb-3">
                                <label for="offer_price" class="form-label">Offer Price</label>
                                <input type="number" class="form-control" id="offer_price" name="offer_price" aria-label="actual_price" fdprocessedid="2ibxem">
                            </div> -->
                            <!-- <div class="row justify-content-end"> -->
                            <div class="d-flex justify-content-center mt-8">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <a href="{{ route('offers.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                            <!-- </div> -->
                            <input type="hidden" name="content" id="content">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/katex.js')}}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js')}}"></script>
    <script src="{{ asset('assets/js/offer-form-validation.js') }}"></script>
    <script>
        var offerIndexUrl = "{{ route('offers.index') }}";
        var offerStoreUrl = "{{ route('offers.store') }}";
    </script>
    @endsection