# Template method
## Definition
The **Template method** pattern encapsulates the algorithm inside the method, and leaves defining the implementation of some steps to it's subclasses.
Subclasses might re-define some parts of algorithm without changing its structure.
Some steps might be omitted (used is statement for example).
Some new logic might be added using hooks.
