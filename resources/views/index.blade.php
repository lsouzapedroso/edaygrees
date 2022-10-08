@extends('layouts.user_type.guest')
@section('content')
<main class="main-content mt-0">
   <section>
      <div class="page-header min-vh-100">
         <div class="container">
            <div class="row">
               <div class="col-8 mx-auto">
                  <div class="text-center">
                     <h1 class="mb-0" style="color: #aebe27">eDayGrees</h1>
                     <p class= "mb-0">Unindo tecnologia com agricultura</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
               <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('images/0.jpg')"></div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <h1 class="col mt-4 mb-4 text-center " style="color: #aebe27">Serviços oferecidos em nosso sistema</h1>
            <span class="border mb-4"></span>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xl-3 mx-auto">
               <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="images/controleClima.jpg" alt="controleClima">
                  <div class="card-body bg-transparent">
                     <h5 class="card-title">Análise Climática</h5>
                     <p class="card-text">Sistema tem incluso um controle de clima, aonde pode buscar por dados reais da propriedade. Vazendo um balanço de humidade e calor. Com isso é realizado diversas análises de acumulo de graus e possiveis doenças.</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mx-auto">
               <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="images/doencaUva.jpg" alt="doencaUva">
                  <div class="card-body">
                     <h5 class="card-title">Aviso e análise de doenças</h5>
                     <p class="card-text">Através de busca de dados, o sistema pode dar avisos de possiveis doenças que podem estar presente na cultura.</p>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mx-auto">
               <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="images/relatorios.jpg" alt="relatórios">
                  <div class="card-body">
                     <h5 class="card-title">Geração de relatórios diários</h5>
                     <p class="card-text">Geração de relatórios diários para possivel acompanhamento de como anda a cultura. Dados como graus acumulados, ciclo, além dos avisos e o clima em tempo real.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection
