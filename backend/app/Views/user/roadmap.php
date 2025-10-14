<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameSell Roadmap</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <script>
      // Apply the Poppins font family to the body
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Poppins', 'sans-serif'],
            },
          },
        },
      }
    </script>
</head>
<body class="bg-[#111111] text-gray-100 font-sans">

<div>
<!-- include the header button here -->

</div>


    <div class="container mx-auto max-w-4xl py-12 px-4">
        
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-2">Roadmap</h1>
            <p class="text-lg text-gray-400">Our journey to bringing you the ultimate marketplace.</p>
        </div>

        <div class="relative">
            <div class="hidden md:block absolute top-0 left-1/2 -translate-x-1/2 w-0.5 h-full bg-yellow-400/30"></div>
            <div class="md:hidden absolute top-0 left-6 w-0.5 h-full bg-yellow-400/30"></div>

            <div class="space-y-12 md:space-y-0">

                <div class="md:w-1/2 md:pr-8">
                    <div class="
                        group relative ml-12 md:ml-0 bg-[#1c1c1c] p-6 rounded-lg border border-yellow-400/30 
                        hover:-translate-y-1 hover:shadow-lg hover:shadow-yellow-400/10 
                        transition-all duration-300 cursor-pointer
                        
                        /* --- Common Ghost Styles --- */
                        after:content-[''] after:bg-[url('ghost.png')] after:bg-contain after:bg-no-repeat
                        after:absolute after:top-1/2 after:w-[60px] after:h-[60px] after:opacity-0
                        after:transition-all after:duration-300 after:pointer-events-none

                        /* --- Left-Side Ghost Position & Animation --- */
                        after:right-[-80px] after:-translate-y-1/2
                        group-hover:after:opacity-80 group-hover:after:rotate-[-5deg]
                    ">
                        <h3 class="font-bold text-lg text-yellow-400">Login </h3>
                        <p class="text-sm text-gray-400">Secure and easy access to your gaming world.</p>
                    </div>
                </div>

                <div class="md:w-1/2 md:ml-auto md:pl-8">
                     <div class="
                        group relative ml-12 md:ml-0 bg-[#1c1c1c] p-6 rounded-lg border border-yellow-400/30 
                        hover:-translate-y-1 hover:shadow-lg hover:shadow-yellow-400/10 
                        transition-all duration-300 cursor-pointer

                        /* --- Common Ghost Styles --- */
                        after:content-[''] after:bg-[url('ghost.png')] after:bg-contain after:bg-no-repeat
                        after:absolute after:top-1/2 after:w-[60px] after:h-[60px] after:opacity-0
                        after:transition-all after:duration-300 after:pointer-events-none
                        
                        /* --- Right-Side Ghost Position & Animation --- */
                        after:left-[-80px] after:-translate-y-1/2 after:scale-x-[-1]
                        group-hover:after:opacity-80 group-hover:after:rotate-[5deg]
                    ">
                        <h3 class="font-bold text-lg text-yellow-400">Signup </h3>
                        <p class="text-sm text-gray-400">Quickly create an account and join the community.</p>
                    </div>
                </div>

                <div class="md:w-1/2 md:pr-8">
                     <div class="
                        group relative ml-12 md:ml-0 bg-[#1c1c1c] p-6 rounded-lg border border-yellow-400/30 
                        hover:-translate-y-1 hover:shadow-lg hover:shadow-yellow-400/10 
                        transition-all duration-300 cursor-pointer
                        
                        /* --- Common Ghost Styles --- */
                        after:content-[''] after:bg-[url('ghost.png')] after:bg-contain after:bg-no-repeat
                        after:absolute after:top-1/2 after:w-[60px] after:h-[60px] after:opacity-0
                        after:transition-all after:duration-300 after:pointer-events-none

                        /* --- Left-Side Ghost Position & Animation --- */
                        after:right-[-80px] after:-translate-y-1/2
                        group-hover:after:opacity-80 group-hover:after:rotate-[-5deg]
                    ">
                        <h3 class="font-bold text-lg text-yellow-400">Landing Page </h3>
                        <p class="text-sm text-gray-400">A stunning welcome to our game marketplace.</p>
                    </div>
                </div>

                <div class="md:w-1/2 md:ml-auto md:pl-8">
                     <div class="
                        group relative ml-12 md:ml-0 bg-[#1c1c1c] p-6 rounded-lg border border-yellow-400/30 
                        hover:-translate-y-1 hover:shadow-lg hover:shadow-yellow-400/10 
                        transition-all duration-300 cursor-pointer

                        /* --- Common Ghost Styles --- */
                        after:content-[''] after:bg-[url('ghost.png')] after:bg-contain after:bg-no-repeat
                        after:absolute after:top-1/2 after:w-[60px] after:h-[60px] after:opacity-0
                        after:transition-all after:duration-300 after:pointer-events-none
                        
                        /* --- Right-Side Ghost Position & Animation --- */
                        after:left-[-80px] after:-translate-y-1/2 after:scale-x-[-1]
                        group-hover:after:opacity-80 group-hover:after:rotate-[5deg]
                    ">
                        <h3 class="font-bold text-lg text-yellow-400">Roadmap & Moodboard </h3>
                        <p class="text-sm text-gray-400">Defining our vision and path forward.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8">
    <a href="/user"
       class="inline-block px-6 py-3 rounded-lg bg-white text-black font-semibold shadow transition
              hover:bg-gradient-to-r hover:from-purple-600 hover:to-blue-500 hover:text-white hover:scale-105
              focus:outline-none focus:ring-2 focus:ring-purple-500"
    >
      back to landing
    </a>
  </div>
  <footer>

<!-- include the footer here -->

  </footer>
</body>
</html>