<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
?>
<div class="form-group">
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-user"></i></span>
		<input type="text" name="username" required class="form-control" placeholder="{$word.memberName}"
		data-fv-remote="true"
		data-fv-remote-url="{$url.register_userok}"
		data-fv-remote-message="{$word.userhave}"

		data-fv-notempty-message="{$word.noempty}"

		data-fv-stringlength="true"
		data-fv-stringlength-min="2"
		data-fv-stringlength-max="30"
		data-fv-stringlength-message="{$word.usernamecheck}"
		/>
	</div>
</div>
<div class="form-group">
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
		<input type="password" name="password" required class="form-control" placeholder="{$word.password}"
		data-fv-notempty-message="{$word.noempty}"

		data-fv-identical="true"
		data-fv-identical-field="confirmpassword"
		data-fv-identical-message="{$word.passwordsame}"

		data-fv-stringlength="true"
		data-fv-stringlength-min="6"
		data-fv-stringlength-max="30"
		data-fv-stringlength-message="{$word.passwordcheck}"
		>
	</div>
</div>
<div class="form-group">
	<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
		<input type="password" name="confirmpassword" required data-password="password" class="form-control" placeholder="{$word.renewpassword}"
		data-fv-identical="true"
		data-fv-identical-field="password"
		data-fv-identical-message="{$word.passwordsame}"
		data-fv-notempty-message="{$word.noempty}"
		>

	</div>
</div>
<?php
if($c['met_memberlogin_code']){
	$random = random(4, 1);
?>
<div class="form-group">
    <div class="input-group input-group-icon">
        <span class="input-group-addon"><i class="fa fa-shield"></i></span>
        <input type="text" name="code" required class="form-control" placeholder="{$word.memberImgCode}" data-fv-notempty-message="{$word.noempty}">
        <div class="input-group-addon p-5 user-code-img">
            <img src="{$url.entrance}?m=include&c=ajax_pin&a=dogetpin&random={$random}" title="{$word.memberTip1}" class='met-getcode' align="absmiddle" role="button">
            <input type="hidden" name="random" value="{$random}">
        </div>
    </div>
</div>
<?php } ?>