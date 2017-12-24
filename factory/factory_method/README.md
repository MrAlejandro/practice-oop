# Factory method
## Definition
The **Factory method** pattern, defines interface for object creation, but allows its subclasses to choose the class of a new instance. Therefore `Fabric method` delegates creation process to subclasses.

### Notes
1. The pattern is based on inheritance, rather than composition like for `abstract factory`
2. Useful for separating the client code from instances creation, and when precise end classes set is known in advance.
