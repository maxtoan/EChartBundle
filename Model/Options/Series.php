<?php

/*
 * This file is part of the Máximo Sojo - package.
 * 
 * (c) https://maxtoan.github.io/
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Maximosojo\EChartsPHP\Model\Options;

/**
 * Series
 * 
 * @author Máximo Sojo <maxsojo13@gmail.com>
 */
class Series
{
    /**
     * Name
     * @var string
     */
    protected $name;

    /**
     * Radius
     * @var string
     */
    protected $radius;

    /**
     * Center
     * @var string
     */
    protected $center;

    use \Maximosojo\EChartsPHP\Model\Traits\TypeTrait;
    use \Maximosojo\EChartsPHP\Model\Traits\DataTrait;

    /**
     * Legend constructor.
     */
    public function __construct()
    {
        $this->data = new Data();
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $radius
     *
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * @param string $center
     *
     * @return $this
     */
    public function setCenter($center)
    {
        $this->center = $center;

        return $this;
    }
}
