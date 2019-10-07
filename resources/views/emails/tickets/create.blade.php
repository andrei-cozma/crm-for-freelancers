@component('mail::message')
    # You have a new ticket.
From: {{ auth()->user()->email }}
<strong>Subject:</strong> {{ $data['subject'] }}
<strong>Message: </strong>
{{ $data['message'] }}
@endcomponent
