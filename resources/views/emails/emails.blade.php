<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de Kenko-Ho</title>
</head>
<body>
    <h2>Nouveau message de {{ $contact->firstName }} {{ $contact->name }}</h2>

    <p><strong>Email :</strong> {{ $contact->email }}</p>
    @if($contact->tel)
        <p><strong>Téléphone :</strong> {{ $contact->tel }}</p>
    @endif

    <p><strong>Message :</strong></p>
    <p>{{ $contact->message }}</p>

    <hr>
    <p>Envoyé depuis le formulaire de contact Kenko-Ho</p>
</body>
</html>
