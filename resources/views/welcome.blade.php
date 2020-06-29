<!DOCTYPE html>
<html>
    <title>School Bus Monitoring System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

        <style>
            body,h1,h5 {font-family: "Raleway", sans-serif}
            body, html {height: 100%}
            .bgimg {
            background-image: url('/assets/img/background.png');
            min-height: 100%;
            background-position: center;
            background-size: cover;
            }
        </style>

    <body>

        <div class="bgimg w3-display-container w3-text-dark">
        <div class="w3-display-middle w3-xxxlarge">
            <p>School Bus Monitoring System</p>
        </div>
        <div class="w3-display-topleft w3-container w3-xlarge">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="w3-btn w3-black">Home</a>
                @else
                    <p><a href="{{ route('login') }}" class="w3-btn w3-black">Login</a></p>

                    @if (Route::has('register'))
                        <p><a href="{{ route('register') }}" class="w3-btn w3-black">Register</a></p>
                    @endif
                @endauth
            @endif
            <p><button onclick="document.getElementById('contact').style.display='block'" class="w3-button w3-black">Contact</button></p>
        </div>
        </div>

        <!-- Contact Modal -->
        <div id="contact" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom">
            <div class="w3-container w3-black">
            <span onclick="document.getElementById('contact').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
            <h1>Contact</h1>
            </div>
            <div class="w3-container">
            <p>Want to be part of Bus-T Corporation team ? Just send us a message:</p>
            <form action="/" target="_blank">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mobile Phone" required name="Phone"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2017-11-16T20:00"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Role in BUS-T (Admin/Driver)" required name="Role"></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
                <p><button class="w3-button" type="submit" href="mailto:#">SEND MESSAGE</button></p>
            </form>
            </div>
        </div>
        </div>
        
    </body>
</html>
