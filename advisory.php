<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisory Committee | ICSC 2022 Conference</title>
    <?php include 'includes.php' ?>
</head>

<body onload="getAdvisoryCommitteeTable();">
    <!-- Navbar begins -->
    <!-- Navbar ends -->

    <div class="relative w-full  mx-auto">
        <section class="relatve z-1">
            <?php include 'navbar.php' ?>
        </section>
        <section>
            <div class="grid grid-cols-7 dark:">
                <div class="col-span-7 flex justify-center m-5">
                    <span class="dark: text-3xl font-bold py-6">Advisory Committee</span>
                </div>
                <div></div>
                <div class="col-span-5 flex justify-center my-10">
                    <div class="overflow-x-auto" id="advisoryData"></div>
                </div>
                <div></div>

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