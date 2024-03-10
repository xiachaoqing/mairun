<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
$data=array_merge($data,$data['handle']);
unset($data['handle']);
?>
<input type="hidden" name="admin_folder_safe" value="<?php echo $data['admin_folder_safe'];?>" data-toggle="modal" data-target=".admin-folder-safe-modal">
<div class="card d-none d-md-flex">
	<div class="card-header">
		<h3 class="h6 mb-0 float-left"><?php echo $word['website_overview'];?></h3>
	</div>
	<div class="card-body py-4">
		<div class="row text-center mx-0 site-summarize-list">
			        <?php
            $sub = is_array($data['summarize']) ? count($data['summarize']) : 0;
            $cycleindex = 50;
            
            if(!is_array($data['summarize']) && $data['summarize']){
                $data['summarize'] = explode('|',$data['summarize']);
            }

            foreach ($data['summarize'] as $index => $val) {
                if(is_numeric($index) && $index >= $cycleindex){
                    break;
                }

                if(is_array($val)){
                    $val['_index'] = $index;
                    $val['_first'] = $index == 0 ? true : false;
                    $val['_last']  = $index == ($sub-1) ? true : false;
                    $val['sub']    = $sub;
                }

                $v = $val;
            ?>
			<?php
			$url='#/manage/?view_type=module&module='.$v['_index'];
			$v['_index']=='job' && $url.='&head_tab_active=1';
			?>
			<div class="col-4" style="width: 20%;max-width: 20%;">
				<div class="card border-none transition500">
					<a href="<?php echo $url;?>" class="card-body">
						<p class="h6 text-content"><?php echo $v['name'];?></p>
						<span class="h3"><?php echo $v['total'];?></span>
					</a>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>
<!--     <?php if($data['home_app_ok']){ ?>
<div class="card mt-3">
	<div class="card-header">
		<h3 class="h6 mb-0 float-left">MetInfo <?php echo $word['upfiletips37'];?></h3>
		<a href="https://www.metinfo.cn/" target="_blank" class="float-right"><?php echo $word['columnmore'];?> <i class="fa fa-angle-right"></i></a>
	</div>
	<div class="card-body py-2 home-news-list" data-url="https://www.metinfo.cn/metv5news.php?action=json&listnum=6">
		<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
?>
<div class="text-center py-5 <?php echo $loader_class;?>"><?php echo $word['fliptext2'];?></div>
<?php unset($loader_class); ?>
	</div>
</div>
<?php } ?> -->