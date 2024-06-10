<div class="sidebar">
  <div class="logo-details">
    <i class="bx bx-food"></i>
    <span class="logo_name">NutriTrack</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">NutriTrack</span>
      </a>
    </li>
    <li>
      <a href="/food" class="{{ request()->Is('food*') ? 'active' : '' }}">
        <i class="bx bx-box"></i>
        <span class="links_name">Food</span>
      </a>
    </li>
    <li>
      <a href="/Nutrient" class="{{ request()->Is('Nutrient*') ? 'active' : '' }}">
        <i class="bx bx-dish"></i>
        <span class="links_name">Nutrient Intake</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
  </ul>
</div>
