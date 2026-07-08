@props([
    'icono' => '📌',
    'titulo' => 'Título',
    'descripcion' => 'Descripción'
])

<div class="feature-item" style="
    background: white;
    padding: 30px 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s;
">
    <span style="font-size: 2.5rem; display: block; margin-bottom: 10px;">{{ $icono }}</span>
    <h4 style="color: #2d3748; margin-bottom: 10px; font-size: 1.3rem;">{{ $titulo }}</h4>
    <p style="color: #718096; font-size: 1rem; line-height: 1.5;">{{ $descripcion }}</p>
</div>

<style>
    .feature-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
</style>