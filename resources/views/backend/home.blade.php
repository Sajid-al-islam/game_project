@extends('backend.layouts.main')
@section('content')
<style>
    1, h2, h3, h4, h5, h6{
    font-family: 'Open Sans', sans-serif;
    color: #19b6d3;
    font-weight: bold;
}

h1 { 
    font-size: clamp(48px, calc(48px + (48 - 16) * ((100vw - 320px) / (1920 - 320))), 48px);
    margin: 0;
}
  
h2 {
    font-size: clamp(36px, calc(36px + (36 - 16) * ((100vw - 320px) / (1920 - 320))), 36px);
    margin: 0;
}
  
h3 {
    font-size: clamp(24px, calc(24px + (24 - 16) * ((100vw - 320px) / (1920 - 320))), 24px);
    margin: 0;
}
  
h4 {
    font-size: clamp(20px, calc(20px + (20 - 16) * ((100vw - 320px) / (1920 - 320))), 20px);
    margin: 0;
}
  
h5 {
    font-size: clamp(18px, calc(18px + (18 - 16) * ((100vw - 320px) / (1920 - 320))), 18px);
    margin: 0;
}
  
h6 {
    font-size: clamp(16px, calc(16px + (16 - 16) * ((100vw - 320px) / (1920 - 320))), 16px);
    margin: 0;
}
  

p{
    font-size: 15px;
    line-height: 28px;
}
ul li, ol li{
    line-height: 28px;
}

.container{
    max-width: 1300px;
    margin: 0 auto;
}

.text-center{
    text-align: center;
}

.text-white {
    color: #ffffff;
}

.col-kdf{
    display: flex; 
    justify-content: center;
}

.h3-text{
    margin: 60px 0;
}

.mt-60{ margin-top: 60px; } .mt-55{ margin-top: 55px; } .mt-50{ margin-top: 50px; } 
.mt-40{ margin-top: 40px; } .mt-35{ margin-top: 35px; } .mt-30{ margin-top: 30px; } 
.mt-25{ margin-top: 25px; } .mt-20{ margin-top: 20px; } .mt-15{ margin-top: 15px; } 
.mt-10{ margin-top: 10px; } .mt-5{ margin-top: 5px; } .mt-0{ margin-top: 0px;}

.mb-60{ margin-bottom: 60px; } .mb-55{ margin-bottom: 55px; } .mb-50{ margin-bottom: 50px; } 
.mb-40{ margin-bottom: 40px; } .mb-35{ margin-bottom: 35px; } .mb-30{ margin-bottom: 30px; } 
.mb-25{ margin-bottom: 25px; } .mb-20{ margin-bottom: 20px; } .mb-15{ margin-bottom: 15px; } 
.mb-10{ margin-bottom: 10px; } .mb-5{ margin-bottom: 5px; } .mb-0{ margin-bottom: 0px;}

.ml-60{ margin-left: 60px; } .ml-55{ margin-left: 55px; } .ml-50{ margin-left: 50px; } 
.ml-40{ margin-left: 40px; } .ml-35{ margin-left: 35px; } .ml-30{ margin-left: 30px; } 
.ml-25{ margin-left: 25px; } .ml-20{ margin-left: 20px; } .ml-15{ margin-left: 15px; } 
.ml-10{ margin-left: 10px; } .ml-5{ margin-left: 5px; } .ml-0{ margin-left: 0px;}

.mr-60{ margin-right: 60px; } .mr-55{ margin-right: 55px; } .mr-50{ margin-right: 50px; } 
.mr-40{ margin-right: 40px; } .mr-35{ margin-right: 35px; } .mr-30{ margin-right: 30px; } 
.mr-25{ margin-right: 25px; } .mr-20{ margin-right: 20px; } .mr-15{ margin-right: 15px; } 
.mr-10{ margin-right: 10px; } .mr-5{ margin-right: 5px; } .mr-0{ margin-right: 0px;}

.pt-60{ padding-top: 60px; } .pt-55{ padding-top: 55px; } .pt-50{ padding-top: 50px; } 
.pt-40{ padding-top: 40px; } .pt-35{ padding-top: 35px; } .pt-30{ padding-top: 30px; } 
.pt-25{ padding-top: 25px; } .pt-20{ padding-top: 20px; } .pt-15{ padding-top: 15px; } 
.pt-10{ padding-top: 10px; } .pt-5{ padding-top: 5px; } .pt-0{ padding-top: 0px;}

.pb-60{ padding-bottom: 60px; } .pb-55{ padding-bottom: 55px; } .pb-50{ padding-bottom: 50px; } 
.pb-40{ padding-bottom: 40px; } .pb-35{ padding-bottom: 35px; } .pb-30{ padding-bottom: 30px; } 
.pb-25{ padding-bottom: 25px; } .pb-20{ padding-bottom: 20px; } .pb-15{ padding-bottom: 15px; } 
.pb-10{ padding-bottom: 10px; } .pb-5{ padding-bottom: 5px; } .pt-0{ padding-bottom: 0px;}

.pl-60{ padding-left: 60px; } .pl-55{ padding-left: 55px; } .pl-50{ padding-left: 50px; } 
.pl-40{ padding-left: 40px; } .pl-35{ padding-left: 35px; } .pl-30{ padding-left: 30px; } 
.pl-25{ padding-left: 25px; } .pl-20{ padding-left: 20px; } .pl-15{ padding-left: 15px; } 
.pl-10{ padding-left: 10px; } .pl-5{ padding-left: 5px; } .pl-0{ padding-left: 0px;}

.pr-60{ padding-right: 60px; } .pr-55{ padding-right: 55px; } .pr-50{ padding-right: 50px; } 
.pr-40{ padding-right: 40px; } .pr-35{ padding-right: 35px; } .pr-30{ padding-right: 30px; } 
.pr-25{ padding-right: 25px; } .pr-20{ padding-right: 20px; } .pr-15{ padding-right: 15px; } 
.pr-10{ padding-right: 10px; } .pr-5{ padding-right: 5px; } .pr-0{ padding-right: 0px;}

.w-100{ width: 100%; } .w-90{ width: 90%; } .w-80{ width: 80%; }
.w-70{ width: 70%; } .w-60{ width: 60%; } .w-50{ width: 50%; }
.w-40{ width: 40%; } .w-30{ width: 30%; } .w-20{ width: 20%; }
.w-10{ width: 10%; }

.content-chat{
    margin-right: 30px;
    margin-left: 30px;
    display: flex;
    justify-content: center;
    gap: 25px;
    padding: 20px;
}

.content-chat .content-chat-user{
    background-color: white;
    padding: 15px;
    border-radius: 25px;
    width: 350px;
}

.content-chat .content-chat-user .head-search-chat{
    background-color: #19b6d3;
    margin: -15px -15px 15px -15px;
    border-radius: 25px 25px 0 0;
    padding: 10px 15px;
}

.content-chat .content-chat-user .head-search-chat h4{
    color: #ffffff;
}

.content-chat .content-chat-user .search-user{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 25px;
}

.content-chat .content-chat-user .search-user input{
    padding: 10px 15px;
    border-radius: 25px;
    border: 2px solid #949494;
    outline: none;
    width: 100%;
}

.content-chat .content-chat-user .search-user span i{
    position: absolute;
    top: 10px;
    right: 15px;
}

.content-chat .content-chat-user .list-search-user-chat {
    display: flex;
    flex-direction: column;
    gap: 15px;
    height: 100%;
    max-height: 430px;
    overflow-y: auto;
}

.content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar{
    -webkit-appearance: none;
}

.content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar:vertical {
    width:10px;
}

.content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-button:increment,
.content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-button {
    display: none;
} 

.content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar:horizontal {
    height: 10px;
}

.content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-thumb {
    background-color: #19b6d3;
    border-radius: 20px;
    border: 2px solid #f1f2f3;
}

.content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-track {
    border-radius: 10px;  
}

.content-chat .content-chat-user .list-search-user-chat .user-chat{
    display: flex;
    gap: 15px;
    padding: 10px 15px;
    border-radius: 25px;
    cursor: pointer;
}

.content-chat .content-chat-user .list-search-user-chat .user-chat:hover{
    background-color: #c5e2e8;
}

.content-chat .content-chat-user .list-search-user-chat .user-chat.active{
    background-color: #c5e2e8;
}

.content-chat .content-chat-user .list-search-user-chat .user-chat .user-chat-img{
    position: relative;
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.content-chat .content-chat-user .list-search-user-chat .user-chat .user-chat-img img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
}

.content-chat .content-chat-user .list-search-user-chat .user-chat .user-chat-img .online{
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 10px;
    height: 10px;
    font-size: 20px;
    background-color: #009975;
    border-radius: 50%;
    border: 3px solid #ffffff;  
    box-shadow: 1px 1px 15px -4px #000;
}

.content-chat .content-chat-user .list-search-user-chat .user-chat .user-chat-img .offline{
    position: absolute;
    bottom: 5px;
    right: 5px;
    width: 10px;
    height: 10px;
    font-size: 20px;
    background-color: #bb4315;
    border-radius: 50%;    
    border: 3px solid #ffffff;
    box-shadow: 1px 1px 15px -4px #000;
}

.content-chat .content-chat-message-user{
    display: none;
    background-color: #ffffff;
    padding: 15px;
    border-radius: 25px;
    max-width: 700px;
    width: 100%;
}

.content-chat .content-chat-message-user.active{
    display: block;
}

/* .content-chat .content-chat-message-user.d-none{
    display: none;
} */

.content-chat .content-chat-message-user .head-chat-message-user{
    display: flex;
    gap: 15px;
    padding: 10px 15px;
    border-radius: 25px 25px 0 0;
    background-color: #19b6d3;
    margin-top: -15px;
    margin-left: -15px;
    margin-right: -15px;
}

.content-chat .content-chat-message-user .head-chat-message-user img{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
}

.content-chat .content-chat-message-user .head-chat-message-user .message-user-profile small {
    display: flex;
    gap: 5px;
}

.content-chat .content-chat-message-user .head-chat-message-user .message-user-profile small .online{
    width: 10px;
    height: 10px;
    font-size: 20px;
    background-color: #009975;
    border-radius: 50%;
    border: 3px solid #ffffff;  
    box-shadow: 1px 1px 15px -4px #000;
}

.content-chat .content-chat-message-user .head-chat-message-user .message-user-profile small .offline{
    width: 10px;
    height: 10px;
    font-size: 20px;
    background-color: #bb4315;
    border-radius: 50%;
    border: 3px solid #ffffff;  
    box-shadow: 1px 1px 15px -4px #000;
}
.content-chat .content-chat-message-user .body-chat-message-user {
    display: flex;
    flex-direction: column;
    gap: 15px;
    box-sizing: border-box;
    padding: 15px;
    height: 400px;
    margin: 15px 0;
    overflow: auto;
    background-color: #ececec;
    border-radius: 10px;
}

.content-chat .content-chat-message-user .body-chat-message-user::-webkit-scrollbar{
    -webkit-appearance: none;
}

.content-chat .content-chat-message-user .body-chat-message-user::-webkit-scrollbar:vertical {
    width:10px;
    border-radius: 25px;
}

.content-chat .content-chat-message-user .body-chat-message-user::-webkit-scrollbar-button:increment,
.content-chat .content-chat-message-user .body-chat-message-user::-webkit-scrollbar-button {
    display: none;
} 

.content-chat .content-chat-message-user .body-chat-message-user::-webkit-scrollbar:horizontal {
    height: 10px;
}

.content-chat .content-chat-message-user .body-chat-message-user::-webkit-scrollbar-thumb {
    background-color: #19b6d3;
    border-radius: 20px;
    border: 2px solid #f1f2f3;
}

.content-chat .content-chat-message-user .body-chat-message-user::-webkit-scrollbar-track {
    border-radius: 10px;  
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-left{
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-left .message-user-left-img{
    display: flex;
    gap: 10px;
    justify-content: start;
    align-items: center;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-left .message-user-left-img img{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-left .message-user-left-text{
    position: relative;
    padding: 15px 25px;
    background-color: #ffffff;
    border-radius: 15px;
    color: #949494;
    max-width: 250px;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-left .message-user-left-text::before{
    content: '';
    position: absolute;
    top: -26px;
    left: 15px;
    border-right: 15px solid transparent;
    border-top: 15px solid transparent;
    border-left: 0px solid transparent;
    border-bottom: 15px solid #ffffff;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-right{
    display: flex;
    flex-direction: column;
    align-items: end;
    gap: 15px;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-right .message-user-right-img{
    display: flex;
    gap: 10px;
    justify-content: end;
    align-items: center;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-right .message-user-right-img img{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-right .message-user-right-text{
    position: relative;
    padding: 15px 25px;
    background-color: #c5e2e8;
    border-radius: 15px;
    color: #949494;
    width: 250px;
}

.content-chat .content-chat-message-user .body-chat-message-user .message-user-right .message-user-right-text::before{
    content: '';
    position: absolute;
    top: -26px;
    right: 15px;
    border-right: 0px solid transparent;
    border-top: 15px solid transparent;
    border-left: 15px solid transparent;
    border-bottom: 15px solid #c5e2e8;
}

.content-chat .content-chat-message-user .footer-chat-message-user {
    background-color: #c5e2e8;
    padding: 15px 25px;
    border-radius: 15px;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.content-chat .content-chat-message-user .footer-chat-message-user .message-user-send{
    position: relative;
    width: 100%;
}

.content-chat .content-chat-message-user .footer-chat-message-user .message-user-send input {
    box-sizing: border-box;
    width: 100%;
    padding: 10px 15px;
    border-radius: 25px;
    outline: none;
    border: 2px solid #949494;
}

.content-chat .content-chat-message-user .footer-chat-message-user button{
    font-size: 18px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    border: none;
    background-color: #19b6d3;
    color: #ffffff;
    cursor: pointer;
}

.content-chat .content-chat-message-user .footer-chat-message-user button:hover{
    background-color: #daa520;
}

@media (max-width: 913px){
    .content-chat{
        padding: 0px;
    }

    .content-chat .content-chat-user {
        max-width: 300px;
        width: 100%;
    }

    .content-chat .content-chat-message-user {
        background-color: #ffffff;
        padding: 15px;
        border-radius: 25px;
        max-width: 600px;
        width: 100%;
    }
}

@media (max-width: 728px){
    .content-chat {
        display: flex;
        flex-direction: column;
    }

    .content-chat .content-chat-user {
        box-sizing: border-box;
        max-width: 1000px;
        width: 100%;
    }

    .content-chat .content-chat-message-user {
        box-sizing: border-box;
        max-width: 1000px;
        width: 100%;
    }

    .content-chat .content-chat-user .list-search-user-chat {
        box-sizing: border-box;
        max-width: -moz-fit-content;
        max-width: fit-content;
        display: flex;
        flex-direction: row;
        margin: 0 auto;
        overflow-x: auto;
        max-height: -moz-fit-content;
        max-height: fit-content;
        padding: 15px;
    }

    .content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar{
        -webkit-appearance: none;
    }
    
    .content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar:vertical {
        width:10px;
    }
    
    .content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-button:increment,
    .content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-button {
        display: none;
    } 
    
    .content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar:horizontal {
        height: 10px;
    }
    
    .content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-thumb {
        background-color: #19b6d3;
        border-radius: 20px;
        border: 2px solid #f1f2f3;
    }
    
    .content-chat .content-chat-user .list-search-user-chat::-webkit-scrollbar-track {
        border-radius: 10px;  
    }
    

    .content-chat .content-chat-user .list-search-user-chat .user-chat {
        width: 60px;
        height: 60px;
        padding: 10px;
        background-color: #19b6d3;
        max-height: -moz-fit-content;
        max-height: fit-content;
        border-radius: 50%;
    }

    .content-chat .content-chat-user .list-search-user-chat .user-chat .user-chat-text {
        display: none;
    }
}
</style>
<div class="body-content">
  @if($setting->app_version==29)
     <a  type="button" class="btn btn-success" href="{{URL::to('/version_update')}}">App Verison 34 Active</a>
  	@else
  <p>App Version : {{$setting->app_version}} Running</p>
	@endif
<div class="row">
    
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-warning card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-download"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Active Host</p>
                <h3 class="card-title fs-21 font-weight-bold">{{$active_host}}</h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div> 
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Total User</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$total_users}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Total Agency</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$total_agency}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Total Wallet</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$users_balance}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
  
   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Total Protal Balance</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$total_portal_recharge-($total_portal_transfer+$total_portal_recall)}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
    @php
    $protal_sand=$total_portal_transfer-$total_recall;
    @endphp
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Protal Sand</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$protal_sand}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>

@php
$total_serve=round(($users_balance+$total_gift+$fruts_game_balance->game_balance+$five_game_balance->game_balance+$greedy_game_balance->game_balance+$greedy_game_balance->second_balance+$fruts_game_balance->second_balance));
@endphp
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Total Serve Coin</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$total_serve}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Total Reciving</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$total_gift}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
   
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Coin Generate</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{($total_portal_recharge-($total_portal_transfer+$total_portal_recall))+$protal_sand}} </h3>
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
   

    @php
    $loss_profits= $protal_sand-$total_serve;
    $loss_profit=$loss_profits;
    @endphp
     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted"> @if($loss_profit>0)Profit @else Loss  @endif</p>
               @if($loss_profit>0) <h3 class="card-title fs-21 font-weight-bold" style=" color: green; font-weight: 900 !important; "> {{round($loss_profit)}} </h3> @else  <h3 class="card-title fs-21 font-weight-bold" style=" color: red; font-weight: 900 !important; "> {{round($loss_profit)}} </h3>  @endif
            </div>
            <div class="card-footer p-3">
            </div>
        </div>
    </div>
     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted"> Fruits Balance</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{round($fruts_game_balance->game_balance+$fruts_game_balance->second_balance)}} </h3>
            </div>
            <div class="card-footer p-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Adjust Game
                </button>
                 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">
                  Adjust 2nd balance
                </button>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Greedy Balance</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$greedy_game_balance->game_balance+$greedy_game_balance->second_balance}} </h3>
            </div>
            <div class="card-footer p-3">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#greedymodel">
                  Adjust Game
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#greedy2ndmodel">
                  Adjust 2nd balance
                </button>
            </div>
        </div>
    </div>
     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="card-header card-header-danger card-header-icon position-relative border-0 text-right px-3 py-0">
                <div class="card-icon d-flex align-items-center justify-content-center">
                    <i class="typcn typcn-home-outline"></i>
                </div>
                <p class="card-category text-uppercase fs-10 font-weight-bold text-muted">Five Star Balance</p>
                <h3 class="card-title fs-21 font-weight-bold"> {{$five_game_balance->game_balance}} </h3>
            </div>
            <div class="card-footer p-3">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#fivestar">
                  Adjust Game
                </button>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
        <div class="card card-stats statistic-box mb-4">
            <div class="content-chat mt-20">
                <div class="content-chat-user">
                    <div class="head-search-chat">
                        <h4 class="text-center">Comment Finder</h4>
                    </div>
                  

                    <div class="list-search-user-chat mt-20" id="comment_list">
                        

                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adjust Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="{{URL::to('game_balance_block')}}" method="post">
             @csrf
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Game Name</label>
            <select class="form-control" name="game_name">
                <option value='Furirts'>Fuirts</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Type</label>
            <select name="type"class="form-control">
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input type="text" name="amount" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="fivestar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adjust Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="{{URL::to('five_game_balance_block')}}" method="post">
             @csrf
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Game Name</label>
            <select class="form-control" name="game_name">
                <option value='Five'>Five</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Type</label>
            <select name="type"class="form-control">
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input type="text" name="amount" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="greedymodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adjust Greedy Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="{{URL::to('greedy_game_balance_block')}}" method="post">
             @csrf
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Game Name</label>
            <select class="form-control" name="game_name">
                <option value='Greedy'>Greedy</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Type</label>
            <select name="type"class="form-control">
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input type="text" name="amount" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="greedy2ndmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adjust Greedy 2nd Balance Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="{{URL::to('greedy_game_sec_balance_block')}}" method="post">
             @csrf
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Game Name</label>
            <select class="form-control" name="game_name">
                <option value='Greedy'>Greedy</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Type</label>
            <select name="type"class="form-control">
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input type="text" name="amount" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adjust Fruits 2nd Balance Game</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="{{URL::to('fruits_game_sec_balance_block')}}" method="post">
             @csrf
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Game Name</label>
            <select class="form-control" name="game_name">
                <option value='Fruits'>Fruits</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Type</label>
            <select name="type"class="form-control">
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Amount:</label>
            <input type="text" name="amount" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>
</div>
<script>
  
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  function fetchData() {
    $.ajax({
        url: '{{ URL::route('comment.data') }}',
        type: 'GET',
        dataType: 'html',
        success: function(data) {
            console.log(data);
            // Assuming 'data' contains the updated HTML content
            $('#comment_list').html(data);

            // Set up the next AJAX request after 5 seconds
            setTimeout(fetchData, 7000);
        },
        error: function(xhr, status, error) {
            console.error(error);

            // Set up the next AJAX request after 4 seconds
            setTimeout(fetchData, 4000);
        }
    });
}

// Start the initial AJAX request
fetchData();


</script>
@endsection