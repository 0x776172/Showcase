@php($active = 'bg-blue-500 text-white')
@php($inactive = 'hover:border-blue-500 text-blue-400')
@php($base = 'inline-block py-1 px-3 rounded border border-transparent font-semibold')

<nav class="flex justify-center text-lg">
  <ul class="flex m-7">
    <li class="mr-4">
      <a class="{{ $base }} {{ Request::is('/') ? $active : $inactive }}" href="/">Home</a>
    </li>
    <li class="mr-4">
      <a class="{{ $base }} {{ Request::is('about') ? $active : $inactive }}" href="/about">About Us</a>
    </li>
    <li class="mr-4">
      <a class="{{ $base }} {{ Request::is('project') ? $active : $inactive }}" href="/project">Projects</a>
    </li>
  </ul>
</nav>