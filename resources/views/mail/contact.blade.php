Herr/Frau: @if($contact->gender == 'male') Herr @else Frau @endif
<br><br>Vorname: {{ $contact->first_name}} 
<br><br>Nachname: {{ $contact->last_name}}
<br><br>Email: {{ $contact->email}}
<br><br>Tel: {{ $contact->contact_phone}}
<br><br>Adresse: {{ $contact->address}}
<br><br>Nachricht: {{ $contact->message}}

