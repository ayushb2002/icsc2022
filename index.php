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
    <!-- Navbar begins -->

    <!-- Navbar ends -->
    <div class="relative w-full md:w-[80%] mx-auto">
        <section class="z-50">
            <?php include 'navbar_new.php' ?>
        </section>
        <section class="bg-[url('img/heroImg.jpg')] bg-contain">
            <!-- <div class="h-auto bg-[url('img/heroImg.jpg')] bg-cover bg-no-repeat overflow-hidden pt-1 border-b-2">
                <div class="m-auto z-[1] block w-[100%] h-full">
                    <div class="">
                        <div class="my-3 text-center">
                            <span class="text-gray-900 font-bold text-4xl">8<sup>th</sup> INTERNATIONAL CONFERENCE ON
                                SIGNAL <br>
                                PROCESSING AND COMMUNICATION 2022</span>
                        </div>

                        <div class="my-1 text-center">
                            <span class="text-blue-900 text-2xl font-bold">December 01 - 03, 2022</span>
                        </div>
                        <div class="my-1 text-center">
                            <span class="text-blue-900  text-2xl font-bold">IEEE Conference Record Number - 56524 </span>
                        </div>

                        <div class="grid grid-row-5 lg:grid-cols-5">
                            <div class="my-12 px-auto">
                                <img src="img/jiit.png" alt="jaypee" class="w-[20vh] h-auto lg:w-[20vh] lg:h-[25vh] mx-auto" loading="lazy">
                            </div>
                            <div class="row-span-3 lg:col-span-3">

                                <div class="flex items-center justify-center my-4" x-data="beer()" x-init="start()">
                                    <div class="p-5 lg:p-12 light:bg-gray-100 bg-base-300">
                                        <h1 class="lg:text-3xl text-center mb-3">FULL PAPER SUBMISSION</h1>
                                        <div class="lg:text-6xl text-center flex w-full items-center justify-center">
                                            <div class="lg:text-2xl lg:mr-1">IN</div>
                                            <div class="lg:w-24 mx-1 p-2 light:bg-white bg-base-100 rounded-lg">
                                                <div class="font-mono leading-none" x-text="days">00</div>
                                                <div class="font-mono uppercase text-sm leading-none">Days</div>
                                            </div>
                                            <div class="lg:w-24 mx-1 p-2 light:bg-white bg-base-100 rounded-lg">
                                                <div class="font-mono leading-none" x-text="hours">00</div>
                                                <div class="font-mono uppercase text-sm leading-none">Hours</div>
                                            </div>
                                            <div class="lg:w-24 mx-1 p-2 light:bg-white bg-base-100 rounded-lg">
                                                <div class="font-mono leading-none" x-text="minutes">00</div>
                                                <div class="font-mono uppercase text-sm leading-none">Minutes</div>
                                            </div>
                                            <div class="lg:text-2xl mx-1">AND</div>
                                            <div class="lg:w-24 mx-1 p-2 light:bg-white bg-base-100 rounded-lg">
                                                <div class="font-mono leading-none" x-text="seconds">00</div>
                                                <div class="font-mono uppercase text-sm leading-none">Seconds</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-12 px-auto">
                                <img src="img/ieee_transparent.png" alt="IEEE" class="w-[30vh] h-auto lg:w-[40vh] lg:h-[9vh] mx-auto" loading="lazy">
                            </div>
                        </div>


                        <div class="text-center">
                            <p class="text-gray-900 text-2xl mb-3">
                                Organized by - <br>
                                Department of Electronics and Communication Engineering<br>
                                Jaypee Institute of Information Technology, Noida, INDIA<br>
                                <span class="text-xl">(Deemed To be University Under Section 3 of UGC Act 1956)</span>
                            </p>
                            <p class="text-gray-900 text-2xl font-bold mb-10" style="color:red">
                                Conference is being held in <b class="animate-pulse">Online Mode (Virtual)</b>!
                            </p>
                        </div>
                    </div>
                </div>

            </div> -->
        </section>
        <section class="border-b border-gray-300">
            <div class="flex items-start justify-around">
                <div class="pt-8">
                    <h2 class="text-2xl font-bold">Latest News and Announcements</h2>
                    <div class="flex flex-col space-y-4 mx-8 mt-4">
                        <div class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Headline 1</h6>
                            <span>For more details please click <a class="text-primary" href="h1.php">HERE</a></span>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <h6 class="font-bold text-lg">Headline 2</h6>
                            <span>For more details please click <a class="text-primary" href="h2.php">HERE</a></span>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="card-body text-justify">
                        <h2 class="card-title text-xl">Important Dates</h2>
                        <hr>
                        <table class="table table-compact w-full">
                            <tbody>
                                <tr>
                                    <td class="text-xl">Full Paper Submission</td>
                                    <td class="rounded text-primary font-bold text-xl">July 31, 2022</td>
                                </tr>
                                <tr>
                                    <td class="text-xl">Notification of acceptance</td>
                                    <td class="rounded text-primary font-bold text-xl">October 10, 2022</td>
                                </tr>
                                <tr>
                                    <td class="text-xl">Final Paper Submission</td>
                                    <td class="rounded text-primary font-bold text-xl">November 1, 2022</td>
                                </tr>
                                <tr>
                                    <td class="text-xl">Registration</td>
                                    <td class="rounded text-primary font-bold text-xl">October 25, 2022</td>
                                </tr>
                                <tr>
                                    <td class="text-xl">Link to paper submission</td>
                                    <td class="rounded text-primary font-bold text-xl">
                                        <a href="https://edas.info/N29278" target="_blank"><span class="rounded text-primary font-bold">EDAS</span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-center">
            <div class="grid lg:grid-cols-3 p-5">
                <div class="lg:col-span-2 p-5">
                    <div class="w-100 text-center mt-3 mb-3"><span class="text-3xl font-bold">ICSC 2022</span></div>
                    <div class="w-100 text-justify p-3">
                        <p>Signal processing consists of representation and transformation of signals and the
                            information
                            that they carry. Over the years, signal processing has immensely developed to provide
                            phenomenal
                            growth in the area of microchips, digital systems and computer hardware.
                            <br>
                            <br>
                            The applications of signal processing are vast and interdisciplinary-ranging from
                            engineering to
                            economics and astronomy to biology. The research in areas such as signal coding and
                            de-noising
                            have paved the path for these advancements.
                            <br>
                            <br>
                            Recent decade has witnessed major revolution in communication and processing of digital
                            media.
                            As a consequence, solution to major problems in processing, transmission and reception have
                            made
                            signal processing an integral part of modern electronic and communication systems.
                            Communication
                            on the other hand plays major role in our day to day life. The communication technology
                            helps in
                            the advancement of modern systems to meet our need of efficient exchange of ideas. The
                            current
                            research includes the areas of cognitive radio and IOT.
                            <br>
                            <br>
                            There is a need for providing a forum to scientists and researchers to discuss and put
                            forward
                            their ideas and research findings with the co-researchers from all over the world. ICSC 2022
                            will provide an opportunity to highlight recent developments and to identify emerging and
                            future
                            areas of growth in these fields. It will further give impetus to the researchers for
                            proposing
                            novel efficient techniques.
                            <br>
                            <br>
                            Keynote speakers with their vast research experience in various research fields will
                            generate
                            interest among participants for development of signal processing and communication
                            engineering
                            technology. With the participation of several experts and their diverse areas of research,
                            it is
                            expected that the conference will help in meeting the future challenges of industry,
                            academia
                            and research.
                        </p>

                        <div>
                            <div class="flex justify-center my-5">
                                <img src="img/IEEE_up.png" alt="IEEE" class="w-[40vh] h-[20vh]" loading="lazy">
                            </div>
                            <marquee>
                                <h3>
                                    <center>
                                        <font color="red">Technically Co-sponsored by IEEE UP Section.</font>
                                    </center>
                                    <center>
                                        <font size="4">All the selected papers that are presented in the conference will
                                            be
                                            considered for publication in IEEE Xplore Proceedings (IEEE Conference
                                            Record No
                                            : 56524)</font>
                                    </center>
                                </h3>
                            </marquee>
                        </div>
                    </div>
                </div>
                <div class="pt-12 flex flex-col space-y-8">
                    <div class="card shadow-2xl mt-8 border-2">
                        <div class="card-body text-justify">
                            <h2 class="card-title">Conference Organizers</h2>
                            <hr>
                            <div class="content-center">
                                <span class="font-bold text-primary">Chief Patron</span> <br>
                                <span class="">
                                    Sh. Jaiprakash Gaur Ji <br>
                                    Sh. Manoj Gaur Ji <br>
                                </span>
                            </div>
                            <div class="content-center">
                                <span class="font-bold text-primary">Patron</span> <br>
                                <span class="">
                                    Prof. S. C. Saxena <br>
                                    Prof. Y. R. Sood <br>
                                </span>
                            </div>
                            <div class="content-center">
                                <span class="font-bold text-primary">General Chair</span> <br>
                                <span class="">
                                    Prof. Hari Om Gupta <br>
                                    Prof. Shweta Srivastava <br>
                                </span>
                            </div>
                            <div class="content-center">
                                <span class="font-bold text-primary">Organizing Secretary</span> <br>
                                <span class="">
                                    Prof. (Dr.) Jitendra Mohan <br>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <?php include 'footer.php' ?>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</body>

</html>