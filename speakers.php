<!DOCTYPE html>
<html lang="en" data-theme="cmyk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speakers | ICSC 2022</title>
    <?php include 'includes.php' ?>
</head>

<body onload="getSpeakerTable();">
    <!-- Navbar begins -->

    <!-- Navbar ends -->

    <div class="relative w-full  mx-auto">
        <section class="z-50 ">
            <?php include 'navbar.php' ?>
        </section>
        <section>
            <h1 class="mt-10 mb-10 text-4xl text-center font-bold">Keynote Speakers</h1>
            <div id="speakerList" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mx-20 gap-4">

            </div>
            <div id="imgModal" class="img-modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01" />
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