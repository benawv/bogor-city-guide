<div class="box-berita">
	<h2 class="title-box-berita"><?php echo $this->input("title-box");?></h2>
	<?php
		$db = Pimcore_Resource_Mysql::get();
		$sql = "SELECT doc.id, doc_e.data from documents as doc inner join documents_elements as doc_e on doc.id=doc_e.documentId
				where doc.path LIKE '%/arsip-berita/' and doc.published=1 and doc_e.type='date'
				ORDER BY doc_e.data DESC limit 4"; //or whatever you need to do.
		
		$list = $db->fetchAll($sql);
		
		for ($i = 0; $i < count($list); $i++)
		{
			$id = $list[$i]['id'];
			////echo $id."<br />";
			$list2 = new Document_List();
			$list2->setCondition("id=".$id);
			$entries = $list2->load();
			//print_r($entries[0]->title);
			//$srcImg = $entries[0]->elements["imgBerita"]->image->path.$entries[0]->elements["imgBerita"]->image->filename;
?>
			<div>
				<span class="text-bold"><a href="<?php echo $entries[0]->path."".$entries[0]->key;?>"><?php echo $entries[0]->title;?></a></span>
			</div>
			<div>
				<span class="text-bold"><?php echo date("M d, Y",$list[$i]['data']);?></span> - <span>
				<?php
					echo limit_words($entries[0]->elements["textareaBerita"]->text,10)."...";
				?>
				</span>
			</div>
			<br />
<?php
		}
		if($this->editmode) {
?>
			<span class="icon-panah"></span>&nbsp;
			<span class="selengkapnya"><?php echo $this->link("linkBerita");?></span>
		<?php
		}else{
		?>
			<a target="<?php echo $this->link("linkBerita")->getTarget();?>" href="<?php echo $this->link("linkBerita")->getHref();?>" class="linkInv">
				<span class="icon-panah"></span>&nbsp;
				<span class="selengkapnya"><?php echo $this->link("linkBerita")->getText();?></span>	
			</a>
		<?php }?>
</div>