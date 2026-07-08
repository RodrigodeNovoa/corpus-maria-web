@props(['video'])

<div {{ $attributes->merge(['class' => 'video-card']) }}>
    <h3>{{ $video->titulo }}</h3>
    <p>{{ $video->descripcion ?? 'Sin descripción' }}</p>
    <a href="{{ $video->url_video }}" target="_blank">Ver Video</a>
</div>
