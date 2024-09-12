<x-mail::message>
# Introduction

The body of your message.


<h3>Fname: {{ $data['fname']}}</h3>
<h3>Lname: {{ $data['lname']}}</h3>
<h3>Email: {{ $data['email']}}</h3>
<h3>Phone: {{ $data['phone']}}</h3>
<h3>Message: {{ $data['message']}}</h3>
<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

