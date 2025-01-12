# PHP Array Unpacking Bug

This example demonstrates a common error when using PHP's argument unpacking operator (...) with functions that expect array arguments.  The incorrect usage leads to a `TypeError` because the function expects a single array, not multiple individual arguments. The solution shows how to avoid the error by passing the array directly.