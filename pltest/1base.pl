#!/usr/bin/env perl
#Date: Sun Mar 12 13:08:59 CST 2017

use strict;

my($line);

print "@ARGV \n";
#while( <>){
#    chomp;
#    print " It was $_ that I saw in some stoogel-liek file!\n";
#}

print 'Please input:';
$line= <STDIN>;
if ($line eq "\n") {
    print "That was just a blank line!\n";    
}
else{
    chomp($line);
    print "That line of input was:$line";
}

#while
my($count);
print "\n#while learn \n";
$count = 0;
while ($count < 10){
    $count += 2;
    print "count is now $count \n";
}

my($undefkey);
print $undefkey;

print 1*3;
print "\n";
print 1x3;
