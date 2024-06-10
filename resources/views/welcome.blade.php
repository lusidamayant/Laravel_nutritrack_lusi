<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>@yield('title')</title>
</head>
<body>
  @include('partials.sidebar')
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Nutrient Admin</span>
      </div>
    </nav>

    <div class="home-content">
      @yield('content')
        <h3>SELAMAT DATANG DI NUTRITRACK</h3>
      
      
    </div>
    <div class="home-content">
			<h2 id="text"></h2>
			<div id="date" style="margin-bottom: 20px;"></div>
			<div class="cardBox">
			<div class="card">
					<div>
						<div class="numbers">1</div>
						<div class="cardName">Food</div>
					</div>
					<div class="iconBx">
						<i class="bx bx-dish"></i>
					</div>
				</div>
				<div class="card">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Nutrient Intake</div>
                    </div>
                    <div class="iconBx">
                        <i class="bx bx-dish"></i>
                    </div>
                </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
			let sidebarBtn = document.querySelector(".sidebarBtn");
			sidebarBtn.onclick = function () {
				sidebar.classList.toggle("active");
				if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
				} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
  </script>
  <style>
		.cardBox {
			position: relative;
			width: 100%;
			padding: 20px;
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-gap: 50px;
		}

		.cardBox .card {
			position: relative;
			padding: 20px;
			border-radius: 20px;
			display: flex;
			justify-content: space-between;
			cursor: pointer;
			box-shadow: 0 10px 25px rgba(0, 0, 0, 0.20);
		}

		.cardBox .card .numbers {
			position: relative;
			font-weight: 500;
			font-size: 2.5rem;
		}

		.cardBox .card .cardName {
			font-size: 1.3rem;
			margin-top: 5px;
		}

		.cardBox .card .iconBx {
			font-size: 4.5rem;
			color: darkslateblue;
		}

		.cardBox .card:hover {
			background: #c7c0e9;
		}
	</style>

</body>
</html>
