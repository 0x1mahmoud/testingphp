<php
$rootUname= $_GET['rootUname'];
$array = array();

if (init_get('safe_mode')) {
    $array['phpSafeMode'] = '<strong><font class="bad">Fail - php safe mode is on - turn it off before you proceed with the installation</strong></font>br/>';
} else {
    $array['phpSafeMode'] = '<stron><font class="Good">Pass - php safe mode is off</strong></font><br/>';
}
/*
$rootTestCmd1 = 'sudo -S -u ' . $rootUname . ' chmod 0777 /home 2>&1';
exec($rootTestCmd1, $cmdOutput, $err);
$homeDirPerms = substr(sprintf('%o', fileperms('/home')), -4);
if ($homeDirPerms == '0777') {
    $array['rootDetails'] = '<strong><font class"Good">Pass - root account details</strong></font><br/>';
} else {
     $array['rootDetails'] = '<strong><font class"Bad">Pass - root account details</strong></font><br/>';
$cmdOutput[0] . '</strong></font><br/>';
}

$rootTestCmd2 = 'sudo -S -u ' . $rootUname . ' chmod 0755 /home 2>&1';
exec(rootTestCmd2, cmdOutput, $err);
echo jason_encode($array);
