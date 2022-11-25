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
        <section class="bg-[url('img/frontImg.jpg')] bg-repeat items-center justify-center lg:justify-start flex">
            <!--The conference is technically co-sponsored by IEEE UP Section + Logo-->
            <img src="img/IEEE_up_transparent.png" class="ml-8 w-[16rem] h-[10rem] bg-transparent object-contain" />
        </section>
        <section class="bg-cover">
            <img src="img/keynote/allspeakers.jpg" class="object-fit h-full w-full"></img>
            <!-- <div class=" owl-loaded mx-auto my-auto">  -->
                <!-- <img src="img/keynote/allspeakers.jpg" class="h-[20vh] lg:h-[40vh] w-full object-fit" /> -->
                <!-- <div class="owl-stage-outer">
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
                        <div class="owl-item"><img src="img/slider/19.jpg" class="h-[20vh] lg:h-[40vh] w-full object-cover" /></div>
                    </div>
                </div> -->
                <img />
            </div>
        </section>
        <section class="border-b border-gray-300">
            <div class="flex flex-col md:flex-row items-start justify-around">
                <div class="pt-8 card-body">
                    <h2 class="text-2xl font-bold card-title">Latest News and Announcements</h2>
                    <ol class="flex flex-col space-y-4 mx-8 mt-4 list-decimal">
                    <li class="flex flex-col space-y-1 animate-pulse">
                            <span class="text-red-500 font-bold">All accepted papers will be included in ICSC 2022 Conference Proceedings. <br>All the registered and presented papers will be published in IEEE Xplore Digital Library (Indexed by Scopus)</span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Program Plan</h6>
                            <span>For more details, please click <a href="resources/17-22 Session  plan_ICSC 2022.pdf" download="17-22_Session_plan_ICSC_2022.pdf" class="text-primary">here</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Latest Updates</h6>
                            <span>Visit our facebook page for latest updates! <a class="text-primary" href="https://www.facebook.com/profile.php?id=100079333816857" target="_blank">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">IEEE Conference Calender</h6>
                            <span>Find us on official calender, please click <a class="text-primary" href="https://conferences.ieee.org/conferences_events/conferences/conferencedetails/56524">HERE</a></span>
                        </li>
                    <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Previous ICSC Conferences</h6>
                            <span>For more details please click <a class="text-primary" href="about.php">HERE</a></span>
                        </li>
                        <li class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Call for Papers</h6>
                            <span>For more details please click <a class="text-primary" href="resources/Final Call for Papers_ICSC 2022.pdf" download="Final Call for Papers_ICSC 2022.pdf">HERE</a></span>
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
                            <span class="text-primary">Coming soon!</span>
                        </li>
                    </ol>
                </div>
                <div class="card-body text-justify">
                    <h2 class="card-title text-2xl font-bold">Important Deadlines</h2>
                    <hr>
                    <table class="table table-compact w-full">
                        <tbody>
                            <tr>
                                <td class="text-sm md:text-xl">Full Paper Submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl"><s>September 20, 2022</s></td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Notification of acceptance</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl"><s>October 15, 2022</s></td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Registration</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">October 31, 2022</td>
                            </tr>
                            <tr>
                                <td class="text-sm md:text-xl">Link to paper submission</td>
                                <td class="rounded text-primary font-bold text-sm md:text-xl">
                                    <span class="rounded font-bold" style="color:gray">EDAS</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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