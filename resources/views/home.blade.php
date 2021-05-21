@extends('layouts.main')

@section('title','Home')

@section('content')

<header class="header">
<div class="text-header d-flex align-items-center">
  <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-12 ">
              <h2 class="text-center"> <span> Felipe Larraguibel </span></h2>
              <h4 class="text-center"> <span> Desarrolador Web </span></h4>
          </div>
          <div class="col-sm-4 col-md-12 text-center mt-2">
            <a class="btn btn-block ">
              Linkedin
            </a>
            <a class="btn btn-block ">
              GitHub
            </a>
            <a class="btn btn-block ">
              GitLab
            </a>
          </div>

      </div>
  </div>
</div>

</header>

<section id="about">

  <div class="container mt-4">
    <div class="row">
      <div class="col-12 col-sm-12 fx">
       <p>Ingeniero en Informática con más de 2 años de experiencia en
         desarrollo<strong> Web</strong> haciendo uso de distintas tecnologías.
        </p>
        <p class="subParrafo">
          Actualmente me dedico al desarrollo web de manera <strong>FreeLancer</strong>.<br>
          Continuamente aprendiendo y adquiriendo nuevas habilidades en relación a las nuevas
          tecnologías en el área del desarrollo de <strong>Software</strong>
        </p>
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')
    
@endsection