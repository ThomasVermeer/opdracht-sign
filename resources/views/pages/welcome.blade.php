@extends('base')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            
        </ol>
        <div style="background-image: url({{ asset( 'img/placeholder-home.avif') }});" class="img-relative">
            <div class="margin_top_test">
                <div class="top_links">
                    <h3>brandsupply</h3>
                    <h3>start wedstrijd</h3>
                    <h3>ontwerpwedstrijden</h3>
                    <h3>uitleg</h3>
                    <h3>prijzen</h3>
                    <h3>ra3a</h3>
                    <h3>Nederland</h3>
                </div>
                <h1>ONTVANG HET PERFECTE ONTWERP OP MAAT</h1>
                <h5>op Europa's nr.1 marktplaats voor ontwerp </h5>
            <div class="main-info-button-wrapper">
              
                <a class="btn show-info-button" href="{{route('opdrachten')}}" role="button">Opdracht kiezen -></a>
            </div>
        </div>
            
        </div>

    <div class="container">
        <div class="flex-wrapper">
            <h2>Een opdracht laten maken?</h2>
        </div>
        <div class="text-wrapper">
            <div class="text-wrapper-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem id incidunt omnis repellendus soluta tempore vero! A ab dolorem eos eveniet ipsam iste provident, quos sequi ut, vel voluptate voluptatum?</p>
            </div>
            <div class="text-wrapper-text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae explicabo fugit iusto labore, odit officia, omnis quae quidem rem soluta temporibus tenetur, unde. Consectetur eligendi ex fugiat perspiciatis ut?</p>
            </div>
        </div>
    </div>

    <div class="parallax">
        <div class="parallax-item">
            <div class="flex-wrapper text-light">
               <h2>Direct <span>beginnen</span>?</h2>
            </div>
            <div class="container">
                <div class="text-wrapper">
                    <div class="text-wrapper-text text-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eaque eos necessitatibus repellat sit? Dolorem possimus quaerat sapiente velit! Dolor eos error eum in ipsa libero non saepe tenetur velit.</p>
                    </div>
                    <div class="text-wrapper-text text-light">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi architecto assumenda commodi consequuntur delectus dignissimos eius eos est, facere illo itaque laborum, magnam maiores, molestiae nostrum numquam tenetur velit.</p>
                    </div>
                </div>
                <div class="main-info-button-wrapper">
                    <a class="btn show-info-button" href="{{route('opdrachten')}}" role="button">Opdracht kiezen -></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="flex-wrapper">
            <h2>Lorem <span>ipsum</span></h2>
        </div>
        <div class="full-design-wrapper">
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Raambelettering</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=1')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div  class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Autobelettering</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=2')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Spandoek</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=3')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Kledingbedrukking</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=4')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Interieurwrap</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=5')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Vloerstickers</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=6')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Stickers</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=7')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
            <div class="full-design">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Lichtbak</p>
                </div>
                <div class="home-design-button">
                    <a class="btn btn-secondary navy" href="{{route('filter-opdracht', 'category=8')}}" role="button">Opdracht zoeken -></a>
                </div>
            </div>
        </div>

        <div class="home-design-button">
            <button id="showElement" class="btn btn-secondary navy">Meer info?</button>
        </div>

        <div id="fullDesign" class="full-design-info">
            <div class="full-design-left">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ea esse expedita iusto omnis optio pariatur perferendis repudiandae tenetur veritatis. Aspernatur consequatur doloremque, hic quasi repellendus sint tempora tenetur voluptatem!</p>
            </div>
            <div class="full-design-right">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate eaque eligendi eos labore sint tempora vero voluptatum? A nihil nulla obcaecati? Eaque eligendi esse est ipsa nostrum, repellendus voluptates.</p>
            </div>
            <div class="full-design-left">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda ea esse expedita iusto omnis optio pariatur perferendis repudiandae tenetur veritatis. Aspernatur consequatur doloremque, hic quasi repellendus sint tempora tenetur voluptatem!</p>
            </div>
            <div class="full-design-right">
                <div class="icon-wrapper">
                    <div class="design-icon">
                        <img src="{{asset('img/placeholder-icon.svg')}}" alt="Foto">
                    </div>
                    <p>Logo</p>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cupiditate eaque eligendi eos labore sint tempora vero voluptatum? A nihil nulla obcaecati? Eaque eligendi esse est ipsa nostrum, repellendus voluptates.</p>
            </div>
        </div>
    </div>

@endsection
