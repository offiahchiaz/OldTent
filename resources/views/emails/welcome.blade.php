@component('mail::message')
{{-- # Introduction --}}

{{-- Welcome to Tent, <b style="text-transform: capitalize">{{ $user->firstname }}</b>. Your amazing journeystarts today.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Hi <b style="text-transform: capitalize">{{ $user->firstname }}</b>,

Welcome to Tent, the better way to get hassle-free premium apartment listings in Lagos.

Congratulations! You're closer to your next beautiful home. We created Tent with one mission in mind - to give you
the power to choose comfortable apartments without middlemen by providing transparency and clarity. Getting an accomadation in Lagos is hard, 
but we help make it easy by automating the process while ensuring all parties involved are vetted.

Once again, welcome to Tent and we look forward to helping you move-in to your next home.


Have fun,<br>
Chiazor Offiah<br>
CEO, Tent


{{-- Thanks,<br>
{{ config('app.name') }} --}}
@endcomponent
