@extends('default')



@section('content')

    @foreach($places as $place)


    @endforeach
    <div class="header-mt">
        <div class="flex-container-column">
            <h1 class="page-title" id="home_title_1">Lieux Incontournables</h1>
        </div>
    </div>
<div class="element-wrap header-mt">
    <div class="wrap-title">
        <h2>Cathédrale St-jean</h2>
    </div>
    <div class="wrap-picture">
        <div class="wrap-picture-inside" style="background-image: url('https://d2lm6fxwu08ot6.cloudfront.net/img-thumbs/960w/KXEQJWRTWW.jpg')"></div>
    </div>
    <div class="wrap-text flex-container">
        <div class="wrap-text-inner"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non dictum magna, nec semper enim. In hac habitasse platea dictumst. Quisque feugiat, diam vitae rutrum posuere, tellus magna pharetra nulla, at tincidunt odio ipsum non neque. Cras eget convallis risus, quis commodo nisi. Mauris non mollis turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ullamcorper scelerisque elit, a suscipit erat accumsan ac. Vivamus ultrices sit amet diam vitae finibus. Sed eget justo nisi. Proin mattis odio a nisl hendrerit, non convallis magna ultricies. Aliquam ut lobortis tellus. Donec at eleifend nibh. Praesent a ipsum turpis. In molestie odio vitae sem suscipit ultrices.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non dictum magna, nec semper enim. In hac habitasse platea dictumst. Quisque feugiat, diam vitae rutrum posuere, tellus magna pharetra nulla, at tincidunt odio ipsum non neque. Cras eget convallis risus, quis commodo nisi. Mauris non mollis turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris ullamcorper scelerisque elit, a suscipit erat accumsan ac. Vivamus ultrices sit amet diam vitae finibus. Sed eget justo nisi. Proin mattis odio a nisl hendrerit, non convallis magna ultricies. Aliquam ut lobortis tellus. Donec at eleifend nibh. Praesent a ipsum turpis. In molestie odio vitae sem suscipit ultrices.</p>
        </div>
        <div class="container-map map-wrap">
            <div class="overlay" onClick="style.pointerEvents='none'"></div>
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11133.988129538877!2d4.8169921898783965!3d45.76122843568518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaaef7e7f5f%3A0x2d9cc97768f72426!2sVieux+Lyon%2C+69005+Lyon%2C+France!5e0!3m2!1sfr!2sfr!4v1478164165338" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
        </div>
    </div>
    <div style="text-align: center;"><a onclick="openpanel(0)">+ info</a></div>

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
        textinner[positionelement].style.padding='40px';
        var map = document.getElementsByClassName('container-map');
        map[positionelement].style.display='initial';
        map[positionelement].style.visibility='initial';
    }

</script>


@endsection