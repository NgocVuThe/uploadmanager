<div class="heading_title col-md-12">
        <div class="row">
            <div class="col-md-2 header_page">
            </div>
            <div class="col-md-10">
               <div class="row">
                   <div class="col-md-10">
                        <form action="" class="search-box form-inline">
                            <input type="text" name="search" class="col-lg-3 form-control" placeholder="Search..." required>
                            <button class="btn btn-primary" type="submit" style="margin-left: 5px;">Search</button>
                        </form>
                   </div>
                   <div class="col-md-2 text-center current_user">
                   <a href=""><i class="fa fa-user"></i> {{ $user->name }}</a>
                   <a href="{{ route('get_logout') }}">Logout</a>
                   </div>
               </div>
            </div>
        </div>
    </div>