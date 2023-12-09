<x-mail::message>
    <h3>subject: {{$contactUser['title']}}</h3>
    <h4>Hello {{$contactUser['name']}}</h4>
    <p>{{$contactUser['body']}}</p>

<x-mail::button :url="'https://mdmamunurrashid.com'">
Go To Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
