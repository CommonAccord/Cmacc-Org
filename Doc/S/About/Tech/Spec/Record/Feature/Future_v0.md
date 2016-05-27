Ti=Future Possible Extensions

0.sec=The following seem necessary extensions to parsing:

1.sec=There needs to be a naming convention for the _second, and _third_, etc. highest priority Key in the Record's namespace.  Foo=This value used to say: {Foo//-1}.

2.sec=The namespace of Records can be augmented by specifying another Root.  This additional Root2 adds to the namespace of the Root in the same way that referencing a Record2 adds to the namespace of a Record.  The Root2 is treated as having higher priority than the basic Root.

3.0.sec=It is desired to keep the functions and syntax very simple.  The functions that remain somewhat cumbersome include: 

3.1.sec=Automatic numbering of cross-references.  These can be parameterized, but there is still a bit of work.  (Can be handled via interface.)

3.2.sec=Calculation of values such as sums of a column of numbers.  Can be handled by interface, or by smart contract.  

3.00.sec=In each case, persisting the value as a standard Key/Value in a Record may increase certainty by keeping the data simple.   Perhaps there is a way for a user to specify a test for a value, and have the test be part of the Record (not transcluded, but invoked otherwise).  

3.=[Z/ol/s2]
  
=[Z/ol/s3]