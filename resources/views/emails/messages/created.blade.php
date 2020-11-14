@component('mail::message')
# Introduction

-{{$name}}
-{{$email}}



@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
{{$message}}
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
