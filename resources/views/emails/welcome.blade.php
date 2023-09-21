<x-mail::message>
# Introduction

This is Welcome Mail
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
