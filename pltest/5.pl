#!/usr/bin/env perl
#
#Date: Sun Mar 12 13:07:21 CST 2017

use strict;

chomp(my $date = `date` );

$^I = ".bak";

while (<>){
    s/^#Date:.*/#Date: $date/;
    print ;
}
