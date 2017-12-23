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
                            <div class="{{$i==0 ? 'item active':'item'}}" style="height='425px' width='800px'>
                                <a target="_blank" href="{{$carousel->link_to}}">
                                    <img src="public/upload/image/{{$carousel->img_name}}" alt="Image"  height="425px" width="800px" />
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
            @foreach($mmenu as $hot)
                <?php $data = $hot->post->where('high_light',0)->sortByDesc('id')->take(5) ?>
                 @foreach($data->all() as $ht)
                    <div class="row">
                        <div class="media">
                            <a href="chi-tiet-khuyen-mai/{{$ht->id}}/{{$ht->title_seolink}}.html">
                                <div class="media-left media-top">
                                    <img src="public/upload/image/{{$ht->image}}" class="media-object" height="75px" width="100px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$ht->title}}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach        
            @endforeach 
        </div>
        <!-- HOT TRONG NGAY -->
    </div>
    <hr>
</div>

