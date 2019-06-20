@component('mail::message')
# Account Created

A new account has been created in your vault.

@component('mail::button', ['url' => '/accounts/{{$account->account_id}}'])
View Acount
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
