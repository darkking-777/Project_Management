<?php
    session_start();
    if (isset($_SESSION['id'])){
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Srkr Hub</title>
        <link rel="stylesheet" href="styles/index.css">
    </head>
    <body bgcolor="#0e1116">
        <nav>
            
                <div class="logo">
                    <img src="images/logo_main.png",alt="logo">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="mentors.php">Mentors</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="">|</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            
        </nav>
        <div class="content">
    <div class="  flex items-center justify-center text-center">
                                                <div class="flex flex-col p-2 m-2  max-w-7xl">
                                                    <div class=" text-3xl font-medium"  style="background-color:black;color:white">Deep Learning</div>
                                                   <!--- <div class="text-sm mx-2 md:text-xl text-stone-500">Meet the team member who have contributed their designs for this websites.</div>
                                                    <div class="text-sm mx-2 md:text-xl mb-2 text-stone-500">Resource person of Tailblocks communinty</div>-->
                                        
                                                    <div class="flex items-center justify-center md:flex-row flex-col space-x-4 space-y-2  p-2">
                                                       
                                                        <div class="flex-col px-6 w-auto md:w-40 py-2 ml-3 md:ml-0 bg-gray-300 rounded-2xl">
                                                            <div class="h-28 w-28  rounded-full overflow-hidden bg-gray-200">
                                        
                                                            <a href="https://sites.google.com/site/srkrvvs/welcome/my-profile"> <img  src="images/mlsivasir.png" alt="" class="" /></a>
                                                            </div>
                                                            
                                                            <div class="text-lg font-medium text-stone-600 cursor-pointer hover:text-stone-400">V.SIVA RAMA RAJU</div>
                                                            <div class=" italic text-gray-500">ASST PROFESSOR</div>
                                                        </div>
                                                        <div class="flex-col px-6 w-auto md:w-40 py-2  bg-gray-300 rounded-2xl">
                                                            <div class="h-28 w-28  rounded-full overflow-hidden bg-gray-200">
                                        
                                                                <a href="https://sites.google.com/view/shivashankarreddy"> <img  src="images/mlshankarsir.png" alt="" class="" /></a>
                                                            </div>
                                                            
                                                            <div class="text-lg font-medium text-stone-600 cursor-pointer hover:text-stone-400">R.SIVA SHANKAR</div>
                                                            <div class=" italic text-gray-500">ASST PROFESSOR </div>
                                                        </div>
                                                        <div class="flex-col px-6 w-auto md:w-40 py-2  bg-gray-300 rounded-2xl">
                                                            <div class="h-28 w-28  rounded-full overflow-hidden bg-gray-200">
                                        
                                                             <a href="https://sites.google.com/view/bnrsrkr/home">  <img  src="images/mlBnvsir.png" alt="" class="" /></a>
                                                            </div>
                                                            
                                                            <div class="text-lg font-medium text-stone-600 cursor-pointer hover:text-stone-400">BNVN Simha Raju</div>
                                                            <div class=" italic text-gray-500">ASST PROFESSOR</div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="flex space-x-4 space-y-2  p-2 items-center justify-center md:flex-row flex-col ">
                                                        <div class="flex-col px-6 w-auto md:w-40 py-2 ml-3 md:ml-0 bg-gray-300 rounded-2xl">
                                                            <div class="h-28 w-28  rounded-full overflow-hidden bg-gray-200">
                                        
                                                               <a href="https://sites.google.com/view/dnsbkavitha/home" ></a><img  src="images/mlkavithamam.png" alt="" class="" />
                                                            </div>
                                                            
                                                            <div class="text-lg font-medium text-stone-600 cursor-pointer hover:text-stone-400">DNSB Kavitha</div>
                                                            <div class=" italic text-gray-500">ASST PROFESSOR</div>
                                                        </div>
                                                        <div class="flex-col px-6 w-auto md:w-40 py-2  bg-gray-300 rounded-2xl">
                                                            <div class="h-28 w-28  rounded-full overflow-hidden bg-gray-200">
                                        
                                                            <a href="https://sites.google.com/view/nkkamesh"> <img  src="images/mlkameshsir.png" alt="" class="" /></a>
                                                            </div>
                                                            
                                                            <div class="text-lg font-medium text-stone-600 cursor-pointer hover:text-stone-400">NKKameshwar Rao</div>
                                                            <div class=" italic text-gray-500">ASSOC PROFESSOR</div>
                                                        </div>
                                                        <div class="flex-col px-6 w-auto md:w-40 py-2  bg-gray-300 rounded-2xl">
                                                            <div class="h-28 w-28  rounded-full overflow-hidden bg-gray-200">
                                        
                                                            <a href="https://sites.google.com/view/dr-sirisha-gadiraju">  <img  src="images/mlsirishamam.png" alt="" class="" /></a>
                                                            </div>
                                                            
                                                            <div class="text-lg font-medium text-stone-600 cursor-pointer hover:text-stone-400">Sirisha Gadiraju</div>
                                                            <div class=" italic text-gray-500">ASSOC PROFESSOR</div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <script src="https://cdn.tailwindcss.com"></script>
                                                <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
                                                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 

        </div>
    </body>
</html>