<x-backend-layout>
   <x-slot name="title">
        Account &mdash; Manifest Multimedia 
   </x-slot>
   {{config('sms.sender_name')}}
   {{domainsearch('johnsonsebire', 'com')}}
   @livewire('stats-module')
   @livewire('services-module')
</x-backend-layout>