@extends('landing.landing')

@section('keyTitle', 'Homepage')



@section('maincontent')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    {{-- banner starts --}}
    <div class="banner">

        <img src="{{ asset('images/bannn4.jpg') }}" class="img-fluid" style="height: 400px; width:100%; ">
        <div class="banner-content">
            <h1 style="color: rgb(252, 179, 43);text-shadow: 2px 2px 2px rgba(10, 9, 9, 0.5); ">Welcome To Goride</h1>
            <h2>We Provide Safe and Cost Friendly Travel Facility around 64 districts <span>in</span> Bangladesh</h2>
            <a href="#" class="btn btn-warning fw-bold ">Start Now</a>
        </div>
    </div>
    {{-- banner ends --}}


    <form action="{{ route('search.ride') }}" method="GET" class="m-2">
    <div class="search-row d-flex">
        <div class="searchable">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                <input type="text" name="from" placeholder="From(Districts Only)" onkeyup="filterFunction(this,event)" class="form-control">
            </div>
            <ul>
                <!-- Dropdown options -->
            </ul>
        </div>
        <div class="searchable">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                <input type="text" name="to" placeholder="Destination(Districts Only)" onkeyup="filterFunction(this,event)" class="form-control">
            </div>
            <ul>
                <!-- Dropdown options -->
            </ul>
        </div>
        <div class="date-field">
            <input type="date" id="birthday" name="date" class="form-control">
        </div>
        <button type="submit" class="btn btn-warning me-2">Search Ride</button>
    </div>
</form>

    <hr class="hr">

    <div class="container">
        <div class="row bg-light">
            <div class="col-md-4 ">
                <h3 class="p-2"><i class="fa-solid fa-money-check-dollar"></i> Travel at Very Low prices</i></h3>

                <p class="p-4">
                    "Experience affordable travel with our rideshare platform! Say goodbye to expensive transportation and
                    hello to budget-friendly journeys. With our innovative app, you can connect with drivers heading your
                    way and share the cost of travel. Whether it's commuting to work, visiting friends, or exploring new
                    places, we've got you covered. Enjoy the convenience of booking rides at vert low prices, saving both
                    money and the environment.Our user-friendly interface makes finding rides a breeze, while our secure
                    payment system ensures peace of mind. Join our community today and embark on cost-effective adventures
                    with fellow travelers. Travel smart, travel with us!"
                    .</p>

            </div>


            <div class="col-md-4 ">
                <h3 class="p-2"><i class="fa-solid fa-people-pulling"></i> Trust Who You Travel With</h3>
                <p class="p-4">
                    "Trust your travel companions with our reliable rideshare platform. We prioritize safety and security,
                    ensuring that every journey is with trustworthy individuals. Our rigorous screening process verifies
                    drivers and passengers, giving you peace of mind on every trip. Whether you're commuting to work or
                    embarking on a weekend getaway, rest assured that you're in good hands. With real-time tracking and
                    communication features, you can stay connected throughout the journey.
                    .</p>

            </div>
            <div class="col-md-4 ">
                <h3 class="p-2"><i class="fa-solid fa-face-smile-beam"></i> No Extra Formalities</h3>
                <p class="p-4">"Enjoy hassle-free travel with our rideshare service, where there are no extra
                    formalities. Say goodbye to tedious paperwork and unnecessary processes. We believe in keeping things
                    simple and straightforward, so you can focus on your journey ahead. With our streamlined platform,
                    booking a ride takes just a few clicks, and you're ready to go. Whether it's a short trip across town or
                    a longer adventure, we prioritize efficiency without sacrificing safety.
                    .</p>

            </div>
        </div>
    </div>
    <hr class="hr">

    




    <div class="container">
        <div class="row bg-light">
            <div class="col-md-6">
                <h2 style="margin-top: 20px; margin-left: 20px;">
                    Discover new cities at small prices with GoRide Elegant Cars.</h2>
                <img src="{{ asset('/images/car2-.png') }}" style="height: 250px; width:550px;" alt="">
            </div>
            <div class="col-md-6">
                Embark on adventures without breaking the bank with GoRide Elegant Cars. Uncover hidden gems in new cities
                at budget-friendly rates. Our fleet of sophisticated vehicles ensures comfort and style as you explore
                diverse destinations. From bustling urban centers to serene countryside retreats, GoRide facilitates
                seamless travel experiences. With competitive pricing, discovering new locales has never been more
                accessible. Whether it's a spontaneous road trip or a meticulously planned itinerary, GoRide caters to every
                traveler's needs. Say goodbye to expensive travel options and hello to affordable exploration with GoRide
                Elegant Cars. Start your journey today and redefine the way you travel.
            </div>
        </div>
    </div>

    <div class="container-fluid landscapebox">

        <div class="row">

            <div class="col-md-8">
                <h1 class="text-white text-center"><i class="fa-solid fa-hand-holding-hand"></i> Help us keep you safe from
                    scams</h1>
                <p class="text-white" style="margin-left:100px;">To keep yourself safe from scams, it's essential to stay vigilant and aware of potential
                    threats. Verify the
                    legitimacy of offers, messages, or requests by using official sources or contacting the company directly
                    through
                    their verified channels. When making online purchases or providing sensitive information, ensure that the
                    website is secure with HTTPS in the URL and a padlock icon in the address bar. Be cautious of phishing
                     </p>
                     <div class="insidebox2">
                        <h3 class="text-white"><i class="fa-solid fa-people-arrows"></i> What you can do to avoid a scam</h3>
                        <br>
                        <h6 class="text-white"><i class="fa-solid fa-ban"></i> Never visit links sent by drivers</h6>
                        <h6 class="text-white"><i class="fa-solid fa-brain"></i> Be aware of weird behaviour and requests</h6>
                        <h6 class="text-white"><i class="fa-solid fa-phone"></i> Call Our Hotline at any weired situation</h6>
                    </div>
    
            </div>
           
            <div class="col-md-4">
                <img src="{{asset('images/pppp.png')}}" alt="" style="height: 350px;width:400px;">
     
                 </div>

        </div>
       
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Get 30% Festival Goride Bonus From Booking 5 seat Once</h2>
                <p>Unlock a 30% Festival GoRide Bonus in bangla Nobo Borsho by booking five seats at once! Celebrate the joy of travel with
                    friends and family while enjoying exclusive savings. Whether it's a festive getaway or a group
                    adventure, GoRide rewards your group bookings with unparalleled discounts. Experience the thrill of
                    exploring new destinations together without worrying about the cost. With GoRide, every journey becomes
                    a memorable experience filled with laughter and shared moments. Don't miss out on this limited-time
                    offer! Book your five seats now and indulge in the Festival GoRide Bonus. Start planning your next
                    adventure today with GoRide.</p>
            </div>
            <div class="col-md-6">
           <img src="{{asset('images/tour.png')}}" alt="">

            </div>
        </div>
    </div>




    {{-- start javascript for search ride --}}
    <script>
        function filterFunction(that, event) {
            let container, input, filter, li, input_val;
            container = $(that).closest(".searchable");
            input_val = container.find("input").val().toUpperCase();

            if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
                keyControl(event, container)
            } else {
                li = container.find("ul li");
                li.each(function(i, obj) {
                    if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });

                container.find("ul li").removeClass("selected");
                setTimeout(function() {
                    container.find("ul li:visible").first().addClass("selected");
                }, 100)
            }
        }

        function keyControl(e, container) {
            if (e.key == "ArrowDown") {

                if (container.find("ul li").hasClass("selected")) {
                    if (container.find("ul li:visible").index(container.find("ul li.selected")) + 1 < container.find(
                            "ul li:visible").length) {
                        container.find("ul li.selected").removeClass("selected").nextAll().not('[style*="display: none"]')
                            .first().addClass("selected");
                    }

                } else {
                    container.find("ul li:first-child").addClass("selected");
                }

            } else if (e.key == "ArrowUp") {

                if (container.find("ul li:visible").index(container.find("ul li.selected")) > 0) {
                    container.find("ul li.selected").removeClass("selected").prevAll().not('[style*="display: none"]')
                        .first().addClass("selected");
                }
            } else if (e.key == "Enter") {
                container.find("input").val(container.find("ul li.selected").text()).blur();
                onSelect(container.find("ul li.selected").text())
            }

            container.find("ul li.selected")[0].scrollIntoView({
                behavior: "smooth",
            });
        }

        function onSelect(val) {
            // Remove the window notification
        }

        $(".searchable input").focus(function() {
            $(this).closest(".searchable").find("ul").show();
            $(this).closest(".searchable").find("ul li").show();
        });
        $(".searchable input").blur(function() {
            let that = this;
            setTimeout(function() {
                $(that).closest(".searchable").find("ul").hide();
            }, 300);
        });

        $(document).on('click', '.searchable ul li', function() {
            $(this).closest(".searchable").find("input").val($(this).text()).blur();
            onSelect($(this).text())
        });

        $(".searchable ul li").hover(function() {
            $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
            $(this).addClass("selected");
        });
    </script>

    {{-- end javascript for  --}}

@endsection
