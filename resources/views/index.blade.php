<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Seiji Kiyama</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Tailwind-->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Css Link -->
    <link rel="stylesheet" href="/css/style.css">


</head>
<body>

    <!-- Scroll Bar -->
    <div class="header fixed">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>


    <!-- Background Image 1-->
    <div class=" bg-no-repeat sm:bg-scroll md:bg-fixed lg:bg-fixed  xl:bg-fixed bg-center"
         style="background-image: url(images/background.jpg); background-size: cover;" id="top">
        <div style="height: 100vh" class="flex justify-center ">
            <div class="absolute text-left bottom-0 left-0 ml-5 mb-5 pb-5 pl-5">
                <h3 class="text-white text-5xl  xl:text-6xl ">Hi, I'm <br> Seiji Kiyama</h3>
            </div>

            <a href="#about_me" style="margin-top: calc(100vh - 210px)">
                <div class=" hidden-small" style="  padding-bottom: 30px;  padding-left: 20px; padding-right: 20px;">
                    <img alt="down" src="/images/down.svg" height="80px" width="80px" style=" padding-top: 100px;"
                         class="transition down duration-500 ease-in-out hover:w-1/2 hover:scale-110 transform hover:-translate-y-1">
                </div>
            </a>

        </div>
    </div>

    <!-- Background Image 2 -->

    <div class=" bg-no-repeat sm:bg-scroll md:bg-fixed lg:bg-fixed  xl:bg-fixed bg-center"
         style="background-image: url(images/background2.jpg); background-size: cover; height: 100vh" >


        <div class="xl:flex xl:justify-center lg:flex lg:justify-center md:flex md:justify-center shadow py-4"
             style="background-color: #EDF5F8" id="about_me">

            <!-- About Me -->
            <div class="md:flex xl:w-7/12  lg:w-7/12 md:w-7/12">

                <div class="sm:block sm:flex sm:justify-content md:flex-shrink-0 margin-left-image">
                    <img alt="profile photo" src="/images/profile.png"
                         class=" rounded-full transition duration-500 ease-in-out  hover:scale-110 transform hover:-translate-y-1"
                         style="width: 100px; height: 100px;">
                </div>
                <div class=" margin-left-text mt-4 sm:block md:mt-0 md:ml-6">
                    <p class="block mt-1 text-lg leading-tight font-semibold text-gray-900">About
                        Me</p>
                    <p class="mt-2 text-base italic text-gray-700">My name is Seiji Kiyama, I am 18 years old and I am
                        Brazilian, I like programming, like Laravel, PHP and JavaScript. I have 3 national medals in
                        scientific
                        olympics. My favorite classes are Math and Physics. My favorite hobby is to play the piano and
                        my
                        favorite sport is ping pong.</p>
                </div>
            </div>
        </div>


        <div style="margin-top: -60px;" class="flex justify-center">
            <a href="#skills" style="margin-top: calc(100vh - 310px) ;">
                <div class=" hidden-small" style=" ; padding-bottom: 30px;  padding-left: 20px; padding-right: 20px;">
                    <img alt="down" src="/images/down.svg" height="80px" width="80px"
                         style="margin-top: 10px; padding-top: 100px;"
                         class="transition down duration-500 ease-in-out hover:w-1/2 hover:scale-110 transform hover:-translate-y-1">
                </div>
            </a>
        </div>
    </div>

    <!-- Background Image 3 -->

    <div class=" bg-no-repeat sm:bg-scroll md:bg-fixed lg:bg-fixed  xl:bg-fixed bg-center flex justify-start"
         style="background-image: url(images/background3.jpg); background-size: cover; height: 100vh" >


        <div class=" py-4 w-64  shadow"
             style="background-color: #EDF5F8; height: 100%" id="skills">

            <div class="flex justify-center mt-5">
                <p class="text-lg leading-tight font-semibold text-gray-900">
                    Skills
                </p>
            </div>

            <div class="pl-5 ml-5 pt-5  text-gray-700">
                <ul>
                    <li class="flex flex-row">
                        <div><img alt="check mark" src="/images/check.svg" height="30px" width="30px"></div>
                        <p class="pt-2 pl-2">HTML</p></li>
                    <li class="flex flex-row space_item">
                        <div><img alt="check mark" src="/images/check.svg" height="30px"
                                  width="30px"></div>
                            <p class="pt-2 pl-2">CSS</p>
                            <p class="pt-2">
                    </li>
                    <li class="flex flex-row space_item">
                        <div><img alt="check mark" src="/images/check.svg" height="30px"
                                  width="30px"></div>
                            <p class="pt-2 pl-2">Bootstrap</p>
                    </li>
                    <li class="flex flex-row space_item">
                        <div><img alt="check mark" src="/images/check.svg" height="30px"
                                  width="30px"></div>
                            <p class="pt-2 pl-2">Tailwind Css</p>
                    </li>
                    <li class="flex flex-row space_item">
                        <div><img alt="check mark" src="/images/check.svg" height="30px"
                                  width="30px"></div>
                            <p class="pt-2 pl-2">Adobe XD</p>
                    <li class="flex flex-row space_item">
                        <div><img alt="check mark" src="/images/check.svg" height="30px"
                                  width="30px"></div>
                            <p class="pt-2 pl-2">Laravel</p>
                    <li class="flex flex-row space_item">
                        <div><img alt="check mark" src="/images/check.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-2 pl-2">English</p></li>
                    <li class="flex flex-row space_item">
                        <div><img alt="check mark" src="/images/check.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-2 pl-2">Portuguese</p></li>
                </ul>
            </div>
        </div>
        <div>
            <div class="" style="margin-left: calc(50vw - 323px)">
                <a href="#hobbies">
                    <div class=" hidden-small "
                         style="margin-top: calc(100vh - 210px); padding-bottom: 40px; padding-left: 30px; padding-right: 30px">
                        <img alt="down" src="/images/down.svg" height="80px" width="80px" style="padding-top: 90px;"
                             class="transition down duration-500 ease-in-out hover:w-1/2 hover:scale-110 transform hover:-translate-y-1">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Background 4 -->

    <div class=" relative bg-no-repeat sm:bg-scroll md:bg-fixed lg:bg-fixed  xl:bg-fixed bg-center flex justify-start"
         style="background-image: url(images/background4.jpg); background-size: cover; height: 100vh" >


        <div class=" py-4 w-64 absolute inset-y-0 right-0 "
             style="background-color: #EDF5F8; height: 100%" id="hobbies">

            <div class="flex justify-center mt-5">
                <p class="text-lg leading-tight font-semibold text-gray-900">
                    Hobbies
                </p>
            </div>

            <div class="pl-5 ml-5 pt-5  text-gray-700" style="margin-top: 20px;">
                <ul>
                    <li class="flex flex-row">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px" width="30px"></div>
                        <p class="pt-1 pl-2">Piano</p></li>
                    <li class="flex flex-row space_item2">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-1 pl-2">Soccer</p>
                        <p class="pt-2"></li>
                    <li class="flex flex-row space_item2">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-1 pl-2">Volleyball</p></li>
                    <li class="flex flex-row space_item2">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-1 pl-2">Rubik's Cube</p></li>
                    <li class="flex flex-row space_item2">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-1 pl-2">Ping Pong</p></li>
                    <li class="flex flex-row space_item2">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-1 pl-2">Camping</p></li>
                    <li class="flex flex-row space_item2">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-1 pl-2">Games</p></li>
                    <li class="flex flex-row space_item2">
                        <div><img alt="check mark" src="/images/check2.svg" height="30px"
                                  width="30px"></div>
                        <p class="pt-1 pl-2">Swimming</p></li>
                </ul>
            </div>
        </div>

        <div class="" style="margin-left: calc(50vw - 65px)">
            <a href="#contact-me">
                <div class=" hidden-small "
                     style="margin-top: calc(100vh - 210px); padding-bottom: 40px; padding-left: 30px; padding-right: 30px">
                    <img alt="down" src="/images/down.svg" height="80px" width="80px" style="padding-top: 90px;"
                         class="transition down duration-500 ease-in-out hover:w-1/2 hover:scale-110 transform hover:-translate-y-1">
                </div>
            </a>
        </div>
    </div>

    <!-- Bottom -->
    <div class="shadow py-4"
         style="background-color: #2F2E31" id="contact-me">
        <div class="flex justify-center pb-5">
            <div class="text-white">
                <p style="font-size: 30px;">Contact Me</p>
            </div>
        </div>

        <div class="flex justify-center py-5">
            <a href="https://www.linkedin.com/in/seiji-kiyama-984baa1a2/">
                <img alt="linkedin icon" src="/images/linkedin.svg" class="mr-4">
            </a>
            <a href="https://www.instagram.com/seijikiyama/">
                <img alt="instagram icon" src="/images/instagram.svg" class="mr-4">
            </a>
            <a href="https://www.facebook.com/people/Seiji-Kiyama/100008860540662">
                <img alt="facebook icon" src="/images/facebook.svg" class="mr-4">
            </a>

            <a href="https://github.com/seijikiy">
                <img alt="github icon" src="/images/github.svg" height="60px" width="60px" class="mr-4">
            </a>
        </div>

        <div class="text-white mt-5" style="margin-left: calc(50vw - 140px)">
            Page created by<strong> Seiji Kiyama | </strong>2020
        </div>
    </div>



    <!-- Medal
    <div class="grid grid-rows-2 grid-flow-col">
        <div class="row-span-2"><img alt="photo" src="/images/medal1.png" style="width: 50vw; height: 100%;"></div>
        <div class=""><img alt="photo" src="/images/medal2.jpg" style="width: 50vw"></div>
        <div class=""><img alt="photo" src="/images/medal3.jpg" style="width: 50vw"></div>
    </div> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Add smooth scrolling to all links
            $("a").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1000, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });</script>
    <script>
        window.onscroll = function () {
            scrollfunction()
        };

        function scrollfunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }
    </script>
</body>
</html>
