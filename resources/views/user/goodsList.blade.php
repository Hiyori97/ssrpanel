@extends('user.layouts')

@section('css')
    <link href="/assets/pages/css/pricing.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <style>
        .fancybox > img {
            width: 75px;
            height: 75px;
        }
    </style>
@endsection
@section('title', '控制面板')
@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{url('user/goodsList')}}">流量包</a>
                <i class="fa fa-circle"></i>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE BASE CONTENT -->
                <!--
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-share font-green"></i>
                            <span class="caption-subject font-green bold uppercase"> 套餐 </span>
                        </div>
                        <div class="actions"></div>
                    </div>
                    <div class="portlet-body">
                        <div class="pricing-content-1">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="price-column-container border-active">
                                        <div class="price-table-head bg-blue">
                                            <h2 class="no-margin">月付套餐</h2>
                                        </div>
                                        <div class="arrow-down border-top-blue"></div>
                                        <div class="price-table-pricing">
                                            <h3><sup class="price-sign">￥</sup>30</h3>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持同时5个设备在线</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">50G流量/月</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持多设备</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">会员专属高速节点</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">每月1日流量重置</div>
                                            </div>
                                        </div>
                                        <div class="arrow-down arrow-grey"></div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline sbold uppercase price-button"> 购 买 </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="price-column-container border-active">
                                        <div class="price-table-head bg-red">
                                            <h2 class="no-margin">季付套餐</h2>
                                        </div>
                                        <div class="arrow-down border-top-red"></div>
                                        <div class="price-table-pricing">
                                            <h3><sup class="price-sign">￥</sup>80</h3>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持同时5个设备在线</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">80G流量/月</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持多设备</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">会员专属高速节点</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">每月1日流量重置</div>
                                            </div>
                                        </div>
                                        <div class="arrow-down arrow-grey"></div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase"> 购 买 </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="price-column-container border-active">
                                        <div class="price-table-head bg-green">
                                            <h2 class="no-margin">半年付套餐</h2>
                                        </div>
                                        <div class="arrow-down border-top-green"></div>
                                        <div class="price-table-pricing">
                                            <h3><sup class="price-sign">￥</sup>150</h3>
                                            <div class="price-ribbon">热门</div>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持同时5个设备在线</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">100G流量/月</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持多设备</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">会员专属高速节点</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">每月1日流量重置</div>
                                            </div>
                                        </div>
                                        <div class="arrow-down arrow-grey"></div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn green price-button sbold uppercase"> 购 买 </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="price-column-container border-active">
                                        <div class="price-table-head bg-purple">
                                            <h2 class="no-margin">年付套餐</h2>
                                        </div>
                                        <div class="arrow-down border-top-purple"></div>
                                        <div class="price-table-pricing">
                                            <h3><sup class="price-sign">￥</sup>300</h3>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-user"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持同时5个设备在线</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-drawer"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">200G流量/月</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-screen-smartphone"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">支持多设备</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">会员专属高速节点</div>
                                            </div>
                                            <div class="row mobile-padding">
                                                <div class="col-xs-3 text-right mobile-padding">
                                                    <i class="icon-refresh"></i>
                                                </div>
                                                <div class="col-xs-9 text-left mobile-padding">每月1日流量重置</div>
                                            </div>
                                        </div>
                                        <div class="arrow-down arrow-grey"></div>
                                        <div class="price-table-footer">
                                            <button type="button" class="btn grey-salsa btn-outline price-button sbold uppercase"> 购 买 </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-basket font-dark"></i>
                            <span class="caption-subject bold uppercase"> 流量时长包 </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> 名称 </th>
                                    <th> 类型 </th>
                                    <th> 内含流量 </th>
                                    <th> 售价 </th>
                                    <!--<th> 所需积分 </th>-->
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($goodsList->isEmpty())
                                    <tr>
                                        <td colspan="7">暂无数据</td>
                                    </tr>
                                @else
                                    @foreach($goodsList as $key => $goods)
                                        <tr class="odd gradeX">
                                            <td> {{$key + 1}} </td>
                                            <td>
                                                @if($goods->logo) <a href="{{$goods->logo}}" class="fancybox"><img src="{{$goods->logo}}"/></a> @endif
                                                {{$goods->name}}
                                            </td>
                                            <td> {{$goods->type == 1 ? '流量包' : '套餐'}} </td>
                                            <td> {{$goods->traffic}} MiB </td>
                                            <td> ￥{{$goods->price}} </td>
                                            <!--<td> {{$goods->score}} </td>-->
                                            <td>
                                                <button type="button" class="btn btn-sm red btn-outline" onclick="buy('{{$goods->id}}')">购买</button>
                                                <!--<button type="button" class="btn btn-sm blue btn-outline" onclick="exchange('{{$goods->id}}')">兑换</button>-->
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="dataTables_info" role="status" aria-live="polite">共 {{$goodsList->total()}} 个商品</div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="dataTables_paginate paging_bootstrap_full_number pull-right">
                                    {{ $goodsList->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('script')
    <script src="/assets/global/plugins/fancybox/source/jquery.fancybox.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function buy(goods_id) {
            window.location.href = '{{url('user/addOrder?goods_id=')}}' + goods_id;
        }

        // 编辑商品
        function exchange(id) {
            //
        }

        // 查看商品图片
        $(document).ready(function () {
            $('.fancybox').fancybox({
                openEffect: 'elastic',
                closeEffect: 'elastic'
            })
        })
    </script>
@endsection
