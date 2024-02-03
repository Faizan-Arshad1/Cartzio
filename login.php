<section
    class="md:h-screen py-36 flex items-center bg-orange-500/10 dark:bg-orange-500/20 bg-[url('../../assets/images/hero/bg-shape.html')] bg-center bg-no-repeat bg-cover">
    <div class="row container relative">
        <div class="grid grid-cols-1">
            <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                    <div class="relative md:shrink-0">
                        <img class="lg:h-full h-full w-full object-cover md:h-[34rem]" src="assets/images/login.jpg"
                            alt="">
                    </div>

                    <div class="p-8 lg:px-20">
                        <div class="text-center">
                            <a href="index.html">
                                <img src="assets/images/logo-dark.png" class="mx-auto block dark:hidden" alt="">
                                <img src="assets/images/logo-light.png" class="mx-auto hidden dark:block" alt="">
                            </a>
                        </div>
                        
                        <div class="mb-4">
                        <p class="text-danger">
                            <?php
                                if(isset($_POST['logmit']) && !isset($_SESSION['login'])){
                                    echo "Wrong username or password.";
                                }
                            ?>
                        </p>
                    </div>

                        <form method="post">
                            <div class="grid grid-cols-1">
                                <div class="mb-4">
                                    
                                     <label for="input-username">Username</label>
                                     <input type="text" name="username" 
                                        class="form-control mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                        placeholder="Enter Your Username">
                                </div>

                                <div class="mb-4">
                                    <label class="font-semibold" for="input-password">Password:</label>
                                    
                                    <input name="password" id="input-password" type="password"
                                        class="form-control mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                        placeholder="Password:">
                                </div>

                                <div class="flex justify-between mb-4">
                                    <div class="flex items-center mb-0">
                                        <input
                                            class="form-checkbox rounded border-gray-100 dark:border-gray-800 text-orange-500 focus:border-orange-300 focus:ring focus:ring-offset-0 focus:ring-orange-200 focus:ring-opacity-50 me-2"
                                            type="checkbox" value="" id="RememberMe">
                                        <label class="form-checkbox-label text-slate-400" for="RememberMe">Remember
                                            me</label>
                                    </div>
                                    <p class="text-slate-400 mb-0"><a href="forgot-password.html"
                                            class="text-slate-400">Forgot password ?</a></p>
                                </div>

                                <div class="mb-4">
                                
                                    <input type="submit"
                                        class="py-2 px-5 inline-block tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-md w-full"
                                        name="logmit" value="Login">
                                </div>

                                <div class="text-center">
                                    <span class="text-slate-400 me-2">Don't have an account ?</span> <a
                                        href="signup.html"
                                        class="text-black dark:text-white font-bold inline-block">Sign Up</a>
                                </div>
                            </div>
                        </form>

                        <div class="text-center">
                            <p class="mb-0 text-slate-400">©
                                <script>document.write(new Date().getFullYear())</script> Cartzio. Design with <i
                                    class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/"
                                    target="_blank" class="text-reset">Shreethemes</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--end section -->

<div class="fixed bottom-3 end-3">
    <a href="#"
        class="back-button size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-orange-500 text-white rounded-full"><i
            data-feather="arrow-left" class="h-4 w-4"></i></a>
</div>

<!-- Switcher -->
<div class="fixed top-1/4 -left-2 z-50">
    <span class="relative inline-block rotate-90">
        <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
        <label
            class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
            for="chk">
            <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500"></i>
            <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
            <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
        </label>
    </span>
</div>


<!-- LTR & RTL Mode Code -->
<div class="fixed top-[40%] -left-3 z-50">
    <a href="#" id="switchRtl">
        <span
            class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden">LTR</span>
        <span
            class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
    </a>
</div>
<!-- LTR & RTL Mode Code -->