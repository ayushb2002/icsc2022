<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICSC 2022 Conference</title>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <?php include 'includes.php' ?>
</head>

<body>
    <div class="relative w-full  mx-auto pb-4">
        <section class="z-50">
            <?php include 'navbar.php' ?>
        </section>
        <section class="bg-[url('img/frontImg.jpg')] bg-repeat items-center ml-8 justify-center lg:justify-start flex">
            <!--The conference is technically co-sponsored by IEEE UP Section + Logo-->
            <div class="flex flex-col items-center justify-center">
                <!-- <h3>Technically Co-Sponsored by IEEE UP Section</h3> -->
                <img src="img/IEEE_up_transparent.png" class="w-[16rem] h-[10rem] object-contain" />
            </div>
        </section>
        <section class="bg-[url('img/heroImg.jpg')] bg-cover">
            <div class="owl-carousel owl-theme owl-loaded mx-auto my-auto">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item"><img src="img/slider/1.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/2.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/3.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/4.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/5.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/6.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/7.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/8.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/9.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/10.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/11.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/12.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/13.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/14.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/15.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/16.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/17.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                        <div class="owl-item"><img src="img/slider/18.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="border-b border-gray-300">
            <div class="flex flex-col md:flex-row items-start justify-around">
                <div class="pt-8 card-body">
                    <h2 class="text-2xl font-bold card-title">Latest News and Announcements</h2>
                    <ol class="flex flex-col space-y-4 mx-8 mt-4 list-decimal">
                    <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Previous ICSC Conferences</h6>
                            <span>For more details please click <a class="text-primary" href="about.php">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Call of Papers</h6>
                            <span>For more details please click <a class="text-primary" href="resources/Call for Paper_ICSC 2022_IEEE.pdf" download="Call for Paper_ICSC 2022_IEEE.pdf">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for the Authors</h6>
                            <span>For more details please click <a class="text-primary" href="instruction.php">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">List of Distinguished TPC Members</h6>
                            <span>For more details please click <a class="text-primary" href="resources/TPC2022.pdf" download="Distinguished_Technical_Programming_Committee.pdf">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Instructions for Attendees</h6>
                            <!-- <span>For more details please click <a class="text-primary" href="#">HERE</a></span> -->
                            <span class="text-primary">Coming soon!</span>
                        </li>
                    </ol>
                </div>
                <div class="card-body text-justify">
                    <h2 class="card-title text-2xl font-bold">Important Dates</h2>
                    <hr>
                    <table class="table table-compact w-full">
                        <tbody>
                            <tr>
                                <td class="text-sm md:text-xl">Full Paper Submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">July 31, 2022</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Notification of acceptance</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">October 10, 2022</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Final Paper Submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">November 1, 2022</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Registration</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">October 25, 2022</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Link to paper submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    <a href="https://edas.info/N29278" target="_blank"><span class="rounded text-primary font-bold">EDAS</span></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="flex items-center justify-center my-4 border-t border-gray-300" x-data="beer()" x-init="start()">
                <div class="p-5 lg:p-12 bg-white">
                    <h1 class="lg:text-5xl text-center mb-3 text-blue-800">FULL PAPER SUBMISSION ENDS IN</h1>
                    <div class="lg:text-6xl text-center flex w-full items-center justify-center">
                        <div class="lg:w-24 mx-1 p-2 border border-gray-300 text-error rounded-lg">
                            <div class="font-mono leading-none" x-text="days">00</div>
                            <div class="font-mono uppercase text-sm leading-none">Days</div>
                        </div>
                        <div class="lg:w-24 mx-1 p-2 border border-gray-300 text-error bg-white rounded-lg">
                            <div class="font-mono leading-none" x-text="hours">00</div>
                            <div class="font-mono uppercase text-sm leading-none">Hours</div>
                        </div>
                        <div class="lg:w-24 mx-1 p-2 border border-gray-300 text-error bg-white rounded-lg">
                            <div class="font-mono leading-none" x-text="minutes">00</div>
                            <div class="font-mono uppercase text-sm leading-none">Minutes</div>
                        </div>
                        <div class="lg:w-24 mx-1 p-2 border border-gray-300 bg-white text-error rounded-lg">
                            <div class="font-mono leading-none" x-text="seconds">00</div>
                            <div class="font-mono uppercase text-sm leading-none">Seconds</div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <section class="flex flex-col card-body">
            <h2 class="card-title text-3xl">Conference Organizers</h2>
            <hr class="w-full" />
            <div class="flex flex-col lg:flex-row justify-between items-start space-y-4 lg:space-y-0">
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Chief Patron</h6>
                    <ul>
                        <li>Sh. Jaiprakash Gaur Ji</li>
                        <li>Sh. Manoj Gaur Ji</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Patron</h6>
                    <ul>
                        <li>Prof. S. C. Saxena</li>
                        <li>Prof. Y. R. Sood</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">General Chair</h6>
                    <ul>
                        <li>Prof. Hari Om Gupta</li>
                        <li>Prof. Shweta Srivastava</li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h6 class="font-bold text-primary">Organizing Secretary</h6>
                    <ul>
                        <li>Prof. Jitendra Mohan</li>
                    </ul>
                </div>
            </div>
        </section>
        <hr class="w-full" />
        <?php include 'footer.php' ?>
    </div>
    <script src="js/owl.carousel.min.js"></script>
</body>

</html>