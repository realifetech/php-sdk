<?php


namespace LiveStyled;


use LiveStyled\Exception\ConfigParameterRequiredException;
use LiveStyled\Exception\InvalidConfigValueException;
use LiveStyled\Exception\UnsupportedConfigParameterException;

class RealifeServiceResolver
{
    const CONFIG_ENDPOINT = 'endpoint';
    const CONFIG_REGION = 'region';
    const CONFIG_ENVIRONMENT = 'environment';
    const CONFIG_VPC = 'vpc';
    const CONFIG_CREDENTIALS = 'credentials';
    const CONFIG_AUTH_TYPE = 'auth_type';

    const SUPPORTED_AUTH_TYPES = [
        'client_credentials',
        'api_key'
    ];

    const SUPPORTED_ENVIRONMENTS = [
        'prod',
        'staging',
        'dev'
    ];

    const SUPPORTED_REGIONS = [
        'eu-west',
        'us-east'
    ];

    const CONFIG_SCHEMA = [
        self::CONFIG_ENDPOINT,
        self::CONFIG_REGION,
        self::CONFIG_ENVIRONMENT,
        self::CONFIG_VPC,
        self::CONFIG_CREDENTIALS,
        self::CONFIG_AUTH_TYPE
    ];

    private $endpoint;
    private $region;
    private $environment;
    private $vpc;
    private $credentials;
    private $authType;

    /**
     * RealifeServiceResolver constructor.
     * @param $config
     * @throws UnsupportedConfigParameterException
     * @throws ConfigParameterRequiredException
     * @throws InvalidConfigValueException
     */
    public function __construct($config)
    {
        $this->validateConfig($config);
        $this->setRegion($config[self::CONFIG_REGION]);
        $this->setEnvironment($config[self::CONFIG_ENVIRONMENT]);
        $this->setVpc($config[self::CONFIG_VPC]);
        $this->setAuthType($config[self::CONFIG_AUTH_TYPE]);
        $this->credentials = $config[self::CONFIG_CREDENTIALS];
        $this->endpoint = $config[self::CONFIG_ENDPOINT];
    }

    /**
     * @param string $serviceIdentifier
     * @return ServiceClient
     * @throws Exception\ServiceNotFoundException
     */
    public function getService(string $serviceIdentifier): ServiceClient
    {
        $service = (new ServiceMap())->resolve($serviceIdentifier);

        return new $service($this->endpoint, [$this->authType => $this->credentials]);
    }

    /**
     * @param $config
     * @return bool
     * @throws UnsupportedConfigParameterException
     * @throws ConfigParameterRequiredException
     */
    private function validateConfig($config)
    {
        $configKeys = array_keys($config);
        $schemaKeys = self::CONFIG_SCHEMA;
        $res = array_merge(array_diff($configKeys, $schemaKeys), array_diff($schemaKeys, $configKeys));

        if (empty($res)) {
            return true;
        }

        $field = $res[0];

        if (in_array($field, self::CONFIG_SCHEMA)) {
            throw new ConfigParameterRequiredException($field);
        } else {
            throw new UnsupportedConfigParameterException($field);
        }
    }

    /**
     * @param $environment
     * @throws InvalidConfigValueException
     */
    private function setEnvironment($environment)
    {
        $this->validateSupported($environment, self::CONFIG_ENVIRONMENT, self::SUPPORTED_ENVIRONMENTS);

        $this->environment = $environment;
    }

    /**
     * @param $region
     * @throws InvalidConfigValueException
     */
    private function setRegion($region)
    {
        $this->validateSupported($region, self::CONFIG_REGION, self::SUPPORTED_REGIONS);

        $this->region = $region;
    }

    /**
     * @param $value
     * @param $configKey
     * @param $configArray
     * @throws InvalidConfigValueException
     */
    private function validateSupported($value, $configKey, $configArray)
    {
        if (!in_array($value, $configArray)) {
            throw new InvalidConfigValueException([$value, $configKey]);
        }
    }

    /**
     * @param $vpc
     * @throws InvalidConfigValueException
     */
    private function setVpc($vpc)
    {
        if (!is_bool($vpc)) {
            throw new InvalidConfigValueException([$vpc, self::CONFIG_VPC]);
        }

        $this->vpc = $vpc;
    }

    /**
     * @param $authType
     * @throws InvalidConfigValueException
     */
    private function setAuthType($authType)
    {
        $this->validateSupported($authType, self::CONFIG_AUTH_TYPE, self::SUPPORTED_AUTH_TYPES);

        $this->authType = $authType;
    }
}
