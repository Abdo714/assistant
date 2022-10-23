<?php
function getsetting($settingname ="sitename"){

    return App\SiteSetting::where("namesetting",$settingname)->get()[0]->value;

}
