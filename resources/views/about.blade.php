@extends('layouts.user_type.guest')
@section('content')
<main class="main-content mt-0">
   <section>
      <!-- Nosso trabalho -->
      <div class="container mt-6">
         <div class="row">
            <h1 class="col mt-4 mb-4 text-center " style="color: #aebe27">Nosso Trabalho</h1>
            <span class="border mb-4"></span>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-3 mx-auto">
               <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="images/quemSomos.jpg" alt="Quem somos?">
                  <div class="card-body bg-transparent">
                     <h5 class="card-title">Quem somos?</h5>
                     <p class="card-text" style="font-size: 14px">
                        A história do software eDayGress surgiu com uma parceria entra o departamento de Ciência da Computação
                        com membros Graduados na área da Agronomia, com vista sempre no bem estar e facilidade de uso. Esse sistema
                        foi muito bem planejado com diversas idéias e aplicações usando as melhores técnicas e aprendizados para
                        sua funcionalidade ser a mais completa possivel. Tem a garantir um controle prático de produções em propriedades
                        da cultura da uva.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mx-auto">
               <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="images/nossaMissao.jpg" alt="Nossa missão">
                  <div class="card-body">
                     <h5 class="card-title">Missão</h5>
                     <p class="card-text" style="font-size: 14px">
                        Proporcionar as pessoas uma melhor qualidade de vida, dando suporte a produção. Com base nesse método de
                        acompanhamento prático e fácil de usar. Proporcionando assim uma vida mais leve. Aplicação de atualizações para
                        melhoria de nosso suporte para as pessoas que estão utulizando nosso sistema
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 mx-auto">
               <div class="card" style="width: 20rem;">
                  <img class="card-img-top" src="images/valores.jpg" alt="Valores">
                  <div class="card-body">
                     <h5 class="card-title">Valores</h5>
                     <p class="card-text" style="font-size: 14px">
                        Nossos valores sempre serão no profissionalismo de toda equipe. O comprometimento pelo desafio de sempre estar ao dispor
                        de melhorias para as pessoas que usam nosso sistema. Mantendo o respeito e dedicação com todos.
                     </p>
                  </div>
               </div>
            </div>
        </div>

        <!-- Equipe de desenvolvimento -->
        <div class="container mt-6">
            <div class="row">
            <h1 class="col mt-4 mb-4 text-center " style="color: #aebe27">Nossa equipe de desenvolvimento</h1>
            <span class="border mb-4"></span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Dev 1 -->
                <div class="col mx-auto">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="images/equipe1.jpg" alt="Tiago Alves">
                        <div class="card-body">
                            <h5 class="card-title">Tiago Alves</h5>
                            <p class="card-text">
                              Ex-militar, acadêmico de ciência da Computação bacharel
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Dev 2 -->
                <div class="col mx-auto">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="images/equipe2.jpg" alt="Mark Willian">
                        <div class="card-body">
                            <h5 class="card-title">Mark Willian</h5>
                            <p class="card-text">
                              Técnico em Agropecuária, acadêmico de ciência da Computação bacharel
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Dev 3 -->
                <div class="col mx-auto">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="images/equipe3.jpg" alt="Gabriel Krysa">
                        <div class="card-body">
                            <h5 class="card-title">Gabriel Krysa</h5>
                            <p class="card-text">
                              Programador, acadêmico de ciência da Computação bacharel
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Professor -->
                <div class="col mx-auto">
                    <div class="card text-center" style="width: 15rem;">
                        <img src="images/professor.jpg" alt="Professor Marcos Quinaia">
                        <div class="card-body">
                            <h5 class="card-title">Marcos Quinaia</h5>
                            <p class="card-text">
                              Professor da Unicentro e coordenador da Fábrica de Software
                           </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   </section>
</main>
@endsection
