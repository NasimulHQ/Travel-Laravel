<div class="container">
    <div class="main-nav">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="main-logo">
                        <a class="navbar-brand" href="{{ ('/') }}">TRAVEL</a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{ ('/') }}"><i class="fa fa-home"
                                    aria-hidden="true"></i>&nbsp;HOME</a></li>
                        <li><a href="{{ ('/flights')}}"><i class="fa fa-plane"
                                    aria-hidden="true"></i>&nbsp;FLIGHTS</a></li>
                        <li><a href="{{ ('/hotels')}}"><i class="fa fa-building"
                                    aria-hidden="true"></i>&nbsp;HOTELS</a></li>
                        <li><a href="{{ ('/holidays')}}"><i class="fa fa-gift"
                                    aria-hidden="true"></i>&nbsp;HOLIDAY</a></li>
                        <li><a href="{{ ('/blogs')}}"><i class="fa fa-pencil"
                                    aria-hidden="true"></i>&nbsp;BLOG</a></li>
                        <li><a href="{{ asset('/blogs')}}/#"><i class="fa fa-phone"
                                    aria-hidden="true"></i>&nbsp;+880-1844440000</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    