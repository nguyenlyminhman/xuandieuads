<nav class="navbar navbar-inverse  navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand active" href="#">Trang Chủ</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach($mmenu as $mnu)
                        <li class={{ count($mnu->subCategory)>0 ? 'dropdown' : ''}}>
                            <a href="adnews.thml" class="dropdown-toggle" data-toggle="dropdown" role="button">{{$mnu->main_cate_name}}</span></a>
                            <ul class="dropdown-menu">
                            @foreach($mnu->subCategory as $snu)    
                                <li><a href="adnews.html">{{$snu->sub_cate_name}}</a></li>
                                <li role="separator" class="divider"></li>
                            @endforeach
                            </ul>
                        </li>
                @endforeach
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group input-group">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                </form>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
