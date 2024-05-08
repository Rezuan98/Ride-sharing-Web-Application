@extends('landing.landing')

@section('keyTitle', 'Homepage');

@section('maincontent')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
<a href="{{route('store.ride')}}"> <button class="btn btn-dark mt-4">Post a Ride</button></a>
        <div class="card border-dark m-4">
           
          <div class="card-body">
            <h1 class="card-title">Search Your Ride</h1>
            <form action="{{ route('search.ride') }}" method="GET">
              <div class="searchable">
                <label for="from">From:</label>
                <input type="text" name="from" class="form-control" placeholder="Search Districts" onkeyup="filterFunction(this,event)">
              
                <ul>
                    <li>Chittagong</li>
                    <li>Bulgaria</li>
                    <li>Rangpur</li>
                    <li>Sylhet</li>
                    <li>Dhaka</li>
                    <li>Rajshahi</li>
                    <li>Jessore</li>
                    <li>Dinajpur</li>
                    <li>Mymensingh</li>
                    <li>Comilla </li>
                    <li> Barisal </li>
                    <li>Faridpur</li>
                    <li>Noakhali</li>
                    <li>Bogra</li>
                    <li>Pabna</li>
                    <li>Khulna</li>
                    <li>Kushtia</li>
                    <li>Tangail</li>
                    <li>Patuakhali</li>
                    <li>Magura</li>
                    <li>Brahmanbaria</li>
                    <li>Sirajganj</li>
                    <li>Sherpur</li>
                    <li>Netrokona</li>
                    <li>Lakshmipur</li>
                    <li>Sunamganj</li>
                    <li>Thakurgaon</li>
                    <li>Jhenaidah</li>
                    <li>Cox's Bazar</li>
                    <li>Satkhira</li>
                    <li>Meherpur</li>
                    <li>Prirojpur</li>
                    <li>Bhola</li>
                    <li>Jamalpur</li>
                    <li>Tajikistan</li>
                    <li>Yemen</li>
                    <li>Tajikistan</li>
                    <li>Yemen</li>
                    <li>Tajikistan</li>
                    <li>Yemen</li>
                    <li>Tajikistan</li>
                    
                </ul>
            
            </div>
              <div class="searchable">
                <label for="to">To:</label>
                <input type="text" name="to" class="form-control" placeholder="Search Districts" onkeyup="filterFunction(this,event)">
              
                <ul>
                    <li>Chittagong</li>
                    <li>Bulgaria</li>
                    <li>Rangpur</li>
                    <li>Sylhet</li>
                    <li>Dhaka</li>
                    <li>Rajshahi</li>
                    <li>Jessore</li>
                    <li>Dinajpur</li>
                    <li>Mymensingh</li>
                    <li>Comilla </li>
                    <li> Barisal </li>
                    <li>Faridpur</li>
                    <li>Noakhali</li>
                    <li>Bogra</li>
                    <li>Pabna</li>
                    <li>Khulna</li>
                    <li>Kushtia</li>
                    <li>Tangail</li>
                    <li>Patuakhali</li>
                    <li>Magura</li>
                    <li>Brahmanbaria</li>
                    <li>Sirajganj</li>
                    <li>Sherpur</li>
                    <li>Netrokona</li>
                    <li>Lakshmipur</li>
                    <li>Sunamganj</li>
                    <li>Thakurgaon</li>
                    <li>Jhenaidah</li>
                    <li>Cox's Bazar</li>
                    <li>Satkhira</li>
                    <li>Meherpur</li>
                    <li>Prirojpur</li>
                    <li>Bhola</li>
                    <li>Jamalpur</li>
                    <li>Tajikistan</li>
                    <li>Yemen</li>
                    <li>Tajikistan</li>
                    <li>Yemen</li>
                    <li>Tajikistan</li>
                    <li>Yemen</li>
                    <li>Tajikistan</li>
                    
                </ul>
            </div>
              <div class="col-md-6 m-2">
                <label for="date">Date:</label>
                <input type="date" id="birthday" name="date" class="form-control">
              </div>
              <button type="submit" class="btn btn-dark font-weight-bold">Search Ride</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  


  <div class="landscapebox">
    <div class="con-md-6">
        <h1 class="text-white text-center"><i class="fa-solid fa-hand-holding-hand"></i>   Help us keep you safe from scams</h1>
    <p class="text-white">To keep yourself safe from scams, it's essential to stay vigilant and aware of potential threats. Verify the
        legitimacy of offers, messages, or requests by using official sources or contacting the company directly through
        their verified channels. When making online purchases or providing sensitive information, ensure that the
        website is secure with HTTPS in the URL and a padlock icon in the address bar. Be cautious of phishing attempts,
        which often involve unsolicited emails, messages, or calls asking for personal or financial information. Keep
        your software updated to protect against security vulnerabilities, and use strong, unique passwords for your
        accounts. Educate yourself about common scams and tactics used by scammers, and avoid sharing sensitive
        information unless absolutely necessary and with trusted sources. </p>

    </div>
    <div class="insidebox2">
        <h3 class="text-white"><i class="fa-solid fa-people-arrows"></i>  What you can do to avoid a scam</h3>
        <br>
        <h6 class="text-white"><i class="fa-solid fa-ban"></i>  Never visit links sent by drivers</h6>
        <h6 class="text-white"><i class="fa-solid fa-brain"></i>  Be aware of weird behaviour and requests</h6>
        <h6 class="text-white"><i class="fa-solid fa-phone"></i>  Call Our Hotline at any weired situation</h6>
    </div>
</div>








































































<script>
    function filterFunction(that, event) {
        let container, input, filter, li, input_val;
        container = $(that).closest(".searchable");
        input_val = container.find("input").val().toUpperCase();
    
        if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
            keyControl(event, container)
        } else {
            li = container.find("ul li");
            li.each(function (i, obj) {
                if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
    
            container.find("ul li").removeClass("selected");
            setTimeout(function () {
                container.find("ul li:visible").first().addClass("selected");
            }, 100)
        }
    }
    
    function keyControl(e, container) {
        if (e.key == "ArrowDown") {
    
            if (container.find("ul li").hasClass("selected")) {
                if (container.find("ul li:visible").index(container.find("ul li.selected")) + 1 < container.find("ul li:visible").length) {
                    container.find("ul li.selected").removeClass("selected").nextAll().not('[style*="display: none"]').first().addClass("selected");
                }
    
            } else {
                container.find("ul li:first-child").addClass("selected");
            }
    
        } else if (e.key == "ArrowUp") {
    
            if (container.find("ul li:visible").index(container.find("ul li.selected")) > 0) {
                container.find("ul li.selected").removeClass("selected").prevAll().not('[style*="display: none"]').first().addClass("selected");
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
    
    $(".searchable input").focus(function () {
        $(this).closest(".searchable").find("ul").show();
        $(this).closest(".searchable").find("ul li").show();
    });
    $(".searchable input").blur(function () {
        let that = this;
        setTimeout(function () {
            $(that).closest(".searchable").find("ul").hide();
        }, 300);
    });
    
    $(document).on('click', '.searchable ul li', function () {
        $(this).closest(".searchable").find("input").val($(this).text()).blur();
        onSelect($(this).text())
    });
    
    $(".searchable ul li").hover(function () {
        $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
        $(this).addClass("selected");
    });
    </script>
    
@endsection