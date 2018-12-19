# Vortrag

* "Waaaas, du verwendest noch array´s?"
    * JA
* Interfaces aus dem core (es gibt mehr in der SPL (Standard PHP Library))
   * Throwable
   * ArrayAccess
   * Countable
   * Serializable
   * iterable
        * array
        * Traversable
            * Iterator
                * Generator
            * IteratorAggregate
* Was bedeutet, dass wir einfach statt typehint `: array` --> `: iterable` einsetzen.
    * ganz so einfach ist es nicht --> php core methods
* für die Verarbeitung ändert sich eigentlich nichts
    * wenn man Daten nur "umherschieben" will 
* für das Erstellen benötigt man eine eigene Methode
    * strukturierter Code
* Wie counte ich ein Ergebnis?
    * wieder als array :(
* Wie nutze ich trotz Generator ein array?
    * iterator_to_array

ab in den Code...

### Execute manual test
1. run php bench
    ```
    ./vendor/bin/phpbench run ./benchmarks/TimeConsumerBench.php --report=aggregate
    ```
2. run phpunit
    ```
    ./vendor/bin/phpunit.phar -c ./phpunit.xml --debug --verbose
    ```
    * try to run it with php72
3. Execute PHPSTAN checks
    ```
    ./vendor/bin/phpstan.phar analyse -l max src/
    ```
    
# read list
## iterator and generator
* http://php.net/manual/de/language.generators.syntax.php
* https://www.sitepoint.com/generators-in-php/
* https://www.sitepoint.com/memory-performance-boosts-with-generators-and-nikiciter/
* https://www.entropywins.wtf/blog/2017/10/16/introduction-to-iterators-and-generators-in-php/ 
* https://github.com/nikic/iter
* https://medium.com/tech-tajawal/use-memory-gently-with-yield-in-php-7e62e2480b8d
* https://medium.com/async-php/co-operative-php-multitasking-ce4ef52858a0
* https://wiki.php.net/rfc/iterable

## php73
* https://entwickler.de/online/php/neuerungen-php-7-3-features-579855456.html
