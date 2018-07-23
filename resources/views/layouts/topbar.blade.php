<div class="topbar d-none d-lg-block">
	<div class="container">
		<div class="clearfix">
			<ul class="social">
				<li><a target="_blank" href="#"><i class="fa fa-facebook-f"></i></a></li>
				<li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
			<ul class="rightc">
				<li><i class="fa fa-phone"></i> 8597262650 </li>      
				<li><i class="fa fa-envelope-o"></i> daffodips@gmail.com </li>
				<li>
					@guest 
						<i class="fa fa-user-o"></i> <a href="{{ route('login') }}">Login</a>
					 @else 
					 <i class="fa fa-user-o"></i><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
				</li>
			</ul>
		</div>
	</div>
</div>

