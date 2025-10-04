<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Road Map</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-black text-white p-10">
  <h1 class="text-3xl font-bold mb-6">Project Road Map</h1>
  <ul class="space-y-4">
    <li class="border-l-4 border-blue-500 pl-4">✅ Login Page</li>
    <li class="border-l-4 border-blue-500 pl-4">✅ Sign Up Page</li>
    <li class="border-l-4 border-blue-500 pl-4">✅ Mood Board Page</li>
    <li class="border-l-4 border-blue-500 pl-4">🔜 Road Map Page</li>
    <li class="border-l-4 border-blue-500 pl-4">🔜 CRUD Functionalities</li>
  </ul>
=======
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-black min-h-screen">
  <div class="p-4 mt-4">
    <h1 class="text-4xl text-center font-semibold mb-6 text-gray-50">Road Map Status</h1>
   
    <div class="container">
      <div class="flex flex-col md:grid grid-cols-12 text-gray-50">

        <div class="flex md:contents">
          <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
            <div class="h-full w-6 flex items-center justify-center">
              <div class="h-full w-1 bg-green-500 pointer-events-none"></div>
            </div>
            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-green-500 shadow text-center">
              <i class="fas fa-check-circle text-white"></i>
            </div>
          </div>
          <div class="bg-green-500 col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full transition hover:bg-green-600 cursor-pointer">
            <h3 class="font-semibold text-lg mb-1">Login Page</h3>
          </div>
        </div>

        <div class="flex md:contents">
          <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
            <div class="h-full w-6 flex items-center justify-center">
              <div class="h-full w-1 bg-green-500 pointer-events-none"></div>
            </div>
            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-green-500 shadow text-center">
              <i class="fas fa-check-circle text-white"></i>
            </div>
          </div>
          <div class="bg-green-500 col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full transition hover:bg-green-600 cursor-pointer">
            <h3 class="font-semibold text-lg mb-1">Sign Up Page</h3>
          </div>
        </div>
        <div class="flex md:contents">
          <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
            <div class="h-full w-6 flex items-center justify-center">
              <div class="h-full w-1 bg-green-500 pointer-events-none"></div>
            </div>
            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-green-500 shadow text-center">
              <i class="fas fa-check-circle text-white"></i>
            </div>
          </div>
          <div class="bg-green-500 col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full transition hover:bg-green-600 cursor-pointer">
            <h3 class="font-semibold text-lg mb-1">Mood Board Page</h3>
          </div>
        </div>



        <div class="flex md:contents">
          <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
            <div class="h-full w-6 flex items-center justify-center">
              <div class="h-full w-1 bg-green-500 pointer-events-none"></div>
            </div>
            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-green-500 shadow text-center">
              <i class="fas fa-check-circle text-white"></i>
            </div>
          </div>
          <div class="bg-green-500 col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full transition hover:bg-green-600 cursor-pointer">
            <h3 class="font-semibold text-lg mb-1">Road Map Page</h3>
          </div>
        </div>
        
        
        <div class="flex md:contents">
          <div class="col-start-2 col-end-4 mr-10 md:mx-auto relative">
            <div class="h-full w-6 flex items-center justify-center">
              <div class="h-full w-1 bg-green-500 pointer-events-none"></div>
            </div>
            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-green-500 shadow text-center">
              <i class="fas fa-check-circle text-white"></i>
            </div>
          </div>
          <div class="bg-green-500 col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full transition hover:bg-green-600 cursor-pointer">
            <h3 class="font-semibold text-lg mb-1">CRUD</h3>
            <p class="text-sm leading-tight text-gray-200">User Management</p>
            <p class="text-sm leading-tight text-gray-200">Event Management </p>
            <p class="text-sm leading-tight text-gray-200">Orders and Transactions</p>
            </div>
            </div>
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
    </div>

  <footer>
<?= view('/Components/buttons/footer')?>
  </footer>
</body>
</html>
