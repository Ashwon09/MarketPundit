<div>
<div class="row m-5">
<div class="col-7">
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h3 class="card-title"> For any queries, fill the form below </h3>
                <form action="{{route('ContactStore')}}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                        <span style="color:red"> @error ('name'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group mt-3">
                        <label for="number">Phone Number</label>
                        <input type="number" class="form-control" id="number" name="number" placeholder="Enter Your Number">
                        <span style="color:red"> @error ('number'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                        <span style="color:red"> @error ('email'){{$message}}@enderror</span>
                    </div>

                    <div class="form-group mt-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        <span style="color:red"> @error ('message'){{$message}}@enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-5">
</div>
</div>
    <div class="row m-5">

        <div class="col-7">
            <img class="img-fluid mb-5 ms-5" id="footerlogo" src="{{asset('image/footerlogo.jpg')}}">
            <div class="ms-5">
                <h6>Quick Links</h6>
                <div>
                    <a id="link" href="https://meroshare.cdsc.com.np/#/login">Mero Share Login</a>
                </div>
                <div>
                    <a id="link" href="https://www.nrb.org.np/">Nepal Rastra Bank</a>
                </div>
                <div>
                    <a id="link" href="http://www.nepalstock.com/">Nepal Stock Exchange</a>
                </div>
                <div>
                    <a id="link" href="http://sebon.gov.np/index.php">Securities Board of Nepal</a>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="social text-end">
                <a id="link" href="#">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a id="link" href="#">
                    <i class="fa-brands fa-youtube"></i>
                </a>
                <a id="link" href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a id="link" href="#">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.043556629997!2d85.34308931450089!3d27.68504863307961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a46896d5c7%3A0xce64bcf6fede84a3!2sMarket%20Pundit%20Portfolio%20Management%20and%20Advisory%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1655380700722!5m2!1sen!2snp" style="border:0; width:100%; height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <p>
                <i class="fa-solid fa-location-dot"></i>
                <span class="text-uppercase ms-1 me-3">Jawalakhel, Kathmandu-35</span>

                <i class="fa-solid fa-phone"></i>
                <span class="text-uppercase ms-1">01-5199403</span>
            </p>
        </div>
    </div>
</div>