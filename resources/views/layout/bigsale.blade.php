<!-- Begin-MyStore -->
<div class="container text-center giakhang_container">
        <?php $i = 0?>
            @foreach($image as $giakhang)
                @if($giakhang->categoryImage->id == 4)
                    <h3>{{$giakhang->categoryImage->name}}</h3>
                <?php $i++ ?>
                @endif
                @if($i == 1)
                    <?php break; ?>
                @endif 
            @endforeach
        <br>
        <div class="row center giakhang_row">
            <?php $i = 0?>
            @foreach($image as $giakhang)
                @if($giakhang->categoryImage->id == 4)
                    <div class="col-sm-2 center giakhang_col">
                        <a target="_blank" href="{{$giakhang->link_to}}">
                            <img src="images/new.png" class="img-responsive center-block">
                            <img src="upload/image/{{$giakhang->img_name}}" class="img-responsive center-block" height="100px" width="150px" alt="Image">
                        <p> {{$giakhang->title}}  </p></a>
                    </div>
                    <?php $i++ ?>
                @endif
                @if($i == 6)
                    <?php break; ?>
                @endif
            @endforeach
        </div>
    </div>
    <br>
<!--end MyStore -->
