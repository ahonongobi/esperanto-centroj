@component('mail::message')
# Konfirmado

-{{$name}}
-{{$email}}



@component('mail::button', ['url' => 'http://localhost:8000'])
Retpaĝo
@endcomponent

@component('mail::panel')
{{$message}}
@endcomponent

@component('mail::table')
| Eperanto      | Centroj       | celo  |
| ------------- |:-------------:| --------:|
| Secure        | atentigi 100  | ghis 100%|
| fidu          |               | ghis 100%|
@endcomponent
Dankon,<br>
{{ config('app.name') }}
@endcomponent
