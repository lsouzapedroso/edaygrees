@extends('layouts.not-logged-layout')
@section('content')
<!-- banner -->
<div class="banner about-banner">
   <div class="container">
      <h2>SOBRE</h2>
      <div class="agileits-line"></div>
   </div>
</div>
<!-- //about-top -->
<!-- feature-grid -->
<div class="feature-grid">
   <div class="container">
      <div class="services-heading">
         <h3>NOSSO TRABALHO</h3>
         <div class="agileits-line"></div>
      </div>
      <div class="agileits-feature-grids">
         <div class="col-sm-4 agileinfo-feature-grid">
            <div class="agileinfo-feature-info">
               <img src="{{ asset('/images/quemSomos.jpg' )}}" alt="Quem somos?" />
               <h5>Quem somos ? </h5>
               <p>A história do software eDayGress surgiu com uma parceria entra o departamento de Ciência da
                  Computação com membros Graduados na área da Agronomia, com vista sempre no bem estar e
                  facilidade de uso. Esse sistema foi muito bem planejado com diversas idéias e aplicações
                  usando as melhores técnicas e aprendizados para sua funcionalidade ser a mais completa
                  possivel. Tem a garantir um controle prático de produções em propriedades da cultura da
                  uva. 
               </p>
            </div>
         </div>
         <div class="col-sm-4 agileinfo-feature-grid">
            <div class="agileinfo-feature-info">
               <img src="{{ asset('/images/nossaMissao.jpg' )}}" alt="Nossa missão" />
               <h5>Missão</h5>
               <p>Proporcionar as pessoas uma melhor qualidade de vida. Dando suporte a produção, com base
                  nesse método de acompanhamento prático e fácil de usar. Proporcionando assim uma vida mais
                  leve. Aplicação de atualizações para melhoria de nosso suporte para as pessoas que estão
                  utulizando nosso sistema
               </p>
            </div>
         </div>
         <div class="col-sm-4 agileinfo-feature-grid">
            <div class="agileinfo-feature-info">
               <img src="{{ asset('/images/valores.jpg' )}}" alt="Valores da equipe" />
               <h5>Valores</h5>
               <p>Nossos valores sempre serão no profissionalismo de toda equipe. O comprometimento pelo
                  desafio de sempre estar ao dispor de melhorias para as pessoas que usam nosso sistema.
                  Mantendo o respeito e dedicação com todos.
               </p>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<!-- feature-grid -->
<!-- AQUI COLOCAMOS A EQUIPE DE TRABALHO -->
<div class="team">
   <div class="container">
      <div class="services-heading">
         <h3>NOSSA EQUIPE</h3>
         <div class="agileits-line"></div>
      </div>
      <div class="team-row">
         <div class="col-md-3 team-grids">
            <div class="team-img">
               <img class="img-responsive" src="{{ asset('/images/equipe1.jpg') }}" alt="Tiago Alves">
               <div class="captn">
                  <div class="captn-top">
                     <h4>Tiago Alves</h4>
                     <p>Ex militar, acadêmico de ciência da Computação bacharel</p>
                  </div>
                  <div class="wthree-social-grids">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 team-grids">
            <div class="team-img">
               <img class="img-responsive" src="{{ asset('/images/equipe2.jpg') }}" alt="Mark Willian">
               <div class="captn">
                  <div class="captn-top">
                     <h4>Mark Willian</h4>
                     <p>Técnico em Agropecuária, acadêmico de ciência da Computação bacharel</p>
                  </div>
                  <div class="wthree-social-grids">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 team-grids">
            <div class="team-img">
               <img class="img-responsive" src="{{ asset('/images/equipe3.jpg') }}" alt="Gabriel Krysa">
               <div class="captn">
                  <div class="captn-top">
                     <h4>Gabriel Krysa</h4>
                     <p>Programador, acadêmico de ciência da Computação bacharel</p>
                  </div>
                  <div class="wthree-social-grids">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 team-grids">
            <div class="team-img">
               <img class="img-responsive" src="{{ asset('/images/professor.jpg') }}" alt="Marcos Quinaia">
               <div class="captn">
                  <div class="captn-top">
                     <h4>Marcos Quinaia</h4>
                     <p>Professor</p>
                  </div>
                  <div class="wthree-social-grids">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<!-- //team -->
<!-- //about -->
@endsection