<nav class="flex justify-center border-b border-gray-600">
  <ul class="flex m-7">
    <li class="mr-3">
      <a class="inline-block py-1 px-3 rounded {{ Request::is('/') ? 'bg-blue-500 text-white' : 'hover:border hover:border-blue-500 text-blue-500' }}" href="/">Home</a>
    </li>
    <li class="mr-3">
      <a class="inline-block py-1 px-3 rounded {{ Request::is('about') ? 'bg-blue-500 text-white' : 'hover:border hover:border-blue-500 text-blue-500' }}" href="/about">About Us</a>
    </li>
    <li class="mr-3">
      <a class="inline-block py-1 px-3 text-gray-400 cursor-not-allowed" href="#">Disabled Pill</a>
    </li>
  </ul>
</nav>