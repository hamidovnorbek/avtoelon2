@props(['title' => '', 'footerLinks' => ''])

<x-base-layout :$title>

    <x-layouts.header />

    {{ $slot }}

    <footer>
        {{$footerLinks}}
    </footer>

</x-base-layout>
