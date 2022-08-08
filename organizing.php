<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizing Committees | ICSC 2022</title>
    <?php include 'includes.php' ?>
</head>

<body onload="getOrganizingCommitteeTable();">
    <!-- Navbar begins -->

    <!-- Navbar ends -->

    <div class="relative w-full  mx-auto">
        <section class="z-50">
            <?php include 'navbar.php' ?>
        </section>
        <section>
            <div class="flex items-center flex-col">
                <div class="flex justify-center m-5">
                    <span class="text-3xl font-bold dark: capitalize">Organizing Committee</span>
                </div>

                <div></div>

                <div class="flex flex-col text-justify">

                    <div class="divider"></div>
                        <div class="flex flex-col">
                            <div class="my-2 flex justify-around items-start space-x-64">
                                <div class="flex flex-col">
                                    <b class="text-lg mb-1">General Chair:</b>
                                    <a href="http://www.jiit.ac.in/director-sector-%E2%80%93-128" target="_blank" class="underline">Prof. Hariom Gupta</a>
                                    <span>JIIT Noida</span>
                                </div>
                                <div class="flex flex-col">
                                    <b class="text-lg mb-1">Organizing Secretary:</b>
                                    <a href="https://www.jiit.ac.in/prof-jitendra-mohan" target="_blank" class="underline">Prof. Jitendra Mohan</a>
                                    <span>Department of Electronics & Communication</span>
                                    <span>JIIT Noida</span>
                                </div>
                                <div class="flex flex-col">
                                    <b class="text-lg mb-1">Publication Chairs</b>
                                    <a href="https://www.jiit.ac.in/dr-bhartendu-chaturvedi" target="_blank" class="underline">Dr. Bhartendu Chaturvedi</a>
                                    <a href="https://www.jiit.ac.in/prof-sajai-vir-singh" class="underline">Prof. Sajai Vir Singh</a>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="flex flex-col">
                                    <a href="http://www.jiit.ac.in/prof-shweta-srivastava" target="_blank" class="underline">Prof. Shweta Srivastava</a>
                                    <span>Department of Electronics & Communication</span>
                                    <span>JIIT Noida</span>
                                </div>
                        </div>
                        <!-- <table class="table table-compact w-full">
                            <tr class="my-2 flex justify-between items-center">
                                <td class="flex flex-col space-y-1">
                                    <b class="text-lg mb-1">General Chair:</b>
                                    <a href="http://www.jiit.ac.in/director-sector-%E2%80%93-128" target="_blank" class="underline">Prof. Hariom Gupta</a>
                                    <span></span>
                                    <span>JIIT Noida</span>
                                </td>

                                <td class="flex flex-col space-y-1">
                                    <b class="text-lg mb-1">Organizing Secretary:</b>
                                    <a href="https://www.jiit.ac.in/prof-jitendra-mohan" target="_blank" class="underline">Prof. Jitendra Mohan</a>
                                    <span>Department of Electronics & Communication</span>
                                    <span>JIIT Noida</span>
                                </td>
                            </tr>
                            <tr class="my-2">
                                <td class="flex flex-col space-y-2">
                                    <a href="http://www.jiit.ac.in/prof-shweta-srivastava" target="_blank" class="underline">Prof. Shweta Srivastava</a>
                                    <span>Department of Electronics & Communication</span>
                                    <span>JIIT Noida</span>
                                </td>
                                <td></td>
                            </tr>
                        </table> -->
                    <div id="organizingTable" class="mt-6">

                    </div>
                </div>
                <div></div>
                <div class="mt-5"></div>
            </div>
        </section>
        <hr class="w-full" />
        <section>
            <?php include 'footer.php' ?>
        </section>
    </div>

    <!-- Footer begins -->

    <!-- Footer ends -->
</body>

</html>