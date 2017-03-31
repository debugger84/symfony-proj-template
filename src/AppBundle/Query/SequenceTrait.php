<?php


namespace AppBundle\Query;


trait SequenceTrait
{
    /**
     * @var int
     */
    protected $limit = 0;

    /**
     * @var int
     */
    protected $offset = 0;


    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit)
    {
        if ($limit < 0) {
            $limit = 0;
        }
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset(int $offset)
    {
        if ($offset < 0) {
            $offset = 0;
        }
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPaginated()
    {
        return ($this->limit > 0);
    }

    public function disablePagination()
    {
        $this->limit = 0;
    }
}