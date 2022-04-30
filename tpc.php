<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Program Committee | ISCS 2022 Conference</title>
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
            <div class="grid grid-cols-6 bg-gray-900">
                <div class="col-span-6 flex justify-center m-5">
                    <span class="text-white text-3xl font-bold">Technical Program Committee</span>
                </div>
                <div></div>
                <div class="col-span-4 p-5 text-justify overflow-hidden">


                    <table class="table table-normal text-justify" id="tpcData">
                        <tr>
                            <th>Name</th>
                            <th>Email Address</th>
                        </tr>

                    </table>
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