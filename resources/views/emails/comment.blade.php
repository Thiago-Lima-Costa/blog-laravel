@component('mail::message')
    
Olá {{ $post->user->firstName }}, {{ $user->firstName }} {{ $user->lastName }} fez um comentário na sua postagem {{ $post->title }}.

@component('mail::button', ['url' => $url])
Ver a postagem
@endcomponent

@endcomponent