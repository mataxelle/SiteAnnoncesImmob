<x-mail::message>
    # Nouvelle demande de contact

    Une nouvelle demande contact a été faite pour la propriété
    <a
        href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>.

    - Prénom : {{ $data['firstname'] }}
    - Nom : {{ $data['lastname'] }}
    - Téléphone : {{ $data['phone'] }}
    - Email : {{ $data['email'] }}


    **Message :**<br />
    {{ $data['message'] }}
</x-mail::message>
