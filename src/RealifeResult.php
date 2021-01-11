<?php


namespace LiveStyled;


class RealifeResult
{
    /** @var array */
    private $data;
    private $total;

    /**
     * RealifeResult constructor.
     * @param Item[] $data
     * @param int $total
     */
    public function __construct(array $data, int $total)
    {
        $this->data = $data;
        $this->total = $total;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    public function getGenerator()
    {
        foreach ($this->data as $item) {
            yield $item;
        }
    }

    public function __toString()
    {
        return json_encode($this->data, JSON_PRETTY_PRINT);
    }
}
