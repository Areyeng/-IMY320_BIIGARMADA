<?php require_once('header.php'); ?>
<div class="container">

	<div class="project">
		<div class="heading">
			<h2 class="title">Title</h2>
			<h3 class="subtitle">Subtitle</h3>
		</div>
		<div class="cover">
			<img src="" alt="">
			<div class="hexagon"></div>
		</div>
		<div class="description">
			<p class="preview">dhthb hbrfv fbvrb rbvre uvnrej bfvurenu vhreu nrvjre renne uv rul hlreh evbr hbvr rbver uervberrvrev</p>
		</div>
		<div class="view-project"></div>
	</div>

</div>
<?php require_once('footer.php'); ?>

<?php 

	// path to your JSON file
	$file = '../data/projects.json'; 
	// put the content of the file in a variable
	$data = file_get_contents($file); 
	// JSON decode
	$obj = json_decode($data); 
	// display the name of the first person
	echo $obj[0]->name;

?>