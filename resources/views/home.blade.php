@extends('layouts.app')

@section('titulo', 'Inicio - Maria Corpus Web')

@push('styles')
<style>
    .contenedor-principal {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px 0;
    }
    
    .seccion-presentacion {
        margin-bottom: 50px;
    }
    
    .seccion-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .feature-item {
        background: white;
        padding: 30px 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.3s;
    }
    
    .feature-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
    
    .feature-item h4 {
        color: #2d3748;
        margin-bottom: 10px;
        font-size: 1.3rem;
    }
    
    .feature-item p {
        color: #718096;
        font-size: 1rem;
        line-height: 1.5;
    }
    
    .feature-item .icono {
        font-size: 2.5rem;
        margin-bottom: 10px;
        display: block;
    }
</style>
@endpush

@section('contenido')
<div class="contenedor-principal">
    
    {{--  Tarjeta de presentacion principal --}}
    <div class="seccion-presentacion">
        <x-tarjeta-inicio
            titulo="🌍 Descubre el mundo de la Lengua de Signos"
            contenido="Este espacio ha sido creado para poner a disposición de la comunidad investigadora, docente y del público en general el primer corpus de la Lengua de Señas Colombiana que documenta la riqueza de sus variedades dialectales.
                        <br><br> COLOmbiaSigna (COLOS) nace con la vocación de ser un punto de encuentro y consulta, donde la diversidad lingüística del país se refleja en el discurso signado de sus hablantes. En esta web encontrarán un registro audiovisual cuidadosamente seleccionado, proveniente de las seis regiones naturales de Colombia, con el propósito de ofrecer una muestra viva y representativa de la LSC.
                        <br><br> Invitamos a estudiantes, intérpretes, lingüistas y a todas las personas interesadas en nuestra lengua a explorar este material. El corpus se concibe como una herramienta abierta para el análisis, el aprendizaje y la valoración de la herencia cultural y lingüística de las comunidades sordas del país. Navegar por él es, en sí mismo, un viaje por las formas diversas en que la LSC se expresa, se transmite y se transforma en cada territorio.
                        "
            imagen="assets/img/corpus_manos.jpg"
            alt="Lengua de Signos - Imagen representativa"
            enlace="{{ route('buscar') }}"
            enlaceTexto="🔍 Comenzar a buscar"
            anchoImagen="100%"
        />
    </div>
    
    {{--  Tarjeta secundaria (ejemplo de uso con otro contenido) --}}
    {{-- <div style="margin-bottom: 40px;">
        <x-tarjeta-inicio
            titulo="📚 Recursos educativos"
            contenido="Accede a una amplia colección de materiales didácticos sobre lengua de signos. Perfecto para estudiantes, docentes y cualquier persona interesada en aprender."
            imagen="assets/img/recursos.jpg"
            alt="Recursos educativos"
            enlace="#"
            enlaceTexto="Explorar recursos"
            anchoImagen="80%"
            clase="tarjeta-secundaria"
        />
    </div> --}}
    
    {{--  Seccion de caracteristicas (sin componente, porque son elementos mas pequenhos) --}}
    <div class="seccion-features">
        <div class="feature-item">
            <span class="icono">🎥</span>
            <h4>Videos</h4>
            <p>Encuentra contenido audiovisual sobre lengua de signos</p>
        </div>
        <div class="feature-item">
            <span class="icono">🖼️</span>
            <h4>Imágenes</h4>
            <p>Explora representaciones visuales de señas</p>
        </div>
        <div class="feature-item">
            <span class="icono">📚</span>
            <h4>Información</h4>
            <p>Accede a recursos educativos y documentación</p>
        </div>
    </div>
</div>
@endsection