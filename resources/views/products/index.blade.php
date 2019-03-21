@extends('layouts.app')
@section('title', '商品列表')

@section('content')
    <div class="page-head">
        <div class="container">
            <div class="row">
                <div class="page-head-content">
                    <h1 class="page-title">Laravel-Shop 产品中心</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- property area -->
    <div class="properties-area recent-property" style="background-color: #FFF;">
        <div class="container">
            <div class="row  pr0 padding-top-40 properties-page">


                <div class="col-md-12  clear">
                    <div class="col-xs-10 page-subheader sorting pl0">
                        <!-- 筛选组件开始 -->
                        <form action="{{ route('products.index') }}" class="search-form">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="col-auto"><input type="text"
                                                                     class="form-control form-control-sm float-left"
                                                                     name="search" placeholder="搜索" style="width: 80%;float: left">
                                            <button class="btn btn-primary btn-sm float-left " style="float: right">搜索</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="items-per-page">
                                    <label for="items_per_page"><b>产品排序:</b></label>
                                    <div class="sel">
                                        <select id="items_per_page" name="per_page">
                                            <option value="">排序方式</option>
                                            <option value="price_asc">价格从低到高</option>
                                            <option value="price_desc">价格从高到低</option>
                                            <option value="sold_count_desc">销量从高到低</option>
                                            <option value="sold_count_asc">销量从低到高</option>
                                            <option value="rating_desc">评价从高到低</option>
                                            <option value="rating_asc">评价从低到高</option>
                                        </select>
                                    </div><!--/ .sel-->
                                </div><!--/ .items-per-page-->
                            </div>
                        </form>
                    </div>

                    <div class="col-xs-2 layout-switcher">
                        <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i> </a>
                        <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                    </div><!--/ .layout-switcher-->
                </div>

                <div class="col-md-12 clear ">
                    <div id="list-type" class="proerty-th">
                        @foreach($products as $product)
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="{{ route('products.show', ['product' => $product->id]) }}"><img src="{{ $product->image_url }}"></a>
                                </div>

                                <div class="item-entry overflow">
                                    <h5><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b> Area :</b> 120m </span>
                                    <span class="proerty-price pull-right"> $ {{ $product->price }}</span>
                                    <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis
                                        dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                    <div class="property-icon">
                                        <img src="/home/assets/img/icon/bed.png">(5)|
                                        <img src="/home/assets/img/icon/shawer.png">(2)|
                                        <img src="/home/assets/img/icon/cars.png">(1)
                                    </div>
                                </div>


                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12 clear">
                    <div class="pull-right">
                        <div class="pagination">
                            {{--<ul>--}}
                                {{--<li><a href="#">Prev</a></li>--}}
                                {{--<li><a href="#">1</a></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><a href="#">4</a></li>--}}
                                {{--<li><a href="#">Next</a></li>--}}
                            {{--</ul>--}}
                            {{ $products->appends($filters)->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scriptsAfterJs')
    <script>
      var filters = {!! json_encode($filters) !!};
      $(document).ready(function () {
        $('.search-form input[name=search]').val(filters.search);
        $('.search-form select[name=order]').val(filters.order);
        $('.search-form select[name=order]').on('change', function () {
          $('.search-form').submit();
        });
      })
    </script>
@endsection
