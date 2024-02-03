<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<!-- Mirrored from shreethemes.in/cartzio/layouts/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Feb 2024 20:56:15 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Cartzio - Fashion Store eCommerce Tailwind CSS Landing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Fashion Store eCommerce Tailwind CSS Landing Template" name="description">
        <meta content="Shop, Fashion, eCommerce, Cart, Shop Cart, tailwind css, Admin, Landing" name="keywords">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.0.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

    </head>
    <body class="dark:bg-slate-900">
<section class="md:h-screen py-36 flex items-center bg-orange-500/10 dark:bg-orange-500/20 bg-[url('../../assets/images/hero/bg-shape.html')] bg-center bg-no-repeat bg-cover">
            <div class="container relative">
                <div class="grid grid-cols-1">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                        <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                            <div class="relative md:shrink-0">
                                <img class="h-full w-full object-cover md:h-[44rem]" src="assets/images/signup.jpg" alt="">
                            </div>

                            <div class="p-8 lg:px-20">
                                <div class="text-center">
                                    <a href="index.html">
                                        <img src="assets/images/logo-dark.png" class="mx-auto block dark:hidden" alt="">
                                        <img src="assets/images/logo-light.png" class="mx-auto hidden dark:block" alt="">
                                    </a>
                                </div>

                                
                                <form class="text-start lg:py-20 py-8" method="post" action="signup.php">
                                    <div class="grid grid-cols-1">
                                        <div class="mb-4">
                                            <label class="font-semibold" for="user">Your Name:</label>
                                            <input id="input-user" type="text" name="user" class="form-control mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Enter your User Name">
                                        </div>
        
                                        <div class="mb-4">
                                            <label class="font-semibold" for="email">Email Address:</label>
                                            <input id="input-email" name='email'type="email" class="form-control mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="name@example.com">
                                        </div>
        
                                        <div class="mb-4">
                                            <label class="font-semibold" for="pass">Password:</label>
                                            <input id="input-pass" name="pass" type="password" class="form-control mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Password:">
                                        </div>
        
                                        <div class="mb-4">
                                            <div class="flex items-center w-full mb-0">
                                                <input class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2" type="checkbox" value="" id="AcceptT&C">
                                                <label class="form-check-label text-slate-400" for="AcceptT&C">I Accept <a href="#" class="text-orange-500">Terms And Condition</a></label>
                                            </div>
                                        </div>
        
                                        <div class="mb-4">
                                            <input type="submit" name="regmit" class="py-2 px-5 inline-block tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md w-full" value="Register">
                                        </div>
        
                                        <div class="text-center">
                                            <span class="text-slate-400 me-2">Already have an account ? </span> <a href="login.html" class="text-black dark:text-white font-bold inline-block">Sign in</a>
                                        </div>
                                    </div>
                                </form>

                                <div class="text-center">
                                    <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> Cartzio. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--end section -->

        <div class="fixed bottom-3 end-3">
            <a href="#" class="back-button size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-full"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
        </div>

        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>