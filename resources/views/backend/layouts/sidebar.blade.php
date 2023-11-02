
<nav class="sidebar sidebar-bunker">
    <div class="sidebar-header">
     <a href="{{URL::to('/dashboard')}}" class="logo"><img src="" alt=""></a> 
 </div><!--/.sidebar header-->
 <form class="search sidebar-form" action="#" method="get" >
    @csrf
    <div class="search__inner">
        <input type="number" name="id" class="search__text" placeholder="Search..." >
        <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
    </div>
</form><!--/.search-->
<div class="sidebar-body">
    <nav class="sidebar-nav">
        <ul class="metismenu">
            <li class="nav-label">Main Menu</li>
            <li><a href="{{URL::to('/dashboard')}}"><i class="typcn typcn-home-outline mr-2"></i>Dashboard</a></li>
            
          
          
        </nav>
    </div><!-- sidebar-body -->
</nav>