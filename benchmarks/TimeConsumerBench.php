<?php

namespace Freshp\Example\Benchmarks;

use Freshp\Example\Service\CsvReader;
use Freshp\Example\Service\CsvReaderIterator;
use Freshp\Example\Service\CsvReaderOld;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

class TimeConsumerBenchmark
{
    /**
     * @Revs(10)
     * @Iterations(5)
     */
    public function benchCsvReadWithYield()
    {
        $csvReader = new CsvReader(__DIR__ . '/../example/example100000.csv');
        $csvReader->read();
    }

    /**
     * @Revs(10)
     * @Iterations(5)
     */
    public function benchCsvReadWithArray()
    {
        $csvReader = new CsvReaderOld(__DIR__ . '/../example/example100000.csv');
        $csvReader->read();
    }

    /**
     * @Revs(10)
     * @Iterations(5)
     */
    public function benchCsvReadWithIterator()
    {
        $csvReader = new CsvReaderIterator(__DIR__ . '/../example/example100000.csv');
        $csvReader->read();
    }
}
