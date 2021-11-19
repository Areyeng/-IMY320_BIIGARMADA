<?php require_once('header.php'); ?>

<?php 

	// path to your JSON file
	$file = '../data/projects.json'; 
	// put the content of the file in a variable
	$data = file_get_contents($file); 
	// JSON decode
	$obj = json_decode($data); 
	// display the name of the first person

?>
<div class="content">
    <h1 class="page-header"><b>PROJECTS</b></h1>
	<div class="projects">
		<?php 
			for($i=0; $i<sizeof($obj); $i++){
		?>
		<div class="project">
			<!-- <div class="clip-hex" style=""> -->
				<?php
					echo "<div class='clip-hex' style='background-color: $obj[$i]->cover;'>";
				?>
				<div class="heading">
					<h2 class="title"><?php echo $obj[$i]->name; ?></h2>
					<h3 class="subtitle"><?php echo $obj[$i]->type; ?></h3>
				</div>
				<div class="cover">
					<!-- <img src="../img/inn2.jpg" alt=""> -->
					<div class="hexagon"></div>
				</div>
				<div class="description">
					<p class="preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut tortor quis diam tincidunt pharetra. Nulla at neque sit amet turpis fringilla dapibus. Mauris id condimentum sapien. Maecenas placerat et augue id pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada risus tortor. Cras euismod mi ornare tincidunt semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc commodo turpis cursus, varius ante vel, venenatis felis.</p>
				</div>
				<div class="view-project"></div>
			</div>

			<div class="project-preview pro-1">
				<div class="preview-title">
					<h2><?php echo $obj[$i]->name; ?></h2>
					<h3><?php echo $obj[$i]->type; ?></h3>
				</div>
				<div class="preview-desc">
					<p><?php echo $obj[$i]->preview; ?></p>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>
<?php require_once('footer.php'); ?>