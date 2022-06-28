@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card bg-light text-dark mb-4">
        <div class="card-body">
            <div class="row m-1">
                <div class="col-7">
                    <h3 class="card-title fw-bold">Portfolio Advisory Service</h3>
                    <p class="justify">We combine talent and experience of different professional team of experts to
                        create a portfolio that matches your need and attitude. These services will enable
                        you to get the best possible return of your investment. We provide a range of
                        portfolio advisory services to suit our clients&lsquo; varying needs. These services
                        relieve you of the administrative burden of personally managing your investments
                        and provide with an ongoing professional advisory aimed at enhancing your
                        portfolio performance.</p>
                </div>
                <div class="col-5">
                    <img class="portfolio-advisory-service ms-5" src="{{asset('image/services1.png')}}">
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-light text-dark mb-4">
        <div class="card-body">
            <div class="row m-1">
                <div class="col-7">
                    <h3 class="card-title fw-bold">Portfolio Management Services</h3>
                    <p class="justify">Across the world, people are turning to specialists Portfolio Management Services
                        for managing their equity investments. Portfolio Management Services is the
                        investment division of Mar}et Pundit that helps investors access the equity
                        market in Nepal.</p>
                    <p>Our Portfolio Management Services has two product segments:</p>
                    <ul>
                        <li>Discretionary Portfolio Management Service</li>
                        <li>Non-discretionary Portfolio Management Services</li>
                    </ul>
                    <h6>Discretionary Management</h6>
                    <p class="justify">Under discretionary management, the fund of the client is managed in
                        accordance with the risk that the client is willing to take. The portfolio managers
                        set the overall direction and goals for the account and tend to execute trades by
                        picking individual investments they believe will help meet the clients&lsquo; objectives
                        as per the market circumstance.</p>
                    <p class="justify">This account works best for investors who do not want to be actively involved in
                        the day-to-day management of their investments and want to rely on a
                        professional portfolio manager to design their portfolio that meets their financial
                        objectives.</p>
                    <h6>Non-Discretionary Management</h6>
                    <p class="justify">Under non-discretionary management, the portfolio manager instead of making
                        their own decisions, manages the funds in accordance with the expressed
                        direction and suggestion of the client. With such account, the manager offers a
                        professional advice in connection with the client&lsquo;s transaction and execute
                        according to the instruction provided. This type of arrangement is best suited for
                        investors who want to maintain a greater control over their investments but still
                        wants professional guidance.</p>
                </div>
                <div class="col-5">
                    <img class="portfolio-management-service ms-5 mt-3" src="{{asset('image/services2.png')}}">
                </div>
            </div>
        </div>
    </div>

    <div class="card bg-light text-dark mb-4">
        <div class="card-body">
            <div class="row m-1">
                <div class="col-7">
                    <h3 class="card-title fw-bold">IPO and FPO Management</h3>
                    <p class="justify">An initial public offering (IPO) or stock launch is a public offering in which shares of a 
                        company are sold to institutional investors[1] and usually also to retail (individual) investors.[2] An IPO 
                        is typically underwritten by one or more investment banks, who also arrange for the shares to be listed on 
                        one or more stock exchanges. Through this process, colloquially known as floating, or going public, a 
                        privately held company is transformed into a public company. Initial public offerings can be used to raise 
                        new equity capital for companies, to monetize the investments of private shareholders such as company 
                        founders or private equity investors, and to enable easy trading of existing holdings or future capital 
                        raising by becoming publicly traded.
                    </p>
                    <p class="justify">
                        After the IPO, shares are traded freely in the open market at what is known as the free float. Stock 
                        exchanges stipulate a minimum free float both in absolute terms (the total value as determined by the 
                        share price multiplied by the number of shares sold to the public) and as a proportion of the total share 
                        capital (i.e., the number of shares sold to the public divided by the total shares outstanding). Although 
                        IPO offers many benefits, there are also significant costs involved, chiefly those associated with the 
                        process such as banking and legal fees, and the ongoing requirement to disclose important and sometimes 
                        sensitive information.
                    </p>
                    <p class="justify">
                        FPO (Follow on Public Offer) is a process by which a company, which is already listed on an exchange, 
                        issues new shares to the investors or the existing shareholders, usually the promoters. FPO is used by 
                        companies to diversify their equity base. A company uses FPO after it has gone through the process of 
                        an IPO and decides to make more of its shares available to the public or to raise capital to expand or 
                        pay off debt.
                    </p>
                </div>
                <div class="col-5"></div>
            </div>
        </div>
    </div>

    <div class="card bg-light text-dark mb-4">
        <div class="card-body">
            <div class="row m-1">
                <div class="col-7">
                    <h3 class="card-title fw-bold">Capital Market Research And Management</h3>
                    <p class="justify">We combine talent and experience of different professional team of experts to
                        create a portfolio that matches your need and attitude. These services will enable
                        you to get the best possible return of your investment. We provide a range of
                        portfolio advisory services to suit our clients&lsquo; varying needs. These services
                        relieve you of the administrative burden of personally managing your investments
                        and provide with an ongoing professional advisory aimed at enhancing your
                        portfolio performance.</p>
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

    .portfolio-management-service{
        width: 90%;
        height: auto;
    }

</style>
@endpush