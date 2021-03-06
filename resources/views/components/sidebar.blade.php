 <div style="height:87vh;" class="d-flex flex-column flex-shrink-0 p-3 bg-info" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">INFORMATION</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
        <i class="fa fa-home"></i>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
        <i class="fa fa-bar-chart"></i>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
        <i class="fa fa-address-book-o"></i>
          Admins
        </a>
      </li>
      <li>
        <a href="" class="nav-link link-dark">
        <i class="fa fa-users"></i>
          Members
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
        <i class="fa fa-star"></i>
          Name of Room
        </a>
      </li>
      <li>
        <a href="/departments" class="nav-link @if($active == 'departments') active @endif link-dark">
        <i class="fa fa-institution"></i>
          Departments
        </a>
      </li>
      <li>
          <a href="/employees" class="nav-link @if($active == 'employees') active @endif link-dark">
          <i class="fa fa-child"></i>
          Employees
        </a>
      </li>
      <li>
          <a href="/leaves" class="nav-link @if($active == 'leaves') active @endif link-dark">
          <i class="fa fa-file-text"></i>
          Leaves
        </a>
      </li>
      <li>
          <a href="/loans" class="nav-link @if($active == 'loans') active @endif link-dark">
          <i class="fa fa-calculator"></i>
          Loans
        </a>
      </li>
      <li>
          <a href="/mandatorydeductions" class="nav-link @if($active == 'mandatorydeductions') active @endif link-dark">
          <i class="fa fa-pie-chart"></i>
          Mandatory Deductions
        </a>
      </li>
      <li>
          <a href="/timekeeping" class="nav-link @if($active == 'timekeeping') active @endif link-dark">
          <i class="fa fa-pencil-square-o"></i>
          Timekeeping
        </a>
      </li>
      <li>
          <a href="/payslips" class="nav-link @if($active == 'payslips') active @endif link-dark">
          <i class="fa fa-usd"></i>
          Payslips
        </a>
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwZMpvzZtWKpnqfpFZ_BD8BG-yrkqFufViIQ&usqp=CAU" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>IM MHAK</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>