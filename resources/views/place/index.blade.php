@extends('default')



@section('content')


    <div class="header-mt">
        <div class="flex-container-column">
            <h1 class="page-title" id="home_title_1">Lieux Incontournables</h1>
        </div>
    </div>

    <div class="header-mt">
        <?php $i = 0 ?>
        @foreach($places as $place)
            <div class=" element-wrap mtm">
                <div class="wrap-title">
                    <h2>{{ $place->name }}</h2>
                </div>
                <div class="wrap-picture">
                    <div class="wrap-picture-inside" style="background-image: url('../storage/app/public/places/{{ $place->url }}')"></div>
                </div>
                <div class="wrap-text flex-container">
                    <div class="wrap-text-inner">
                        <p>{{ $place->description }}</p>
                    </div>
                    <div class="container-map map-wrap">
                        <div class="overlay" onClick="style.pointerEvents='none'"></div>
                        <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11133.988129538877!2d4.8169921898783965!3d45.76122843568518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaaef7e7f5f%3A0x2d9cc97768f72426!2sVieux+Lyon%2C+69005+Lyon%2C+France!5e0!3m2!1sfr!2sfr!4v1478164165338" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                    </div>
                </div>
                <div class="openbutton pbm ptm" style="text-align: center;"><a onclick="openpanel({{ $i }})"><i class="fa fa-angle-double-down fa-2x" aria-hidden="true"></i></a></div>
                <div class="closebutton pbm" style="text-align: center; display: none;"><a onclick="closepanel({{ $i }})"><i class="fa fa-angle-double-up fa-2x" aria-hidden="true"></i></a></div>
            </div>
            <?php $i++ ?>
        @endforeach
    </div>

@endsection



@section('script')
    <script>
        function openpanel(positionelement){
            var image = document.getElementsByClassName('wrap-picture-inside');
            image[positionelement].style.height='500px';
            var text = document.getElementsByClassName('wrap-text');
            text[positionelement].style.height='100%';
            var textinner = document.getElementsByClassName('wrap-text-inner');
            textinner[positionelement].style.width='40%';
            var map = document.getElementsByClassName('container-map');
            map[positionelement].style.display='initial';
            map[positionelement].style.visibility='initial';
            var buttonopen = document.getElementsByClassName('openbutton');
            buttonopen[positionelement].style.display='none';
            var buttonclose = document.getElementsByClassName('closebutton');
            buttonclose[positionelement].style.display='block';
        }
        function closepanel(positionelement){
            var image = document.getElementsByClassName('wrap-picture-inside');
            image[positionelement].style.height='200px';
            var text = document.getElementsByClassName('wrap-text');
            text[positionelement].style.height='140px';
            var textinner = document.getElementsByClassName('wrap-text-inner');
            textinner[positionelement].style.width='100%';
            var map = document.getElementsByClassName('container-map');
            map[positionelement].style.display='none';
            map[positionelement].style.visibility='hidden';
            var buttonopen = document.getElementsByClassName('openbutton');
            buttonopen[positionelement].style.display='block';
            var buttonclose = document.getElementsByClassName('closebutton');
            buttonclose[positionelement].style.display='none';
        }

    </script>


@endsection
