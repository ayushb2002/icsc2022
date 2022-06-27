<!DOCTYPE html>
<html lang="en" data-theme="lemonade">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Program Committee | ICSC 2022 Conference</title>
    <?php include 'includes.php' ?>
</head>
<body>
    <!-- Navbar begins -->
    <section class="sticky top-0 z-50">
        <?php include 'navbar.php' ?>
    </section>
    <!-- Navbar ends -->

    <div class="relative">
        <section>
            <div class="grid grid-cols-7 dark:">
                <div class="col-span-7 flex justify-center m-5">
                    <span class="dark: text-3xl font-bold">Track Chairs</span>
                </div>
                <div></div>
                <div class="col-span-5 overflow-x-auto my-10">
                    <table class="table text-center mx-auto">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="p-3">Communication</th>
                                <th class="p-3">Signal Processing</th>
                                <th class="p-3">VLSI Technology & Embedded Systems</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-3 font-bold">
                                    Chair
                                </td>
                                <td class="p-3">
                                Prof. M. V. Kartikeyan, IIT, Tirupati, India
                                </td>
                                <td class="p-3">
                                Prof. Rajiv Saxena, JIIT, Noida, India
                                </td>
                                <td class="p-3">
                                Prof. Sudeb Das Gupta, IIT, Roorkee, India
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3 font-bold">
                                    Co-chair
                                </td>
                                <td class="p-3">  
                                Dr. Jasmine Saini, JIIT, Noida, India
                                </td>
                                <td class="p-3">
                                Dr. Richa Gupta, JIIT, Noida, India
                                </td>
                                <td class="p-3">
                                Dr. Satyendra Kumar, JIIT, Noida, India
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div></div>

                <div class="col-span-7 flex justify-center m-5">
                    <span class="dark: text-3xl font-bold">Technical Program Committee</span>
                </div>
                <div></div>
                <div class="col-span-5 flex justify-center mt-10" >
                    <div class="overflow-x-auto" id="tpcData">

                    </div>
                </div>
                <div></div>

            </div>
        </section>
    </div>

    <!-- Footer begins -->
    <section>
        <?php include 'footer.php' ?>
    </section>
    <!-- Footer ends -->
</body>
</html>