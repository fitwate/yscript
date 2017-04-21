#!/usr/bin/env perl
#Date: Sun Mar 12 13:07:21 CST 2017

use strict;

&max(3,2);

sub max{
    #state 子程序变量，多次调用会累加
    my($value1,$value2);
    if (@_ !=2){
        print "WARNING! &max should ge exactly two arguments!\n";
	exit(1);
    }
    my($value1,$value2) = @_;
    if ($value1 > $value2){
	print "max key is $value1";
    }
    elsif ($value2 > $value1){
        print "max key is $value2";
    }
    else{
        print "$value1 equal  $value2 ";
    }
}

print "\n";
my @names= qw/one two three four five/;
print &which_element_is("three",@names);

sub which_element_is{
    my($what,@array) = @_;
    foreach(0..$#array){
        if($what eq $array[$_]){
            return $_;
        }
    }
    return -1;

}
