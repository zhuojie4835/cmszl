<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php 
// defined('IN_ADMIN') or exit('No permission resources.');
// $show_validator = true;
// include $this->admin_tpl('header', 'common');
pc_base::load_sys_class('form','',0);
// $cache_projects = get_projects('all');
// $cache_univs = get_univs('all');
// $cache_majors = get_majors('all');
// $cache_channel = getcache('channel','common');
?>

<tr>
<th width="80"><strong>上传图片:</strong></th>
<td><?php echo form::images('football[badge]', 'badge', '', 'football');?></td>
</tr>