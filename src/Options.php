<?php

namespace Protobuf\Compiler;

/**
 * Options given in the command line
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class Options
{
    /**
     * @var string[]
     */
    protected $psr4;

    /**
     * @var bool
     */
    protected $verbose = false;

    /**
     * @var bool
     */
    protected $generateImported = false;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @return string
     */
    public function getVerbose()
    {
        return $this->verbose;
    }

    /**
     * @return bool
     */
    public function getGenerateImported()
    {
        return $this->generateImported;
    }

    /**
     * @return array
     */
    public function getPsr4()
    {
        return $this->psr4;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param array $params
     *
     * @return \Protobuf\Compiler\Options
     */
    public static function fromArray(array $params)
    {
        $options = new Options();

        if (isset($params['verbose'])) {
            $options->verbose = (bool) $params['verbose'];
        }

        if (isset($params['generate-imported'])) {
            $options->generateImported = (bool) $params['generate-imported'];
        }

        if (isset($params['psr4'])) {
            $options->psr4 = $params['psr4'];
        }

        if (isset($params['namespace'])) {
            $options->namespace = $params['namespace'];
        }

        return $options;
    }
}
