<?php
class strana_controller extends controller{
	public function __construct($parms){
		parent::__construct();

		$panel = $this->loadModel("panel");
		$stranica = $this->loadModel("stranica");

		$stranice = $stranica->selectByArgument("shortname", $parms[0]);

		$paneli = $panel->selectByArgument("parent_id", $stranice[0]["id"]);

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
foreach($paneli as $panel){
?>
					<div class="panel post strana-panel">
						<?=$panel["content"];?>
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
