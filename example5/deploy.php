<?php
declare(strict_types=1);

namespace Deployer;

set('hostname', 'localhost');

task('uptime', function () {
	$result = run('uptime');
	writeln("{{hostname}} uptime: $result");
});
