<div class="container">
    <div class="row">
        <div class="col-sm-8 carousel_slide">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                <?php $i=0 ?>
                @foreach($image as $mimg)
                    @if($mimg->categoryImage->id == 1)
                        <li data-target="#myCarousel" data-slide-to="{{$i}}" {{ $i==0 ? 'class="active"': '' }}></li>
                        <?php $i++ ?>
                    @endif
                @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php $i=0 ?>
                    @foreach($image as $carousel)
                        @if($carousel->categoryImage->id == 1)
                            <div class="{{$i==0 ? 'item active':'item'}}">
                                <a target="_blank" href="{{$carousel->link_to}}">
                                    <img src="upload/image/{{$carousel->img_name}}" alt="Image" height="425px" width="800px">
                                </a>
                            </div>
                            <?php $i++ ?>
                        @endif
                    @endforeach
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- HOT TRONG NGAY -->
        <div class="col-sm-4 carousel_hot_news">
        <?php $i = 0?>
        @foreach($hot as $ht)
            @if($ht->subCategory->mainCategory->id == 1)
                <div class="row">
                    <div class="media">
                        <a href="">
                            <div class="media-left media-top">
                                <img src="upload/image/{{$ht->image}}" class="media-object" height="75px" width="100px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{$ht->title}}</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <?php $i++ ?>
            @endif
            @if($i == 5)
                <?php break; ?>
            @endif
        @endforeach      
        </div>
        <!-- HOT TRONG NGAY -->
    </div>
    <hr>
</div>

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
