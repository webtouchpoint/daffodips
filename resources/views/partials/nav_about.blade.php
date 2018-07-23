<ul class="nav flex-column sidenav">
    <li class="nav-item">
      <a class="nav-link{{ $active == 'overview' ? ' active': ''}}" href="{{ route('overview') }}">Overview</a>
    </li>
    <li class="nav-item">
      <a class="nav-link{{ $active == 'principalsDesk' ? ' active': ''}}" href="{{ route('principalsDesk') }}">Principal's Desk</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('visionStatement') }}">Vision Statement</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('missionStatement') }}">Mission Statement</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('futurePlanAndThoughts') }}">Future Plan &amp; Thoughts</a>
    </li>
</ul>
<div class="d-lg-none mb-5"></div>