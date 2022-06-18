@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card text-dark bg-light mb-4">
        <div class="card-body">
            <div class="row m-1">
                <div class="col-7">
                    <h3 class="card-title fw-bold">Company Overview</h3>
                    <p class="justify">Market Pundit was established on Ashadh 15th, 2075 BS as Portfolio
                        Management Pvt Ltd. Co. Later on, converted to Public Ltd Co. As of
                        22nd Bhadra, 2076 as per Nepal Companies Act. Currently, Market
                        Pundit is engaged in the management of its core fund and has been
                        actively engaged in the capital market generating returns with respect
                        to the managed fund. Market Pundit Capital and Merchant Banking Ltd
                        is in the process of obtaining a license from the Securities Board of
                        Nepal (SEBON) to engage in merchant banking activities of portfolio
                        management services.</p>
                    <p class="justify">The Company is in the process of licensing and is positive to get
                        approval from SEBON in the current year itself. At present, the
                        Authorized capital of MPCMBL is NPR 100 million and issued is NPR 80
                        million and paid-up capital of NPR 56 million. It operates under
                        professional management with strong strategic support from the
                        Board of Directors.</p>
                    <p class="justify">The main aim of the company is to raise the industry standard by
                        incorporating best practices in capital market activities through
                        embracing modern technologies in order to augment the products and
                        services offered to clients. We are in the planning phase of expansion
                        in terms of infrastructures and services to handle the growing
                        business.</p>
                </div>
                <div class="col-5"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    .justify {
        text-align: justify;
    }
</style>
@endpush