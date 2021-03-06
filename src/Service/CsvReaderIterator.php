<?php declare(strict_types=1);

namespace Freshp\Example\Service;

final class CsvReaderIterator
{
    private $filename;
    private $separator;

    public function __construct(string $filename, string $separator = ';')
    {
        $this->filename = $filename;
        $this->separator = $separator;
    }

    public function read(): iterable
    {
        if (true !== file_exists($this->filename)) {
            throw new \RuntimeException(sprintf('file do not exist: %s', $this->filename));
        }

        $handle = fopen($this->filename, "rb");
        if (false === $handle) {
            throw new \RuntimeException(sprintf('could not open file: %s', $this->filename));
        }

        $result = new \ArrayIterator();
        while (false === feof($handle)) {
            $result->append(fgetcsv($handle, 0, $this->separator));
        }

        fclose($handle);

        return $result;
    }
}
