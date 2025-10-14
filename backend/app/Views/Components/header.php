  <?
  $navbar = [

    'title'=>'GameVerse', 
    'Label_home'=>'Home',
    'Label_games'=>'Games',
    'Label_services'=> 'Services',
    'Label_contact'=> 'Contact',
    'Label_login'=> 'Login',
  ]
  
  
  
  ?>
<script src="https://cdn.tailwindcss.com"></script>

  <header class="flex justify-between items-center px-8 py-4 bg-black bg-opacity-90 fixed w-full z-50 border-b border-yellow-500 shadow-md">
    
    <h1 class="text-2xl font-bold text-yellow-400">GameVerse</h1>
    <nav class="space-x-6 hidden md:block">
    <a href="#home" class="text-white hover:text-yellow-400"><?= $navbar['Label_home'] ?></a>
    <a href="#games" class="text-white hover:text-yellow-400"><?= $navbar['Label_games'] ?></a>
    <a href="#services" class="text-white hover:text-yellow-400"><?= $navbar['Label_services'] ?></a>
    <a href="#contact" class="text-white hover:text-yellow-400"><?= $navbar['Label_contact'] ?></a>
    </nav>
    <div class="flex items-center space-x-2">
      <a href="#login" class="hover:text-yellow-400"><?= $navbar['Label_login'] ?></a>