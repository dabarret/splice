<?php include_once("../includes/headers.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<header>
			<?php
				$activePage = "studentPage";
				include_once("../includes/nav.inc.php");
			?>
		</header>
		<section class="section-main">
			<div class = "student-uploads">
				<div class="uploads-heading">
					<h1 class="uploads-title">My Uploads</h1>
					<div class="filter-uploads">
						<h2>Uploads Filter</h2>
						<div class="filter-type">
							<p class="filter-year">Year</p>
							<span>All (default): </span><input type="checkbox" name="year2019" value="2019"><br>
							<span>2019</span> <input type="checkbox" name="year2019" value="2019">
							<span>2020</span> <input type="checkbox" name="year2020" value="2020">
						</div>
						<div class="filter-type">
							<p class="filter-month">Month</p>
							<span>All (default):</span> <input type="checkbox" name="monthAll" value="allMonth"><br>
							<span>Jan:</span> <input type="checkbox" name="monthJan" value="January">
							<span>Feb:</span> <input type="checkbox" name="monthFeb" value="February">
							<span>Mar:</span> <input type="checkbox" name="monthApr" value="March"><br>
							<span>Apr:</span> <input type="checkbox" name="monthMay" value="April">
							<span>May:</span> <input type="checkbox" name="monthJun" value="May">
							<span>Jun:</span> <input type="checkbox" name="monthJul" value="June"><br>
							<span>Jul:</span> <input type="checkbox" name="monthAug" value="July">
							<span>Aug:</span> <input type="checkbox" name="monthSep" value="August">
							<span>Sep:</span> <input type="checkbox" name="monthOct" value="September"><br>
							<span>Oct:</span> <input type="checkbox" name="monthNov" value="October">
							<span>Nov:</span> <input type="checkbox" name="monthDec" value="November">
							<span>Dec:</span> <input type="checkbox" name="monthAll" value="December">
						</div>
						<input id="apply-filters" name="filter-btn" type="button" value="Apply">
					</div>
				</div>
			</div>
		</section>
		<input id="student-data-upload" name="upload" type="button" value="+Upload">
	</body>
</html>
