<?php
class home extends controller{
	public function __construct($parms){
		parent::__construct();

		$vesti = $this->loadModel("vest");

		ob_start();
?>
		<div class="sadrzaj container">
			<div class="row">
					<!--<div class="col col-sm-12">
					<div class="panel">
						<div class="panel-body">
								You may want to put some news here <span class="glyphicon glyphicon-heart-empty"></span>
						</div>
					</div>
				</div>-->

				<div class="col col-sm-12">

<?php
$vestiR = $vesti->selectAll();

foreach($vestiR as $vest){
?>
					<div class="panel post">
						<h1><?=$vest["title"];?></h1>
						<p>Додато: 03.03.2015.</p>

<?php
if($vest["tumbnail"] != ""){
?>
						<img src="<?=$this->getDynamicResource($vest["tumbnail"]);?>" class="glavna">
<?php
}
?>
						<?=$this->mb_word_wrap($vest["content"], 500);?>

						<br><br>

						<a href="/vesti/<?=$vest["id"];?>" class="btn btn-lg btn-primary">Прочитајте више...</a>
						<br><br>
					</div>

<?php
}
?>

				</div>
			</div>

			<!--<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
						</li>
					</ul>
				</nav>-->

			<footer class="panel">&copy; Шабачка гимназија <?=date("Y");?> | CDN спонзорисао <a target="_blank" href="https://www.maxcdn.com/">MaxCDN</a> | Технички реализовао <a target="_blank" href="http://nemanjan00.com">Немања Недељковић</a></footer>
		</div>
<?php
		$content = ob_get_clean();

		$carousel = $this->loadView("carousel");

		$carousel->render();

		$carouselContent = ob_get_clean();

		$page = $this->loadView("page");

		$page->setContent($content);
		$page->setCarouselContent($carouselContent);

		$page->render();

	}
}
