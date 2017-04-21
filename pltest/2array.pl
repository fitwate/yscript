#!/usr/bin/env perl
#Date: Sun Mar 12 13:07:21 CST 2017

use strict;
my(@array,@arraydata);

print (1..5);
print "\n";
print qw (a b c d);
print "\n";
print qw !a b c d!;
print "\n";


@array = 1..9;
print @array;
print "\n";
print "@array \n";

print pop(@array);
print "\n";

print "@array \n";

push (@array,'zz');
print "@array \n";


shift(@array);
print "\n";

print "@array \n";

unshift (@array,'aa');
print "@array \n";

print (splice @array,2);
print "\n";
print (splice @array,1,3);
print "\n";
print "@array \n";

@arraydata=qw(a b c d e f);

foreach $a (@arraydata){
    print "one arraydata is $a \n";
}

print "\n";
foreach  (1..5){
    print "one arraydata is $_ \n";
}

print reverse @arraydata;
print "\n";

print qw(a c e f b d);
print "\n";
print sort qw(a c e f b d);

print "\n";

#hash array
print 'hash array';
print "\n";
my %hash = (
    'a' => 1,
    'b' => 2,
    'c' => 3,
);

my @k = keys %hash;
print "@k\n";
my @v = values %hash;
print "@v\n";
my $count = keys %hash;
print "$count \n";
my($key,$value);
while ( ($key,$value) = each %hash){
    print "$key => $value \n";
}
print $hash{'c'};
print "\n";

print %ENV;
print "\n";
print "\n";

while ( ($key,$value) = each %ENV){
    print "$key => $value \n";
}
