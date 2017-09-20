<!-- begin-tab-hightlight -->
    <div class="col-sm-4">
        <div class="tab tab-sale">
            <button class="tabsale" onclick="openSale(event, 'Hot')" id="defaultSale"><h4> Khuyến Mãi Hot &nbsp;</h4></button>
            <button class="tabsale" onclick="openSale(event, 'Online')"><h4>Chuyên Mục Chính</h4></button>
        </div>
        <div id="Hot" class="tabsalecontent">
            @foreach($mmenu as $hot)
                <?php $data = $hot->post->where('high_light',0)->sortByDesc('created_at')->take(10) ?>
                @foreach($data->all() as $ht)
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="upload/image/{{$ht->image}}" class="media-object"  height="75px" width="100px">
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
        <div id="Online" class="tabsalecontent">
        @foreach($mmenu as $mmnu)
            <ul class="list-group" style="border: none">
                @if(count($mmnu->subCategory) > 0 )
                    <li class="list-group-item" style="border: none"> 
                        <div class="media">
                            <div class="media-left media-top">
                                <img src="images/promotion.png" class="media-object">
                            </div>
                            <div class="media-body">
                                <h4>{{$mmnu->main_cate_name}}</h4>
                            </div>
                        </div>
                    </li>
                    <ul style="border: none">
                        @foreach($mmnu->subCategory as $smnu)
                                <li class="list-group-item" style="border: none"> 
                                    <a href="{{$mmnu->id == 1 ? 'khuyen-mai' : 'giam-gia'}}/{{$smnu->id}}/{{$smnu->sub_cate_seolink}}.html" class="list-group-item" style="text-decoration: none">
                                        <div class="media">
                                            <div class="media-left media-top">
                                                <img src="images/promotion.png" class="media-object">
                                            </div>
                                            <div class="media-body">
                                                    <h4>{{$smnu->sub_cate_name}}</h4>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                        @endforeach
                    </ul>
                @endif
            </ul>
        @endforeach 
    </div>
</div>
<!--end-tab-hightlight -->
<!--interesting-ads-->
<div class="col-sm-4">
    <br>
    <div class="panel panel-danger ">
        <div class="panel-heading panel-heading-interesting text-center">
            <h4>Mua Online</h4>
        </div>
        @foreach($mmenu as $onl)
            <?php $data = $onl->post->where('online',0)->sortByDesc('created_at')->take(15) ?>
            @foreach($data->all() as $online)
                <div class="interesting-ads">
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="upload/image/{{$online->image}}" class="media-object" height="75px" width="100px">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$online->title}}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach        
        @endforeach 
    </div>
</div>
<!--end-interesting-ads--></div>