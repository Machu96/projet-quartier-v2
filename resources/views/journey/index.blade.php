@extends('default')


@section('content')
    <div class="header header-page"></div>
    <div class="header-mt">
        <div class="flex-container-column">
        <h1 class="page-title" id="home_title_1">{{ trans('parcours.titre1') }}</h1>
        </div>
    </div>

    <div id="section-parcours" class="header-mt">
        <ul id="parcours-menu" class="tab">
            <li><a id="defaultOpen" href="javascript:void(0)" class="tablinks" onclick="openparcours(event, 'parcours1')">{{ trans('parcours.P1') }}</a></li>
            <li><a href="javascript:void(0)" class="tablinks" onclick="openparcours(event, 'parcours2')">{{ trans('parcours.P2') }}</a></li>
            <li><a href="javascript:void(0)" class="tablinks" onclick="openparcours(event, 'parcours3')">{{ trans('parcours.P3') }}</a></li>
            <li><a href="javascript:void(0)" class="tablinks" onclick="openparcours(event, 'votreparcours')">{{ trans('parcours.PP') }}</a></li>
        </ul>
        <div id="parcours1" class="tabcontent flex-container">
            <div class="container-text journey-text">
                <p>
                    {{ trans('parcours.desc_P1') }}
                </p>
                <h2>{{ trans('parcours.titre_P1') }}</h2>
                <ul>
                    <li>1 -  Cathédrale Saint Jean</li>
                    <li>2 -  Maison des avocats</li>
                    <li>6 -  Grande Traboule du 54 rue Saint-Jean</li>
                    <li>7 -  Rue Saint-Jean</li>
                    <li>8 -  Place de la Baleine</li>
                    <li>9 -  Place Neuve Saint-Jean</li>
                    <li>10 - Place de la Baleine</li>
                    <li>11 - Montée des Chazeaux</li>
                </ul>


            </div>
            <div class="container-map">
                <div class="map"><iframe src="https://www.google.com/maps/d/embed?mid=1Mrtp59CGIddEb2xh6AYO1yZe-Ao" width="100%" height="100%"></iframe></div>
                <div class="copy-link-map">
                    <form id="link-map">
                        <input disabled="disabled"  title="LienMap" type="text" name="mapurl"  value="https://goo.gl/maps/bNbUYZYJKTD2">
                        <button>test</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="parcours2" class="tabcontent flex-container">
            <div class="container-text journey-text">
                <p>
                    {{ trans('parcours.desc_P1') }}
                </p>
                <h2>{{ trans('parcours.titre_P2') }} </h2>
                <ul>
                    <li>1 -  Cathédrale Saint Jean</li>
                    <li>2 -  3/5 rue des Antonins</li>
                    <li>3 -  Traboule sur des Antonins à rue Saint-Jean</li>
                    <li>4 -  Cour Chamarier</li>
                    <li>5 -  Lion house lawyers</li>
                    <li>6 -  Grande Traboule du 54 rue Saint-Jean</li>
                    <li>7 -  Cour tour rose au 16 rue du Boeuf</li>
                    <li>8 -  Ancien palais de Justice "Les 24 colonnes"</li>
                    <li>9 -  Traboule 27 rue St Jean au 6 rue des Trois Maries</li>
                    <li>10 - Place de la Baleine</li>
                    <li>11 - Traboule 2 place du Gouvernement au 10 quai Romain Rolland</li>
                    <li>12 - Maison Thomassin</li>
                    <li>13 - Palais du Change</li>
                    <li>14 - Escalier renaissance Henri IV</li>
                    <li>15 - Galerie Philibert Delrme, 8 rue Juiverie</li>
                    <li>16 - Église Saint-Paul de Lyon</li>
                </ul>


            </div>
            <div class="container-map">
                <div class="map">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1aEs4XvqmVPwEi318FYrwOgYFia0" width="100%" height="100%"></iframe></div>
                <div class="copy-link-map">
                    <form id="link-map">
                        <input disabled="disabled"  title="LienMap" type="text" name="mapurl"  value="https://goo.gl/maps/bNbUYZYJKTD2">
                        <button>test</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="parcours3" class="tabcontent flex-container">
            <div class="container-text journey-text">
                <p>
                    {{ trans('parcours.desc_P1') }}
                </p>
                <h2>{{ trans('parcours.titre_P3') }}</h2>
                <ul>
                    <li>1. Cathédrale Saint Jean</li>
                    <li>2. Palais de Justice</li>
                    <li>3. Vis’Art Galerie</li>
                    <li>4. Place St Jean</li>
                </ul>


            </div>
            <div class="container-map">
                <div class="map"><iframe src="https://www.google.com/maps/d/embed?mid=1aEs4XvqmVPwEi318FYrwOgYFia0" width="100%" height="100%"></iframe></div>
                <div class="copy-link-map">
                    <form id="link-map">
                        <input disabled="disabled"  title="LienMap" type="text" name="mapurl"  value="https://goo.gl/maps/bNbUYZYJKTD2">
                        <button>test</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="votreparcours" class="tabcontent flex-container">
            <iframe src="https://www.google.com/maps/d/embed?mid=1aEs4XvqmVPwEi318FYrwOgYFia0" width="100%" height="600px"></iframe>
        </div>
    </div>

@endsection


@section('script')

    <script src="js/tabs.js"></script>

@endsection
