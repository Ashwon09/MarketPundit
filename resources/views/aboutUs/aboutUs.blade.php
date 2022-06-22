@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card text-dark bg-light mb-4">
        <div class="card-body">
            <h3 class="card-title fw-bold">Who are we?</h3>
            <p class="justify">Market Pundit, our parent company, is a "A" Class financial institution licensed by Nepal Rastra Bank. Market Pundit is one of the largest private sector commercial banks in the country in terms of capital base, balance-sheet size and number of branches, ATM network and customer base. The Bank has more than 255 branches across Nepal with a network covering all major financial centers of
                the country. The Bank has also added a Microfinance Company, "Market Pundit Microfinance" in its echosystem. The Bank strongly
                believes in meritocracy, transparency, professionalism, team spirit and service excellence. These core values are internalized by all
                functions within the Bank and its subsidiaries that include NIC Asia Capital Limited.</p>
        </div>
    </div>
    <div class="card text-dark bg-light mb-4">
        <div class="card-body">
            <h3 class="card-title fw-bold">Why Us?</h3>
            <ul>
                <li>To transfer the roles of short-term investment decisions and actions keeping your investment objectives intact</li>
                <li>To expect comparatively higher rate of return</li>
                <li>To make your time available for other important tasks of your daily life and business</li>
                <li>To get the financial education or the expert&lsquo;s advices on the key areas of your investment and portfolio managemet</li>
                <li>To manage your investments unbiased and professionally to develop a secure foundation for the financial future</li>
            </ul>
        </div>
    </div>
    <div class="card text-dark bg-light mb-4">
        <div class="card-body">
            <h3 class="card-title fw-bold">Vision and Mission</h3>
            <h6>Mission:</h6>
            <p>“To provide innovative and best investment solution and excellent growth opportunities as a good Corporate Citizen”</p>
            <h6>Vision:</h6>
            <p>“To become one of the leading Investment and Merchant Bank in Nepal"</p>
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