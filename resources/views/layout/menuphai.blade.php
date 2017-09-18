<!-- begin-tab-hightlight -->
            <div class="col-sm-4">
                <div class="tab tab-sale">
                    <button class="tabsale" onclick="openSale(event, 'Hot')" id="defaultSale"><h4>Khuyến Mãi Hot</h4></button>
                    <button class="tabsale" onclick="openSale(event, 'Online')"><h4>Chuyên Mục</h4></button>
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
                @foreach($smenu as $smnu)
                <hr>
                    <div class="row">
                        <div class="media">
                            <a href="">
                                <div class="media-left media-top">
                                    <img src="images/promotion.png" class="media-object">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$smnu->sub_cate_name}} </h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    
            @endforeach 
            <hr>
                </div>
            </div>
        <!--end-tab-hightlight -->
        <!--interesting-ads-->
            <div class="col-sm-4">
                <br>
                <div class="panel panel-danger ">
                    <div class="panel-heading panel-heading-interesting">
                        <h4>CÓ THỂ BẠN QUAN TÂM</h4>
                    </div>
                    <div class="interesting-ads">
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="media">
                                <a href="">
                                    <div class="media-left media-top">
                                        <img src="https://placehold.it/150x100?text=IMAGE" class="media-object" style="width: 90px">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Có Thể Bạn Quan Tâm Khuyến Mãi Hot Trong Ngày</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--end-interesting-ads-->