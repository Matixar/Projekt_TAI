@extends('layouts.subpagelayout')
@section('content')

<div class='container'>
    <h1 class="mt-4 mb-3">Galeria
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('homepage') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">Galeria</li>
    </ol>

    <!--Gallery -->
    <div class="card">
        <div class="card-header">
            <h3>Zdjęcia</h3>
        </div>
        <div class="card-body" style="background-color: #faf1fe">
    <div class="row">
        <div class="col-lg-4 mb-2">
            <a href="https://upload.wikimedia.org/wikipedia/commons/e/e8/Frederic_Chopin_photo.jpeg" data-toggle="lightbox" data-gallery="chopin" data-footer="Chopin">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Frederic_Chopin_photo.jpeg"  class="img-fluid rounded" alt="mur">
            </a>
        </div>
        <div class="col-lg-4">
            <a href="https://upload.wikimedia.org/wikipedia/commons/3/33/Chopin%2C_by_Wodzinska.JPG" data-toggle="lightbox" data-gallery="chopin" data-footer="Chopin">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Chopin%2C_by_Wodzinska.JPG" class="img-fluid rounded" alt="petra">
            </a>
        </div>
                <div class="col-lg-4">
            <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Eug%C3%A8ne_Ferdinand_Victor_Delacroix_041.jpg/800px-Eug%C3%A8ne_Ferdinand_Victor_Delacroix_041.jpg" data-toggle="lightbox" data-gallery="seven-wonders" data-footer="Tadż Mahal">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Eug%C3%A8ne_Ferdinand_Victor_Delacroix_041.jpg" class="img-fluid rounded" alt="tajmahal">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <a href="https://4.bp.blogspot.com/-Cd4YhwGnNnE/U1oPZZrQ6NI/AAAAAAAAAV4/Pi2WBLVpwsE/s1600/Chopin-+Manuskrypt+Tria+g-moll+op.+8+wikipedia.jpg" data-toggle="lightbox" data-gallery="seven-wonders" data-footer="Chichén Itzá">
                <img src="https://4.bp.blogspot.com/-Cd4YhwGnNnE/U1oPZZrQ6NI/AAAAAAAAAV4/Pi2WBLVpwsE/s1600/Chopin-+Manuskrypt+Tria+g-moll+op.+8+wikipedia.jpg" class="img-fluid rounded" alt="itza">
            </a>
        </div>
        <div class="col-lg-4">
            <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Piano_of_Chopin.JPG/1024px-Piano_of_Chopin.JPG" data-toggle="lightbox" data-gallery="seven-wonders" data-footer="Koloseum">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Piano_of_Chopin.JPG" class="img-fluid rounded" alt="koloseum">
            </a>
        </div>
                <div class="col-lg-4">
            <a href="https://static.epodreczniki.pl/portal/f/res-minimized/RoNNCX4JI9XZA/1/230vQuOLJpRIUa3dvq79k016JCuQc259.jpg" data-toggle="lightbox" data-gallery="chopin" data-footer="Statua Chrystusa Zbawiciela w Rio de Janeiro">
                <img src="https://static.epodreczniki.pl/portal/f/res-minimized/RoNNCX4JI9XZA/1/230vQuOLJpRIUa3dvq79k016JCuQc259.jpg" class="img-fluid rounded" alt="jezus">
            </a>
        </div>
    </div>
        </div>
    </div>
    <hr>
    <div class="card-header">
        <h3>Najpopularniejsze utwory Chopina</h3></div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Ballada no. 1 g-moll op. 23 </div>
                <div class="card-body">
                    <iframe  src="https://www.youtube.com/embed/nW5po_Z7YEs?start=40" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
                <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Polonez As-dur op. 53 (Heroiczny) </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/m0olrJAmX60" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Etiuda op. 10 no. 3 </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/bzBH9Nm1BP8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
            </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Etiuda rewolucyjna op. 10 no. 12 </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/g1uLrHq9TDg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Fantasie-impromptu op. 66 </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/Gus4dnQuiGk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>               </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Etiuda op. 25 no. 11 </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/gZjdAWgjLx8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                </div>
            </div>
        </div>        
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Walc minutowy op. 64 no. 1 </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/3H0SRv8QNwk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Nokturn op. 9 no. 1 </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/2bvg232HOn8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">Walc cis-moll op. 64 no. 2 </div>
                <div class="card-body">
                    <iframe src="https://www.youtube.com/embed/SUT_0c2QVzo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        </div>
        </div>
    </div>
    <hr>
</div>
  <!-- /.container -->

  @endsection
