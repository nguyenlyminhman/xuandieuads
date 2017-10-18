    <hr>
    <h2>Có thể bạn quan tâm</h2>
    <hr>
    <?php $i = 0 ?>
        <div class="row">
            @foreach($quantam as $qt)
                <div class="col-sm-4" style="float: left">
                    <img src="public/upload/image/{{$qt->image}}" height="150px" width="250px">
                    <div class="text-center voucher-title">
                        <p> 
                            <a href="chi-tiet-khuyen-mai/{{$qt->id}}/{{$qt->title_seolink}}.html">
                                {{$qt->title}}
                            </a>
                        </p>
                    </div>
                    
                </div>
                <?php $i++; ?>
                @if($i%3==0)
                    </div><br><div class="row">
                @endif
            @endforeach  
        </div>
    