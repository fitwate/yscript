#!/usr/bin/env perl
#Date: Sun Mar 12 13:07:21 CST 2017

use strict;

&error('can not open /etc/passwd!') unless open(PASSWD, '/etc/passwd');

sub error
{
	my $retmsg;

	$retmsg = shift;

	print "=error_msg=$retmsg";
	print "+error_error\n";

	exit(1);
}
